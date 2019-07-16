$(document).ready(function(){
    $.ajax({
        url: "/busca",
        method: 'GET',
        dataType: 'json',
        async: true,
    }).success(function(res) {
        $( "#autocomplete" ).autocomplete({
            source: res,
            minLength: 2,
            select: function( event, ui ) {
                $('#autocomplete').val(ui.item.value)
                registrarEvento(ui.item.value)
            }
        });
    });
});

function registrarEvento(evento){
    $.ajax({
        url: "/registrar",
        method: 'POST',
        dataType: 'json',
        data: {
            evento: evento,
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).success(function(res) {
        if(res.code == 200){
            $('.alert').removeClass('alert-danger');
            $('.alert').addClass('alert-success');
            $('.alert').text(res.mensagem);
            $('.alert').show();
        }
        else{
            $('.alert').removeClass('alert-success');
            $('.alert').addClass('alert-danger');
            $('.alert').text(res.mensagem);
            $('.alert').show();
        }
    });
}