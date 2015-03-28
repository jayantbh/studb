<div id='container'>
	<div class='greet'>
		<h3>Welcome to</h3><br><h1>STUDB</h1><br><h3>The Student Status Database</h3>
		<?php
			require_once 'php/dbconn.php';
			$query = "SELECT COUNT(*) FROM students";
			$result = mysqli_query($con,$query);
			$row = mysqli_fetch_array($result);
			echo "Site currently has $row[0] student entries.";
		?>
	</div>
</div>