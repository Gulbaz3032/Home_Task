<?php
session_start();

if(!isset($_SESSION['nae'])){
    header('location: login.php');
}
if($_POST){
    session_destroy();
    header('location: login.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Hello <?php echo $_SESSION['name'];?></h1> 
   <h3>Hello email is<?php echo $_SESSION['email'];?></h3> 

   <form method="post">
    <input type="submit" value="Log Out" name="Submit_btn">
   </form>

</body>
</html>