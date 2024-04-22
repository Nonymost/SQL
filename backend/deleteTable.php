<?php
$conn = mysqli_connect("localhost","root","","testing");

$name = $_POST["name"];

if(isset($name)){

    echo $name;
}else{
    echo"Enter a name";
}

?>