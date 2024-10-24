<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps Automation with Rahul Sharan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #35424a;
            color: white;
            text-align: center;
            padding: 1em 0;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 2em;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 600px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #848f8c;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #8e96d4;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #77a0e2;
        }

        footer {
            background-color: #35424a;
            color: white;
            text-align: center;
            padding: 1em 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <?php
    $TOKEN = shell_exec("curl -X PUT 'http://169.254.169.254/latest/api/token' -H 'X-aws-ec2-metadata-token-ttl-seconds: 21600'");
    $SERVER_HOSTNAME = gethostname();
    $INSTANCE_TYPE = shell_exec("curl -H 'X-aws-ec2-metadata-token: $TOKEN' http://169.254.169.254/latest/meta-data/instance-type");
    $PLACEMENT = shell_exec("curl -H 'X-aws-ec2-metadata-token: $TOKEN' http://169.254.169.254/latest/meta-data/placement/availability-zone");
    ?>
    <header>
        <h1>DevOps Automation with</h1>
        <img src="https://bbdsoftware.com/wp-content/uploads/MServ-Black.png" width="500" height="120" />
    </header>
    <div class="container">
        <h2>Welcome to DevOps Automation!</h2>
        <p>This is a PHP web page deployed using Packer from a GitHub pipeline.
        </p>
        <table class="styled-table">
            <tr>
                <th>Attribute</th>
                <th>Value</th>
            </tr>
            <tr class="active-row">
                <td>Server hostname:</td>
                <td>
                    <?php echo $SERVER_HOSTNAME; ?>
                </td>
            </tr>
            <tr>
                <td>Instance Type:</td>
                <td>
                    <?php echo $INSTANCE_TYPE; ?>
                </td>
            </tr>
            <tr class="active-row">
                <td>AZ:</td>
                <td>
                    <?php echo $PLACEMENT; ?>
                </td>
            </tr>
        </table>
    </div>
    <footer>
        <p>&copy; 2024 DevOps Automation with BBD Cloud Solutions</p>
    </footer>
</body>

</html>