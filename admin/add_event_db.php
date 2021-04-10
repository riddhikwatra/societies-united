<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
($db = mysqli_connect('us-cdbr-east-03.cleardb.com','b6d86e67174bc0','e37f64da','heroku_5f6762150a1eaa8'))or die("connection failed");
if(isset($_POST['submit'])){
    $event_name=$_POST['event_name'];
    $event_desc=$_POST['event_desc'];
    $event_date=$_POST['event_date'];
    $reg_date=$_POST['reg_date'];
    $reg_link=$_POST['reg_link'];
    $chair_name=$_POST['name'];
    $chair_contact=$_POST['contact'];
    $soc_id=$_SESSION['soc_id'];
  
    $insert=$db->query("INSERT INTO event(soc_id,event_name,description,reg_date,event_date,reg_link,chair_name,chair_contact,report) VALUES($soc_id,'$event_name','$event_desc','$reg_date','$event_date','$reg_link','$chair_name',$chair_contact,'$event_desc');");
    if(!$insert)
      echo "there was a problem";
    else{
          $baseName = basename($_FILES['image']['name']);
          $path=pathinfo($baseName);
          $fileName=$path['filename'];
          $query = $db->query("SELECT max(event_id) as id FROM event");
          $row = mysqli_fetch_array($query);
          $event_id=$row['id'];
          $extension = $path['extension'];
          $file = $fileName.(string)$event_id.".".$extension;
          echo "$file";
          $update = $db->query("UPDATE event set poster='$file' where event_id =$event_id");
          if(!$update){
            echo "there was an issue";
          }
          $targetFilePath="../posters/".$file;
          if(isset($_FILES["image"])){
          if(!move_uploaded_file($_FILES['image']["tmp_name"],$targetFilePath)){
             echo "never mind";
          }
      }
      echo "successful";
    }
    ?>
<script>
    window.location = "form.php";
</script>
<?php    
}

?>
