$('#upload').submit(function(e){
    e.preventDefault();
    if (window.FormData === undefined) {
     alert('В вашем браузере FormData не поддерживается')
    } else {
     var formData = new FormData();
     formData.append('file', $("#image")[0].files[0]);
    
     $.ajax({
      type: "POST",
      url: 'app/upload.php',
      cache: false,
      contentType: false,
      processData: false,
      data: formData,
      dataType : 'json',
      success: function(msg){
       if (msg.error == '') {
        $("#upload").hide();
        $('#result').html(msg.success);
       } else {
        $('#result').html(msg.error);
       }
      }
     });
    }
   });