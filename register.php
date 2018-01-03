
<!--To link the PHP file to the HTML file, and MUST be in this order-->

<?php

include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account();


include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

?>

<!---->




<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	
	<title>Shuffle</title>
</head>
<body>
<div id = "input-container">

<!--LOGIN-->

<form action="register.php" id="loginForm" method="POST">
    <h2>Login to your account</h2>

    <p>
    <label for="loginUsername">Username</label>
    <input type="text" id="loginUsername" name="loginUsername" placeholder="e.g. Mark Dauz" required>
    </p>

    <p>
    <label for="loginPassword">Password</label>
    <input type="password" id="loginPassword" name="loginUsername" required>
    </p>

    <button type="submit" name="loginButton">LOG IN</button>
</form>

<!--REGISTER-->

<form action="register.php" id="registerForm" method="POST">

    <h2>Create your account</h2>



    <p>
<!--ERROR MESSAGE-->
<?php echo $account->getError(Constants::$usernameCharacters);?> <!--error messages should exactly match with the messages created in the Account.php-->

    <label for="registerUsername">Username</label>
    <input type="text" id="registerUsername" name="registerUsername" placeholder="e.g. Mark Dauz" required>
    </p>

    <p>
<!--ERROR MESSAGE-->
<?php echo $account->getError(Constants::$firstnameCharacters);?>

    <label for="firstName">First Name</label>
    <input type="text" id="firstName" name="firstName" placeholder="e.g. Mark" required>
    </p>

    <p>
<!--ERROR MESSAGE-->
<?php echo $account->getError(Constants::$lastnameCharacters);?>

    <label for="lastName">Last Name</label>
    <input type="text" id="lastName" name="lastName" placeholder="e.g. Dauz" required>
    </p>

    <p>
<!--ERROR MESSAGE-->
<?php echo $account->getError(Constants::$emailsDoNotMatch);?>
<?php echo $account->getError(Constants::$emailInvalid);?>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="e.g. markdauz@gmail.com" required>
    </p>

    <p>
    <label for="email2">Confirm Email</label>
    <input type="email" id="email2" name="email2" placeholder="e.g. markdauz@gmail.com" required>
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
</form>

</div>
</body>
</html>