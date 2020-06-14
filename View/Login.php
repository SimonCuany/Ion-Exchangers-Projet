<?php

?>
<html lang="en">
<head>
    <title>User Login</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div>
    <form method="post" id="frmLogin" onSubmit="return validate();">
        <div class="demo-table">

            <div class="form-head">Login</div>
            <?php
            if (isset($_SESSION["errorMessage"])) {
                ?>
                <div class="error-message"><?php echo $_SESSION["errorMessage"]; ?></div>
                <?php
                unset($_SESSION["errorMessage"]);
            }
            ?>
            <div class="field-column">
                <div>
                    <label for="user_name">Username</label><span id="user_info" class="error-info"></span>
                </div>
                <div>
                    <input name="user_name" id="user_name" type="text"
                           class="demo-input-box">
                </div>
            </div>
            <div class="field-column">
                <div>
                    <label for="password">Password</label><span id="password_info" class="error-info"></span>
                </div>
                <div>
                    <input name="password" id="password" type="password"
                           class="demo-input-box">
                </div>
            </div>
            <div class=field-column>
                <div>
                    <input type="submit" name="login" value="Login"
                           class="btnLogin">
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>

