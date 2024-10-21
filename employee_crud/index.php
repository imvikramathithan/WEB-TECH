<?php
require 'db_config.php'; // Include database connection

// Handle Insert Operation
if (isset($_POST['insert'])) {
    $emp_no = $_POST['emp_no'];
    $emp_name = $_POST['emp_name'];
    $date_of_join = $_POST['date_of_join'];
    $salary = $_POST['salary'];
    $designation = $_POST['designation'];

    $sql = "INSERT INTO employee (emp_no, emp_name, date_of_join, salary, designation) 
            VALUES ('$emp_no', '$emp_name', '$date_of_join', '$salary', '$designation')";

    if ($conn->query($sql) === TRUE) {
        echo "New employee inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle Update Operation
if (isset($_POST['update'])) {
    $emp_no = $_POST['emp_no'];
    $emp_name = $_POST['emp_name'];
    $date_of_join = $_POST['date_of_join'];
    $salary = $_POST['salary'];
    $designation = $_POST['designation'];

    $sql = "UPDATE employee 
            SET emp_name='$emp_name', date_of_join='$date_of_join', 
                salary='$salary', designation='$designation' 
            WHERE emp_no='$emp_no'";

    if ($conn->query($sql) === TRUE) {
        echo "Employee details updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Handle Delete Operation
if (isset($_GET['delete'])) {
    $emp_no = $_GET['delete'];

    $sql = "DELETE FROM employee WHERE emp_no='$emp_no'";

    if ($conn->query($sql) === TRUE) {
        echo "Employee deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Fetch Employee Data for Display
$result = $conn->query("SELECT * FROM employee");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        .action-btn {
            padding: 5px 10px;
            margin: 2px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }
        .edit-btn {
            background-color: #4CAF50;
        }
        .delete-btn {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Employee Management System</h1>

    <form method="POST" action="">
        <input type="number" name="emp_no" placeholder="Employee No" value="<?php echo isset($_GET['edit']) ? $_GET['edit'] : ''; ?>" required><br>
        <input type="text" name="emp_name" placeholder="Employee Name" required><br>
        <input type="date" name="date_of_join" placeholder="Date of Joining"><br>
        <input type="number" step="0.01" name="salary" placeholder="Salary"><br>
        <input type="text" name="designation" placeholder="Designation"><br>
        <button type="submit" name="insert">Insert</button>
        <button type="submit" name="update">Update</button>
    </form>

    <h2 style="text-align: center;">Employee List</h2>
    <table>
        <tr>
            <th>Employee No</th>
            <th>Name</th>
            <th>Date of Joining</th>
            <th>Salary</th>
            <th>Designation</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['emp_no']; ?></td>
                <td><?php echo $row['emp_name']; ?></td>
                <td><?php echo $row['date_of_join']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td><?php echo $row['designation']; ?></td>
                <td>
                    <a href="index.php?edit=<?php echo $row['emp_no']; ?>" class="action-btn edit-btn">Edit</a>
                    <a href="index.php?delete=<?php echo $row['emp_no']; ?>" class="action-btn delete-btn" 
                       onclick="return confirm('Are you sure you want to delete this employee?');">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>

<?php $conn->close(); ?>
