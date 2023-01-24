<?php
// class coffe exercise
// if today is Gridy it will be pumpkin latte day 
// INTRODUCING the isset ()Function 
// then we will introduce our first GLOBAL variable
// our switch




// starting the switch
// if $GET ['today'] is set, $today, then all is well, but it is not set therefore the else is the day !
// else, today is Today

//Global VARIABLES are capitalized and start with $_GET


// what is the isset function - is asking if something has been set?

// $varibale = 'This is our variable';
// if (isset ($variable)) {
// echo 'Variable has been set';
// } else
// echo 'Variable has not been set!';

// echo '<br>';

// if (isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT!!!!!!!!';
// }

if (isset ($_GET ['today'])) {
 $today = $_GET['today'] ;
} else {
    $today = date('l');
}

switch ($today) {
case 'Friday':
$coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
$pic ='pumpkin.png';
$alt ='Pumpkin Latte';
$content ='<p> <b>A pumpkin latte </b>Combine the milk, pumpkin puree, sugar, pumpkin pie spice and vanilla in a medium microwave safe bowl, cover the bowl with plastic wrap and vent with a small hole. Microwave until the milk is hot, 1 to 2 minutes. Whisk vigorously until the milk mixture is foamy, about 30 seconds.</p>';
break;


case 'Saturday':
$coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
$pic ='green.png';
$alt ='green Latte';

$content = '<p> <b>What Is a Green Tea latte A green tea</b> latte is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place. You can use any type of green tea to make a latte, but the most common one these days is definitely a matcha latte.</P>';
break;

case 'Sunday':
$coffee = '<h2>Sunday is our Regular Joe Day!</h2>';
$pic ='coffe.png';
$alt ='Regular Coffee';
$content = '<p> <b>A cup of Joe</b> Brewing is the most common way to make coffee in the US and Europe. Also known as regular coffee, brewed coffee is made by pouring hot or boiling water over ground coffee beans, usually contained in a filter. One cup of brewed coffee</P>';
break;

case 'Monday':
$coffee = '<h2>Monday is our Regular Joe Day!</h2>';
$pic ='latte.png';
$alt ='Latte';
$content = '<p> <b>A cup of Latte/b> Coffee, which was adopted from the Ottoman empire, and milk have been part of European cuisine since the seventeenth century. Caffè e latte, Milchkaffee, café au lait, and café con leche are domestic terms of traditional ways of drinking coffee, usually as part of breakfast in the home</P>';
break;

case 'Tuesday':
$coffee = '<h2>Tusday is Americano Day!</h2>';
$pic ='americano.png';
$alt ='Americano';
$content = '<p> <b>A cup of Americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. Its strength varies with the number of shots of espresso and amount of water added.</P>';
break;

case 'Thursday':
$coffee = '<h2>THursday is Cold brew Day!</h2>';
$pic ='coldbrew.png';
$alt ='Cold Brew';
$content = '<p> <b>A cup Colde brew</b> is coffee that is brewed at a lower temperature than traditional coffee. This brewing method results in a less acidic, smoother cup of coffee. It can be made using a variety of methods, but the two most popular are the immersion method</P>';
break;

case 'Wednesday':
$coffee = '<h2>Wednesday is Matcha tea Day!</h2>';
$pic ='matcha.png';
$alt ='Match tea';
$content = '<p> <b>A cup Matcha tea</b> is a type of green tea used for centuries in China and Japan. The leaves are harvested, steamed, and dried then ground into a fine powder. While most teas are brewed from stepped leaves that are then filtered out, matcha tea includes the whole leaf in its powder.</P>';
    break;


}
?>
<!DOCTYPE html>
 <html lang="en"> 
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Switch Classwork Exercise</title>
 <style>
      *{
          padding: 0;
         margin: 0;
         box-sizing: border-box;
     }    
 #wrapper {
     width: 940px;
     margin: 20px auto;
 }

 h1, h2  img {
    margin-bottom: 10px;
 }

p {
   margin-bottom: 20px; 
} 


</style>
</head>
<body>
<div id="wrapper">
<h1> My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt; ?>">
<?php echo $content; ?>
<h2> Check out our Daily Specials   
<ul>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>


</ul>


</div> 
  <!--end wrapper-->
 </body>
 </html>
