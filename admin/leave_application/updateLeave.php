<?php
require('../../db/db_connect.php'); 
require('../../db/auth.php');

if (isset($_GET['id'])) {
    $id_leave = $_GET['id'];
    
    $sql = "SELECT * FROM employee_leave JOIN staff ON employee_leave.id_staff = staff.id_staff WHERE  employee_leave.id_leave = $id_leave";
    $sql_run = mysqli_query($conn, $sql);
    $user= mysqli_fetch_array($sql_run);
}

if (isset($_POST['submit'])) {
    $leave_detail = $_POST['leave_detail'];
    $leave_status = $_POST['leave_status'];

    $update_query = "UPDATE employee_leave SET leave_detail='$leave_detail', leave_status='$leave_status' WHERE id_leave = $id_leave";

    if (mysqli_query($conn, $update_query)) {
        // Redirect to the agent management page or display a success message
        header("Location: index.php");
        exit();
    } else {
        // Handle the case where the update query fails
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Staff Directory</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
        <!-- Custom styles for this page -->
        <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                <a class="nav-link" href="../index.php">
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
                <a class="nav-link" href="../agent_management/index.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Agent Management</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="../vendor_management/index.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Vendor Management</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="../raw_material_management/index.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Raw Material Management</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="../product_management/index.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Product Management</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="../order_management/index.php">
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
                        <a class="collapse-item" href="../kpi_management/index.php">KPI Management</a>
                        <a class="collapse-item" href="index.php">Staff Directory</a>
                        <a class="collapse-item" href="../attendance_management/index.php">Staff Attendance</a>
                        <a class="collapse-item" href="../leave_application/index.php">Staff Leave Application</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Nav Item  -->
            <li class="nav-item">
                <a class="nav-link" href="../report_management/index.php">
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
                                <a class="dropdown-item" href="../profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../logout.php" data-toggle="modal" data-target="#logoutModal">
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
                    <h1 class="h3 mb-4 text-gray-800">Staff Leave Application Details</h1>

                    <div class="card card-outline card-primary">
                        <div class=" card card-outline  ">
                                <div class="container-fluid">
                                    <div id="msg"></div> <br>

                                    <form action="" id="manage-user" method="POST">
                                    <div class="form-group">
    <label for="leave_detail">Detail Leave</label>
    <textarea class="form-control" id="leave_detail" rows="3" name="leave_detail"><?php echo $user['leave_detail']; ?></textarea>
</div>

                                        <div class="form-group">

                                            <label for="leave_status">Status Leave</label>
                                            <select name="leave_status" id="leave_status" class="custom-select">
                                                <option value="<?php echo $user['leave_status']; ?>"><?php echo $user['leave_status']; ?></option>
                                                <option value="Approved">Approved</option>
                                                <option value="Disapproved">Disapproved</option>
                                            </select>
                                        </div>
                                        <div class="card-footer">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <button class="btn btn-sm btn-primary mr-2" id="submit" type="submit" name="submit">Save</button>
                                                    <a class="btn btn-sm btn-secondary" href="index.php">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
                    <a class="btn btn-primary" href="../../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>
        <!-- Page level plugins -->
        <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    
        <!-- Page level custom scripts -->
        <script src="../../js/demo/datatables-demo.js"></script>

</body>

</html>