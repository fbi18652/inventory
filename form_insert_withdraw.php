<?php
	include('connection/phpconnect.php');
	session_start();
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $strSQL = "SELECT`location`.`num_lo`, `location`.`id_mat`, `location`.`id_store`, `store`.`storename` , `location`.`id_shelf`, `shelf`.`name`, `location`.`amount`
    FROM `location`
    JOIN store ON `location`.`id_store` = `store`.`id_store`
    JOIN shelf ON `location`.`id_shelf` = `shelf`.`id_shelf`
    WHERE `num_lo` = '".$_REQUEST['num_lo']."'  ";
	$objQuery = mysqli_query($db, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
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
    <title>Withdraw</title>
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
                                <a href="index.php">
                                    <i class="fas fa-chart-pie"></i>
                                    <span class="bot-line"></span>Home</a>
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
                            <a href="index.php">
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
                                            <a href="#">Process</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Withdraw</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            <form action="action/insert_process.php" method="post">
            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h1 class="title-4">Withdraw</h1>
                                <button type="submit" name="submit"  class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-save"></i>Submit</button>
                            </div>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="section__content section__content--p30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div  class="col">
								<div class="card">
									<div class="card-body card-block">
                                        <input type="hidden" name="action" value="withdraw" />
                                        <input type="hidden" name="num_lo" value="<?php echo $objResult["num_lo"];?>" />
                                        <div class="form-group">
											<label for="id_mat">Material Number</label>
                                            <input type="text" name="id_mat" value="<?php echo $objResult["id_mat"];?>" disabled='disabled' class="form-control" />
						                    <input type="hidden" name="id_mat" value="<?php echo $objResult["id_mat"];?>" />
										</div>
                                        <div class="form-group">
											<label for="id_store">Store</label>
                                            <input type="text" name="storename" value="<?php echo $objResult["storename"];?>" disabled='disabled' class="form-control" />
						                    <input type="hidden" name="id_store" value="<?php echo $objResult["id_store"];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="id_shelf">Shelf</label>
                                            <input type="text" name="name" value="<?php echo $objResult["name"];?>" disabled='disabled' class="form-control" />
						                    <input type="hidden" name="id_shelf" value="<?php echo $objResult["id_shelf"];?>" />
                                        </div>
                                        <div class="form-group">
											<label for="id_emp">Employee ID</label>
											<select class="form-control" id="id_emp" name="id_emp" required>
												<option value="">กรุณาเลือก</option>
												<?php
													$sql="SELECT `employee`.`id_emp` AS `id_emp` FROM `employee`";
													$result=$db->query($sql);
													while($row=$result->fetch_object())
												{
												?>
												<option value="<?php echo $row->id_emp;?>">
													<?php echo $row->id_emp;?>
												</option>
												<?php
												}
												?>   
											</select>
										</div>
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
											<input type="text" class="form-control" id="amount" name="amount" placeholder="ระบุจำนวนที่ต้องการเบิก" required>
                                        </div>
                                        <button class="au-btn--block btn btn-danger m-b-20" type="button" value="Go back!" onclick="history.back()">Back</button>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->
            </form>                                       
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
