<?php
include 'define.php';
include 'session.php';
?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>Users Management</title>

        <!-- Editatable  Css-->
        <link rel="stylesheet" href="assets/plugins/magnific-popup/dist/magnific-popup.css"/>
        <link rel="stylesheet" href="assets/plugins/jquery-datatables-editable/datatables.css"/>

        <!-- App CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/core.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/components.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
        <script>

            $(document).ready(function () {
                $('#upid').hide();
                $(".mod").click(function () {
                    //alert($(this).prop("value"));
                    idvalue = $(this).prop("value");
                    $('#upid').val(idvalue);
                });

            });

        </script>
    </head>


    <body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index2.php" class="logo"><span>Admin<span>Console</span></span><i class="zmdi zmdi-layers"></i></a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Page title -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <li>
                            <h4 class="page-title">User Management</h4>
                        </li>
                    </ul>

                    <!-- Right(Notification and Searchbox -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <!-- Notification -->
                            <div class="notification-box">
                                <ul class="list-inline m-b-0">
                                    <li>
                                        <a href="javascript:void(0);" class="right-bar-toggle">
                                            <i class="zmdi zmdi-T`H`E`M`E`L`O`C`K`.`C`O`M`-none"></i>
                                        </a>
                                        <div class="noti-dot">
                                            <span class="dot"></span>
                                            <span class="pulse"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Notification bar -->
                        </li>
                        <li class="hidden-xs">
                            <form role="search" class="app-search">
                                <input type="text" placeholder="Search..."
                                       class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!-- User -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets/images/users/avatar-0.png" alt="user-img" title="Mat Helme"
                             class="img-circle img-thumbnail img-responsive">
                        <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                    </div>
                    <h5><a href="#">Admin</a></h5>
                    <ul class="list-inline">
                        <li>
                            <a href="./login.php" class="text-custom">
                                <i class="zmdi zmdi-sign-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-settings"></i>
                            </a>
                        </li>

                        <li>
                            <a href="./logout.php" class="text-custom">
                                <i class="zmdi zmdi-power"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- End User -->
                <!--- Sidebar -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="text-muted menu-title">Navigation</li>
                        <li>
                            <a href="index.php" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="amministrazione.php" class="waves-effect"><i class="zmdi zmdi zmdi-settings"></i>
                                <span> Amministator - Info </span> </a>
                        </li>
                        <li><!-- class="has_sub">-->
                            <a href="utenti.php" class="waves-effect active"><i class="zmdi zmdi-accounts"></i> <span> Users </span>
                                <!--<span class="menu-arrow"></span>--></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel">
                                <form method="post">
                                    <div class="panel-body">
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="m-b-30">
                                                        <!-----ADD-->
                                                        <button onclick="document.getElementById('id01').style.display='block'"
                                                                name="adduser" id="adduser"
                                                                class="btn btn-primary waves-effect waves-light">Add <i
                                                                    class="fa fa-plus"></i></button>

                                                        <div id="id01" class="w3-modal">
                                                            <div class="w3-modal-content w3-card-4 w3-animate-zoom"
                                                                 style="max-width:600px">
                                                                <p class="logo w3-section w3-padding">Create new
                                                                    User</p>
                                                                <div class="w3-center"><br>
                                                                    <span onclick="document.getElementById('id01').style.display='none'"
                                                                          class="w3-button w3-xlarge w3-hover-red w3-display-topright"
                                                                          title="Close Modal">&times;</span>
                                                                    <img src="assets/images/users/avatar-0.png"
                                                                         alt="Avatar" style="width:30%"
                                                                         class="w3-circle w3-margin-top">
                                                                </div>

                                                                <form class="w3-container" method="post">
                                                                    <div class="w3-section w3-padding">
                                                                        <label><b>Username</b></label>
                                                                        <input class="w3-input w3-border w3-margin-bottom"
                                                                               type="text" placeholder="Enter Username"
                                                                               id="usrname" name="usrname">
                                                                        <label><b>Password</b></label>
                                                                        <input class="w3-input w3-border w3-margin-bottom"
                                                                               type="password"
                                                                               placeholder="Enter Password" id="psw"
                                                                               name="psw">
                                                                        <label><b>Email</b></label>
                                                                        <input class="w3-input w3-border" type="email"
                                                                               placeholder="Enter Email" id="mal"
                                                                               name="mal">
                                                                    </div>
                                                                </form>

                                                                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                                                    <button id="req"
                                                                            onclick="document.getElementById('id01').style.display='none'"
                                                                            type="button" class="w3-button w3-red">
                                                                        Cancel
                                                                    </button>
                                                                    <button name="add" id="req"
                                                                            class="w3-right w3-hide-small w3-button w3-green"
                                                                            type="submit">Confirm
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-----ADD---->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="">
                                            <table class="table table-striped" id="datatable-editable">
                                                <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Email</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <form method="post">

                                                    <?php
                                                    $db = new PDO('sqlite:' . DB_SISTEMA);
                                                    $result = $db->query("SELECT * FROM UTENTI");
                                                    $db = null;
                                                    $count = 0;
                                                    foreach ($result as $row) {
                                                        echo '<tr class="gradeX">';
                                                        echo '<td name="username[]" value="' . $row['ID'] . '">' . $row['Utente'] . '</td>';
                                                        echo '<td name="password[]" value="' . $row['ID'] . '">' . $row['Password'] . '</td>';
                                                        echo '<td name="mail[]" value="' . $row['ID'] . '">' . $row['Mail'] . '</td>';
                                                        echo '<td class="actions">';
                                                        echo '<button onclick="document.getElementById(\'id02\').style.display=\'block\'" class="btn btn-default on-default reme-row pencil mod" type="submit" id="updateuser[]" name="updateuser[]" value="' . $row['ID'] . '"/><i class="fa fa-pencil"></i></button>';
                                                        echo '<button href="#" class="btn btn-default on-default reme-row" type="submit" name="deluser" value="' . $row['ID'] . '"/><i class="fa fa-trash-o"></i></button>';
                                                        echo '</td>';
                                                        echo '</tr>';
                                                    }
                                                    ?>

                                                    <!-----Update-->
                                                    <div id="id02" class="w3-modal">
                                                        <div class="w3-modal-content w3-card-4 w3-animate-zoom"
                                                             style="max-width:600px">

                                                            <p class="logo w3-section w3-padding">Update user</p>

                                                            <div class="w3-center"><br>
                                                                <span onclick="document.getElementById('id02').style.display='none'"
                                                                      class="w3-button w3-xlarge w3-hover-red w3-display-topright"
                                                                      title="Close Modal">&times;</span>
                                                                <img src="assets/images/users/avatar-0.png" alt="Avatar"
                                                                     style="width:30%" class="w3-circle w3-margin-top">
                                                            </div>

                                                            <form class="w3-container" method="post">
                                                                <div class="w3-section w3-padding">
                                                                    <input class="w3-input w3-border w3-margin-bottom"
                                                                           type="text" placeholder="upid" id="upid"
                                                                           name="upid">
                                                                    <label><b>Password</b></label>
                                                                    <input class="w3-input w3-border w3-margin-bottom"
                                                                           type="password" placeholder="Enter Password"
                                                                           id="uppsw" name="uppsw">
                                                                    <label><b>Email</b></label>
                                                                    <input class="w3-input w3-border" type="email"
                                                                           placeholder="Enter Email" id="upmal"
                                                                           name="upmal">
                                                                </div>

                                                                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                                                    <button id="req"
                                                                            onclick="document.getElementById('id02').style.display='none'"
                                                                            type="button" class="w3-button w3-red">
                                                                        Cancel
                                                                    </button>
                                                                    <?php
                                                                    echo '<button name="up" id="req" class="w3-right w3-hide-small w3-button w3-green" value="' . $ID . '" type="submit">Confirm</button>';
                                                                    ?>


                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-----Update---->

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </form><!-- end: panel body -->

                            </div> <!-- end panel -->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->
            </div> <!-- content -->
            <footer class="footer">
                2018 Login project
            </footer>
        </div>

        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

        <!-- Right Sidebar -->
        <div class="side-bar right-bar">
            <a href="javascript:void(0);" class="right-bar-toggle">
                <i class="zmdi zmdi-close-circle-o"></i>
            </a>
            <h4 class="">T`H`E`M`E`L`O`C`K`.`C`O`M`</h4>
            <div class="notification-list nicescroll">
                <ul class="list-group list-no-border user-list">
                    <li class="list-group-item">
                        <a href="#" class="user-list-item">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-2.jpg" alt="">
                            </div>
                            <div class="user-desc">
                                <span class="name">Michael Zenaty</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">2 hours ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="user-list-item">
                            <div class="icon bg-info">
                                <i class="zmdi zmdi-account"></i>
                            </div>
                            <div class="user-desc">
                                <span class="name">New Signup</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">5 hours ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="user-list-item">
                            <div class="icon bg-pink">
                                <i class="zmdi zmdi-comment"></i>
                            </div>
                            <div class="user-desc">
                                <span class="name">New Message received</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">1 day ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item active">
                        <a href="#" class="user-list-item">
                            <div class="avatar">
                                <img src="assets/images/users/avatar-3.jpg" alt="">
                            </div>
                            <div class="user-desc">
                                <span class="name">James Anderson</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">2 days ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="list-group-item active">
                        <a href="#" class="user-list-item">
                            <div class="icon bg-warning">
                                <i class="zmdi zmdi-settings"></i>
                            </div>
                            <div class="user-desc">
                                <span class="name">Settings</span>
                                <span class="desc">There are new settings available</span>
                                <span class="time">1 day ago</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /Right-bar -->
    </div>
    <!-- END wrapper -->
    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!-- Editable js -->
    <script src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
    <script src="assets/plugins/tiny-editable/numeric-input-example.js"></script>
    <!-- init -->
    <script src="assets/pages/datatables.editable.init.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();

        $(document).ready(function () {
            $("#usrname").prop('required', false);
            $("#psw").prop('required', false);
            $("#mal").prop('required', false);
            $("#upusrname").prop('required', false);
            $("#uppsw").prop('required', false);
            $("#upmal").prop('required', false);
        });

        $("#adduser").click(function () {
            $("#usrname").prop('required', true);
            $("#psw").prop('required', true);
            $("#mal").prop('required', true);
            $(".form-control").prop('required', false);
        });

        $(".pencil").click(function () {
            $("#upusrname").prop('required', true);
            $("#uppsw").prop('required', true);
            $("#upmal").prop('required', true);
            $(".form-control").prop('required', false);
        });


        $("#req").click(function () {
            $("#usrname").prop('required', false);
            $("#psw").prop('required', false);
            $("#mal").prop('required', false);
            $("#upusrname").prop('required', false);
            $("#uppsw").prop('required', false);
            $("#upmal").prop('required', false);
            $(".form-control").prop('required', false);
        });


    </script>


    </body>
    </html>


<?php

//elimina utente
if (isset($_POST['deluser'])) {
    $iddel = $_POST['deluser'];
    $db = new PDO('sqlite:' . DB_SISTEMA);
    $db->exec("DELETE FROM UTENTI WHERE ID=$iddel");
    $db = null;
    header('Location:utenti.php');
}

//aggiungi utente
if (isset($_POST['add'])) {
    $user = $_POST['usrname'];
    $password = $_POST['psw'];
    $mail = $_POST['mal'];
    $password = password_hash($password, PASSWORD_BCRYPT);
    $db = new PDO('sqlite:' . DB_SISTEMA);
    $db->exec("INSERT INTO UTENTI (Utente,Password,Mail) VALUES ('$user','$password','$mail')");
    $db = null;
    header('Location:utenti.php');
}

//aggiorna utente
if (isset($_POST['up'])) {
    $idUpdate = $_POST['upid'];
    //$user=$_POST['upusrname'];
    $password = $_POST['uppsw'];
    $mail = $_POST['upmal'];
    $password = password_hash($password, PASSWORD_BCRYPT);
    $db = new PDO('sqlite:' . DB_SISTEMA);
    $db->exec("UPDATE UTENTI SET Password='$password',Mail='$mail' WHERE ID=$idUpdate");
    $db = null;
    header('Location:utenti.php');
}
?>