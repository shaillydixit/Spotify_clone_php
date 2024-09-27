
<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");
    $account = new Account($con);
    include("includes/handlers/login-handler.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="inputContainer">
    <form id="loginForm" action="login.php" method="POST">
    <h1>Login to your account</h1>
    <p>
        <label for="loginUsername">Username</label>
        <input type="text" id="loginUsername" name="loginUsername" placeholder="e.g. Shailly Dixit" required>

    </p>
    <p>
        <label for="loginPassword">Password</label>
        <input type="password" id="loginPassword" name="loginPassword" required>
    </p>
    <button type="submit" name="loginButton">LOG IN</button>

    </form>
</div>
</body>
</html>