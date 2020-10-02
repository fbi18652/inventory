<?php   
    // จำนวนที่ต้องการต่อหน้า
    $num_rec_per_page = 12;
    //นี่เป็นการ post ค่า ผ่าน url เช่น htpp://www.wisadev.com/product.php?page=1
    //คือการที่เราต้องการหน้าที่ 1 ถ้าไม่มีการกำหนดเรากำหนดให้เป้น 1
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    }
    //เชื่อมต่อ mysql เรียกใช้ class
    include('connection/phpconnect.php');
	session_start();
    $start_from = ($page - 1) * $num_rec_per_page;
    $sql = "SELECT withdraw_return.no, withdraw_return.id_mat, withdraw_return.id_employee, withdraw_return.action, withdraw_return.volume, withdraw_return.date
    FROM withdraw_return
    LIMIT " . $start_from . "," . $num_rec_per_page;
    // ดึงข้อมูล ใส่ใน array ชื่อ product
    if ($result = mysqli_query($db, $sql)) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $product[] = array(
                'no' => $row['no'],
                'id_mat' => $row['id_mat'],
                'id_employee' => $row['id_employee'],
                'action' => $row['action'],
                'volume' => $row['volume'],
                'date' => $row['date']
            );
        }
        mysqli_free_result($result);
    }
    mysqli_close($db);
 
    //pagination นับจำนวน record ทั้งหมด
    include('connection/phpconnect.php');
    $sqlpagi       = "SELECT * FROM witdraw_return";
    $rs_result     = mysqli_query($db, $sqlpagi); //run the query
    $total_records = mysqli_num_rows($rs_result); //count number of records
    $total_pages   = ceil($total_records / $num_rec_per_page);
    mysqli_close($db);
    echo '<ul class="pagination">';
    for ($i = 1; $i <= $total_pages; $i++) {
        if ($page == $i) {
            echo '<li class="active"><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . $i . '">' . $i . '</a></li>';
        } else if ($i == $total_pages) {
            echo '<li><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . ($page + 1) . '">Next</a></li>';
            echo '<li><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . $i . '">»</a></li>';
        } else {
            if ($i == $page - 1 || $i == $page - 2)
                echo '<li><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . $i . '">' . $i . '</a></li>';
            else if ($i == $page + 1 || $i == $page + 2)
                echo '<li><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . $i . '">' . $i . '</a></li>';
            else if ($i > $total_pages - 2)
                echo '<li><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . $i . '">' . $i . '</a></li>';
            else if ($i < (2))
                echo '<li><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . $i . '">' . $i . '</a></li>';
        }
    }
    echo '</ul>';
    //call list
    //require_once $pathfile . "theme/product-items.php";
    echo '<ul class="pagination">';
    for ($i = 1; $i <= $total_pages; $i++) {
        if ($page == $i) {
            echo '<li class="active"><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . $i . '">' . $i . '</a></li>';
        } else if ($i == $total_pages) {
            echo '<li><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . ($page + 1) . '">Next</a></li>';
            echo '<li><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . $i . '">»</a></li>';
        } else {
            if ($i == $page - 1 || $i == $page - 2)
                echo '<li><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . $i . '">' . $i . '</a></li>';
            else if ($i == $page + 1 || $i == $page + 2)
                echo '<li><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . $i . '">' . $i . '</a></li>';
            else if ($i > $total_pages - 2)
                echo '<li><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . $i . '">' . $i . '</a></li>';
            else if ($i < (2))
                echo '<li><a href="' . constant("WEB_URL") . 'witdraw_return.php?page=' . $i . '">' . $i . '</a></li>';
        }
    }
    echo '</ul>';
?>