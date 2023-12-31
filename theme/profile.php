<?php
$con=mysqli_connect("localhost","root","","boardminder");
$name=$_GET['n'];
$email=$_GET['e'];
$contact=$_GET['c'];
$designation=$_GET['d'];
$department=$_GET['de'];
$region=$_GET['r'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin Dashboard</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">   

    <!-- Common -->
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<style>
    .header{
       background-color:#b12b2c;
    }
    .hamburger .line{
        background-color:white;
    }
    .header-icon{
        color:white;
    }
    .sidebar{
        background-color:black;
    }
    .label{
         color:#b12b2c;
    }
    .logo{
        background-color:black;
    }
    .sidebar .nano-content>ul li>a{
        color:white;
        background-color:black;
    }
    .sidebar .nano-content>ul li>a:hover {
      background: linear-gradient(to right, #b12b2c , #b12b2c);
    }
    .sidebar .nano-content>ul>li.active>a, .sidebar .nano-content>ul>li.open>a, .sidebar .nano-content>ul>li>ul {
            background: linear-gradient(to right, #b12b2c , #b12b2c);
    }
    

</style>

<body>
  <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
      <div class="nano-content">
        <div class="logo">
          <a href="index.html">
                        <img id="logo-image" src="images/logo.png" alt="" class="img-fluid" />
          </a>
        </div>
        <ul>
          <li class="label">Main</li>
          <li><a href="index.html"><i class="ti-home"></i> Dashboard </a>
          </li>

          <li class="label">Apps</li>
           <li><a href="User.php"><i class="ti-user"></i> Users </a></li>
           <li><a href="Meeting.php"><i class="ti-video-camera"></i> Meetings </a></li>
               
          <li>
            <a href="app-event-calender.html">
              <i class="ti-calendar"></i> Calender </a>
          </li>
          <li>
            <a href="app-email.html">
              <i class="ti-email"></i> Email</a>
          </li>
          <li>
            <a href="app-profile.html">
              <i class="ti-user"></i> Profile</a>
          </li>
          <li>
            <a href="Directory.htm">
              <i class="ti-user"></i> Directory</a>
          </li>
          <li class="label">Features</li>
          <li>
            <a class="sidebar-sub-toggle">
              <i class="ti-layout"></i> UI Elements
              <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
              <li>
                <a href="ui-typography.html">Typography</a>
              </li>
              <li>
                <a href="ui-alerts.html">Alerts</a>
              </li>

              <li>
                <a href="ui-button.html">Button</a>
              </li>
              <li>
                <a href="ui-dropdown.html">Dropdown</a>
              </li>

              <li>
                <a href="ui-list-group.html">List Group</a>
              </li>

              <li>
                <a href="ui-progressbar.html">Progressbar</a>
              </li>
              <li>
                <a href="ui-tab.html">Tab</a>
              </li>

            </ul>
          </li>
          <li>
            <a class="sidebar-sub-toggle">
              <i class="ti-layout-grid4-alt"></i> Table
              <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
              <li>
                <a href="table-basic.html">Basic</a>
              </li>

              <li>
                <a href="table-export.html">Datatable Export</a>
              </li>
              <li>
                <a href="table-row-select.html">Datatable Row Select</a>
              </li>
              <li>
                <a href="table-jsgrid.html">Editable </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="sidebar-sub-toggle">
              <i class="ti-heart"></i> Icons
              <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
              <li>
                <a href="font-themify.html">Themify</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="sidebar-sub-toggle">
              <i class="ti-map"></i> Maps
              <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
              <li>
                <a href="gmaps.html">Basic</a>
              </li>
              <li>
                <a href="vector-map.html">Vector Map</a>
              </li>
            </ul>
          </li>
          <li class="label">Form</li>
          <li>
            <a href="form-basic.html">
              <i class="ti-view-list-alt"></i> Basic Form </a>
          </li>
          <li class="label">Extra</li>
          <li>
            <a class="sidebar-sub-toggle">
              <i class="ti-files"></i> Invoice
              <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
              <li>
                <a href="invoice.html">Basic</a>
              </li>
              <li>
                <a href="invoice-editable.html">Editable</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="sidebar-sub-toggle">
              <i class="ti-target"></i> Pages
              <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
              <li>
                <a href="page-login.html">Login</a>
              </li>
              <li>
                <a href="page-register.html">Register</a>
              </li>
              <li>
                <a href="page-reset-password.html">Forgot password</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="../documentation/index.html">
              <i class="ti-file"></i> Documentation</a>
          </li>
          <li>
            <a>
              <i class="ti-close"></i> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /# sidebar -->


  <div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="float-left">
            <div class="hamburger sidebar-toggle">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
          </div>
          <div class="float-right">
            <div class="dropdown dib">
              <div class="header-icon" data-toggle="dropdown">
                <i class="ti-bell"></i>
                <div class="drop-down dropdown-menu dropdown-menu-right">
                  <div class="dropdown-content-heading">
                    <span class="text-left">Recent Notifications</span>
                  </div>
                  <div class="dropdown-content-body">
                    <ul>
                      <li>
                        <a href="#">
                          <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="" />
                          <div class="notification-content">
                            <small class="notification-timestamp pull-right">02:34 PM</small>
                            <div class="notification-heading">Mr. John</div>
                            <div class="notification-text">5 members joined today </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="" />
                          <div class="notification-content">
                            <small class="notification-timestamp pull-right">02:34 PM</small>
                            <div class="notification-heading">Mariam</div>
                            <div class="notification-text">likes a photo of you</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="" />
                          <div class="notification-content">
                            <small class="notification-timestamp pull-right">02:34 PM</small>
                            <div class="notification-heading">Tasnim</div>
                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="" />
                          <div class="notification-content">
                            <small class="notification-timestamp pull-right">02:34 PM</small>
                            <div class="notification-heading">Mr. John</div>
                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                          </div>
                        </a>
                      </li>
                      <li class="text-center">
                        <a href="#" class="more-link">See All</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="dropdown dib">
              <div class="header-icon" data-toggle="dropdown">
                <i class="ti-email"></i>
                <div class="drop-down dropdown-menu dropdown-menu-right">
                  <div class="dropdown-content-heading">
                    <span class="text-left">2 New Messages</span>
                    <a href="email.html">
                      <i class="ti-pencil-alt pull-right"></i>
                    </a>
                  </div>
                  <div class="dropdown-content-body">
                    <ul>
                      <li class="notification-unread">
                        <a href="#">
                          <img class="pull-left m-r-10 avatar-img" src="images/avatar/1.jpg" alt="" />
                          <div class="notification-content">
                            <small class="notification-timestamp pull-right">02:34 PM</small>
                            <div class="notification-heading">Michael Qin</div>
                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                          </div>
                        </a>
                      </li>
                      <li class="notification-unread">
                        <a href="#">
                          <img class="pull-left m-r-10 avatar-img" src="images/avatar/2.jpg" alt="" />
                          <div class="notification-content">
                            <small class="notification-timestamp pull-right">02:34 PM</small>
                            <div class="notification-heading">Mr. John</div>
                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="" />
                          <div class="notification-content">
                            <small class="notification-timestamp pull-right">02:34 PM</small>
                            <div class="notification-heading">Michael Qin</div>
                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img class="pull-left m-r-10 avatar-img" src="images/avatar/2.jpg" alt="" />
                          <div class="notification-content">
                            <small class="notification-timestamp pull-right">02:34 PM</small>
                            <div class="notification-heading">Mr. John</div>
                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                          </div>
                        </a>
                      </li>
                      <li class="text-center">
                        <a href="#" class="more-link">See All</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="dropdown dib">
              <div class="header-icon" data-toggle="dropdown">
                <span class="user-avatar">John
                  <i class="ti-angle-down f-s-10"></i>
                </span>
                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                  <div class="dropdown-content-heading">
                    <span class="text-left">Upgrade Now</span>
                    <p class="trial-day">30 Days Trail</p>
                  </div>
                  <div class="dropdown-content-body">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="ti-user"></i>
                          <span>Profile</span>
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="ti-email"></i>
                          <span>Inbox</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="ti-settings"></i>
                          <span>Setting</span>
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="ti-lock"></i>
                          <span>Lock Screen</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="ti-power-off"></i>
                          <span>Logout</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h2>Profile</h2>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Profile</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="user-profile">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="user-photo m-b-15">
                          <img class="img-fluid" src="images/download.png" alt="" />
                        </div>
                        <div class="col-lg-20">
                        <div class="user-profile-name"><?php echo "$name"?></div>
                        <div class="user-job-title"><?php echo "$designation"?></div>
                        <div class="custom-tab user-profile-tab">
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                              <a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="1">
                              <div class="contact-information">
                                <h4>Contact information</h4>
                                <div class="phone-content">
                                  <span class="contact-title">Name:</span>
                                  <span class="phone-number"><?php echo "$name"?></span>
                                </div>
                                <div class="address-content">
                                  <span class="contact-title">Email:</span>
                                  <span class="mail-address"><?php echo "$email"?></span>
                                </div>
                                <div class="email-content">
                                  <span class="contact-title">Contact:</span>
                                  <span class="contact-email"><?php echo "$contact"?></span>
                                </div>
                              </div>
                              <div class="basic-information">
                                <h4>Basic information</h4>
                                <div class="birthday-content">
                                  <span class="contact-title">Designation:</span>
                                  <span class="birth-date"><?php echo "$designation"?> </span>
                                </div>
                                <div class="gender-content">
                                  <span class="contact-title">Department:</span>
                                  <span class="gender"><?php echo "$department"?></span>
                                </div>
                                 <div class="region">
                                  <span class="contact-title">Region:</span>
                                  <span class="gender"><?php echo "$region"?></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>







    <!-- Common -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>