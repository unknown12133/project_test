<?php
    session_start();
   $a='';
    // if($_SESSION['a']!=''){
    //     $a=$_SESSION['a'];
    // }
     if(isset($_SESSION['a'])){
        $a=$_SESSION['a'];
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
    
         <span class="a fail"><?php echo $a; ?></span> 
<form action="login1.php" method="GET" class="form1 aa">
            <label for="input" class="log la">enter uid</label><br>
            <input type="text" class="log in v" placeholder="" required name="a"><br>

            <label for="input" class="log la" >mobile number</label><br>
            <input type="text" class="log in v" required name="b" maxlength="10" minlength="10"><br>

            <label for="input" class="log la">password</label><br>
            <input type="text" class="log in v" required name="c"><br>

            <button type="submit" class="log btn h" name="submit">SUBMIT</button></form>
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