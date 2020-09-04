<?php 
  ob_start();


  require "connect.php";

  if(isset($_POST['commit'])){
    $comment = $_POST['comment'];
    $name = $objResult["Name"] ;
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
 <?php echo $objResult["Name"] ?> 
  <br>
  ความคิดเห็น:<br>
  <textarea name="comment" type="text" rows="4" cols="50"></textarea>
  <br><br>
  <input name="commit" type="submit" value="โพสต์">
</form> 


<ul>
<?php 
  $sql = "SELECT * FROM tb_comment order by cm_id desc ";
  $result = mysqli_query($conn, $sql);
  
  while ($rows = mysqli_fetch_assoc($result)) :
?>
 <div class="media border p-3">
    <div class="media-body">
      <h4><?= $rows['cm_name']?><small><i>    <?= $rows['cm_date']?></i></small></h4>
      <p><?= $rows['cm_comment'] ?></p>      
      <?php if ($rows['cm_name'] == $objResult["Name"]) : ?>
           
           <input type='button' value='DELETE' onclick='changeText(<?= $rows["cm_id"] ?>)'>
           <!-- // = {$rows['cm_id']}'Javascript:window.location.href = 'index.php' -->
          
       
     <?php endif;  ?>
    </div>
  </div>
<?php
  endwhile;
?>
</ul>
<script>
function changeText(id) {
  window.location = 'delete_com.php?id=' + id;
}
</script>
</body>
</html>
