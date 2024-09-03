<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POULTRY FARM MANAGEMENT SYSTEM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5; /* light gray background */
        }

        header {
            background-color: #333; /* dark gray background */
            color: #fff; /* white text color */
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            font-family: 'Arial Black', sans-serif; /* large bold font */
        }

        nav {
            background-color: #ffffff; /* slightly lighter dark gray background */
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color:rgb(56, 50, 50); /* white text color */
            text-decoration: none;
            font-size: 16px;
            font-family: 'Arial', sans-serif; /* default font */
        }

        section#home {
    background-image: url(''); /* add your home background image */
    background-size: cover;
    background-attachment: fixed; /* Fixed background image */
    color: rgb(29, 28, 28); /* white text color */
    text-align: center;
    padding: 100px 20px;
    height: 100vh; /* Full height of the viewport */
    overflow-y: auto; /* Add vertical scroll if content exceeds viewport height */
}


        footer {
            background-color: #333; /* dark gray background */
            color: #ffffff; /* white text color */
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer a {
            color: #fff; /* white text color */
            text-decoration: none;
            font-family: 'Arial', sans-serif; /* default font */
        }
    </style>
</head>
<body>
    <header>
        <h1>Poultry Farm Manageement System</h1>
    </header>
    <nav>
        <ul>
            <li><a href="login.php">MANAGER LOGIN</a></li>
            <li><a href="signup.php">SIGNUP </a></li>
        </ul>
    </nav>
    
    <section id="home">
        <h2>Welcome to Our poultry farm</h2>
        <p>Opening Hours: Monday-Saturday 9:00 AM - 8:00 PM</p>
        <p>Closing Time: Sunday 10:00 AM - 6:00 PM</p>
        <p>About Us: pp@gmail.com</p>
    </section>

    <footer>
        <a href="index.php">Home</a>
    </footer>
</body>
</html>
