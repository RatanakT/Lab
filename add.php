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

<form action="add_to_database.php" method="POST">
        <div class="container">
            <h1>Add Product</h1>
            <hr>         
            <label for="name">Product Name</label>
            <input class="form-control mb-3" type="text" name="name" required>

            <label for="amount">Amount</label>
            <input class="form-control mb-3" type="text" name="amount" required>

            <label for="price">Price</label>
            <input class="form-control mb-3" type="text" name="price" required>

            <hr>
          
            <!-- <button type="submit" name="register" class ="btn btn-outline-dark ">Register</button> -->
            <div class="row justify-content-center" ><input class="btn btn-outline-dark" type="submit" name="register" value="Register"></div><br>
        </div>
      </form>
    
</body>
</html>