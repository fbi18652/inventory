<?php
    include('connection/phpconnect.php');
    session_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    //$action = $_REQUEST['action'];
    if (isset($_REQUEST['action'])) {
        $action = $_REQUEST['action'];
    } else {
    $action = 'all';
    }
    $day = date("Y-m-d");
    $month = date("Y-m");
    $search = (isset($_GET['search'])) ? $_GET['search'] : '';
    $perpage = 10;
    if (isset($_GET['page'])) {
    $page = $_GET['page'];
    } else {
    $page = 1;
    }
    $start = ($page - 1) * $perpage;
    if($action=='today'){
        $sqls = "SELECT *
        FROM process_log
        WHERE  ((`date` LIKE '%$day%') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$day%') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`amount` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE '%$search%')) ORDER BY date asc limit {$start} , {$perpage};";
        $results = mysqli_query($db, $sqls);
        $sqle = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$day%') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$day%') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`amount` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE '%$search%')) ORDER BY date asc;";
        $resulte = mysqli_query($db, $sqle); 
    }
    else if($action=='todayd'){
        $sqls = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$day%') and (`action` LIKE 'deposited') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'deposited') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'deposited') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'deposited') and (`amount` LIKE '%$search%')) ORDER BY date asc limit {$start} , {$perpage};";
        $results = mysqli_query($db, $sqls);
        $sqle = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$day%') and (`action` LIKE 'deposited') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'deposited') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'deposited') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'deposited') and (`amount` LIKE '%$search%')) ORDER BY date asc;";
        $resulte = mysqli_query($db, $sqle); 
    }
    else if($action=='todayw'){
        $sqls = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$day%') and (`action` LIKE 'withdraw') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'withdraw') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'withdraw') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'withdraw') and (`amount` LIKE '%$search%')) ORDER BY date asc limit {$start} , {$perpage};";
        $results = mysqli_query($db, $sqls);
        $sqle = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$day%') and (`action` LIKE 'withdraw') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'withdraw') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'withdraw') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'withdraw') and (`amount` LIKE '%$search%')) ORDER BY date asc;";
        $resulte = mysqli_query($db, $sqle); 
    }
    else if($action=='todayr'){
        $sqls = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$day%') and (`action` LIKE 'return') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'return') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'return') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'return') and (`amount` LIKE '%$search%')) ORDER BY date asc limit {$start} , {$perpage};";
        $results = mysqli_query($db, $sqls);
        $sqle = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$day%') and (`action` LIKE 'return') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'return') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'return') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$day%') and (`action` LIKE 'return') and (`amount` LIKE '%$search%')) ORDER BY date asc;";
        $resulte = mysqli_query($db, $sqle); 
    }
    else if($action=='thismonth'){
        $sqls = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$month%') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$month%') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`amount` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE '%$search%')) ORDER BY date asc limit {$start} , {$perpage};";
        $results = mysqli_query($db, $sqls);
        $sqle = "SELECT *
        FROM process_log
        WHERE  ((`date` LIKE '%$month%') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$month%') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`amount` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE '%$search%')) ORDER BY date asc;";
        $resulte = mysqli_query($db, $sqle); 
    }
    else if($action=='thismonthd'){
        $sqls = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$month%') and (`action` LIKE 'deposited') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'deposited') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'deposited') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'deposited') and (`amount` LIKE '%$search%')) ORDER BY date asc limit {$start} , {$perpage};";
        $results = mysqli_query($db, $sqls);
        $sqle = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$month%') and (`action` LIKE 'deposited') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'deposited') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'deposited') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'deposited') and (`amount` LIKE '%$search%')) ORDER BY date;";
        $resulte = mysqli_query($db, $sqle); 
    }
    else if($action=='thismonthw'){
        $sqls = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$month%') and (`action` LIKE 'withdraw') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'withdraw') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'withdraw') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'withdraw') and (`amount` LIKE '%$search%')) ORDER BY date asc limit {$start} , {$perpage};";
        $results = mysqli_query($db, $sqls);
        $sqle = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$month%') and (`action` LIKE 'withdraw') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'withdraw') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'withdraw') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'withdraw') and (`amount` LIKE '%$search%')) ORDER BY date asc;";
        $resulte = mysqli_query($db, $sqle); 
    }
    else if($action=='thismonthr'){
        $sqls = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$month%') and (`action` LIKE 'return') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'return') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'return') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'return') and (`amount` LIKE '%$search%'))ORDER BY date asc limit {$start} , {$perpage};";
        $results = mysqli_query($db, $sqls);
        $sqle = "SELECT *
        FROM process_log
        WHERE ((`date` LIKE '%$month%') and (`action` LIKE 'return') and (`no` LIKE '%$search%'))
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'return') and (`id_emp` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'return') and (`id_mat` LIKE '%$search%')) 
        OR ((`date` LIKE '%$month%') and (`action` LIKE 'return') and (`amount` LIKE '%$search%'))ORDER BY date asc;";
        $resulte = mysqli_query($db, $sqle); 
    }
    else if($action=='all'){
        $sqls = "SELECT *
        FROM process_log
        WHERE (`date` LIKE '%$search%')
        OR (`id_mat` LIKE '%$search%') 
        OR (`no` LIKE '%$search%')
        OR (`id_emp` LIKE '%$search%') 
        OR (`action` LIKE '%$search%') 
        OR (`amount` LIKE '%$search%') ORDER BY date asc limit {$start} , {$perpage};";
        $results = mysqli_query($db, $sqls);
        $sqle = "SELECT *
        FROM process_log
        WHERE (`date` LIKE '%$search%')
        OR (`id_mat` LIKE '%$search%') 
        OR (`no` LIKE '%$search%')
        OR (`id_emp` LIKE '%$search%') 
        OR (`action` LIKE '%$search%') 
        OR (`amount` LIKE '%$search%') ORDER BY date asc;";
        $resulte = mysqli_query($db, $sqle);
    }
	
    $e = 1;
    if (isset($_POST["export"])) {
        $filename = "process_$action.xls";
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        $isPrintHeader = false;
        if (! empty($resulte)) {
            foreach ($resulte as $rows) {
                if (! $isPrintHeader) {
                    echo "Number","\t";
                    echo implode("\t",array_keys($rows)) . "\n";
                    $isPrintHeader = true;
                }
                echo $e,"\t"; $e++;
                echo implode("\t", array_values($rows)) . "\n";
            }
        }
        exit();    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Co-Op Project">
    <meta name="author" content="Pakorn Tawonsan">
    <meta name="keywords" content="Co-Op Project">

    <!-- Title Page-->
    <title>Dashboard</title>
    <link rel="icon" href="images/icon/true2.png" type="image/icon type">

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
    <link href="css/paginator.css" rel="stylesheet" media="all">

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
                                    <i class="fas fa-chart-pie"></i>
                                    </span>Home</a>
                            </li>
                            <li>
                                <a href="form_show_location.php">
                                    <i class="fas fa-warehouse"></i>
                                    <span class="bot-line"></span>Location Good</a>
                            </li>
                            <li>
                                <a href="form_show_location_fail.php">
                                    <i class="fas fa-wrench"></i>
                                    <span class="bot-line"></span>Location Fail</a>
                            </li>
                            <?php
                                if($_SESSION['username'] == !""){
                            ?>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Manage</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="form_show_mat.php">
                                            <i class="fas fa-barcode"></i>Material</a>
                                    </li>
                                    <li>
                                        <a href="form_show_mattype.php">
                                            <i class="fas fa-barcode"></i>Material Type</a>
                                    </li>
                                    <li>
                                        <a href="form_show_emp.php">
                                            <i class="fas fa-user"></i>Employee</a>
                                    </li>
                                    <li>
                                        <a href="form_show_position.php">
                                            <i class="fas fa-user"></i>Position</a>
                                    </li>
                                    <li>
                                        <a href="form_show_department.php">
                                            <i class="fas fa-user"></i>Departmet</a>
                                    </li>
                                    <li>
                                        <a href="form_show_plant.php">
                                            <i class="fas fa-warehouse"></i>Plant</a>
                                    </li>
                                    <li>
                                        <a href="form_show_store.php">
                                            <i class="fas fa-warehouse"></i>Store</a>
                                    </li>
                                    <li>
                                        <a href="form_show_shelf.php">
                                            <i class="fas fa-warehouse"></i>Shelf</a>
                                    </li>
                                    <li>
                                        <a href="form_show_users.php">
                                            <i class="fas fa-user"></i>Users</a>
                                    </li>
                                </ul>
                            </li>
                            <?php
                                }
                            ?>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="content">
                                    <?php
                                    if($_SESSION['username'] == ""){
                                    ?>
                                        <a href='login.php'>
                                            <i class="js-acc-btn"></i>Login</a>    
                                    <?php
                                        }
                                    ?>
                                    <?php
                                    if($_SESSION['username'] == !""){
                                    ?>
                                        <a class="js-acc-btn" href="#"><?php echo $_SESSION['username'] ?></a>        
                                    <?php
                                        }
                                    ?>
                                    
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <?php
                                        if($_SESSION['username'] == !""){
                                    ?>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="account.php">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                    <div class="account-dropdown__footer">
                                        <?php
                                            if($_SESSION['username'] == ""){
                                        ?>
                                            <a href='login.php'>
                                                <i class="zmdi zmdi-power"></i>Login</a>
                                        <?php
                                            }
                                        ?>
                                        <?php
                                            if($_SESSION['username'] == !""){
                                        ?>
                                            <a href='action/logout.php'>
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        <?php
                                            }
                                        ?>
                                        <a href="forget-pass.html">
                                            <i class="zmdi zmdi-key"></i>Forget Password</a>
                                    </div>
                                </div>
                            </div>
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
                                <i class="fas fa-chart-pie"></i>Home</a>
                        </li>
                        <li>
                            <a href="form_show_location.php">
                                <i class="fas fa-warehouse"></i>
                                <span class="bot-line"></span>Location Good</a>
                        </li>
                        <li>
                            <a href="form_show_location_fail.php">
                                <i class="fas fa-wrench"></i>
                                <span class="bot-line"></span>Location Fail</a>
                        </li>
                        <?php
                                    if($_SESSION['username'] == !""){
                                ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Manage</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="form_show_mat.php">
                                        <i class="fas fa-barcode"></i>Material</a>
                                </li>
                                <li>
                                    <a href="form_show_mattype.php">
                                        <i class="fas fa-barcode"></i>Material Type</a>
                                </li>
                                <li>
                                    <a href="form_show_emp.php">
                                        <i class="fas fa-user"></i>Employee</a>
                                </li>
                                <li>
                                    <a href="form_show_position.php">
                                        <i class="fas fa-user"></i>Position</a>
                                </li>
                                <li>
                                    <a href="form_show_department.php">
                                        <i class="fas fa-user"></i>Department</a>
                                </li>
                                <li>
                                    <a href="form_show_plant.php">
                                        <i class="fas fa-warehouse"></i>Plant</a>
                                </li>
                                <li>
                                    <a href="form_show_store.php">
                                        <i class="fas fa-warehouse"></i>Store</a>
                                </li>
                                <li>
                                    <a href="form_show_shelf.php">
                                        <i class="fas fa-warehouse"></i>Shelf</a>
                                </li>
                                <li>
                                    <a href="form_show_users.php">
                                        <i class="fas fa-user"></i>Users</a>
                                </li>
                            </ul>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="content">
                            <?php
                            if($_SESSION['username'] == ""){
                            ?>
                                <a href='login.php'>
                                    <i class="js-acc-btn"></i>Login</a>    
                            <?php
                                }
                            ?>
                            <?php
                            if($_SESSION['username'] == !""){
                            ?>
                                <a class="js-acc-btn" href="#"><?php echo $_SESSION['username'] ?></a>        
                            <?php
                                }
                            ?>
                            
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <?php
                                if($_SESSION['username'] == !""){
                            ?>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="account.php">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                            <div class="account-dropdown__footer">
                                <?php
                                    if($_SESSION['username'] == ""){
                                ?>
                                    <a href='login.php'>
                                        <i class="zmdi zmdi-power"></i>Login</a>
                                <?php
                                    }
                                ?>
                                <?php
                                    if($_SESSION['username'] == !""){
                                ?>
                                    <a href='action/logout.php'>
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                <?php
                                    }
                                ?>
                                <a href="forget-pass.html">
                                    <i class="zmdi zmdi-key"></i>Forget Password</a>
                            </div>
                        </div>
                    </div>
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
                                        <li class="list-inline-item"><?php echo $action; ?></li>
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
                        <div class="overview-wrap">
                            <h1 class="title-4">Inventory Movement</h1>
                            <form action="index.php" method="request">
                                <button type="submit" name="action" id="allsearch" value="all" class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-search"></i>ALl Process</button>
                            </form>
                        </div>
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
                        
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c1">
                            <form  method="request" class="form-header" action="index.php">
                            <button type="submit"><input type="hidden" name="action" value="today" />
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="fa fa-exchange-alt"></i>
                                        </div>
                                        <div class="text">
                                            <h2>
                                                <?php
                                                $sql="SELECT SUM(`process_log`.`amount`) AS `amount` FROM `process_log` WHERE date(`date`) = date(now())";
                                                $result=$db->query($sql);
                                                while($row=$result->fetch_object())
                                                {
                                                ?>
                                                <option value="<?php echo $row->amount;?>">
                                                <?php echo $row->amount;?>
                                                </option>
                                                <?php
                                                }
                                                ?>
                                            </h2>
                                            <span>Action today</span>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            </form>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c2">
                            <form  method="request" class="form-header" action="index.php">
                            <button type="submit"><input type="hidden" name="action" value="todayd" />
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="fa fa-box"></i>
                                        </div>
                                        <div class="text">
                                            <h2>
                                                <?php
                                                $sql="SELECT SUM(`process_log`.`amount`) AS `amount` FROM `process_log` WHERE `action` = 'deposited' AND date(`date`) = date(now())";
                                                $result=$db->query($sql);
                                                while($row=$result->fetch_object())
                                                {
                                                ?>
                                                <option value="<?php echo $row->amount;?>">
                                                <?php echo $row->amount;?>
                                                </option>
                                                <?php
                                                }
                                                ?>
                                            </h2>
                                            <span>Deposited today</span>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            </form>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c3">
                            <form  method="request" class="form-header" action="index.php">
                            <button type="submit"><input type="hidden" name="action" value="todayw" />
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="fa fa-box"></i>
                                        </div>
                                        <div class="text">
                                            <h2>
                                                <?php
                                                $sql="SELECT SUM(`process_log`.`amount`) AS `amount` FROM `process_log` WHERE `action` = 'withdraw' AND date(`date`) = date(now())";
                                                $result=$db->query($sql);
                                                while($row=$result->fetch_object())
                                                {
                                                ?>
                                                <option value="<?php echo $row->amount;?>">
                                                <?php echo $row->amount;?>
                                                </option>
                                                <?php
                                                }
                                                ?>
                                            </h2>
                                            <span>Withdraw today</span>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            </form>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c4">
                            <form  method="request" class="form-header" action="index.php">
                            <button type="submit"><input type="hidden" name="action" value="todayr" />
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="fa fa-pallet"></i>
                                        </div>
                                        <div class="text">
                                            <h2>
                                                <?php
                                                $sql="SELECT SUM(`process_log`.`amount`) AS `amount` FROM `process_log` WHERE `action` = 'return' AND date(`date`) = date(now())";
                                                $result=$db->query($sql);
                                                while($row=$result->fetch_object())
                                                {
                                                ?>
                                                <option value="<?php echo $row->amount;?>">
                                                <?php echo $row->amount;?>
                                                </option>
                                                <?php
                                                }
                                                ?>
                                            </h2>
                                            <span>Return today</span>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            </form>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c1">
                            <form  method="request" class="form-header" action="index.php">
                            <button type="submit"><input type="hidden" name="action" value="thismonth" />
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="fa fa-exchange-alt"></i>
                                        </div>
                                        <div class="text">
                                            <h2>
                                                <?php
                                                $sql="SELECT SUM(`process_log`.`amount`) AS `amount` FROM `process_log` WHERE month(`date`) = month(now())";
                                                $result=$db->query($sql);
                                                while($row=$result->fetch_object())
                                                {
                                                ?>
                                                <option value="<?php echo $row->amount;?>">
                                                <?php echo $row->amount;?>
                                                </option>
                                                <?php
                                                }
                                                ?>
                                            </h2>
                                            <span>Action this month</span>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            </form>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c2">
                            <form  method="request" class="form-header" action="index.php">
                            <button type="submit"><input type="hidden" name="action" value="thismonthd" />
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="fa fa-box"></i>
                                        </div>
                                        <div class="text">
                                            <h2>
                                                <?php
                                                $sql="SELECT sum(`process_log`.`amount`) AS `amount` FROM `process_log` WHERE `action` = 'deposited' AND month(`date`) = month(now())";
                                                $result=$db->query($sql);
                                                while($row=$result->fetch_object())
                                                {
                                                ?>
                                                <option value="<?php echo $row->amount;?>">
                                                <?php echo $row->amount;?>
                                                </option>
                                                <?php
                                                }
                                                ?>
                                            </h2>
                                            <span>Deposited thismonth</span>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            </form>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c3">
                            <form  method="request" class="form-header" action="index.php">
                            <button type="submit"><input type="hidden" name="action" value="thismonthw" />
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="fa fa-box"></i>
                                        </div>
                                        <div class="text">
                                            <h2>
                                                <?php
                                                $sql="SELECT SUM(`process_log`.`amount`) AS `amount` FROM `process_log` WHERE `action` = 'withdraw' AND month(`date`) = month(now())";
                                                $result=$db->query($sql);
                                                while($row=$result->fetch_object())
                                                {
                                                ?>
                                                <option value="<?php echo $row->amount;?>">
                                                <?php echo $row->amount;?>
                                                </option>
                                                <?php
                                                }
                                                ?>
                                            </h2>
                                            <span>Withdraw this month</span>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            </form>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c4">
                            <form  method="request" class="form-header" action="index.php">
                            <button type="submit"><input type="hidden" name="action" value="thismonthr" />
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="fa fa-pallet"></i>
                                        </div>
                                        <div class="text">
                                            <h2>
                                                <?php
                                                $sql="SELECT SUM(`process_log`.`amount`) AS `amount` FROM `process_log` WHERE `action` = 'return' AND month(`date`) = month(now())";
                                                $result=$db->query($sql);
                                                while($row=$result->fetch_object())
                                                {
                                                ?>
                                                <option value="<?php echo $row->amount;?>">
                                                <?php echo $row->amount;?>
                                                </option>
                                                <?php
                                                }
                                                ?>
                                            </h2>
                                            <span>Return this month</span>
                                        </div>
                                    </div>
                                </div>
                            </button>
                            </form>
                            </div>
                        </div>
                    </div>
                    <hr class="line-seprate">
                </div>
            </section>
            <!-- END STATISTIC-->
            <!--แสดงข้อมูล-->
            <section class="p-t-20 p-b-20">
                <div class="container">
                    <?php
                    {
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col">
                                    <div class="overview-wrap">
                                        <div class="overview-wrap">
                                            <?php
                                            if(isset($_GET['search']))
                                            {
                                            ?>
                                                <font color="blue"><?php echo ($search); ?></font>
                                            <?php
                                            }
                                            ?>
                                            &nbsp;
                                            พบผลลัพธ์
                                            &nbsp;
                                            <b>
                                            <?php
                                            if($action=='today'){
                                                $count="SELECT COUNT(`no`) as `no` FROM `process_log`
                                                WHERE ((`date` LIKE '%$day%') AND (`action` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$day%') AND (`id_mat` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$day%') AND (`no` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$day%') AND (`id_emp` LIKE '%$search%')) 
                                                OR ((`date` LIKE '%$day%') AND (`amount` LIKE '%$search%'));";
                                            }
                                            else if($action=='todayd'){
                                                $count="SELECT COUNT(`no`) as `no` FROM `process_log`
                                                WHERE ((`date` LIKE '%$day%') AND (`action` LIKE 'deposited') AND (`id_mat` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$day%') AND (`action` LIKE 'deposited') AND (`no` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$day%') AND (`action` LIKE 'deposited') AND (`id_emp` LIKE '%$search%')) 
                                                OR ((`date` LIKE '%$day%') AND (`action` LIKE 'deposited') AND (`amount` LIKE '%$search%'));";
                                            }
                                            else if($action=='todayw'){
                                                $count="SELECT COUNT(`no`) as `no` FROM `process_log`
                                                WHERE ((`date` LIKE '%$day%') AND (`action` LIKE 'withdraw') AND (`id_mat` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$day%') AND (`action` LIKE 'withdraw') AND (`no` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$day%') AND (`action` LIKE 'withdraw') AND (`id_emp` LIKE '%$search%')) 
                                                OR ((`date` LIKE '%$day%') AND (`action` LIKE 'withdraw') AND (`amount` LIKE '%$search%'));";
                                            }
                                            else if($action=='todayr'){
                                                $count="SELECT COUNT(`no`) as `no` FROM `process_log`
                                                WHERE ((`date` LIKE '%$day%') AND (`action` LIKE 'return') AND (`id_mat` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$day%') AND (`action` LIKE 'return') AND (`no` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$day%') AND (`action` LIKE 'return') AND (`id_emp` LIKE '%$search%')) 
                                                OR ((`date` LIKE '%$day%') AND (`action` LIKE 'return') AND (`amount` LIKE '%$search%'));";
                                            }
                                            else if($action=='thismonth'){
                                                $count="SELECT COUNT(`no`) as `no` FROM `process_log`
                                                WHERE ((`date` LIKE '%$month%') AND (`action` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$month%') AND (`id_mat` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$month%') AND (`no` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$month%') AND (`id_emp` LIKE '%$search%')) 
                                                OR ((`date` LIKE '%$month%') AND (`amount` LIKE '%$search%'));";
                                            }
                                            else if($action=='thismonthd'){
                                                $count="SELECT COUNT(`no`) as `no` FROM `process_log`
                                                WHERE ((`date` LIKE '%$month%') AND (`action` LIKE 'deposited') AND (`id_mat` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$month%') AND (`action` LIKE 'deposited') AND (`no` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$month%') AND (`action` LIKE 'deposited') AND (`id_emp` LIKE '%$search%')) 
                                                OR ((`date` LIKE '%$month%') AND (`action` LIKE 'deposited') AND (`amount` LIKE '%$search%'));";;
                                            }
                                            else if($action=='thismonthw'){
                                                $count="SELECT COUNT(`no`) as `no` FROM `process_log`
                                                WHERE ((`date` LIKE '%$month%') AND (`action` LIKE 'withdraw') AND (`id_mat` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$month%') AND (`action` LIKE 'withdraw') AND (`no` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$month%') AND (`action` LIKE 'withdraw') AND (`id_emp` LIKE '%$search%')) 
                                                OR ((`date` LIKE '%$month%') AND (`action` LIKE 'withdraw') AND (`amount` LIKE '%$search%'));";
                                            }
                                            else if($action=='thismonthr'){
                                                $count="SELECT COUNT(`no`) as `no` FROM `process_log`
                                                WHERE ((`date` LIKE '%$month%') AND (`action` LIKE 'return') AND (`id_mat` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$month%') AND (`action` LIKE 'return') AND (`no` LIKE '%$search%'))
                                                OR ((`date` LIKE '%$month%') AND (`action` LIKE 'return') AND (`id_emp` LIKE '%$search%')) 
                                                OR ((`date` LIKE '%$month%') AND (`action` LIKE 'return') AND (`amount` LIKE '%$search%'));";
                                            }
                                            else{
                                                $count="SELECT COUNT(`no`) as `no` FROM `process_log`
                                                WHERE (`id_mat` LIKE '%$search%') 
                                                OR (`no` LIKE '%$search%')
                                                OR (`id_emp` LIKE '%$search%') 
                                                OR (`action` LIKE '%$search%') 
                                                OR (`amount` LIKE '%$search%') 
                                                OR (`date` LIKE '%$search%');";
                                            }
                                            

                                            $resultcount=$db->query($count);
                                            while($row=$resultcount->fetch_object())
                                            {
                                            ?>
                                            <option value="<?php echo $row->no;?>">
                                            <?php echo $row->no;?>
                                            </option>
                                            <?php
                                            }
                                            ?>
                                            </b>&nbsp;รายการ
                                        </div>
                                        <form  method="request" class="form-header" action="index.php">
                                            <input id="search" class="au-input au-input--xl" type="text" name="search" value=""  placeholder="กดปุ่มเพื่อแสดงข้อมูลการเบิก-คืน หรือกรอกคำค้นหา" size="control"/>
                                            <button class="au-btn--submit" type="submit">
                                                <input type="hidden" name="action" value="<?php echo ($action); ?>" />
                                                <i class="zmdi zmdi-search"></i>
                                            </button>
                                        </form>
                                        <div class="btn">
                                            <form action="" method="POST">
                                                <button type="submit" name="export" id="btnExport" value="Export" class="au-btn au-btn-icon au-btn--blue">
                                                    <i class="fa fa-file-excel-o"></i>Export</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive m-b-40">
                                        <table id="tap" class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <!--th><div align="center">Number</div></th-->
                                                    <th><div align="center">Action Number</div></th>
                                                    <th><div align="center">Material Number</div></th>
                                                    <th><div align="center">Employee</div></th>
                                                    <th><div align="center">Action</div></th>
                                                    <th><div align="center">Amount</div></th>
                                                    <th><div align="center">Date</div></th>  
                                                </tr>
                                            </thead>  
                                            <?php
                                            //$i = 1;
                                            while($rows=$results->fetch_object()) { 
                                            ?>  
                                            <tbody>
                                                <tr>
                                                    <!--td align="center"><--?php echo $i; $i++; ?></td-->
                                                    <td align="center"><?php echo $rows->no;	?></td>
                                                    <td align="center"><?php echo $rows->id_mat;	?></td>
                                                    <td align="center"><?php echo $rows->id_emp; ?></td>
                                                    <td align="center"><?php echo $rows->action;	?></td>
                                                    <td align="center"><?php echo $rows->amount;	?></td>
                                                    <td align="center"><?php echo $rows->date;	?></td>
                                                </tr>
                                            </tbody>
                                            <?php	   
                                            }
                                            ?>
                                        </table>
                                    
                                    <?php
                                    if($action=='today'){
                                        $sql2 = "SELECT *
                                        FROM process_log
                                        WHERE (`date` LIKE '%$day%') and (`id_mat` LIKE '%$search%') 
                                        OR (`date` LIKE '%$day%') and (`no` LIKE '%$search%')
                                        OR (`date` LIKE '%$day%') and (`id_emp` LIKE '%$search%') 
                                        OR (`date` LIKE '%$day%') and (`action` LIKE '%$search%') 
                                        OR (`date` LIKE '%$day%') and (`amount` LIKE '%$search%')  ORDER BY date";
                                        $query2 = mysqli_query($db, $sql2);
                                        $total_record = mysqli_num_rows($query2);
                                        $total_page = ceil($total_record / $perpage);
                                    }
                                    else if($action=='todayd'){
                                        $sql2 = "SELECT *
                                        FROM process_log
                                        WHERE (`date` LIKE '%$day%') AND (`action` LIKE 'deposited') and (`id_mat` LIKE '%$search%') 
                                        OR (`date` LIKE '%$day%') AND (`action` LIKE 'deposited') and (`no` LIKE '%$search%')
                                        OR (`date` LIKE '%$day%') AND (`action` LIKE 'deposited') and (`id_emp` LIKE '%$search%') 
                                        OR (`date` LIKE '%$day%') AND (`action` LIKE 'deposited') and (`amount` LIKE '%$search%')  ORDER BY date";
                                        $query2 = mysqli_query($db, $sql2);
                                        $total_record = mysqli_num_rows($query2);
                                        $total_page = ceil($total_record / $perpage);
                                    }
                                    else if($action=='todayw'){
                                        $sql2 = "SELECT *
                                        FROM process_log
                                        WHERE ((`date` LIKE '%$day%') AND (`action` LIKE 'withdraw') AND (`id_mat` LIKE '%$search%')) 
                                        OR ((`date` LIKE '%$day%') AND (`action` LIKE 'withdraw') AND (`no` LIKE '%$search%'))
                                        OR ((`date` LIKE '%$day%') AND (`action` LIKE 'withdraw') AND (`id_emp` LIKE '%$search%')) 
                                        OR ((`date` LIKE '%$day%') AND (`action` LIKE 'withdraw') AND (`amount` LIKE '%$search%')) ORDER BY date";
                                        $query2 = mysqli_query($db, $sql2);
                                        $total_record = mysqli_num_rows($query2);
                                        $total_page = ceil($total_record / $perpage);
                                    }
                                    else if($action=='todayr'){
                                        $sql2 = "SELECT *
                                        FROM process_log
                                        WHERE (`date` LIKE '%$day%')
                                        AND (`action` LIKE 'return') ORDER BY date";
                                        $query2 = mysqli_query($db, $sql2);
                                        $total_record = mysqli_num_rows($query2);
                                        $total_page = ceil($total_record / $perpage);
                                    }
                                    else if($action=='thismonth'){
                                        $sql2 = "SELECT *
                                        FROM process_log
                                        WHERE (`date` LIKE '%$month%') and (`id_mat` LIKE '%$search%') 
                                        OR (`date` LIKE '%$month%') and (`no` LIKE '%$search%')
                                        OR (`date` LIKE '%$month%') and (`id_emp` LIKE '%$search%') 
                                        OR (`date` LIKE '%$month%') and (`action` LIKE '%$search%') 
                                        OR (`date` LIKE '%$month%') and (`amount` LIKE '%$search%') ORDER BY date";
                                        $query2 = mysqli_query($db, $sql2);
                                        $total_record = mysqli_num_rows($query2);
                                        $total_page = ceil($total_record / $perpage);
                                    }
                                    else if($action=='thismonthd'){
                                        $sql2 = "SELECT *
                                        FROM process_log
                                        WHERE (`date` LIKE '%$month%')
                                        AND (`action` LIKE 'deposited') ORDER BY date";
                                        $query2 = mysqli_query($db, $sql2);
                                        $total_record = mysqli_num_rows($query2);
                                        $total_page = ceil($total_record / $perpage);
                                    }
                                    else if($action=='thismonthw'){
                                        $sql2 = "SELECT *
                                        FROM process_log
                                        WHERE (`date` LIKE '%$month%')
                                        AND (`action` LIKE 'withdraw') ORDER BY date";
                                        $query2 = mysqli_query($db, $sql2);
                                        $total_record = mysqli_num_rows($query2);
                                        $total_page = ceil($total_record / $perpage);
                                    }
                                    else if($action=='thismonthr'){
                                        $sql2 = "SELECT *
                                        FROM process_log
                                        WHERE (`date` LIKE '%$month%')
                                        AND (`action` LIKE 'return') ORDER BY date";
                                        $query2 = mysqli_query($db, $sql2);
                                        $total_record = mysqli_num_rows($query2);
                                        $total_page = ceil($total_record / $perpage);
                                    }
                                    else {
                                        $sql2 = "SELECT *
                                        FROM process_log
                                        WHERE (`id_mat` LIKE '%$search%') 
                                        OR (`no` LIKE '%$search%')
                                        OR (`id_emp` LIKE '%$search%') 
                                        OR (`action` LIKE '%$search%') 
                                        OR (`amount` LIKE '%$search%') 
                                        OR (`date` LIKE '%$search%') ORDER BY date";
                                        $query2 = mysqli_query($db, $sql2);
                                        $total_record = mysqli_num_rows($query2);
                                        $total_page = ceil($total_record / $perpage);
                                    }
                                    ?>
                                    <?php if ($total_page > 0): ?>
                                    <div align="center">
                                        <ul class="pagination">
                                            <?php if ($page > 1): ?>
                                            <li class="prev">
                                                <a href="index.php?action=<?php echo $action; ?>&search=<?php echo $search; ?>&page=<?php echo $page-1; ?>" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>&nbsp;Prev
                                                </a>
                                            </li>
                                            <?php endif; ?>


                                            <?php if ($page > 3): ?>
                                            <li class="start"><a href="index.php?action=<?php echo $action; ?>&search=<?php echo $search; ?>&page=1">1</a></li>
                                            <li class="dots">...</li>
                                            <?php endif; ?>

                                            <?php if ($page-2 > 0): ?><li class="page"><a href="index.php?action=<?php echo $action; ?>&search=<?php echo $search; ?>&page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
											<?php if ($page-1 > 0): ?><li class="page"><a href="index.php?action=<?php echo $action; ?>&search=<?php echo $search; ?>&page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>
                                            
                                            <li class="currentpage">
                                                <a href="index.php?action=<?php echo $action; ?>&search=<?php echo $search; ?>&page=<?php echo $page; ?>">
                                                    <?php echo $page; ?>
                                                </a>
                                            </li>

											<?php if ($page+1 < $total_page+1): ?><li class="page"><a href="index.php?action=<?php echo $action; ?>&search=<?php echo $search; ?>&page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
											<?php if ($page+2 < $total_page+1): ?><li class="page"><a href="index.php?action=<?php echo $action; ?>&search=<?php echo $search; ?>&page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

											<?php if ($page < $total_page-2): ?>
											<li class="dots">...</li>
											<li class="end"><a href="index.php?action=<?php echo $action; ?>&search=<?php echo $search; ?>&page=<?php echo $total_page ?>"><?php echo $total_page ?></a></li>
											<?php endif; ?>
                                            

                                            <?php if ($page < $total_page): ?>
                                            <li class="next">
                                                <a href="index.php?action=<?php echo $action; ?>&search=<?php echo $search; ?>&page=<?php echo $page+1;?>" aria-label="Next">
                                                    Next&nbsp;<span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php       
					}
					?>
                </div>
            </section>
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
