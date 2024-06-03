
//clacular/ procesar la hora en tiempo real
setInterval(tiempo,500);

function tiempo() {
    let hora = new Date();
    let data = new Date();


    let h = hora.getHours();
    let m = hora.getMinutes();
    let s = hora.getSeconds();

    let horac = elNumero(h) + ":" + elNumero(m) + ":" + elNumero(s);

    document.getElementById("data").innerText = ("Hora: " + horac +  "  Data: " +eldia(data.getDay()) + " " + data.getDate() + " de " + elmes(data.getMonth()) + " del " + data.getFullYear());
}

function elNumero(h){
    let num;

    switch (h) {
        case 0: num = "0" + h.toString();
            break;
        case 1: num = "0" + h.toString();
            break;
        case 2: num = "0" + h.toString();
            break;
        case 3: num = "0" + h.toString();
            break;
        case 4: num = "0" + h.toString();
            break;
        case 5: num = "0" + h.toString();
            break;
        case 6: num = "0" + h.toString();
            break;
        case 7: num = "0" + h.toString();
            break;
        case 8: num = "0" + h.toString();
            break;
        case 9: num = "0" + h.toString();
            break;
        default: num = h.toString();
            break;
    }
    return num;
}

function eldia(u){
    let diaset;

    switch (u){
        case 1: diaset = 'Dilluns';
            break;
        case 2: diaset = 'Dimarts';
            break;
        case 3: diaset = 'Dimecres';
            break;
        case 4: diaset = 'Dijous';
            break;
        case 5: diaset = 'Divendres';
            break;
        case 6: diaset = 'Dissabte';
            break;
        case 7: diaset = 'Diumenge';
            break;
    }

    return diaset;
}
function elmes(u){
    let diaset;

    switch (u){
        case 1: diaset = 'Gener';
            break;
        case 2: diaset = 'Febrer';
            break;
        case 3: diaset = 'Març';
            break;
        case 4: diaset = 'Abril';
            break;
        case 5: diaset = 'Maig';
            break;
        case 6: diaset = 'Juny';
            break;
        case 7: diaset = 'Juliol';
            break;
        case 8: diaset = 'Agost';
            break;
        case 9: diaset = 'Septembre';
            break;
        case 10: diaset = 'Octubre';
            break;
        case 11: diaset = 'Novembre';
            break;
        case 12: diaset = 'Desembre';
            break;
    }

    return diaset;
}