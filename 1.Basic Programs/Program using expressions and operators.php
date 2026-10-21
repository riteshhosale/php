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
h1, h2 { line-height: 1.25; }
p { margin: 12px 0; }
.output {
    margin-top: 16px;
    padding: 12px;
    background: #eee;
    border-radius: 5px;
    overflow-wrap: anywhere;
}
pre, code { font-family: Consolas, monospace; }
a { color: #234db5; }
hr { border: 0; border-top: 1px solid #ccc; }
@media (max-width: 600px) {
    body { margin: 10px; }
    main, .card { padding: 15px; }
}
</style>
</head>
<body>
<main class="card">
<h1>Expressions and Operators</h1>
<div class="output">
<?php foreach ($results as $operation => $value): ?>
<p>
<strong>
<?= htmlspecialchars($operation, ENT_QUOTES, "UTF-8") ?>:</strong>
<?= htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8") ?>
</p>
<?php endforeach; ?>
</div>
</main>
</body>
</html>
