
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */

// 1
if (isset($_POST['submit_button'])) {
	echo 'Your input was: ' . $_POST['text1'];
}

	
?>

<form action="6.php" method="post">
	<input type="text" name="text1">
	<br>
	<input type="submit" name="submit_button" value="click me">
</form>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>