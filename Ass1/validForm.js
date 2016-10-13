function validForm(){
    if (document.forms["employeeForm"].firstName.value.length ==0
    || !validName(document.forms["employeeForm"].firstName.value,"You must a proper name, beginning with a capital letter."))
    {
        document.forms["employeeForm"].firstName.style.border = "1px solid red";
        return false;
    }else if (document.forms["employeeForm"].lastName.value.length ==0
    || !validName(document.forms["employeeForm"].lastName.value,"You must a proper name, beginning with a capital letter."))
    {
        document.forms["employeeForm"].lastName.style.border = "1px solid red";
        return false;
    }else if (document.forms["employeeForm"].birthDate.value.length ==0
    || !validDate(document.forms["employeeForm"].birthDate.value,"You must enter a valid date YYYY-MM-DD."))
    {
        document.forms["employeeForm"].birthDate.style.border = "1px solid red";
        return false;
    }else if (document.forms["employeeForm"].gender.value.length ==0
    || !validGender(document.forms["employeeForm"].gender.value,"You must enter a valid gender, capital  M or F."))
    {
        document.forms["employeeForm"].gender.style.border = "1px solid red";
        return false;
    }else if (document.forms["employeeForm"].hireDate.value.length ==0
    || !validDate(document.forms["employeeForm"].hireDate.value,"You must enter a valid date YYYY-MM-DD."))
    {
        document.forms["employeeForm"].hireDate.style.border = "1px solid red";
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
    var myRegExp = new RegExp(/\b[MF]\b/);

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

