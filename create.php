<?php
$connection = new mysqli("localhost", "root", "", "kuku");

if($_POST){
    $fullname = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $address = $_POST['address'];

    $sql = "INSERT INTO task (name, email, password, number, address) VALUES ('{$fullname}', '{$email}', '{$password}', '{$number}', '{$address}')";
    $res = $connection->query($sql);

    if($res == 1){
        echo "Success";
    }else{
        echo "Failed";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Task</title>
</head>
<body>
    <form method="POST">
        <input type="text" required name="full_name" placeholder="Enter Your Name.."><br>
        <input type="email" required name="email" placeholder="Enter Your Email"><br>
        <input type="password" required name="password" placeholder="Enter Your Password"><br>
        <input type="number" required name="number" placeholder="Enter Your Number"><br>
        <input type="text" required name="address" placeholder="Enter Your Address.."><br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>