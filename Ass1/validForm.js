function validForm(){
    if (document.forms["employeeForm"].firstName.value.length ==0
    || !validName(document.forms["employeeForm"].firstName.value,"You must a proper name, beginning with a capital letter."))
    {
        var spanWarning = document.getElementById("firstWarning");
        spanWarning.innerHTML = "You must a proper name, beginning with a capital letter!";
        spanWarning.style.color = "red";
        document.forms["employeeForm"].firstName.style.border = "1px solid red";
        return false;
    }else if (document.forms["employeeForm"].lastName.value.length ==0
    || !validName(document.forms["employeeForm"].lastName.value,"You must a proper name, beginning with a capital letter."))
    {
        var spanWarning = document.getElementById("lastWarning");
        spanWarning.innerHTML = "You must a proper name, beginning with a capital letter!";
        spanWarning.style.color = "red";
        document.forms["employeeForm"].lastName.style.border = "1px solid red";
        return false;
    }else if (document.forms["employeeForm"].birthDate.value.length ==0
    || !validDate(document.forms["employeeForm"].birthDate.value))
    {
        var spanWarning = document.getElementById("birthWarning");
        spanWarning.innerHTML = "You must enter a valid date YYYY-MM-DD!";
        spanWarning.style.color = "red";
        document.forms["employeeForm"].birthDate.style.border = "1px solid red";
        return false;
    }else if (document.forms["employeeForm"].gender.value.length ==0
    || !validGender(document.forms["employeeForm"].gender.value))
    {
        var spanWarning = document.getElementById("genderWarning");
        spanWarning.innerHTML = "You must enter a valid gender, capital  M or F!";
        spanWarning.style.color = "red";
        document.forms["employeeForm"].gender.style.border = "1px solid red";
        return false;
    }else if (document.forms["employeeForm"].hireDate.value.length ==0
    || !validDate(document.forms["employeeForm"].hireDate.value))
    {
        var spanWarning = document.getElementById("hireWarning");
        spanWarning.innerHTML = "You must enter a valid date YYYY-MM-DD!";
        spanWarning.style.color = "red";
        document.forms["employeeForm"].hireDate.style.border = "1px solid red";
        return false;
    }
    return true;
}

function validName(userInput)
{
    var myRegExp = new RegExp(/^[A-Z][a-z]*$/);

    if(myRegExp.test(userInput))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function validDate(userInput)
{
    var myRegExp = new RegExp(/^\d{4}-\d{2}-\d{2}$/);

    if(myRegExp.test(userInput))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function validGender(userInput)
{
    var myRegExp = new RegExp(/\b[MF]\b/);

    if(myRegExp.test(userInput))
    {
        return true;
    }
    else
    {
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

