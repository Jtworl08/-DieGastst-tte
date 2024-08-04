<?php
session_start();
if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'order') {
    $page = "order.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
    if ($_SESSION['level_belcafe'] == 1 || $_SESSION['level_belcafe'] == 2 || $_SESSION['level_belcafe'] == 3) {
        $page = "user.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }

} elseif (isset($_GET['x']) && $_GET['x'] == 'dapur') {
    if ($_SESSION['level_belcafe'] == 1 || $_SESSION['level_belcafe'] == 4){
    $page = "dapur.php";
    include "main.php";
}else{
    $page = "dapur.php";
    include "main.php";
}
} elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
    if ($_SESSION['level_belcafe'] == 1) {
        $page = "report.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }

} elseif (isset($_GET['x']) && $_GET['x'] == 'menu') {
    if ($_SESSION['level_belcafe'] == 1 || $_SESSION['level_belcafe'] == 3) {
        $page = "menu.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }

} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    include "proses/proses_logout.php";

} elseif (isset($_GET['x']) && $_GET['x'] == 'viewitem') {
    include "view_item.php";

} elseif (isset($_GET['x']) && $_GET['x'] == 'orderitem') {
    if ($_SESSION['level_belcafe'] == 1 || $_SESSION['level_belcafe'] == 2 || $_SESSION['level_belcafe'] == 3) {
    $page = 'order_item.php';
    include "main.php";
} else {
    $page = "home.php";
    include "main.php";
}
} else {
    $page = "home.php";
    include "main.php";
}
?>