<?php
// undrstanding the logic!!
$ruble_rate =0.017 ;
$pound_rate =1.15 ;
$canadian_rate = .76  ;
$euro_rate =1.00  ;
$yen_rate = .0074 ;

$ruble =10007; 
$pound =500;
$canadian = 5321;
$euro = 1291;
$yen = 4030;

$ruble_converted = $ruble * $ruble_rate; 
$pound_converted = $Pound * $pound_rate; 
$canadian_converted = $canadian * $canadian_rate; 
$euro_converted = $euro * $euro_rate; 
$yen_converted = $yen * $yen_rate; 

$total = $ruble_converted + $pound_converted + $canadian_converted + $euro_converted + $yen_converted 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <title>My Currency Logic Exercise</title>

    <style>
*  {
    padding:0;
    margin:0;
    box-sizing:border-box;
}

#wrapper {
    width:500px;
    margin:30px auto;
}

table {
    border:1px solid orange;
    border-collapse:collapse;
    width:500px;
}

th, td{
    border:1px soild orange;
    padding:8px;
}
h1, h2, h3 {
    text-align:center;
}





    </style>
</head>        
<body>
<div id="wrapper">
<h1>After our world-wind travels, we have returned home with the following currencies</h1>
<ul><li>Rubles</li>
<li>Pound sterling</li>
<li>Canadian Dollar</li>
<li>Euros</li>
<li>Yens</li>

</ul>
<h2>Whatever shall we do</h2>

<table>
<tr>
<th colspan="2">Currency</th>
<th>Dollars</th>
</tr>

<tr>
<th>Rubles</th>
<td><?php echo $ruble;     ?></td>
<td>$<?php '' .number_format($ruble_converted, 2). '';    ?></td>
</tr>

<tr>
<th>Pound sterling</th>
<td><?php echo $pound;   ?></td>
<td>$<?php '' .number_format($pound_converted, 2). '';  ?></td>
</tr>

<tr>
<th>Canadian Dollars</th>
<td><?php echo $canadian; ?></td>
<td>$<?php '' .number_format($canadian_converted, 2). ''; ?></td>
</tr>

<tr>
<th>Euros</th>
<td><?php echo $euros;  ?></td>
<td>$<?php '' .number_format($euros_converted, 2). '';  ?></td>
</tr>

<tr>
<th>Yens</th>
<td><?php echo $yens;   ?></td>
<td>$<?php echo '' .number_format($yen_converted, 2). '';   ?></td>
</tr>

<tr>
<th>Total</th>
<td>American Dollars</td>
<td>$<?php echo '' .number_format($total, 2) . '';   ?></td>
</tr>

</tr>

</table>


</div>
</body>
</html>

