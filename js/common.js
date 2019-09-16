
function hasClass(element, nomeClasse) {
    return ("" + element.className+  "").indexOf("" + nomeClasse + "") > -1;
}


function isValidDate(dateString)
{ 
    // First check for the pattern
    var regex_date = /^\d{4}\-\d{1,2}\-\d{1,2}$/;
    console.log(dateString);
    if(!regex_date.test(dateString))
    {
        console.log("regexp false");
        return false;
    }
    console.log("regexo superata");
    // Parse the date parts to integers
    var parts   = dateString.split("-");
    var day     = parseInt(parts[2], 10);
    var month   = parseInt(parts[1], 10);
    var year    = parseInt(parts[0], 10);
    // Check the ranges of month and year
    if(year < 1000 || year > 3000 || month == 0 || month > 12)
    {
        return false;
    }
    var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];
    // Adjust for leap years
    if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
    {
        monthLength[1] = 29;
    }
    // Check the range of the day
    return day > 0 && day <= monthLength[month - 1];
}


function togliErrore(container) {
    var figli = container.childNodes
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
function dateValidation(giorno, mese, anno, errore, check) {
    var container = document.getElementById("input_date");
    check[giorno.id] = isValidDate(anno.value+'-'+mese.value+'-'+giorno.value);
    if(check[giorno.id]){
        togliErrore(container);
    } else {
        mostraErrore(container, errore);
    }
}

function onChangeDateValidation(giorno, mese, anno, errore, check) {
    giorno.onchange = function () {
        dateValidation(giorno, mese, anno, errore, check);
    };
    mese.onchange = function () {
        dateValidation(giorno, mese, anno, errore, check);
    };
    anno.onchange = function () {
        dateValidation(giorno, mese, anno, errore, check);
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
