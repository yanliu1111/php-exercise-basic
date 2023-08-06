<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

$number1 = 10;
$number2 = 20;

echo $number1 + $number2 . "<br>";

$lists = array(21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
$lists_assoc = array("first_name" => 'Peter', "last_name" => 'Paker', "Age"=>18);
echo $lists[0] . "<br>";
echo $lists_assoc ["first_name"]. " " . $lists_assoc["last_name"]. " " .$lists_assoc["Age"]."<br>";
		
		?>



    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>