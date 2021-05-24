// validation formulaire
const formConec = document.getElementById('connexion');
// let small = document.getElementById('erreur');
// let alertMsg = document.querySelector('#erreur #alert__msg');
// let alert__icon = document.querySelector('#erreur #alert__icon');

//Class validation input UserEmail
const validConnecEmail = function(inputConnecEmail){
    // Creation de la reg pour validation email
    const emailRegExp = new RegExp(
        '^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$', 'g'
    );
    // valeur de test de l'input email
    const testEmail = emailRegExp.test(inputConnecEmail.value.trim());

    // test de l'expression regulière
    if (testEmail){
        setSuccess('email',formConec);
        return true;
    }else{
        setError('email',formConec);
        alertMsg.innerHTML = 'Adresse non valide';
        return false;
    }
}

//Ecoute input userEmail
formConec.connecEmail.addEventListener('change', function () {
    validConnecEmail(this);
});

//Ecouter la soumission  du formulaire d'connexion
formConec.addEventListener('submitConec', function(e){
    e.preventDefault();
    if(validConnecEmail(formConec.connecEmail)  && validPassword(formConec.password)){
        formConec.submit();
    }
});