// Settings
var addForm = $('#add-form'),
    editForm = $('#edit-form'),
    inputAdd = addForm.find('#text'); 


//  Add-form
inputAdd.val('').focus();


// Edit-form
editForm.find('#text').select();


// Delete-form
$('.btn-secondary').click(function() {
  const id = $(this).attr('id');
  return confirm('Are you sure?');
});

// Show and hide input, not use now
function showInput() {
  var x = document.getElementById("edit");

  if (x.style.display === "none") {
    x.style.display = "block";
  } 
  
  else {
    x.style.display = "none";
  }
} 

// Using enter on confirm, not working probably because of ajax
// inputAdd.on('keypress',function(event) {
//   if (event.which === 13) {
//     addForm.submit();
//     return false;
//   }
// });





 