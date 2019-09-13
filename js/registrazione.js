function validaConfermaPass(pass,cpass,check,error){
	check[cpass.value] = pass.value == cpass.value ? true : false;
    if(check[cpass.value]){
        togliErrore(cpass.parentNode);
    } else {
        mostraErrore(cpass.parentNode, error);
    }
}
function onBlurConfirmValidation(confermapass,pass,check,error){
	var cpass = document.getElementById(confermapass);
	var pass = document.getElementById(pass);

    cpass.onblur = function() {validaConfermaPass(pass,cpass,check,error)};
}
var inputs = [
	{name: "email", regexp: new RegExp("^[a-zA-Z0-9.:_-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$"), error: ("L' <span xml:lang=\"en\">Email</span> non &egrave; valido!")},
	{name: "password", regexp: new RegExp("((?=.*[0-9])(?=.*[a-zA-Z]).{7,15})"), error: ("La <span xml:lang=\"en\">password</span> non &egrave; valida!")},
    {name: "nome", regexp: new RegExp("^[a-zA-Z ]{1,15}$"), error: ("Il nome non &egrave; valido!")},
    {name: "cognome", regexp: new RegExp("^[a-zA-Z ]{1,15}$"), error: ("Il cognome non &egrave; valido!")},
    {name: "cf", regexp: new RegExp("^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$"), error: ("Il codice fiscale non &egrave; valido!")},
    {name: "telefono", regexp: new RegExp("^$|^[0-9]{10}$"), error: ("Il numero di telefono non &egrave; valido!")}
];

var checks = {};
for (i = 0; i < inputs.length; i+=1){
	onBlurValidation(inputs[i],checks);
}

var giorno = document.getElementById("giorno");
var mese = document.getElementById("mese");
var anno = document.getElementById("anno");
var erroredata = "La data di nascita non é valida!";
onChangeDateValidation(giorno, mese, anno, erroredata, checks);

var confermapass =document.getElementById("confermapassword");
var errorecpass="La password non coincide!";

onBlurConfirmValidation("confermapassword","password",checks,errorecpass);


var form = document.getElementById("signup_form");
form.onsubmit = function () {
    for (i = 0; i < inputs.length; i+=1){
        validazione(inputs[i], checks);
    }
    dateValidation(giorno, mese, anno, erroredata, checks);
 	onBlurConfirmValidation("confermapassword","password",checks,errorecpass);

    var send = true;
    for (i in checks) {
        if (!checks[i]) {
            send = false;
            console.log(send);
        }
    }
    return send;
};