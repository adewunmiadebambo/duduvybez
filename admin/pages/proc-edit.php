<?php

include('connect.php');

$id = $_POST['id'];
$title = mysqli_real_escape_string($conn,$_POST['title']);
$date = mysqli_real_escape_string($conn,$_POST['date']);
$volume = mysqli_real_escape_string($conn,$_POST['volume']);
$content = mysqli_real_escape_string($conn,$_POST['content']);

$img_cover = $_FILES['img_cover']['tmp_name'];
$img_cover_name = $_FILES['img_cover']['name'];

$img_archive = $_FILES['img_archive']['tmp_name'];
$img_archive_name = $_FILES['img_archive']['name'];


if(!$title || !$date || !$volume || !$content)
{
    $error = 'Your title, date, volume and content are mandatory';
    include('do-edit.php');
    exit;
}


$break_covername = explode('.',$img_cover_name);
$ext = array_reverse($break_covername);
$cover_ext = strtolower($ext[0]);

$break_archivename = explode('.',$img_archive_name);
$ext2 = array_reverse($break_archivename);
$archive_ext = strtolower($ext2[0]);

if($img_cover_name)
{
    if($cover_ext == 'jpg' || $cover_ext == 'png'  || $cover_ext == 'jpeg'  || $cover_ext == 'gif')
    {
        $filedata = 'ok';
    }
    else{
    $error = 'Your Cover image has to be in JPG, PNG or GIF format';
    include('do-edit.php');
    exit;
    }
}


if($img_archive_name)
{
    if($archive_ext == 'jpg' || $archive_ext == 'png'  || $archive_ext == 'jpeg'  || $archive_ext == 'gif')
    {
        $filedata = 'ok';
    }
    else{
    $error = 'Your Archive image has to be in JPG, PNG or GIF format';
    include('do-edit.php');
    exit;
    }
}

$filename_cover = $id.'.'.$cover_ext;
$filename_archive = $id.'.'.$archive_ext;

move_uploaded_file($img_cover,'uploads/cover/'.$filename_cover);
move_uploaded_file($img_archive,'uploads/archive/'.$filename_archive);

$query  =  "update newsletter set title = '$title', date = '$date', volume = '$volume', content = '$content', cover_img = '$filename_cover', archive_img = '$filename_archive' where id = '$id'";

$result = mysqli_query($conn,$query);

if($result)
{    

  
    header("Location: edit-news.php?success=1");
    
}

?>