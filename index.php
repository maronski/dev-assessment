<!DOCTYPE html>
<html>
<head>
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

     <!-- JQuery Validator-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js" type="text/javascript"></script>
    

<?php 
include("login_process.php");
?>

<body>

<img src="images/background-image.jpg" id="bg" alt="">
<img src="images/fake-company.png" id="logo" alt=""> 

    <div class="container">
        <div class="row ver-offset-login">
            <div class="col-md-4 col-md-offset-4 bg-white" id="login-form">
                <h2>Sign In</h2>
                <div class="col-md-12 bg-danger text-center" id="login-error">
                    <?php 
                    if (isset($_SESSION['message'])){
                        echo "<div id='error_msg'>".$_SESSION['message']."</div>";
                        unset($_SESSION['message']);
                    }
                    ?>
</head>
                </div>
                <form action="login_process.php" method="post" name="login-form">
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username" />
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" />
                    </div>
                    <div class="form-group">
                        <input type="submit" id="submit" class="btn btn-primary btn-block" value="Log In" name="login_btn"/>
                    </div>
                    <p class="text-center">Not a member? Click here to <a href="registration_form.php">sign-up!</a></p>
                </form>
<div class="footer navbar-fixed-bottom bg-white text-center" id="footer">     
            <p>Website built by : <a href="#">John Maron Balinas </a></p>
            <p>
            <a href="https://www.facebook.com/maronski"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
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
