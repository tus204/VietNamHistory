<form class="mt-4 d-flex flex-column gap-2" aciton="index.php?act=add-post" method="POST" enctype="multipart/form-data">
     <h2 class="text-center text-primary">Add new post</h2>
     <div class="form-group">
          <label>Post Name</label>
          <input type="text" class="form-control"  placeholder="Enter post name" require name="post_title">
     </div>

     <div class="form-group">
          <label>Post Content</label>
          <textarea row="3" class="form-control" placeholder="Enter post content" require name="post_content"></textarea>
     </div>

     <div class="form-group">
          <label>Post image</label>
         <input type="file" class="form-control" require name="post_image">
     </div>
     <div class="form-group">
          <label>Select Category</label>
          <select class="form-control" name="category_id">
<?php
    foreach ($listcategory as $category) {
          extract($category);
          echo '<option value="'.$category_id.'">'.$category_name.'</option>';
    }
?>

          </select>
     </div>

     <div class="d-flex justify-content-between"> 
          <button type="submit" class="btn btn-primary w-25 mt-4" name="add-post">Submit</button>
          <button type="reset" class="btn btn-warning text-white w-25 mt-4">Reset</button>
     </div>
</form>