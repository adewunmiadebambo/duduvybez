<?php
include('connect.php');

$id = $_GET['id'];

$query = "delete from products where id = '$id'";
mysqli_query($conn, $query);

header("Location: edit-products.php?success=1");


?>