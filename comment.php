<?php 
  ob_start();


  require "connect.php";

  if(isset($_POST['commit'])){
    $comment = $_POST['comment'];
    $name = $objResult["Username"] ;
    $sql = "INSERT INTO tb_comment (cm_name, cm_comment)  VALUES ('$name', '".$comment."') ";
    $result = mysqli_query($conn, $sql);
    $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
    $objQuery = mysqli_query($conn,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    
    if(!$result){
      echo "<script>alert('ไม่สามารภคอมเม้นได้')</script>";
    }
  }

?>
<!DOCTYPE html>
<html>
<style>
	.r{
    	width : 300px;
      height : 150px;
    }
</style>
<body>

<ul>
<?php 
  $sql = "SELECT * FROM tb_comment";
  $result = mysqli_query($conn, $sql);
  
  while ($rows = mysqli_fetch_assoc($result)) :
?>
  <div class="media border p-3">
    <div class="media-body">
      <h4><?= $rows['cm_name']?><small><i>    <?= $rows['cm_date']?></i></small></h4>
      <p><?= $rows['cm_comment'] ?></p>      
    </div>
  </div>
<?php
  endwhile;
?>
</ul>
</body>
</html>
