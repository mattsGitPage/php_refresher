<?php

//using multi demensional arrays

$twoDArray = array(
                    array("value1" , 33, 3),
                    array("value2" , 11, 1),
                    array("value3" , 44, 4)
    );

$size = sizeof($twoDArray);
$sizeOfArrayContent = 3;
for( $i = 0; $i< 3; $i++)
{
    echo "<p><b> Row number $i</b></p>";
    echo "<ul>";
    for($j = 0; $j < 3; $j++)
    {
        echo "<li>" . $twoDArray[$i][$j]."</li>";
    }
    echo "</ul>";
}
//=========================================

//using include and require brings in specified file
//upon failure require will cause error include will give warning
//similar to headers in C with passing vars and content
//examples
//include 'filename.php';
//require 'filename.php';

//file reading same syntax as C for the most part

//file uploads are set up initially through the php.ini file




?>