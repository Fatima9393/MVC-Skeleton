<?php

//Controller does the calls to the functionalities inside the models.

class UserController {

    public function create() {
        // we expect a url of form ?controller=blogpost&action=create
        // if it's a GET request display a blank form for creating a new product
        // else it's a POST so add to the database and redirect to readAll action
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/user/create.php');
        } else {
            User::Register();  
            echo '<script language="javascript">';
            echo 'alert("registration successful. Please, login")';
            echo '</script>';
            echo "<script>window.location.href = 'index.php?controller=user&action=login ';</script>";
            
        }
        
    }

    public function login() {
        // we expect a url of form ?controller=user&action=read   /check?
        // if it's a GET request display a blank form for..
        // else it's a POST so add to the database and redirect to..
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/user/login.php');
        } else {
            $register_number = User::login();
            if ($register_number != 0) {
                 $_SESSION["Username"] = $_POST["Username"];
                 $_SESSION["Hashcode"] = $_POST["Hashcode"];
                 echo "<script>window.location.href = 'index.php?controller=blogpost&action=readAll';</script>";
                 //call('blogpost', 'readAll');               
            } else {
                require_once('views/user/login.php');
                echo '<script language="javascript">';
                echo 'alert("Wrong password")';
                echo '</script>';
            }
        }
    }
    public function logout() {       
        User::logout();
        echo "<script>window.location.href = 'index.php?controller=pages&action=home ';</script>";
        //call('pages', 'home');
        
    }

    public function search() {
        //we expect a url of form ?controller=user&action=create
        //This will be a GET request first as the user has to click on search in the nav bar.
        //It will be two GET requests if we make it so that the user searches for a blogpost, clicks on search and database retrieves it.
        //However currently the ajax code we have gives a live search (we don't have to click on the button - the results will display as soon as we start typing in the search box

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/user/ajax.php');
        } else {
            User::search();
        }
    }

}

?>