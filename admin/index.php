<?php
     include_once ('../models/user.php');
     include_once('../models/post.php');
     include_once('../models/categories.php');
     
     include_once('../models/pdo.php');
     include_once('./header.php');
     
if(isset($_GET['act'])) {
     $act = $_GET['act'];
     switch ($act) {

          case 'list-user':
               $users = getAllUsers();
               include_once('./views/user/list.php');
               break;

          case 'update-user':            
               if(isset($_GET['user_id'])) {
                    $user_id = $_GET['user_id'];
                    $user = getUserById($user_id);
                    
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                         $full_name = $_POST['full_name'];
                         $email = $_POST['email'];
                         $password = $_POST['password'];
                         $mobile = $_POST['mobile'];
                         $role = $_POST['role'];
                         $gender = $_POST['gender'];
                         $image = $_FILES['image'];

                         // Gọi hàm cập nhật người dùng
                         updateUser($user_id, $full_name, $email, $password, $mobile, $role, $gender, $image);

                         // chuyển hướng
                         header("Location: ?act=list-user");
                         exit();
                    } else {
                         include_once('./views/user/updateUser.php');
                    }
               }
               break;
               
          case 'delete-user':
               if(isset($_GET['user_id']) && $_GET['user_id']>0) {
                    $user_id_to_delete = $_GET['user_id'];
                    
                    // Gọi hàm xóa người dùng
                    delUser($user_id_to_delete);
               
                    // chuyển hướng     
                    header("Location: ?act=list-user");
                    exit();
               }
               break;
               
          case 'add-quiz':
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