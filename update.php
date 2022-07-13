<?php 
   include 'fluent_db.php';
//    if(isset($_REQUEST['id'])){
//     $id = $_REQUEST['id'];
//     $query = $fluent->from('product')->where('id',$id);
//     $row = $query->fetch();
//     $name = $row['name'];
//     $amount=$row['amount'];
//     $price=$row['price'];
//     $id_p=$row['id'];
//   }
   if(isset($_POST['update'])){
    $product_id=$_POST['updateid'];
    $name      = $_POST['updatename'];
    $amount    = $_POST['updateamount'];
    $price     = $_POST['updateprice'];
   
    $values = array('name' => $name, 'amount' => $amount,'price' => $price);
    $query = $fluent->update('product')->set($values)->where('id',$product_id)->execute();
    sleep(2);
    header('Location:index.php');
    
   }
?>