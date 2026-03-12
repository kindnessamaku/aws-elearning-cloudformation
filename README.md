# E-Learning Platform Deployment on AWS (Infrastructure as Code)


## Overview
This project demonstrates the deployment of an open-source e-learning platform on AWS using Infrastructure as Code (IaC) with AWS CloudFormation.
 The primary goal of the project is to automate infrastructure provisioning, ensure repeatability, and design a highly available, scalable, and cost-effective cloud architecture.
The entire environment — networking, compute, load balancing, and database — was provisioned declaratively using CloudFormation templates written in YAML, following cloud best practices.

## Key Features
  - **Infrastructure Automation**
    - **Version-controlled Architecture** : Infrastructure is managed as code, allowing for rapid disaster recovery, easy auditing, and seamless peer reviews.
    - **Automated Provisioning** : Reduced deployment time from hours to minutes by utilizing nested stacks and cross-stack references.
      
 - **Security and Compliance**
    - **Credential Hardening** : Integrated AWS Secrets Manager to eliminate hardcoded password.
    - **Least Privilege Access** : Implemented IAM Roles/Instance Profiles for EC2, allowing the application to securely talk to Secrets Manager without the need for static, high-risk Access Keys.
      
- **Elasticity & Scalability**
    - **Horizontal Scaling** : Configured an Auto Scaling Group (ASG) to dynamically adjust capacity based on real-time traffic demand, ensuring consistent performance during peak loads.
    - **Intelligent Load Balancing** : An Application Load Balancer (ALB) serves as the single point of contact, distributing traffic only to healthy targets across multiple Availability Zones.

- **High Availability & Reliability**
    - **Multi-AZ Fault Tolerance** : Architecture is distributed across multiple Availability Zones, ensuring that a single data center outage does not result in application downtime.
    - **Managed Database Reliability** : Leveraged Amazon RDS for automated backups, patching, and simplified failover management.

## Prerequisites
To deploy this project, ensure you have:

**AWS Account** : With appropriate permissions to create VPCs, EC2s, and RDS instances.

**AWS CLI**: Installed and configured with your credentials.

**Clone the Repository**

**Git installed locally**

## Architecture Overview

<p align="center">
  <img src="https://github.com/user-attachments/assets/b1cea774-81f6-4364-82db-344477f9e509" width="800" alt="AWS Architecture Diagram">
</p>


## Deployment Guide
  - **Step 1: Clone the Project Repository** : Before deploying to AWS, pull the CloudFormation templates and application source code to your local environment.

```
   git clone https://github.com/kindnessamaku/aws-elearning-cloudformation.git
   cd aws-elearning-cloudformation
```

 - **Step 2: **Infrastructure Provisioning (CloudFormation)**** :  Upload the **networking-stack.yaml**, the **app-stack.yaml** and then the **db-stack.yaml**. You will need to provide a DBPassword and DBUser. These are securely passed to AWS Secrets Manager.

 - **Step 3: Automated Server Configuration (UserData)** : The EC2 instances are automatically configured at launch using a UserData script embedded in the CloudFormation template. This ensures the "Web Tier" is ready to serve traffic immediately upon boot.
   - **What the script does** :

    **Environment Preparation**: Updates packages and installs the Apache web server (httpd), PHP, and Git.
   
    **Source Code Management** : Clones the e-learning application code directly from GitHub into the /var/www/html directory.

    **Dependency Injection** : Installs the aws-sdk-php via Composer to allow the app to communicate with AWS services.

     **Dynamic Configuration** : Uses !Sub to inject the RDS Endpoint as an environment variable so the application knows exactly where the database is located.


## Challenges & Key Lessons Learned

1. **CloudFormation Stack Conflict & Rollback Management**
    - Problem: I mistakenly attempted to update the existing Networking Stack using the Application Template. CloudFormation detected a logical mismatch that would have corrupted the underlying VPC resources.
   - Result: The stack entered an **UPDATE_ROLLBACK_COMPLETE** state.
Lesson Learned: This demonstrated the power of CloudFormation’s Safety Mechanism. It automatically reverted the infrastructure to the "Last Known Good" state, preventing a total environment outage.
   - Resolution: I decoupled the templates and deployed the Application Tier as a separate, independent stack.
  
    <table>
  <tr>
    <td align="center">
      <b>Stacks List</b><br>
      <img src="https://github.com/user-attachments/assets/88f837b3-6bc3-48ac-9a48-3233509c4aa7" width="300" alt="Networking Outputs List">
    </td>
    <td align="center">
      <b>Stacks List</b><br>
      <img src="https://github.com/user-attachments/assets/3e8b51d5-276f-4691-9773-5bef0e842cf0" width="300" alt="Application Outputs List">
    </td>
    <td align="center">
      <b>Stacks List</b><br>
      <img src="https://github.com/user-attachments/assets/af130341-54a3-4b3e-88ec-82bfca055559" width="300" alt="CloudFormation Resource Map">
    </td>
  </tr>
</table>

 
2. **Resolving "502 Bad Gateway" (Unhealthy Targets)**
   - Problem: After deployment, the Application Load Balancer (ALB) DNS returned a 502 Bad Gateway error. Upon inspection, all EC2 instances in the Target Group were marked Unhealthy.
   - Troubleshooting: Since the instances were in Private Subnets, I couldn't use SSH. Instead, I used **AWS Systems Manager (SSM) Session Manager** to gain secure shell access.
   - Investigation: I ran the following to inspect the boot logs :
  ```
 sudo tail -f /var/log/cloud-init-output.log
```
  
   -  Finding: The UserData script had a syntax error that prevented the Apache (httpd) service from starting.
   -  Resolution: I corrected the script, updated the Launch Template, and triggered an instance refresh. The targets passed health checks, and the homepage loaded successfully.

<table>
  <tr>
    <td align="center">
      <b>502 BadGateway</b><br>
      <img src="https://github.com/user-attachments/assets/9462f4bc-cc30-460d-9c25-b8929921adee" width="450" alt="502 Bad Gateway">
    </td>
    <td align="center">
      <b>Resolution</b><br>
      <img src="https://github.com/user-attachments/assets/5b2d725b-1a30-456b-84cc-6a1de80650b5" width="450" alt="Successful Loading">
    </td>
  </tr>
</table>

3. **Debugging "504 Gateway Timeout" on Login**
   - Problem: The homepage loaded, but attempting to log in triggered a 504 Gateway Timeout.
   - Troubleshooting: A 504 error usually indicates a timeout between the Web Server and the Database (RDS).
   - Investigation: I used SSM Session Manager again to tail the Apache and PHP error logs:
   - Finding : The logs revealed PHP errors.
   - Resolution : I ensured required PHP extensions were installed and then the login and registration functionality worked as expected.

<table>
  <tr>
    <td align="center">
      <b>504 Gateway Timeout</b><br>
      <img src="https://github.com/user-attachments/assets/a183f2d9-ac58-401f-98be-a0f6c9524630" width="450" alt="504 Gateway Timeout">
    </td>
    <td align="center">
      <b>Resolution</b><br>
      <img src="https://github.com/user-attachments/assets/99521ce1-48ac-4887-919d-4f0e132d5755" width="450" alt="Loaded Successfully">
    </td>
  </tr>
</table>

## Key Achievements

- **Operational Agility** : Reduced deployment time from hours to minutes using CloudFormation.
- **Security Hardening** : Eliminated the need for SSH and public IPs by using SSM Session Manager.
- **Resiliency** : Implemented a self-healing architecture that automatically recovers from instance failures.

