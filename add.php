<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <a href="index.php">Home</a>
    <br><br>

    <form action="add.php" method="POST" name="form1">
        <table widh="25%" border="0">
            <tr>
                <td>Model</td>
                <td><input type="text" name="model"></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><input type="text" name="type"></td>
            </tr>
            <tr>
                <td>Cubication</td>
                <td><input type="text" name="cubication"></td>
            </tr>
                <td>Origin</td>
                <td><input type="text" name="origin"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="add"></td>
            </tr>
        </table>
    </form>
    <?php
    //include config file
    include_once("config.php");

    //action when button is clicked
    if(isset($_POST['Submit'])){
        $model = $_POST['model'];
        $type = $_POST['type'];
        $cubication = $_POST['cubication'];
        $origin = $_POST['origin'];
        $price = $_POST['price'];

        mysqli_query($mysqli, "INSERT INTO cars(model,type,cubication,origin,price) VALUES ('$model','$type','$cubication','$origin','$price')");
        echo "car data has been added successfully. <a href='index.php'>View Cars</a>";
    }
    ?>
</body>
</html>