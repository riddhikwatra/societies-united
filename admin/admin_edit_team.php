
<!DOCTYPE html>
<html>
<head>
    <title>Edit Team</title>
    <!-- css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/team.css">
    <!-- for externally used symbols -->
    <script src="https://kit.fontawesome.com/7f7ecb9605.js" crossorigin="anonymous"></script>
    <!-- fonts used -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- to call header from header.js -->
    <script src="../js/header.js"></script>
    <?php 
      include('admin_header.php'); 
      $soc_id=$_SESSION['soc_id'];
      $query1 = $db->query("SELECT * FROM member where soc_id=$soc_id and position='Faculty Advisor';");
      $query3 = $db->query("SELECT * FROM member where soc_id=$soc_id and position!='Faculty Advisor';");
    ?>
    <h2 class="page-head">Edit Team</h2>
    <hr>
    <div class="main-container">
        <div class="container">
            <div class="row no-gutter" id="members">

                <?php
                while($row1 = $query1->fetch_assoc()){?>
                    <div class="col col-md-auto member">
                        <img src="../profile/<?php echo $row1['photo'] ?>" class="image" alt="">
                        <div class="text">
                            <div class="name">
                                <?php echo $row1['mem_name']; ?>
                            </div>
                            <div class="position">
                                <?php echo $row1['position'] ?>
                            </div>
                        </div>
                        <form action="delete_member.php" method="POST">
                            <input type="hidden" value=<?php echo $row1['mem_id']?> name="mem_id">
                            <button class="buttons red" type="submit">Delete</button>
                        </form>
                    </div>
                <?php
                }
                while($row = $query3->fetch_assoc()){?>
                    <div class="col col-md-auto member">
                        <img src="../profile/<?php echo $row['photo'] ?>" class="image" alt="">
                        <div class="text">
                            <div class="name">
                                <?php echo $row['mem_name']; ?>
                            </div>
                            <div class="position">
                                <?php echo $row['position'] ?>
                            </div>
                        </div>
                        <form action="delete_member.php" method="POST">
                            <input type="hidden" value=<?php echo $row['mem_id']?> name="mem_id">
                            <button class="buttons red" type="submit">Delete</button>
                        </form>
                    </div>
                <?php
                }?>
            </div>
        </div>
        <hr>
        <div class="add team">
            <p id="id"></p>
            <form action='admin_add_member.php' method='POST' id='myForm'  enctype="multipart/form-data">
            <span id="team_member"></span>
            <input type="hidden" name="count" id="count" value="0">
            <span id="add"></span>
            </form>
            <button class="buttons add-team-button" onclick="addMember()">Add a Team Member</button>
        </div>
    </div>
    <script>
    var count=0;
    function addMember()
    {
        var name= "name"+count;
        var position= "position"+count;
        var profile= "profile"+count;
        document.getElementById('team_member').innerHTML+='<div class="form-container" style="margin-top:0px;"><h2>MEMBER</h2><br/><div class="group"><input type="text" name="'+name+'" id="'+name+'" required /><label>Name</label></div><div class="group"><input type="text" name="'+position+'" id="'+position+'" required /><label>Position</label></div><div class="col-md-auto"><div class="group"><input type="file" name="'+profile+'" id="'+profile+'" accept="image/png, image/jpeg"  required  /><label id="profile_img_label">Select Image</label></div></div>';
         if(count==0){
            document.getElementById('add').innerHTML+="<button type=submit' id='myButton' class='buttons' >Add</button>";
         }
        count += 1;
        document.getElementById('count').value=count;   
    }
    $(document).ready(function() {
       $("#myButton").click(function() {
           $("#myForm").submit();
       });
    });
    </script>
    <script src="../js/footer.js"></script>
</body>
</html>