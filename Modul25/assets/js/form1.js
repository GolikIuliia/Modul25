function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}
$('#authtorization').submit(function(e){
    e.preventDefault();
    var data = new FormData(this);
    $.ajax({
        type:'POST',
        url: 'auth/authorize',
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response){
            if(!isJson(response)){
                
                return;
            }
            console.log (response);
            var obj = jQuery.parseJSON(response);
            //console.log (response);
            if(obj['user.authed']){
                swal({
                    title: "Отлично!",
                    text: "Пользователь успешно авторизирован!",
                    icon: "success",
                }).then(() => {
                    location.reload();
                }); 
                window.location.replace("http://localhost/galery");
            } else {
                swal({
                    title: "Плохо!",
                    text: "Неверное имя пользователя или пароль!",
                    icon: "failed",
                }).then(() => {
                    location.reload();
                });
            }
            console.log (obj);
            
        },
        error: function(response, status, error){
           var errors = response.responseJSON;
           if (errors.errors) {
               errors.errors.forEach(function(data, index) {
                   var field = Object.getOwnPropertyNames (data);
                   var value = data[field];
                   var div = $("#"+field[0]).closest('div');
                   div.addClass('has-danger');
                   div.children('.form-control-feedback').text(value);
               });
           }
        }
    });
});