<!doctype html>
<html>
    <head>
        <title>게시판 </title>
</head>
<body>
    <table border="1" width="800">
<?php
include('db_con.php');
$idx=$_GET['idx'];
//$idx=7;
$query='select * from bbs where id='.$idx;
$result=mysqli_query($conn,$query);
$query='update bbs set hit=hit+1 where id='.$idx;
mysqli_query($conn,$query);

if($result){
    $re=mysqli_fetch_array($result);
    echo "<tr><td>$re[3]</td></tr>";
    echo "<tr>";
    echo "<td>글쓴이 $re[1]</td>
    <td>날짜 $re[5]</td><td>조회수$re[6]</td></tr>"; 
    echo "<tr><td>$re[4]</td></tr>";
}

$ip= $_SERVER['REMOTE_ADDR'];
echo "<tr><td>IP $ip</td></tr>";

mysqli_close($conn);
echo"<br> <a href='update_form.php?idx=$re[0]'>수정 
 <a href='delete_form.php?idx=$re[0]'>삭제 
 <a href='list.php?idx=$re[0]'>목록  <br>";

?>
</table>
</body>
</html>