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

</body>
</html>