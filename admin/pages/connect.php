<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);


$conn = mysqli_connect('localhost', 'duduvybe_store', 'certification231', 'duduvybe_store');

if(!$conn)
{
    echo 'Cannot connect to database';
    exit;
}

?>