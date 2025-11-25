<?php 
require_once 'config/database.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reports - ERP System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">ERP System</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Reports</h2>
        <a href="index.php" class="btn btn-secondary mb-3">← Back to Home</a>

        <!-- Invoice Report -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5>Invoice Report</h5>
            </div>
            <div class="card-body">
                <form method="POST" class="mb-3">
                    <div class="row">
                        <div class="col-md-5">
                            <label>From Date</label>
                            <input type="date" name="from_date" class="form-control">
                        </div>
                        <div class="col-md-5">
                            <label>To Date</label>
                            <input type="date" name="to_date" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>&nbsp;</label>
                            <button type="submit" name="search_invoices" class="btn btn-primary form-control">Search</button>
                        </div>
                    </div>
                </form>

                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Invoice No</th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>District</th>
                            <th>Item Count</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="6" class="text-center text-muted">No invoices found. Invoices module needed for full functionality.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Invoice Item Report -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h5>Invoice Item Report</h5>
            </div>
            <div class="card-body">
                <form method="POST" class="mb-3">
                    <div class="row">
                        <div class="col-md-5">
                            <label>From Date</label>
                            <input type="date" name="from_date" class="form-control">
                        </div>
                        <div class="col-md-5">
                            <label>To Date</label>
                            <input type="date" name="to_date" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>&nbsp;</label>
                            <button type="submit" name="search_invoice_items" class="btn btn-success form-control">Search</button>
                        </div>
                    </div>
                </form>

                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Invoice No</th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Item Name</th>
                            <th>Item Code</th>
                            <th>Category</th>
                            <th>Unit Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" class="text-center text-muted">Invoice items will appear here when invoices are created.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Item Report -->
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5>Item Report</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Item Name</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT item_name, category, sub_category, quantity FROM items GROUP BY item_name");
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['item_name']}</td>
                                        <td>{$row['category']}</td>
                                        <td>{$row['sub_category']}</td>
                                        <td>{$row['quantity']}</td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4' class='text-center'>No items found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>