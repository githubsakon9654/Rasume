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

<h2>การแสดงความคิดเห็น</h2>

<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
 ชื่อ:<br>
 <?php echo $objResult["Username"] ?> 
  <br>
  ความคิดเห็น:<br>
  <input class="r" type="text" name="comment" value=" ">
  <br><br>
  <input name="commit" type="submit" value="โพสต์">
</form> 


<p>กรุณาใส่ชื่อของท่านก่อนที่จะแสดงความคิดเห็น</p>

<ul>
<?php 
  $sql = "SELECT * FROM tb_comment";
  $result = mysqli_query($conn, $sql);
  
  while ($rows = mysqli_fetch_assoc($result)) :
?>
  <li>
    <b>คุณ</b>  : <?= $rows['cm_name']?> <br>
    <b>ได้แสดงความคิดเห็น</b> <br>
    <?= $rows['cm_comment'] ?><br>
    <?= $rows['cm_date']?>
    <h3>
  </li>
<?php
  endwhile;
?>
</ul>
</body>
</html>
