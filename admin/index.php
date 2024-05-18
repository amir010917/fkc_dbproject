<?php require('../db/auth.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin FKC - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-2">ADMIN<sup> FKC</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Features
            </div>

            <!-- Nav Item  -->
            <li class="nav-item">
                <a class="nav-link" href="agent_management/index.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Agent Management</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="vendor_management/index.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Vendor Management</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="raw_material_management/index.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Raw Material Management</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="product_management/index.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Product Management</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="order_management/index.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Order Management</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Staff Management 
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Staff Management</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Main Components</h6>
                        <a class="collapse-item" href="kpi_management/index.php">KPI Management</a>
                        <a class="collapse-item" href="staff_management/index.php">Staff Directory</a>
                        <a class="collapse-item" href="attendance_management/index.php">Staff Attendance</a>
                        <a class="collapse-item" href="leave_application/index.php">Staff Leave Application</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Nav Item  -->
            <li class="nav-item">
                <a class="nav-link" href="report_management/index.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Report</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">    <?php echo $_SESSION['name']; ?></span>
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../admin/profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12 mb-6">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Welcome to the Administrator site</h6>
                                </div>
                                <div class="card-body">
                                    <p>
                                    The admin dashboard or site is a web-based interface that provides administrative functionalities 
                                    for managing various aspects of the system. It allows authorized users with administrative privileges 
                                    to perform the following functions:
                                    </p>
                                    <ol>
                                        <li>Agent Management:</li>
                                        <ul>
                                            <li>List agents: View a list of existing agents in the system.</li>
                                            <li>Register new agent: Add a new agent to the system.</li>
                                            <li>Update agent data: Modify the information of an existing agent.</li>
                                            <li>Delete/remove agent: Remove an agent from the system.</li>
                                        </ul>
                                        <li>Vendor Management:</li>
                                        <ul>
                                            <li>List vendors: Display a list of registered vendors.</li>
                                            <li>Register new vendor: Add a new vendor to the system.</li>
                                            <li>Update vendor data: Modify the details of a vendor.</li>
                                            <li>Delete/remove vendor: Remove a vendor from the system.</li>
                                        </ul>
                                        <li>Staff Management:</li>
                                        <ul>
                                            <li>List staff: View a list of staff members</li>
                                            <li>Register new staff: Add a new staff member to the system.</li>
                                            <li>Update staff data: Modify the information of a staff member.</li>
                                            <li>Delete/remove staff: Remove a staff member from the system.</li>
                                        </ul>
                                        <li>Product Management:</li>
                                        <ul>
                                            <li>List staff: View a list of staff members</li>
                                            <li>Register new product: Add a new product to the system.</li>
                                            <li>Update staff data: Modify the information of a staff member.</li>
                                            <li>Delete/remove product: Remove a product from the system.</li>
                                        </ul>
                                        <li>Raw Material Management:</li>
                                        <ul>
                                            <li>List raw materials: View a list of raw materials.</li>
                                            <li>Register new raw material: Add a new raw material to the system.</li>
                                            <li>Update raw material data: Modify the details of a raw material.</li>
                                            <li>Delete/remove raw material: Remove a raw material from the system.</li>
                                        </ul>
                                        <li>Leave and Attendance Application Management:</li>
                                        <ul>
                                            <li>List attendance by days/week: View attendance records for specific time periods.</li>
                                            <li>Update leave application status: Manage and update the status of leave applications.</li>
                                        </ul>
                                        <li>KPI Management:</li>
                                        <ul>
                                            <li>List tasks: Display a list of tasks or key performance indicators (KPIs).</li>
                                            <li>Add task: Create a new task or KPI.</li>
                                            <li>Update task data: Modify the details of a task or KPI.</li>
                                            <li>Delete task: Remove a task or KPI from the system.</li>
                                        </ul>
                                        <li>Ordering:</li>
                                        <ul>
                                            <li>List orders from agents: View a list of orders placed by agents.</li>
                                            <li>Add new order: Place a new order in the system.</li>
                                            <li>Update order status: Modify the status of an existing order.</li>
                                            <li>Delete/remove order: Remove an order from the system.</li>
                                        </ul>
                                        <li>Report Management:</li>
                                        <ul>
                                            <li>Produce report: Generate reports based on specified criteria.</li>
                                            <li>Print report: Print out the generated reports.</li>
                                        </ul>
                                    </ol>
                                    <p>
                                    The admin dashboard provides a centralized location for managing and monitoring various aspects of the system, 
                                    ensuring smooth operations, and enabling efficient decision-making. It offers functionalities for data entry, 
                                    data modification, data retrieval, and reporting, facilitating effective administration and control over the system's operations.
                                    </p>
                                </div>
                            </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Fast Kitchen Concept Management System</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>