<?php
$sql = "SELECT * FROM `$name` ORDER BY date ASC";
$result = mysqli_query($conn, $sql);
$sn = 1;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $sn . "</td>";
        echo "<td id='td'>" . $row["invoice"] . "</td>";
        echo "<td id='td'>" . $row["credit"] . "</td>";
        echo "<td id='td'>" . $row["debit"] . "</td>";
        echo "<td id='td'>" . $row["discount"] . "</td>";
        echo "<td id='td'>" . $row["date"] . "</td>";
        // Add more cells if needed
        echo "</tr>";
        $sn++;
    }
} else {
    echo "<tr><td colspan='2'>No data found</td></tr>";
}
mysqli_close($conn);
?>