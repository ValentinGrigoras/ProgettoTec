
var input = {name: "email", 
              regexp: new RegExp("^[a-zA-Z0-9.:_-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$"), 
              error: ("L' <span xml:lang=\"en\">Email</span> non rispetta il formato indicato!")
          };

var checks = {};
onBlurValidation(input,checks);

var form = document.getElementById("signin_form");
form.onsubmit = function () {
    validazione(input, checks);
    var send = true;
    for (i in checks) {
        if (!checks[i]) {
            send = false;
        }
    }
    return send;
};