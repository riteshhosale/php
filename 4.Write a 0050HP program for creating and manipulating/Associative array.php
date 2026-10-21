<?php
$student = [
    "name" => "Ritesh",
    "age" => 18,
    "course" => "BCA"
];
$student["age"] = 19;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Associative Array</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<main class="card">
<h1>Associative Array</h1>
<section class="output">
<table><thead><tr><th>Key</th><th>Value</th></tr></thead><tbody>
<?php foreach ($student as $key => $value): ?>
<tr><td><?= htmlspecialchars((string) $key, ENT_QUOTES, "UTF-8") ?></td><td><?= htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8") ?></td></tr>
<?php endforeach; ?>
</tbody></table>
</section>
</main>
</body>
</html>