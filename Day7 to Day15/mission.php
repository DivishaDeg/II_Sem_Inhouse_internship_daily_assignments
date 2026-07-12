<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Page</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container{
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            text-align: center;
            width: 350px;
        }

        h2{
            color: #333;
        }

        p{
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>My Information</h2>

    <?php
        $name = "Divisha";
        $favLanguage = "PHP";
        $todayDate = date("d-m-Y");
    ?>

    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Today's Date:</strong> <?php echo $todayDate; ?></p>
    <p><strong>Favourite Programming Language:</strong> <?php echo $favLanguage; ?></p>

</div>

</body>
</html>