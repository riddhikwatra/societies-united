<div id="parent-div" class="sub-navbar hidden">
    <?php
        if(isset($_SESSION['soc'])){
        $soc_name=$_GET['soc'];
        }
        else{
            $soc_name=$_GET['soc'];
        }
        ($db = mysqli_connect('localhost','root','','societies'))or die("connection failed");
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