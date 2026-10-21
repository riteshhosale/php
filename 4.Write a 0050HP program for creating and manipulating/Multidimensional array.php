<?php
$students = [
    ["Ritesh", 80],
    ["Amit", 75],
    ["Rahul", 85]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Multidimensional Array</title>
<style>
body { font: 16px/1.5 Arial, sans-serif; margin: 20px; background: #f4f6f8; color: #222; }
main, .card { max-width: 700px; margin: 30px auto; padding: 20px; background: #fff; border-radius: 8px; }
h1, h2 { line-height: 1.25; }
p { margin: 12px 0; }
.output { margin-top: 16px; padding: 12px; background: #eee; border-radius: 5px; overflow-wrap: anywhere; }
table { width: 100%; border-collapse: collapse; margin-top: 12px; }
th, td { padding: 8px; border: 1px solid #ccc; text-align: left; }
th { background: #e9edf2; }
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
<h1>Multidimensional Array</h1>
<section class="output">
<table>
<thead>
<tr>
<th>Name</th>
<th>Marks</th>
</tr>
</thead>
<tbody>
<?php foreach ($students as $student): ?>
<tr>
<td>
<?= htmlspecialchars($student[0], ENT_QUOTES, "UTF-8") ?>
</td>
<td>
<?= (int) $student[1] ?>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</section>
</main>
</body>
</html>
