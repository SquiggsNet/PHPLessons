function validForm(){
    var blue = document.forms["createUser"].acceptTermsConditions.checked;
    if (document.forms["createUser"].firstName.value.length ==0){
        document.forms["createUser"].firstName.style.border = "1px solid red";
        return false;
    }else if (document.forms["createUser"].lastName.value.length ==0){
        document.forms["createUser"].lastName.style.border = "1px solid red";
        return false;
    }else if (document.forms["createUser"].addressMain.value.length ==0){
        document.forms["createUser"].addressMain.style.border = "1px solid red";
        return false;
    }else if (document.forms["createUser"].addressSecondary.value.length ==0){
        document.forms["createUser"].addressSecondary.style.border = "1px solid red";
        return false;
    }else if (document.forms["createUser"].email.value.length ==0){
        document.forms["createUser"].email.style.border = "1px solid red";
        return false;
    }else if (!document.forms["createUser"].acceptTermsConditions.checked){
        var spanWarning = document.getElementById("termsConditionsWarning");
        spanWarning.innerHTML = "You must accept the terms and conditions!";
        spanWarning.style.color = "red";
        return false;
    }

    return true;
}

function hilightItalicText(fieldID){
    var node = document.getElementById(fieldID);
    node.style.backgroundColor = "yellow";
    node.parentElement.style.textDecoration = "underline";
    node.style.border = "1px solid grey";

    if(node != null){
        node.style.fontStyle = "italic";
    }
}

function normalText(fieldID){
    var node = document.getElementById(fieldID);
    node.style.backgroundColor = "white";
    node.parentElement.style.textDecoration = "none";
    if(node != null){
        node.style.fontStyle = "normal";
    }
}

