<!DOCTYPE html>
<html>
<head>
    <title>DevAssessment - Register</title>
    <meta charset="utf-8">
    <title>Dev Assessment</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- font Awesome CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!-- BootstrapValidator JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js" type="text/javascript"></script>


    <!-- JQuery-->
    <script src="js/jquery.js" type="text/javascript"></script>

<?php 
include("register_process.php");
?>

</head>
<body>

<img src="images/background-image.jpg" id="bg" alt="">
<img src="images/fake-company.png" id="logo" alt=""> 

<div class="container">
        <div class="row ver-offset">
            <div class="col-md-4 col-md-offset-4 bg-white" id="login-form">
              <h2>Sign Up</h2>
                    <form action="registration_form.php" method="post" id="registration-form" data-toggle="validator" role="form">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" data-error="First name is required" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" data-error="Last name is required" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" data-error="Email Address is required" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position</label>
                                        <select class="form-control" name="position_select" data-error="Select position" required>
                                                <option></option>
                                                <option value="Project Manager">Project Manager</option>
                                                <option value="Web Strategist">Web Strategist</option>
                                                <option value="Content Specialist">Content Specialist</option>
                                                <option value="Web Designer">Web Designer</option>
                                                <option value="Developer">Developer</option>
                                                <option value="Inbound Marketer">Inbound Marketer</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" data-error="Select position" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" data-minlength="6" required/>
                                        <div class="help-block">Minimum of 6 characters</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password2">Confirm Password</label>
                                        <input type="password" class="form-control" id="password2" name="password2" data-match="#password" data-match-error="Password do not match " required/>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" id="submit" class="btn btn-primary btn-block" value="Submit" name="register_btn"/>
                                    </div>
                                    <p class="text-center"> Already have an account? <a href="index.php">Sign In</a></p>
                                </form>

                                <div class="footer navbar-fixed-bottom bg-white text-center" id="footer">     
                                    <p>Website built by : <a href="#">John Maron Balinas </a></p>
                                    <p><a href="https://www.facebook.com/maronski"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
                                        <a href="https://twitter.com/supermaronski"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                                        <a href="https://plus.google.com/u/0/115419016970457837373"><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a>
                                        <a href="https://ph.linkedin.com/in/jmbalinas"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                                        </p>
                                </div>

            </div>
        </div>
    </div>
</body>
</html>