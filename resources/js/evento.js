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
               $('#autocomplete').val(ui.item.value);
            }
        });
    });
    $('.salvar').click(function(){
        $.ajax({
            url: "/registrar",
            method: 'POST',
            dataType: 'json',
            data: {
                evento: $('#autocomplete').val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).success(function(res) {

        });
    });
});