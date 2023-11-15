<?php
include_once('../models/post.php');
include_once('../models/categories.php');
include_once('../models/pdo.php');
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
                if(isset($_POST['add_category']) ){
                 $category_name = $_POST['category_name'];
                 insert_category($category_name);
                }
               include_once('./category/add.php');
               break;

          case 'list-categories':
               $listcategory = loadall_category();
               include_once('./category/list.php');
               break;

          case 'delete-category':
               if(isset($_GET['category_id']) && $_GET['category_id']>0){
               delete_category();
               }
               $listcategory = loadall_category();
               include_once('./category/list.php');
               break;

          case 'fix-category':
                if(isset($_GET['category_id'])&& $_GET['category_id']>0){
               $cate = loadone_categories($_GET['category_id']);

               }
               $listcategory = loadall_category();
               include_once('./category/update.php');
               break;
               
          case 'list-user':
               include_once('./user/list.php');
               break;

          case 'add-post':
               if(isset($_POST['add_post'])){
                    $category_id = $_POST['category_id'];
                    $post_title = $_POST['post_title'];
                    $post_content = $_POST['post_content'];
                    $post_time = 
                    // if($_FILES['post_image']){
                    //      $target_dir = "../upload/";
                    //      $name_img = $_FILES["post_image"]["name"];
                    //      $target_file = $target_dir.$name_img;
                    //      move_uploaded_file($_FILES["post_image"]['tmp_name'],$target_file);
                    //  }
                 
                    insert_post($post_title,$post_content,$category_id,$post_time);
               }
               $listcategory = loadall_category();
               include_once('./post/add.php');
               break;

          case 'list-post':
               $listpost = loadall_post();
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