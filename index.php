
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PAWSOME - Our Adventurous Pets </title>
    </head>
    <body>
        <?php
        require_once('connection.php');

        if (isset($_GET['controller']) && isset($_GET['action'])) {
            $controller = $_GET['controller'];
            $action = $_GET['action'];
        } else {
            $controller = 'pages'; //to change to blogpost controller. first signpost
            $action = 'home';
        } 
//        require_once('views/layout.php');

        if(isset($_POST['query'])) {//if we are searching for info, this is the only time the navbar wont show again.
            require_once('routes.php'); //when we search for results in the ajax search, this routing will take place - the search function will be fetched from model & controller
        } else {
           require_once('views/layout.php');
       }
        //When you see require once and the file path - imagine as if all that code is underneath it.
        ?>
    </body>
</html>
