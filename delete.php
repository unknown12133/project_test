<?php
  //include('connection.php');
$con=new mysqli('sql12.freesqldatabase.com','sql12779760','gwSQrf9X9P','sql12779760');
 //header('Content-Type: application/json');
 // $con=new mysqli('localhost','root','','db');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);}
else{ 
    $a='';
    if(isset($_GET['a'])){
        $a=$_GET['a'];
       }
}
if($a!=''){
 $sql="DELETE FROM aaa WHERE SNO='$a'";
$result=mysqli_query($con,$sql);
if($result){
    header("location:admin.php?a=admin&b=admin%401&submit=");
}
}
