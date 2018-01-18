
<!--How to link the PHP file to the HTML file, and MUST be in this order-->

<?php

include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con);

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

// FUNCTION FOR REMEMBERING INPUT VALUES

function getInputValue($name) {
    if(isset($_POST[$name])) {
        echo $_POST[$name];
    }
}

?>


<!---->
<!---->
<!-- BELOW LINE IS MAIN HTML MARK-UP -->
<!---->
<!---->
<!---->
<!---->






<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
    
    <!--JQUERY-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <title>Shuffle</title>
</head>
<body>





<!---->
<!--PHP code that will let you stay at the currentt section(login or register) when the button is click-->
<!---->


<?php
if(isset($_POST['signUpButton'])) {
    echo "<script>
    $(document).ready(function() {
            $('#loginForm').hide();
            $('#registerForm').show();
    });
    </script>";
} else {
    echo "<script>
    $(document).ready(function() {
            $('#loginForm').show();
            $('#registerForm').hide();
    });
    </script>";
}
?>



<!---->
<!---->
<!---->


<div id="background">
    <div id="logInContainer">
            <div id="inputContainer">

<!--LOGIN SECTION-->

            <form action="register.php" id="loginForm" method="POST">
                <h2>Login to your account</h2>

                <p>
            <!--ERROR MESSAGE-->    
                <?php echo $account->getError(Constants::$loginfailed);?> 
                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="loginUsername" placeholder="e.g. Mark Dauz" value="<?php getInputValue ('loginUsername')?>" required>
                </p>

                <p>
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
                </p>

                <button type="submit" name="loginButton">LOG IN</button>

<!--SWITCH TO LOGIN/SIGN-UP-->

                <div class="hasAccountText">
                    <span id="hideLogin">Don't have account yet? Signup here.</span>
                </div>

            </form>


<!--REGISTER SECTION-->

            <form action="register.php" id="registerForm" method="POST">

                <h2>Create your account</h2>

                <p>
            <!--ERROR MESSAGE-->
                <?php echo $account->getError(Constants::$usernameCharacters);?> <!--error messages should exactly match with the messages created in the Account.php-->
                <?php echo $account->getError(Constants::$usernameTaken);?>    
                <label for="registerUsername">Username</label>
                <input type="text" id="registerUsername" name="registerUsername" placeholder="e.g. Mark Dauz" value="<?php getInputValue ('registerUsername')?>" required>  <!--the value ="" is use to remember the input values-->
                </p>

                <p>
            <!--ERROR MESSAGE-->
                <?php echo $account->getError(Constants::$firstnameCharacters);?>
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" placeholder="e.g. Mark" value="<?php getInputValue ('firstName')?>" required>
                </p>

                <p>
            <!--ERROR MESSAGE-->
                <?php echo $account->getError(Constants::$lastnameCharacters);?>
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" placeholder="e.g. Dauz" value="<?php getInputValue ('lastName')?>"  required>
                </p>

                <p>
            <!--ERROR MESSAGE-->
                <?php echo $account->getError(Constants::$emailsDoNotMatch);?>
                <?php echo $account->getError(Constants::$emailInvalid);?>
                <?php echo $account->getError(Constants::$emailTaken);?>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="e.g. markdauz@gmail.com" value="<?php getInputValue ('email')?>"   required>
                </p>

                <p>
                <label for="email2">Confirm Email</label>
                <input type="email" id="email2" name="email2" placeholder="e.g. markdauz@gmail.com" value="<?php getInputValue ('email2')?>"   required>
                </p>

                <p>
            <!--ERROR MESSAGE-->
                <?php echo $account->getError(Constants::$passwordsDoNotMatch);?>
                <?php echo $account->getError(Constants::$passwordNotAlphaNumeric);?>
                <?php echo $account->getError(Constants::$passwordCharacters);?>
                <label for="registerPassword">Password</label>
                <input type="password" id="registerPassword" name="registerPassword" placeholder="Your password" required>
                </p>

                <p>
                <label for="registerPassword2">Confirm Password</label>
                <input type="password" id="registerPassword2" name="registerPassword2" placeholder="Your password" required>
                </p>

                <button type="submit" name="signUpButton">SIGN UP</button>

<!--SWITCH TO LOGIN/SIGN-UP-->

                <div class="hasAccountText">
                    <span id="hideRegister">Already have an account? Log in here.</span>
                </div>

            </form>

        </div>

        <div id="loginText">
            <h1>Get great music, right now</h1>
            <h2>Listen to loads of song for free.</h2>
            <ul>
                <li>Discover music you'll fall in love with</li>
                <li>Create your own playlists</li>
                <li>Follow artists to keep up to date</li>
            </ul>
        </div>

    </div>
</div>



<!--
<script>
this jQuery code below will show only the login form by default
    $(document).ready(function() {
            $('#loginForm').hide();
            $('#registerForm').show();
    });
</script>";
-->

<script src="assets/js/register.js"></script>



</body>
</html>