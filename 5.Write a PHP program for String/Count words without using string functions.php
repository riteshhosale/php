
<?php
$str = "Welcome to PHP programming";
$count = 0;
$inWord = false;

for ($i = 0; $str[$i] != ""; $i++) {
    if ($str[$i] != " " && $str[$i] != "\n" && $str[$i] != "\t") {
        if (!$inWord) {
            $count++;
            $inWord = true;
        }
    } else {
        $inWord = false;
    }
}

echo "Number of words = " . $count;
?>
