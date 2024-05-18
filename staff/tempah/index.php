<?php 
require('../../db/db_connect.php'); 
require('../../db/auth.php');

$username= $_SESSION['username'];
$id = $_SESSION['id_staff'];

$query = "SELECT * FROM `staff` WHERE staff_username='$username'";
	        $result = mysqli_query($conn,$query) or die(mysqli_connect_error());
	        $rows = mysqli_num_rows($result);
            $user = mysqli_fetch_assoc($result);
                                                                        
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form values
    $id_staff = $_POST['id_staff'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $urusan_kerja = $_POST['urusan_kerja'];
    $tarikh_pohon = $_POST['tarikh_pohon'];
    $tempat_urusan = $_POST['tempat_urusan'];
    $no_telefon = $_POST['no_telefon'];
    $jabatan = $_POST['jabatan'];
    $tarikh_urusan = $_POST['tarikh_urusan'];
    $tarikh_tamat = $_POST['tarikh_tamat'];
    $masa_urusan = $_POST['masa_urusan'];
    $masa_tamat = $_POST['masa_tamat'];

    $query = "INSERT INTO `tempah_db` (`id_staff`, `nama_pegawai`, `urusan_kerja`, `tarikh_pohon`, `tempat_urusan`, `no_telefon`, `jabatan`, `tarikh_urusan`, `tarikh_tamat`, `masa_urusan`, `masa_tamat`) 
    VALUES ('$id_staff', '$nama_pegawai', '$urusan_kerja', '$tarikh_pohon', '$tempat_urusan', '$no_telefon', '$jabatan', '$tarikh_urusan', '$tarikh_tamat', '$masa_urusan', '$masa_tamat')";
    if ($conn->query($query) === TRUE) {
        echo ' <script>alert("Staff inserted successfully.!");</script>';
        header("Location: index.php");
    } else {
        echo ' <script>alert("Error inserting staff:");</script>' . $conn->error;
    }

    // Close the database connection
    $conn->close();
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">    <?php echo $_SESSION['username']; ?></span>
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
                    <h1 class="h3 mb-4 text-gray-800">Tempah Form</h1>

                    <div class="card card-outline card-primary">
                        <div class=" card card-outline  ">
                                <div class="container-fluid">
                                    <div id="msg"></div> <br>

                                    <form action="" id="manage-user" method="POST">	

                                        <div class="form-group">
                                            <input type="hidden" name="id_staff" id="id_staff" class="form-control" name="id_staff" value="<?php echo $user['id_staff']; ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_pegawai">Nama Pegawai</label>
                                            <input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control" name="nama_pegawai">
                                        </div>
                                        <div class="form-group">
                                            <label for="urusan_kerja">Urusan Kerja</label>
                                            <input type="text" name="urusan_kerja" id="urusan_kerja" class="form-control" name="urusan_kerja">
                                        </div>
                                        <div class="input">
                                            <label for="tarikh_pohon">Tarikh Pohon:</label><br>
                                            <input type="date" id="datepicker" class="inputField tarikh_pohon" name="tarikh_pohon" placeholder="xx-mm-yyyy">
                                            <div class="error tarikh_pohonerror"></div>
                                        </div>
                                        <div class="input">
                                            <label for="tempat_urusan">Tempat:</label><br>
                                            <input type="text" class="inputField tempat_urusan" name="tempat_urusan" placeholder="Jajahan Pasir Puteh">
                                            <div class="error tempat_urusanerror"></div>
                                        </div>
                                        <div class="input">
                                            <label for="no_telefon">No. Telefon:</label><br>
                                            <input type="text" class="inputField no_telefon" name="no_telefon" placeholder="019-96089111">
                                            <div class="error no_telefonerror"></div>
                                        </div>
                                        <div class="input">
                                            <label for="jabatan">Jabatan dan Unit:</label><br>
                                            <select class="input jabatan" name="jabatan">
                                                <option value="">--Sila Pilih--</option>
                                                <option value="Pentadbiran & Pengurusan Sumber Manusia">Pentadbiran & Pengurusan Sumber Manusia</option>
                                                <option value="Perhubungan Awam & Korporat">Perhubungan Awam & Korporat</option>
                                                <option value="Penguatkuasaan">Penguatkuasaan</option>
                                                <option value="Pembangunan & Kejuruteraan ">Pembangunan & Kejuruteraan </option>
                                                <option value="Perancangan & Pembangunan">Perancangan & Pembangunan</option>
                                                <option value="Pelesenan & Kesihatan Awam">Pelesenan & Kesihatan Awam</option>
                                                <option value="Teknologi Maklumat">Teknologi Maklumat</option>
                                                <option value="Pusat Setempat (OSC)">Pusat Setempat (OSC)</option>
                                                <option value="Perundangan">Perundangan</option>
                                                <option value="Perbendaharaan">Perbendaharaan</option>
                                                <option value="Pembangunan Islam">Pembangunan Islam</option>
                                                <option value="Penilaian & Pengurusan Harta">Penilaian & Pengurusan Harta</option>
                                            </select>
                                            <div class="error jabatan"></div>
                                        </div>
                                        <div class="input">
                                            <label for="tarikh_urusan">Tarikh Mula:</label><br>
                                            <input type="date" id="datepicker2" class="inputField tarikh_urusan" name="tarikh_urusan" placeholder="xx-mm-yyyy">
                                            <div class="error tarikh_urusanerror"></div>
                                        </div>
                                        <div class="input">
                                            <label for="tarikh_tamat">Tarikh Tamat:</label><br>
                                            <input type="date" id="datepicker3" class="inputField tarikh_tamat" name="tarikh_tamat" placeholder="xx-mm-yyyy">
                                            <div class="error tarikh_tamaterror"></div>
                                        </div>
                                        <div class="input">
                                            <label for="masa_urusan">Masa Mula:</label><br>
                                            <input type="time" class="inputField masa_urusan" name="masa_urusan" placeholder="09:00am">
                                            <div class="error masa_urusanerror"></div>
                                        </div>
                                        <div class="input">
                                            <label for="masa_tamat">Masa Tamat:</label><br>
                                            <input type="time" class="inputField masa_tamat" name="masa_tamat" placeholder="09:00pm">
                                            <div class="error masa_tamaterror"></div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="col-md-12">
                                                <div class="row">
                                                <button type="submit"class="btn btn-sm btn-primary mr-2" id="submit" type="submit" name="submit">Save</button>
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
                <br>
                <section>
                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">The following is a list of staff leave application for Fast Kitchen Concept.</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Staff</th>
                                            <th>Nama Pegawai</th>
                                            <th>Urusan Kerja</th>
                                            <th>Tarikh Pohon</th>
                                            <th>Tempat Urusan</th>
                                            <th>No Telefon</th>
                                            <th>Jabatan</th>
                                            <th>Tarikh Urusan</th>
                                            <th>Tarikh Tamat</th>
                                            <th>Masa Urusan</th>
                                            <th>Masa Tamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Staff</th>
                                            <th>Nama Pegawai</th>
                                            <th>Urusan Kerja</th>
                                            <th>Tarikh Pohon</th>
                                            <th>Tempat Urusan</th>
                                            <th>No Telefon</th>
                                            <th>Jabatan</th>
                                            <th>Tarikh Urusan</th>
                                            <th>Tarikh Tamat</th>
                                            <th>Masa Urusan</th>
                                            <th>Masa Tamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php                                                
                                    $sql = "SELECT * FROM tempah_db JOIN staff ON tempah_db.id_staff = staff.id_staff";
                                    $sql_run = mysqli_query($conn, $sql);
                                    while($user= mysqli_fetch_array($sql_run)){
                                                        ?>
                                        <tr>
                                            <td><?php echo $user['staff_fname']; ?></td>
                                            <td><?php echo $user['nama_pegawai']; ?></td>
                                            <td><?php echo $user['urusan_kerja']; ?></td>
                                            <td><?php echo $user['tarikh_pohon']; ?></td>
                                            <td><?php echo $user['tempat_urusan']; ?></td>
                                            <td><?php echo $user['no_telefon']; ?></td>
                                            <td><?php echo $user['jabatan']; ?></td>
                                            <td><?php echo $user['tarikh_urusan']; ?></td>
                                            <td><?php echo $user['tarikh_tamat']; ?></td>
                                            <td><?php echo $user['masa_urusan']; ?></td>
                                            <td><?php echo $user['masa_tamat']; ?></td>
                                            
                                            <td align="center">
                                                <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon py-0" data-toggle="dropdown">
                                                        Action
                                                <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu">
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item edit_data" href="edittempah.php?id=<?php echo $user['id_tempah']; ?>"><span class="fa fa-edit text-primary"></span> Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item delete_data" href="deletetempah.php?id=<?php echo $user['id_tempah']; ?>" ><span class="fa fa-trash text-danger"></span> Delete</a>
                                                </div>
                                        </td>
                                        </tr> <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>


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