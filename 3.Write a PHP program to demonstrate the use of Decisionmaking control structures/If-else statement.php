<?php
$a = 7;
if ($a % 2 == 0) {
    $message = "Even number";
} else {
    $message = "Odd number";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>If-else Statement</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<main class="card">
<h1>If-else Statement</h1>
<section class="output"><?= htmlspecialchars($message, ENT_QUOTES, "UTF-8") ?></section>
</main>
</body>
</html>