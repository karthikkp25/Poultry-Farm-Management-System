<?php
include("database.php"); // Assuming you have a database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $veterinaryID = $_POST["VeterinaryID"];
    $name = $_POST["Name"];
    $contactNumber = $_POST["ContactNumber"];

    // SQL to insert new record
    $insertSQL = "INSERT INTO Veterinary (VeterinaryID, Name, ContactNumber) 
                  VALUES ($veterinaryID, '$name', '$contactNumber')";

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
    <title>Insert New Veterinary</title>
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

        input {
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
    <h2>Insert New Veterinary</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="VeterinaryID">Veterinary ID:</label>
        <input type="text" name="VeterinaryID" required>

        <label for="Name">Name:</label>
        <input type="text" name="Name" required>

        <label for="ContactNumber">Contact Number:</label>
        <input type="text" name="ContactNumber" required>

        <button type="submit">Insert Record</button>
    </form>

    <div class="redirect-btn">
        <a href="vet.php">Veterinary Page</a>
    </div>
</body>
</html>
