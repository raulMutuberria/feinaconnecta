$.ajax({
    method:"POST", //metode post ja que les dades que envia no son sensibles
    url:"PHP/dadesTotesOfertesJSON.php",
    dataType:'json',
    success:function(data){

        console.log(data);

        let salari;

        for (let y = 0; y < 5 && y < data.length; y++) {
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

            let titols = document.getElementsByClassName("enllac");
            if (titols.length > y) {
                titols[y].innerText = data[y].titol;
            }

            let datas = document.getElementsByClassName("data");
            if (datas.length > y) {
                datas[y].innerText = data[y].localitzacio + " , " + salari;
            }
        }



    },
    error: function(jqXHR, texStatus, error){
        alert("Error" + texStatus + " " + error );
    }
});