<?php 

$conn = new mysqli ("localhost", "root", "", "landing_page");

if ($_POST) {
    $sports = $_POST['sports'];
    $sports_serialized = implode(', ', $sports);
    
    $sql = "INSERT INTO checkboxes (checkbox) VALUES ('{$sports_serialized}')";
    $res = $conn->query($sql);
}

$sql2 = "SELECT * FROM checkboxes LIMIT 1 ";
$res2 = $conn->query($sql2);

$row = $res2->fetch_assoc();

$sports_exp = explode(', ', $row['checkbox']);
print_r($sports_exp);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extras</title>
</head>
<body>
    <form method="post">
        <h1>Select Your Sports</h1>
        <label for="cricket">Cricket</label>
        <input type="checkbox" value="cricket" name="sports[]" id="cricket"><br>

        <label for="football">Football</label>
        <input type="checkbox" value="football" name="sports[]" id="football"><br>

        <label for="hockey">Hockey</label>
        <input type="checkbox" value="hockey" name="sports[]" id="hockey"><br>

        <label for="Volleyball">Volleyball</label>
        <input type="checkbox" value="volleyball" name="sports[]" id="Volleyball"><br>

        <input type="submit">
    </form>
</body>
</html>

