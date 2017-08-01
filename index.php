
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tabla de multiplicar 5</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


	<style type="text/css">
		*{
			font-family: Verdana;
			font-size: 12px;
		}

		table{
			border-collapse: collapse;
			margin-top: 50px;
			
		}

		tr th{
			background-color: #26a89a;
			color: white;
		}

		td {
			border: 1px solid #26a89a;;
			padding: 15px;
			text-align: center;
			min-width: 35px;
		}
	</style>

</head>
<body>
	<header>
		<div class="container">
			<h1>Tablas de multiplicar modificado desde rama1</h1>
			<h2>Proba de tablas</h2>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Varias tablas</h2>
			</div>
		</div>
		<div class="row">
			<?php
			for($j=1;$j<11;$j++){
				$number = $j;
				echo '<div class="col-md-3">';
				echo '<table class="table">';
				echo '<tr><th colspan="5">Tabla de multiplicar del <b>'.$number.'</b></th></tr>';

				for($i=0; $i<11; $i++){
					echo '<tr>';
					echo '<td>' . $number .'</td>';
					echo '<td> x </td>';
					echo '<td>'. $i . '</td>';
					echo '<td> = </td>';
					echo '<td><b>' . $i * $number . '</b></td>';
					echo '</tr>';
				}

				echo '</table>';
				echo '</div>';
			}
			
			?>
		</div>		
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Una sola tabla</h2>
			</div>
		</div>
		<div class="row">
			<?php


			echo '<div class="col-md-3">';
			echo '<table class="table">';
			echo '<tr>';
			echo '<th>&nbsp;</th>';
			for ($col = 1; $col <=10; $col++) :
				echo "<th>$col</th>";
			endfor;
			echo '</tr>';

			for ($row = 1, $col = 1; $row <=10; $row++) :
				echo '<tr>';
			if ($col == 1) {
				echo "<th>$row</th>";
			}
			while ($col <= 10) :
				echo '<td>' . $row * $col++ . '</td>';
			endwhile;
			echo '</tr>';

			$col = 1;
			endfor;

			echo '</table>';
			echo '</div>';

			
			?>
		</div>		
	</div>

	<footer>
		<div class="container">
			<p>2017</p>
		</div>
	</footer>
</body>
</html>
