<div id="parent-div" class="sub-navbar hidden">
    <?php
        if(isset($_SESSION['soc'])){
        $soc_name=$_GET['soc'];
        }
        else{
            $soc_name=$_GET['soc'];
        }
        ($db = mysqli_connect('us-cdbr-east-03.cleardb.com','b6d86e67174bc0','e37f64da','heroku_5f6762150a1eaa8'))or die("connection failed");
        $query = $db->query("SELECT soc_name FROM society");
        while($row = $query->fetch_assoc()){
    ?>
        <div class="element">    
        <a href="soc1.php?soc=<?php echo $row['soc_name'] ?>" class=<?php echo $soc_name==$row['soc_name'] ? "active":""?>  ><?php echo $row['soc_name'] ?></a>
        </div>
        <hr>

    <?php
        }
    ?>
</div>