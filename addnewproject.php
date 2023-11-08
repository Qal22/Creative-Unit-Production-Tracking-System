<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Add New Project</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
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
            <img src="img/logoanamuslim.png" alt="Your Logo" style="height: 44px; width: 64px"/>
          </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
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
              <a class="collapse-item" href="#">sort by Graphic Designer</a>
              <a class="collapse-item" href="#">sort by Editor</a>
              <a class="collapse-item" href="#">sort by Category</a>
              <a class="collapse-item" href="#">sort by Progress</a>
              <a class="collapse-item" href="#">Milestones</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

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
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">
                Add New Project To Production
              </h1>
            </div>
            <form>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="projectTitle">Project Title</label>
                  <input
                    type="text"
                    class="form-control"
                    id="projectTitle"
                    name="projectTitle"
                    required
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="projectSiri">Series</label>
                  <input
                    type="text"
                    class="form-control"
                    id="projectSiri"
                    name="projectSiri"
          
                  />
                </div>
                <div class="form-group col-md-6">
                  <label for="typeOfCategory">Type of Category</label>
                  <select
                    class="form-control"
                    id="typeOfCategory"
                    name="typeOfCategory"
                    required
                  >
                    <option value="" selected disabled>
                      Please select the category
                    </option>
                    <option value="Novel Graphic (1/2 Color)">Novel Graphic (1/2 Color)</option>
                    <option value="Novel Graphic (4 Cover)">Novel Graphic (4 Cover)</option>
                    <option value="Poster">Poster</option>
                    <option value="Komik">Komik</option>
                    <option value="Edukomik">Edukomik</option>
                    <option value="Aktiviti">Aktiviti</option>
                    <option value="Non-Fiction">Non-Fiction</option>
                    <option value="Mega (Hardcover)">Mega (Hardcover)</option>
                    <option value="Workbook / Academic">Workbook / Academic</option>
                    <option value="ABM (Others)">ABM (Others)</option>
                  </select>
                </div>
              </div>
              
              
              <div class="form-row">
                
                <div class="form-group col-md-6">
                  <label for="projectSize">Project Size</label>
                  <select
                    class="form-control"
                    id="projectSize"
                    name="projectSize"
                    
                  >
                    <option value="" selected disabled>
                      Please select the type
                    </option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="6x9">6" x 9"</option>
                    <option value="7.5x10">7.5" x 10"</option>
                    <option value="8x8">8" x 8"</option>
                    <option value="10x10">10" x 10"</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="totalPages">Total Pages</label>
                  <input
                    type="number"
                    class="form-control"
                    id="totalPages"
                    name="totalPages"
                    min="1"
                    
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="typeDesign">Type of Design</label>
                  <select
                    class="form-control"
                    id="typeDesign"
                    name="typeDesign"
                    required
                  >
                    <option value="" selected disabled>
                      Please select the type
                    </option>
                    <option value="Cover">Cover</option>
                    <option value="Text">Text</option>
                    <option value="Illustration">Illustration</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="Finishing">Finishing</label>
                  <select
                    class="form-control"
                    id="Finishing"
                    name="Finishing"
                    
                  >
                    <option value="" selected disabled>
                      Please select the type
                    </option>
                    <option value="UV">UV</option>
                    <option value="SPOT UV">SPOT UV</option>
                    <option value="GLITTER">GLITTER</option>
                    <option value="EMBOSS">EMBOSS</option>
                    <option value="PERFECT BINDING">PERFECT BINDING</option>
                    <option value="PIN BINDING">PIN BINDING</option>
                    <option value="WIRE O">WIRE O</option>
                    <option value="SOFT COVER">SOFT COVER</option>
                    <option value="HARD COVER">HARD COVER</option>
                    <option value="BOX / PLASTIC PACKAGING">BOX / PLASTIC PACKAGING</option>
                  </select>
                </div>

              </div>

              <hr class="hr hr-blurry" />
              <!--divider-->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">
                Project Members
              </h1>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="Writer">Writer</label>
                  <input
                    type="text"
                    class="form-control"
                    id="Writer"
                    name="Writer"
                    
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="Editor (Coordinator)">Editor (Coordinator)</label>
                  <input
                    type="text"
                    class="form-control"
                    id="Coordinator"
                    name="Coordinator"
                    
                  />
                </div>
                <div class="form-group col-md-6">
                  <label for="Editor (Proofing)">Editor (Proofing)</label>
                  <input
                    type="text"
                    class="form-control"
                    id="proofer"
                    name="proofer"
                    
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="Graphic Designer (Text)">Graphic Designer (Text)</label>
                  <input
                    type="text"
                    class="form-control"
                    id="designerText"
                    name="designerText"
                    
                  />
                </div>
                <div class="form-group col-md-6">
                  <label for="Graphic Designer (Cover)">Graphic Designer (Cover)</label>
                  <input
                    type="text"
                    class="form-control"
                    id="designerCover"
                    name="designerCover"
                    
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="Illustrator (Text)">Illustrator (Text)</label>
                  <input
                    type="text"
                    class="form-control"
                    id="IlusText"
                    name="IlusText"
                    
                  />
                </div>
                <div class="form-group col-md-6">
                  <label for="Illustrator (Cover)">Illustrator (Cover)</label>
                  <input
                    type="text"
                    class="form-control"
                    id="IlusCover"
                    name="IlusCover"
                    
                  />
                </div>
              </div>
              <div class="form-group col-md-13">
                <label for="Number of Illustration (Pages)">Number of Illustration (Pages)</label>
                <input
                  type="number"
                  class="form-control"
                  id="IlusPages"
                  name="IlusPages"
                  min="1"
                />
              </div>


              <hr class="hr hr-blurry" />
              <!--divider-->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">
                Design & Layout - Action Item
              </h1>
              </div>
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <table width="80%" align="center">
                <col style="width:35%">
                <col style="width:10%">
                <col style="width:10%">
                <col style="width:10%">
                <col style="width:15%">
                <tr align=center><th>Action Items</th><th>Start Date</th><th>Target Date</th><th>Actual Date</th><th>Status</th></tr>
                <tr>
                <tr><td colspan="5">
                <hr class="hr hr-blurry" />
                <!--divider-->
                </td></tr>
                <td>Manuscript Readiness</td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="MRStartDate"
                    name="MRStartDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="MRTargetDate"
                    name="MRTargetDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="MRActualDate"
                    name="MRActualDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                  type="number"
                  class="form-control"
                  id="MRStatus"
                  name="MRStatus"
                  
                /></td>
                </tr>
                  
                <tr>
                  <td>Concept Development</td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="CDStartDate"
                    name="CDStartDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="CDTargetDate"
                    name="CDTargetDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="CDActualDate"
                    name="CDActualDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                  type="number"
                  class="form-control"
                  id="CDStatus"
                  name="CDStatus"
                  
                /></td>
                </tr>
                <tr><td>Illustration (Text)</td>
                <td><input
                    type="date"
                    class="form-control"
                    id="ITStartDate"
                    name="ITStartDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="ITTargetDate"
                    name="ITTargetDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="ITActualDate"
                    name="ITActualDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                  type="number"
                  class="form-control"
                  id="ITStatus"
                  name="ITStatus"
                  
                /></td>
                </tr>
                  <tr><td>Illustration (Cover)</td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="ICStartDate"
                    name="ICStartDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="ICTargetDate"
                    name="ICTargetDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="ICActualDate"
                    name="ICActualDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                  type="number"
                  class="form-control"
                  id="ICStatus"
                  name="ICStatus"
                  
                /></td>
                </tr>
                <tr>
                  <td>Graphic Layout (Text)</td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="GLTStartDate"
                    name="GLTStartDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="GLTTargetDate"
                    name="GLTTargetDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="GLTActualDate"
                    name="GLTActualDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                  type="number"
                  class="form-control"
                  id="GLTStatus"
                  name="GLTStatus"
                  
                /></td>
                </tr>
                <tr><td>Graphic Layout (Cover)</td>
                <td><input
                    type="date"
                    class="form-control"
                    id="GLCStartDate"
                    name="GLCStartDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="GLCTargetDate"
                    name="GLCTargetDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="GLCActualDate"
                    name="GLCActualDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                  type="number"
                  class="form-control"
                  id="GLCStatus"
                  name="GLCStatus"
                  
                /></td>
                </tr>
                <tr><td>Proofing & Correction</td>
                <td><input
                    type="date"
                    class="form-control"
                    id="PCStartDate"
                    name="PCStartDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="PCTargetDate"
                    name="PCTargetDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="PCActualDate"
                    name="PCActualDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                  type="number"
                  class="form-control"
                  id="PCStatus"
                  name="PCStatus"
                  
                /></td>
                </tr>
                <tr><td>PDP & ISBN Application</td>
                <td><input
                    type="date"
                    class="form-control"
                    id="PDPStartDate"
                    name="PDPStartDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="PDPTargetDate"
                    name="PDPTargetDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                    type="date"
                    class="form-control"
                    id="PDPActualDate"
                    name="PDPActualDate"
                    min="<?php echo date('Y-m-d'); ?>"
                    
                  /></td>
                  <td><input
                  type="number"
                  class="form-control"
                  id="PDPStatus"
                  name="PDPStatus"
                  
                /></td>
                </tr>
              </table>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
              
            </form>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <br />
        <!-- Footer -->
        <footer class="sticky-footer custom-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span
                >Copyright &copy; 2023 Ana Muslim Sdn Bhd. All rights
                reserved.</span
              >
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
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  </body>
</html>
