<html>

<head>
    <title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "mydatabase";

    $strCustomerID = null;
    
    if (isset($_GET["CustomerID"])) {
        $strCustomerID = $_GET["CustomerID"];
    }

    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "mydatabase";
    $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);
    $sql = "SELECT * FROM customer WHERE CustomerID = '" . $strCustomerID . "' ";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
    ?>
    <table width="284" border="1">
        <tr>
            <th width="120">CustomerID</th>
            <td width="238"><?php echo $result["CustomerID"]; ?></td>
        </tr>
        <tr>
            <th width="120">Name</th>
            <td><?php echo $result["Name"]; ?></td>
        </tr>
        <tr>
            <th width="120">Email</th>
            <td><?php echo $result["Email"]; ?></td>
        </tr>
        <tr>
            <th width="120">CountryCode</th>
            <td><?php echo $result["CountryCode"]; ?></td>
        </tr>
        <tr>
            <th width="120">Budget</th>
            <td><?php echo $result["Budget"]; ?></td>
        </tr>
        <tr>
            <th width="120">Used</th>
            <td><?php echo $result["Used"]; ?></td>
        </tr>
    </table>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>