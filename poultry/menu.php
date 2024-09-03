<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff; /* Light sky blue */
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333; /* Light sky blue */
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff; /* White */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            background-color: #333; /* Light sky blue */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
            text-decoration: none; /* Added to remove underline */
            display: inline-block; /* Added to prevent full width */
        }

        .btn:hover {
            background-color: #6bb9e0; /* Darker sky blue */
        }

        .home-btn {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>WHAT ARE YOU LOOKING FOR?</h1>
</div>

<div class="container">
    <form action="#">
        <a href="index.php" class="btn home-btn">LOG OUT</a>
        <div class="btn-container">
            <a href="bird.php" class="btn">INFO OF BIRDS</a>
            <a href="vet.php" class="btn">VATERIAN</a>
            <a href="vac.php" class="btn">VACCINE</a>
            <a href="feed.php" class="btn">FEED CONSUMPTION</a>
            <!-- Add more buttons as needed -->
        </div>
    </form>
</div>

</body>
</html>
