<!--PHP-->

<?php
/*----------------------------------------------DRY FUNCTIONS-----------------------------------------------------*/

function sanitizeFormUserName($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
};

function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
};

function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
};


/*----------------------------------------------REGISTER BUTTON WAS PRESSED-----------------------------------------------------*/

if(isset($_POST['signUpButton'])) { // code for pressing the signup button
    //echo "signup button was pressed"; testing 'echo' is to print in the page 

//USERNAME

/*
    $username = $_POST['registerUsername']; // $ is use to create a variable in PHP
    $username = strip_tags($username);  strips HTML elements
    $username = str_replace(" ", "", $username); look for all spaces, and will replace with an empty string
*/

    $username = sanitizeFormUserName($_POST['registerUsername']);

//FIRSTNAME
/*
    $firstname = $_POST['firstName'];
    $firstname = strip_tags($firstname);
    $firstname = str_replace(" ", "", $firstname);
    $firstname = ucfirst(strtolower($firstname)); // this will uppercase the first character, then it will lowercase all characters
 */
    $firstname = sanitizeFormString($_POST['firstName']);

//LASTNAME

    $lastname = sanitizeFormString($_POST['lastName']);

//EMAIL

    $email = sanitizeFormString($_POST['email']);

//EMAIL2
    
    $email2 = sanitizeFormString($_POST['email2']);

//PASSWORD

    $password = sanitizeFormPassword($_POST['registerPassword']);

//PASSWORD2
    
    $password2 = sanitizeFormPassword($_POST['registerPassword2']);


// IF SIGN-IN WAS SUCCESSFUL, it will be re-directed to the location
    
    $wasSuccessful = $account->register($username, $firstname, $lastname, $email, $email2, $password, $password2); // we use the -> to call the function,and we have an instance of the class
    if($wasSuccessful == true) {
        header("Location: index.php");
    }









}
?>







