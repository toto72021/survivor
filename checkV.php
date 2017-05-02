<?php 

$Ver = $_POST[ver];  
$CVer = "1.0.0.050215";

if ($Ver == $CVer) {
	echo "version_confirm" ;
}else {
	echo "version_faild : $CVer";
}

?>