<?php
$day = 2;
switch ($day) {
    case 1:
        $message = "Monday";
        break;
    case 2:
        $message = "Tuesday";
        break;
    case 3:
        $message = "Wednesday";
        break;
    default:
        $message = "Invalid day";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Switch Statement</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<main class="card">
<h1>Switch Statement</h1>
<section class="output"><?= htmlspecialchars($message, ENT_QUOTES, "UTF-8") ?></section>
</main>
</body>
</html>