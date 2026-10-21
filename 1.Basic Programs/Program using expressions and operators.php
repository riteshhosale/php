<?php
$a = 10;
$b = 5;
$results = [
    "Addition" => $a + $b,
    "Subtraction" => $a - $b,
    "Multiplication" => $a * $b,
    "Division" => $a / $b
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Expressions and Operators</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<main class="card">
<h1>Expressions and Operators</h1>
<div class="output">
<?php foreach ($results as $operation => $value): ?>
<p><strong><?= htmlspecialchars($operation, ENT_QUOTES, "UTF-8") ?>:</strong> <?= htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8") ?></p>
<?php endforeach; ?>
</div>
</main>
</body>
</html>