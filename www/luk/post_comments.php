<?php
$host="localhost";
$username="root";
$password="root1234";
$databasename="luk";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $insert=mysql_query("insert into comments (name,comment,post_time) values('$name','$comment',CURRENT_TIMESTAMP)");
  
  

  $select=mysql_query("select name,comment,post_time from comments where name='$name' and comment='$comment'");
  
  if($row=mysql_fetch_array($select))
  {
	  $name=$row['name'];
	  $comment=$row['comment'];
      $time=$row['post_time'];
  ?>
<div class="comment_div"> 
 <p class="name"><strong>Posted By:</strong> <?php echo $name;?> <span style="float:right"><?php                        
    date_default_timezone_set("Asia/Kuala_Lumpur");
    echo date('d-m-Y H:i:s'); //Returns IST
?></span></p>
 <p class="comments"><?php echo $comment;?></p>	
</div>
  <?php
  }
exit;
}

?>