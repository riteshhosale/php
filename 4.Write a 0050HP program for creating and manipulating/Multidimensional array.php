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
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<main class="card">
<h1>Multidimensional Array</h1>
<section class="output">
<table><thead><tr><th>Name</th><th>Marks</th></tr></thead><tbody>
<?php foreach ($students as $student): ?>
<tr><td><?= htmlspecialchars($student[0], ENT_QUOTES, "UTF-8") ?></td><td><?= (int) $student[1] ?></td></tr>
<?php endforeach; ?>
</tbody></table>
</section>
</main>
</body>
</html>