<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>society</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="../css/stylesheet.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/admin_soc.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- for externally used symbols -->
  <script src="https://kit.fontawesome.com/7f7ecb9605.js" crossorigin="anonymous"></script>
</head>

<body>
	<script src="../js/header.js"></script>
    <?php 
      include('admin_header.php'); 
      $soc_name=$_SESSION['soc_name'];
    ?>
    <h2 class="page-head">Welcome To <?php echo $soc_name?></h2>
    <hr>
    <div class="main-container">
		<?php
			($db = mysqli_connect('localhost','root','','societies'))or die("connection failed");
			$query1 = $db->query("SELECT * FROM society where soc_name='$soc_name'");
			while($row1 = $query1->fetch_assoc()){
		?>
		<img src=<?php echo $row1['logo'];?> max-width="300" height="300" style="">
		<div class="bar">
			<div class="desc">
				<?php echo $row1['about'] ?>
			</div>
		</div> 
		<?php } ?>
	</div>
	<script src="../js/footer.js"></script>
                
</body>
</html>