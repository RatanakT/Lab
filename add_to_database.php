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
<?php 
   include 'config.php' ;
   if(isset($_POST['register'])){
    $name   = $_POST['name'];
    $amount      = $_POST['amount'];
    $price     = $_POST['price'];
   
    $sql = "INSERT INTO product(name,amount,price) VALUES('$name','$amount','$price')";
    $result = mysqli_query($connection,$sql);
   }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
            $(function(){
                alert('You have successfully register!! Click "OK" for an other registration');
            });
</script>

<?php
include('config.php');
$query = "SELECT id, name, amount, price FROM product";
$result = $connection->query($query);
?>
<body class="d-flex justify-content-center">
    <div class="mt-4 m-4 p-5 w-50 " style="background-color: #D3EBCD; border-radius: 25px;">
    <h4>Registered Product</h4>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-sm-4">Name</li>
            <li class="list-group-item col-sm-8"><?php echo $_POST["name"]; ?></li>
    </ul>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-sm-4">Amount</li>
            <li class="list-group-item col-sm-8"><?php echo $_POST["amount"]; ?></li>
    </ul>
    <ul class="list-group list-group-horizontal">
            <li class="list-group-item col-sm-4">Price</li>
            <li class="list-group-item col-sm-8"><?php echo $_POST["price"]; ?></li>
    </ul>
    <br>
    <div><a href="index.php" ><button type="button" class="btn btn-outline-danger">Back</button></a></div>
    </div>
      
</div>
    
</body>

</html>