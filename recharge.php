<?php
    session_start();
    // include('connection.php');

    $con=new mysqli('sql12.freesqldatabase.com','sql12776528','vYGngFVM6r','sql12776528');
    // $con=new mysqli('localhost','root','','db');
    $a='';
    $b='';
    $c='';
    $fail=''; 

    if(isset($_POST['submit'])){
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];

        $sumb = "SELECT UID FROM aaa WHERE UID='$a'";
    $result = $con-> query($sumb);
    $noofrows=mysqli_num_rows($result);

    if($noofrows==1){
        header("Location:upi://pay?pa=saibattu9618@axl&pn=sai%20kumar&mc=0000&mode=02&purpose=00&am=$b");
        //  echo 'a';
    }
    else{
        $fail='UID not exist';
        // echo 'fail';
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
    
        <span class="a fail"><?php echo $fail;?></span>
<form action="" method="POST" class="form1 aa">
            <label for="input" class="log la">enter uid</label><br>
            <input type="text" class="log in v" required name="a"><br>

            <label for="input" class="log la">mobile no</label><br>
            <input type="text" class="log in v" required name="b" maxlength="10" minlength="10"><br>
            
            <label for="input" class="log la">amount</label><br>
            <input type="text" class="log in v" required name="c"><br>

            <button type="submit" class="log btn h" name="submit">SUBMIT</button>
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
