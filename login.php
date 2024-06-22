<?php

header("Content-type:text/html;charset=utf-8");
 include('mysqlserver.php');//链接数据库
$name1=$_POST["username1"];
$pwd1=$_POST["userpwd1"];
$sql="select * from User where Name='$name1' and Password='$pwd1'";
$result=$conn->query($sql);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
$rownum=mysqli_num_rows($result);
if($rownum==1)
{
  $op = $row['IsOp'];
  if($op==1)
  {
    echo "<script>window.location.href='admin.html'</script>";
  } else{
    echo "<script>window.location.href='user.html'</script>";

  }
}else{
	
	echo "<script language=javascript>alert('登录失败');history.back()</script>";
}