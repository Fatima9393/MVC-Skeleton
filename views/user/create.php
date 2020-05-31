<html>
    <div id="realTimeContents"> 

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>


    <body>
        <!-- the middle column is for Bootstrap while the second one is for personal design 
        <div class="container-fluid NavBar">
            <div class="container">
                <div class="row justify-content-between"> 
                    <div class="col-md-3"><a href="index.php"> Home </a></div>
                    <div class="col-md-3">Location and Hours</div>
                    <div class="col-md-3">Library Services</div>
                    <div class="col-md-3"><a href="Register.php"> Register </a></div>
                </div> 
            </div>
        </div>
        -->
        <div class="container">
            <div class="row"> 
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <form id='register' action='' method='POST'>
                                <fieldset>
                                    <legend>Register</legend> <br>
                                    <div class="form-group">
                                        <!--                                    <label for="FirstName">First Name</label><br/>-->
                                        <input type="text" class="form-control" name="FirstName" id="firstname" placeholder="Enter first name" required>
                                        <small id="firstNameHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <!--                                    <label for="LastName">Last Name</label><br/>-->
                                        <input type="text" class="form-control" name="LastName" id="lastname" placeholder="Enter last name" required>
                                        <small id="lastnameHelp" class="form-text text-muted"></small>
                                    </div>

                                    <div class="form-group">
                                        <!--                                    <label for="Username">Username</label><br/>-->
                                        <input type="text" class="form-control" name = "Username" id="username" placeholder="Enter username" required>
                                        <small id="firstNameHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <!--                                    <label for="Email">Email address</label><br/>-->
                                        <input type="email" class="form-control" name ="Email" id="email" placeholder="Enter email" required>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <!--                                    <label for="Hashcode">Password</label><br/>-->
                                        <input type="password" class="form-control" name="Hashcode" id="hashcode" placeholder="Password" required="">
                                    </div>
                                    <div class="form-group">
                                        <!--                                    <label for="DateJoined">Registration Date</label><br/>-->
                                        <input type="date" class="form-control" name="DateJoined" id="datejoined" placeholder="Registration Date" required>
                                    </div>

                                    <div class="form-group">
                                        <!--                                    <label for="AboutMe">AboutMe</label><br/>-->
                                        <textarea class="form-control" name= "AboutMe" id="aboutme" rows="3" placeholder="A few words about me"></textarea>
                                    </div>
                                    <!--<div class="form-group">
                                        <label for="ProfilePhoto">Profile Photo</label><br/>
                                        <input type="hidden" name="MAX_FILE_SIZE" value ="10000000"><br/>
                                        <input type="file" name="myUploader" class="" required/>
                                        <small id="fileHelp" class="form-text text-muted">Upload a photo that will be associated with your username.</small>
                                        <div  class="form-group">-->
                                    <button href="" class="btn btn-primary" type="submit">Submit</button> 
                                    </div>
                                    </div>
                                    <div class="col-lg-2"></div>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
</div>