<?php 

if ($_POST) {
    echo $_POST['gender'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>
<body>
    <form method="post">
        <h1>Select Your Gender</h1>
        <label for="male">Male</label>
        <input type="radio" value="Male" name="gender" id="male"><br>

        <label for="female">Female</label>
        <input type="radio" value="Female" name="gender" id="female"><br>

        <label for="others">Others</label>
        <input type="radio" value="Others" name="gender" id="others"><br>

        <input type="submit">
    </form>
</body>
</html>