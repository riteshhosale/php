<?php
$str = "Hello PHP";
$results = [
    "Length" => strlen($str),
    "Uppercase" => strtoupper($str),
    "Lowercase" => strtolower($str),
    "Reverse" => strrev($str),
    "Replace PHP with World" => str_replace("PHP", "World", $str)
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Built-in String Functions</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<main class="card">
<h1>Built-in String Functions</h1>
<section class="output">
<table><thead><tr><th>Function</th><th>Result</th></tr></thead><tbody><?php foreach ($results as $label => $value): ?><tr><td><?= htmlspecialchars($label, ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8") ?></td></tr><?php endforeach; ?></tbody></table>
</section>
</main>
</body>
</html>