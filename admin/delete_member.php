<?php
    $id=$_POST['mem_id'];
    ($db = mysqli_connect('localhost','root','','societies'))or die("connection failed");
    $query = $db->query("SELECT photo FROM member where mem_id=$id");
    while($row = $query->fetch_assoc()){
    $profile=$row['photo'];
    }
    $query="delete from member where mem_id=$id";
    if($db->query($query)){
        echo "";

        unlink('../profile/'.$profile);
    }
    else{
        echo "couldnt delete";
    }
?>
<script>
    window.location = "admin_edit_team.php";
</script>