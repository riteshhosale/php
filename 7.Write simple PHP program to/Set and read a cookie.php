<?php
$cookiePath = "/"; // Change to your project folder path when deploying under a subdirectory.
setcookie("user", "Ritesh", [
    "expires" => time() + 3600,
    "path" => $cookiePath,
    "samesite" => "Lax"
]);
$user = $_COOKIE["user"] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Set and Read a Cookie</title>
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
<h1>Set and Read a Cookie</h1>
<?php if ($user !== null): ?>
<p class="message">Welcome <?= htmlspecialchars($user, ENT_QUOTES, "UTF-8") ?>
</p>
<?php else: ?>
<p class="message">Cookie sent. Refresh this page to read the value from the next request.</p>
<?php endif; ?>
</main>
</body>
</html>
