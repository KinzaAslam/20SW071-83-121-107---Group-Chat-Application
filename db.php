<?php
/*
Author: Muhammad Abba Gana
Website: www.guidetricks.blogspot.com
*/
?>
<?php
$conn = mysqli_connect('localhost', 'root', '');
if (!$conn){
    die("Database Connection Failed" . mysqli_error());
}
$select_db = mysqli_select_db($conn,'my_chat');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error());
}
?>