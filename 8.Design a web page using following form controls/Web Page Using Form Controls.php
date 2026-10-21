
<!DOCTYPE html>
<html>
<body>
<h2>Student Registration Form</h2>

<form method="post">
    Name:
    <input type="text" name="name"><br><br>

    Gender:
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>

    Hobbies:
    <input type="checkbox" name="hobbies[]" value="Reading">Reading
    <input type="checkbox" name="hobbies[]" value="Sports">Sports
    <br><br>

    <input type="submit" name="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

<?php
if (isset($_POST["submit"])) {
    echo "<h3>Form Details</h3>";
    echo "Name: " . htmlspecialchars($_POST["name"] ?? "") . "<br>";
    echo "Gender: " . htmlspecialchars($_POST["gender"] ?? "Not selected") . "<br>";

    if (isset($_POST["hobbies"])) {
        echo "Hobbies: " .
            htmlspecialchars(implode(", ", $_POST["hobbies"]));
    }
}
?>
</body>
</html>
