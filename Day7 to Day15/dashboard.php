<?php
session_start();

include("dashboardHeader.php");
include("dashboardVerticalContent.php");
?>

<div class="container mt-4">

    <!-- Welcome Card -->
    <div class="card shadow-lg border-0 rounded-4 bg-primary text-white">
        <div class="card-body">
            <h2>👋 Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>
            <p>We're happy to see you again.</p>

            <?php
            date_default_timezone_set("Asia/Kolkata");
            ?>

            <p>
                <strong>Today:</strong>
                <?php echo date("l, d F Y"); ?>
            </p>
        </div>
    </div>

    <div class="row mt-4">

        <!-- Profile -->
        <div class="col-md-4 mb-3">
            <div class="card shadow text-center h-100">
                <div class="card-body">
                    <h1>👤</h1>
                    <h4>Profile</h4>
                    <p>View and update your profile.</p>

                    <a href="update_Profile.php" class="btn btn-primary">
                        Open
                    </a>

                </div>
            </div>
        </div>

        <!-- Password -->
        <div class="col-md-4 mb-3">
            <div class="card shadow text-center h-100">
                <div class="card-body">
                    <h1>🔒</h1>
                    <h4>Password</h4>
                    <p>Change your password securely.</p>

                    <a href="updatePassword.php" class="btn btn-success">
                        Update
                    </a>

                </div>
            </div>
        </div>

        

    </div>

</div>

<?php
include("dashboardFooter.php");
include("footer.php");
?>