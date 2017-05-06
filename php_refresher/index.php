<!Doctype html>

<!--testing php concepts-->
<html>
<body>

    <h1>PHP page intro</h1>


    <?php

	//testing output
	echo "testing output echo function </br>";

	//testing variable usage vars in  php can be  any value
	$x = 5 + 5;
	echo $x  , " this is adding variables</br>";

	//using functions
	//functions have local scope only
	function test(){
		echo "<p> i am a fucntion and only have access to variables in my scope</br>";
	}
	test();
	//--------------------------------

	//using globals can give us a larger scope
	$x = 5;
	$y = 10;

	function globalTest(){
		//need to specify global to gain that access to parameters declared outside of scope
		global $x , $y;
		$y = $x + $y;
	}

	globalTest();
	echo  " global key word test " , $y ,  "</br>";
	// end global test-----------

	//decalaring globals in a global array
	$x = 5;
	$y = 10;

	function globalArrayFunction(){
		$Globals['y'] = $GLOBALS['x'] = $GLOBALS['y'];
	}
	globalArrayFunction();
	echo "global array test " , $y , "</br>";
	//-----------------------------------

	//using static to keep variables from being deleted

	function staticTest(){
		static $x = 0;
		echo "static variable incremented to not loose value in each call " , $x , "</br>";
		$x++;
	}
	staticTest();
	staticTest();
	staticTest();
	//---------------------------------

    //dealing with different datatypes var_dump reveals the passed values type
    $temp = 5757;
    var_dump($temp);
    //------- works with all data types

    //using arrays w/ vardump returns all the size of array as well as values sizes
    $values =array("one" , "two" , "three");
    var_dump($values);
    //-------------------


    //objects in php
    class Animal{
        function animal(){
            $this->type = "dog";
        }
    }

    //instantiate an object
    $that_dog = new Animal();
    echo $that_dog->type , "</br>";
    //------------------------------

    //using system fucntions
    echo strlen("finding the length of this string");
    echo("</br>");
    echo str_word_count("finding the number of words in this string");
    echo("</br>");
    echo strrev("reversing the entire string");
    echo("</br>");
    echo strpos("finding a word in a string returns the starting index of the found word" , "word");
    echo("</br>");
    echo("str_replace replaces a word in a string with specifed value </br>");
    echo str_replace("word to replace" , "replaced word to replace", "word to replace");
    echo("</br>");
    echo("tons more functions see documentation </br>");

    //----------------------

    //using define to label constants
    define("GREETING", "welcome to a constant </br>");
    function testConstants(){
        echo GREETING;
    }
    testConstants();
    //----------------------

    //conditional operators
    $check = 1;
    if($check){
        echo("if check done </br>");
    }
    //all the rest are like any other language
    //------------------------------

    //passing parameters in a function
    function passArgument($args){
        echo "$args passed </br>";
    }
    passArgument("first arg");
    passArgument("second arg");
    //works the same with multiple parameters

    //passing to function with default values
    function defaultArg($arg = 30){
        echo "the arg is : $arg <br>";
    }
    defaultArg(400);
    defaultArg();
    //-------------
    
    //returning values for functions
    function sum($s, $z)
    {
        $z = $s+$z;
        return $z;
    }
    echo "testing values passed to fucntion with return <br>";
    echo sum(4,4) . "<br>";
    echo sum(4,2) . "<br>";
    //---------------------------------

    //indexed arrays
    $temp_array = array("item1" , "item2" , "item3");
    echo "temp array contents " . $temp_array[0] . ", " . $temp_array[1] . " and " . $temp_array[2];
    //get count of array
    echo count($temp_array) . "<br>";

    //iterating through array
    echo "iterating through an array <br>";
    $length = count($temp_array);
    for($i = 0 ; $i < $length; $i++)
    {
        echo $temp_array[$i];
        echo "<br>";
    }
    //----------------

    //associative arrays
    echo "associative array";
    $name_array = array("name1" => "35" , "name2" => "33" , "name3" => "22");

    echo "name1 is " . $name_array['name1'] . " years old";





    ?>

</body>
</html>