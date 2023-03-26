<?php

$conn=mysqli_connect("localhost","root","");
if(!$conn){
    echo "failed";
}

mysqli_select_db($conn,"my_db");

$myname=$_POST["name"];
$myemail=$_POST["email"];
$myid=$_POST['id'];


$qry="UPDATE login SET name=$myname,email = $myemail WHERE id=$myid";

$res=mysqli_query($conn,$qry);
if($res==true){
   echo "ok";
}else{
    echo "failed";
}
//echo json_encode($ans);
mysqli_close($conn);



?>