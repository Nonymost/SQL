<?php
$conn = mysqli_connect("localhost","root","","testing");

if($conn){
    $sql = "SELECT * FROM `testing`";
    
}else{
    echo"ERROR:".mysqli_error($conn);
}
?>