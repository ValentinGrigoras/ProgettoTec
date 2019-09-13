
var inputs = [
	{name: "email", regexp: new RegExp("^[a-zA-Z0-9.:_-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$"), error: ("L' <span xml:lang=\"en\">Email</span> non &egrave; valido!")},
	{name: "password", regexp: new RegExp("((?=.*[0-9])(?=.*[a-zA-Z]).{7,15})"), error: ("La <span xml:lang=\"en\">password</span> non &egrave; valida!")},
    {name: "nome", regexp: new RegExp("^[a-zA-Z]{1,15}$"), error: ("Il nome non &egrave; valido!")},
    {name: "cognome", regexp: new RegExp("^[a-zA-Z]{1,15}$"), error: ("Il cognome non &egrave; valido!")},
    {name: "cf", regexp: new RegExp("^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$"), error: ("Il codice fiscale non &egrave; valido!")},
    {name: "telefono", regexp: new RegExp("^$|^[0-9]{10}$"), error: ("Il numero di telefono non &egrave; valido!")}
];

var checks = {};
for (i = 0; i < inputs.length; i+=1){
	onBlurValidation(inputs[i],checks);
}