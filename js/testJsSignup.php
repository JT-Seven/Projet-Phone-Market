<script>
    //3e methode:
    //fonction REGEX----------------------------------------------------------------------------------------------------------------
    function validateEmail(email) {
        var emailReg = new RegExp(/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i);
        var valid = emailReg.test(email);

        if (!valid) {
            return false;
        } else {
            return true;
        }

    }

    function validatePassword(password) {
        var passwordReg = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/);
        var valid = passwordReg.test(password);

        if (!valid) {
            return false;
        } else {
            return true;
        }

    }


    function validateName(name) {
        var nameReg = new RegExp(/^[a-zA-Z- àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,30}/);
        var valid = nameReg.test(name);

        if (!valid) {
            return false;
        } else {
            return true;
        }

    }

    function validateName2(name){
    var nameReg2 = new RegExp(/[~`_!@#$%\^&*()+=\\[\]\\';,/{}|\\":<>\?]/g);
    var valid2 = nameReg2.test(name);

    if(!valid2) {
        return false;
    } else {
        return true;
    }  
}

    function validateZipcode(zipcode) {
        var zipcodeReg = new RegExp(/^(?:[0-8]\d|9[0-8])\d{3}$/);
        var valid = zipcodeReg.test(zipcode);

        if (!valid) {
            return false;
        } else {
            return true;
        }

    }

    function validateAddress(address) {
        var addressReg = new RegExp(/^\d+\s[A-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+\s[A-z]/);
        var valid = addressReg.test(address);

        if (!valid) {
            return false;
        } else {
            return true;
        }

    }
    //element GENERAL---------------------------------------------------------------------------------------------------------------

    //Traitement generique
    document.forms["Sign up"].addEventListener("submit", function(e) {
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
            document.getElementById('Email').style.backgroundColor = "rgb(216 50 39)";
            document.getElementById('Email').style.outlineColor = "blue";


        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "Email is valid";
            document.getElementById('Email').style.outlineColor = "blue";
            document.getElementById('Email').style.backgroundColor = "rgb(65 222 65)";

        }
    });
    //spcifique au password
    document.getElementById("Password").addEventListener("input", function() {
        let = paragrapheError = document.getElementById("PasswordError");
        let = paragrapheValid = document.getElementById("PasswordValid");

        if (!validatePassword(this.value)) {
            paragrapheError.innerHTML = "Password is invalid";
            paragrapheValid.innerHTML = "";
            document.getElementById('Password').style.outlineColor = "blue";
            document.getElementById('Password').style.backgroundColor = "rgb(216 50 39)";

        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "Password is valid";
            document.getElementById('Password').style.outlineColor = "blue";
            document.getElementById('Password').style.backgroundColor = "rgb(65 222 65)";

        }
    });

    //spcifique au name
    document.getElementById("Name").addEventListener("input", function() {
        let = paragrapheValid = document.getElementById("NameValid");
        let = paragrapheError = document.getElementById("NameError");

        if (!validateName(this.value) || validateName2(this.value)){
            paragrapheError.innerHTML = "Name is invalid";
            paragrapheValid.innerHTML = "";
            document.getElementById('Name').style.outlineColor = "blue";
            document.getElementById('Name').style.backgroundColor = "rgb(216 50 39)";
            

        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "Name valid";
            document.getElementById('Name').style.outlineColor = "blue";
            document.getElementById('Name').style.backgroundColor = "rgb(65 222 65)";



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
            document.getElementById('Surname').style.backgroundColor = "rgb(216 50 39)";

        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "Surname is valid";
            document.getElementById('Surname').style.outlineColor = "blue";
            document.getElementById('Surname').style.backgroundColor = "rgb(65 222 65)";

        }
    });
    //specifique au ZIPCODE

    document.getElementById("zip-code").addEventListener("input", function() {
        let = paragrapheError = document.getElementById("zipcodeError");
        let = paragrapheValid = document.getElementById("zipcodeValid");

        if (!validateZipcode(this.value)) {
            paragrapheError.innerHTML = "zip code is invalid";
            paragrapheValid.innerHTML = "";
            document.getElementById('zip-code').style.outlineColor = "blue";
            document.getElementById('zip-code').style.backgroundColor = "rgb(216 50 39)";
        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "zip code is valid";
            document.getElementById('zip-code').style.outlineColor = "blue";
            document.getElementById('zip-code').style.backgroundColor = "rgb(65 222 65)";
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
            document.getElementById('Address').style.backgroundColor = "rgb(216 50 39)";
        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "Address is valid";
            document.getElementById('Address').style.outlineColor = "blue";
            document.getElementById('Address').style.backgroundColor = "rgb(65 222 65)";
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
            document.getElementById('confirmation email').style.backgroundColor = "rgb(216 50 39)";

        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "The two emails match";
            document.getElementById('confirmation email').style.outlineColor = "blue";
            document.getElementById('confirmation email').style.backgroundColor = "rgb(65 222 65)";
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
            document.getElementById('Confirmation password').style.backgroundColor = "rgb(216 50 39)";

        } else {
            paragrapheValid.innerHTML = "The two password match";
            paragrapheError.innerHTML = "";
            document.getElementById('Confirmation password').style.outlineColor = "blue";
            document.getElementById('Confirmation password').style.backgroundColor = "rgb(65 222 65)";
        }
    });
</script>