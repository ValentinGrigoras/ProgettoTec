

var inputs = [
	{name: "email", regexp: new RegExp("^[a-zA-Z0-9.:_-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$"), error: ("L' <span xml:lang=\"en\">Email</span> non &egrave; valido!")},
	{name: "nome", regexp: new RegExp("^[a-zA-Z ]{1,15}$"), error: ("Il nome non &egrave; valido!")},
    {name: "cognome", regexp: new RegExp("^[a-zA-Z ]{1,15}$"), error: ("Il cognome non &egrave; valido!")},
    {name: "messaggio", regexp: new RegExp("^[a-zA-Z0-9,.?:;! ]{6,}$"), error: ("Messaggio troppo corto o non valido!")}
];

var checks = {};
for (i = 0; i < inputs.length; i+=1){
	onBlurValidation(inputs[i],checks);
}

var form = document.getElementById("contact_us_form");
form.onsubmit = function () {
    for (i = 0; i < inputs.length; i+=1){
        validazione(inputs[i], checks);
    }
    var send = true;
    for (i in checks) {
        if (!checks[i]) {
            send = false;
        }
    }
    return send;
};
