(function($) {
    $('#btnIngresar').on('click', function() {
        var user = $('#txtUsuario').val();
        var pass = $('#inputpass').val();
        $.ajax({
            url: 'config/validar.php',
            type: 'POST',
            data: { user: user, pass: pass },
            success: function(r) {
                if (r == 1) {
                    window.location = 'pages/leftbar.php';
                } else {
                    alert(r);
                }
            }
        });
    });
    $('#botonautoest').on('click', function() {
        $('#form-registro input').each(function() {
            var val = $(this).val();
            $(this).removeClass('border-danger');
            if (val == '') {
                $(this).addClass('border-danger');
                alert('Ingrese dato');
                return false;
            }
        });

        var datos = $('#form-registro').serialize();
        $.ajax({
            url: 'guarda.php',
            type: 'POST',
            data: datos,
            success: function(r) {
                if (r == 1) {
                    window.location = 'guarda.php';
                } else {
                    alert(r);
                }
            }
        });
    });

})(jQuery);