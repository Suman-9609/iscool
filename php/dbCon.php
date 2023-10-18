<?php
// try{
//     $con = new PDO("mysql:host=localhost;dbname=php_test","root","");
// } catch (PDOException $e){
//     echo $e->getMessage();
// }

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'php_test');

// if($res) {
//     echo "server connected successfully";
// }
?>