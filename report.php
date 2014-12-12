<html>
	<head>
		<title>Report</title>
	</head>
	<body>
		<h2>PHP TEST</h2>
		<?php
			$firstname = $_POST['firstname'];
			$problem = $_POST['problem'];

			echo 'First name: ' . $firstname . '<br />';
			echo 'Problem: ' . $problem;
		?>
	</body>
</html>