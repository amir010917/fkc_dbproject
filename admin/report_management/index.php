<?php 
require('../../db/db_connect.php'); 
require('../../db/auth.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agent Directory</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
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
                        <a class="collapse-item" href="../staff_management/index.php">Staff Directory</a>
                        <a class="collapse-item" href="../attendance_management/index.php">Staff Attendance</a>
                        <a class="collapse-item" href="../leave_application/index.php">Staff Leave Application</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Nav Item  -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
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

<body>
    
                
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" style="text-align: center;">The Fast Kitchen Report</h1>
        <div class="text-right">
            <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
        </div>


        <div class="container-a">
        <h1 class="h5 mb-2 text-gray-800">Agent Directory</h1>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </tr>
            </tfoot>
            <tbody>
            <?php                                                
            $sql = "SELECT * FROM agent";
            $sql_run = mysqli_query($conn, $sql);
            while($row= mysqli_fetch_array($sql_run)){
                                ?>
                <tr>
                    <td><?php echo $row['agent_fname']; ?></td>
                    <td><?php echo $row['agent_lname']; ?></td>
                    <td><?php echo $row['agent_email']; ?></td>
                    <td><?php echo $row['agent_phone']; ?></td>
                    <td><?php echo $row['agent_address']; ?></td>
                    
                </tr> <?php } ?>
            </tbody>
        </table>
        </div>
        <br><br>
        <div class="container-b">
        <h1 class="h5 mb-2 text-gray-800">Vendor Directory</h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Category</th>
                            <th>Address</th>
                            <th>Name PIC</th>
                            <th>Contact Number</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                        </tr>
                    </tfoot>
                    <tbody>
                    <?php                                                
                    $sql = "SELECT * FROM vendor";
                    $sql_run = mysqli_query($conn, $sql);
                     while($row= mysqli_fetch_array($sql_run)){
                                        ?>
                        <tr>
                            <td><?php echo $row['vendor_companyname']; ?></td>
                            <td><?php echo $row['vendor_category']; ?></td>
                            <td><?php echo $row['vendor_address']; ?></td>
                            <td><?php echo $row['vendor_picname']; ?></td>
                            <td><?php echo $row['vendor_picphone']; ?></td>
                        </tr> <?php } ?>
                    </tbody>
                </table>
        </div>
        <br><br>
        <div class="container-c">
        <h1 class="h5 mb-2 text-gray-800">Raw Material Directory</h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr> 				
                            <th>Raw Material Name</th>
                            <th>Unit</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Vendor</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr> 				

                        </tr>
                    </tfoot>
                    <tbody>
                    <?php                                                
                    $sql = "SELECT raw_material.*, vendor.vendor_companyname FROM raw_material JOIN vendor ON raw_material.id_vendor = vendor.id_vendor;";
                    $sql_run = mysqli_query($conn, $sql);
                     while($row= mysqli_fetch_array($sql_run)){
                                        ?>
                        <tr>
                            <td><?php echo $row['raw_pname']; ?></td>
                            <td><?php echo $row['raw_unit']; ?></td>
                            <td><?php echo $row['raw_quantity']; ?></td>
                            <td><?php echo $row['raw_price']; ?></td>
                            <td><?php echo $row['vendor_companyname']; ?></td>
                        </tr> <?php } ?>
                    </tbody>
                </table>
        </div>
        <br><br>
        <div class="container-d">
        <h1 class="h5 mb-2 text-gray-800">Raw Material Directory</h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr> 				
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tfoot>

                    </tfoot>
                    <tbody>
                    <?php                                                
                    $sql = "SELECT * FROM product";
                    $sql_run = mysqli_query($conn, $sql);
                     while($row= mysqli_fetch_array($sql_run)){
                                        ?>
                        <tr>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['product_category']; ?></td>
                            <td><?php echo $row['product_description']; ?></td>
                            <td><?php echo $row['product_price']; ?></td>
                        </tr> <?php } ?>
                    </tbody>
                </table>
        </div>
        <br><br>
        <div class="container-e">
        <div class="table-responsive">
        <h1 class="h5 mb-2 text-gray-800">Order Directory</h1>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>First Name</th>
                            <th>Phone Number</th>
                            <th>Product Name</th>
                            <th>Product Category</th>
                            <th>Product Price</th>
                            <th>Order Quantity</th>
                            <th>Order Total Price</th>
                            <th>Order Status</th>
                    </thead>
                    <tfoot>
                        <tr>
                    </tfoot>
                    <tbody>
                    <?php                                                
                    $sql = "SELECT agent_order.* , agent.*, product.* FROM (()) agent_order JOIN staff ON employee_leave.id_staff = staff.id_staff";
                    $sql = "SELECT o.* , a.*, p.*
                    FROM  agent_order AS o
                    INNER JOIN agent AS a ON o.id_agent = a.id_agent
                    INNER JOIN product AS p ON p.id_product = o.id_product;";
                    $sql_run = mysqli_query($conn, $sql);
                    while($user= mysqli_fetch_array($sql_run)){
                    ?>
                        <tr>
                        <td><?php echo $user['agent_fname']; ?></td>
                            <td><?php echo $user['agent_phone']; ?></td>
                            <td><?php echo $user['product_name']; ?></td>
                            <td><?php echo $user['product_category']; ?></td>
                            <td><?php echo $user['product_price']; ?></td>
                            <td><?php echo $user['order_quantity']; ?></td>
                            <td><?php echo $user['order_totalprice']; ?></td>
                            <td><?php echo $user['order_status']; ?></td>
                        </tr> <?php } ?>
                    </tbody>
                </table>
        </div>
        <br><br>
        <div class="container-f">
        <div class="table-responsive">
        <h1 class="h5 mb-2 text-gray-800">KPI Directory</h1>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>	
                                            <th>First Name</th>
                                            <th>KPI Task</th>
                                            <th>KPI Due</th>
                                            <th>KPI Status %</th>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php                                                
                                    $sql = "SELECT * FROM kpi JOIN staff ON kpi.id_staff = staff.id_staff";  
                                    $sql_run = mysqli_query($conn, $sql);
                                    while($user= mysqli_fetch_array($sql_run)){
                                    ?>
                                    <tr>
                                        <td><?php echo $user['staff_fname']; ?></td>
                                        <td><?php echo $user['kpi_task']; ?></td>
                                        <td><?php echo $user['kpi_due']; ?></td>
                                        <td><?php echo $user['kpi_status']; ?></td>
                                    </tr> <?php } ?>
                                </tbody>
                            </table>

        </div>
        <br><br>
        <div class="container-g">
        <h1 class="h5 mb-2 text-gray-800">Staff Directory</h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php                                                
                    $sql = "SELECT * FROM staff";
                    $sql_run = mysqli_query($conn, $sql);
                     while($row= mysqli_fetch_array($sql_run)){
                                        ?>
                        <tr>
                            <td><?php echo $row['staff_fname']; ?></td>
                            <td><?php echo $row['staff_lname']; ?></td>
                            <td><?php echo $row['staff_email']; ?></td>
                            <td><?php echo $row['staff_phone']; ?></td>
                            <td><?php echo $row['staff_address']; ?></td>
                            <td><?php echo $row['staff_role']; ?></td>
                        </tr> <?php } ?>
                    </tbody>
                </table>
        </div>
        <br><br>
        <div class="container-h">
        <div class="table-responsive">
        <h1 class="h5 mb-2 text-gray-800">Staff Attendance Directory</h1>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Staff Name</th>
                            <th>Attendance Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php 
                    $sql = "SELECT * FROM attendance JOIN staff ON attendance.id_staff = staff.id_staff";                                               
                    $sql_run = mysqli_query($conn, $sql);
                     while($user= mysqli_fetch_array($sql_run)){
                                        ?>
                        <tr>
                            <td><?php echo $user['staff_fname']; ?></td>
                            <td><?php echo $user['attendance_date']; ?></td>
                        </tr> <?php } ?>
                    </tbody>
                </table>
        </div>
        <br><br>
        <div class="container-i">
        <h1 class="h5 mb-2 text-gray-800">Staff Leave Directory</h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Staff Name</th>
                                            <th>Detail Leave</th>
                                            <th>Status Leave</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php                                                
                                    $sql = "SELECT * FROM employee_leave JOIN staff ON employee_leave.id_staff = staff.id_staff";
                                    $sql_run = mysqli_query($conn, $sql);
                                    while($user= mysqli_fetch_array($sql_run)){                                              ?>
                                        <tr>
                                            <td><?php echo $user['staff_fname']; ?></td>
                                            <td><?php echo $user['leave_detail']; ?></td>
                                            <td><?php echo $user['leave_status']; ?></td>
                                        </tr> <?php } ?>
                                    </tbody>
                                </table>
        </div>
            
</div>






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


</body>

</html>