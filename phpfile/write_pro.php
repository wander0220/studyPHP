<?php
include('db_con.php');
$user_id=$_POST['user_id'];
$passwd=$_POST['user_passwd'];
$title=$_POST['user_title'];
$content=$_POST['content'];

$hit=0;

if($conn){
    $query="insert into bbs (user_id,passwd,title,content,reg_date,hit) values ('$user_id','$passwd','$title','$content',now(),$hit)";
    mysqli_query($conn,$query);
}
mysqli_close($conn);
echo "<script>alert('등록되었습니다');</script>";
?>
<meta http-equiv="refresh" content="0;URL='list.php'">
