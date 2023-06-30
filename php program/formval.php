<!DOCTYPE HTML>  

<html>

<head>

    <style>

        .error {color: #FF0000;}

    </style>

</head>

<body>  

    <?php

        $nameErr = $emailErr = $genderErr = $websiteErr = "";

        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {

            $nameErr = "Please enter a valid name";

        } else {

            $name = test_input($_POST["name"]);

            // check if name only contains letters and whitespace

            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {

            $nameErr = "Only letters and white space allowed";

            }

        }

        if (empty($_POST["email"])) {

            $emailErr = "valid Email address";

        } else {

            $email = test_input($_POST["email"]);

            // check if e-mail address is well-formed

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = "The email address is incorrect";

            }

        }  


        if (empty($_POST["gender"])) {

            $genderErr = "Please select a gender";

        } else {

            $gender = test_input($_POST["gender"]);

        }

        }

        function test_input($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

        }

    ?>
<nav>
    <h2>LogIn Form</h2>

    <p><span class="error">* required field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

        FullName: <input type="text" name="name">

        <span class="error">* <?php echo $nameErr;?></span>

        <br><br>

        E-mail address: <input type="text" name="email">

        <span class="error">* <?php echo $emailErr;?></span>

        <br><br>

       

        Gender:

        <input type="radio" name="gender" value="female">Female

        <input type="radio" name="gender" value="male">Male

            <span class="error">* <?php echo $genderErr;?></span>

        <br><br>

        <input type="submit" name="submit" value="Submit">  
        </nav>

    </form>

    <?php

        echo "<h2> Final Output:</h2>";

        echo $name;

        echo "<br>";

        echo $email;

        echo "<br>";

        echo $website;

        echo "<br>";

        echo $comment;

        echo "<br>";

        echo $gender;

    ?>

</body>

</html>