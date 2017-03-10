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

//输出排行榜
$sql = "SELECT * FROM lb ORDER BY score DESC";
$result = mysql_query($sql);
$count = 0;
$myRank = 0;
while($rows = mysql_fetch_array($result)){
	$count ++;
	if($_POST['name'] == $rows['name'])
		$myRank = $count;
	
	echo  $rows['name'] . "|" . $rows['score'] . "|" . $count ."," ;
}
echo "myRank:".$myRank;

mysql_close($conn);
?>