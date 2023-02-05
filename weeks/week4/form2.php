<?php
// more on our form - additional fields, AND>>>
// the logic - if I do not enter anything inside the input field there will be a message!!!
//if a field is empty we need to do something - sounds like an if else statement
//first_name, last_name, email, comments
//be careful with our braces!!!!!

if(isset ($_POST['first_name'], 
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])) {
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

// creat another if statement - if fields are empty, echo please fillout fields

if(empty($_POST['first_name'] &&
$_POST['last_name'] &&
$_POST['email'] &&
$_POST['comments'])) {

echo 'Please fill out all of the fields';    

} else {

echo $first_name;
echo '<br>';
echo $last_name;
echo '<br>';
echo $email;
echo '<br>';
echo $comments;
echo '<br>';

} // end else

} else {
echo '

<form action="" method="post">
<label>First Name</label>
<input type="" name="first_name">

<label>Last Name</label>
<input type="" name="last_name">

<label>Email</label>
<input type="" name="email">

<label>Comments</label>
<textarea name="></textarea>

<inputctype="submit" value="Send it!">

</form>

<p><a href="">RESAT</a></p>
';




} //end else