<?php

$server = "localhost";
$user = "root";
$password = "";


if ((isset($_POST['name'])) && ($_POST['name'] == !null)) {
    $conn = mysqli_connect($server, $user, $password, "testing");
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $sql = "CREATE TABLE `$name`(
    id INT AUTO_INCREMENT,
    credit INT NOT NULL,
    debit INT NOT NULL,
    discount INT NOT NULL,
    date DATE NOT NULL,
    PRIMARY KEY(id)
);";
    // $sql = "DROP TABLE `$name`";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../home.php");
        exit;
    } else {
        echo "Error" . mysqli_error($conn);
    }

    mysqli_close();

} else {
    echo "Enter a name";
}
?>