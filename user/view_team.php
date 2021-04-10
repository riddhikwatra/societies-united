<!DOCTYPE html>
<html>
<head>
    <title>View Team</title>
    <!-- css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/footer.css">
    <!-- for externally used symbols -->
    <script src="https://kit.fontawesome.com/7f7ecb9605.js" crossorigin="anonymous"></script>
    <!-- fonts used -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/team.css">

</head>

<body>
    <!-- to call header from header.js -->
    <script src="../js/header.js"></script>
    <?php 
        include('header.php');
        $soc_name=$_GET['soc_name'];
        $query2 = $db->query("SELECT soc_id from society where soc_name='$soc_name'");
        while($row2 = $query2->fetch_assoc()){
            $soc_id=$row2['soc_id'];
        }
        $query1 = $db->query("SELECT * FROM member where soc_id=$soc_id and position='Faculty Advisor';");
        $query3 = $db->query("SELECT * FROM member where soc_id=$soc_id and position!='Faculty Advisor';"); 
    ?>
    <h2 class="page-head"><?php echo $soc_name." Team" ?></h2>
    <hr>

    <div class="main-container">
        <div class="container">
            <div class="row" id="members">

                <?php
                while($row1 = $query1->fetch_assoc()){?>
                    <div class="col col-md-auto member">
                        
                        <img src="../profile/<?php echo $row1['photo'] ?>" class="image" alt="">
                        <div class="text">
                            <div class="name">
                                <?php echo $row1['mem_name']; ?>
                            </div>
                            <div class="position">
                                <?php echo $row1['position'] ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                while($row = $query3->fetch_assoc()){?>
                    <div class="col col-md-auto member">
                        
                        <img src="../profile/<?php echo $row['photo'] ?>" class="image" alt="">
                        <div class="text">
                            <div class="name">
                                <?php echo $row['mem_name']; ?>
                            </div>
                            <div class="position">
                                <?php echo $row['position'] ?>
                            </div>
                        </div>
                    </div>
                <?php
                }?>
            </div>
        </div>
    </div>

    <script src="../js/footer.js"></script>
</body>
</html>

