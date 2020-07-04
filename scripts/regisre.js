function selctRadio(radio) {
    if (radio == "radio1") {
        document.getElementById("radio1").checked = true;
    } else if (radio == "radio2") {
        document.getElementById("radio2").checked = true;
    }
}

function showHintIcon(name) {
    if (name == "password") {
        document.getElementById("check").hidden = false;
    } else if (name == "confirm") {
        document.getElementById("checkCon").hidden = false;
    }
}

function showHint(id, color, statue) {
    document.getElementById(id).style.borderColor = color;

    if (statue == "in") {
        document.getElementById("checkString").hidden = false;
    } else {
        document.getElementById("checkString").hidden = true;
    }

}

function showHintCon(id, color, statue) {
    document.getElementById(id).style.borderColor = color;

    if (statue == "in") {
        document.getElementById("checkStringCon").hidden = false;
    } else {
        document.getElementById("checkStringCon").hidden = true;
    }

}

function checkPassword() {
    var myInput = document.getElementById("password");
    var lowerCaseLetters = /[a-z]/g;
    if (myInput.value.match(lowerCaseLetters)) {
        document.getElementById("checkString").innerHTML = " should contain Upper letter";
        showHint('checkDiv', "#ff5a6e", "in");
        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            document.getElementById("checkString").innerHTML = " should contain 8 character";
            showHint('checkDiv', "#ff5a6e", "in");
            // Validate length
            if (myInput.value.length >= 8) {
                document.getElementById("checkString").innerHTML = " ok ";
                document.getElementById("check").src = '../img/check.svg';
                showHint('checkDiv', "#080", "in");
            } else {
                document.getElementById("checkString").innerHTML = " should contain  8 character";
                document.getElementById("check").src = '../img/wrong.svg';
                showHint('checkDiv', "#ff5a6e", "in");
            }
        } else {
            document.getElementById("checkString").innerHTML = " should contain Upper letter";
            document.getElementById("check").src = '../img/wrong.svg';
            showHint('checkDiv', "#ff5a6e", "in");
        }
    } else {
        document.getElementById("checkString").innerHTML = " should contain lower letter";
        document.getElementById("check").src = '../img/wrong.svg';
        showHint('checkDiv', "#ff5a6e", "in");
    }
}

function confirmPassword() {
    var password = document.getElementById("password");
    var confirm = document.getElementById("conPassword");
    if (password.value == confirm.value) {
        document.getElementById("checkStringCon").innerHTML = "Password Match";
        document.getElementById("checkCon").src = '../img/check.svg';
        showHintCon('checkDivCon', '#080', 'in');
    } else {
        document.getElementById("checkStringCon").innerHTML = "Password Don't Match";
        document.getElementById("checkCon").src = '../img/wrong.svg';
        showHintCon('checkDivCon', '#ff5a6e', 'in');
    }
}