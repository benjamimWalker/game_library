<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css"/>
    <title>Description</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
require_once 'includes/data.php';
require_once 'includes/functions.php';
?>
<div id="body">
    <?php
    include_once 'top.php';
    $cod = $_GET['cod'] ?? 0;
    $query = $database->query("select * from games where cod = $cod");
    ?>
    <h1>Details of the game </h1>
    <table class="details">
        <?php
        if (!$query) {
            echo '<tr><td>Query failed';
        } else {
            if ($query->num_rows == 1) {
                $reg = $query->fetch_object();
                echo "
                  <tr>
            <td rowspan='3'> <img src='images/$reg->cover' class='full'>
            <td> <h2>$reg->name</h2>
            Nota: " . number_format($reg->rating, 1) . "/10.0 
        <tr>
            <td> $reg->description
        <tr>
            <td> Adm";
            } else {
                echo "<tr><td>No register found</td>";
            }
        }

        ?>
    </table>
    <a href="index.php"> <?php echo back();?>
</div>
<?php require_once 'bottom.php' ?>
</body>
</html>