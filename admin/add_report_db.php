<?php
    if(isset($_POST['submit'])){
        ($db = mysqli_connect('localhost','root','','societies'))or die("connection failed");
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
