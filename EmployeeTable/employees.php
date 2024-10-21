<?php
// Database connection parameters
$host = "localhost";
$user = "root";
$password = ""; // Set your MySQL password here
$database = "company";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get all employee data
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

// Display employee details in an HTML table
echo "<h1>Employee Details</h1>";
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <th>Employee No</th>
                <th>Name</th>
                <th>Date of Joining</th>
                <th>Salary</th>
                <th>Designation</th>
            </tr>";

    // Fetch and display each row of data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['emp_no']}</td>
                <td>{$row['emp_name']}</td>
                <td>{$row['date_of_join']}</td>
                <td>{$row['salary']}</td>
                <td>{$row['designation']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No employees found.";
}

// Close the database connection
$conn->close();
?>
