<?php
                       
    ($db = mysqli_connect('us-cdbr-east-03.cleardb.com','b6d86e67174bc0','e37f64da','heroku_5f6762150a1eaa8'))or die("connection failed");
    $query = $db->query("SELECT mem_name FROM member where soc_id='$soc_id'");
                   
                
    while($row = $query->fetch_assoc()){
?>
<option value="<?php echo $row['mem_name']?>"><?php echo $row['mem_name']?></option>
<?php
    }
?>