<?php
include('db_con.php');
$idx=$_GET['idx'];

$query="select * from bbs where id='$idx'";
$result=mysqli_query($conn,$query);
$re=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>글 삭제</title>
</head>

<body>
    <h3>[삭제]</h3>
    <form id="form" method="get" action="delete.php">
        <input type="hidden" name="idx" value=<?=$re[0]?>>
        ID :
        <input type="text" id="id" name="user_id" value=<?=$re[1]?>>
        
        <br> Password : 
        <input type="password" id="password" name="user_passwd" placeholder="비밀번호를 입력하세요">
        <br>
        <input type="submit" value="삭제" id="button">

    </form>
</body>
</html>