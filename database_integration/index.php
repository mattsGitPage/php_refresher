

<?php
//connecting to different databases
//using mysqli as well as PDO

$server_name = "localhost";
$user_name = "group";
$password = "P@ssword1";
$db_name = "php_test";
//create the connection
//add the port at the end if neeeded
$connection = new mysqli($server_name, $user_name, $password , $db_name);

//verify the connection is established
if($connection->connect_error){
    die("could not connect to the database"  . $connection->connect_error);
}
echo "connection established";


//assuming no database is established
$create_database_query = "CREATE DATABASE php_test";

//this will only create the database if it is not created yet
if($connection->query($create_database_query) === TRUE){
    echo "database created";
}

//create tables
$create_table = "create table php_temp_table(
                                id int(11) auto_increment primary key,
                                 first_name varchar(30) not null,
                                    email varchar(30)
                                     )";

if($connection->query($create_table) === TRUE){
    echo "created table successfully";
}else {
    echo "could not create table";
}

//adding values to query at run time
$insert_query = "INSERT INTO php_temp_table (first_name, email) values (?,?)";
$insert_into_table = $connection->prepare($insert_query);

//ss in param specifies the types to be passed
$insert_into_table->bind_param("ss" , $f_name , $email);

//set the parameter
$f_name = "joe";
$email = "something@gmail.com";
$insert_into_table->execute();

//can execute the same query multiple times with different params
$f_name = "kelly";
$email = "someotheremail@gmail.com";
$insert_into_table->execute();

echo "everything inserted";
//close the insert command and the connection
$insert_into_table->close();

?>