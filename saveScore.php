<?php
$servername = "bdm26409811.my3w.com";
$username = "bdm26409811";	
$password = "q402788830";
$database = "bdm26409811_db";

//连接数据库
$conn = mysql_connect($servername,$username,$password);
if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
}
//选择数据库
mysql_select_db("$database", $conn);

//插入值
$sql="INSERT INTO lb (name,score)VALUES('$_POST[name]','$_POST[score]')";
if (!mysql_query($sql,$conn)){
	die('Error: ' . mysql_error());
  }else {
	echo "insert";	  
  }

 mysql_close($conn); 
?>