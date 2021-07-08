<script>

function validateMark(Mark){
    var MarkReg = new RegExp(/[A-Z]{2,}/);
    var valid = MarkReg.test(Mark);

    if(!valid) {
        return false;
    } else {
        return true;
    }
    
}



//element GENERAL---------------------------------------------------------------------------------------------------------------

    //Traitement generique
document.forms["UpdateMark"].addEventListener("submit", function (e) {
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

    //spcifique a mark
    document.getElementById("Mark").addEventListener("input", function() {
        let = paragrapheError = document.getElementById("MarkError");
        let = paragrapheValid = document.getElementById("MarkValid");

        if (!validateMark(this.value)) {
            paragrapheError.innerHTML = "Mark is invalid";
            paragrapheValid.innerHTML = "";
            document.getElementById('Mark').style.outlineColor = "blue";
            document.getElementById('Mark').style.backgroundColor = "#ffaaa4";

        } else {
            paragrapheError.innerHTML = "";
            paragrapheValid.innerHTML = "Mark is valid";
            document.getElementById('Mark').style.outlineColor = "blue";
            document.getElementById('Mark').style.backgroundColor = "#b7e5b7";

        }
    });



</script>