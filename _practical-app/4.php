<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php  

function calculation () {
	$number1 = 10;
	$number2 = 20;
	$sum = $number1 + $number2;
	return $sum;
}
 $theSum = calculation();
 echo $theSum . "<br>";

 function addNumbers($number1, $number2) {
	 $sum = $number1 + $number2;
	 return $sum;
 }
 $theSum = addNumbers(30, 20);
 echo $theSum . "<br>";

 function saySomething($hello) {
	 echo $hello;
 }
 saySomething("Hello World");
	
?>





    </article>
    <!--MAIN CONTENT-->


    <?php include "includes/footer.php"; ?>