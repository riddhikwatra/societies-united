<?php
while($row1 = $query1->fetch_assoc()){   
    ?>
<option value="<?php echo $row1['event_name']?>"><?php echo $row1['event_name']?></option>
<?php
    }
?>
 }
?>