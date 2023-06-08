<?php
    include("./conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sytles/login.css">
    <script src="./scripts/login.js" defer></script>
    <title>Login</title>
</head>
<body>
    <p id="loginpageTitle">URDI Admin Login</p>
    <div class="loginformContainer" id="loginformContainer">
        <div class="loginsubContainer" id="subcontaner">
            <p id="loginTitle">Login</p>
            <form action="./admin.php" method="POST">
                <label for="username">Username</label><br/>
                <input type="text" name="username" id="username" placeholder="Username"/><br/>
                <label for="password">Password</label><br/>
                <input type="password" name="password" id="password" placeholder="Password"/><br/><br/>
                <input type="submit" name="btnLogin" id="btnLogin" value="Submit"/> <input type="button" name="btnClear" id="btnClear" value="Clear" onclick="fnbtnClear()"/>
            </form>
        </div>
    </div>
    <div class="bg-image"></div>
    <script>
            // Login error code
            <?php if (isset($_GET['login_result'])) { ?>
                alert('<?php echo $_GET['login_result']; ?>');
                window.location.href = "./login.php";
            <?php } ?>
            // Login error code
    </script>
</body>
</html>