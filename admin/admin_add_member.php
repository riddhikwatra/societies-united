<?php
session_start();
$count=$_POST['count'];
$soc_id=$_SESSION['soc_id'];
($db = mysqli_connect('localhost','root','','societies'))or die("connection failed");
while($count>0){
    $name=$_POST["name".(string)($count-1)];
    $position=$_POST["position".(string)($count-1)];
    $insert = $db->query("INSERT INTO member(mem_name,position,soc_id) VALUES ('$name','$position',$soc_id)");
    if(!$insert){
        $statusMsg = "Sorry, there was an error uploading your file.";
    }

    $query = $db->query("SELECT max(mem_id) as id FROM member");
     $row = mysqli_fetch_array($query);
     $mem_id=$row['id'];
     $baseName = basename($_FILES['profile'.(string)($count-1)]['name']);
     $path=pathinfo($baseName);
     $fileName=$path['filename'];
     $extension = $path['extension'];
     $file = $fileName.(string)$mem_id.".".$extension;
     $update = $db->query("UPDATE member set photo='$file' where mem_id =$mem_id");
     if(!$update){
       echo "there was an issue";
     }
     
     $targetFilePath="../profile/".$file;
     if(isset($_FILES["profile".(string)($count-1)])){
     if(!move_uploaded_file($_FILES["profile".(string)($count-1)]["tmp_name"],$targetFilePath)){
       echo "never mind";
     }
    }
    $count=$count-1;
  }
?>
<script>
    window.location = "admin_edit_team.php";
</script>