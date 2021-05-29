<!DOCTYPE html>
<html>
<head>
    <title><?php echo "Form Validation using PHP"; ?></title>
    <style>
        body {

            background-image: url("dance7.jpg"), url("ballet1.jpg");
            background-position-x: left, right;
            background-repeat: no-repeat no-repeat;
            background-size: 732px 680px;
            padding: 0%
        }
        .banner {
            text-align: center;
            color: #e67300
        }

        form {
            width: 27%;
            padding: 20px;
            border-radius: 11px;
            background: #ffffff;
            /* background-color:antiquewhite; */
            box-shadow: 0 0 25px 0 #a6a6a6;
        }

        .error {
            font-style: italic;
            font-size: smaller;
            color: #FF0000;
        }

        .btn-block {
            margin-top: 10px;
            text-align: center;
        }

        button {
            width: 140px;
            padding: 8px;
            border: #131212;
            border-radius: 15px;
            background: #0086b3;
            font-size: 16px;
            color: #ffffff;
            cursor: pointer;
        }

        button:hover {
            background: #001133;
        }
        .oblique {
            font-style: oblique;
        }
    </style>
</head>

<body>
    <?php
    $nameErr = $emailErr = $genderErr  = $ageErr = $danceErr = $phoneErr = $stateErr = $cityErr = "";
    $name = $email = $gender = $age = $dance = $phone = $state = $city = $text = "";

    if (isset($_POST['submit'])) {
        if (empty($_POST["name"])) {
            $nameErr = "Name must be filled";
        } else {
            echo htmlspecialchars($_POST['name']);
        }
        if (empty($_POST["age"])) {
            $ageErr = "Age must be filled";
        } else {
            echo htmlspecialchars($_POST['age']);
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Please specify gender";
        } else {
            echo htmlspecialchars($_POST['gender']);
        }
        if (empty($_POST["dance"])) {
            $danceErr = "Mention preferences";
        } else {
            echo htmlspecialchars($_POST['dance']);
        }
        if (empty($_POST["phone"])) {
            $phoneErr = "Provide phone number";
        } else {
            echo htmlspecialchars($_POST['phone']);
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email must be filled ";
        } else {
            echo htmlspecialchars($_POST['email']);
        }
        if (empty($_POST["state"])) {
            $stateErr = "Mention state";
        } else {
            echo htmlspecialchars($_POST['state']);
        }
        if (empty($_POST["city"])) {
            $cityErr = "Mention city";
        } else {
            echo htmlspecialchars($_POST['city']);
        }
        if((!empty($_POST["name"])) && (!empty($_POST["age"]))&& (!empty($_POST["gender"])) && (!empty($_POST["dance"])) && (!empty($_POST["phone"])) && (!empty($_POST["email"])) && (!empty($_POST["state"])) && (!empty($_POST["city"]))){
            $text= 'Response is Successfully Recorded';
           
        }
        
    }
    ?>
    <div align="center"><br><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <span class="banner"><?php echo $text;?></span><br>
            <h2>DANCE ACADEMY</h2>

            <h3 class="oblique">Admission Form</h3>
            Name: <input type="text" name="name" placeholder="Name">
            <span class="error">* <?php echo $nameErr; ?></span>
            <br><br>
            Age:
            <input type="text" name="age" placeholder="Age">
            <span class="error">* <?php echo $ageErr; ?></span>
            <br><br>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br>
            Dance Form:
            <input type="radio" name="dance" value="classical">Classical
            <input type="radio" name="dance" value="western">Western
            <span class="error">* <?php echo $danceErr; ?></span><br>
            <h3 class="oblique"><I>Provide your contact details</I></h3>
            Phone No.:
            <input type="text" name="phone" placeholder="Phone No.">
            <span class="error">* <?php echo $phoneErr; ?></span>
            <br><br>
            E-mail:
            <input type="text" name="email" placeholder="Email">
            <span class="error">* <?php echo $emailErr; ?></span><br><br>
            State:
            <input type="text" name="state" placeholder="State">
            <span class="error">* <?php echo $stateErr; ?></span><br><br>
            City:
            <input type="text" name="city" placeholder="City">
            <span class="error">* <?php echo $cityErr; ?></span><br><br>
            <div class="btn-block"></div>
            <button type="submit" name="submit" value="Submit" href="/">SUBMIT</button>
        </form>
    </div>
</body>

</html>