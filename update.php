<?php
 //include('connection.php');
 $con=new mysqli('sql12.freesqldatabase.com','sql12776528','vYGngFVM6r','sql12776528');
 header('Content-Type: application/json');
//  $con=new mysqli('localhost','root','','db');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);}
else{ 
    $a='';
    $b='';
    $c=array('0');
    $d=array('1');
    if(isset($_GET['a'])){
        $a=$_GET['a'];
       }
    if(isset($_GET['b'])){
        $b=$_GET['b'];
       }
}
if($a!='' and $b!=''){
 $sql="SELECT SNO FROM aaa WHERE UID='$a'";
$result=mysqli_query($con,$sql);
//  echo 'success';
 $noofrows=mysqli_num_rows($result); 
if($noofrows==1){
    $sql1="UPDATE aaa  SET AMOUNT='$b' WHERE UID='$a'";
    $resul=mysqli_query($con,$sql1);
    echo json_encode($d); 
}
else{echo json_encode($c);}
}
else{ echo json_encode($c);}
?>