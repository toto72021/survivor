<?php 

$Ver = $_POST[ver];  
$CVer = "1.0.0.04221622";

if ($Ver = $CVer) {
    echo("version_completed");
}else {
	echo "version_faild";
}

?>