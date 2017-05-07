<!DOCTYPE HTML>
<html>
<head>
    <!-- this displays the prompt to the user in red a little css-->
    <style>
        .display_error {
            color: red;
        }
    </style>
</head>
<body>

    <?php
    // initialize variabels to display empty boxes on screen
    $nameErr = $emailErr = $shipErr = $companyErr = "";
    $name = $email = $shipping = $comment = $company = "";

    //check each box if empty if not validate it with the function defined
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            //test input is the filters applied
            $name = test_input($_POST["name"]);

            //then validate if name is formatted correctly using a regex
            if(!preg_match("/^[A-Za-z ]*$/", $name)){
                $nameErr  = "please only characters for your name";
            }
        }

        //full email validation
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            //test the email first with the filters applied
            $email = test_input($_POST["email"]);

            //then validate format of address filtervar is built in tool for this functionality
            if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
                $emailErr = "not a valid email";
            }
        }

        
        if (empty($_POST["company"])) {
            $company = "";
        } else {
            $company = test_input($_POST["company"]);
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["shipping"])) {
            $shipErr = "shipping type is required";
        } else {
            $shipping = test_input($_POST["shipping"]);
            
        }


    }

    //helper function to validate input is correct after each entry
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    
    <!-- just some html styling to test the php functionality-->
    <h2>PHP Form Validation </h2>
    <p>
        <span class="display_error">* required field.</span>
    </p>
    <!--validates that no xss is being tried-->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name:
        <input type="text" name="name" />
        <span class="display_error">
            * <?php echo $nameErr;?>
        </span>
        <br />
        <br />
        E-mail:
        <input type="text" name="email" />
        <span class="display_error">
            * <?php echo $emailErr;?>
        </span>
        <br />
        <br />
        Company:
        <input type="text" name="company" />
        <span class="display_error">
            <?php echo $companyErr;?>
        </span>
        <br />
        <br />
        Comment:
        <textarea name="comment" rows="5" cols="40"></textarea>
        <br />
        <br />
        Shipping:
        <input type="radio" name="shipping_type" value="over_night" />Over Night
        <input type="radio" name="shipping_type" value="regular" /> Regular
        <span class="display_error">
            * <?php echo $shipErr;?>
        </span>
        <br />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>


</body>
</html>