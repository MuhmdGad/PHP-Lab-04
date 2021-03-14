<!-- <!DOCTYPE html> -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Student Register</title>

    <!-- Icons font CSS-->

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #0000006e;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */

        .container {
            padding: 16px;
            background-color: white;
            width: 70%;
            margin: auto;
            margin-top: 150px;
            border-radius: 10px;
            border-color: #red;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }

        .login {
            float: right;
            margin-right: 2px;
            width: 10%;
        }

        #log {
            float: right;
            margin-right: 50px;
        }
        .label{
            width:50%;


        }
    </style>

</head>

<body>

    <form action="userhandler.php" method="POST">
        <div class="container">
            <h1>Student Register</h1>
            <div>
                <p>Please fill in this form to create an account.</p>
            </div>

            <a href="loginform.php" class="registerbtn login">Login</a>

            <hr>

            <label for="first_name"><b>First Name</b></label>
            <input type="text" placeholder="Enter your First Name" name="first_name" id="first_name" required>

            <label for="last_name"><b>Last Name</b></label>
            <input type="text" placeholder="Enter your Last Name" name="last_name" id="last_name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter your Email" name="email" id="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter your Password" name="password" id="password" required>

            <label for="phone"><b>Phone Number</b></label>
            <input type="text" placeholder="Enter your Phone" name="phone" id="phone" required>

            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter your current address" name="address" id="address" required>

            <label class="label"><b>Gender</b></label><br><br>
            <div>
                <label>Male
                    <input type="radio" checked="checked" value="male" name="gender" required>
                </label>
                <label>Female
                    <input type="radio" value="female" name="gender">
                </label>
            </div>
          
           
            <hr>

            <input type="submit" name="signup" class="registerbtn" value="Register">

        </div>

    </form>


</body>

</html>