<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<style>
body {
  background-image: url('background.jpg');
}
</style>
<?php 
   include 'fluent_db.php' ;
   if(isset($_POST['register'])){
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $gender     = $_POST['gender'];
    $class      = $_POST['class'];
    $password   = $_POST['password'];

    $values = array('username' => $username, 'email' => $email,'gender' => $gender, 'class' => $class,'password' => $password);
    $query = $fluent->insertInto('useraccount')->values($values)->execute();
   }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
            $(function(){
                alert('You have successfully register!! Click "OK" for an other registration');
            });
</script>

<?php
include('fluent_db.php');
$query = $fluent->from('useraccount');
?>
<body class="d-flex justify-content-center">
    <div class="mt-4 m-4 p-5 w-50 " style="background-color: #D3EBCD; border-radius: 25px;">
    <h4>Registered Information</h4>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-sm-4">Username</li>
            <li class="list-group-item col-sm-8"><?php echo $_POST["username"]; ?></li>
    </ul>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-sm-4">Email</li>
            <li class="list-group-item col-sm-8"><?php echo $_POST["email"]; ?></li>
    </ul>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-sm-4">Gender</li>
            <li class="list-group-item col-sm-8"><?php echo $_POST["gender"]; ?></li>
    </ul>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-sm-4">Class</li>
            <li class="list-group-item col-sm-8"><?php echo $_POST["class"]; ?></li>
    </ul>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-sm-4">Password</li>
            <li class="list-group-item col-sm-8"><?php echo $_POST["password"]; ?></li>
    </ul>
    <br>
    <div><a href="index.php" ><button type="button" class="btn btn-outline-dark">Submit one more time</button></a></div>
    </div>
      
</div>
    
</body>
</html>
