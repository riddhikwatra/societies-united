<?php
    if(isset($_POST['submit'])){
        ($db = mysqli_connect('us-cdbr-east-03.cleardb.com','b6d86e67174bc0','e37f64da','heroku_5f6762150a1eaa8'))or die("connection failed");
        $event_name=$_POST['name'];
        echo $event_name;
        $event_report=$_POST['report'];
        echo $event_report;
        $update=$db->query("UPDATE event set report='$event_report' where event_name='$event_name' ");
    if(!$update)
      echo "there was a problem";
        else{
?>
            <script>
                window.location = "admin_add_report.php";
            </script>
<?php
        }
    }
?>
