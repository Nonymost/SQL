<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
</head>

<body>
    <form method="post" action="./backend/formHandler.php">
        <input type="text" name="name" id="name">
        <button type="submit" name="submit" value="create">Create</button>
        <button type="submit" name="submit" value="delete">Delete</button>
    </form>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "testing");

    // $i = 0;
    if ($conn) {
        $sql = "SHOW TABLES";
        $result = mysqli_query($conn, $sql);

        echo "<div id='container'>";
        while ($row = mysqli_fetch_row($result)) {
            echo "<a href='./dataForm.php?name=$row[0]'><div id='party' name=$row[0]>" . $row[0] . "</div></a>";

        }
        echo "</div>";
    } else {
        echo "ERROR:" . mysqli_error($conn);
    }
    ?>

</body>

</html>