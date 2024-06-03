$.ajax({
        method:"POST", //metode post ja que les dades que envia no son sensibles
        url:"PHP/dadesOferta.php",
        dataType:'json',
        success:function(data){

            console.log(data[0].id);
            console.log(data[0].titol);//done
            console.log(data[0].imatge);//done
            console.log(data[0].descripcio);
            console.log(data[0].localitzacio);
            console.log(data[0].salari);
            console.log(data[0].web);

            let salari = data[0].salari;

            document.getElementById("imatge").setAttribute('src', data[0].imatge);
            document.getElementById("titolOferta").innerText = data[0].titol;
            document.getElementById("localitzacio").innerText = data[0].localitzacio;
            if(salari == null){
                salari = 'salari UNKNOWN';
            }
            else{
                salari = salari + "€";
            }
            document.getElementById("salari").innerText = salari;
            document.getElementById("descripcio").innerText = data[0].descripcio;
            document.getElementById("paginaWeb").setAttribute('href', data[0].web);
            document.getElementById("paginaWeb").innerText = data[0].web;


        },
        error: function(jqXHR, texStatus, error){
            alert("Error" + texStatus + " " + error );
        }
});
