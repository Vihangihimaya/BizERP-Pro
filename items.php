<?php 
require_once 'config/database.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_code = $_POST['item_code'];
    $item_name = $_POST['item_name'];
    $category = $_POST['category'];
    $sub_category = $_POST['sub_category'];
    $quantity = $_POST['quantity'];
    $unit_price = $_POST['unit_price'];
    
    $sql = "INSERT INTO items (item_code, item_name, category, sub_category, quantity, unit_price) 
            VALUES ('$item_code', '$item_name', '$category', '$sub_category', '$quantity', '$unit_price')";
    
    if ($conn->query($sql) === TRUE) {
        $success = "Item added successfully!";
    } else {
        $error = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Items - ERP System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">ERP System</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Manage Items</h2>
        <a href="index.php" class="btn btn-secondary mb-3">← Back to Home</a>

        <?php if (isset($success)): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <!-- Item Form -->
        <div class="card">
            <div class="card-header">
                <h5>Add New Item</h5>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Item Code</label>
                            <input type="text" name="item_code" class="form-control" placeholder="ITM001" required>
                        </div>
                        <div class="col-md-6">
                            <label>Item Name</label>
                            <input type="text" name="item_name" class="form-control" placeholder="Laptop" required>
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label>Category</label>
                            <select name="category" class="form-control" required>
                                <option value="">Select Category</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Clothing">Clothing</option>
                                <option value="Books">Books</option>
                                <option value="Food">Food</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Sub Category</label>
                            <select name="sub_category" class="form-control" required>
                                <option value="">Select Sub Category</option>
                                <option value="Mobile">Mobile</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Men">Men</option>
                                <option value="Women">Women</option>
                                <option value="Fiction">Fiction</option>
                                <option value="Non-Fiction">Non-Fiction</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label>Quantity</label>
                            <input type="number" name="quantity" class="form-control" placeholder="10" required>
                        </div>
                        <div class="col-md-6">
                            <label>Unit Price (Rs.)</label>
                            <input type="number" step="0.01" name="unit_price" class="form-control" placeholder="25000.00" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-success mt-3">Save Item</button>
                </form>
            </div>
        </div>

        <!-- Items List -->
        <div class="card mt-4">
            <div class="card-header">
                <h5>Items List</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item Code</th>
                            <th>Item Name</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT * FROM items");
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['item_code']}</td>
                                        <td>{$row['item_name']}</td>
                                        <td>{$row['category']}</td>
                                        <td>{$row['sub_category']}</td>
                                        <td>{$row['quantity']}</td>
                                        <td>Rs. {$row['unit_price']}</td>
                                        <td>
                                            <button class='btn btn-sm btn-warning'>Edit</button>
                                            <a href='items.php?delete_id={$row['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                                        </td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7' class='text-center'>No items found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add delete functionality -->
    <?php
    if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
        $conn->query("DELETE FROM items WHERE id = $delete_id");
        echo "<script>window.location.href = 'items.php';</script>";
    }
    ?>
</body>
</html>