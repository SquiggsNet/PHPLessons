function validForm(){
    if (document.forms["films"].search.value.length ==0){
        alert("You did not enter a search");
        return false;
    }else{
        return true;
    }
}