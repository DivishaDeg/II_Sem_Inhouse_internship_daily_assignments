<?php
$Error ="";
if($_SERVER["REQUEST_METHOD"]=="POST"){

$Name =mysqli_real_escape_string($conn, $_POST["Name"]);
$Email = mysqli_real_escape_string($conn,$_POST["Email"]);
$Password = mysqli_real_escape_string($conn, $_POST["Password"]);
$ConfirmPassword = mysqli_real_escape_string($conn, $_POST["ConfirmPassword"]);
if($Name==""|| $Email==""|| $Password==""||$ConfirmPassword==""){
    $Error = "All Fields are REquired.";
    echo $Error;
}
elseif($Password!=$ConfirmPassword){
    $Error = "Password does not match";
    echo $Error;
}
else{
    //insert
    $insertQuery = "Insert into user(name,email,password)
    values('$Name','$Email','$Password')";
    $result= mysqli_query($conn,$insertQuery);
    if($result){
    header("Location:success.php");
    }else{
        echo"error occured while storingdata";
        echo"Error:" . mysqli_error($conn);
    }
    exit();
}
}
?>