<?php
$name = $_POST["name"];
$class = $_POST["class"];
$age = $_POST["age"];

$conn = mysqli_connect("localhost", "root", "");
$dataBase = "sqlDB";

$dbSelected = mysqli_select_db($conn, $dataBase);

// $sqlquery = "DROP TABLE student";

// --------- TABLE CREATION -----------

// $sqlquery = "CREATE TABLE student(
//     student_id INT AUTO_INCREMENT,
//     name VARCHAR(25) NOT NULL,
//     class INT NOT NULL,
//     age INT NOT NULL,
//     PRIMARY KEY(student_id)
// );";

// ----------- INSERTING DATA----------------



if(isset($name,$class,$age)){
    $sqlquery = "INSERT INTO student (name, class, age) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sqlquery);
    mysqli_stmt_bind_param($stmt, "sii", $name, $class, $age);
    if (mysqli_stmt_execute($stmt)) {
        // echo "Data inserted successfully";
        header("Location: ../index.html");
        exit;
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}

// Execute the statement
mysqli_stmt_close($stmt);

// $sql = "SELECT * FROM student";
// mysqli_query($conn,$sqlquery);
// echo "<p>$result</p>";
// mysqli_close($conn);

?>