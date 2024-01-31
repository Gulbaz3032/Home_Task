<?php
session_start();

if (isset($_SESSION['name'])){
  header('location: dashboard.php');
}


$connection = new mysqli("localhost", "root", "", "landing_page");
if ($_POST){

    $email = $_POST['email'];
    $password = base64_encode($_POST['password']);

    $sql = "SELECT *  FROM users WHERE password = '{$password}' AND email = '{$email}' OR name = '{$email}'";
    $res = $connection->query($sql);

    if ($res->num_rows > 0) {
        // echo "User exist";
        $user_data = $res->fetch_assoc();
        $_SESSION['name'] = $user_data['name'];
        $_SESSION['email'] = $user_data['email'];
        header('location: dashboard.php');
        $user();  
    } else {
        echo "Wrong Email or password";
    }

    
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
  <form method="POST">
    <!-- <input type="text" required name="username" placeholder="Enter Your username"> -->
    <input type="email" required name="email" placeholder="Enter Your Email ot username">
    <input type="password" required name="password" placeholder="Enter Your Password">
    <input type="Submit">

  </form>
    
</body>
</html>