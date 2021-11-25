<?php
include('connect.php');

if($_GET['id'])
{
    $id = $_GET['id'];
}

 $query = "select * from newsletter where id = '$id'";
 $result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

$title = $row['title'];
$date = $row['date'];
$volume = $row['volume'];
$content = $row['content'];
$cover_img = $row['cover_img'];
$archive_img = $row['archive_img'];


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
                            <h1 class="page-header">Edit Newsletter</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <div class="row">
                        <div class="col-md-12">
        <?php if($_GET['success'] == 1) { ?><div class="alert alert-success">News have been added</div> <?php } ?>
        <?php if($error) { ?> <div class="alert alert-danger"><?php echo $error; ?></div> <?php } ?>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <form id="dataform" action="proc-edit.php" method="post" enctype="multipart/form-data">

<div class="row">
    <div class="col-md-12">
    Title<br>
    <textarea class="form-control" id="title" name="title"> <?php echo $title; ?></textarea>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
        CKEDITOR.replace( 'title' );
     </script> 
    </div>
        </div>
        <div class="row">
    <div class="col-md-3">
    Date<br>
        <input type="date" name="date" class="form-control" value="<?php echo $date; ?>">
    </div>
    <div class="col-md-3">
    Volume<br>
        <input type="text" name="volume" placeholder="Vol. 5" maxlength="10" class="form-control" value="<?php echo $volume; ?>">
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-md-6">
    Cover Image<br><img src="uploads/cover/<?php echo $cover_img; ?>" style="height: 100px; width: 100px;"><br>
        <input type="file" name="img_cover" class="form-control">
    </div>
    <div class="col-md-6">
    Archive Image<br><img src="uploads/archive/<?php echo $archive_img; ?>" style="height: 100px; width: 100px;"><br>
        <input type="file" name="img_archive" class="form-control">
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-md-12">
    <textarea class="form-control" id="content" name="content"> <?php echo $content; ?></textarea>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
        CKEDITOR.replace( 'content' );
     </script>          
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-md-12">
        <input type="hidden" value="<?php echo $id; ?>" name="id">
   <input type="submit" value="Edit News Update" class="btn btn-danger">
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
