 <!--CREATING CONSTANTS-->

<?php
class Constants {

    // REGISTER ERROR MESSAGE

    public static $passwordsDoNotMatch = "Your passwords don't match";
    public static $passwordNotAlphaNumeric = "Your password can only contain numbers and letters";
    public static $passwordCharacters = "Your password must be between 5 and 30 characters";
    public static $emailInvalid = "Email is invalid";
    public static $emailsDoNotMatch = "Your emails don't match";
    public static $lastnameCharacters = "Your last name must be between 2 and 25 characters";
    public static $firstnameCharacters = "Your first name must be between 2 and 25 characters";
    public static $usernameCharacters = "Your user name must be between 5 and 25 characters";
    public static $emailTaken = "This email already exists";
    public static $usernameTaken = "This user name already exists";

    // LOGIN ERROR MESSAGE

    public static $loginfailed = "Your username or password was incorrect";

}
?>