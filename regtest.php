<?php
	$string='+977-9840012847';
	$regex= '/^(\+[7-9]{3})?-?98\d{8}$/';
	if(preg_match($regex,$string)){
		echo"correct format";


		$normal =preg_replace('/(\+[]{})?-?\{}/','',$string);
		echo"and the replaced pattern is:".$normal;
	}else{
		echo" Incorrect format";
	}


?>