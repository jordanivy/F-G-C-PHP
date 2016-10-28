<?php
/**
 * User: Jordan Ivy
 * Date: 10/26/2016
 * Time: 8:03 PM
 */

//Begin the session:
session_start();

//Files containing necessary functions:
include "header.php";
include "databaseconnection.php";

//Function call from 'header.php':
pageHeader("Dr. Hong's Calculator"); 
 
//Set session variables to collected post variables:
if(isset($_POST['exam1Grade'])){
$_SESSION['post-data'] = $_POST;
} 

//Displaying calculation results:
echo "This student's final grade is: <br>";
echo ($_SESSION['post-data']['exam1Grade'] * 0.25) + ($_SESSION['post-data']['exam2Grade'] * 0.25) 
+ ($_SESSION['post-data']['finalExamGrade'] * 0.25) + ($_SESSION['post-data']['projectGrade'] * 0.25);
echo "<br><br>";

//Close the connection to the database:
$conn->close();
?>