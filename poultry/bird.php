<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birds Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2; /* Light Gray Background */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            background-color: #ffa07a; /* Light Salmon Color */
            padding: 10px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            color: #333; /* Dark Gray Text Color */
        }

        nav {
            display: flex;
            gap: 15px;
        }

        nav button {
            padding: 8px 16px;
            background-color: #ffa07a; /* Light Salmon Color */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        nav button:hover {
            background-color: #ff8c66; /* Darker Salmon Color on Hover */
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #ffa07a; /* Light Salmon Color */
            color: white;
        }

        input[type="text"] {
            padding: 8px;
            margin-right: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 8px 16px;
            background-color: #ffa07a; /* Light Salmon Color */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ff8c66; /* Darker Salmon Color on Hover */
        }
    </style>
</head>
<body>
    <header>
        <h1>Birds Management</h1>
        <nav>
        <a href="menu.php">MENU</a>
        <a href="up1.php">UPDATE</a>
            <a href="del1.php">DELETE</a>
            <a href="in1.php">INSERT</a>
    </header>

    <div>
        <input type="text" id="birdSearchInput" placeholder="Search by Breed">
        <button onclick="searchBird()">Search</button>
    </div>

    <?php
    include("database.php");

    $sql = "SELECT * FROM Birds";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Bird ID</th>
                    <th>Farm ID</th>
                    <th>Breed</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Health Status</th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["BirdID"]."</td>
                    <td>".$row["FarmID"]."</td>
                    <td>".$row["Breed"]."</td>
                    <td>".$row["DateOfBirth"]."</td>
                    <td>".$row["Gender"]."</td>
                    <td>".$row["HealthStatus"]."</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>

    <script>
        function searchBird() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("birdSearchInput");
            filter = input.value.toUpperCase();
            table = document.querySelector("table");
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function insertBird() {
            // Redirect to the insert page
            window.location.href = "insert_bird.php";
        }
    </script>
</body>
</html>
