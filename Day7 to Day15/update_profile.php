<?php
session_start();

include("db_connect1.php"); // change name if your connection file is different

$email = $_SESSION['user_email'];

$sql = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
}
else
{
    die("User record not found.");
}

include("dashboardHeader.php");
include("dashboardVerticalContent.php");
?>

<div class="container mt-4">
    <h2>Update Profile</h2>

    <form action="update_profile_process.php" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
       <labe class="form-label">Profile Image</label>
       <input type="file" name="profile_image" class="form-control">
    </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control"
                   value="<?php echo $row['name']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Skills</label>
            <input type="text" name="skills" class="form-control"
                   value="<?php echo $row['skills']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Update Profile
        </button>

    </form>
</div>

<?php
include("dashboardFooter.php");
include("footer.php");
?>