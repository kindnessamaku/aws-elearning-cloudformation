<?php
require '/var/www/html/vendor/autoload.php';

use Aws\SecretsManager\SecretsManagerClient;

$client = new SecretsManagerClient([
    'region'  => getenv('AWS_REGION'),
    'version' => 'latest'
]);

$secretName = getenv('RDS_SECRET_ARN');

$result = $client->getSecretValue([
    'SecretId' => $secretName,
]);

$secret = json_decode($result['SecretString'], true);

$db_host = getenv('RDS_ENDPOINT');
$db_user = $secret['username'];
$db_pass = $secret['password'];
$db_name = 'elearningdb';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die('Database connection failed');
}
?>
