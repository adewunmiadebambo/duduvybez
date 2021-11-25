<?php

include('connect.php');

$product_name = mysqli_real_escape_string($conn,$_POST['product_name']);
$price = mysqli_real_escape_string($conn,$_POST['price']);

$price = str_replace(',','',$price);

$img_cover = $_FILES['img_cover']['tmp_name'];
$img_cover_name = $_FILES['img_cover']['name'];


if(!$product_name || !$price || !$img_cover_name)
{
    $error = 'All information are required before you submit';
    include('add-products.php');
    exit;
}


$break_covername = explode('.',$img_cover_name);
$ext = array_reverse($break_covername);
$cover_ext = strtolower($ext[0]);

$break_archivename = explode('.',$img_archive_name);
$ext2 = array_reverse($break_archivename);
$archive_ext = strtolower($ext2[0]);


if($cover_ext == 'jpg' || $cover_ext == 'png'  || $cover_ext == 'jpeg'  || $cover_ext == 'gif')
{
    $filedata = 'ok';
}
else{
    $error = 'Your Cover image has to be in JPG, PNG or GIF format';
    include('add-products.php');
    exit;
}


$query  =  "insert products set product_name = '$product_name', price = '$price'";

$result = mysqli_query($conn,$query);

if($result)
{
    $last_id = mysqli_insert_id($conn);
    
    $filename_cover = $last_id.'.'.$cover_ext;

    move_uploaded_file($img_cover,'uploads/cover/'.$filename_cover);

    $query2 = "update products set filename = '$filename_cover' where id = '$last_id'";
    mysqli_query($conn, $query2);

    header("Location: add-products.php?success=1");
    
}

?>