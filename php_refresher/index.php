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
    define("GREETING", "welcome to a constant");
    function testConstants(){
        echo GREETING;
    }
    testConstants();
    //----------------------

    ?>

</body>
</html>