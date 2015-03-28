<?php require_once 'php/dbconn.php';?>
<div id='sidebar'>
	<ul class='nav'>
		<li><a id="pagetitle" href="./">STUDB</a></li>
		<li><form class='search' action='./'><input name='search'><button></button></form></li>
		<li><a id="schoollist">Schools</a>
			<ul>
				<?php
					$query = 'SELECT DISTINCT school,schoolurl FROM students';
					$result = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($result)){
						echo "<li><a href='./?school=$row[1]'>$row[0]</a></li>";
					}
				?>
			</ul>
		</li>
		<li><a id="streamlist">Streams</a>
			<ul>
				<?php
					$query = 'SELECT DISTINCT stream,streamurl FROM students ORDER BY stream ASC';
					$result = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($result)){
						echo "<li><a href='./?stream=$row[1]'>$row[0]</a></li>";
					}
				?>
			</ul>
		</li>
		<li><a id="collegelist">Colleges</a>
			<ul>
				<?php
					$query = 'SELECT DISTINCT college,collegeurl FROM students ORDER BY college ASC';
					$result = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($result)){
						echo "<li><a href='./?college=$row[1]'>$row[0]</a></li>";
					}
				?>
			</ul>
		</li>
		<li><a id="locationlist">Locations</a>
			<ul>
				<?php
					$query = 'SELECT DISTINCT location,locationurl FROM students ORDER BY location ASC';
					$result = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($result)){
						echo "<li><a href='./?location=$row[1]'>$row[0]</a></li>";
					}
				?>
			</ul>
		</li>
		<li><a id="visitorstats">Visits: 0</a></li>
	</ul>
</div>