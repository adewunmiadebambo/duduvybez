<?php
include('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "select * from login where username = '$username' and password = '$password'";
$result = mysqli_query($conn, $query);
$num_rows = mysqli_num_rows($result);

if($num_rows > 0)
{
    header("Location: edit-products.php");
    exit;
}
else
{
    header("Location: login.php?error=login");
    exit;
}

?>