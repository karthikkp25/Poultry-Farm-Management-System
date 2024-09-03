<?php
include("database.php"); // Assuming you have a database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $birdID = $_POST["BirdID"];
    $farmID = $_POST["FarmID"];
    $breed = $_POST["Breed"];
    $dateOfBirth = $_POST["DateOfBirth"];
    $gender = $_POST["Gender"];
    $healthStatus = $_POST["HealthStatus"];


    // SQL to insert new record
    $insertSQL = "INSERT INTO Birds (BirdID, FarmID, Breed, DateOfBirth, Gender, HealthStatus) 
                  VALUES ($birdID, $farmID, '$breed', '$dateOfBirth', '$gender', '$healthStatus')";

    // Execute the query
    if ($conn->query($insertSQL) === TRUE) {
        echo "New record has been inserted successfully.";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Bird</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Light sky blue */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h2 {
            color: #333; /* Dark gray text color */
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff; /* White */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 10px;
            color: #333; /* Dark gray text color */
        }

        input, select {
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        button {
            padding: 10px 20px;
            background-color: #87ceeb; /* Light sky blue */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #6bb9e0; /* Darker sky blue */
        }

        .redirect-btn {
            margin-top: 15px;
        }

        .redirect-btn a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #4CAF50; /* Green color */
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .redirect-btn a:hover {
            background-color: #45a049; /* Darker green color on hover */
        }
    </style>
</head>
<body>
    <h2>Insert New Bird</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="BirdID">Bird ID:</label>
        <input type="text" name="BirdID" required>

        <label for="FarmID">Farm ID:</label>
        <input type="text" name="FarmID" required>

        <label for="Breed">Breed:</label>
        <input type="text" name="Breed" required>

        <label for="DateOfBirth">Date Of Birth:</label>
        <input type="text" name="DateOfBirth" required>

        <label for="Gender">Gender:</label>
        <select name="Gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="HealthStatus">Health Status:</label>
        <input type="text" name="HealthStatus" required>

        <button type="submit">Insert Record</button>
    </form>

    <div class="redirect-btn">
        <a href="bird.php">Bird Page</a>
    </div>
</body>
</html>

