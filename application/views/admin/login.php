
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/style.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    body {
        margin: 0;
        padding: 0;
        background-color: white;
        height: 100vh;
    }

    #login .container #login-row #login-column #login-box {
        margin-top: 120px;
        max-width: 600px;
        height: 320px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
    }

    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }

    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
    }

    .container {
        padding-top: 15%;
    }
    </style>
</head>
<title>Login Form</title>
</head>

<body>
    <form method="post" class="form" id="login-form" action="">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <br>
                            <div class="form-group" action="<?php echo base_url() . 'adminpage/index' ?>">
                                <!-- <label for="username" class="text-info">Username:</label><br> -->
                                <input id="admin" type="text" name="username" id="admin" class="form-control"
                                    placeholder="Username">
                            </div>
                            <div class="form-group">
                                <!-- <label for="password" class="text-info">Password:</label><br> -->
                                <input id="pw123" type="password" name="password" id="pw123" class="form-control"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <!-- <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input type="submit" name="Submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div>
                                <div>
                                    <?php
                                    if (isset($msg)) {
                                        echo $msg;
                                    }
                                    ?>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</body>

</html>