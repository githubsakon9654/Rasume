

<html>

<head>
    <title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    include("connect.php");
    $sql ="SELECT * FROM tb_category";
    $query = mysqli_query($conn,$sql);
    ?>
    <div class="container">
    <table width="600" border="1">
        <tr>
            <th width="91">
                <div align="center">Rice ID</div>
            </th>
            <th width="120">
                <div align="center">Rice Name</div>
            </th>
            <th width="70">
                <div align="center">Detail</div>
            </th>
            <th width="70">
                <div align="center">Add</div>
            </th>
            <th width="70">
                <div align="center">Delete</div>
            </th>
            
        </tr>

        <?php
        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            ?>
            <tr>
                <td>
                    <div align="center"><?php echo $result["c_id"]; ?></div>
                </td>
                <td><?php echo $result["c_name"]; ?></td>
                
                <td align="right"><a href="rice_detail.php?c_id=<?php echo $result["c_id"]; ?>"><img src="img2/view.png" width="50" height="50"></a></td>
                <td align="right"><a href="add.php"><img src="img2/add.png" width="50" height="50"> </a></td> 
                <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='rice_delete.php?c_id=<?php echo $result["c_id"];?>';}"><img src="img2/del.png" width="50" height="50"></a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    

    <?php
   mysqli_close($conn); ?>
        </div>
    </body>

</html>