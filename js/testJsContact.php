<script>
//3e methode:
//fonction REGEX----------------------------------------------------------------------------------------------------------------
function validateEmail(email){
    var emailReg = new RegExp(/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i);
    return emailReg.test(email);

    // if(valid) {
    //     return true;
    // } else {
    //     return false;
    // }

// return valid;    
}

// function validatePassword(password){
//     var passwordReg = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/);
//     var valid = passwordReg.test(password);

//     if(!valid) {
//         return false;
//     } else {
//         return true;
//     }
    
// }



//element GENERAL---------------------------------------------------------------------------------------------------------------

    //Traitement generique
document.forms["Contact"].addEventListener("submit", function (e) {
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


    //specifique a la syntaxe de l'email
    document.getElementById("Email").addEventListener("input", function() {
        let = paragrapheError = document.getElementById("EmailError");
        let = paragrapheValid = document.getElementById("EmailValid");

        if (!validateEmail(this.value)) {
            paragrapheError.innerHTML = "Email is invalid";
            paragrapheValid.innerHTML = "";
            document.getElementById('Email').style.backgroundColor = "#ffaaa4";
            document.getElementById('Email').style.outlineColor = "blue";


        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "Email is valid";
            document.getElementById('Email').style.outlineColor = "blue";
            document.getElementById('Email').style.backgroundColor = "#b7e5b7";

        }
    });

</script>