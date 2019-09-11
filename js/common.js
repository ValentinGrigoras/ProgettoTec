
function hasClass(element, className) {
    return (element.className).indexOf(className) > -1;
}

function removeClass(element, nomeClasse) {
    element.className = element.className.replace(new RegExp("\\b" + nomeClasse + "\\b"),"");
    if(element.className == "  "){
        element.className = "";
    }
}


function checkData(gg, mm, aaaa) {

  let isValidDate = Date.parse(gg+'/'+mm+'/'+aaaa);

  if (isNaN(isValidDate)) {

    return false;
  }
  return true;/*
    var data = anno + "-" + mese + "-" + giorno;
    var regexp = new RegExp("^[1|2][0-9]{3,3}-([1-9]|1[0|1|2])-([1-9]|[1|2][0-9]|3[0|1])$");
    if (regexp.test(data)) {
        if (giorno == 31 && (mese == 4 || mese == 6 || mese == 9 || mese == 11)){
            return false;
        }
        if (giorno > 29 && mese == 2){
            return false;
        }
        if (giorno == 29 && mese == 2 && !(anno % 4 == 0 && (anno % 100 != 0 || anno % 400 == 0))){
            return false;
        }
        return true;
    }
    return false;*/
}


function togliErrore(container) {
    var figli = container.childNodes;
    if (hasClass(figli[figli.length - 1], "error")) {
        container.removeChild(figli[figli.length - 1]);
    }
}

function mostraErrore(container, testo) {
    togliErrore(container);
    var paragraph = document.createElement("p");
    paragraph.className = "error";
    paragraph.innerHTML = testo;
    container.parentElement.appendChild(paragraph);
}

function validazione(input, check) {
    console.log("sono in validazione()");
    console.log(input);
    var i = document.getElementById(input.name);
    check[input.name] = input.regexp.test(i.value);
    alert("prima del if");
    if (check[input.name]) {
        togliErrore(i);
    } else {
        mostraErrore(i, input.error);
    }
}

function validazioneData(giorno, mese, anno, errore, check) {
    var container = document.getElementById("input_date");
    check[giorno.id] = checkData(giorno, mese, anno);
    if(check[giorno.id]){
        togliErrore(container);
    } else {
        mostraErrore(container, errore);
    }
}

function validazioneDataOnChange(giorno, mese, anno, errore, check) {
    giorno.onchange = function () {
        validazioneData(giorno, mese, anno, errore, check);
    };
    mese.onchange = function () {
        validazioneData(giorno, mese, anno, errore, check);
    };
    anno.onchange = function () {
        validazioneData(giorno, mese, anno, errore, check);
    };
}


function pulsanti(){
    if(window.innerWidth >= 830){
        var back = document.getElementById("pulsanteBack");
        var numpagina = document.getElementById("numPagina");
        var next = document.getElementById("pulsanteNext");
        if(back===null && next===null){
            numpagina.className += " vuotoSinistro vuotoDestro ";
        }
        else if(back===null){
            numpagina.className += " vuotoSinistro ";
        }
    }
}
