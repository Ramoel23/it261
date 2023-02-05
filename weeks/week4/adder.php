<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Adder Assignment</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<fieldset>
<label>Enter the first number:</label>
<input type="text" name="num1"><br>

<label>Enter the second number:</label>
<input type="text" name="num2"><br>

<input type="submit" value="Add Em!"> 


</fieldset>
</form>

<?php     //adder-wrong.php

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;
echo '<h2>You added '. $num1 .'and '.$num2.'';
echo ' <p> and the answer is <br>
<style="color:red;">'.$myTotal .'!</p>';
    echo '<p><a href="">Reset page</a>';
} 


?>

    
</body>
</html>








<!-- <?php     //adder-wrong.php

//if (isset($_POST['num1'])){
//$num1 = $_POST['num1'];
//$num2 = $_POST['num2'];
//$myTotal -= $num1 + $Num2;
//echo '<h2>You added ". $num1 ." and .$num2. '"';
// echo ' <p> and the answer is <br>
//<style="color:red;">" $myTotal ."!"</p>;
//echo'<p><a href="">Reset page</a>'
//} 
// <html>
// <head>
// <title>My Adder Assignment</title>
// <style>

// </style>
// </head>
// <body>
// <h1>Adder.php</h1> <\form action="">
// Enter the first number:</label><input type="text" name="Num1"><br>
// </label>Enter the second number:<input type="text" name="num2"><br>
// <input type="submit" value="Add Em!!> </form>

 


// </body>
// </html>';{?> -->