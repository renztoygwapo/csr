function regNowVal() {
    var form = document.getElementById("RegisterForm");
    var leters = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890+";
    var f = false;
    for (var i = 1; i < 10; i++) {
        var found = false;
        for (var y = 0; y < (form.elements[i].value).length; y++) {
            for (var z = 0; z < leters.length && !found; z++) {
                if (leters.charAt(z) === (form.elements[i].value).charAt(y)) {
                    found = true;
                }
            }
        }
        if (!found) {
            var att = document.createAttribute("style");
            att.value = "border-color: red;";
            (form.elements[i]).setAttributeNode(att);
            f = true;
        } else {
            (form.elements[i]).removeAttribute("style");
        }
    }
    if(document.getElementById("RegisterForm").elements[3].value===""){
        f=true;
    }
    return !f;
}
function passType() {
    document.getElementById("passStat").removeAttribute("class");
    document.getElementById("passStat1").removeAttribute("class");
    document.getElementById("passStat1").innerHTML = "";
    var pass = document.getElementById("RegisterForm").elements[3].value;
    if (pass.length < 6) {
        document.getElementById("passStat").innerHTML = '<label class="text-danger">' +
                'Password should have morethan 6 characters.' +
                '</label>';
        return false;
    } else {
        var leters = "qwertyuiopasdfghjklzxcvbnm";
        var numbers = "1234567890";
        var foundL = false;
        var foundN = false;
        var special = false;
        var wala;
        for (var i = 0; i < pass.length; i++) {
            wala = "wala";
            for (var y = 0; y < leters.length; y++) {
                if (pass.charAt(i) === leters.charAt(y)) {
                    foundL = true;
                    wala = "naa";
                    break;
                }
            }

            for (var y = 0; y < numbers.length; y++) {
                if (pass.charAt(i) === numbers.charAt(y)) {
                    foundN = true;
                    wala = "naa";
                    break;
                }
            }
            if (wala === "wala") {

                special = true;
            }
        }
        var text = "";
        for (var y = 0; y < 56; y++) {
            text += "s";
        }


        if (foundL && foundN && special) {

            document.getElementById("passStat").innerHTML = '<label>' +
                    'Very Strong Password' +
                    '</label>' +
                    '<div class="progress progress-xs">' +
                    '   <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">' +
                    text +
                    ' </div>' +
                    '</div> ';
        } else if (foundL && foundN) {
            document.getElementById("passStat").innerHTML = '<label>' +
                    'Moderate Password' +
                    '</label>' +
                    '<div class="progress progress-xs">' +
                    '   <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">' +
                    text +
                    ' </div>' +
                    '</div> ';
        } else {
            document.getElementById("passStat").innerHTML = '<label>' +
                    'Weak Password' +
                    '</label>' +
                    '<div class="progress progress-xs">' +
                    '   <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">' +
                    text +
                    ' </div>' +
                    '</div> ';
        }
        return true;

    }
}
function repassType() {
    var pass = document.getElementById("RegisterForm").elements[3].value;
    var repass = document.getElementById("RegisterForm").elements[4].value;
    document.getElementById("passStat1").innerHTML = '';
    if (repass !== pass) {
        document.getElementById("passStat1").innerHTML = ' <label class="text-danger">' +
                'Password Not Match' +
                '</label>';
        return false;
    } else {
        document.getElementById("passStat1").innerHTML = ' <label class="text-standard">' +
                'Password Match' +
                '</label>';
        return true;
    }
}
