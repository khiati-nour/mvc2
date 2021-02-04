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
    <script src="https://use.fontawesome.com/f92a08f756.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,900;1,200;1,900&display=swap"
        rel="stylesheet">
    <title>Becode - Boiler plate MVC</title>
</head>

<body>

    <!-- Navigation -->
    <?php include './includes/nav.php'; ?>
    <!-- End of Navigation -->


    <header>
        <h1>Welcome to my site</h1>
        <span class="glyphicon glyphicon-user"></span>

    </header>
    <form method="post">
        <h2>Register Form</h2>
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" name="user" type="text" placeholder="Username"
                value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[0]);}?>">
            <span class="error">* <?php echo $userErr?></span>
        </div>

        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email"
                value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[1]);}?>">
            <span class="error">* <?php echo $emailErr?></span>
        </div>

        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password" name="password"
                value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[2]);}?>">
            <span class="error">* <?php echo $passwordErr?></span>
        </div>
        <div class="input-container">
            <i class="fa fa-phone icon"></i>
            <input class="input-field" type="text" placeholder="Phone Number" name="phone"
                value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[3]);}?>">
            <span class="error">* <?php echo $phoneErr?></span>
        </div>
        <div class="input-container">
            <i class="fa fa-home icon"></i>
            <input class="input-field" type="text" placeholder="City" name="city"
                value="<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[4]);}?>">
            <span class="error">* <?php echo $cityErr?></span>
        </div>
        <button type="submit" name="submit" class="btn">Register</button>
    </form>
    <footer>
        &copy; BeCode <?php echo date('Y')?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>