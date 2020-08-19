<?php
include("db_con.php");
$idx=$_GET['idx'];
$user_id=$_GET['user_id'];
$user_passwd=$_GET['user_passwd'];

if($conn){
    $query="select * from bbs where id= '$idx'";
    $result=mysqli_query($conn,$query);
    $re=mysqli_fetch_array($result);
    $num=mysqli_num_rows($result);

    if($num==1){
        if($user_id==$re[1]){
            if($user_passwd==$re[2]){
                $query="delete from bbs where id= $idx";
                mysqli_query($conn,$query);
                echo ("<script>alert('성공적으로 삭제되었습니다.');history.go(-1);</script>");
            }
            else echo ("<script>alert('비밀번호가 틀렷습니다');history.go(-1);</script>");
        }
        else echo ("<script>alert('로그인에 실패했습니다.');history.go(-1);</script>");
    }
    else echo ("<script>alert('글이 없습니다.');history.go(-1);</script>");
}

?>