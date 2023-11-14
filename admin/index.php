<?php

include_once('./header.php');
if(isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'add-quiz';
            include_once('./quiz/add.php');
            break;

        case 'list-quiz':
            include_once('./quiz/list.php');
            break;

        case 'add-category':
            include_once('./category/add.php');
            break;

        case 'list-categories':
            include_once('./category/list.php');
            break;

        case 'list-user':
            include_once('./user/list.php');
            break;

        case 'add-post':
            include_once('./post/add.php');
            break;

        case 'list-post':
            include_once('./post/list.php');
            break;

        case 'point':
            include_once('./points/list.php');
            break;

        case 'comment':
            include_once('./comment/list.php');
            break;

        default:
            // thống kê
            break;
    }
}else {
     // thống kê
}
include_once('./footer.php');

?>