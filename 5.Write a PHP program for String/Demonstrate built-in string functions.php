<?php
$str = "Hello PHP";
$results = [
    "strlen()" => strlen($str),
    "strtoupper()" => strtoupper($str),
    "strtolower()" => strtolower($str),
    "strrev()" => strrev($str),
    "str_replace()" => str_replace("PHP", "World", $str)
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Built-in String Functions</title>
<style>
body { font: 16px/1.5 Arial, sans-serif; margin: 20px; background: #f4f6f8; color: #222; }
main, .card { max-width: 700px; margin: 30px auto; padding: 20px; background: #fff; border-radius: 8px; }
h1, h2 { line-height: 1.25; }
p { margin: 12px 0; }
.output { margin-top: 16px; padding: 12px; background: #eee; border-radius: 5px; overflow-wrap: anywhere; }
table { width: 100%; border-collapse: collapse; margin-top: 12px; }
th, td { padding: 8px; border: 1px solid #ccc; text-align: left; }
th { background: #e9edf2; }
table { font-size: 15px; }
pre, code { font-family: Consolas, monospace; overflow-wrap: anywhere; }
a { color: #234db5; }
@media (max-width: 600px) {
    body { margin: 10px; }
    main, .card { padding: 15px; }
    th, td { padding: 6px; }
}
</style>
</head>
<body>
<main class="card">
<h1>Built-in String Functions</h1>
<p>Input string: <strong>
<?= htmlspecialchars($str, ENT_QUOTES, "UTF-8") ?>
</strong>
</p>
<section class="output">
<table>
<thead>
<tr>
<th>Function</th>
<th>Result</th>
</tr>
</thead>
<tbody>
<?php foreach ($results as $label => $value): ?>
<tr>
<td>
<?= htmlspecialchars($label, ENT_QUOTES, "UTF-8") ?>
</td>
<td>
<?= htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8") ?>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</section>
</main>
</body>
</html>
