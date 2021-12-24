<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css"/>
    <title>Game Listing</title>
</head>
<body>

<?php
require_once 'includes/data.php';
?>

<div id="body">
    <h1>Choose a game</h1>
    <table class="listing">
        <?php
        $query = $database->query('select * from games order by name');
        if (!$query) { print 'Something went wrong';}
        else {
            if ($query->num_rows == 0) {
                print 'No register found';
            }
            else {
                while ($reg = $query->fetch_object()) {
                    echo "<tr><td><img src=\"images/$reg->cover\" alt=\"images/indisponivel\"><td>$reg->name";
                    echo "<td>Adm";
                }
            }
        }
        ?>
        <tr>
            <td>Image
            <td>Name
            <td>Adm
        <tr>
            <td>Image
            <td>Name
            <td>Adm
        <tr>
            <td>Image
            <td>Name
            <td>Adm
        <tr>
            <td>Image
            <td>Name
            <td>Adm
        <tr>
            <td>Image
            <td>Name
            <td>Adm
        <tr>
            <td>Image
            <td>Name
            <td>Adm
    </table>
</div>

</body>
</html>