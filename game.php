<?php

	$chosenNum1 = $_GET["num1"];
	$chosenNum2 = $_GET["num2"];
	$chosenNum3 = $_GET["num3"];
	$chosenNum4 = $_GET["num4"];
	$chosenNum5 = $_GET["num5"];
	$chosenNum6 = $_GET["num6"];

	$rand1 = rand(1, 49);
	$rand2 = rand(1, 49);
	$rand3 = rand(1, 49);
	$rand4 = rand(1, 49);
	$rand5 = rand(1, 49);
	$rand6 = rand(1, 49);

	$count = 0;

	if ( $chosenNum1 == $rand1 || $chosenNum1 == $rand2 ||
		 $chosenNum1 == $rand3 || $chosenNum1 == $rand4 ||
		 $chosenNum1 == $rand5 || $chosenNum1 == $rand6 ) {
		$count++;
	}

	if ( $chosenNum2 == $rand1 || $chosenNum2 == $rand2 ||
		 $chosenNum2 == $rand3 || $chosenNum2 == $rand4 ||
		 $chosenNum2 == $rand5 || $chosenNum2 == $rand6 ) {
		$count++;
	}

	if ( $chosenNum3 == $rand1 || $chosenNum3 == $rand2 ||
		 $chosenNum3 == $rand3 || $chosenNum3 == $rand4 ||
		 $chosenNum3 == $rand5 || $chosenNum3 == $rand6 ) {
		$count++;
	}

	if ( $chosenNum4 == $rand1 || $chosenNum4 == $rand2 ||
		 $chosenNum4 == $rand3 || $chosenNum4 == $rand4 ||
		 $chosenNum4 == $rand5 || $chosenNum4 == $rand6 ) {
		$count++;
	}

	if ( $chosenNum5 == $rand1 || $chosenNum5 == $rand2 ||
		 $chosenNum5 == $rand3 || $chosenNum5 == $rand4 ||
		 $chosenNum5 == $rand5 || $chosenNum5 == $rand6 ) {
		$count++;
	}

	if ( $chosenNum6 == $rand1 || $chosenNum6 == $rand2 ||
		 $chosenNum6 == $rand3 || $chosenNum6 == $rand4 ||
		 $chosenNum6 == $rand5 || $chosenNum6 == $rand6 ) {
		$count++;
	}

?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<table border="1" style="width:75%">

	    <tr>
	    	<td class="special1">Your Numbers</td>
	  	    <td><?php echo $chosenNum1 ?></td>
	  	    <td><?php echo $chosenNum2 ?></td>
	  	    <td><?php echo $chosenNum3 ?></td>
	  	    <td><?php echo $chosenNum4 ?></td>
	  	    <td><?php echo $chosenNum5 ?></td>
	  	    <td><?php echo $chosenNum6 ?></td>
	    </tr>

	    <tr>
			<td class="special1">Correct?</td>
	    	<td class="collumn1">
	    		<?php if ($chosenNum1 == $rand1 ||
			              $chosenNum1 == $rand2 ||
			              $chosenNum1 == $rand3 ||
			              $chosenNum1 == $rand4 ||
			              $chosenNum1 == $rand5 ||
			              $chosenNum1 == $rand6) {
					echo "YES"; echo '<style type="text/css"> .collumn1 {background-color: green;} </style>';
					} else { echo "NO"; } ?>
			</td>

	    	<td class="collumn2">
	    		<?php if ($chosenNum2 == $rand1 ||
			              $chosenNum2 == $rand2 ||
			              $chosenNum2 == $rand3 ||
			              $chosenNum2 == $rand4 ||
			              $chosenNum2 == $rand5 ||
			              $chosenNum2 == $rand6) {
					echo "YES"; echo '<style type="text/css"> .collumn2 {background-color: green;} </style>';
					} else { echo "NO"; } ?>
			</td>

	    	<td class="collumn3">
	    		<?php if ($chosenNum3 == $rand1 ||
			              $chosenNum3 == $rand2 ||
			              $chosenNum3 == $rand3 ||
			              $chosenNum3 == $rand4 ||
			              $chosenNum3 == $rand5 ||
			              $chosenNum3 == $rand6) {
					echo "YES"; echo '<style type="text/css"> .collumn3 {background-color: green;} </style>';
					} else { echo "NO"; } ?>
			</td>

	    	<td class="collumn4">
	    		<?php if ($chosenNum4 == $rand1 ||
			              $chosenNum4 == $rand2 ||
			              $chosenNum4 == $rand3 ||
			              $chosenNum4 == $rand4 ||
			              $chosenNum4 == $rand5 ||
			              $chosenNum4 == $rand6) {
					echo "YES"; echo '<style type="text/css"> .collumn4 {background-color: green;} </style>';
					} else { echo "NO"; } ?>
			</td>

	    	<td class="collumn5">
	    		<?php if ($chosenNum5 == $rand1 ||
						  $chosenNum5 == $rand2 ||
						  $chosenNum5 == $rand3 ||
						  $chosenNum5 == $rand4 ||
						  $chosenNum5 == $rand5 ||
						  $chosenNum5 == $rand6) {
					echo "YES"; echo '<style type="text/css"> .collumn5 {background-color: green;} </style>';
					} else { echo "NO"; } ?>
			</td>

	    	<td class="collumn6">
	    		<?php if ($chosenNum6 == $rand1 ||
			              $chosenNum6 == $rand2 ||
			              $chosenNum6 == $rand3 ||
			              $chosenNum6 == $rand4 ||
			              $chosenNum6 == $rand5 ||
			              $chosenNum6 == $rand6) {
					echo "YES";  echo '<style type="text/css"> .collumn6 {background-color: green;} </style>';
					} else { echo "NO"; } ?>
			</td>

	    </tr>

	    <tr>
	    	<td class="special2">Random Numbers</td>
	        <td><?php echo $rand1 ?></td>
	        <td><?php echo $rand2 ?></td>
	        <td><?php echo $rand3 ?></td>
	        <td><?php echo $rand4 ?></td>
	        <td><?php echo $rand5 ?></td>
	        <td><?php echo $rand6 ?></td>
	    </tr>

	    <tr><td class="specialRow" colspan=7 align="center"><?php echo $count . " out of 6 numbers guessed"; if( $count == 6) { echo " - You WON!";  echo '<style type="text/css"> .specialRow {background-color: green;} </style>';} ?></td></tr>

	</table>

</body>
</html>