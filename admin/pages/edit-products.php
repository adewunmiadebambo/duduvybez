<?php
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Duduvybez  Admin Area</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
     <?php include('nav.php'); ?>
      

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Edit Products</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

<div class="row">
    <div class="col-lg-12">
       <a href="add-products.php" class="btn btn-primary">Add Products</a>  <br><br>
       <?php if($_GET['success'] == 1) { ?><div class="alert alert-success">Selected Product have been removed</div> <?php } ?>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
     
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Image </th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
                $query = "select * from products order by id desc";
                $result = mysqli_query($conn, $query);
                $num_rows = mysqli_num_rows($result);

                for($i=0; $i<$num_rows; $i++)
                {
                    $row = mysqli_fetch_array($result);
                    ?>
                             <tr class="odd gradeX">
                              <td><?php echo substr(strip_tags($row['product_name']),0,40); ?>...</td>
                              <td><?php echo $row['price']; ?></td>
                               <td><img src="uploads/cover/<?php echo $row['filename']; ?>" style="height:40px;"></td>
                                <td class="center"> <a href="del-products.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?');">Delete</a> </td>
                                                </tr>

                <?php } ?>    
                                            </tbody>
                                        </table>


    </div>
    <!-- /.col-lg-12 -->
</div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
