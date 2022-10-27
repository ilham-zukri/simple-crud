<?php

$mysqli = mysqli_connect(
    'localhost',
    'root',
    'useradmin',
    'cars_db'
);

($mysqli) ? null : die("Server connection attempt failed:".mysqli_connect_error());