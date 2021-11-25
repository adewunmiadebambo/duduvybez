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
        <script language="javascript" src="ckeditor\ckeditor.js"></script>

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
                            <h1 class="page-header">Change Password</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <div class="row">
                        <div class="col-md-12">
        <?php if($_GET['success'] == 1) { ?><div class="alert alert-success">Password has been updated</div> <?php } ?>
        <?php if($error) { ?> <div class="alert alert-danger"><?php echo $error; ?></div> <?php } ?>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <form id="dataform" action="proc-pass.php" method="post" enctype="multipart/form-data">

                    <div class="row">
    <div class="col-md-3">
    New Password<br>
        <input type="password" name="password"  class="form-control" value="<?php echo $volume; ?>">
    </div>
    <!-- /.col-lg-12 -->
</div>
        <div class="row">
    <div class="col-md-3">
    Confirm Password<br>
        <input type="password" name="confirm" class="form-control" value="<?php echo $volume; ?>">
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-md-12">
   <input type="submit" value="Update Password" class="btn btn-danger">
    </div>
    <!-- /.col-lg-12 -->
</div>
</form>            <!-- /.row -->
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
