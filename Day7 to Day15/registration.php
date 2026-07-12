<?php
include("header.php");
include("db_connect1.php");
include("checkRegistrationError.php");
?>
<div class="container mt-5"style="max-width:400px;">
    <form action="" method ="post">
        <h3 class="mb-3">Register</h3>

<input type="text" name="Name" class="form-control mb-3" placeholder="Name" value="<?=$Name?>">


<input type="email" name="Email" class="form-control mb-3" placeholder="Email" value="<?=$Email?>">
<input type="password"name="Password" class="form-control mb-3"placeholder="Password" value="<?=$Password?>">
<input type="password"name="ConfirmPassword"class="form-control mb-3"placeholder="Confirm Password" value="<?=$ConfirmPassword?>">

<button class="btn btn-primary w-100">Register</button>
</form>
</div>
<?php
include("footer.php");
?>