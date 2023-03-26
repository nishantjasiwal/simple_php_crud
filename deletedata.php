<?php


$conn=mysqli_connect("localhost","root","");
if(!$conn){
    die("failed");
}

mysqli_select_db($conn,"my_db");

$id=$_POST['id'];

$qry="DELETE FROM login where id=$id";

$res=mysqli_query($conn,$qry);
if($res==true){
    echo "deleted";
}else{
    echo "failed to delete";
}
mysqli_close($conn);
?>