$('#LogBtn').click( function () {
    event.preventDefault();
    $.ajax({
        method:"GET", //metode get ja que les dades que envia son sensibles
        url:"PHP/baseLogin.php",
        data: {
            "user": $("#UserName").val(),
            "pass": $("#Password").val()

        },
        dataType:'text',
        success:function(data){
            console.log(data);
            window.stop();

            const node = document.createElement("p");




            let text;

            if (data != "") {
                document.getElementById("message").innerText = "";
                text = "login correcte";
                console.log(text);

            let i = 0;

            $("#UserL").hide();
            $("#PasswordL").hide();
            $("#recordaUser").hide();
            $("#LogBtn").hide();
            $("#donaAlta").hide();



            document.getElementById("totlogin").innerText = "Benvingut,  " + data;

            console.log(i);

            console.log(text);


            }
            else {
                text = "Dades de loin incorrectes";

                document.getElementById("message").innerText = text;
                $("#message").css({'color': 'red', 'font-size': '20px'});
            }


        },
        error: function(jqXHR, texStatus, error){
            alert("Error" + texStatus + " " + error );
        }
    });
});