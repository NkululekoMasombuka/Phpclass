
<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Victor's Website</title>
    <link href="../css/base.css" type="text/css" />
</head>

<body>
<header> <?php include '../include/header.php'?> </header>
<nav><?php include '../include/nav.php'?></nav>



<main>
    <h3>
        <?php

        $Number1=100;
        $Number2=60;
        $total="<h3>The total is: $";
        $total.="</h3>";


        echo "The total is: $total";



        ?>
    </h3>

    <h3> While Loop</h3>


    <?php
    $sum=1;

    while ($sum <7)
    {
        echo "<h$sum> Hello World<h$sum>";
        $sum=$sum + 1 ;

    }


    echo "<h3> While Loop</h3>";


    $sum=6;

    echo "<h3>Do Loop </h3>";
    do
    {
        echo "<h$sum> Hello World<h$sum>";
        $sum--;

    }while ($sum>0);

    echo "<br/><br/><h3>For Loop</h3>";

    for ($i=1;$i<7;$i++)
    {
        echo "<h$i>Hello World</h$i>";
    }

    echo "<br/><br/><h3>String Stuff</h3>";

    $FullName="Bob Smith";
    echo $FullName;
    echo "<br/><br/>";

    $FullName=strtoupper($FullName);
    echo $FullName;
    echo "<br/><br/>";

    $FullName=strtolower($FullName);
    echo $FullName;
    echo "<br/><br/>";

    $nameParts=explode(' ',$FullName);
    echo "First Name: " .$nameParts[0];
    echo "br/><br/>";
    echo "Last Name: ".$nameParts[1];


    ?>



</main>
<footer><?php include '../include/footer.phnotep'?></footer>


</body>

</html>