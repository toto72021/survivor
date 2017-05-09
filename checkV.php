<?php 

$Ver = $_POST[ver];  
$CVer = "1.0.1.05091010";

if ($Ver == $CVer) {
	echo "version_confirm" ;
}else {
	echo "version_faild : $CVer";
}

?>