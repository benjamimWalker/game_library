<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css"/>
    <title>Welcome to your login</title>
    <style>
        div#body {
            width: 270px;
            font-size: 15px;
        }
        table td {
            padding: 6px;
        }

    </style>
</head>
<body>
    <div id="body">
        <?php
        $u = $_POST['user'] ?? null;
        $p = $_POST['password'] ?? null;

        if (is_null($u) or is_null($p)) {
            require 'user-login-form.php';
        }

        else {
            echo 'Data was processed </br>';
            include 'includes/login.php';
            $_SESSION['user'] = $u;
            $_SESSION['name'] = $u;

            echo "<a href='index.php'>Back to main page";
        }
        ?>
    </div>

</body>
</html>