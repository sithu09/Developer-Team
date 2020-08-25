<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="../teamimg/favicon.png" type="image/png" />
    <title>MeetMe Personal</title>
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
  <body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container box_1620">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"
              ><h2 class="text-white">Netscriper</h2></a
            >
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="about-us.html">Frontend</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="services.html">Backend</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Team-Leader</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="services.html">HR</a>
                </li>
                 <li class="nav-item dropdown">
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

              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
      <div class="container box_1620">
        <div class="banner_inner d-flex align-items-center">
          <div class="banner_content">
            <div class="media">
              <div class="d-flex">
                <img src="../team/img/personal.jpg" alt="" />
              </div>
              <div class="media-body">
                <div class="personal_text">
                  <h3>Donald McKinney</h3>
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
    <!-- <section>
      <div
        class="container p-5"
        style="border: 3px solid #743; margin-top: 50px; border-radius: 20px;"
      >
        <h3 class="py-3">Test Name <span>CB Bank Security Design</span></h3>
        <h3>Test Short Name <span>CBS</span></h3>
        <h3 class="py-3">Test Description<span></span></h3>
        <h3>Project ID <span>ID001</span></h3>
        <h3 class="py-3">Complete Level<span>0.0.1</span></h3>
        <h3>Command<span></span></h3>
      </div>
    </section> -->
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
                @foreach ($users as $user)
              <tr>
                <th scope="row">{{ $user->member_no}}</th>
                <td>{{ $user->project_id}}</td>
                <td>{{ $user->task_name}}</td>
                <td>{{ $user->task_short_name}}</td>
                <!-- <td>
                Web design encompasses many different skills and disciplines in
                the production and maintenance of websites. The different areas
                of web design include web graphic design; interface design;
                authoring, including standardised code and proprietary software
              </td> -->
              </tr>
            </tbody>
          </table>
        </div>
        <div class="text-info p-3 text-justify">
          <h1 class="text-center">Task Description</h1>
          <hr style="border: 2px solid #742; width: 200px;" />
          <p>
            Web design encompasses many different skills and disciplines in the
            production and maintenance of websites. The different areas of web
            design include web graphic design; interface design; authoring,
            including standardised code and proprietary software; user
            experience design; and search engine optimization. Often many
            individuals will work in teams covering different aspects of the
            design process, although some designers will cover them all.[1] The
            term "web design" is normally used to describe the design process
            relating to the front-end (client side) design of a website
            including writing markup. Web design partially overlaps web
            engineering in the broader scope of web development. Web designers
            are expected to have an awareness of usability and if their role
            involves creating markup then they are also expected to be up to
            date with web accessibility guidelines
          </p>
        </div>
        <div class="text-info p-3 text-justify">
          <h1 class="text-center">Complete Level</h1>
          <hr style="border: 2px solid #742; width: 200px;" />
          <form>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"
                >Status box of project</label
              >
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
              ></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">
              Confirm identity
            </button>
          </form>
        </div>
        <div class="text-info p-3 text-justify">
          <h1 class="text-center">
            Command from admin
          </h1>
          <hr style="border: 2px solid #742; width: 200px;" />
          <h5 class="text-center">
            <button onClick="window.location.reload();" class="px-2 py-1">
              Refresh
            </button>
          </h5>
<p>{{ $user->command_admin }}</p>
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
  </body>
</html>
