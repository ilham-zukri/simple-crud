<?php
//include database connection file
include_once("config.php");
//check if form submited for car data update, then redirect after
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $model = $_POST['model'];
    $type = $_POST['type'];
    $cubication = $_POST['cubication'];
    $origin = $_POST['origin'];
    $price = $_POST['price'];

    //update car data
  mysqli_query($mysqli, "UPDATE cars SET model='$model',type='$type',cubication='$cubication',origin='$origin',price='$price' WHERE id=$id");

    //redirect to homepage to see the change
    header("Location: index.php");
}

?>

<?php
/*display selected car data*/
//get id from url
$id = $_GET['id'];

//fetch car data based on id
$result = mysqli_query($mysqli, "SELECT * FROM cars WHERE id=$id");

while ($car_data = mysqli_fetch_array($result)) {
    $model = $car_data['model'];
    $type = $car_data['type'];
    $cubication = $car_data['cubication'];
    $origin = $car_data['origin'];
    $price = $car_data['price'];
}
?>
<html>

<head>
    <title>Edit Cars Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br><br>

    <form name="update_car" method="POST" action="edit.php">
        <table border="0">
            <tr>
                <td>Model</td>
                <td><input type="text" name="model" value=<?php echo $model; ?>></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><input type="text" name="type" value=<?php echo $type; ?>></td>
            </tr>
            <tr>
                <td>Cubication</td>
                <td><input type="text" name="cubication" value=<?php echo $cubication; ?>></td>
            </tr>
            <td>Origin</td>
            <td><input type="text" name="origin" value=<?php echo $origin; ?>></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" value=<?php echo $price; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']?>></td>
                <td><input type="submit" name="update"></td>
            </tr>
        </table>
    </form>
    <?php
    echo "<pre>";
    print_r("UPDATE cars SET model='$model',type='$type',cubication='$cubication',origin='$origin',price='$price' WHERE id=$id");
    exit;
    ?>
</body>

</html>