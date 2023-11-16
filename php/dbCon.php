<?php
// try{
//     $con = new PDO("mysql:host=localhost;dbname=php_test","root","");
// } catch (PDOException $e){
//     echo $e->getMessage();
// }

// $con = mysqli_connect('localhost','iscool');
// mysqli_select_db($con,'iscool');

// if($res) {
//     echo "server connected successfully";
// }

$conn = mysqli_connect('localhost', 'root', '', 'php_test');
if($conn) {
    echo "server connected successfully";
} else {
    echo "Server error";
}
?>