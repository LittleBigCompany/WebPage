<html>
	<head>
		<title>Report</title>
	</head>
	<body>
		<h2>PHP TEST</h2>
		<?php
			$firstname = $_POST['firstname'];
			$problem = $_POST['problem'];
			$mail = $_POST['mail'];
			$from = 'johnnybe.beczcki@gmail.com';
			$emailmsg = 'TEST';

			echo 'First name: ' . $firstname . '<br />';
			echo 'Problem: ' . $problem . '<br />';

			$dbc = mysqli_connect('localhost', 'root', '', 'themine') or die('Error connecting to SQL database');

			$query = "INSERT INTO problems (name, problem, mail) VALUES ('" . $firstname . "', '" . $problem . "', '" . $mail. "')";
			$result = mysqli_query($dbc, $query) or die('Error querying database');
			mysqli_close($dbc);
		?>
	</body>
</html>