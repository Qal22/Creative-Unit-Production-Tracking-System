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
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon">
            <!--<i class="fas fa-laugh-wink"></i>-->
            <img src="img/logoanamuslim.png" alt="Your Logo" style="height: 44px; width: 64px"/>
          </div>
          <div class="sidebar-brand-text mx-3">Production Tracking</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
          <a class="nav-link" href="addnewproject.php">
            <i class="fas fa-fw fa-plus"></i>
            <span>Add New Project</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Process</div>

        <!--Change data-target, aria-controls, id, aria-labelledby into other name than any nav-item-->
        <!-- Nav Item 1 - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprepress" aria-expanded="true" aria-controls="collapseprepress">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pre-press</span>
          </a>
          <div id="collapseprepress" class="collapse" aria-labelledby="headingprepress" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Sub-process:</h6>
              <a class="collapse-item" href="#">Design & Layout</a>
              <a class="collapse-item" href="#">ISBN Application</a>
              <a class="collapse-item" href="#">Plate Making / Registration</a>
              <a class="collapse-item" href="#">Material Procurement</a>
            </div>
          </div>
        </li>

        <!-- Nav Item 2 - Pages Collapse Menu -->
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseprinting"
            aria-expanded="true"
            aria-controls="collapseprinting"
          >
            <i class="fas fa-fw fa-print"></i>
            <span>Printing</span>
          </a>
          <div
            id="collapseprinting"
            class="collapse"
            aria-labelledby="headingprinting"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Sub-process:</h6>
              <a class="collapse-item" href="#">Cover Page</a>
              <a class="collapse-item" href="#">Content Pages</a>
            </div>
          </div>
        </li>

        <!-- Nav Item 3 - Pages Collapse Menu -->
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapsepostpress"
            aria-expanded="true"
            aria-controls="collapsepostpress"
          >
            <i class="fas fa-fw fa-pencil-alt"></i>
            <span>Post-press</span>
          </a>
          <div
            id="collapsepostpress"
            class="collapse"
            aria-labelledby="headingpostpress"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Sub-process:</h6>
              <a class="collapse-item" href="#">Folding</a>
              <a class="collapse-item" href="#">Binding</a>
              <a class="collapse-item" href="#">Cutting / Trimming</a>
            </div>
          </div>
        </li>

        <!-- Nav Item 4 - Pages Collapse Menu -->
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapsefinishing"
            aria-expanded="true"
            aria-controls="collapsefinishing"
          >
            <i class="fas fa-fw fa-star"></i>
            <span>Finishing</span>
          </a>
          <div
            id="collapsefinishing"
            class="collapse"
            aria-labelledby="headingfinishing"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Sub-process:</h6>
              <a class="collapse-item" href="#">Packing & Shipping</a>
            </div>
          </div>
        </li>

        <!-- Nav Item 5 - Pages Collapse Menu -->
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapsedelivery"
            aria-expanded="true"
            aria-controls="collapsedelivery"
          >
            <i class="fas fa-fw fa-truck"></i>
            <span>Delivery</span>
          </a>
          <div
            id="collapsedelivery"
            class="collapse"
            aria-labelledby="headingdelivery"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Sub-process:</h6>
              <a class="collapse-item" href="#">Acceptance</a>
              <a class="collapse-item" href="#">Quality Check (Editorial)</a>
              <a class="collapse-item" href="#">Release to Market (RTM)</a>
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
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
              class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
            >
              <div class="input-group">
                <input
                  type="text"
                  class="form-control bg-light border-0 small"
                  placeholder="Search for..."
                  aria-label="Search"
                  aria-describedby="basic-addon2"
                />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="alertsDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="alertsDropdown"
                >
                  <h6 class="dropdown-header">Alerts Center</h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 12, 2019</div>
                      <span class="font-weight-bold"
                        >A new monthly report is ready to download!</span
                      >
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 7, 2019</div>
                      $290.29 has been deposited into your account!
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 2, 2019</div>
                      Spending Alert: We've noticed unusually high spending for
                      your account.
                    </div>
                  </a>
                  <a
                    class="dropdown-item text-center small text-gray-500"
                    href="#"
                    >Show All Alerts</a
                  >
                </div>
              </li>

              <!-- Nav Item - Messages -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="messagesDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-envelope fa-fw"></i>
                  <!-- Counter - Messages -->
                  <span class="badge badge-danger badge-counter">7</span>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="messagesDropdown"
                >
                  <h6 class="dropdown-header">Message Center</h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img
                        class="rounded-circle"
                        src="img/undraw_profile_1.svg"
                        alt="..."
                      />
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                      <div class="text-truncate">
                        Hi there! I am wondering if you can help me with a
                        problem I've been having.
                      </div>
                      <div class="small text-gray-500">Emily Fowler · 58m</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img
                        class="rounded-circle"
                        src="img/undraw_profile_2.svg"
                        alt="..."
                      />
                      <div class="status-indicator"></div>
                    </div>
                    <div>
                      <div class="text-truncate">
                        I have the photos that you ordered last month, how would
                        you like them sent to you?
                      </div>
                      <div class="small text-gray-500">Jae Chun · 1d</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img
                        class="rounded-circle"
                        src="img/undraw_profile_3.svg"
                        alt="..."
                      />
                      <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                      <div class="text-truncate">
                        Last month's report looks great, I am very happy with
                        the progress so far, keep up the good work!
                      </div>
                      <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img
                        class="rounded-circle"
                        src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                        alt="..."
                      />
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                      <div class="text-truncate">
                        Am I a good boy? The reason I ask is because someone
                        told me that people say this to all dogs, even if they
                        aren't good...
                      </div>
                      <div class="small text-gray-500">
                        Chicken the Dog · 2w
                      </div>
                    </div>
                  </a>
                  <a
                    class="dropdown-item text-center small text-gray-500"
                    href="#"
                    >Read More Messages</a
                  >
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >Muhammad Haikal</span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="img/undraw_profile.svg"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
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
              <div class="form-group col-md-12">
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
              <table>
                <tr><th>Action Items</th><th>Start Date</th><th>Target Date</th><th>Actual Date</th><th>Status</th></tr>
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

              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <br />
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
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
