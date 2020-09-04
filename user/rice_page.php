

<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        .a{
            border-style: solid;
        }

    </style>


    </head>
        <body>
        <?php
        include ("connect.php");
    $strCustomerID = null;
    
    if (isset($_GET["p_id"])) {
        $strCustomerID = $_GET["p_id"];
    }
    $i = 1;
    $sql = "SELECT * FROM tb_place WHERE p_id = '" . $strCustomerID . "' ";
    $query = mysqli_query($conn, $sql);
    
    while ($rs2 = mysqli_fetch_array($query)) {
    ?>
        <div class="container mt-3 ">
        <div class="media border p-3 ">
        <div class="media-body ">
            <a class="a" href="user_rice_detail.php?c_id=<?php echo $rs2["c_id"]; ?>"><-</a>
        </div>
        </div>
        <div class="media border p-3 a">
        <div class="media-body a">
            <h2><?= $rs2['p_name'] ?></h2>
        </div>
        </div>
        <div class="media border p-3 a">
        <div class="media-body a">
            <h3><?= $rs2['p_description1'] ?></h3>
        </div>
        </div>
        <div class="media border p-3 a">
        <div class="media-body a">
            <h3><?= $rs2['p_description2'] ?></h3>
        </div>
        </div>
        <div class="media border p-3 a">
        <div class="media-body a">
            <h3><?= $rs2['p_description3'] ?></h3>
        </div>
        </div>
        <div class="media border p-3 a">
        <div class="media-body a">
            <h5><?= $rs2['p_credit'] ?></h5>
        </div>
        </div>
        </div>
        <?php $i++; } ?>
            </tbody>
    </table>
    <?php
    mysqli_close($conn);
    ?>
        
        </body>
</html>