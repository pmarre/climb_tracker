<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Climb Tracker</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="styling/reset.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700|Raleway:200" rel="stylesheet">
<link href="climb-tracker.css" rel="stylesheet">
<script src="climb-tracker.js" async defer></script>
</head>
<body>
    <?php 
        // require header
    ?> 
<section class="login">
    <div class="container login--display">
        <div class="login--heading">
            <h1 class="login--h1">Welcome Back, Sendy McSenderson</h1>
            <p>What did you send today?</p>
</div>
    <form method="POST" action="#" id="login--form">
        <input type="email" name="login_email" id="login_email" placeholder="youremail@email.com">
        <input type="password" name="login_password" id="login_password" placeholder="Password">
        <div class="login_container">
        <input type="submit" name="login_submit" id="login_submit" value="Log in">
</div>
    </form>
    <div class="login--new_user">
        <p>New to Climb Tracker? <a class="login--sign_up--link"  href="#">Sign Up Here</a></p>
    </div>
</div>
</section>
<section class="sign_up">
    <div class="container sign_up--display">
        <div class="sign_up--heading">
            <h1 class="sign_up--h1">Join Climb Tracker Now!</h1>
            <p>Never forget a climb.</p>
</div>
    <form method="POST" action="#" id="sign_up--form">
        <input type="text" name="sign_up_fname" id="sign_up_fname" placeholder="First name">
        <input type="text" name="sign_up_lname" id="sign_up_lname" placeholder="Last name">
        <input type="email" name="sign_up_email" id="sign_up_email" placeholder="youremail@email.com">
        <input type="password" name="sign_up_password" id="sign_up_password" placeholder="Password">
        <input type="password" name="sign_up_password--2" id="sign_up_password--2" placeholder="Confirm password">
        <div class="submit_container">
        <input type="submit" name="sign_up_submit" id="sign_up_submit" value="Log in">
</div>
    </form>
    <div class="login--returning_user">
        <p>Already have a login? <a class="login--link" href="#">Log in here.</a></p>
    </div>
</div>
</section>
    <?php 
        // require 'Includes/footer.php';
    ?>
</body>
</html>