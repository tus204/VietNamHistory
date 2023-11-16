<form class="mt-4 d-flex flex-column gap-2">
     <h2 class="text-center text-primary">Add new post</h2>
     <div class="form-group">
          <label>Post Name</label>
          <input type="text" class="form-control"  placeholder="Enter post name" require>
     </div>

     <div class="form-group">
          <label>Post Content</label>
          <textarea row="3" class="form-control" placeholder="Enter post content" require></textarea>
     </div>

     <div class="form-group">
          <label>Post image</label>
          <input type="file" class="form-control" require>
     </div>

     <div class="form-group">
          <label>Select Category</label>
          <select class="form-control">
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
          </select>
     </div>

     <div class="d-flex justify-content-between"> 
          <button type="submit" class="btn btn-primary w-25 mt-4">Submit</button>
          <button type="reset" class="btn btn-warning text-white w-25 mt-4">Reset</button>
     </div>
</form>