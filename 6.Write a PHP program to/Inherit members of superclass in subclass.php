<?php
class Animal
{
    public function eat(): string
    {
        return "Animal is eating";
    }
}
class Dog extends Animal
{
    public function bark(): string
    {
        return "Dog is barking";
    }
}
$obj = new Dog();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inheritance in PHP</title>
<style>
body { font: 16px/1.5 Arial, sans-serif; margin: 20px; background: #f4f6f8; color: #222; }
main, .card { max-width: 700px; margin: 30px auto; padding: 20px; background: #fff; border-radius: 8px; }
h1, h2 { line-height: 1.25; }
p { margin: 12px 0; }
.output { margin-top: 16px; padding: 12px; background: #eee; border-radius: 5px; overflow-wrap: anywhere; }
pre, code { font-family: Consolas, monospace; overflow-wrap: anywhere; }
a { color: #234db5; }
strong { font-weight: 700; }
.output h2 { margin-top: 0; }
.output p { overflow-wrap: anywhere; }
.output strong { color: #222; }
h1 { margin-top: 0; }
h2 { margin-bottom: 10px; }
ul { padding-left: 24px; }
li { margin: 5px 0; }
@media (max-width: 600px) {
    body { margin: 10px; }
    main, .card { padding: 15px; }
}
</style>
</head>
<body>
<main class="card">
<h1>Inheritance in PHP</h1>
<section class="output">
<p>
<?= htmlspecialchars($obj->eat(), ENT_QUOTES, "UTF-8") ?>
</p>
<p>
<?= htmlspecialchars($obj->bark(), ENT_QUOTES, "UTF-8") ?>
</p>
</section>
</main>
</body>
</html>
