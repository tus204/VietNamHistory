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
          <label>Question number</label>
          <input type="number" min="0" max="20" class="form-control" placeholder="Enter question number" require>
     </div>

     <div class="form-group">
          <label>Quiz image</label>
          <input type="file" class="form-control" require>
     </div>

     <button type="button" class="btn btn-primary w-25 mt-4 btn-add addQuestion">Add Question</button>

     <div class="d-flex justify-content-between"> 
          <button type="submit" class="btn btn-primary w-25 mt-4">Submit</button>
          <button type="reset" class="btn btn-warning text-white w-25 mt-4">Reset</button>
     </div>
</form>


<div class="question-model">
        <div class="container mt-5">
          <form action="" class="question" >
               <div class="form-question">
                    <textarea rows="4" type="text" placeholder="Type question here" ></textarea>
               </div>
               <div class="list-answer">
                    <div class="answer-item" style="background-color: #2c71ae;">
                         <div class="answer-top text-left">
                              <input type="radio">
                         </div>
                         <div class="answer-input">
                              <textarea rows="4" type="text" placeholder="Type answer option here" ></textarea>
                         </div>
                    </div>
                    <div class="answer-item" style="background-color: #2d9da6;">
                         <div class="answer-top text-left">
                              <input type="radio">
                         </div>
                         <div class="answer-input">
                              <textarea rows="4" type="text" placeholder="Type answer option here" ></textarea>
                         </div>
                    </div>
                    <div class="answer-item" style="background-color: #efa92a;">
                         <div class="answer-top text-left">
                              <input type="radio">
                         </div>
                         <div class="answer-input">
                              <textarea rows="4" type="text" placeholder="Type answer option here" ></textarea>
                         </div>
                    </div>
                    <div class="answer-item" style="background-color: #d5556e;">
                         <div class="answer-top text-left">
                              <input type="radio">
                         </div>
                         <div class="answer-input">
                              <textarea rows="4" type="text" placeholder="Type answer option here" ></textarea>
                         </div>
                    </div>
               </div>
               <button type="button" class="btn btn-primary mt-4 btnSave">Save</button>
          </form>
        </div>
    </div>
