﻿<?php 

$Ver = $_POST[ver];  
$CVer = "1.0.0.05082227";

if ($Ver == $CVer) {
	echo "version_confirm" ;
}else {
	echo "version_faild : $CVer";
}

?>