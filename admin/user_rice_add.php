<?php
    session_start();
        if ($_SESSION['UserID'] == "") {
            echo "Please Login!";
            exit();
        }

        if ($_SESSION['Status'] != "USER") {
            echo "This page for Admin only!";
            exit();
        }

include("connect.php");

$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

?>

<html>

<head>
    <title> PHP & MySQL (mysqli)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <form action="save.php" name="frmAdd" method="post">
        <table width="284" border="1">
            <tr>
                <th width="120">CustomerID</th>
                <td width="238"><input type="text" name="txtCustomerID" size="5"></td>
            </tr>
            <tr>
                <th width="120">Name</th>
                <td><input type="text" name="txtName" size="20"></td>
            </tr>
            <tr>
                <th width="120">Email</th>
                <td><input type="text" name="txtEmail" size="20"></td>
            </tr>
            <tr>
                <th width="120">CountryCode</th>
                <td><input type="text" name="txtCountryCode" size="2"></td>
            </tr>
            <tr>
                <th width="120">Budget</th>
                <td><input type="text" name="txtBudget" size="5"></td>
            </tr>
            <tr>
                <th width="120">Used</th>
                <td><input type="text" name="txtUsed" size="5"></td>
            </tr>
        </table>
        <input type="reset" name="reset" value="reset"> <input type="submit" name="submit" value="ok">
    </form>
</body>

</html>