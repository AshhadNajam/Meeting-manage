<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Data Table</title>

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

    <!-- Styles -->
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
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
    .btn {
    background-color: #b12b2c;
    --bs-btn-hover-border-color: #b12b2c;
    --bs-btn-bg-color: #b12b2c;
    color: white; /* Set text color to white or any other suitable color */
    /* Add other button styles as needed */
}

/* Set the hover color for the button */
.btn:hover {
    background-color: #b12b2cba;
    --bs-btn-hover-border-color: #b12b2cba;
    --bs-btn-bg-color: #b12b2cba;
    color: white; /* Set text color to white or any other suitable color */
    /* Add other button styles for the hover state as needed */
}
    
    .comment{
        color:white;
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

                        <li class="label">Apps</li>
                        <li><a href="User.php"><i class="ti-user"></i> Users </a></li>
                        <li><a href="#"><i class="ti-video-camera"></i> Meetings </a></li>
                        <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>
                        <li><a href="app-email.html"><i class="ti-email"></i> Email</a></li>
                        <li><a href="app-profile.html"><i class="ti-user"></i> Profile</a></li>
                        <li>
                            <a href="Directory.html">
                              <i class="ti-files"></i> Directory</a>
                          </li>
                       <li class="label">Features</li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> UI Elements <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                
                                <li><a href="ui-button.html">Button</a></li>
                                <li><a href="ui-dropdown.html">Dropdown</a></li>
                               
                                <li><a href="ui-list-group.html">List Group</a></li>
                                
                                <li><a href="ui-progressbar.html">Progressbar</a></li>
                                <li><a href="ui-tab.html">Tab</a></li>
                                
                            </ul>
                        </li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="table-basic.html">Basic</a></li>
                               
                                <li><a href="table-export.html">Datatable Export</a></li>
                                <li><a href="table-row-select.html">Datatable Row Select</a></li>
                                <li><a href="table-jsgrid.html">Editable </a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-heart"></i> Icons <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="font-themify.html">Themify</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-map"></i> Maps <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="gmaps.html">Basic</a></li>
                                <li><a href="vector-map.html">Vector Map</a></li>
                            </ul>
                        </li>
                        <li class="label">Form</li>
                        <li><a href="form-basic.html"><i class="ti-view-list-alt"></i> Basic Form </a></li>
                        <li class="label">Extra</li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-files"></i> Invoice <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="invoice.html">Basic</a></li>
                                <li><a href="invoice-editable.html">Editable</a></li>
                            </ul>
                        </li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="page-login.html">Login</a></li>
                                <li><a href="page-register.html">Register</a></li>
                                <li><a href="page-reset-password.html">Forgot password</a></li>
                            </ul>
                        </li>
                        <li><a href="../documentation/index.html"><i class="ti-file"></i> Documentation</a></li>
                        <li><a><i class="ti-close"></i> Logout</a></li>
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
                        <div class="hamburger sidebar-toggle" id="hide-logo-button">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                       <!---- <script>
                            const logoImage = document.getElementById('logo-image');
                            const hideLogoButton = document.getElementById('hide-logo-button');
                            hideLogoButton.addEventListener('click', () => {
                                        logoImage.classList.toggle('hidden');});
                                        </script>-->
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
                                <h2 style="font-weight: bold;">Meetings</h2>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><button type="button"  class="btn btn-md m-b-10 m-l-5" data-bs-toggle="modal" data-bs-target="#myModal">Create new Meeting</button></li>
                                    <!-- Bootstrap Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Create Meeting Form</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form  method="post" enctype="multipart/form-data">
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Meeting Title</label>
                                                            <input type="text" class="form-control"  name="meetingtitle" aria-describedby="name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Owner</label>
                                                            <input type="text" class="form-control"  name="owner" aria-describedby="name">
                                                        </div>
                                            
                                                           <!-- <select name="location" class="form-select">
                                                                <option value="Zoom Meeting">Zoom Meeting</option>
                                                                <option value="With Team">With Team</option>
                                                                <option value="Skype">Skype</option>
                                                            </select>-->
                                                        
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Date</label>
                                                            <input type="date" class="form-control"  name="Date" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Start Time</label>
                                                            <input type="time" class="form-control"  name="starttime" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">End Time</label>
                                                            <input type="time" class="form-control"  name="endtime" aria-describedby="emailHelp">
                                                        </div>
                                                        <button type="submit" class="btn" name="btnint">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
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
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Meeting Title</th>
                                                    <th>Owner</th>
                                                    <th>Date</th>
                                                    <th>Start time</th>
                                                    <th>End time</th>
                                                    <th align="pull-left">Action</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                    $con=mysqli_connect('localhost','root','','boardminder');
                                                    $que="SELECT * from meeting_tb";
                                                    $re=mysqli_query($con,$que);
                                                    $sno=0;
                                                    while ($key = mysqli_fetch_assoc($re)) {
                                                        echo '<tr>
                                                
                                                            <th scope="row">' . $key['id'] . '</th>
                                                           
                                                            <td>' . $key['title'] . '</td>
                                                            <td>' . $key['owner'] . '</td>
                                                            <td>' . $key['start_time'] . '</td>
                                                            
                                                            <td>' . $key['end_time'] . '</td>
                                                            <td><a href="deleteuser.php?n='.$key['title'].'">
                                                            <i class="ti-trash"></i> </a><a href="edituser.php?t='.$key['title'].'&o='.$key['owner'].'&s='.$key['start_time'].'&e='.$key['end_time'].'">
                                                            <i class="ti-pencil-alt"></i>
                                                            </tr>';
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    
                </section>
            </div>
        </div>
    </div>







    
    <!-- jquery vendor -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="js/lib/bootstrap.min.js"></script><script src="js/scripts.js"></script>
    <!-- scripit init-->
    <script src="js/lib/data-table/datatables.min.js"></script>
    <script src="js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="js/lib/data-table/buttons.flash.min.js"></script>
    <script src="js/lib/data-table/jszip.min.js"></script>
    <script src="js/lib/data-table/pdfmake.min.js"></script>
    <script src="js/lib/data-table/vfs_fonts.js"></script>
    <script src="js/lib/data-table/buttons.html5.min.js"></script>
    <script src="js/lib/data-table/buttons.print.min.js"></script>
    <script src="js/lib/data-table/datatables-init.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
<?php
$con=mysqli_connect("localhost","root","","boardminder");
if(isset($_POST['btnint'])){
   
    $que="INSERT INTO meeting_tb(title,owner,date,start_time,end_time) VALUES('".$_POST['meetingtitle']."','".$_POST['Date']."','".$_POST['starttime']."','".$_POST['endtime']."')";
        $data=mysqli_query($con,$que);
     echo "<script>window.location.href='user.php'</script>";
}
?>

</html>

</html>