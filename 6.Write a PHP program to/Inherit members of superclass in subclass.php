
<?php
class Animal {
    public function eat() {
        echo "Animal is eating";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "<br>Dog is barking";
    }
}

$obj = new Dog();
$obj->eat();
$obj->bark();
?>
