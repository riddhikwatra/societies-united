<?php
    ($db = mysqli_connect('us-cdbr-east-03.cleardb.com','b6d86e67174bc0','e37f64da','heroku_5f6762150a1eaa8'))or die("connection failed");
    $soc_name=$_GET['soc_name'];
    $query2 = $db->query("SELECT soc_id from society where soc_name='$soc_name'");
    while($row2 = $query2->fetch_assoc()){
        $soc_id=$row2['soc_id'];
    }
    $query3 = $db->query("SELECT * FROM event where soc_id=$soc_id and event_date<now() and report!=''");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Previous Events</title>
    <!-- css file -->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="../css/events.css">
    <!-- for externally used symbols -->
    <script src="https://kit.fontawesome.com/7f7ecb9605.js" crossorigin="anonymous"></script>
    <!-- fonts used -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- to call header from header.js -->
    <script src="../js/header.js"></script>
    <?php 
      include('header.php'); 
    ?>
    <h2 class="page-head">Previous Events</h2>
    <hr>

    <div class="main-container">
        <div>
                 <!--Updation of Event form--> 
               <?php
                    while($row = $query3->fetch_assoc()){         
                ?>      <div class="grid-container">
                            <h1 style="margin-bottom:0px;"><?php echo $row['event_name'] ?></h1>
                            <div class="grid-item item1" style="margin: auto;">

                                <img src="<?php echo"../posters/".$row['poster'] ?>" style="height:350px;width:350px;" alt="">  
                            </div>
                            <div class="grid-item item3">
                                <b>About the event:</b>
                                <?php echo $row['report']  ?>
                            </div> 
                        </div>
               <?php
                    }
                ?>
        </div>
    </div>
    <script src="../js/footer.js"></script>
</body>
</html>
