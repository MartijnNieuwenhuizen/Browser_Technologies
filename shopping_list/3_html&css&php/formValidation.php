<!DOCTYPE html>
<html>
<head>

	<title>Create your own Tosti</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script>
		document.createElement('header');
		document.createElement('section');
	</script>

	<link rel="stylesheet" href="./style.css">

</head>
<body>

	<header>
		<h1><a href="/">Combine your own Tosti</a></h1>
	</header>

	<form action="formValidation.php" method="post">
		
		<h2>Add your Ingredient</h2>
		<fieldset id="bread">
			
			<legend>Bread</legend>
			
			<label for="white-bread">White Bread</label>
			<input id="white-bread" type="radio" name="bread" value="white-bread" checked="checked">

			<label for="brown-bread">Brown Bread</label>
			<input id="brown-bread" type="radio" name="bread" value="brown-bread">

		</fieldset>
		<fieldset id="toppings">
			
			<legend>Toppings</legend>
			
			<label for="ingredient-tomato">Tomato</label>
			<input id="ingredient-tomato" type="checkbox" name="ingredient[]" value="tomato">

			<label for="ingredient-pineapple">Pineapple</label>
			<input id="ingredient-pineapple" type="checkbox" name="ingredient[]" value="pineapple">

			<label for="ingredient-cheese">Cheese</label>
			<input id="ingredient-cheese" type="checkbox" name="ingredient[]" value="cheese">

			<label for="ingredient-ham">Ham</label>
			<input id="ingredient-ham" type="checkbox" name="ingredient[]" value="ham">

			<label for="ingredient-latuce">Latuce</label>
			<input id="ingredient-latuce" type="checkbox" name="ingredient[]" value="latuce">

			<label for="ingredient-mozarella">Mozarella</label>
			<input id="ingredient-mozarella" type="checkbox" name="ingredient[]" value="mozarella">

			<label for="ingredient-pesto">Pesto</label>
			<input id="ingredient-pesto" type="checkbox" name="ingredient[]" value="pesto">

			<label for="ingredient-butter">Butter</label>
			<input id="ingredient-butter" type="checkbox" name="ingredient[]" value="butter">

		</fieldset>
		<fieldset id="input-ingredient">

			<legend>Others</legend>

			<label for="ingredient">Ingredient</label>
			<input id="ingredient" type="text" name="other" placeholder="Salami">

			<button id ="submit" type="submit">Create Tosti</button>

		</fieldset>

	</form>

	<section id="shopping">
		
		<h2>Shopping List</h2>

		<?php
			$bread = $_POST["bread"];
			$ingredients = $_POST["ingredient"];
			$other = $_POST["other"];
		?>
	
		<ul id="shopping-list">
			<!-- Bread -->
			<li class="shopping-list-item"> <?php echo $bread ?> </li>

			<!-- Ingredients -->
			<?php foreach ( $ingredients as &$value ) { ?>
				<li class="shopping-list-item"> <?php echo $value ?> </li> 
			<?php } ?>

			<!-- Others -->
			<?php if ( $other ) { ?>
				<li class="shopping-list-item"> <?php echo $other ?> </li>
			<?php } ?>
		</ul>

	</section>

</body>
</html>