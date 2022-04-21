$(function () {
    vratiPotrazivanje();
    azuriranjePotrazivanja();
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



function azuriranjePotrazivanja() {

    $(document).on('click', '#btn_sacuvaj_izmene', function () {

        var id = $('#izmena_id').val();
        var faktura = $('#faktura_izmena').val();
        var iznos = $('#iznos_izmena').val();
        var valuta = $('#valuta_izmena').val();
        let kompanija_id = $('#kompanija_izmena').val();

        $.ajax({
            url: 'azuriranjePotrazivanja.php',
            method: 'post',
            data: {
                ID: id,
                FAKTURA: faktura,
                IZNOS: iznos,
                VALUTA: valuta,
                KOMPANIJA_ID: kompanija_id,
            },

            success: function (data) {
                alert('Azuriranje uspesno')
            }
        })
    });
}