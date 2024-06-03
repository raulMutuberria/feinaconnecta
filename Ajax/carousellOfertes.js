$.ajax({
    method:"POST", //metode post ja que les dades que envia no son sensibles
    url:"PHP/dadesTotesOfertesJSON.php",
    dataType:'json',
    success:function(data){

        console.log(data);

        let salari;

        for (let y = 0; y < 3 && y < data.length; y++) {
            let salari = data[y].salari;

            if (salari == null) {
                salari = 'salari UNKNOWN';
            } else {
                salari = salari + "€";
            }

            let imatges = document.getElementsByClassName("imatge");
            if (imatges.length > y) {
                imatges[y].setAttribute('src', data[y].imatge);
            }

            let datas = document.getElementsByClassName("titol");
            if (datas.length > y) {
                datas[y].innerText = data[y].titol;
            }

            let localitzacions = document.getElementsByClassName("localitzacio");
            if (localitzacions.length > y) {
                localitzacions[y].innerText = data[y].localitzacio;
            }

            let salaris = document.getElementsByClassName("salari");
            if (salaris.length > y) {
                salaris[y].innerText = salari;
            }

            let descripcions = document.getElementsByClassName("descripcio");
            if (descripcions.length > y) {
                descripcions[y].innerText = data[y].descripcio;
            }

        }



    },
    error: function(jqXHR, texStatus, error){
        alert("Error" + texStatus + " " + error );
    }
});