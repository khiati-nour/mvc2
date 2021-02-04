
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>

    * {box-sizing: border-box;}

    /* Style the input container */
    .input-container {
    display: flex;
    width: 100%;
    margin-bottom: 15px;
    }

    /* Style the form icons */
    .icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
    }

    /* Style the input fields */
    .input-field {
    width: 100%;
    padding: 10px;
    outline: none;
    }

    .input-field:focus {
    border: 2px solid dodgerblue;
    }

    /* Set a style for the submit button */
    .btn {
    background-color: dodgerblue;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    }

    .btn:hover {
    opacity: 1;
    }
    .error {color: #FF0000;}
   </style>
    <title>Becode - Boiler plate MVC</title>
</head>
<body>
<header>
    <h1>Welcome to my site</h1>
</header>
<form method="post">
    <h2>Register Form</h2>
    <div class="input-container">
        <i class="fa fa-user icon"></i>
        <input class="input-field" name = "user" type="text" placeholder="Username" value= "<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[0]);}?>">
        <span class="error">* <?php echo $userErr?></span>
    </div>

    <div class="input-container">
        <i class="fa fa-envelope icon"></i>
        <input class="input-field" type="text" placeholder="Email" name="email" value= "<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[1]);}?>">
        <span class="error">* <?php echo $emailErr?></span>
    </div>

    <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input class="input-field" type="password" placeholder="Password" name="password" value= "<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[2]);}?>">
        <span class="error">* <?php echo $passwordErr?></span>
    </div>
    <div class="input-container">
        <i class="fa fa-phone icon"></i>
        <input class="input-field" type="text" placeholder="Phone Number" name="phone" value= "<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[3]);}?>">
        <span class="error">* <?php echo $phoneErr?></span>
    </div>
    <div class="input-container">
        <i class="fa fa-home icon"></i>
        <input class="input-field" type="text" placeholder="City" name="city" value= "<?php if(isset ($_POST['submit'])){echo  htmlspecialchars($values[4]);}?>">
        <span class="error">* <?php echo $cityErr?></span>
    </div>
    <button type="submit" name="submit" class="btn">Register</button>
</form>
<footer>
    &copy; BeCode <?php echo date('Y')?>
</footer>
</body>
</html>