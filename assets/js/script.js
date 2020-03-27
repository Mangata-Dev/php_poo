$(document).ready(function(){
  $('.disconnect').on('click', function(event){
    event.preventDefault();
    console.log('charger');
    $.ajax({
      url: "./../../src/controllers/ControllerDisconnection.php",
      type : 'POST',
      success: function(response){
        if(response){
            window.location.replace('./../../index.php')
        }
    }});
  });
});
$(document).ready(function(){
  $('#add-product-form').on('submit', function(event){
    event.preventDefault();

    var form = document.getElementById('add-product-form');
    formData = new FormData(form);
    formData.append('action','addNewProduct');

    $.ajax({
      url: "./../../src/controllers/ProductController.php",
      type : 'POST',
      processData: false,
      contentType: false,
      data : formData,
      dataType:'json',
      success: function(response){
        console.log(response);
    }});
  });
});
