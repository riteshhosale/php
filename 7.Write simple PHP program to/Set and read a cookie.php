
<?php
setcookie("user", "Ritesh", time() + 3600, "/");

if (isset($_COOKIE["user"])) {
    echo "Welcome " . $_COOKIE["user"];
} else {
    echo "Cookie set. Refresh the page.";
}
?>
