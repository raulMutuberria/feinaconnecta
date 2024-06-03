$('#logout').click( function () {
    event.preventDefault();
    $.ajax({
        method:"POST", //metode get ja que les dades que envia son sensibles
        url:"PHP/tancarSessioLog.php",
        dataType:'text',
        success:function(data){
            window.stop();

        console.log(data);

        window.location.href = 'index.php';

        },
        error: function(jqXHR, texStatus, error){
            alert("Error" + texStatus + " " + error );
        }
    });
});