<?php
    session_start();
    // include('connection.php');
    // $con=new mysqli('localhost','root','','db');
    $con=new mysqli('sql12.freesqldatabase.com','sql12776528','vYGngFVM6r','sql12776528');
    $a='';
    $b='';
    $c='';
    $d='';
    $e='';
    $f='';
    $ok='';
    $fail='';
    if(isset($_POST['submit'])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
            $d=$_POST['d'];
            $e=$_POST['e'];
            $f=$_POST['f'];

    $sumb = "SELECT UID FROM aaa WHERE UID='$a'";
    $result = $con-> query($sumb);
    $noofrows=mysqli_num_rows($result);
    //echo $noofrows;
        if($noofrows==0){
        $sql="INSERT INTO aaa (`UID`, `MOBILE NO`, `NAME`, `FATHER NAME`, `AMOUNT`, `PASSWORD`,`DATE`,`TIME`)VALUES('$a', '$b', '$c', '$d', '$e', '$f',CURRENT_DATE(),CURRENT_TIME())";
        $result=mysqli_query($con,$sql);
        $ok='registration success';
    }
        else{
            $fail='UID already exist';
        }
    }

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
        <span class="a ok"><?php echo $ok;?></span>
        <span class="a fail"><?php echo $fail;?></span>
        <form action="" method="POST" class="form1">
            <h1 class="he">register here</h1><br>

            <label for="">uid</label>
            <input type="text" required class="v in" name='a'><br>

            <label for="">name</label>
            <input type="text" required class="v in" name='c'><br>

            <label for="">father name</label>
            <input type="text" required class="v in" name='d'><br>

            <label for="">mobile no</label>
            <input type="text" required class="v in" name='b' maxlength="10" minlength="10"><br>

            <label for="">amount</label>
            <input type="number" required class="v in" name='e' ><br>

            <label for="">password</label>
            <input type="text" required class="v in" name='f'><br>

            <button name="submit" class="h">submit</button>
            
            
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