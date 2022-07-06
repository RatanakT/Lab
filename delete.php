<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body style="margin: 100px;">
   <div class="d-flex justify-content-between">
   </div>
    <br>
</body>

<?php 

include 'config.php' ;
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$deleteID =$_GET['rn'];
$query ="DELETE FROM product WHERE id = '$deleteID'";
$result = $connection->query($query);

if($result){
    echo "<h3 >Record deleted from database</h3>";
}
else{
    echo "<h3>Failed to delete record from database</h3>";
}
echo "<br/>
<a class='btn btn-success btn-sm' href='index.php'>Back</a>
";
?>
</html>

