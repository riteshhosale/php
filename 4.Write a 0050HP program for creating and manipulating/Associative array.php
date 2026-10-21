
<?php
$student = array(
    "name" => "Ritesh",
    "age" => 18,
    "course" => "BCA"
);

echo $student["name"] . "<br>";

$student["age"] = 19;

foreach ($student as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>
