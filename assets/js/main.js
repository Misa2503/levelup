var registerBtn = document.querySelector('.register')
var errorMessage = document.querySelector('.error-message')

 // registerBtn.addEventListener('click', function(e) {
//      e.preventDefault();

//      var formInputs = document.querySelectorAll('.input')
//     for(var i=0; i < formInputs.length; i++) {
//          if(formInputs[i].value == ''){
//              errorMessage.innerHTML = 'Error. Input is empty'
//          }
//      }
// })

var usernameInput = document.querySelector('.input_username')
var emailInput = document.querySelector('.input_email')
var passwordInput = document.querySelector('.input_password')



registerBtn.addEventListener('click', function(e) {
    e.preventDefault();

    if(usernameInput.value == ''){
        document.querySelector('.error-message-username').innerHTML = 'Error. Input is empty.'
    }
    else{
        document.querySelector('.error-message-username').innerHTML = ''
    }
        if (emailInput.value == ''){
            document.querySelector('.error-message-email').innerHTML = 'Error. Input is empty.'
        }
        else{
            document.querySelector('.error-message-email').innerHTML = ''
        }
     if (passwordInput.value == ''){
            document.querySelector('.error-message-password').innerHTML = 'Error. Input is empty.'
        }
        else{
            document.querySelector('.error-message-password').innerHTML = ''
        }

        if(errors == 0) {
            location.href = 'register.php'
        }
        
})