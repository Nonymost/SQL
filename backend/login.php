<?php
$user = $_POST["user"];
$password = $_POST["password"];

if (isset($user, $password)) {
    if (($user == "arpharmacy") && ($password == "maharjan@ab")) {
        header("Location: ../home.php");
        exit;
    } else {
        echo "invalid username or password";
    }
}
?>