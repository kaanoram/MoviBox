<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

    $account = new Account($con);
    if(isset($_POST["submitButton"])) {
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $password = FormSanitizer::sanitizeFormUsername($_POST["password"]);

        $success = $account->login($username, $password);
        if ($success) {
            $_SESSION["userLoggedIn"] = $username;
            header("Location: index.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/styles/styles.css">
</head>
<body>
    <div class="signInContainer">
        <div class = "column">
            <div class = "header">
                <img src="assets/images/logo.png" alt="MoviBox Logo" title="Logo">
                <h3>Sign In</h3>
                <span>to continue to MoviBox</span>
            </div>
            <form method = "POST" action="">

                <?php echo $account->getError(Constants::$loginFailed); ?>
                <input type="text" name = "username" placeholder = "Username" required>
                <input type="password" name = "password" placeholder = "Password" required>
                <input type="submit" name = "submitButton" value = "SUBMIT">
            </form>

            <a href="register.php" class = "signInMessage">Need an account? Sign up here!</a>
        </div>
    </div>
</body>
</html>