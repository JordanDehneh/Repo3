<!DOCTYPE html>
    <html>
    <head>
        <title>Login Page </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Style.css">
        <script>
            function goToLink(link) {
                window.location = link;
            }
        </script>
        <style>

            h1 {

                color: #81f1dc;
                font-size:60px ;
                font-family: Arial Narrow, sans-serif;
                margin-bottom: 40px;
            }

            .btn {
                background-color: #477585;
                border: none;
                color: #cccccc;
                padding: 10px 12px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
            }

        </style>
    </head>

    <body style="background-color: #808080;">

        <div id="OuterHeader">
            <div id="header" class="innerDiv">
                <img src="../HTML/Zain_Logo.png" width="150px" height="70px" onclick="goToLink('https://www.zain.com/en/')">
                <div class="side" style="margin-right: 12%;">
                    <input type="text" id="searchBar" placeholder="Search">
                    <a href="Register.php" style="color: #81f1dc; "> Register </a>
                </div>
            </div>
        </div>



        <div class="container">

            <div class="header">
                <img src="UserIcon.png" height="10%" width="10%">
                <h1> Login </h1>
            </div>

            <form method="post" action="Login.php" class="form">

                <div style="display: grid; text-align: center;margin-bottom: 2%;">
                    <div class="innerDiv">
                        <div style="display: inline-block;width: 8%;">
                            <label for="user" class="label label-default">Username</label>
                        </div>
                        <input type="text" name="username" id="user" style="width: 40%;">
                    </div>
                    <div class="innerDiv">
                        <div style="display: inline-block;width: 8%;">
                            <label class="label label-default" for="password">Password</label>
                        </div>
                        <input type="password" id="password" style="width: 40%;" >
                    </div>
                </div>

                <div style="text-align: center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary active " name="login_user" style="font-size: 15px; height: 38px;width: 18%;">Login</button>
                    </div>
                    <div class="form-group">
                        <h5 class="label label-default"> Not yet a member? <a class="label label-default" href="Register.php">Sign up</a></h5>
                    </div>
                </div>



            </form>
        </div>
        <footer class="footer" style="background-color: darkslategray;">
            <div class="OuterDiv">

                <div class="innerDiv">
                    <img src="GitHubLogo.png" alt="Twitter" width="25" height="25" class="hvr-grow">
                    <img src="facebookPng.png" alt="Facebook" width="25" height="25" class="hvr-grow"">
                </div>
                <div class="innerDiv">
                    <img src="googleplus.png" alt="GooglePlus" width="25" height="25" class="hvr-grow"">
                    <img src="twitter.png" alt="Twitter" width="25" height="25" class="hvr-grow"">
                </div>

            </div>
        </footer>

    </body>
</html>