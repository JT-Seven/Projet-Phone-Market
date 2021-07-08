<script>
//3e methode:
//fonction REGEX----------------------------------------------------------------------------------------------------------------
function validateEmail(email){
    var emailReg = new RegExp(/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i);
    var valid = emailReg.test(email);

    if(!valid) {
        return false;
    } else {
        return true;
    }
}

function validateName(name){
    var nameReg = new RegExp(/^[a-zA-Z-àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,30}/);
    var valid = nameReg.test(name);

    if(!valid) {
        return false;
    } else {
        return true;
    }  
}

function validateName2(name){
    var nameReg2 = new RegExp(/[~`_ !@#$%\^&*()+=\\[\]\\';,/{}|\\":<>\?]/g);
    var valid2 = nameReg2.test(name);

    if(!valid2) {
        return false;
    } else {
        return true;
    }  
}

// function validateZipcode(zipcode){
//     var zipcodeReg = new RegExp(/^(?:[0-8]\d|9[0-8])\d{3}$/);
//     var valid = zipcodeReg.test(zipcode);

//     if(!valid) {
//         return false;
//     } else {
//         return true;
//     }
// }
function validateAddress(address){
    var addressReg = new RegExp(/\d+\s[A-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+\s[A-z]+/g);
    var valid = addressReg.test(address);

    if(!valid) {
        return false;
    } else {
        return true;
    }
}

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
    
    //spcifique au name
    document.getElementById("Name").addEventListener("input", function() {
        let = paragrapheValid = document.getElementById("NameValid");
        let = paragrapheError = document.getElementById("NameError");

        if (!validateName(this.value) || validateName2(this.value)) {
            paragrapheError.innerHTML = "Name is invalid";
            paragrapheValid.innerHTML = "";
            document.getElementById('Name').style.outlineColor = "blue";
            document.getElementById('Name').style.backgroundColor = "#ffaaa4";
            

        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "Name valid";
            document.getElementById('Name').style.outlineColor = "blue";
            document.getElementById('Name').style.backgroundColor = "#b7e5b7";



        }
    });
    
    //specifique au surname
    document.getElementById("Surname").addEventListener("input", function() {
        let = paragrapheError = document.getElementById("SurnameError");
        let = paragrapheValid = document.getElementById("SurnameValid");

        if (!validateName(this.value) || validateName2(this.value)) {
            paragrapheError.innerHTML = "Surname is invalid";
            paragrapheValid.innerHTML = "";
            document.getElementById('Surname').style.outlineColor = "blue";
            document.getElementById('Surname').style.backgroundColor = "#ffaaa4";

        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "Surname is valid";
            document.getElementById('Surname').style.outlineColor = "blue";
            document.getElementById('Surname').style.backgroundColor = "#b7e5b7";

        }
    });
  
    //specifique a l'address
    document.getElementById("Address").addEventListener("input", function() {
        let = paragrapheError = document.getElementById("AddressError");
        let = paragrapheValid = document.getElementById("AddressValid");

        if (!validateAddress(this.value)) {
            paragrapheError.innerHTML = "Address is invalid";
            paragrapheValid.innerHTML = "";
            document.getElementById('Address').style.outlineColor = "blue";
            document.getElementById('Address').style.backgroundColor = "#ffaaa4";
        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "Address is valid";
            document.getElementById('Address').style.outlineColor = "blue";
            document.getElementById('Address').style.backgroundColor = "#b7e5b7";
        }
    });

    // specifique au deux emails
    document.getElementById("confirmation email").addEventListener("input", function() {
        let = paragrapheError = document.getElementById("CemailError");
        let = paragrapheValid = document.getElementById("CemailValid");

        if (this.value != document.getElementById("Email").value) {
            paragrapheError.innerHTML = "The two emails do not match";
            paragrapheValid.innerHTML = "";
            document.getElementById('confirmation email').style.outlineColor = "blue";
            document.getElementById('confirmation email').style.backgroundColor = "#ffaaa4";

        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "The two emails match";
            document.getElementById('confirmation email').style.outlineColor = "blue";
            document.getElementById('confirmation email').style.backgroundColor = "#b7e5b7";

        }
    });

</script>