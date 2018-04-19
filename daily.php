<?
//daily.php
?>

<?php include 'includes/config.php';?>

<?php
//index of Album of the Day

$backgroundColor = ''; //will store the color the user wants
$imageName = ''; //Rotating image
$altText = ''; //Rotating alt text
$dailyText = '';//Rotating album description

//Testing Line Below
//$dayName = "Monday";

if(isset($_GET['dayName']))
{
    $dayName = $_GET['dayName'];
}else{
    $dayName = date('l'); //day of the week e.g. "Tuesday"
}

if($dayName == "Sunday"){
    $backgroundColor = "pink";
    $imageName = "carpenter-brut";
    $altText = "Trilogy by Carpenter Brut";
    $dailyText = "Trilogy by Carpenter Brut shows us that the electric 80s never left, but instead has gotten better than ever.  The future is retro";
}
else if($dayName == "Monday"){
    $backgroundColor = "blue";
    $imageName = "beborn-beton";
    $altText = "A Worthy Compensation by Beborn Beton";
    $dailyText = "A Worthy Compensation by Beborn Beton was 15 years in the making and worth every second.";
}else if($dayName == "Tuesday"){
    $backgroundColor = "red";
    $imageName = "korpiklaani";
    $altText = "Noita by Korpiklaani";
    $dailyText = "Noita by Korpiklaani has the band almost leaving behind their folk metal background for a more death metal sound.";
}else if($dayName == "Wednesday"){
    $backgroundColor = "green";
    $imageName = "alcest";
    $altText = "Shelter by Alcest";
    $dailyText = "Shelter by Alcest continues the French post metal with excellent guitar work.";
}else if($dayName == "Thursday"){
    $backgroundColor = "yellow";
    $imageName = "spiritual-front";
    $altText = "Black Hearts in Black Suits by Spiritual Front";
    $dailyText = "Black Hearts in Black Suits by Spiritual Front is a radical departure from the previous style by being mostly piano with occasional backup.  Per";
}else if($dayName == "Friday"){
    $dayName = "Friday";
    $backgroundColor = "orange";
    $imageName = "Rome";
    $altText = "Flowers From Exile by Rome";
    $dailyText = "Flowers From Exile by Rome shows why Rome is the best neofolk artist today.";
}else if($dayName == "Saturday"){
    $dayName = "Saturday";
    $backgroundColor = "black";
    $imageName = "ofthewandandthemoon";
    $altText = "The Lone Descent by Of The Wand and the Moon";
    $dailyText = "The Lone Descent by Of The Wand and the Moon is the best neofolk album ever made.  Period.";
}else{
    echo "Apparently today is monswentuerisday =(";
    die;
}

?>


<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<p><strong>Today is <?=$dayName?> so you should listen to...</strong></p>
            <img src="images/<?=$imageName?>.jpg" alt="<?=$altText?>" height="300" width="300" id="album">
            <br>
            <strong class="feature"><?=$dailyText?>&nbsp; A great album to listen to on <?=$dayName?>.</p>
<p><a href="daily.php?dayName=Sunday">Sunday</a></p>
<p><a href="daily.php?dayName=Monday">Monday</a></p>
<p><a href="daily.php?dayName=Tuesday">Tuesday</a></p>
<p><a href="daily.php?dayName=Wednesday">Wednesday</a></p>
<p><a href="daily.php?dayName=Thursday">Thursday</a></p>
<p><a href="daily.php?dayName=Friday">Friday</a></p>
<p><a href="daily.php?dayName=Saturday">Saturday</a></p>
<?php include 'includes/footer.php';?>