<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="styles.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="playground.js"></script>
</head>
<body>

<?php 

function echo_grid($height,$width){
	$r = 0;
	$c = 0;
		for ($r=0;$r<$height;$r++){
			echo "<div class='row row-'" . $r . "'>
			";
			for ($c=0;$c<$width;$c++){
				echo "<div class='col col-" . $c . "'></div>
				";
			}
			echo "</div>";
		}
  }

	echo_grid(70,100);
 ?>

</body>
</html>
