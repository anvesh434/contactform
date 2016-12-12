<?php
$connection = mysqli_connect('localhost', 'id131771_anvesh', 'anvesh21'); // connection to server
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection)); //error message if failed to connect to server
}
$select_db = mysqli_select_db($connection, 'id131771_form'); //connects to database
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection)); //error if failed to connect to database
}
