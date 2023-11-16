<?php
session_start();
// include('../include/dbCon.php');


$conn = mysqli_connect('localhost','iscool','w^oJtDavqAh6K5fwr&iE','iscool');

if (isset($_POST['save_std_image']))
{
    $name = $_POST['stud_name'];
    $course = $_POST['stud_course'];
    $session = $_POST['stud_session'];
    $image = $_FILES['stud_image']['name'];
    $tmp_name = $_FILES['stud_image']['tmp_name'];
    $image_type = $_FILES["stud_image"]["type"];
    // echo $tmp_name;
    $img_ex = pathinfo($image, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    $new_img_name =  uniqid("IMG-", true). '.' .$img_ex_lc;
    // image formate
    $allowed_formats = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

    
    if(in_array($image_type, $allowed_formats)) {

            $q = "INSERT INTO student_gallery (name,course,session,image) VALUES ('$name','$course','$session','$new_img_name')";
            $query_run = mysqli_query($conn,$q);

            if($query_run) {

       
                // echo $new_img_name;
                $img_upload_path = 'upload/'.$new_img_name;
        
                move_uploaded_file($tmp_name, $img_upload_path);

                $_SESSION['status'] = "Data stored successfully";
                header('Location: admin.php');
            } else {
                $_SESSION['status'] = "Somethig went wrong";
                header('Location:admin.php');
            }  
        }  else {
            $_SESSION['status'] = "Data not inserted!!! Please select only (jpg, png, gif) image only";
            header('Location:admin.php');
        }


}

?>