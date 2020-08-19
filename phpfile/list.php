<!doctype html>
<html>
    <head>
        <title>로그인 화면 </title>
</head>
<body>
    <h1> 로그인 목록 </h1>
    <table border="1" width="400">
        
<?php
$conn=mysqli_connect('localhost','test','1111','testdb');

if($conn){
    echo "연결됨. <br>";
}

echo "<tr><td>번호</td><td>아이디</td><td>비밀번호</td></tr>";

$query='select * from join_mem order by id desc';
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);

for($i=0;$i<$num;$i++){
    echo "<tr>";
    $re=mysqli_fetch_array($result);
    echo "<td>$re[0]</td><td>$re[1]</td><td>$re[2]</td></tr>"; 
}

echo "<br>";
mysqli_close($conn);

?>
</table>
</body>
</html>
