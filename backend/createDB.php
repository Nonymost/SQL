<?php

$name = $_POST["name"];
$class = $_POST["class"];
$age = $_POST["age"];

$conn = mysqli_connect("localhost", "root", "", "sqlDB");

if (!$conn) {
    die ("Connection Failed:" . $conn->connect_error);
}

// $sql = "CREATE TABLE Programs(
//     id int AUTO_INCREMENT PRIMARY KEY,
//     name varchar(50),
//     class int,
//     age int
// );";

$sql = "INSERT INTO programs (name, class,age) VALUES('$name','$class','$age')";

// $sql = "DELETE FROM programs";

// $stmt = mysqli_prepare($conn,$sql);
// mysqli_stmt_bind_param($stmt,"sii",$name,$class,$age);
// mysqli_stmt_execute($stmt);
mysqli_query($conn,$sql);
// $stmt->close();
mysqli_close($conn);
?>