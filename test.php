<?php
$db_server = "db";
$db_user = "root";
$db_pass = "";
$db_src ="inventory";
$db = new mysqli($db_server,$db_user,$db_pass,$db_src);
$db->query("set names utf8");
if ($db->connect_error) {
echo "Connection failed: " . $db->connect_error;
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
    <body>
        <p>TEST</p>
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