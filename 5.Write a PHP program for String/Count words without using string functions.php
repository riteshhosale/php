<?php
$str = "Welcome to PHP programming";
$count = 0;
$inWord = false;
for ($i = 0; isset($str[$i]); $i++) {
    if ($str[$i] !== " " && $str[$i] !== "\n" && $str[$i] !== "\t") {
        if (!$inWord) {
            $count++;
            $inWord = true;
        }
    } else {
        $inWord = false;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Count Words Without String Functions</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<main class="card">
<h1>Count Words Without String Functions</h1>
<section class="output">
<p>Input string: <strong><?= htmlspecialchars($str, ENT_QUOTES, "UTF-8") ?></strong></p>
<p>Number of words: <strong><?= $count ?></strong></p>
</section>
</main>
</body>
</html>