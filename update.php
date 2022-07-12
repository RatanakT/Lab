<?php 
   include 'fluent_db.php';
   if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $query = $fluent->from('product')->where('id',$id);
    $row = $query->fetch();
    $name = $row['name'];
    $amount=$row['amount'];
    $price=$row['price'];
    $id_p=$row['id'];
   }
   if(isset($_POST['submit'])){
   // include 'fluent_db.php' ;
    $product_id=$_POST['prod_id'];
    $name   = $_POST['name'];
    $amount      = $_POST['amount'];
    $price     = $_POST['price'];
   
    $values = array('name' => $name, 'amount' => $amount,'price' => $price);
    $query = $fluent->update('product')->set($values)->where('id',$product_id)->execute();
    header('Location:index.php');
    
   }
?>
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
<body class="d-flex justify-content-center"> 
<div class="mt-4 m-4 p-5 w-50 " style="background-color: #D3EBCD; border-radius: 25px;">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="container">
            <h1>Update Product</h1>
            <hr>         
            <label for="name">Product Name</label>
            <input type="" name="prod_id" value="<?php echo $id_p ?>">
            <input class="form-control mb-3" type="text" name="name" value="<?php echo $name; ?>"
            <label for="amount">Amount</label>
            <input class="form-control mb-3" type="text" name="amount" value="<?php echo $amount; ?>">

            <label for="price">Price</label>
            <input class="form-control mb-3" type="text" name="price" value="<?php echo $price; ?>">

            <hr>
          
            <!-- <button type="submit" name="submit" class ="btn btn-outline-dark ">Edit</button> -->
            <div class="row justify-content-center" ><input class="btn btn-outline-dark" type="submit" name="submit" value="Update"></div><br>
        </div>
      </form>  
</body>
</html>