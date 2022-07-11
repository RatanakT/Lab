
<?php

if(isset($_POST['deletedata']))
{
    include 'fluent_db.php' ;
    $deleteID =$_POST['delete_id'];
    $query = $fluent->deleteFrom('product')->where('id', $deleteID)->execute();
    sleep(2);
    header('Location: index.php');    
    }

?>


