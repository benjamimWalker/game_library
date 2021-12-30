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

$order = $_GET['o'] ?? 'n';
?>

<div id="body">
    <?php include_once 'top.php'?>
    <h1>Choose a game</h1>
    <form method="get" id="search" action="index.php">
        Order: <a href="index.php?o=n"> Name </a>
        | <a href="index.php?o=p"> Producer </a>
        | <a href="index.php?o=n1"> High Rating </a>
        | <a href="index.php?o=n2"> Low Rating | </a>
        Search <input type="text" name="c" size="10" maxlength="40"/>
        <input type="submit" value="ok">
    </form>
    <table class="listing">
        <?php
        $q = 'select j.cod, j.name, g.genre, j.cover, p.producer from games j join genres g on j.genre = g.cod join producers p on j.producer = p.cod ';
        switch ($order) {
            case 'p':
                $q .= 'ORDER BY p.producer';
                break;
            case 'n1':
                $q .= 'ORDER BY j.rating DESC';
                break;
            case 'n2':
                $q .= 'ORDER BY j.rating';
                break;
            default:
                $q .= 'ORDER BY j.name';
        }
        $query = $database->query($q);
        if (!$query) {echo 'Something went wrong';}
        else {
            if ($query->num_rows == 0) {
                print 'No register found';
            }
            else {
                while ($reg = $query->fetch_object()) {
                    $t = thumb($reg->cover);
                    echo "<tr><td><img src=$t alt=\"images/indisponivel\" class='mini'>";
                    echo "<td> <a href='details.php?cod=$reg->cod'>$reg->name</a>";
                    echo " [$reg->genre]";
                    echo "</br>$reg->producer";
                    echo "<td>Adm";
                }
            }
        }
        ?>
    </table>
</div>
<?php include_once 'bottom.php'?>
</body>
</html>