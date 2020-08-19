<?php
//post 방식으로 넘어온 사용자 입력값을 받는 변수
$idx=$_POST['user_id'];
$password=$_POST['user_password'];
$conn=mysqli_connect('localhost','test','1111','testdb');
if($conn){
    echo "DB와 연결 됨."."<br>";
}

$query="insert into login (user_id,passwd) values ('$idx','$password')";
mysqli_query($conn,$query);
echo "정상적으로 등록이 완료되었습니다.";
mysqli_close($conn);


?>