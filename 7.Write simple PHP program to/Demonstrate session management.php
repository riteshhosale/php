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
<style>
body {
    font: 16px/1.5 Arial, sans-serif;
    margin: 20px;
    background: #f4f6f8;
    color: #222;
}
main, .card {
    max-width: 700px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
}
h1 { line-height: 1.25; }
p { margin: 12px 0; }
.message {
    padding: 12px;
    background: #e8f5e9;
    border-radius: 5px;
    overflow-wrap: anywhere;
}
a { color: #234db5; }
strong { font-weight: 700; }
.message a { color: inherit; }
.message strong { font-weight: 700; }
small { color: #555; }
.message + .message { margin-top: 10px; }
main { box-sizing: border-box; }
@media (max-width: 600px) {
    body { margin: 10px; }
    main, .card { padding: 15px; }
}
</style>
</head>
<body>
<main class="card">
<h1>Session Management</h1>
<p class="message">Welcome <?= htmlspecialchars($user, ENT_QUOTES, "UTF-8") ?>
</p>
<p>This page stores a user value in a PHP session.</p>
<!-- Practical note: the heading identifies the concept demonstrated by this file. -->
<!-- Output note: PHP results are rendered in the main content card. -->
<!-- Styling note: responsive CSS is embedded in this same PHP file. -->
<!-- Testing note: run through a PHP-enabled server to see the output. -->
</main>
</body>
</html>
