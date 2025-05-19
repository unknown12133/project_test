<?php
 //include('connection.php');
$con=new mysqli('sql12.freesqldatabase.com','sql12779760','gwSQrf9X9P','sql12779760');
 //header('Content-Type: application/json');
 //$con=new mysqli('localhost','root','','db');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);}
else{
     $a='';
     $b='';
     $fail='';
     if(isset($_GET['a'])){
         $a=$_GET['a'];}
    if(isset($_GET['b'])){
     $b=$_GET['b'];
    $fail='invalid credentials';
    }
    $sql="SELECT * FROM aaa";
    $resul = $con-> query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylee.css">


</head>
<body>
  <?php
   if($a!='admin' and $b!='admin@1'){?>
<div class="form">
    
    <span class="a fail"><?php echo $fail;?></span>
<form action="" method="GET" class="form1 aa">
        <label for="input" class="log la">user name</label><br>
        <input type="text" class="log in v" required name="a"><br>

        <label for="input" class="log la">password</label><br>
        <input type="text" class="log in v" required name="b" maxlength="10"><br>
        

        <button type="submit" class="log btn h" name="submit">SUBMIT</button>
</form>
    </div>
    <?php } 
    if($a=='admin' and $b=='admin@1'){?>
    
    <div id="b">
        <h2 class="jj">user data:</h2><br>
        <div class="gg">
        <div class="dd" >
            <table class="g">
            <tr>
                    <th class="tt">S.NO</th>
                    <th class="tt">UID</th>
                    <th class="tt">NAME</th>
                    <th class="tt">FATHER NAME</th>
                    <th class="tt">MOBILE NO</th>
                    <th class="tt">AMOUNT</th>
                    <th class="tt">DATE</th>
                    <th class="tt">OPERATION</th>
                </tr>
               <?php foreach ($resul as $recor){?>
                <tr>
                     <td class="t"> <?php echo htmlspecialchars($recor['SNO']); ?> </td>
                     <td class="t"> <?php echo htmlspecialchars($recor['UID']); ?> </td>
                    <td class="t"> <?php echo htmlspecialchars($recor['NAME']); ?></td>
                    <td class="t"> <?php echo htmlspecialchars($recor['FATHER_NAME']); ?></td>
                    <td class="t"> <?php echo htmlspecialchars($recor['MOBILE_NO']); ?></td>
                    <td class="t"> <?php echo htmlspecialchars($recor['AMOUNT']); ?></td>
                    <td class="t"> <?php echo htmlspecialchars($recor['DATE']); ?></td>
                    <td class="t"><button class="n"><a href="regi.php?a=<?php echo htmlspecialchars($recor['SNO']); ?>">UPDATE</a></button> <button class="nn"><a href="delete.php?a=<?php echo htmlspecialchars($recor['SNO']); ?>"> DELETE</a></button></td>
                   
                </tr>
               <?php } ?>
            </table>
        </div>
    </div></div>
    <?php } ?>
    
    
    
    <script> 
          setTimeout(function() {
              document.querySelector('.a').remove();
              }, 2300);

              
        
    </script>

</body>
</html>
