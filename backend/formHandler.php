<?php

$server = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($server, $user, $password, "testing");


if ((isset($_POST['name'])) && ($_POST['name'] !== "")) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    if (isset($_POST['submit']) && $_POST['submit'] == "create") {

        $sql = "CREATE TABLE `$name`(
    id INT AUTO_INCREMENT,
    credit INT NOT NULL,
    debit INT NOT NULL,
    discount INT NOT NULL,
    date DATE NOT NULL,
    PRIMARY KEY(id)

    
);";
        mysqli_query($conn, $sql);
    } elseif (isset($_POST["submit"]) && $_POST["submit"] == "delete") {
        $sql = "DROP TABLE `$name`";
        mysqli_query($conn, $sql);

    }
    header("Location: ../home.php");
    exit;
} else {
    echo "Enter a name";
}

mysqli_close($conn);
?>