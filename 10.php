<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

		Step 6: Call the method ShowAll
	*/
	
	?>


<h4>1,2,3,4,5,6</h4>
<?php
	class Dog {
		private $head;
		private $legs;
		private $tail;

		public function __construct($head, $legs, $tail) {
			$this->head = $head;
			$this->legs = $legs;
			$this->tail = $tail;
		}

		public function showAll() {
			return get_object_vars($this);
		}
	}

	echo 'new Dog(2,3,1) <br>';

	print_r ((new Dog(2,3,1))->showAll());
?>




</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>