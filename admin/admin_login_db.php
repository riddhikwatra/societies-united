<?php
    if(isset($_POST['submit'])){
        ($db = mysqli_connect('us-cdbr-east-03.cleardb.com','b6d86e67174bc0','e37f64da','heroku_5f6762150a1eaa8'))or die("connection failed");
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $query = $db->query("SELECT soc_name,soc_id FROM society where username='$user'and password ='$pass'");
        if(mysqli_num_rows($query)>0){
            while($row = $query->fetch_assoc()){
                $_SESSION['soc_name']=$row['soc_name'];
                $_SESSION['soc_id']=$row['soc_id'];
            }
?>
            <script>
                window.location = "../admin/admin_soc.php";
            </script>
<?php
        }
        else{
?>
            <script>
                document.getElementById('cred').innerHTML="Wrong credentials!<br>";
            </script>
<?php
        }
    }
?>
