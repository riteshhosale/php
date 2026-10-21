<?php
class Animal {
    public function eat(): string { return "Animal is eating"; }
}
class Dog extends Animal {
    public function bark(): string { return "Dog is barking"; }
}
$obj = new Dog();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inheritance in PHP</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<main class="card">
<h1>Inheritance in PHP</h1>
<section class="output">
<p><?= htmlspecialchars($obj->eat(), ENT_QUOTES, "UTF-8") ?></p><p><?= htmlspecialchars($obj->bark(), ENT_QUOTES, "UTF-8") ?></p>
</section>
</main>
</body>
</html>