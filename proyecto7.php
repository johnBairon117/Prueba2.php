<html>
	<head>
		<title> calculo definitiva </title>
	</head>

	<body>
		<H1>Calculo definitiva</H1>
		
		<?php echo $_POST ['nombre'];

		$nota1= $_POST ['nota1'];
		$nota1= $_POST ['nota2'];
		$nota1= $_POST ['nota3'];
		$nota1= $_POST ['nota4'];

		$def = ($nota1+$nota2+$nota3+$nota4)/4;

		<?
		    Su definitiva es: <?php echo $def ?>

    <br>
	</body>
</html>