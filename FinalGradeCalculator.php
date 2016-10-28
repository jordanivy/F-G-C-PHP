<DOCTYPE !HTML>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
<link rel="stylesheet" href="styles.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php
/**
 * User: Jordan Ivy
 * Date: 10/26/2016
 * Time: 8:03 PM
 */

//Begin the session:
session_start();

//Files containing necessary functions:
include "databaseconnection.php";
 
//Form used to receive data from user for session variables:
echo "
<fieldset>
<div class='top-section'>
<h1>Dr. Hong's Calculator</h1>
</div>

<hr>

<div class='container'>

<form action='success.php' method='post'>
<div class='row'>
<div class='form-group'>
<div class='col-lrg-1'>
<label for='exam1Grade' class='col-lrg-1 control-label'>Exam 1:</label>
<input type='number' name='exam1Grade' class='form-control'><br>
</div></div></div>

<div class='row'>
<div class='form-group'>
<div class='col-lrg-1'>
<label for='exam2Grade' class='col-lrg-1 control-label'>Exam 2:</label>
<input type='number' name='exam2Grade' class='form-control'><br>
</div></div></div>

<div class='row'>
<div class='form-group'>
<div class='col-lrg-1'>
<label for='finalExamGrade' class='col-lrg-1 control-label'>Final:</label>
<input type='number' name='finalExamGrade' class='form-control'><br>
</div></div></div>

<div class='row'>
<div class='form-group'>
<div class='col-lrg-1'>
<label for='projectGrade' class='col-lrg-1 control-label'>Project:</label>
<input type='number' name='projectGrade' class='form-control'>
</div></div></div>
<br>

<button type='submit' class='btn btn-primary'>Submit</button>
</div>
</fieldset>
</form>
</div>";


//Close the connection to the database:
$conn->close();

?>

</body>
</html>