

<!--LOGIN BUTTON WAS PRESSED-->

<?php

if(isset($_POST['loginButton'])) { // code for pressing the login button
    //echo "login button was pressed"; testing
    $loginusername = $_POST['loginUsername'];
    $loginpassword = $_POST['loginPassword'];
    
    // LOGIN FUNCTION

    $result = $account->login($loginusername, $loginpassword);
    if ($result == true) {
        $_SESSION['userLoggedIn'] = $loginusername;
        header("Location: index.php");
    }
}

?>



