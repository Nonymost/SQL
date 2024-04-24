<?php
$conn = mysqli_connect("localhost", "root", "", "testing");

$invoice = $_POST['invoice'];
$credit = $_POST['credit'];
$debit = $_POST['debit'];
$discount = $_POST['discount'];
$date = $_POST['date'];

if (isset($_GET['name'])) {
    if ($invoice !== "" && $credit !== "" && $debit !== "" && $discount !== "" && $date !== "") {
        $name = $_GET['name'];
        $sql = 'INSERT INTO ' . $name . '(invoice,credit,debit,discount,date)' . 'VALUES (?,?,?,?,?)';
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "iddds", $invoice, $credit, $debit, $discount, $date);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: dataForm.php?name=$name");
            exit();
        } else {
            echo "error statement";
        }
        mysqli_stmt_close($stmt);
    }
    
}

mysqli_close($conn);
?>