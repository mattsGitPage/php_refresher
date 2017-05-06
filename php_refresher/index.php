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



    ?>

</body>
</html>