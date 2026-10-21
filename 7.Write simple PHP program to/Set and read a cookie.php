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
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<main class="card">
<h1>Set and Read a Cookie</h1>
<?php if ($user !== null): ?>
<p class="message">Welcome <?= htmlspecialchars($user, ENT_QUOTES, "UTF-8") ?></p>
<?php else: ?>
<p class="message">Cookie sent. Refresh this page to read the value from the next request.</p>
<?php endif; ?>
</main>
</body>
</html>