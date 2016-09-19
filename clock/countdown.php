<?php
    //Dec. 20th 3:20PM \ 15:20
    $secPerMin=60;
    $secPerHours = 60 * $secPerMin;
    $secPerDay = 24 * $secPerHours;
    $secPerYear = 365.25 * $secPerDay;

    //current time

    $now = time();

    //Future Date
    $eos=mktime(15,20,0,12,20,2017);

    //Number of Seconds between now and EOS
    $seconds = $eos-$now;

    $Years = floor ($seconds/$secPerYear);
    $seconds=$seconds - ($Years*$secPerYear);

    $Days=floor($seconds/$secPerDay);
    $seconds-=$Days * $secPerDay;

    $Hours=floor($seconds/$secPerHours);

    $Minutes= floor($seconds/$secPerMin);
    $seconds=$seconds-($Minutes*$secPerMin);



?>
<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Victor's Website</title>

    <meta>

</head>

<body>
<header> <?php include '../include/header.php'?> </header>
<nav><?php include '../include/nav.php'?></nav>



<main>
<h3>End of Semester</h3>
    <p>Years: <?=$Years?> | Days: <?=$Days?> | Hours:<?=$Hours?> | Minutes:<?=$Minutes?> | Seconds:<?=$seconds?></p>

    <br>

    <?=$now?>

    <br>
    <?=$eos?>




</main>
<footer><?php include '../includes/footer.php'?></footer>


</body>

</html>