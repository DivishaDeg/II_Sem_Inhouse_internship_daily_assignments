<?php
session_start();
include("db_connect1.php");

$name = $_POST['name'];
$skills = $_POST['skills'];
$email = $_SESSION['user_email'];

$image = $_FILES['image']['name'];

if($image != "")
{
    $target = "uploads/" . basename($image);

    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $sql = "UPDATE user 
            SET name='$name', skills='$skills', image='$image'
            WHERE email='$email'";
}
else
{
    $sql = "UPDATE user 
            SET name='$name', skills='$skills'
            WHERE email='$email'";
}

if(mysqli_query($conn, $sql))
{
    $_SESSION['user_name'] = $name;

    echo "<script>
            alert('Profile Updated Successfully');
            window.location='dashboard.php';
          </script>";
}
else
{
    echo "Error: ".mysqli_error($conn);
}
?>