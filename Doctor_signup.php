<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Doctor Register
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    </head>

    <body>
        <!--Signup information-->
        <form class="Doctor_form-signup" action="./PHP/Doctor_signup.inc.php" method="post">
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

            <!--Age
            <label for="age">Age*</label><br>
            <input type="number" name="age" id="age"><br>-->


            <!--Date of Birth-->
            <label for="birth_date">Date Of Birth*</label><br>
            <input type="Date" name="birth_date" id="birth_date"><br>

           

            <!--Place of Birth-->
            <label for="birth_place">Place Of Birth*</label><br>
            <input type="text" name="birth_place" id="birth_place"><br>

    

            <!--Instituition-->
 

            <label for="Instituitional_background">Instituition</label><br>
            <input type="text" name="Instituitional_background" id="Instituitional_background"><br>

              <!--Department-->
 

              <label for="Department">Department</label><br>
            <input type="text" name="Department" id="Department"><br>
            

            <!--Signup Button-->
            <button type="submit" name = "Doctor_signup-submit" id="Doctor_signup-submit">Submit</button>
        </form>
    </body>
</html>