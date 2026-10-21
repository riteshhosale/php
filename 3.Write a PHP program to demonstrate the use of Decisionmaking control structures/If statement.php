<?php
$a = 10;
$message = $a > 0 ? "Number is positive" : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>If Statement</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<main class="card">
<h1>If Statement</h1>
<section class="output">
<?= htmlspecialchars($message, ENT_QUOTES, "UTF-8") ?>
</section>
</main>
</body>
</html>