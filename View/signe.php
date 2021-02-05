<!doctype html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
    body {
        padding-top: 90px;
        background-image: url(../assets/libraryMood.jpg);
        background-size: cover;
    }
    .panel-login {
        border-color: #ccc;
        -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
    }
    .panel-login>.panel-heading {
        color: #00415d;
        background-color: #EAE7DC;
        border-color: #fff;
        text-align:center;
    }
    .panel-login>.panel-heading a{
        text-decoration: none;
        color: #666;
        font-weight: bold;
        font-size: 15px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }
    .panel-login>.panel-heading a.active{
        color: #E98074;
        font-size: 18px;
    }
    .panel-login>.panel-heading hr{
        margin-top: 10px;
        margin-bottom: 0px;
        clear: both;
        border: 0;
        height: 1px;
        background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    }
    .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
        height: 45px;
        border: 1px solid #ddd;
        font-size: 16px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }
    .panel-body {
        background-color: #EAE7DC;
    }
    .panel {
        background-color: #EAE7DC;
    }
    .panel-login input:hover,
    .panel-login input:focus {
        outline:none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        border-color: #ccc;
    }
    .btn-login {
        background-color: #E85A50;
        outline: none;
        color:#fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #E85A50;
    }
    .btn-login:hover,
    .btn-login:focus {
        color: #fff;
        background-color: #E68173;
        border-color: #E85A50;
    }
    .forgot-password {
        text-decoration: underline;
        color: #888;
    }
    .forgot-password:hover,
    .forgot-password:focus {
        text-decoration: underline;
        color: #666;
    }

    .btn-register {
        background-color: #E85A50;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #E85A50;
    }
    .btn-register:hover,
    .btn-register:focus {
        color: #fff;
        background-color: #E68173;
        border-color: #E85A50;
    }

    .error {color: #FF0000;}

    #button {
        background-color: #59B2E0;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #59B2E6;
        line-height: 12px;
        width: 70px;
        margin-top: 1px;
        margin-right: 2px;
        position:absolute;
        top:0;
        right:0;
        border-radius: 10px;
        display: none;

    }
</style>
</head>


<?php
if(isset($_SESSION['name'])){
    ?>

    <style type="text/css">.container {
            display: none;
        }</style>
    <?php
    ?>

    <style type="text/css">#button {
            display: block;
        }</style>
    <?php



} ?>
<form method="post">
    <input id="button" type="submit" name="log_out"  value="Log out">
</form>
    <div class="container">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form"  method="post" role="form" style="display: block;">

                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    <span class="error">* <?php echo $userIdErr?></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="passwordId" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    <span class="error">* <?php echo $passwordIdErr?></span>
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember"> Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a  tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="register-form"  method="post" role="form" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="user" id="username" tabindex="1" class="form-control" placeholder="Username" value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[0]);}?>">
                                    <span class="error">* <?php echo $userErr?></span>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[1]);}?>">
                                    <span class="error">* <?php echo $emailErr?></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    <span class="error">* <?php echo $passwordErr?></span>
                                </div>
                                <div class="form-group">
                                    <input  type="tel" name="phone" id="phone" tabindex="2" class="form-control" placeholder="Phone Number" value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[3]);}?>">
                                    <span class="error">* <?php echo $phoneErr?></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" id="city" tabindex="2" class="form-control" placeholder="City" value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[4]);}?>">
                                    <span class="error">* <?php echo $cityErr?></span>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    $(function() {

        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });

</script>
</body>
</html>