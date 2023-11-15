<table class="table mt-4">
     <h2 class="text-center text-primary mt-3">Quiz List</h2>
     <thead>
     <tr>
          <th scope="col">#</th>   
          <th scope="col">Post Name</th>
          <th scope="col">Post Content</th>
          <th scope="col">Post Time</th>
          <th scope="col">Post Image</th>
          <th scope="col">Created by</th>
          <th scope="col">Action</th>
     </tr>
     </thead>
     <tbody>
          <?php
           foreach ($listpost as $post) {
               extract($post);
               if(is_file('../upload/'.$image)) {
                    $hinh = "<img src='".('../upload/'.$image)."' width='150'>";
                } else {
                    $hinh = "no photo";
                } 
               $sql = "SELECT users.full_name FROM `posts`INNER JOIN users
               ON posts.user_id = users.user_id";
               $fullname = pdo_query_value($sql);
               echo '     <tr>
               <th scope="row">'.$post_id.'</th>
               <td>'.$post_title.'</td>
               <td>'.$post_content.'</td>
               <td>'.$post_time.'</td>
               <td>'.$hinh.'</td>
               <td>'.$fullname.'</td>
               <td>
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
               </td>
          </tr>';
           }
          ?>
  
     </tbody>
</table>
<a href="index.php?act=add-post" class="btn btn-primary">Add Post</a>