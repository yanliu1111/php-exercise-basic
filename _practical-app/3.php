<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>

    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">

        <?php  

if(3 > 10) {
	echo "three is less than ten". "<br>";
} elseif(4 > 5) {
	echo "of course four is less than five". "<br>";
} else {
	echo "it is not". "<br>";
}

for ($i=0; $i<10; $i++) {
 echo $i . "<br>";
}

$value = 10;
switch ($value) {
	case 2:
		echo "it is two";
		break;
	case 5:
		echo "it is five";
		break;
	case 10:
		echo "it is ten";
		break;
}


	
?>






    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>