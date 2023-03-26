<?php

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"my_db");

$name=$_POST['name'];
$email=$_POST['email'];

$str="INSERT INTO `login` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email');";

$res=mysqli_query($conn,$str);
if($res==true)
	$response="inserted";
else
	$response="failed";
echo json_encode($response);


?>
