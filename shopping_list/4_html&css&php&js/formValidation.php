<!-- Let the php get the form elements AND handle it with JS as enhancement -->

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