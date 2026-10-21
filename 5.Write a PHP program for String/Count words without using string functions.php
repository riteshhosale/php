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
<style>
body { font: 16px/1.5 Arial, sans-serif; margin: 20px; background: #f4f6f8; color: #222; }
main, .card { max-width: 700px; margin: 30px auto; padding: 20px; background: #fff; border-radius: 8px; }
h1, h2 { line-height: 1.25; }
p { margin: 12px 0; }
.output { margin-top: 16px; padding: 12px; background: #eee; border-radius: 5px; overflow-wrap: anywhere; max-width: 100%; }
pre, code { font-family: Consolas, monospace; overflow-wrap: anywhere; }
ul { padding-left: 24px; }
li { margin: 5px 0; }
a { color: #234db5; text-underline-offset: 2px; }
hr { border: 0; border-top: 1px solid #ccc; }
strong { font-weight: 700; }
.output strong { color: #222; }
h1 { margin-top: 0; }
body { overflow-wrap: anywhere; }
h2 { margin-bottom: 10px; }
p { overflow-wrap: anywhere; }
small { color: #555; }
pre { white-space: pre-wrap; }
h3 { line-height: 1.25; }
</style>
</head>
<body>
<main class="card">
<h1>Count Words Without String Functions</h1>
<section class="output">
<p>Input string: <strong>
<?= htmlspecialchars($str, ENT_QUOTES, "UTF-8") ?>
</strong>
</p>
<p>Number of words: <strong>
<?= $count ?>
</strong>
</p>
</section>
</main>
</body>
</html>
