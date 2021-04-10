<?php
                       
    ($db = mysqli_connect('localhost','root','','societies'))or die("connection failed");
    $query = $db->query("SELECT mem_name FROM member where soc_id='$soc_id'");
                   
                
    while($row = $query->fetch_assoc()){
?>
<option value="<?php echo $row['mem_name']?>"><?php echo $row['mem_name']?></option>
<?php
    }
?>