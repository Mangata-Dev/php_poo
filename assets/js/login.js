$(document).ready(function(){
  console.log('ok');
  $('#login-form').on('submit',function(event){
    event.preventDefault();
    var formData = new FormData();
    formData.append('action','tryConnectUser');
    formData.append('login',$('#id').val());
    formData.append('pwd',$('#pwd').val());
    $.ajax({
      url: "./../../src/controllers/ControllerUser.php",
      type : 'POST',
      processData: false,
      contentType: false,
      data : formData,
      dataType: 'json',
      success: function(result){

        if(result.status == 'success'){
          console.log('success !');
          window.location.replace("/?page=dashboard");
        }else{

        }
    }});
  })
});
