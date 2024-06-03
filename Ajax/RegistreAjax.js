$('#signupBTN').click( function () {
    event.preventDefault();
    $.ajax({
        method:"GET", //metode get ja que les dades que envia son sensibles
        url:"PHP/baseRegistre.php",
        data: {
            "name": $("#firstname").val(),
            "surname": $("#lastname").val(),
            "email": $("#emailN").val(),
            "user": $("#nomusuariN").val(),
            "pass": $("#passwordN").val(),
            "passValidation": $("#passwordNV").val()

        },
        dataType:'text',
        success:function(data){
            window.stop();


            if (data == ""){

                $("#nomsRegistre").hide();
                $("#correuElectronic").hide();
                $("#contrasenyesRegistre").hide();
                $("#botoSignupRegistre").hide();
                $("#iniciaSessio").hide();


                document.getElementById("formulari").innerText = "Benvingut, " + $("#nomusuariN").val();
                document.getElementById("formulari").style.color = "white";
                $("#formulari").css({'padding':'3em'})
                let u = document.createElement("a");
                u
                u.innerText = "Go MainPage";
                u.href = "index.php";
                document.getElementById("yellowContainer").appendChild(u);

            }
            else{
                document.getElementById("Rmessage").innerText = data;
                $("#Rmessage").css({'color': 'red', 'font-size': '20px'});
            }




        },
        error: function(jqXHR, texStatus, error){
            alert("Error" + texStatus + " " + error );
        }
    });
});