<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Project List</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="img/logoanamuslim.png" alt="Your Logo" style="height: 44px; width: 64px" />
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!--Change data-target, aria-controls, id, aria-labelledby into other name than any nav-item-->
            <!-- Nav Item 1 - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProjectManagement" aria-expanded="true" aria-controls="collapseProjectManagement">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Project Management</span>
                </a>
                <div id="collapseProjectManagement" class="collapse" aria-labelledby="headingProjectManagement" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="addnewproject.php">Add New Project</a>
                        <a class="collapse-item" href="allprojectlist.php">All Project List</a>
                    </div>
                </div>
            </li>

            <!--Change data-target, aria-controls, id, aria-labelledby into other name than any nav-item-->
            <!-- Nav Item 2 - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport" aria-expanded="true" aria-controls="collapseReport">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Report</span>
                </a>
                <div id="collapseReport" class="collapse" aria-labelledby="headingReport" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="#">sort by Progress</a>
                        <a class="collapse-item" href="#">Milestones</a>
                    </div>
                </div>
            </li>

            <!--Change data-target, aria-controls, id, aria-labelledby into other name than any nav-item-->
            <!-- Nav Item 1 - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePersonnels" aria-expanded="true" aria-controls="collapseProjectManagement">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Personnels</span>
                </a>
                <div id="collapsePersonnels" class="collapse" aria-labelledby="headingProjectManagement" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="addnewpersonnel.php">Add New Personnel</a>
                        <a class="collapse-item" href="personnellist.php">All Personnel List</a>
                    </div>
                </div>
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
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h1 class="responsive-title">Creative Unit Production Tracking System</h1>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List of all personnel</h1>

                    <!-- DataTables -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="form-row justify-content-between align-items-center">
                                <h5 class="m-0 font-weight-bold text-dark">Details of Personnel</h5>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            
                                            <th>Action</th>

                                        </tr>
                                    </thead>

                                    <?php
                                    include "databasefx.php";
                                    $sql = "SELECT * FROM personnel";
                                    $result = mysqli_query($dbc, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo
                                        '<tr>
                                            
                                            <td>' . $row['name'] . '</td>
                                            <td>' . $row['position'] . '</td>
                                            <td>' . $row['email'] . '</td>
                                            <td>' . $row['phone'] . '</td>
                                            

                                            <td> 
                                                <a href="updatedesignlayout.php?projectTitle=' . $row['name'] . '" class="btn btn-info btn-icon-split">
                                                    <span class="icon text-white-50">
                                                    <i class="fas fa-fw fa-cog"></i>
                                                    </span>
                                                <span class="text">Update</span>
                                                </a>

                                                <a href="#" class="btn btn-danger btn-icon-split">
                                                    <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                    </span>
                                                <span class="text">Delete</span>
                                                </a>

                                            </td>
                                        </tr>';
                                    }
                                    ?>

                                </table>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer custom-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2023 Ana Muslim Sdn Bhd. All rightsreserved.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>