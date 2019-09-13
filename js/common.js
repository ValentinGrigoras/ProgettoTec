
function hasClass(element, nomeClasse) {
    return ("" + element.className+  "").indexOf("" + nomeClasse + "") > -1;
}


function checkData(gg, mm, aaaa) {

  let isValidDate = Date.parse(gg+'/'+mm+'/'+aaaa);

  if (isNaN(isValidDate)) {

    return false;
  }
  return true;
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
    container.appendChild(paragraph);
}

function validazione(input, check) {
    var i = document.getElementById(input.name);
    check[input.name] = input.regexp.test(i.value);
    if (check[input.name]) {
        togliErrore(i.parentNode);
    } else {
        mostraErrore(i.parentNode, input.error);
    }
}
function onBlurValidation(input, check){
    var i = document.getElementById(input.name);
    i.onblur = function () {
        validazione(input, check);
    };
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
