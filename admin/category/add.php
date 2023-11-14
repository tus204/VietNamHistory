<form class="mt-4 d-flex flex-column gap-2" aciton="index.php?act=add-category" method="POST">
     <h2 class="text-center text-primary">Add new category</h2>
     <div class="form-group">
          <label>Category Name</label>
          <input type="text" class="form-control" placeholder="Enter category name" require name="category_name">
     </div>

     <div class="d-flex justify-content-between"> 
          <button type="submit" class="btn btn-primary w-25 mt-4" name="add_category">Submit</button>
          <button type="reset" class="btn btn-warning text-white w-25 mt-4">Reset</button>
     </div>
</form>