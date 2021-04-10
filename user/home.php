<!DOCTYPE html>
<html lang="en">
<head>
    <title>IGDTUW</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/footer.css">
    <!-- fonts used -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
    <!-- for externally used symbols -->
    <script src="https://kit.fontawesome.com/7f7ecb9605.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- to call header from header.js -->
        <script src="../js/header.js"></script>
    <?php include('header.php');  ?>

    <h2 class="page-head">Student's Societies</h2>
    <hr>
    <?php
        ($db = mysqli_connect('localhost','root','','societies'))or die("connection failed");
        $query = $db->query("SELECT * FROM society");
    ?>
    <div class="container">
        <div class="grid">
        <?php
            while($row = $query->fetch_assoc()){
        ?>      
                <form action="society.php" method="GET">
                    <button type="submit" style="border:0px; cursor:pointer">
                        <div class="society-container" style="background-image:url(<?php echo $row['logo']?>)">
                            <div class="black-overlay">
                                <h4 class="society-name"><?php echo $row['soc_name']?></h4>
                            </div>
                        </div>  
                    </button>
                    <input type="hidden" value='<?php echo $row['soc_name']  ?>' name='soc'>                
                </form>
        <?php    
            }
        ?>
        </div>
    </div>
    <script src="../js/footer.js"></script>
</body>
</html>
