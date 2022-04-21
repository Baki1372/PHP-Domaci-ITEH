$(function () {
    vratiPotrazivanje();
});


function vratiPotrazivanje() {

    $(document).on('click', '#btn_izmeni', function () {

        var id = $(this).attr('value');

        $.ajax({
            url: 'vratiPotrazivanje.php',
            method: 'post',
            data: { ID: id },
            dataType: 'JSON',

            success: function (data) {
                $('#izmeniPotrazivanje').modal('show');
                $('#izmena_id').val(data.id);
                $('#faktura_izmena').val(data.faktura);
                $('#iznos_izmena').val(data.iznos);
                $('#valuta_izmena').val(data.valuta);
                $('#kompanija_izmena').val(data.kompanija_id);
            }
        });
    })
}