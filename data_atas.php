<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <title>Kelas Belajar Pemrograman Web Dasar </title>
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
            <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
            <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
            <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
            <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
            <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
            <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
            <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
            <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
                <meta http-equiv="refresh" content="40; url=lockscreen.php" />
    </head>
        <body class="skin-blue">
            <?php include"session.php";?>
        <header class="header">
                <a href="index.php" class="logo">MPRASTIKOA</a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You Have 4 Messages</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                Komang Jepri Kusuma Jaya
                                                    <small><i class="fa fa-clock-o"></i> 9 mins</small>
                                                </h4>
                                                <p>Bagaimana perkembangan belajar di kelas?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                Ni Kadek Diah Purwaningrum
                                                    <small><i class="fa fa-clock-o"></i> 3 hours</small>
                                                </h4>
                                                <p>Selamat ya Marcel </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                Putu Zasya Eka Satya Nugraha
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Strategi belajar diterapkan? </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                Putu Evi Susita Dewi
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Besok kita ada meeting jam 9</p>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $_SESSION['username'];?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header bg-light-blue">
                                    <img src="img/<?php echo $_SESSION['foto'];?>" class="img-circle" alt="User Image" />
                                    <p>
                                     <?php echo $_SESSION['username'];?> - Web Developer
                                        <small>Marcel Prastiko Arthana / 2020</small>
                                    </p>
                                </li>
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">      
                                </div>
                            </li>
                        <li class="user-footer">
                    <div class="pull-right">
                <a href="logout.php" class="btn btn-default btn-flat">Keluar</a>
                        </div>
                    </li>
                 </ul>
                </li>
             </ul>
        </div>
    </nav>
</header>