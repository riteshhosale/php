
<?php
session_start();

$_SESSION["user"] = "Ritesh";

echo "Welcome " . $_SESSION["user"];

session_destroy();
?>
