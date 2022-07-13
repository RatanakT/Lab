<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
body {
  background-image: url('background.jpg');
}
</style>
<body class="d-flex justify-content-center">
    
</body>
</html>
<?php 
   include 'fluent_db.php' ;
   if(isset($_POST['login'])){
    $email      = $_POST['email'];
    $password   = $_POST['password'];


    $query = $fluent->from('useraccount')->where('email',$email)->where('password',$password);
    $result = $query->fetchAll();

    if ($result) {
        header("Location: table.php");
    } else {
        echo "<script> alert('Email or Password is Wrong!') </script>";
        echo '<div  class="mt-4 m-4 p-5 w-50 " style="background-color: #D3EBCD; border-radius: 25px;">
        <div class="container ">
        <h1 class="d-flex justify-content-center">Log In Failed !</h1> 
        <p class="d-flex justify-content-center mt-4 m-4 p-5 w-5">You entered incorrect email or password.</p>
        <hr>
        <div class="justify-content-between">
            <a href="loginform.php" class="btn btn-outline-danger">Retry</a>
            <a href="index.php" class="btn btn-outline-dark">Sign Up an Account</a>
        </div>
    </div>
    </div>';
    }
   }
?>
