
 <!--VALIDATION FUNCTIONS-->
 
 <!--CREATING CLASS-->

<?php
    class Account {
        private $errorArray;

        public function __construct() {
            $this->errorArray = array();
        }

        // REGISTER FUNCTION

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            //VALIDATIONS
            $this->validateUsername($un); 
            $this->validateFirstname($fn); 
            $this->validateLastname($ln); 
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);


            // TO CHECK IF SIGN-IN WAS SUCCESSFUL

            if(empty($this->errorArray) == true) {
                //Insert in Database
                return false;
            }

            else {
                return false;
            }
        }

        //ERROR MESSAGE FUNCTION
        public function getError($error) { // use to check the error in this class
            if(!in_array($error, $this->errorArray)) {
                $error = "";
            }
            return "<span class='errorMessage'>$error</span>";
        }
       



        // PRIVATE FUNCTIONS -- these functions are only in the class Account
        private function validateUsername($un) { 
            if(strlen($un) > 25 || strlen($un) < 5) {
                array_push($this->errorArray, Constants::$usernameCharacters); // :: means we don't have an instance
                return;
            }

            // TODO: check if username exists
            

        }
        private function validateFirstname($fn) {
            if(strlen($fn) > 25 || strlen($fn) < 2) {
                array_push($this->errorArray, Constants::$firstnameCharacters);
                return;
            }

        }
        private function validateLastname($ln) {
            if(strlen($ln) > 25 || strlen($ln) < 2) {
                array_push($this->errorArray, Constants::$lastnameCharacters);
                return;
            }

        }
        private function validateEmails($em, $em2) { // this will check if the emails match
            if($em != $em2) {
                array_push($this->errorArray, Constants::$emailsDoNotMatch); 
                return;
            }

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)) { // this will check if email is in the correct format or valid(e.g., .com / .org), or not been used
                array_push($this->errorArray, Constants::$emailInvalid); 
                return;
            }

        // TODO: check if username hasn't been used

        }
        private function validatePasswords($pw, $pw2) {
             if($pw != $pw2) {
                array_push($this->errorArray, Constants::$passwordsDoNotMatch); 
                return;
             }

             if(preg_match('/[^A-Za-z0-9]/', $pw)) { // this means that if $pw is not with the range of A-Z, a-z, 0-9, then you will not accept(e.g. !, * &, etc.)
                array_push($this->errorArray, Constants::$passwordNotAlphaNumeric); 
                return;
             }

             if(strlen($pw) > 30 || strlen($pw) < 5) {
                array_push($this->errorArray, Constants::$passwordCharacters);
                return;
            }
        }

    }
?>