// SETTINGS
var addForm = $('#add-form'),
    editForm = $('#edit-form'),
    inputAdd = addForm.find('#text'); 


//  ADD-FORM
inputAdd.val('').focus();


// EDIT-FORM
editForm.find('#text').select();


// DELETE-FORM
$('.btn-secondary').click(function() {
  const id = $(this).attr('id');
  return confirm('Are you sure?');
});


// SHOW AND HIDE INPUT, I DO NOT USE THIS NOW
function showInput() {
  var x = document.getElementById("edit");

  if (x.style.display === "none") {
    x.style.display = "block";
  } 
  
  else {
    x.style.display = "none";
  }
} 


// USE ENTER, NOT WORKING NOW PROBABLY BECAUSE OF AJAX
// inputAdd.on('keypress',function(event) {
//   if (event.which === 13) {
//     addForm.submit();
//     return false;
//   }
// });





 