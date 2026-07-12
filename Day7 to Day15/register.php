<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$department=$_POST['department'];
$password=$_POST['password'];
$confirm=$_POST['confirm_password'];

if($password != $confirm)
{
    die("Passwords do not match.");
}

// Upload Folder
$targetDir = "uploads/";

if(!is_dir($targetDir))
{
    mkdir($targetDir,0777,true);
}

$fileName = basename($_FILES["photo"]["name"]);
$targetFile = $targetDir . time() . "_" . $fileName;

if(move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile))
{
    echo "<h2>Registration Successful</h2>";

    echo "<p><b>Name:</b> $name</p>";
    echo "<p><b>Email:</b> $email</p>";
    echo "<p><b>Phone:</b> $phone</p>";
    echo "<p><b>Gender:</b> $gender</p>";
    echo "<p><b>DOB:</b> $dob</p>";
    echo "<p><b>Department:</b> $department</p>";

    echo "<p><b>Profile Photo:</b></p>";

    echo "<img src='$targetFile' width='180'>";
}
else
{
    echo "Photo upload failed.";
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phoneNumber= mysqli_real_escape_string($conn, $_POST['phone']);
$branch = mysqli_real_escape_string($conn, $_POST['branch']);

$sql = "INSERT INTO myfile ( name, email,phone ,branch)
VALUES('$name' , '$email' ,'$phone', '$branch')";
if(mysqli_query($conn, $sql)){
  echo "Student Registered Successfully!";


}else{
    echo "Error: " . mysqli_error($conn);


}

}



}
?>