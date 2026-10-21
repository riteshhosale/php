<?php
$submitted = $_SERVER["REQUEST_METHOD"] === "POST";
$name = trim($_POST["name"] ?? "");
$gender = $_POST["gender"] ?? "";
$hobbies = $_POST["hobbies"] ?? [];
$allowedGenders = ["Male", "Female", "Other"];
$allowedHobbies = ["Reading", "Sports"];
if (!is_array($hobbies)) { $hobbies = []; }
$hobbies = array_values(array_intersect($hobbies, $allowedHobbies));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration Form</title>
<link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<main class="card">
<h1>Student Registration Form</h1>
<form method="post">
<label for="name">Name</label>
<input id="name" type="text" name="name" value="<?= htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>" required>
<fieldset><legend>Gender</legend>
<label class="choice"><input type="radio" name="gender" value="Male" <?= $gender === "Male" ? "checked" : "" ?>> Male</label>
<label class="choice"><input type="radio" name="gender" value="Female" <?= $gender === "Female" ? "checked" : "" ?>> Female</label>
<label class="choice"><input type="radio" name="gender" value="Other" <?= $gender === "Other" ? "checked" : "" ?>> Other</label>
</fieldset>
<fieldset><legend>Hobbies</legend>
<label class="choice"><input type="checkbox" name="hobbies[]" value="Reading" <?= in_array("Reading", $hobbies, true) ? "checked" : "" ?>> Reading</label>
<label class="choice"><input type="checkbox" name="hobbies[]" value="Sports" <?= in_array("Sports", $hobbies, true) ? "checked" : "" ?>> Sports</label>
</fieldset>
<div class="actions"><button type="submit" name="submit" value="1">Submit</button><button type="reset" class="secondary">Reset</button></div>
</form>
<?php if ($submitted): ?>
<section class="output" aria-live="polite">
<h2>Form Details</h2>
<p><strong>Name:</strong> <?= htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?></p>
<p><strong>Gender:</strong> <?= htmlspecialchars(in_array($gender, $allowedGenders, true) ? $gender : "Not selected", ENT_QUOTES, "UTF-8") ?></p>
<p><strong>Hobbies:</strong> <?= htmlspecialchars($hobbies ? implode(", ", $hobbies) : "None selected", ENT_QUOTES, "UTF-8") ?></p>
</section>
<?php endif; ?>
</main>
</body>
</html>