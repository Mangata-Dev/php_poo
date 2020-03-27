$(document).ready(function(){
  console.log('ok');
  $('#registration-form').on('submit',function(event){
    event.preventDefault();
    var formData = new FormData(document.getElementById('registration-form'));
    formData.append('action','createNewUser');

    $.ajax({
      url: "./../../src/controllers/ControllerUser.php",
      type : 'POST',
      processData: false,
      contentType: false,
      data : formData,
      dataType:'json',
      success: function(result){
        $('.alert').attr('alert-'+result.status);
        $('.alert').html(result.message);
        window.location.replace("/?page=login");
    }});
  })
});
