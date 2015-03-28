<div id='container'>
	<div class='note'>
		<h5>Showing results in <span class="order">Ascending</span> Order by <select><option>Name</option><option>College</option><option>Location</option><option>School</option></select></h5>
	</div>
	<div class='toggleview'></div>
	<?php
		require_once 'php/dbconn.php';
		
		$query = 'SELECT * FROM students WHERE ';
		$querycount=0;
		if(isset($_GET["school"])){
			$data = $_GET["school"];
			$type = "school";
			$query = $query.$type.'url="'.$data.'" ';
			$querycount++;

		}
		if(isset($_GET["college"])){
			$data = $_GET["college"];
			$type = "college";
			if($querycount)
				$query = $query." AND ";
			$query = $query.$type.'url="'.$data.'" ';
			$querycount++;
		}
		if(isset($_GET["stream"])){
			$data = $_GET["stream"];
			$type = "stream";
			if($querycount)
				$query = $query." AND ";
			$query = $query.$type.'url="'.$data.'" ';
			$querycount++;
		}
		if(isset($_GET["location"])){
			$data = $_GET["location"];
			$type = "location";
			if($querycount)
				$query = $query." AND ";
			$query = $query.$type.'url="'.$data.'" ';
			$querycount++;
		}
		$query = $query.'ORDER BY name ASC';
		//echo "$query";
		$result = mysqli_query($con,$query);
		while($row = mysqli_fetch_array($result)){
			echo "<div id='studentlist' class='itemgrid' data-name='$row[1]' data-college='$row[2]' data-location='$row[5]' data-school='$row[7]'><div class='img'><img src='css/img/student.png'></div><div class='info'><a href='#'>$row[1]</a><br><span>&nbsp&nbsp&nbsp</span><a href='./?college=$row[3]' style='color: rgb(58, 153, 242);'>$row[2]</a><br><span>&nbsp&nbsp&nbsp</span><a href='./?stream=$row[5]' style='color: rgb(207, 16, 16);'>$row[4]</a><br><span>&nbsp&nbsp&nbsp</span><a href='./?location=$row[7]' style='color: rgb(85, 173, 42);'>$row[6]</a><br><span>&nbsp&nbsp&nbsp</span><a href='./?school=$row[9]'>$row[8]</a><br></div></div>";
		}
	?>
</div>