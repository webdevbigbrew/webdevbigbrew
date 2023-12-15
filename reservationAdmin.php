<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the database
$sql = "SELECT * FROM rsvt";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
  <?php
        include_once 'headerAdmin.php';
    ?>

<h2>User Data</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
        <th>Time</th>
        <!-- Add more columns as needed -->
    </tr>
    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td>" . $row["time"] . "</td>";
            // Output additional columns using the same format
            echo "</tr>";

        }
    } else {
        echo "0 results";
    }
    ?>
</table>

</body>
</html>

<?php
// Close the connection
$conn->close();
?>
