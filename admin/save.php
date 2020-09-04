<html>

<head>
    <title>PHP & MySQL (mysqli)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    // $serverName = "localhost";
    // $userName = "root";
    // $userPassword = "";
    // $dbName = "mydatabase";
    // $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);
    include("connect.php");
    $sql = "INSERT INTO tb_place (p_name, p_description1 , p_description2 , p_description3, p_credit,c_id) VALUES ('" . $_POST["pname"] . "','" . $_POST["pdes1"] . "','" . $_POST["pdes2"] . "','" . $_POST["pdes3"] . "','" . $_POST["pcredit"] . "','" . $_POST["cid"] . "')";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "Record add successfully";
        header("location:index.php");
    }
    mysqli_close($conn);
    ?>
</body>

</html>