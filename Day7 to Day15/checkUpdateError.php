<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $oldpassword = mysqli_real_escape_string($conn, $_POST["oldpassword"]);
    $newpassword = mysqli_real_escape_string($conn, $_POST["newpassword"]);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST["confirmpassword"]);

    if ($oldpassword == "" || $newpassword == "" || $confirmpassword == "") {

        $error = "All fields are required.";
        echo $error;

    } elseif ($newpassword != $confirmpassword) {

        $error = "New Password and Confirm Password do not match.";
        echo $error;

    } else {

        $user_id = $_SESSION["user_id"];

        // Check old password
        $selectQuery = "SELECT * FROM user WHERE id='$user_id' AND password='$oldpassword'";
        $result = mysqli_query($conn, $selectQuery);

        if (mysqli_num_rows($result) > 0) {

            // Update password
            $updateQuery = "UPDATE user SET password='$newpassword' WHERE id='$user_id'";

            if (mysqli_query($conn, $updateQuery)) {
                echo "Password updated successfully.";
            } else {
                echo "Error: " . mysqli_error($conn);
            }

        } else {

            echo "Old password is incorrect.";

        }
    }
}
?>