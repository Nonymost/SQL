<?php


$conn = mysqli_connect("localhost", "root", "", "sqlDB");

$sql = "CREATE TABLE Students(
    id int,
    name varchar(255),
    class int ,
    age int
);";

$sql = "ALTER TABLE Students ADD place varchar(255)";
mysqli_query($conn,$sql);


?>