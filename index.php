<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<style>
body {
  background-image: url('background.jpg');
}
</style>
<body class="d-flex justify-content-center"> 
<div class="mt-4 m-4 p-5 w-50 " style="background-color: #D3EBCD; border-radius: 25px;">

<form action="registration.php" method="POST">
        <div class="container">
            <h1>Registration Form</h1>
            <p>Please fill in this form to create an account .</p>
            <hr>
            <label for="username">Username</label>
            <input class="form-control mb-3" type="text" name="username" required>

            <label for="email">Email</label>
            <input class="form-control mb-3" type="email" name="email" required>
   
            <div class="form-floating">
            <input class="form-check-input" type="radio" name="gender" value="Male">Male
            <input class="form-check-input" type="radio" name="gender" value="Female">Female
            <input class="form-check-input" type="radio" name="gender" value="Others">Others
           </div><br>

            <label for="class">Class</label>
            <input class="form-control mb-3" type="text" name="class" required>

            <label for="password">Password</label>
            <input class="form-control mb-3" type="password" name="password" required>
            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <!-- <button type="submit" name="register" class ="btn btn-outline-dark ">Register</button> -->
            <div class="row justify-content-center"><input class="btn btn-outline-dark" type="submit" name="register" value="Register"></div><br>
        </div>
      </form>
      <div class="d-flex justify-content-center">
          <p>Already have an account? <a href="loginform.php">Sign in</a>.</p>
</div>
    
</body>
</html>

