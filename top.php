<?php
echo '<header>';
if (empty($_SESSION['user'])) {
    echo "<a href='user-login.php'>Enter</a>";
}
else {
    echo "Hello, {$_SESSION['name']}";
}
echo '</header>';