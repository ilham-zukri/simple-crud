<?php
//include database connection file
include_once('config.php');

//check if form submited for car data update, then redirect after
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $model = $_POST['model'];
    $type = $_POST['type'];
    $cubication = $_POST['cubication'];
    $origin = $_POST['origin'];
    $price = $_POST['price'];

    //update car data
    mysqli_query($mysqli, "UPDATE cars SET model='$model',type='$type',cubication'$cubication',origin='$origin',price'$price' WHERE id=$id");

    //redirect to homepage to see the change
    header("Location: index.php");
}

?>

<?
/*display selected car data*/
//get id from url
$id = $_GET['id'];

//fetch car data based on id
$result = mysqli_query($mysqli, "SELECT * FROM cars WHERE id=$id");

while($car_data = mysqli_fetch_array($result)){
    $model = $car_dataT['model'];
    $type = $car_data['type'];
    $cubication = $car_data['cubication'];
    $origin = $car_data['origin'];
    $price = $car_data['price'];
}