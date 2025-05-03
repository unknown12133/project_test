<?php
// include('connection.php');
$con=new mysqli('sql12.freesqldatabase.com','sql12776528','vYGngFVM6r','sql12776528');
 header('Content-Type: application/json');
// $con=new mysqli('localhost','root','','db');


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);}
else{   
        $a='';
        $b='';
        $c='';
   if(isset($_GET['a'])){
    $a=$_GET['a'];
   }
   if(isset($_GET['b'])){
       $b=$_GET['b'];
    }
    if(isset($_GET['c'])){
     $c=$_GET['c'];
    }
}
if($a!='' and $b!='' and $c!=''){
    $sql="SELECT SNO FROM aaa WHERE UID='$a'";
    $result=mysqli_query($con,$sql);
      //echo 'success';
     $noofrows=mysqli_num_rows($result);
if($noofrows==1){
$sql1="INSERT INTO aa(`UID`, `QUANTITY`, `AMOUNT`,`DATE`,`TIME`)VALUES('$a', '$b', '$c',CURRENT_DATE(),CURRENT_TIME())";
$resul=mysqli_query($con,$sql1);
 echo json_encode(array('1'));
}else{ echo json_encode(array('0'));}
}else{ echo json_encode(array('0'));}
?>