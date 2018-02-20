<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

// 1
$show_else = true;
if ($show_else === false) {
	echo 'if block';
} elseif ($show_else === false) {
	echo 'elseif block';
} else {
	echo 'I love PHP';
}

echo '<hr/>';

// 2
for ($i = 0; $i < 11; $i++) {
	echo 'i=' . $i . ' <br>';
}

echo '<hr/>';

// 3
$switch_test = 5;
switch ($switch_test) {
	case 1:
		echo 'switch=' . $switch_test;
		break;
	case 2:
		echo 'switch=' . $switch_test;
		break;
	case 3:
		echo 'switch=' . $switch_test;
		break;
	case 4:
		echo 'switch=' . $switch_test;
		break;
	case 5:
		echo 'switch=' . $switch_test;
		break;
	
	default:
		echo 'switch=default';
		break;
}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>