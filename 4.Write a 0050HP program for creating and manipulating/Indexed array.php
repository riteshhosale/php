<?php
$fruits = ["Apple", "Mango", "Banana"];
$firstFruit = $fruits[0];
$fruits[1] = "Orange";
$fruits[] = "Grapes";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indexed Array</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<main class="card">
<h1>Indexed Array</h1>
<p>First element: <strong><?= htmlspecialchars($firstFruit, ENT_QUOTES, "UTF-8") ?></strong></p>
<ul>
<?php foreach ($fruits as $fruit): ?>
<li><?= htmlspecialchars($fruit, ENT_QUOTES, "UTF-8") ?></li>
<?php endforeach; ?>
</ul>
</main>
</body>
</html>