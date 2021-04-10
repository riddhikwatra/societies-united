<?php
    $id=$_POST['mem_id'];
    ($db = mysqli_connect('us-cdbr-east-03.cleardb.com','b6d86e67174bc0','e37f64da','heroku_5f6762150a1eaa8'))or die("connection failed");
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