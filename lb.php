<?php 

$servername = "bdm26409811.my3w.com";
$username = "bdm26409811";	
$password = "q402788830";
$database = "bdm26409811_db";

$conn = mysql_connect($servername,$username,$password);

if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
}else {
	echo "连接成功<br>";
}

mysql_select_db("$database", $conn);

//$sql="INSERT INTO lb (name, position, score)VALUES('$_POST[name]','$_POST[position]','$_POST[score]')";

$sql="INSERT INTO lb (name, position, score)VALUES('z','1','233')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo "插入值成功";

$na = $_POST[name];  
echo $na;

$st = "<br>Hello world!";
echo $st;

//mysql_close($conn);
$conn = null;
?>