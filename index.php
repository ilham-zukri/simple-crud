<?php
include_once('config.php');

//fetching all the cars data from db
$result = mysqli_query($mysqli, 'SELECT * FROM cars ORDER BY id DESC');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add.php">Add new data Here</a>
    <table width='80%' border="1">
        <tr>
            <th>model</th> <th>type</th> <th>cubication</th> <th>origin</th> <th>price</th>
        </tr>
        <?php
        //showing data from database
            while($car_data = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$car_data['model']."</td>";
                echo "<td>".$car_data['type']."</td>";
                echo "<td>".$car_data['cubication']."</td>";
                echo "<td>".$car_data['origin']."</td>";
                echo "<td>".$car_data['price']."</td>";
                echo "<td><a href='edit.php?id=$car_data[id]'>edit</a> | <a href='delete.php?id=$car_data[id]'>Delete</td>";
            }
        ?>
    </table>
</body>
</html>