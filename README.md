# E-Learning Platform Deployment on AWS (Infrastructure as Code)


## Overview
This project demonstrates the deployment of an open-source e-learning platform on AWS using Infrastructure as Code (IaC) with AWS CloudFormation.
 The primary goal of the project is to automate infrastructure provisioning, ensure repeatability, and design a highly available, scalable, and cost-effective cloud architecture.
The entire environment — networking, compute, load balancing, and database — was provisioned declaratively using CloudFormation templates written in YAML, following cloud best practices.

## AWS Services Used
- **AWS CloudFormation** : CloudFormation was used to provision and manage all infrastructure components as code. This enables automated and repeatable deployments, version control of infrastructure and safe rollbacks when updates fail.


- **Amazon VPC** : A custom Virtual Private Cloud was created to logically isolate the application and control network traffic.

- **Internet Gateway (IGW)**: Acts as the bridge between the VPC and the public internet, allowing the Application Load Balancer to receive incoming user traffic.
  
- **NAT Gateway**: Sits in a public subnet to allow instances in private subnets (like our web and database servers) to securely download software patches and updates without being directly exposed to the internet.

- **Elastic Load Balancer** (Application Load Balancer – ALB) : The ALB distributes incoming traffic across multiple EC2 instances and performs health checks to ensure availability.
  
- **Amazon EC2 & Auto Scaling Group** : EC2 instances host the application and are managed by an Auto Scaling Group to support scalability and fault tolerance.
  
- **Amazon RDS** : RDS was used as the managed relational database for the application, removing the overhead of manual database administration.
  
- **AWS Secrets Manager** : Secrets Manager securely stores database credentials instead of hardcoding them in application code or configuration files.
  
- **AWS Systems Manager (Session Manager)** : Session Manager provides secure, browser-based access to EC2 instances without requiring SSH access or public IP addresses.

- **AWS IAM** : IAM roles were attached to EC2 instances to allow secure access to AWS services such as Secrets Manager, following the principle of least privilege.


## Prerequisites
To deploy this project, ensure you have:

**AWS Account** : With appropriate permissions to create VPCs, EC2s, and RDS instances.

**AWS CLI**: Installed and configured with your credentials.

**Clone the Repository**

**Git installed locally**

## Architecture Overview

![reformed 3](https://github.com/user-attachments/assets/90a91956-9c1a-4ad2-9c0b-cd65f3353632)


Deployment Steps
Step 1: Infrastructure Provisioning with CloudFormation
I created multiple CloudFormation templates to provision the infrastructure in a modular manner:
Networking Stack
A custom VPC with:


Public subnets (for the ALB and NAT Gateway)


Private subnets (for EC2 instances and RDS)


Internet Gateway to allow outbound internet access


NAT Gateway to enable private instances to access the internet securely


Route tables to control traffic flow


Why this matters:
 Private subnets protect application and database resources from direct internet exposure, improving security.

Application Stack (Compute & Load Balancing)
Application Load Balancer with health checks


Security Groups to control inbound and outbound traffic


Auto Scaling Group for EC2 instances


IAM Role for EC2 to allow access to Secrets Manager and other AWS services


Why these choices:
The ALB improves availability by routing traffic only to healthy instances


Auto Scaling supports elasticity and fault tolerance


IAM roles eliminate the need for static credentials on EC2 instances


During deployment, I mistakenly attempted to update the networking stack using the application template. CloudFormation detected that the update would break existing resources and triggered an UPDATE_ROLLBACK_COMPLETE state, reverting the stack to the last known good configuration.
 This demonstrated CloudFormation’s built-in safety and rollback mechanism.
I corrected this by deploying the application stack separately, which completed successfully.

Database Stack
Amazon RDS deployed in private subnets


Database credentials stored securely in AWS Secrets Manager


Initially, the database stack failed due to an unsupported database engine version.
 Using DescribeStackEvents, I identified the root cause, updated the engine to a supported version, and successfully redeployed the stack.
At this point, all three tiers — networking, application, and database — were fully operational.

Step 2: Application Deployment and Troubleshooting
User Data Script & Application Setup
I cloned the application repository and configured the EC2 instances using a user data script.
 Key actions performed in the script included:
export AWS_REGION=us-east-1
export DB_ENDPOINT=<rds-endpoint>
yum install -y httpd php php-mysqli git
systemctl start httpd
systemctl enable httpd

The application code was placed under /var/www/html, which Apache uses as its web root.

Troubleshooting 502 Bad Gateway
When accessing the ALB DNS endpoint, I initially encountered a 502 Bad Gateway error.
 Upon checking the ALB target group, all targets were marked unhealthy, meaning the load balancer could not reach the application.
Since the EC2 instances were in private subnets, I connected using AWS Systems Manager Session Manager.
To inspect system logs, I ran:
sudo tail -f /var/log/cloud-init-output.log

From the logs, I identified multiple issues:
dnf command not found (Amazon Linux 2 uses yum)


Apache (httpd) was never installed or started


/var/www/html directory did not exist


The wrong repository (infrastructure repo instead of application repo) was being cloned


I updated the user data script to:
Replace dnf with yum


Install and start Apache correctly


Clone the correct application repository


Ensure a valid index.php existed for ALB health checks


After fixing these issues, the application homepage loaded successfully.

Troubleshooting 504 Gateway Timeout
When testing the login page, I encountered a 504 Gateway Timeout error.
 Using Session Manager again, I inspected Apache and PHP error logs:
sudo tail -f /var/log/httpd/error_log

The logs revealed PHP errors within the login script.
 After correcting the PHP issues and ensuring required PHP extensions were installed, the login and registration functionality worked as expected.
At this stage, the application was fully functional.

High Availability, Scalability, and Cost Optimization
High Availability
Multi-AZ architecture using public and private subnets


Application Load Balancer routes traffic only to healthy targets


Auto Scaling Group replaces failed instances automatically


Scalability
Auto Scaling dynamically adjusts EC2 capacity based on demand


Stateless application design allows horizontal scaling


Cost Effectiveness
Use of managed services (RDS, ALB) reduces operational overhead


Ability to delete and recreate infrastructure using CloudFormation avoids unnecessary costs


No always-on resources required outside deployment or testing windows



Conclusion
This project demonstrates practical experience with AWS infrastructure design, Infrastructure as Code, troubleshooting production-like issues, and implementing cloud best practices.
 All infrastructure can be recreated or destroyed safely using CloudFormation, while the source code and templates remain version-controlled in GitHub.

