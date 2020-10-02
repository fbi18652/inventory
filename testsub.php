<?php
    include('connection/phpconnect.php');
    session_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/true2.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <i class="fas fa-chart-bar"></i>Home</a>
                            </li>
                            <li>
                                <a href="form_wr.php">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>WR Page</a>
                            </li>
                            <li>
                                <a href="form_mat.php">
                                    <i class="fas fa-barcode"></i>
                                    <span class="bot-line"></span>Add new MAT</a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Pages</a>
                                <ul class="header3-sub-list list-unstyled">
                                    
                                    <li>
                                        <a href="login.php">Login</a>
                                    </li>
                                    
                                    <li>
                                        <a href="action/logout.php">Logout</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="forget-pass.html">Forget Password</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">

                        <div class="dropdown account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">john doe</a>
                                </div>
                            <a href="#" id="menu" data-toggle="dropdown" class="droptown-toggle btn btn-primary">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item dropdown-submenu">
                                    <a href="#" data-toggle="dropdown">Submenu-1</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item">
                                            <a href="#">Item-1</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#">Item-2</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#">Item-3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-item dropdown-submenu">
                                    <a href="#" data-toggle="dropdown">Submenu-2</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item">
                                            <a href="#">Item-1</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#">Item-2</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#">Item-3</a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </div>
                        
                        <!--form  method="request" class="form-header" action="search.php">
                                <input id="search" class="au-input au-input" type="text" name="search" placeholder="กดปุ่มเพื่อแสดงข้อมูลการเบิก-คืนทั้งหมด หรือกรอกเพื่อค้นหา" size="control"/>
                                <button class="au-btn--submit" type="submit" name="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">john doe</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">john doe</a>
                                            </h5>
                                            <span class="email">johndoe@example.com</span>
                                        </div>
                                    </div>
                    
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="account.php">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                    </div>
                                    
                                    <div class="account-dropdown__footer">
                                        <a href='login.php'>
                                            <i class="zmdi zmdi-power"></i>Login</a>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href='action/logout.php'>
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="images/icon/true2.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>Home</a>
                        </li>
                        <li>
                            <a href="form_wr.php">
                                <i class="fas fa-shopping-basket"></i>
                                <span class="bot-line"></span>WR Page</a>
                        </li>
                        <li>
                            <a href="form_mat.php">
                                <i class="fas fa-barcode"></i>
                                <span class="bot-line"></span>Add new MAT</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                              
                                    <li>
                                        <a href="login.php">Login</a>
                                    </li> 
                                    <li>
                                        <a href="action/logout.php">Logout</a>
                                    </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <form  method="request" class="form-header" action="search.php">
                        <input id="search" class="au-input au-input" type="text" name="search" placeholder="กดปุ่มเพื่อแสดงข้อมูลการเบิก-คืนทั้งหมด หรือกรอกเพื่อค้นหา" size="control"/>
                        <button class="au-btn--submit" type="submit" name="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <!--div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">john doe</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">john doe</a>
                                    </h5>
                                    <span class="email">johndoe@example.com</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="account.php">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="form_mat.php">
                                        <i class="zmdi zmdi-plus-circle"></i>Add new MAT</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href='login.php'>
                                    <i class="zmdi zmdi-power"></i>Login</a>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href='action/logout.php'>
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span>John!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">
                                <?php
								$sql="SELECT COUNT(`withdraw_return`.`action`) AS `action` FROM `withdraw_return` WHERE month(`date`) = month(now())";
								$result=$db->query($sql);
								while($row=$result->fetch_object())
								{
								?>
								<option value="<?php echo $row->action;?>">
								<?php echo $row->action;?>
								</option>
								<?php
								}
								?>
                                </h2>
                                <span class="desc">All Action this month</span>
                                <div class="icon">
                                    <i class="fa fa-shopping-basket"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">
                                <?php
								$sql="SELECT COUNT(`withdraw_return`.`action`) AS `action` FROM `withdraw_return` WHERE date(`date`) = date(now())";
								$result=$db->query($sql);
								while($row=$result->fetch_object())
								{
								?>
								<option value="<?php echo $row->action;?>">
								<?php echo $row->action;?>
								</option>
								<?php
								}
								?>
                                </h2>
                                <span class="desc">All Action today</span>
                                <div class="icon">
                                    <i class="fa fa-barcode"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">
                                <?php
								$sql="SELECT COUNT(`withdraw_return`.`action`) AS `action` FROM `withdraw_return` WHERE `action` = 'withdraw' AND date(`date`) = date(now())";
								$result=$db->query($sql);
								while($row=$result->fetch_object())
								{
								?>
								<option value="<?php echo $row->action;?>">
								<?php echo $row->action;?>
								</option>
								<?php
								}
								?>
                                </h2>
                                <span class="desc">All Withdraw today</span>
                                <div class="icon">
                                    <i class="fa fa-barcode"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">
                                <?php
								$sql="SELECT COUNT(`withdraw_return`.`action`) AS `action` FROM `withdraw_return` WHERE `action` = 'return' AND date(`date`) = date(now())";
								$result=$db->query($sql);
								while($row=$result->fetch_object())
								{
								?>
								<option value="<?php echo $row->action;?>">
								<?php echo $row->action;?>
								</option>
								<?php
								}
								?>
                                </h2>
                                <span class="desc">All Return today</span>
                                <div class="icon">
                                    <i class="fa fa-barcode"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                            <p>Copyright © 2020</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
