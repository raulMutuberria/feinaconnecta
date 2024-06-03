$('.enllac').click( function () {
    event.preventDefault();
    $.ajax({
            method:"GET", //metode post ja que les dades que envia no son sensibles
            url:"PHP/generarSessioOfertaDesitjada.php",
            data: {
                "oferta" : $(this).data('numero')
            },
            dataType:'text',
            success:function(data){

                console.log(data);


                window.location.href = 'Oferta.php';

            },
            error: function(jqXHR, texStatus, error){
                alert("Error" + texStatus + " " + error );
            }
    });
});