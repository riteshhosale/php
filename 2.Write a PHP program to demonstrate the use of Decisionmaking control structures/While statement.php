<?php
$values = [];
$i = 1;
while ($i <= 5) {
    $values[] = $i;
    $i++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>While Statement</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<main class="card">
<h1>While Statement</h1>
<section class="output">
<?= htmlspecialchars(implode(" ", $values), ENT_QUOTES, "UTF-8") ?>
</section>
</main>
</body>
</html>