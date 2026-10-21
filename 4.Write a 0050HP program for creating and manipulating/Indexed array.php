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
ul { padding-left: 24px; }
li { margin: 5px 0; }
hr { border: 0; border-top: 1px solid #ccc; }
@media (max-width: 600px) {
    body { margin: 10px; }
    main, .card { padding: 15px; }
}
</style>
</head>
<body>
<main class="card">
<h1>Indexed Array</h1>
<p>First element: <strong>
<?= htmlspecialchars($firstFruit, ENT_QUOTES, "UTF-8") ?>
</strong>
</p>
<ul>
<?php foreach ($fruits as $fruit): ?>
<li>
<?= htmlspecialchars($fruit, ENT_QUOTES, "UTF-8") ?>
</li>
<?php endforeach; ?>
</ul>
</main>
</body>
</html>
