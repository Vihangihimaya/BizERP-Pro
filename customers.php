<?php 
require_once 'config/database.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $contact_number = $_POST['contact_number']; // FIXED: was 'contact'
    $district = $_POST['district'];
    
    $sql = "INSERT INTO customers (title, first_name, last_name, contact_number, district) 
            VALUES ('$title', '$first_name', '$last_name', '$contact_number', '$district')";
    
    if ($conn->query($sql) === TRUE) {
        $success = "Customer added successfully!";
    } else {
        $error = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">ERP System</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Manage Customers</h2>
        <a href="index.php" class="btn btn-secondary mb-3">← Back to Home</a>

        <?php if (isset($success)): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <!-- Customer Form -->
        <div class="card">
            <div class="card-header">
                <h5>Add New Customer</h5>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Title</label>
                            <select name="title" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Miss">Miss</option>
                                <option value="Dr">Dr</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" required>
                        </div>
                        <div class="col-md-5">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label>Contact Number</label>
                            <input type="text" name="contact_number" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>District</label>
                            <input type="text" name="district" class="form-control" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">Save Customer</button>
                </form>
            </div>
        </div>

        <!-- Customer List -->
        <div class="card mt-4">
            <div class="card-header">
                <h5>Customer List</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>District</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT * FROM customers");
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['title']} {$row['first_name']} {$row['last_name']}</td>
                                        <td>{$row['contact_number']}</td>
                                        <td>{$row['district']}</td>
                                        <td>
                                            <button class='btn btn-sm btn-warning'>Edit</button>
                                            <button class='btn btn-sm btn-danger'>Delete</button>
                                        </td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4' class='text-center'>No customers found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>