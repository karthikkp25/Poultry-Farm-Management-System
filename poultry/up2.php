<?php
include("database.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the form
    $vaccinationID = $_POST["VaccinationID"];
    $birdID = $_POST["BirdID"];
    $vaccinationDate = $_POST["VaccinationDate"];
    $vaccinationType = $_POST["VaccinationType"];
    $veterinarianName = $_POST["VeterinarianName"];

    // Update query
    $sql = "UPDATE Vaccination SET BirdID = $birdID, VaccinationDate = '$vaccinationDate', VaccinationType = '$vaccinationType', VeterinarianName = '$veterinarianName' WHERE VaccinationID = $vaccinationID";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Vaccination Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Light Gray Background */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h2 {
            color: #333; /* Dark Gray Text Color */
        }

        form {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #fff; /* White */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333; /* Dark Gray Text Color */
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc; /* Light Gray Border */
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Green Color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Darker Green Color on Hover */
        }

        .redirect-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #333; /* Dark Gray Button Background */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .redirect-button:hover {
            background-color: #555; /* Darker Gray Button Background on Hover */
        }
    </style>
</head>
<body>
    <a href="vac.php" class="redirect-button">Vaccination</a>

    <h2>Update Vaccination Record</h2>
    
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="VaccinationID">Vaccination ID:</label>
        <input type="text" name="VaccinationID" required>
        <label for="BirdID">Bird ID:</label>
        <input type="text" name="BirdID" required>
        <label for="VaccinationDate">Vaccination Date:</label>
        <input type="text" name="VaccinationDate" required>
        <label for="VaccinationType">Vaccination Type:</label>
        <input type="text" name="VaccinationType" required>
        <label for="VeterinarianName">Veterinarian Name:</label>
        <input type="text" name="VeterinarianName" required>

        <input type="submit" value="Update Record">
    </form>
</body>
</html>
