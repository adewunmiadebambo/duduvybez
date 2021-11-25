<?php

include('connect.php');

$password = mysqli_real_escape_string($conn,$_POST['password']);
$confirm = mysqli_real_escape_string($conn,$_POST['confirm']);

$img_cover = $_FILES['img_cover']['tmp_name'];
$img_cover_name = $_FILES['img_cover']['name'];

$img_archive = $_FILES['img_archive']['tmp_name'];
$img_archive_name = $_FILES['img_archive']['name'];


if(!$password || !$confirm)
{
    $error = 'All information are require before you submit';
    include('password.php');
    exit;
}

if($password != $confirm)
{
    $error = 'Your password is not the same with the confirmation';
    include('password.php');
    exit;
}



    $query2 = "update login set password = '$password'where username = 'administrator'";
    mysqli_query($conn, $query2);

    header("Location: password.php?success=1");
    

?>