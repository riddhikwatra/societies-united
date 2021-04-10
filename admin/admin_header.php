<div class="header">
    <i class="fas fa-bars" id="menu" onclick="toggle_visibility('navbar'), toggle_visibility('body-overlay')"></i>
    <div class="navbar hidden" id="navbar">
        <i class="fas fa-times " id="close" onclick="toggle_visi('navbar'), toggle_visi('parent-div'), toggle_visi('body-overlay')"></i>
        <ul>
            <a href="../user/home.php"><li>Home</li></a>
            <hr>
            <li id="societies-submenu" onclick="toggle_visibility('parent-div')" class="pointer">
                Societies <i class="fas fa-chevron-right submenu-arrow"></i>
            </li>
            <hr>
            <a href="../user/contact.php"><li>Contact Us</li></a>
        </ul>
        <div id="parent-div" class="sub-navbar hidden">
            <?php
                session_start();
                ($db = mysqli_connect('localhost','root','','societies'))or die("connection failed");
                $query = $db->query("SELECT soc_name FROM society");
                $soc_name=$_SESSION['soc_name'];
                while($row = $query->fetch_assoc()){
            ?>
            <div class="nav-item">    
                <a href="../user/society.php?soc=<?php echo $row['soc_name'] ?>" class=<?php echo $soc_name==$row['soc_name'] ? "active":""?>  ><?php echo $row['soc_name'] ?></a>
            </div>
            <hr>
            <?php
                }
            ?>
        </div>
    </div>

    <div class="inline-block logo-div">
        <img src="../images/IGDTUW_logo.png" alt="IGDTUW_logo" class="logo_img">
    </div>
    <div class="inline-block head-div">
        <h2 class="igdtuw">INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h2>
        <h3 class="sub-heading1">(Established by Govt. of Delhi wide Act 9 of 2012)</h3>
        <!-- <h3 class="sub-heading2">(Formerly Indira Gandhi Institute of Technology)</h3> -->
    </div>

    <div class="signin-button" onclick="toggle_visibility('admin-options')">
        <i class="fas fa-user-circle"></i>
        <!-- <p>Sign In</p> -->
    </div>

    <div class="admin-options hidden" id="admin-options">
        <ul>
            <a href="form.php"><li>Add New Event</li></a>
            <hr>
            <a href="admin_add_report.php"><li>Add Event Report</li></a>
            <hr>
            <a href="admin_edit_team.php"><li>Edit Society Team</li></a>
            <hr>
            <a href="logout.php"><li>Logout</li></a>
        </ul>
    </div>

</div>