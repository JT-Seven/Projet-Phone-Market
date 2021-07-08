<script>

function validatePassword(password){
    var passwordReg = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/);
    var valid = passwordReg.test(password);

    if(!valid) {
        return false;
    } else {
        return true;
    }
    
}



//element GENERAL---------------------------------------------------------------------------------------------------------------

    //Traitement generique
document.forms["NewPassword"].addEventListener("submit", function (e) {
    let Error;
    let inputs = this;
    for (let i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {

            Error = "please fill in fields";
            break;
        }
    }
    if (Error) {
        document.getElementById("GenralError").innerHTML = Error;
        e.preventDefault();
        return false;
    }
});

//element SPECIFIQUE---------------------------------------------------------------------------------------------------------------

    //spcifique au password
    document.getElementById("Password").addEventListener("input", function() {
        let = paragrapheError = document.getElementById("PasswordError");
        let = paragrapheValid = document.getElementById("PasswordValid");

        if (!validatePassword(this.value)) {
            paragrapheError.innerHTML = "Password is invalid";
            paragrapheValid.innerHTML = "";
            document.getElementById('Password').style.outlineColor = "blue";
            document.getElementById('Password').style.backgroundColor = "#ffaaa4";

        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "Password is valid";
            document.getElementById('Password').style.outlineColor = "blue";
            document.getElementById('Password').style.backgroundColor = "#b7e5b7";

        }
    });


 //specifique au deux passwords
 document.getElementById("Confirmation password").addEventListener("input", function() {
        let = paragrapheError = document.getElementById("CpasswordError");
        let = paragrapheValid = document.getElementById("CpasswordValid");
        if (this.value != document.getElementById("Password").value) {
            paragrapheError.innerHTML = "The two password do not match";
            paragrapheValid.innerHTML = "";
            document.getElementById('Confirmation password').style.outlineColor = "blue";
            document.getElementById('Confirmation password').style.backgroundColor = "#ffaaa4";


        } else {
            paragrapheValid.innerHTML = "The two password match";
            paragrapheError.innerHTML = "";
            document.getElementById('Confirmation password').style.outlineColor = "blue";
            document.getElementById('Confirmation password').style.backgroundColor = "#b7e5b7";


        }
    });
</script>