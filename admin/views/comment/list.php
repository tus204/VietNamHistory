<table class="table mt-4">
     <h2 class="text-center text-primary mt-3">Comment List</h2>
     <thead>
     <tr>
          <th scope="col">#</th>   
          <th scope="col">User Name</th>
          <th scope="col">Comment Content</th>
          <th scope="col">Comment Time</th>
          <th scope="col">Action</th>
     </tr>
     </thead>
     <tbody>
          <?php 
          foreach ($listcomment as $comment) {
              extract($comment);
              $delcmt = "index.php?act=del-cmt&id=".$comment_id;

              echo ' <tr>
              <th scope="row">'.$comment_id.'</th>
              <td>'.$full_name.'</td>
              <td>'.$comment_text.'</td>
              <td>'.$comment_time.'</td>
              <td>
              <a href="'.$delcmt.'"><button type="button" class="btn btn-danger">Delete</button></a>
              </td>
         </tr>';
          }
 
          ?>
     </tbody>
</table>