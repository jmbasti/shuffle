/*-------------------HIDE / SHOW LOGIN AND SIGN UP (JQUERY)-----------------------*/

$(document).ready(function() {

//TO HIDE

    $('#hideLogin').click(function(){
        $('#loginForm').hide();
        $('#registerForm').show();
    });

//TO SHOW

    $('#hideRegister').click(function(){
        $('#loginForm').show();
        $('#registerForm').hide();
});
});



/*-------------------HIDE / SHOW LOGIN AND SIGN UP (JS)-----------------------*/

/*
var loginForm = document.getElementById('loginForm');

var registerForm = document.getElementById('registerForm');



var loginFormClick = document.getElementById('hideLogin');
loginFormClick.addEventListener('click', function(){
    loginForm.style.display = 'none';
    registerForm.style.display = 'block';
});

var registerFormClick = document.getElementById('hideRegister');
registerFormClick.addEventListener('click', function(){
    loginForm.style.display = 'block';
    registerForm.style.display = 'none';
});

*/

















