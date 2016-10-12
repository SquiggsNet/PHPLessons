function validForm(){
    if (document.forms["createNewEmployee"].firstName.value.length ==0
    || !validName(document.forms["createNewEmployee"].firstName.value,"You must a proper name, beginning with a capital letter."))
    {
        document.forms["createNewEmployee"].firstName.style.border = "1px solid red";
        return false;
    }else if (document.forms["createNewEmployee"].lastName.value.length ==0
    || !validName(document.forms["createNewEmployee"].lastName.value,"You must a proper name, beginning with a capital letter."))
    {
        document.forms["createNewEmployee"].lastName.style.border = "1px solid red";
        return false;
    }else if (document.forms["createNewEmployee"].birthDate.value.length ==0
    || !validDate(document.forms["createNewEmployee"].birthDate.value,"You must enter a valid date YYYY-MM-DD."))
    {
        document.forms["createNewEmployee"].birthDate.style.border = "1px solid red";
        return false;
    }else if (document.forms["createNewEmployee"].gender.value.length ==0
    || !validGender(document.forms["createNewEmployee"].gender.value,"You must enter a valid gender, capital  M or F."))
    {
        document.forms["createNewEmployee"].gender.style.border = "1px solid red";
        return false;
    }else if (document.forms["createNewEmployee"].hireDate.value.length ==0
    || !validDate(document.forms["createNewEmployee"].hireDate.value,"You must enter a valid date YYYY-MM-DD."))
    {
        document.forms["createNewEmployee"].hireDate.style.border = "1px solid red";
        return false;
    }
    return true;
}

function validName(userInput,alertText)
{
    var myRegExp = new RegExp(/^[A-Z][a-z]*$/);

    if(myRegExp.test(userInput))
    {
        return true;
    }
    else
    {
        alert(alertText);
        return false;
    }
}

function validDate(userInput,alertText)
{
    var myRegExp = new RegExp(/^\d{4}-\d{2}-\d{2}$/);

    if(myRegExp.test(userInput))
    {
        return true;
    }
    else
    {
        alert(alertText);
        return false;
    }
}

function validGender(userInput,alertText)
{
    var myRegExp = new RegExp(/M|F/);

    if(myRegExp.test(userInput))
    {
        return true;
    }
    else
    {
        alert(alertText);
        return false;
    }
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

