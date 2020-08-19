<?php
//입력한 아이디와 비번이 있는지
//맞는지 체크해서 메세지출력
//입력한 아이디가 없다면 회원가입 화면으로 링크 걸기

$user_id=$_POST['user_id'];
$user_passwd=$_POST['user_password'];
$conn=mysqli_connect('localhost','test','1111','testdb');


if($conn){

    $query="select * from login where user_id= '$user_id'";
    $result=mysqli_query($conn,$query);
    $num=mysqli_num_rows($result);

    if($num==1){
        $re=mysqli_fetch_array($result);
        if($re[2]==$user_passwd) echo "로그인 성공~!";
        else {
            echo "비밀번호 틀림. 다시 도전 하세요";
        }
    }
    else echo "로그인 실패. 회원가입 하세욥!";
}
else echo "DB에 연결 안됨";

mysqli_close($conn);

?>
