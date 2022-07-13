<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.20/sweetalert2.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>


<body style="margin: 100px;" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.20/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
   
    <div class="d-flex justify-content-between " >
     <h3 >List of Products</h3>
     <a class='btn btn-success btn-sm'  class="btn btn-primary" data-toggle="modal" data-target="#editmodal" > <i class="fa-solid fa-plus"></i>  Add more product</a>
     
   </div>
    <br>
    <table class="table table-bordered ">
        <thead>
			<tr>
				<th>ID</th>
				<th>Product Name</th>
				<th>Amount</th>
				<th>Price</th>
        <th>Action</th>
		
		
			</tr>
		</thead>
        <tbody>
            <?php
           include 'fluent_db.php' ;
         
			 
            // read all row from database table
			$query = $fluent->from('product');      

            // read data of each row

            foreach ($query as $row){
                echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["amount"] . "</td>
                <td>" . $row["price"] . "</td>
                <td>
                    <a class='btn btn-primary btn-sm btn-update' data-target=\"#updatemodel\"'>Update</a>
                    <button id='btndelete' name='delete' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#deletemodal' >Delete</button>
                    
                </td>
            </tr>";

            }
		
            $fluent->close();
            
            ?>
        </tbody>
    </table>


    <!-- POP UP TO ADD PRODUCT -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Add Product </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form  action="add.php" id="form" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter Product Name">
                        </div>
                        <br>

                        <div class="form-group">
                            <label> Amount </label>
                            <input type="text" name="amount" id="amount" class="form-control"
                                placeholder="Enter Product Amount ">
                        </div>
                        <br>

                        <div class="form-group">
                            <label> Price </label>
                            <input type="text" name="price" id="price" class="form-control"
                                placeholder="Enter Product Price">
                        </div>
                        <br>

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="confirmadd"  type="submit" name="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

        <!-- POP UP TO UPDATE PRODUCT -->
        <div class="modal fade" id="updatemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Update Product </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form  action="update.php" id="form" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="updateid" id="updateid">

                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" name="updatename" id="updatename" class="form-control"
                                placeholder="Enter Product Name">
                        </div>
                        <br>

                        <div class="form-group">
                            <label> Amount </label>
                            <input type="text" name="updateamount" id="updateamount" class="form-control"
                                placeholder="Enter Product Amount ">
                        </div>
                        <br>

                        <div class="form-group">
                            <label> Price </label>
                            <input type="text" name="updateprice" id="updateprice" class="form-control"
                                placeholder="Enter Product Price">
                        </div>
                        <br>

                        
                    </div>
                    <div class="modal-footer">
                        <button  type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                        <button id="confirmupdate"  type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

     <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
     <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="delete.php" method="POST">
                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button id="delete" type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                        <a type="button" href="index.php" class="btn btn-secondary"> NO </a>
                        
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      $(function () {
        $('#confirmadd').on('click', function () {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Product Added Successfully',
                showConfirmButton: false,
                timer: 1500
                })
        });

      });
    </script>
    <script>
      $(function () {

        $('#confirmupdate').on('click', function () {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Product Updated',
                showConfirmButton: false,
                timer: 1500
                })
        });

      });
    </script>
       <script>
        $(document).ready(function () {

            $('.btn-danger').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>
    <script>
      $(function () {
        $('#delete').on('click', function () {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Product Delete Successfully',
                showConfirmButton: false,
                timer: 1500
                })
        });

      });
    </script>  
    <script>
        $(document).ready(function () {
            $('.btn-update').on('click', function() {
                $('#updatemodel').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function (){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#updateid').val(data[0]);
                $('#updatename').val(data[1]);
                $('#updateamount').val(data[2]);
                $('#updateprice').val(data[3]);
            });

        });
    </script>
    
</body>
</html>
