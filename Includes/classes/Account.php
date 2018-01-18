
 <!--VALIDATION FUNCTIONS-->
 
 <!--CODE FOR CREATING CLASS-->

<?php
    class Account {

        private $con;
        private $errorArray;
        

        public function __construct($con) {
            $this->con = $con;
            $this->errorArray = array();
        }
        /*------------------------------------------LOGIN FUNCTION----------------------------------*/
        
        public function login($un, $pw) {
            $pw = md5($pw);
            $query = mysqli_query($this->con,"SELECT * FROM users WHERE registerUsername='$un' AND password='$pw'");

            if(mysqli_num_rows($query) == 1) {
                return true;
            }
            else {
                array_push($this->errorArray, Constants::$loginfailed);
                return false;
            }
        }
        /*------------------------------------------REGISTER FUNCTION----------------------------------*/

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            //VALIDATIONS
            $this->validateUsername($un); 
            $this->validateFirstname($fn); 
            $this->validateLastname($ln); 
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);

        /*------------------------------------------TO CHECK IF SIGN-IN WAS SUCCESSFUL----------------------------------*/

            if(empty($this->errorArray) == true) {
                //Insert in Database
                return $this->insertUserDetails($un, $fn, $ln, $em, $pw);
            }

            else {
                return false;
            }
        }

          /*------------------------------------------ERROR MESSAGE FUNCTION----------------------------------*/

        public function getError($error) { // use to check the error in this class
            if(!in_array($error, $this->errorArray)) {
                $error = "";
            }
            return "<span class='errorMessage'>$error</span>";
        }
       
          /*------------------------------------------DATAS and DETAILS TO BE INSERTED IN THE DATABASE----------------------------------*/

        private function insertUserDetails($un, $fn, $ln, $em, $pw) {
            $encrytedPw = md5($pw); // md5 method to encrypt the password, best for beginners
            $profilePic = "assets/images/profile-pics/markdauz.png";
            $date = date("Y-m-d");

            /*
            TO DEBUG ERRORs

            echo "INSERT INTO users VALUES ('', '$un', '$fn', '$ln', '$em', '$encrytedPw', '$date', '$profilePic')");
            copy the echoed result to mySQL database under SQL tab, paste it and click go, then you will find if there is any error
            
            
            */

            $result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$un', '$fn', '$ln', '$em', '$encrytedPw', '$date', '$profilePic')"); // this path matches with the structure in the mySql database. it should be in single quotes
            
            return  $result;
        }



        /*------------------------------------------PRIVATE FUNCTIONS -- these functions are only in the class Account----------------------------------*/
        private function validateUsername($un) { 
            if(strlen($un) > 25 || strlen($un) < 5) {
                array_push($this->errorArray, Constants::$usernameCharacters); // :: means we don't have an instance
                return;
            }

        // TO CHECK IF USERNAME IS TAKEN
        $checkUserNameQuery = mysqli_query($this->con, "SELECT registerUsername FROM users WHERE registerUsername='$un'");
            if(mysqli_num_rows($checkUserNameQuery) != 0) {
                array_push($this->errorArray, Constants::$usernameTaken);
                return;
            }
            

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

       
           // TO CHECK IF EMAIL IS TAKEN
           $checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'");
           if(mysqli_num_rows( $checkEmailQuery) != 0) {
               array_push($this->errorArray, Constants::$emailTaken);
               return;
           }

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