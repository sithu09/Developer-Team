<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Admin To Designer</title>

    <!-- Custom fonts for this template -->
    <link
      href="../admin/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template -->
    <link href="../admin/css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link
      href="../admin/vendor/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../team/css/bootstrap.css" />
    <link rel="stylesheet" href="../team/vendors/linericon/style.css" />
    <link rel="stylesheet" href="../team/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../team/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../team/vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="../team/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="../team/vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="../team/vendors/popup/magnific-popup.css" />
    <link rel="stylesheet" href="../team/vendors/flaticon/flaticon.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../team/css/style.css" />
    <link rel="stylesheet" href="../team/css/responsive.css" />
  </head>

 <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li> -->

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="{{url('admin/home')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>ToDo List</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('admin/insert_todo_list')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Insert ToDo List</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('admin/designer')}}">
            <i class="fas fa-user"></i>
            <span>Designer</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('admin/frontend')}}">
            <i class="fas fa-user"></i>
            <span>Frontend</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('admin/backend')}}">
            <i class="fas fa-user"></i>
            <span>Backend</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('admin/team_leader')}}">
            <i class="fas fa-user"></i>
            <span>Team Leader</span></a>
        </li>
<li class="nav-item">
                               <a class="dropdown-item text-white" href="{{ route('logout') }}" style="font-size:14px"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt "></i>  <span>Log out</span></a>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
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

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              {{-- <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    class="img-profile rounded-circle"
                    src="https://source.unsplash.com/QAB-WJcbgJk/60x60"
                  />
                </a> --}}
                <!-- Dropdown - User Information -->
               {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
              </li> --}}
            </ul>
          </nav>
          <!-- End of Topbar -->
        <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="">
      <div class="container">
        <div class="banner_inner d-flex align-items-center">
          <div class="banner_content">
            <div class="media">
              <div class="d-flex">
                <img src="../team/img/personal.jpg" alt="" / style="width:370px;height:400px">
              </div>
              <div class="media-body ml-5 mt-3" style="width:370px;height:400px">
                <div class="personal_text">
                  <h3>Aung Kyaw Myo Khaing</h3>
                  <h4>Junior UI/UX Developer</h4>
                  <ul class="list basic_info mt-5">
                    <li>
                      <a href="#"
                        ><i class="lnr lnr-phone-handset"></i> 44 (012) 6954
                        783</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><i class="lnr lnr-envelope"></i> businessplan@donald</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><i class="lnr lnr-home"></i> Santa monica bullevard</a
                      >
                    </li>
                  </ul>
                  <ul class="list personal_social">
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <section>
      <div class="container p-5">
        <h1 class="text-center text-info">
          Project Info
          <hr style="border: 2px solid #742;" />
        </h1>
        <div class="table">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Project ID</th>
                <th scope="col">Task Name</th>
                <th scope="col">Task Short Name</th>
                <!-- <th scope="col">Task Description</th> -->
              </tr>
            </thead>
            <tbody>
                @foreach ($designers as $designer)
              <tr>
                <th scope="row">{{ $designer->member_no}}</th>
                <td>{{ $designer->project_id}}</td>
                <td>{{ $designer->task_name}}</td>
                <td>{{ $designer->task_short_name}}</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="text-info p-3 text-justify">
          <h1 class="text-center">Task Description</h1>
          <hr style="border: 2px solid #742; width: 200px;" />
        <p>{{ $designer->task_description}}</p>
        </div>
   <div class="text-info mb-4"><h1 class="text-center">Update Project Form</h1> <hr style="border: 2px solid #742; width: 200px;" /> <h5 class="text-center">
       <button type="submit" class="btn btn-outline-primary mb-2 rounded-0 px-4" id="see">Seen</button>
          </h5>
     <form method="POST" action="/admin_designer_project_form"  class="form-inline update">
    @csrf
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" placeholder="No" name="member_no">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" placeholder="Projet ID" name="project_id">
  </div>
   <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" placeholder="Task Name" name="task_name">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" placeholder="Task Short Name" name="task_short_name">
  </div>
  <div class="form-group mx-sm-3 mb-2" >
      <input type="text" class="form-control" placeholder="Task Description" style="width:750px" name="task_description">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Update</button>
</form>
</div>
        <div class="text-info p-3 text-justify">
          <h1 class="text-center">Complete Level</h1>
          <hr style="border: 2px solid #742; width: 200px;" />
                    <h5 class="text-center">
            <button onClick="window.location.reload();" class="px-2 py-1">
              Refresh
            </button>
          </h5>
          <p>{{ $designer->task_member_status}}</p>
        </div>
        <div class="text-info p-3 text-justify">
          <h1 class="text-center">
            Command from admin
          </h1>
          <hr style="border: 2px solid #742; width: 200px;" />
          <form method="POST" action="/admin_command_designer">
    @csrf
            <div class="form-group">
              <label for="exampleFormControlTextarea1"
                >Command box to designer</label
              >
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
                name="command"
              ></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">
              Confirm status
            </button>
          </form>

@endforeach
        </div>
      </div>
    </section>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../team/js/jquery-3.3.1.min.js"></script>
    <script src="../team/js/popper.js"></script>
    <script src="../team/js/bootstrap.min.js"></script>
    <script src="../team/js/stellar.js"></script>
    <script src="../team/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="../team/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../team/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="../team/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="../team/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../team/vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="../team/js/jquery.ajaxchimp.min.js"></script>
    <script src="../team/vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="../team/vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="../team/js/mail-script.js"></script>
    <script src="../team/js/theme.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="../admin/vendor/jquery/jquery.min.js"></script>
    <script src="../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../admin/js/demo/datatables-demo.js"></script>
    <script>
$(document).ready(function(){
  $("#see").click(function(){
    $(".update").toggle();
  });
});
</script>
  </body>
</html>
