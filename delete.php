<?php 

$conn = new mysqli("localhost", "root", "", "landing_page");

if (isset($_GET['id'])) {
    $id = $_GET['id'];   
    $sql = "DELETE FROM students WHERE id = $id";
    $res = $conn->query($sql);
    if ($res == 1) {
        header('location: read.php');
    } else {
        echo "Error";
    }
} 


?>