<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>

    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">
        <?php
if (isset($_POST['submit'])) {
	echo "It works";
}
else {
	echo "It does not work";
}
?>
        <form action="6.php" method="post">
            <input type="submit" name="submit" value="SUBMIT">
        </form>


    </article>
    <!--MAIN CONTENT-->
    <?php include "includes/footer.php"; ?>