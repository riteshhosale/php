<?php
session_start();
$_SESSION["user"] = "Ritesh";
$user = $_SESSION["user"];
session_write_close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Session Management</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<main class="card">
<h1>Session Management</h1>
<p class="message">Welcome <?= htmlspecialchars($user, ENT_QUOTES, "UTF-8") ?></p>
<p>This page stores a user value in a PHP session.</p>
</main>
</body>
</html>