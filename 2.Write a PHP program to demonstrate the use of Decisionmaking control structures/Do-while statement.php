<?php
$i = 1;
do {
    $values[] = $i;
    $i++;
} while ($i <= 5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Do-while Statement</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<main class="card">
<h1>Do-while Statement</h1>
<p>Numbers from 1 to 5</p>
<div class="output"><?php echo htmlspecialchars(implode(" ", $values), ENT_QUOTES, "UTF-8"); ?></div>
</main>
</body>
</html>