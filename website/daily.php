
<?php
include('./includes/header.php');



if (isset ($_GET ['today'])) {
    $today = $_GET['today'] ;
} else {
       $today = date('l');
}

switch ($today) {
case 'Friday':
$coffee = '<h2>Friday Dragonball super!</h2>';
$pic = 'dragonball.png';
 $alt = 'Dragon ball super';
$content = '<p> <b>Dragonball super</b>With Majin Buu defeated half-a-year prior, peace returns to Earth, where Son Goku (now a radish farmer) and his friends now live peaceful lives. However, a new threat appears in the form of Beerus, the God of Destruction. Considered the most terrifying being in the entire universe, Beerus is eager to fight the legendary warrior seen in a prophecy foretold decades ago known as the Super Saiyan God. The series retells the events from the two Dragon Ball Z films, Battle of Gods and Resurrection  before proceeding to an original story about the exploration of alternate universes.</p>';
break;


case 'Saturday':
$coffee = '<h2>Saturday Starwars day!</h2>';
$pic = 'starwars.png';
$alt = 'Star Wars';
$content = '<p> <b>Star Wars</b>The movie revolves around a civil war taking place "in a galaxy far far away." The Rebels are fighting against the nefarious Darth Vader and his Imperial forces from the Galactic Empire, a tyrannical army intent on destroying civilizations across the universe.</P>';
break;

case 'Sunday':
$coffee = '<h2>Sunday is Game Of Thrones!</h2>';
$pic = 'game.png';
$alt = 'game of thrones';
$content = '<p> <b>Game Of Thrones</b> Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia. In the mythical continent of Westeros, several powerful families fight for control of the Seven Kingdoms.</P>';
break;

case 'Monday':
$coffee = '<h2>Monday is For my hero academia!</h2>';
$pic = 'myhero.png';
$alt = 'My hero Acadmia';
$content = '<p> <b>My hero Acadmia</b>  is a Japanese superhero manga series written and illustrated by Kōhei Horikoshi. The story follows Izuku Midoriya, a boy born without superpowers (called Quirks) in a world where they have become commonplace, but who still dreams of becoming a superhero himself.</P>';
break;

case 'Tuesday':
$coffee = '<h2>Tusday The last of Us!</h2>';
$pic = 'last.png';
$alt = 'The last of Us';
$content = '<p> <b>The last of Us</b>Twenty years after a fungal infection obliterated most of the U.S. population and turned the victims into infected monstrosities, Joel is tasked with escorting Ellie to the Fireflies to help reverse engineer a cure. This isnt easy either of them since Joel has been left almost permanently bitter after the death of his daughter  Ellie is distrusting of him </P>';
break;

case 'Thursday':
$coffee = '<h2>Thursday Is fo The Walking Dead!</h2>';
$pic = 'dead.png';
$alt = 'The Walking Dead';
$content = '<p> <b>The walking Dead</b>The Walking Dead, based on the comic book series written by Robert Kirkman and published by Image Comics, tells the story of the months and years that follow after a zombie apocalypse. It follows a group of survivors, led by police officer Rick Grimes, who travel in search of a safe and secure home.</P>';
break;

case 'Wednesday':
$coffee = '<h2>Wednesday is Naruto!</h2>';
$pic = 'naruto.png';
$alt = 'Naruto';
$content = '<p> <b>Naruto</b> s a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village. The story is told in two parts  the first set in Narutos preteen years  the second in his teens </P>';
break;

}

?>








<div id="wrapper">
<h1> Jaw Dropping Shows</h1>
<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt; ?>">
<?php echo $content; ?>
<h2> Hot Shows for the day</h2>
<ul>
<li><a href="daily.php?today=Monday">Monday</a></li>
<li><a href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a href="daily.php?today=Wednesday">Wednesday</a></li>
<li><a href="daily.php?today=Thursday">Thursday</a></li>
<li><a href="daily.php?today=Friday">Friday</a></li>
<li><a href="daily.php?today=Saturday">Saturday</a></li>
<li><a href="daily.php?today=Sunday">Sunday</a></li>

</ul>


</div>

<!--end wrapper-->
  
 <?php
     include('./includes/footer.php');
  ?>  
