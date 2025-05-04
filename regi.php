<?php
    session_start();
     //$con=new mysqli('localhost','root','','db');
    $con=new mysqli('sql12.freesqldatabase.com','sql12776528','vYGngFVM6r','sql12776528');
   $a='';
   $b='';
   $c='';
   $d='';
   $e='';
   $f='';
   if(isset($_GET['a'])){
    $sa=$_GET['a'];
    $sumb = "SELECT * FROM aaa WHERE SNO='$sa'";
    $result = $con-> query($sumb);
    $noofrows=mysqli_num_rows($result);
   }
    else{
            header("location:admin.php");
        }
   if(isset($_POST['submit'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $e=$_POST['e'];
    $f=$_POST['f'];
    $sql1="UPDATE aaa SET NAME='$c',FATHER_NAME='$d',MOBILE_NO='$b',PASSWORD='$f' WHERE SNO='$sa'";
    $resul=mysqli_query($con,$sql1);
    if($resul){
    header("location:admin.php?a=admin&b=admin%401&submit=");
  }  
}
   
    
    //echo $noofrows;
 if($noofrows==1){
            foreach ($result as $recor){
        $aa=htmlspecialchars($recor['UID']);
        $ad=htmlspecialchars($recor['MOBILE_NO']);
        $ac=htmlspecialchars($recor['FATHER_NAME']);
        $ab=htmlspecialchars($recor['NAME']);
        $ae=htmlspecialchars($recor['AMOUNT']);
        $af=htmlspecialchars($recor['PASSWORD']);
    }}
     
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <!-- <span class="a ok"><?php echo $ok;?></span> -->
        <!-- <span class="a fail"><?php echo $fail;?></span> -->
        <form action="" method="POST" class="form1">
            <h1 class="he">register here</h1><br>

            <label for="">uid</label>
            <input type="text" required class="v in" name='a' value="<?php echo $aa ?>" readonly=""><br>

            <label for="">name</label>
            <input type="text" required class="v in" name='c' value="<?php echo $ab ?>"><br>

            <label for="">father name</label>
            <input type="text" required class="v in" name='d' value="<?php echo $ac ?>"><br>

            <label for="">mobile no</label>
            <input type="text" required class="v in" name='b' maxlength="10" minlength="10" value="<?php echo $ad ?>"><br>

            <label for="">amount</label>
            <input type="number" required class="v in" name='e' value="<?php echo $ae ?>" readonly=""><br>

            <label for="">password</label>
            <input type="text" required class="v in" name='f' value="<?php echo $af ?>"><br>

            <button name="submit" class="h">UPDATE</button>
            
            
        </form>
    </div>
    <script> 
          setTimeout(function() {
              document.querySelector('.a').remove();
              }, 2300);

              if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>
</body>
</html>