<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP System - Business Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .feature-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .feature-icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .stats-section {
            background: #f8f9fa;
            padding: 60px 0;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #667eea;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .btn-feature {
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .footer {
            background: #2c3e50;
            color: white;
            padding: 40px 0;
            margin-top: 50px;
        }
        .feature-image {
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-chart-line me-2"></i>BizERP Pro
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="customers.php"><i class="fas fa-users me-1"></i>Customers</a>
                <a class="nav-link" href="items.php"><i class="fas fa-box me-1"></i>Items</a>
                <a class="nav-link" href="reports.php"><i class="fas fa-chart-bar me-1"></i>Reports</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">Streamline Your Business Operations</h1>
                    <p class="lead mb-4">Complete ERP solution for customer management, inventory control, and business analytics. Everything you need in one powerful platform.</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="customers.php" class="btn btn-light btn-feature">
                            <i class="fas fa-rocket me-2"></i>Get Started
                        </a>
                        <a href="#features" class="btn btn-outline-light btn-feature">
                            <i class="fas fa-play-circle me-2"></i>See Features
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary">Powerful Features</h2>
                <p class="lead">Everything you need to manage your business efficiently</p>
            </div>
            
            <div class="row">
                <!-- Customer Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card shadow">
                        <div class="card-body text-center p-4">
                            <div class="feature-image">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4 class="card-title text-primary">Customer Management</h4>
                            <p class="card-text">Manage customer data, track interactions, and maintain complete customer profiles with contact details and location information.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-success me-2"></i>Add/Edit Customers</li>
                                <li><i class="fas fa-check text-success me-2"></i>Contact Management</li>
                                <li><i class="fas fa-check text-success me-2"></i>District-wise Tracking</li>
                            </ul>
                            <a href="customers.php" class="btn btn-primary mt-3">Manage Customers</a>
                        </div>
                    </div>
                </div>

                <!-- Inventory Management -->
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card shadow">
                        <div class="card-body text-center p-4">
                            <div class="feature-image" style="background: linear-gradient(45deg, #00d2ff, #3a7bd5);">
                                <i class="fas fa-boxes"></i>
                            </div>
                            <h4 class="card-title text-primary">Inventory Control</h4>
                            <p class="card-text">Complete inventory management with categories, pricing, stock levels, and unique item codes for efficient product tracking.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-success me-2"></i>Item Categorization</li>
                                <li><i class="fas fa-check text-success me-2"></i>Stock Management</li>
                                <li><i class="fas fa-check text-success me-2"></i>Price Tracking</li>
                            </ul>
                            <a href="items.php" class="btn btn-success mt-3">Manage Inventory</a>
                        </div>
                    </div>
                </div>

                <!-- Reporting -->
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card shadow">
                        <div class="card-body text-center p-4">
                            <div class="feature-image" style="background: linear-gradient(45deg, #f46b45, #eea849);">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <h4 class="card-title text-primary">Advanced Reports</h4>
                            <p class="card-text">Generate comprehensive reports for invoices, sales, and inventory with date range filters and export capabilities.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-success me-2"></i>Invoice Reports</li>
                                <li><i class="fas fa-check text-success me-2"></i>Sales Analytics</li>
                                <li><i class="fas fa-check text-success me-2"></i>Inventory Reports</li>
                            </ul>
                            <a href="reports.php" class="btn btn-warning mt-3">View Reports</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="stat-number">100+</div>
                    <p class="text-muted">Businesses Trust Us</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-number">24/7</div>
                    <p class="text-muted">System Availability</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-number">99.9%</div>
                    <p class="text-muted">Uptime Guarantee</p>
                </div>
                <div class="col-md-3">
                    <div class="stat-number">50K+</div>
                    <p class="text-muted">Records Processed</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Actions -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="fw-bold text-dark">Quick Actions</h3>
                <p class="text-muted">Get started with these quick tasks</p>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <a href="customers.php" class="card text-decoration-none text-dark h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-user-plus fa-2x text-primary mb-3"></i>
                            <h6>Add New Customer</h6>
                            <small class="text-muted">Register a new customer</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="items.php" class="card text-decoration-none text-dark h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-box fa-2x text-success mb-3"></i>
                            <h6>Add New Item</h6>
                            <small class="text-muted">Add product to inventory</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="reports.php" class="card text-decoration-none text-dark h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-file-invoice fa-2x text-warning mb-3"></i>
                            <h6>Generate Report</h6>
                            <small class="text-muted">View business reports</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="customers.php" class="card text-decoration-none text-dark h-100 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-search fa-2x text-info mb-3"></i>
                            <h6>Search Data</h6>
                            <small class="text-muted">Find customers & items</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-chart-line me-2"></i>BizERP Pro</h5>
                    <p>Complete business management solution for small and medium enterprises. Streamline your operations with our powerful ERP system.</p>
                </div>
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="customers.php" class="text-light">Customers</a></li>
                        <li><a href="items.php" class="text-light">Inventory</a></li>
                        <li><a href="reports.php" class="text-light">Reports</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Documentation</a></li>
                        <li><a href="#" class="text-light">Help Center</a></li>
                        <li><a href="#" class="text-light">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <hr class="bg-light">
            <div class="text-center">
                <p>&copy; 2024 BizERP Pro. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>