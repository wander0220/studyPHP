<!doctype html>
<html>
    <head>
        <title>게시판 </title>
</head>
<body>
    <h1>게시판 </h1>
    <table border="1" width="800">
    <form id="form" method="POST" action="search.php">
    <select name="sel">
            <option value="all">전체검색</option>
            <option value="title">제목</option>
            <option value="user_id">작성자</option>
            <option value="content">내용</option>
     </select>
     <input type="text" name="search" >
     <input type="submit" value="검색" >
    </form>
<?php
include('db_con.php');
$search=$_POST['search'];
$sel=$_POST['sel'];

$query="select * from bbs where $sel like '%$search%' order by id desc";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);

echo "<tr><td>번호</td><td>아이디</td><td>제목</td><td>게시일</td><td>조회수</td></tr>";

for($i=0;$i<$num;$i++){
    echo "<tr>";
    $re=mysqli_fetch_array($result);
    echo "<td>$re[0]</td>
    <td>$re[1]</td>
    <td><a href='read.php?idx=$re[0]'>$re[3]</td>
    <td>$re[5]</td>
    <td>$re[6]</td>
    </tr>";     
}

echo "<br>";
mysqli_close($conn);

?>
</table>
<br><input type="button" value="목록" id="button" onclick="location.href='list.php'">
<input type="button" value="글쓰기" id="button" onclick="location.href='write.html'">
</body>
</html>