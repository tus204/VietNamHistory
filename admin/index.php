<?php
 include_once ('../models/comment.php');
     include_once ('../models/user.php');
     include_once('../models/post.php');
     include_once('../models/categories.php');
     include_once('../models/quiz.php');
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

                         // chuyển hướng về list
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
               include_once('./views/quiz/add.php');
               break;

          case 'list-quiz':
               $quiz = quiz::getAllQuiz();
               include_once('./views/quiz/list.php');
               break;

               case 'add-category':
                    if(isset($_POST['add_category']) ){
                     $category_name = $_POST['category_name'];
                     insert_category($category_name);
                     header("Location: ?act=list-categories");
                     exit();
                    }
                    include_once('./views/category/add.php');
                    break;
    
              case 'list-categories':
                   $listcategory = loadall_category();
                   include_once('./views/category/list.php');
                   break;
    
              case 'delete-category':
                   if(isset($_GET['id']) && $_GET['id']>0 ){
                   delete_category();
                   }
                   $listcategory = loadall_category();
                   include_once('./views/category/list.php');
                   break;
    
              case 'edit-category':
                    if(isset($_GET['id'])&& $_GET['id']>0){
                   $category = loadone_categories($_GET['id']);
    
                   }
                   $listcategory = loadall_category();
                   include_once('./views/category/update.php');
                   break;
                   
              
              case 'update-category':
                   if(isset($_POST['update_category']) ){
                        $category_name = $_POST['category_name'];
                        $category_id =$_POST['category_id'];
                       update_category($category_id,$category_name);
                       }
                   $listcategory = loadall_category();
                   include_once('./views/category/list.php');
                   break;

               case 'add-post':
                    if(isset($_POST['add-post'])){
                         $post_title = $_POST['post_title'];
                         $post_content = $_POST['post_content'];
                         $post_time = date("Y-m-d H:i:s"); 
                         $image= basename($_FILES['post_image']['name']);
                         $target_file = "../upload/".$image;
                         
                         if (move_uploaded_file($_FILES["post_image"]["tmp_name"], $target_file)){
                              
                         }
                         
                         $category_id = $_POST['category_id'];
                         insert_post($post_title, $post_content, $post_time,$image,$category_id);

                         header("Location: ?act=list-post");
                         exit();                    
                    }
                    $listcategory = loadall_category();
                    include_once('./views/post/add.php');
                    break;
    
              case 'list-post':
                   $listpost = loadall_post();
                   include_once('./views/post/list.php');
                   break;
    
              case 'delete-post':
                   if(isset($_GET['id']) && $_GET['id']){
                        delete_post();
                   }
                   $listpost = loadall_post();
                   include_once('./views/post/list.php');
                   break;          
              case 'edit-post':
                   if(isset($_GET['id'])){
                        $post = loadone_post($_GET['id']);
         
                        }
                   $listcategory = loadall_category();     
                   $listpost = loadall_post();
                   include_once "./views/post/update.php";
                   break;
              case 'update-post':
                    if(isset($_POST['update_post'])){
                        $post_title = $_POST['post_title'];
                        $post_content = $_POST['post_content'];
                        $post_time = date("Y-m-d H:i:s"); 
                       $image= basename($_FILES['post_image']['name']);
                       $target_file = "../upload/".$image;
                       
                        if (move_uploaded_file($_FILES["post_image"]["tmp_name"], $target_file)){
                             echo "Thêm thành công !";
                        }
                        
                        $category_id = $_POST['category_id'];
                        $post_id = $_POST['post_id'];
                        update_post($post_id,$post_title,$post_content,$post_time,$image,$category_id);
    
                   
                   }
                   $listcategory = loadall_category();     
                   $listpost = loadall_post();
                   include_once "./views/post/list.php";
                   break;        

          case 'point':
               include_once('./views/points/list.php');
               break;

          case 'comment':
               $listcomment = loadall_comment();
               include_once('./views/comment/list.php');
               break;
          case 'del-cmt':
               if(isset($_GET['id'])){
                    delete_comment();
               }
               $listcomment = loadall_comment();
               include_once('./views/comment/list.php');
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