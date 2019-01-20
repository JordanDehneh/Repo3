<!DOCTYPE html>
    <html>
    <head>
        <title>Login Page </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="Style.css">

        <script>
            $( document ).ready(function() {
                var todaydate = new Date();
                var day = todaydate.getDate();
                var month = todaydate.getMonth() + 1;
                var year = todaydate.getFullYear();
                var datestring = day + "/" + month + "/" + year;
                document.getElementById("date").value = datestring;
                var time = todaydate.getHours() + ":" + todaydate.getMinutes() + ":" + todaydate.getSeconds();
                document.getElementById("time").value = time;
            });
            function goToLink(link) {
                window.location = link;
            }
            function validate_register() {

                var email = document.getElementById("user").value;
                var password = document.getElementById("password").value;
                var errorString = "";
                var flag= true;

                // ******************EMAIL VALIDATION******************

                if (!email.endsWith(".com") && !email.endsWith(".org")) {

                    errorString+= "Invalid email"
                    flag = false;

                }

                // ****************PASSWORD VALIDATION*******************

                var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

                if (password.length < 8) {

                    errorString+= "Must be at least 8 characters";
                    flag = false;

                }
                if (!/\d/.test(password)){

                    errorString+= " Does not contain number "
                    flag = false;

                }

                if (!(/[A-Z]/.test(password))) {

                    errorString+= "Does not contain upper case";
                    flag = false;

                }
                if (!/[a-z]/.test(password)) {

                    errorString+= "Does not contain lower case";
                    flag = false;

                }

                if(!format.test(password)){
                    errorString+= " does not have special characters ";
                    flag = false;
                }

                // **********BIRTHDAY VALIDATION: MUST BE BETWEEN 20 TO 28 YEARS OLD*********

                var age = document.getElementById("birthday").value;
                var d = new Date( age );
                var year, month, day;

                if ( !!d.valueOf() ) { // Valid date
                    year = d.getFullYear();
                } else { /* Invalid date */ flag = false; }

                var range = new Date().getFullYear() - year;

                if (range>28) {
                    errorString += " Too old";
                    flag = false;
                }
                else if (range<20) {
                    errorString += " Too young";
                    flag = false;
                }

                // ******************MOBILE NUMBER VALIDATION***********************

                var mobileNumber = document.getElementById("mobileNumber").value;
                var formatMobile = /[!@#$%^&*()_\-=\[\]{};':"\\|,.<>\/?]/;  // Took out the '+' sign only.

                if (mobileNumber.startsWith("079")) {

                    if (mobileNumber.length != 10) {

                        errorString += "Mobile number 079 must be 10 digits";
                        flag = false;

                    }
                }
                else if (mobileNumber.startsWith("79")) {

                    if (mobileNumber.length != 9) {

                        errorString += "Mobile number 79 must be 9 digits";
                        flag = false;

                    }
                }
                else if (mobileNumber.startsWith("+962")) {

                    if (mobileNumber.length != 13) {

                        errorString += "Mobile number +962 must be 13 digits"
                        flag = false;

                    }
                }
                else if (mobileNumber.startsWith("962")) {

                    if (mobileNumber.length != 12) {

                        errorString += "Mobile number 962 must be 12 digits"
                        flag = false;

                    }
                }

                if (/[a-z]/.test(mobileNumber) || /[A-Z]/.test(mobileNumber) || formatMobile.test(mobileNumber)) {

                    errorString += " Mobile Number contains special characters or letters"
                    flag = false;

                }

                if (flag) {
                    window.location.href ="Login.php";
                }
                else {
                    alert(errorString);
                }
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

    <body style="background-image: url(ZainBackground.jpg); background-repeat: no-repeat; background-size: 100% 100%;">

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
            <div style="background-color: #415252; width:50%; text-align: center; margin-left:25%; opacity: 0.75;">
                    <div class="header">
                        <img src="UserIcon.png" height="10%" width="10%">
                        <h1> Register </h1>
                    </div>

                    <form  class="form">

                        <div style="display: grid; text-align: center;margin-bottom: 2%;">
                            <div class="innerDiv">
                                <div style="display: inline-block;width: 22%;">
                                    <label for="user" class="label label-default">Username</label>
                                </div>
                                <input type="email" name="username" id="user" style="width: 40%;" required>
                            </div>
                            <div class="innerDiv">
                                <div style="display: inline-block;width: 22%;">
                                    <label class="label label-default" for="password">Password</label>
                                </div>
                                <input type="password" id="password" style="width: 40%;"  required >
                            </div>
                            <div class="innerDiv">
                                <div style="display: inline-block;width: 22%;">
                                    <label class="label label-default" for="firstName">First Name</label>
                                </div>
                                <input type="text" id="firstName" style="width: 40%;">
                            </div>
                            <div class="innerDiv">
                                <div style="display: inline-block;width: 22%;">
                                    <label class="label label-default" for="birthday">Birthday</label>
                                </div>
                                <input type="date" id="birthday" style="width: 40%;" required>
                            </div>
                            <div class="innerDiv">
                                <div style="display: inline-block;width: 22%;">
                                    <label class="label label-default" for="gender">Gender</label>
                                </div>
                                <select id="gender" style="width: 40%">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="innerDiv">
                                <div style="display: inline-block;width: 22%;">
                                    <label class="label label-default" for="mobileNumber">Mobile Number</label>
                                </div>
                                <input type="text" id="mobileNumber" style="width: 40%;" required>
                            </div>
                            <div class="innerDiv">
                                <div style="display: inline-block;width: 22%;">
                                    <label class="label label-default" for="date">Date</label>
                                </div>
                                <input type="text" id="date" style="width: 40%;" disabled>
                            </div>
                            <div class="innerDiv">
                                <div style="display: inline-block;width: 22%;">
                                    <label class="label label-default" for="time">Time</label>
                                </div>
                                <input type="text" id="time" style="width: 40%;" disabled>
                            </div>
                            <div class="innerDiv">
                                <div style="display: inline-block;width: 22%;">
                                    <label class="label label-default" for="active">Active Status</label>
                                </div>
                                <input type="checkbox" id="active" style="width: 40%;" required>
                            </div>
                        </div>
                        <div style="text-align: center">
                            <button  onclick="validate_register()" class="btn btn-primary active " style="font-size: 15px; height: 38px;width: 18%;" id="register"> Register </button>
                        </div>
                    </form>


                </div>

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