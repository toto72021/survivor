<?php 

$Ver = $_POST[ver];  
$CVer = "1.0.0.0425";

if ($Ver == $CVer) {
	echo "version_confirm" ;
}else {
	echo "version_faild : $CVer";
}

?>