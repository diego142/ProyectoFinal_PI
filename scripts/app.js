$(document).ready(function(){

    $('#btn_form').click(function(e){

        e.preventDefault();

        var correo = $('#correo');
        var pass = $('#pass');

        if(correo.val() == ''){
            alert("Correo vacio");
            correo.addClass("is-invalid");
        }
        else if(pass.val() == ''){
            alert("Contraseña vacia");
            pass.addClass("is-invalid");
        }else{
            correo.removeClass("is-invalid");
            pass.removeClass("is-invalid");

            $.ajax({
                url: 'login.php',
                type: 'POST',
                data: {correo: correo.val(), pass: pass.val()},
                success: function(response){
                    res = JSON.parse(response);

                    if(res[0].error)
                    {
                        alert(res[0].msg);
                        correo.val('');
                        pass.val('');
                    }else{
                        alert(res[0].msg);
                        window.location.href = 'menu.php';
                    }    
                },
                error: function(){
                    alert('Problema al conectar con el servidor.');
                },
            });
        }
    });
});