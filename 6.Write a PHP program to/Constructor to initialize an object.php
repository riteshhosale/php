<?php
class Student {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function display() {
        return "Student Name: " . $this->name;
    }
}
$obj = new Student("Ritesh");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Constructor to Initialize an Object</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<main class="card">
<h1>Constructor to Initialize an Object</h1>
<section class="output"><p><?= htmlspecialchars($obj->display(), ENT_QUOTES, "UTF-8") ?></p></section>
</main>
</body>
</html>