<?php
include'connect.php';

// $sql = "SELECT User_Name,Password,First_Name,Last_Name,User_Id,User_Type,Status FROM consumer WHERE User_Name='$user' AND Password='$pwd'";
$sql =" SELECT tl.Review,fd.Food_Name
	FROM trust_level AS tl 
	
	INNER JOIN food AS fd
	USING(User_Id)
	-- On (trust_level.Food_Id = food.Food_Id)
	";


$result = $conn->query($sql);
$flag=0;
$row = $result->fetch_assoc();

print_r($row);
?>
