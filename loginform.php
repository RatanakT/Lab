<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.20/sweetalert2.min.css">
  </head>
<style>
body {
  background-image: url('background.jpg');
}
</style>
<body class="d-flex justify-content-center">
<div  class="mt-4 m-4 p-5 w-50 " style="background-color: #D3EBCD; border-radius: 25px;">

<form action="login.php" method="POST">
        <div class="container">
            <h1>Log In</h1>
            <p>Please fill in this form to sign in.</p>
            <hr>
            <label for="email">Email</label>
            <input class="form-control mb-3" type="email" name="email" required>
            <label for="password">Password</label>
            <input class="form-control mb-3" type="password" name="password" required>
            <hr>
            <div class="d-inline">
                <a href="index.php" class="btn btn-outline-danger">Back</a>
                <button type="submit" name="login" class="btn btn-outline-dark">Log In</button>
            </div>
        </div>
      </form>    
</div>

</body>
</html>