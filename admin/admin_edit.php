<html>

<head>
    <title> PHP & MySQL (mysqli)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(~0);

    //$serverName = "localhost";
    //$userName = "root";
    //$userPassword = "";
    //$dbName = "mydatabase";

    include("connect.php");
    $strCustomerID = null;
    if (isset($_GET["p_id"])) 
    {
        $strCustomerID = $_GET["p_id"];
    }


    
    $sql = "SELECT * FROM tb_place WHERE p_id = '" . $strCustomerID . "' ";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
    ?>
    <div class="container">
    <form action="edit.php" name="frmAdd" method="post">
        <table class="table-bordered" width="284" border="1">
            <tr>
                <th width="120">Rice ID</th>
                <td width="50"><?= $result['p_id'] ?></td>
                <td width="238"><input type="hidden" name="pID" value="<?php echo $result["p_id"]; ?>"></td>
                
            </tr>
            <tr>
                <th width="120">Rice Name</th>
                <td width="50"><input type="text" name="pname" size="15" value="<?php echo $result["p_name"]; ?>" ></td>
            </tr>
            <tr>
                <th width="120">History</th>
                <td><textarea name="pdes1" type="text" rows="4" cols="50" value="<?php echo $result["p_description1"]; ?>"></textarea></td>
            </tr>
            <tr>
                <th width="120">Outstanding feature</th>
                <td><textarea name="pdes2" type="text" rows="4" cols="50" value="<?php echo $result["p_description2"]; ?>"></textarea></td>
            </tr>
            <tr>
                <th width="120">Recessive characteristics</th>
                <td><textarea name="pdes3" type="text" rows="4" cols="50" value="<?php echo $result["p_description3"]; ?>"></textarea></td>
            </tr>
            <tr>
                <th width="120">Credit</th>
                <td><input type="text" name="pcredit" size="48" value="<?php echo $result["p_credit"]; ?>"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="submit">
        <a href="admin_detail.php?c_id=<?php echo $result["c_id"]; ?>"><img src="img2/view.png" width="50" height="50"></a>
    </form>
    <?php
    mysqli_close($conn);
    ?>
    </div>
</body>

</html>