
<?php 
   include 'fluent_db.php' ;
   if(isset($_POST['submit'])){
    $name   = $_POST['name'];
    $amount      = $_POST['amount'];
    $price     = $_POST['price'];
   
    $values = array('name' => $name, 'amount' => $amount,'price' => $price);
    $query = $fluent->insertInto('product')->values($values)->execute();
    sleep(2); 
    header('Location: index.php');
   }
?>
