var inputs = [
        {id: "nome", regexp: new RegExp("^[a-zA-Z]{1,15}$"), output: "Il campo Nome inserito non è corretto. Rispettare il formato indicato."},
        {id: "cognome", regexp: new RegExp("^[a-zA-Z]{1,15}$"), output: "Il campo Cognome inserito non è corretto. Rispettare il formato indicato."},
        {id: "telefono", regexp: new RegExp("^[0-9]{1,10}$"), output: "Il campo Telefono inserito non è corretto. Rispettare il formato indicato."},
        {id: "email", regexp: new RegExp("^[a-zA-Z0-9.:_-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$"), output: "Il campo <span xml:lang=\"en\">Email</span> inserito non è corretto. Rispettare il formato indicato."},
        {id: "cf", regexp: new RegExp("^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$"), output: "Il campo codice fiscale inserito non è corretto. Rispettare il formato indicato."},
        {id: "password", regexp: new RegExp("((?=.*[0-9])(?=.*[a-zA-Z]).{7,15})"), output: "Il campo password inserito non è corretto. Rispettare il formato indicato."},
        {id: "telefono", regexp: new RegExp("^[0-9]{10}+$"), output: "Il campo telefono inserito non è corretto. Rispettare il formato indicato."},
    ];

var check = {};
for (i = 0; i < inputs.length; i+=1){
  document.write(inputs[i].id);
  var x=document.getElementById(inputs[i].id);
  x.addEventListener('blur',function() {alert("preso");},false);
}