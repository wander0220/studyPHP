<?php

$id=$_POST['user_id'];
$password=$_POST['user_password'];
$name=$_POST['user_name'];
$gender=$_POST['sex_info'];
$houseTel=$_POST['user_houseTel'];
$tel=$_POST['user_tel'];
$email=$_POST['user_email'];
$address1=$_POST['user_address1'];
$address2=$_POST['user_address2'];
$address3=$_POST['user_address3'];
$address4=$_POST['user_address4'];

echo "아이디 : ".$id."<br>";
echo "비밀번호 : ".$password."<br>";
echo "이름 : ".$name."<br>";
echo "성별 : ".$gender."<br>";
echo "집전화 : ".$houseTel."<br>";
echo "핸드폰 : ".$tel."<br>";
echo "이메일 : ".$email."<br>";
echo "주소 : ".$address1.$address2.$address3.$address4."<br>";

$hobby=$_POST['hobby'];
$hobbys="";
for($i=0;$i<count($_POST['hobby']);$i++){
    echo $hobby[$i];
    $hobbys.=$hobby[$i];
}
echo "<br>";

echo "유입경로 : ";
$know=$_POST['sel'];
$knows="";
for($i=0;$i<count($know);$i++){
    echo $know[$i];
    $knows.=$know[$i];
}
echo "<br>";

$conn=mysqli_connect('localhost','test','1111','testdb');
if($conn){
    $query="insert into join_mem(user_id,passwd,name,gender,hp,email,addr,hobby,know) values ('$id','$password','$name','$gender','$tel','$email','$address1 $address2 $address3 $address4','$hobbys','$knows')";
    mysqli_query($conn,$query);
}

mysqli_close($conn);

?>