<table class="table mt-4">
     <h2 class="text-center text-primary mt-3">Quiz List</h2>
     <thead>
     <tr>
          <th scope="col">#</th>   
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
     </tr>
     </thead>
     <tbody>
     <tr>
          <?php
           foreach ($listcategory as $category) {
              extract($category);
              $suacate = "index.php?act=fix-category&id=".$category_id;
              $xoacate = "index.php?act=delete-category&id=".$category_id;
              echo '  <tr> <td scope="row"> '.$category_id.' </td>
              <td scope="row">'.$category_name.'</td>
              <td>
              <a href="'.$suacate.'"><button type="button" class="btn btn-warning" name="fixcate">Edit</button></a>
              <a href="'.$xoacate.'"><button type="button" class="btn btn-danger" name="deletecate">Delete</button></a>
         </td> </tr>'; 
           }
          ?>

     
     </tbody>
</table>
<a href="index.php?act=add-category" class="btn btn-primary">Add Category</a>