<?php
// this file will demonstrate for loops and in addition to placing your php inside your HTML!!! 
// The for loop - Loops through a block of code a specified number of times.
//foe(init counter; test counter; increment counter) { code to be executed for each iteration;}

// celcius and fahrenheit

// far = ($celcius*9/5) +32;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}       

table {
    width: 500px;
    margin:20px auto;
    border-collapse: collapse;
    border:1px soild lightblue;
}
td, th {
    border:1px soild lightblue;
    border-collapse: collapse;
    padding:5px4;
}

h1, h2{
    text-align: center;
    margin: 10px 0;
    color: green;
    
}
</style>
</head>
<body>
    <h1>My Celcius / Fahrenheit Table!</h1>
<table>
<tr>
<th>Celcius</th>
<th>Fahrenheit</th>
</tr>
<?php
 for($cel = 0; $cel <= 100; $cel += 5) {
$far = ($cel * 9/5) +32;
echo '<tr>';
echo '<td>'.$cel.' degress  </td>';
echo '<td>'.$far.' degress  </td>';
echo '</tr>';
}
?>

<table>

<h2> You will now complete a kilometer/mileage table on your own</h2>

<table>
    <tr>
        <th>kilometer</th>
        <th>mileage</th>
    </tr>
    <?php
    for($kil =1; $kil <= 50; $kil += 5) {
    $mil = ($kil * 0.621) /1;
    echo '<tr>';
    echo '<td>'.$kil.' distance </td>';
    echo '<td>'.$mil.' distance  </td>';
    echo '</tr>';
}
?>


</body>
</html>    