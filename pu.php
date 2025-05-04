<?php
$con=new mysqli('sql12.freesqldatabase.com','sql12776528','vYGngFVM6r','sql12776528');
 header('Content-Type: application/json');
 //$con=new mysqli('localhost','root','','db');


if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);}
else{  
        $a='';// $aaa='0'; 
        $b=''; $aab='0';
        $c=''; $aac='0';
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
    //$aaa='1';
    $sql="SELECT AMOUNT FROM aaa WHERE UID='$a'";
    $result=mysqli_query($con,$sql);
    $noofrows=mysqli_num_rows($result);
    foreach ($result as $record){
        $aa=htmlspecialchars($record['AMOUNT']);}
    if($noofrows==1){
        $ab=$aa-$c;
        $aab='1';
        if($ab>=0){
        $sql1="INSERT INTO aa(`UID`, `QUANTITY`, `AMOUNT`,`DATE`,`TIME`)VALUES('$a', '$b', '$c',CURRENT_DATE(),CURRENT_TIME())";
        $resul=mysqli_query($con,$sql1);
        $sql2="UPDATE aaa  SET AMOUNT='$ab' WHERE UID='$a'";
        $resu=mysqli_query($con,$sql2);
       
        $aac='1'; 
      
    }}}
    echo json_encode(array($aab,$aac));
    
