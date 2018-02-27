<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

// 1
echo rand(0,100);
echo '<br>';

// 2
echo strlen('Hello world');
echo '<br>';
	
// 3
$test_array = [1,33,22,12,102,2];
echo sort($test_array);
echo '<br>';

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>