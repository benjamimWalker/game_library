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
require_once 'includes/functions.php';
?>

<div id="body">
    <h1>Choose a game</h1>
    <table class="listing">
        <?php
        $query = $database->query('select * from games order by name');
        if (!$query) {print 'Something went wrong';}
        else {
            if ($query->num_rows == 0) {
                print 'No register found';
            }
            else {
                while ($reg = $query->fetch_object()) {
                    $t = thumb($reg->cover);
                    echo "<tr><td><img src=$t alt=\"images/indisponivel\" class='mini'>";
                    echo "<td> <a href='details.php?cod=$reg->cod'>$reg->name</a>";
                    echo "<td>Adm";
                }
            }
        }
        ?>
    </table>
</div>

</body>
</html>