<?php
// echo '<pre>';
// print_r($_POST);

sleep(3);
$con = mysqli_connect('localhost','iscool','w^oJtDavqAh6K5fwr&iE');


if(!$con){
    echo 'Not connected server to';
}
if(!mysqli_select_db($con,'iscool'))
{
    echo 'Database not selected';
}

extract($_POST);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
// $message2 = mysqli_real_escape_string($con, $_POST['message2']);


    $q = "INSERT INTO coninfo (name,email,phone,message) VALUES ('$name','$email','$phone','$message')";

  if(!mysqli_query($con,$q))
  {
    echo 'Not inserted';
  }
  else
  {
      echo 'Your data successfully saved...';
  }
//   header("refresh:2; url=index.html");

?>