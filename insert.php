<?php

header("Content-type:text/html;charset=utf-8");
 include('mysqlserver.php');//链接数据库
$type=$_POST["type"];
$temp=$_POST["temp"];
$ph=$_POST["ph"];
$dissolvedO2=$_POST["dissolvedO2"];
$cond=$_POST["cond"];
$turb=$_POST["turb"];
$mnO4=$_POST["mnO4"];
$nh=$_POST["nh"];
$pvalue=$_POST["pvalue"];
$nvalue=$_POST["nvalue"];
$situ=$_POST["situ"];
$sql="insert into water VALUES('$type',$temp,$ph,$dissolvedO2,$cond,$turb,$mnO4,$nh,$pvalue,$nvalue,'$situ');";
$conn->query($sql);
echo "<script>window.location.href='insertData.html'</script>";