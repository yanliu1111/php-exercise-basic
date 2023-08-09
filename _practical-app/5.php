<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

    <aside class="col-xs-4">
        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php 


//Step1: Use a pre-built math function here and echo it
echo pow(2,7) . "<br>";

//Step 2:  Use a pre-built string function here and echo it
$string = "Hello World";
$valueLength = strlen($string);
echo $valueLength . "<br>";

//Step 3:  Use a pre-built Array function here and echo it
$values = ['Hey', 'Morning', 3456,'Goodbye',897, $string];
$found = in_array($string, $values);
if ($found) {
	echo "Found";
} else {
	echo "Not Found";
}
	
?>





    </article>
    <!--MAIN CONTENT-->
    <?php include "includes/footer.php"; ?>