<?php
//비밀번호 체크
//업데이트

include("db_con.php");
$idx=$_GET['idx'];
$user_id=$_GET['user_id'];
$title=$_GET['user_title'];
$content=$_GET['content'];
$user_passwd=$_GET['user_passwd'];

if($conn){
    $query="select * from bbs where id= '$idx'";
    $result=mysqli_query($conn,$query);
    $num=mysqli_num_rows($result);

    if($num==1){
        $re=mysqli_fetch_array($result);
        if($user_id==$re[1]){
            if($user_passwd==$re[2]){
                $query="update bbs set title='$title', content='$content' where id='$idx'";
                mysqli_query($conn,$query);
                echo "<script>alert('정상적으로 처리되었습니다.');history.go(-2);</script>";
            }
            else echo "<script>alert('비밀번호가 틀렸습니다');history.go(-1);</script>";
        }
        else echo "<script>alert('아이디를 잘못 입력 하셨습니다');history.go(-1);</script>";
    }
    else echo ("<script>alert('정상적으로 처리되지 않았습니다. 다시 시도하세요.');history.go(-1);</script>");
}
else echo ("<script>alert('정상적으로 처리되지 않았습니다.\n 다시 시도하세요.');history.go(-1);</script>");


?>