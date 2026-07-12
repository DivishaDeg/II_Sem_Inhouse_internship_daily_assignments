<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>

    <!--Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet">   
</head>

<body>
    <header class="bg-light border-buttom">
        <div class="container">
            <div class="d-flex
            justify-content-between
            align-items-center py-3">

                <!--logo -->
                <img src="images/logo.png" alt="Logo" width="80">

                <!-- Nvigation -->
                <nav>
                    <ul>
                        <li class="nav-item">
                            <a href="index.php"
                            class="nav-Link
                            text-dark">Home</a>
                        </li>
                    
                        <li class="nav-item">
                            <a href="about.php" class="nav-link text-dark">About Us</a>
                        </li>
                   </ul>
                </nav>

               <a herf="logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
            </div>
        </div>

    </header>