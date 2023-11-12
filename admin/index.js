const questionModel = document.querySelector('.question-model');
const btnAddQuestion = document.querySelector('.addQuestion');
const btnSave = document.querySelector('.btnSave');
const formContainer = document.querySelector('.question');


btnAddQuestion.addEventListener('click', function() {
     questionModel.classList.add('active')
})

questionModel.addEventListener('click', function(event) {
     // Kiểm tra xem phần tử được nhấp có là phần tử form hay không
     if (!event.target.closest('.question')) {
          questionModel.classList.remove('active');
     }
});

btnSave.addEventListener('click', function() {
     questionModel.classList.remove('active')
})