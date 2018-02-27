<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
		$mysql = mysqli_connect('localhost', 'dev', 'pass', 'my_academy');
	
		// insert data into db
		if (isset($_POST['submit'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			if ($username && $password) {
				if ($mysql) {
					$query = "INSERT INTO users(name,password) ";
					$query .= "VALUES ('$username','$password')";
					$response = mysqli_query($mysql, $query);

					if ($response) {
						echo 'Saved to the database!';
					} else {
						die('Query failed: ' . $response);
					}
				} else {
					die('Mysql connection failed');
				}
			} else {
				echo 'Please enter your username and password';
			}
		}

	?>

	<form action="7.php" method="post">
		<input type="text" name="username">
		<br>
		<input type="password" name="password">
		<br>
		<input type="submit" name="submit" value="save">
	</form>


	<?php
		// read data from users table
		$query = "SELECT * FROM users ";
		$response = mysqli_query($mysql, $query);

		while($row = mysqli_fetch_assoc($response)) {
			print_r($row);
		}
	?>


</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
