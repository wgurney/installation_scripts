<?php
$TOKEN = shell_exec("curl -X PUT 'http://169.254.169.254/latest/api/token' -H 'X-aws-ec2-metadata-token-ttl-seconds: 21600'");
$SERVER_HOSTNAME = gethostname();
$INSTANCE_TYPE = shell_exec("curl -H 'X-aws-ec2-metadata-token: $TOKEN' http://169.254.169.254/latest/meta-data/instance-type");
$PLACEMENT = shell_exec("curl -H 'X-aws-ec2-metadata-token: $TOKEN' http://169.254.169.254/latest/meta-data/placement/availability-zone");

echo "Token: $TOKEN\n";
echo "Server Hostname: $SERVER_HOSTNAME\n";
echo "Instance Type: $INSTANCE_TYPE\n";
echo "Placement: $PLACEMENT\n";

# cd /var/www/html
# php test.php