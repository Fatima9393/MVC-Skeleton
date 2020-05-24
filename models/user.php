
<?php

//Register function defined in the User class.
//This will be a 'create' function as it will be inserting a user's details into the Blogger table in the database.
//This function & insert query has been connected to the HTML registeration form and tested to see if a user can register successfully.
//For logins/logouts: will require a different query & sessions

class User {

    // we define attributes 
    private $_bloggerID;
    private $_firstname;
    private $_lastname;
    private $_username;
    private $_email;
    private $_hashcode;
    private $_datejoined;
    private $_profilephoto;
    private $_aboutme;
   
    public function __construct($firstname, $lastname, $username, $email, $hashcode, $datejoined, $profilephoto, $aboutme) {
        $this->_firstname = $firstname;
        $this->_lastname = $lastname;
        $this->_username = $username;
        $this->_email = $email;
        $this->_hashcode = $hashcode;
        $this->_datejoined = $datejoined;
        $this->_profilephoto = $profilephoto;
        $this->_aboutme = $aboutme;
    }

    public static function Register() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into Blogger(BloggerID, FirstName, LastName, Username, Email, Hashcode, DateJoined, ProfilePhoto, AboutMe) values (:BloggerID, :FirstName, :LastName, :Username, :Email, :Hashcode, :DateJoined, :ProfilePhoto, :AboutMe)");
        $req->bindParam(':BloggerID', $bloggerID);
        $req->bindParam(':FirstName', $firstname);
        $req->bindParam(':LastName', $lastname);
        $req->bindParam(':Username', $username);
        $req->bindParam(':Email', $email);
        $req->bindParam(':Hashcode', $hashcode);
        $req->bindParam(':DateJoined', $datejoined);
        $req->bindParam(':ProfilePhoto', $profilephoto);
        $req->bindParam(':AboutMe', $aboutme);


// set parameters and execute
        if (isset($_POST['FirstName']) && $_POST['FirstName'] != "") {
            $filteredFirstName = filter_input(INPUT_POST, 'FirstName', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['LastName']) && $_POST['LastName'] != "") {
            $filteredLastName = filter_input(INPUT_POST, 'LastName', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['Username']) && $_POST['Username'] != "") {
            $filteredUsername = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['Email']) && $_POST['Email'] != "") {
            $filteredEmail = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_SPECIAL_CHARS);
        } 
        if (isset($_POST['Hashcode']) && $_POST['Hashcode'] != "") {
            $filteredHashcode = filter_input(INPUT_POST, 'Hashcode', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['DateJoined']) && $_POST['DateJoined'] != "") {
            $filteredDateJoined = filter_input(INPUT_POST, 'DateJoined', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['AboutMe']) && $_POST['AboutMe'] != "") {
            $filteredAboutMe = filter_input(INPUT_POST, 'AboutMe', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        $firstname = $filteredFirstName;
        $lastname = $filteredLastName;
        $username = $filteredUsername;
        $email = $filteredEmail;
        $hashcode = $filteredHashcode;
        $datejoined = $filteredDateJoined;
        $aboutme = $filteredAboutMe;

        $req->execute();

//upload product image
        User::uploadFile($bloggerID); //? what to change to?
    }

    const AllowedTypes = ['image/jpeg', 'image/jpg'];
    const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
    public static function uploadProfilePhoto(string $bloggerID) {

        if (empty($_FILES[self::InputKey])) {
            //die("File Missing!");
            trigger_error("File Missing!");
        }

        if ($_FILES[self::InputKey]['error'] > 0) {
            trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
        }


        if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
            trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
        }

        $tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "C:/xampp/htdocs/MVC_Skeleton/views/images/";
        $destinationFile = $path . $title . '.jpeg';

        if (!move_uploaded_file($tempFile, $destinationFile)) {
            trigger_error("Handle Error");
        }

        //Clean up the temp file
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }
    }

    public function getBloggerID() {
        $this->_bloggerID = $bloggerID;
    }

    public function getUsername() {
        $this->_username = $username;
    }
   
    public function login() {
        
    }
    
    public function logout() {
        
    }
} 
  
//Functions we may need if we create an admin user, or if we decide to make our current blogger a normal blogger user as well as an admin with a range of powers over the blog:

//*All users
//*Find users
//*Add users
//*Update users
//*Remove users

?>
