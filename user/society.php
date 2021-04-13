<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $_GET['soc'];  ?></title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/stylesheet.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- CSS only -->
  <!-- for externally used symbols -->
  <script src="https://kit.fontawesome.com/7f7ecb9605.js" crossorigin="anonymous"></script>
</head>

<body>
  	<script src="../js/header.js"></script>
    <?php include('header.php');  ?>
	<div id="parent-div" class="sidenav">
		<?php
			$soc_name=$_GET['soc'];
			($db = mysqli_connect('us-cdbr-east-03.cleardb.com','b6d86e67174bc0','e37f64da','heroku_5f6762150a1eaa8'))or die("connection failed");
			$query = $db->query("SELECT soc_name FROM society");
			while($row = $query->fetch_assoc()){
		?>
		<div class="element <?php echo $soc_name==$row['soc_name'] ? "active":""?>  ">    
			<a href="society.php?soc=<?php echo $row['soc_name'] ?>"><?php echo $row['soc_name'] ?></a>
		</div>
		<hr>		
		<?php
			}
		?>
	</div>
	<div class="container-soc1">
		<h2 class="page-head">
			<?php echo $_GET['soc']?>
		</h2>
		<hr>
		<div class="main-container">
			<?php
				$query = $db->query("SELECT * FROM society where soc_name='$soc_name'");
				while($row = $query->fetch_assoc()){
			?>
			<img src="../images/<?php echo $row['logo'];?>" max-width="300" height="300" style="">
			<!-- containers for data storage-->
			<div class="bar">
				<div class="desc">
					<?php echo $row['about'] ?>
				</div>
			</div> 
			<?php
				}
			?>
			<div class="view-options">
				<div class="option">
					<form action="previous_events.php" method="GET">
						<input type="hidden" name="soc_name" value="<?php echo $soc_name ?>">
						<button type="submit" class="buttons">View Previous Events</button>
					</form>
				</div>
				<div class="option">
					<form action="view_team.php" method="GET">
						<input type="hidden" name="soc_name" value="<?php echo $soc_name ?>">
						<button type="submit" class="buttons">View Team</button>
					</form>
				</div>
				<div class="option">
					<form action="upcoming_events.php" method="GET">
						<input type="hidden" name="soc_name" value="<?php echo $soc_name ?>">
						<button type="submit" class="buttons">View Upcoming Events</button>
					</form>
				</div>
			</div>
		</div>
		<script src="../js/footer.js"></script>
	</div>
</body>
</html>

