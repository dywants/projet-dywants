// validation formulaire
(function () {
    const form = document.getElementById('inscription');
    const small = document.getElementById('erreur');
    const alertMsg = document.querySelector('#erreur #alert__msg');
    const alert__icon = document.querySelector('#erreur #alert__icon');
    const btn = document.querySelector('form .btn__log');

// fonction setError input value
    const setError = function(input, fieldsForm){
        fieldsForm[input].classList.add('error__input');
        fieldsForm[input].classList.remove('success__input');
        small.classList.add('alert__warning');
        small.classList.remove('alert__medium');
        small.classList.remove('alert__success');
        small.classList.add('show');
        alert__icon.classList.add('fa-bomb');
        alert__icon.classList.remove('fa-check-circle');
        alert__icon.classList.remove('fa-exclamation-triangle');
    };

//function success input value
    const setSuccess = function(input,fieldsForm){
        fieldsForm[input].classList.add('success__input');
        fieldsForm[input].classList.remove('error__input');
        small.classList.remove('alert__warning');
        small.classList.remove('alert__medium');
        small.classList.add('alert__success');
        small.classList.remove('show');
        alert__icon.classList.remove('fa-bomb');
        alert__icon.classList.add('fa-check-circle');
    }

// Class validation username
    const validUsername = function(inputUsername,fieldsForm){
        // Reg pour validation firstname
        // const usernameRegExp = /^([a-zA-Z-\s]{4,18})+$/g;
        let usernameRegExp = /^[a-zA-Z]{4,18}[0-9]{0,3}$/g;
        let testUsername = usernameRegExp.test(inputUsername.value.trim());
        if(testUsername === false || inputUsername.value.length > 18 ){
            setError('username', fieldsForm);
            alertMsg.innerHTML = 'Le pseudo doit comporter uniquement des letttres, des chiffres et au moins 4 caratères';
            return false;
        }else{
            setSuccess('username',fieldsForm);
            // btn.removeAttribute('disabled', ``);
            return true;
        }
    };

// Class validation input email
    const validEmail = function(inputEmail,fieldsForm){
        // Creation de la reg pour validation email
        const emailRegExp = new RegExp(
            '^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$', 'g'
        );
// valeur de test de l'input email
        let testEmail = emailRegExp.test(inputEmail.value.trim());

        // test de l'expression regulière
        if (testEmail){
            setSuccess('email',fieldsForm);
            return true;
        }else{
            setError('email',fieldsForm);
            alertMsg.innerHTML = 'Adresse non valide';
            return false;
        }
    };

// Class validation pasword
    const validPassword = function(inputPassword,fieldsForm){
        let passLowRegex = new RegExp("(?=.{8}).*", "g");
        let passMediumRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)[a-zA-Z\\d]{10}$", "g");
        let passStrongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)(?=.*[@$!%*?&])[A-Za-z\\d@$!%*?&]{11,16}$", "g");
        let msg;
        let valid = false;

        // variable test password
        let testPasswordLow = passLowRegex.test(inputPassword.value.trim());
        let testPasswordMedium = passMediumRegex.test(inputPassword.value.trim());
        let testPasswordStrong = passStrongRegex .test(inputPassword.value.trim());

        //Indicator Password
        const indicator = document.querySelector('.indicator');
        const weak = document.querySelector('.weak');
        const medium = document.querySelector('.medium');
        const strong = document.querySelector('.strong');

        // Au moins 8 caractères
        if(testPasswordLow === false){
            weak.classList.remove('current');
            indicator.classList.remove('show');
            medium.classList.remove('current');
            strong.classList.remove('current');
            msg = 'Le mot de passe doit contenir au moins 8 caracteres';
            valid = false;
        } else if(testPasswordMedium){
            // show and hide div indicator
            weak.classList.add('current');
            indicator.classList.add('show');
            medium.classList.add('current');
            strong.classList.remove('current');
            msg = 'Mot de passe valide mais moyen';
            valid = true;
        }else if(testPasswordStrong){
            // show and hide div indicator
            weak.classList.add('current');
            indicator.classList.add('show');
            medium.classList.add('current');
            strong.classList.add('current');
            msg = 'Mot de passe valide et fort';
            valid = true;
        }else{
            // show and hide div indicator
            indicator.classList.add('show');
            weak.classList.add('current');
            medium.classList.remove('current');
            strong.classList.remove('current');
            msg = " Mot de passe valide mais faible essayez d'utiliser des chiffres, des majuscules et des caractère speciaux";
            valid = true;
        }
        // affichage

        // test de l'expression regulière
        if (valid){
            setSuccess('password',fieldsForm);
            small.classList.add('show');
            if (valid === testPasswordLow){
                small.classList.remove('alert__success');
                small.classList.add('alert__warning');
                alertMsg.innerHTML = msg;
                return true;
            }else if(valid === testPasswordMedium){
                small.classList.add('alert__medium');
                small.classList.remove('alert__success');
                small.classList.remove('alert__warning');
                alert__icon.classList.remove('fa-bomb');
                alert__icon.classList.remove('fa-check-circle');
                alert__icon.classList.add('fa-exclamation-triangle');
                alertMsg.innerHTML = msg;
                return true;
            } else {
                alertMsg.innerHTML = msg;
                return true;
            }

        }else{
            setError('password',fieldsForm);
            alertMsg.innerHTML = msg;
            return false;
        }
    }

// Class validation password confirm
    const validPasswordConfirm = function(inputPasswordConfirm,fieldsForm){
        let passwordConfirm = inputPasswordConfirm.value.trim();
        let password = form.password.value.trim();

        if (passwordConfirm  !== password){
            setError('passwordConfirm',fieldsForm);
            alertMsg.innerHTML = 'Les mots de passe ne correspondent pas';
            return false;
        }else{
            setSuccess('passwordConfirm',fieldsForm);
            return true;
        }
    }

// Ecoute input username
    form.username.addEventListener('change', function(){
        validUsername(this,form);
    });

// Ecoute input email
    form.email.addEventListener('change', function(){
        validEmail(this,form);
    });

// Ecoute input password
    form.password.addEventListener('change', function(){
        validPassword(this,form);
    });

// Ecoute input password Confirm
    form.passwordConfirm.addEventListener('change', function(){
        validPasswordConfirm(this,form);
    });
    
//Vefication All fields
//     let $fieldsAllInput = validUsername(form.username) && validEmail(form.email) && validPassword(form.password) && validPasswordConfirm(form.passwordConfirm);
//     const validationFields = function (button) {
//         if ($fieldsAllInput) {
//             button.classList.remove('btn__disabled');
//             button.classList.add('btn__active');
//             console.log($fieldsAllInput);
//         } else {
//             button.classList.add('btn__disabled');
//             button.classList.remove('btn__active');
//         }
//     }
//     console.log(validationFields(btn));

//Ecouter la soumission  du formulaire d'inscription
    form.addEventListener('submitInsc', function(e){
        e.preventDefault();
        if(validUsername(form.username) && validEmail(form.email) && validPassword(form.password) && validPasswordConfirm(form.passwordConfirm)){
            form.submit();
            return true;
        }
    });
})();

