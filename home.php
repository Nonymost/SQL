<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
</head>

<body>
    <form method="post" action="./backend/create.php">
        <input type="text" name="name" id="name">
        <button type="submit" name="submit">Create</button>
    </form>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "testing");
    // $i = 0;
    if ($conn) {
        $sql = "SHOW TABLES";
        $result = mysqli_query($conn, $sql);

        echo"<div id='container'>";
        while ($row = mysqli_fetch_row($result)) {
            echo "<div id='party'>" . $row[0] ."<a href='./backend/delete.php'>DELETE</a> "."</div>";
        }
        echo"</div>";
    } else {
        echo "ERROR:" . mysqli_error($conn);
    }
    ?>

</body>

</html>