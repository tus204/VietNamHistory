<form class="mt-4 d-flex flex-column gap-2">
     <h2 class="text-center text-primary">Add new quiz</h2>
     <div class="form-group">
          <label>Quiz Name</label>
          <input type="text" class="form-control"  placeholder="Enter quiz name" require>
     </div>

     <div class="form-group">
          <label>Quiz Point</label>
          <input type="number" min="1" max="10" class="form-control" placeholder="Enter quiz point" require>
     </div>

     <div class="form-group">
          <label>Quiz time</label>
          <input type="number" min="0" max="20" class="form-control" placeholder="Enter quiz time" require>
     </div>

     <div class="form-group">
          <label>Quiz image</label>
          <input type="file" class="form-control" require>
     </div>

     <div class="d-flex justify-content-between"> 
          <button type="submit" class="btn btn-primary w-25 mt-4">Submit</button>
          <button type="reset" class="btn btn-warning text-white w-25 mt-4">Reset</button>
     </div>
</form>