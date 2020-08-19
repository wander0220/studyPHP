<?php
//입력한 아이디와 비번이 있는지
//맞는지 체크해서 메세지출력
//입력한 아이디가 없다면 회원가입 화면으로 링크 걸기

$user_id=$_GET['user_id'];
$user_passwd=$_GET['user_password'];

echo $user_id."  ".$user_passwd;

?>