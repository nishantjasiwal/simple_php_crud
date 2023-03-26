<?php

$conn=mysqli_connect("localhost","root","");

if(!$conn){
    die("failed");
}

mysqli_select_db($conn,"my_db");

$qry="SELECT * FROM login";
$data=mysqli_query($conn,$qry);
// if(mysqli_num_rows($data)>0){

//     while($row=mysqli_fetch_assoc($data)){
//         echo "{$row['name']}.{$row['email']}";
//     }
// }else{
//     echo "couldn't fetch";
// }

while($op=mysqli_fetch_array($data)){
$res[]=$op;
}
echo json_encode($res);
mysqli_close($conn);

?>