<?php
//include db config file
include_once("config.php");

//get ID from URL to delete
$id = $_GET['id'];

//delete user from table based on given id
mysqli_query($mysqli, "DELETE FROM cars WHERE id=$id");

//if succeeded redirect to home
header("Location:Index.php");