<?php
$conn = mysqli_connect("localhost", "root", "", "testing");
if (isset($_GET['name'])) {
    $name = mysqli_real_escape_string($conn, $_GET['name']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title></title>
    <link href="dataForm.css" rel="stylesheet">
</head>

<body>
    <form method="post" action="<?php echo (htmlspecialchars("insert.php") . "?name=$name"); ?>">
        <label for="date">Date:</label>
        <input type="text" name="date" id="date"> 
        <label for="invoice">Invoice:</label>
        <input type="text" name="invoice" id="invoice"> 
        <label for="credit">Credit:</label>
        <input type="text" name="credit" id="credit"> 
        <label for="debit">Debit:</label>
        <input type="text" name="debit" id="debit"> 
        <label for="discount">Discount:</label>
        <input type="text" name="discount" id="discount" step="0.01"> 
        <button type="submit">Submit</button>
    </form>
    <div>
    <table>
        <thead>
        <tr>
            <th>S.N</th>
            <th id='td'>INVOICE</th>
            <th id='td'>CREDIT</th>
            <th id='td'>DEBIT</th>
            <th id='td'>DISCOUNT</th>
            <th id='td'>DATE</th>
        </tr>
</thead>
       <tbody>
       <?php
       include ("party.php");
       ?>
</tbody>
</table>
    </div>
</body>

</html>