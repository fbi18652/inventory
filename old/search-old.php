<!DOCTYPE html>
<html lang="en">
<?php
	include('connection/phpconnect.php');
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	$search = (isset($_GET['search'])) ? $_GET['search'] : '';
	$sql = "SELECT * FROM `withdraw_return` WHERE (`id_mat` LIKE '%$search%') OR (`id_employee` LIKE '%$search%') OR (`action` LIKE '%$search%') OR (`volume` LIKE '%$search%') OR (`date` LIKE '%$search%') ORDER BY date;";
	$result = mysqli_query($db, $sql);
	if(isset($_POST["export"])){
		$file = new Spreadsheet();
		
		$active_sheet = $file->getActiveSheet();
		
		$active_sheet->setCellValue('A1','Material Number');
		$active_sheet->setCellValue('B1','Employee ID');
		$active_sheet->setCellValue('C1','Action');
		$active_sheet->setCellValue('D1','Volume');
		$active_sheet->setCellValue('E1','Date');
		
		$count = 2;
		
		foreach($result as $row)
		{
			$active_sheet->setCellValue('A'.$count,$row["id_mat"]);
			$active_sheet->setCellValue('B'.$count,$row["id_employee"]);
			$active_sheet->setCellValue('C'.$count,$row["action"]);
			$active_sheet->setCellValue('D'.$count,$row["volume"]);
			$active_sheet->setCellValue('E'.$count,$row["date"]);
			
			$count = $count+1;
		}
		$writer = \PhpOffice\PHPSpreadsheet\IOFactory::createWriter($file, $_POST["file_type"]);
		$file_name = time().'-'.strtolower($_POST["file_type"]);
		$writer->save($file_name);
		header('Content-Type: application/x-www-form-urldecode');
		header('Content-Transfer-Encoding: Binary');
		header("Content-disposition: attachment; filename=\"".$file_name."\"");
		
		readfile($file_name);
		unlink($file_name);
		
		exit;
	}
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
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
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
                                    <a href="forget-pass.php">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="form_wr.html">
                                <i class="fas fa-calendar-alt"></i>Withdrw-Return</a>
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
                        <li>
                            <a href="form_wr.php">
                                <i class="fas fa-calendar-alt"></i>Withdrw-Return</a>
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
                        <form method="POST">
						<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">ข้อมูลการเบิก-คืน</h2>
									
											<div>
											
												<select name="file_type" class="form-control input-sm">
												<option value="XLxs">XLxs</option>
												<option value="XLs">XLs</option>
												<option value="Csv">Csv</option>
												</select>
											
											</div>
												<button type="submit" name="export" class="au-btn au-btn-icon au-btn--blue">
													<i class="fa fa-files-o"></i>Export</button>
										

									
                                </div>
                            </div>
                        </div>
						</form>
						<br>
						<div class="row">
							<div class="col-lg">
								<!--แสดงข้อมูล-->            
								<?php
									if(isset($_REQUEST['submit']))
									{
								?>
								คำที่ค้นหา = <b><font color="blue"><?php echo ($search); ?></font></b>&nbsp;
								<!--พบผลลัพธ์<b>
									<font color="#0000FF">
									
									</font>
									</b>
									รายการ
									<br />-->
								<div class="table-responsive table--no-card">
									<table class="table table-borderless table-striped table-earning">
										<thead>
											<tr>
												<th>Material Number</th>
												<th>Employee ID</th>
												<th>Action</th>
												<th>Volume</th>
												<th>Date</th>  
											</tr>
										</thead>  
										<?php
										while($row=$result->fetch_object())
										{ 
										?>  
										<tbody>
											<tr>
												<td align="center"><?php echo $row->id_mat;	?></td>
												<td align="center"><?php echo $row->id_employee;	?></td>
												<td align="center"><?php echo $row->action;	?></td>
												<td align="center"><?php echo $row->volume;	?></td>
												<td align="center"><?php echo $row->date;	?></td>
											</tr>
										</tbody>
										<?php	   
										}
										?>
									</table>
								<?php       
									}
								?>
								</div>
							</div>
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
