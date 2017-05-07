<!--this is testing form inputs with php
    I will be focusing on proper usage of
    POST, GET, and other security techniques-->

<!Doctype html>
<html>
<body>
    <?php
    //this validates form data using php
    echo "having issues with xxs";
    $name = $email =$gender = $comment = $website = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }
    //test the input to make code more reusable
    function test_input($data){
        $data = trim($data); //gets rid of the spaces
        $data = stripslashes($data); // removes slashes in string
        $data = htmlspecialchars($data); //removes special chars to help prevent xxs
        return $data;
    }
    ?>
    
    <!--creating a quick ui for testing-->

    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name:
        <input type="text" name="name" />
        <br />
        <br />
        Company:
        <input type="text" name="company" />
        <br />
        <br />
        Website:
        <input type="text" name="website" />
        <br />
        <br />
        Comment:
        <textarea name="comment" rows="5" cols="40"></textarea>
        <br />
        <br />
        Gender:
        <input type="radio" name="gender" value="female" />Female
        <input type="radio" name="gender" value="male" />Male
        <br />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>
   
    
    <?php
    echo "<h2> input is </h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    ?>
</body>
</html>
