/*
$(document).ready(function() {
    $("#formvalidate").validate();
});
var texto = document.getElementById('idTextarea').value;
*/

$(document).ready(function() {
    $('#btnSend').click(function(){
        var texto = document.getElementById('message').value;
        if(texto==''){
            alert("El textarea no puede estar vacío");
        } else {
            submit();
            //$('body').append(form);
        }
    });
});



        




