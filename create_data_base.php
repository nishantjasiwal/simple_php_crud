<?php

$HOST="127.0.0.1";
$USERNAME="root";
$PASSWORD="";
$DATABASENAME="my_db";

//$DATABASENAME="MY_DB";
$conn=mysqli_connect($HOST,$USERNAME,$PASSWORD,$DATABASENAME);

if(!$conn){

    die("failed to load log in db".mysqli_connect_error());
}

echo "we are in";


//$qry="CREATE DATABASE my_db";
//
$qry="CREATE TABLE login(id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,email VARCHAR(20),primary key (id))";
$res=mysqli_query($conn,$qry);

if($res){
    echo "Created success!!";
}else{
    die("failed to create db".mysqli_connect_error());
}

mysqli_close($conn);

?>