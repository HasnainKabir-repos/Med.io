<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <title>
            Register
        </title>
    </head>

    <body>
        <!--Signup information-->
        <form class="form-signup" action="./PHP/signup.inc.php" method="post">
            <!--Name-->
            <label for="name">Full Name*</label><br>
            <input type="text" id="name" name = "name"><br>
            
            <!--Email-->
            <label for="email">Email*</label><br>
            <input type="text" id="email" name = "email"><br>

            <!---Password-->
            <label for="password">Password*</label><br>
            <input type="password" id="password" name = "password"><br>

            <label for="confirm_password">Confirm Password*</label><br>
            <input type="password" id="confirm_password" name = "confirm_password"><br>

            <!--Gender-->
            <label for="gender">Gender*</label><br>

            <input type="radio" id = "male" name="gender" value="Male">
            <label for="Male">Male</label><br>

            <input type="radio" id = "female" name="gender" value="Female">
            <label for="Female">Female</label><br>

            <!--Date of Birth-->
            <label for="birth_date">Date Of Birth*</label><br>
            <input type="Date" name="birth_date" id="birth_date"><br>

            <!--Phone Number-->
            <label for="Phone_number">Phone Number*</label><br>
            <input type="Phone_number" name="Phone_number" id="Phone_number"><br>

            <!--Place of Birth-->
            <label for="birth_place">Place Of Birth*</label><br>
            <input type="text" name="birth_place" id="birth_place"><br>

            <!--Medical history-->
            <h3>Please state if you have any pre-existing conditions,
                have gone through any major operations previously or 
                anything your doctor should know about. 
                <br>(Keep the field empty if inapplicable).           
            </h3>
            <label for="medical_history">Previous Medical History</label><br>
            <input type="text" name="medical_history" id="medical_history"><br>

            <!--Vaccination Status-->
            <h3>Please provide necessary information about your vaccination status.
                <br>(Keep the field empty if inapplicable).
            </h3>
            <label for="vaccination_status">Vaccination status</label><br>
            <input type="text" name="vaccination_status" id="vaccination_status"><br>
            

            <!--Signup Button-->
            <button type="submit" name = "signup-submit" id="signup-submit">Submit</button>
        </form>
    </body>
</html>