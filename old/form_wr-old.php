<!DOCTYPE html>
<html lang="en">
<?php
	include('connection/phpconnect.php');
	$search = (isset($_GET['search'])) ? $_GET['search'] : '';
	$sql = "SELECT * FROM `withdraw_return` WHERE (`id_mat` LIKE '%$search%') OR (`id_employee` LIKE '%$search%') OR (`action` LIKE '%$search%') OR (`volume` LIKE '%$search%') OR (`date` LIKE '%$search%') ORDER BY date;";
	$result = mysqli_query($db, $sql);
?>
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
    <div class="page">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/true2.png" />
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
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="#">
                                <i class="fas fa-shopping-cart"></i>Withdrw-Return</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/true2.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a href="#">
                                <i class="fas fa-shopping-cart"></i>Withdrw-Return</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form  method="request" class="form-header" action="search.php">
                                <input id="search" class="au-input au-input--xl" type="text" name="search" placeholder="กดปุ่มเพื่อแสดงข้อมูลการเบิก-คืนทั้งหมด หรือกรอกเพื่อค้นหา" size="control" />
                                <button class="au-btn--submit" type="submit" name="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
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
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="form_mat.php">
                                                        <i class="zmdi zmdi-plus"></i>Add new MAT</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
						<form action="action/insert_wr.php" method="post">
							<div class="">
								<div class="col-md-12">
									<div class="overview-wrap">
										<h2 class="title-1">Withdrw-Return Overview</h2>
										<button type="submit" name="submit"  class="au-btn au-btn-icon au-btn--blue">
											<i class="zmdi zmdi-save"></i>Submit</button>
									</div>
								</div>
							</div>
							<br>
							<div  class="col">
								<div class="card">
									<div class="card-header">
										<p align="center" class="display-4"><b>Insert</b></p>
									</div>
									<div class="card-body card-block">
										<div class="form-group">
											<label for="id_mat">รหัสสินค้า</label>
											<select class="form-control" id="id_mat" name="id_mat">
												<option value="NULL" required>เลือกรหัสสินค้า</option>
												<?php
													$sql="SELECT `mat`.`id_mat` AS `id_mat` FROM `mat`";
													$result=$db->query($sql);
													while($row=$result->fetch_object())
													{
												?>
												<option value="<?php echo $row->id_mat;?>">
													<?php echo $row->id_mat;?>
												</option>
												<?php
												}
												?>   
											</select>
										</div>
										<div class="form-group">
											<label for="id_employee">รหัสพนักงาน</label>
											<select class="form-control" id="id_employeeem" name="id_employee">
												<option value="NULL" selected>กรุณาเลือก</option>
												<?php
													$sql="SELECT `employee`.`id_employee` AS `id_employee` FROM `employee`";
													$result=$db->query($sql);
													while($row=$result->fetch_object())
												{
												?>
												<option value="<?php echo $row->id_employee;?>">
													<?php echo $row->id_employee;?>
												</option>
												<?php
												}
												?>   
											</select>
										</div>
										<div class="form-group">
											<label for="action">เบิก-คืน</label>
											<select class="form-control" id="action" name="action">
												<option value="NULL" selected>กรุณาเลือก</option>
												<?php
													$sql="SELECT `action`.`actiontype` AS `action` FROM `action`";
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
											</select>
										</div>
										<div class="form-group">
											<label for="volume">จำนวน</label>
											<input type="text" class="form-control" id="volume" name="volume" placeholder="กรุณาระบุจำนวนที่ทำรายการ" required>
										</div>
                                         <div class="form-group">
											<label for="date">เวลา</label>
											<input type="datetime" id="date" name="date" value="<?php $t=time(); date_default_timezone_set("Asia/Bangkok"); echo(date("Y-m-d h:m:s"));?>" disabled='disabled' class="form-control" />
										</div>
										<!--div class="form-group">
												<label for="st">ชื่อ Store</label>
												<select class="form-control" id="st" name="st">
													<option value="NULL" selected>กรุณาเลือก</option>
													<--?php
														$sql="SELECT store.storename AS st FROM `store`";
														$result=$db->query($sql);
														while($row=$result->fetch_object())
														{
													?>
														<option value="<--?php echo $row->st;?>">
															<--?php echo $row->st;?>
														</option>
													<--?php
													}
													?>   
												</select>
										</div>   
										<div class="form-group">
												<label for="sh">ชั้น</label>
												<select class="form-control" id="sh" name="sh">
													<option value="NULL" selected>กรุณาเลือก</option>
													<--?php
														$sql="SELECT shelve.id_shelve AS sh FROM `shelve`";
														$result=$db->query($sql);
														while($row=$result->fetch_object())
														{
													?>
														<option value="<--?php echo $row->sh;?>">
															<--?php echo $row->sh;?>
														</option>
													<--?php
													}
													?>   
												</select>
										</div>
										<div align="center"> 
												<button type="submit" name="submit" class="btn btn-success">Save</button>
										</div-->
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="copyright">
								<p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
							</div>
						</div>
                    </div>	
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
