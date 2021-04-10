<!DOCTYPE html>
<head>
    <title>New Event Form</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/index1.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
    
</head>
<body >
    <!-- to call header from header.js -->
        <script src="../js/header.js"></script>
    <?php
     include('admin_header.php');
     $soc_id=$_SESSION['soc_id'];
    ?>

    <div class="form-container">
  
        <h2 class="page-heading">ADD NEW EVENT</h2>

        <form action="add_event_db.php" method="post" enctype="multipart/form-data"> 
            <!-- <h3>PERSONAL DETAILS</h3> -->
            <div class="row">
                <div class="col-md-5">
                    <div class="group">      
                        <input type="text" name="soc_name" required />
                        
                        <label>Society Name</label>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="group">      
                        <input type="file" name="image" accept="image/png, image/jpeg" required />
                        
                        <label id="profile_img_label">Select Event Poster</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="group">      
                        <input type="text" name="event_name" required />
                        
                        <label>Event Name</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="group">               
                    <textarea name="event_desc" required ></textarea>
                        <label>Event Description</label>  

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5"> 
                    <div class="group">      
                        <input type="date" name="event_date" required />
                        <label>Event Date</label>
                    </div>
                </div>
                <div class="offset-md-1 col-md-5">
                    <div class="group">      
                        <input type="date" name="reg_date" />                   
                        <label>Last Registration Date</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="group">      
                        <input type="text" name="reg_link" required />
                        
                        <label>Registration Link</label>
                    </div>
                </div>

            </div>

            <hr />
            <h3 class="form-subheading">EVENT CHAIR</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="group">      
                        <select id="name" name="name">
                            <option value="" >--select--</option>
                            <?php include('select_name.php')  ?>
                        
                        </select>
                        
                        <label>Name</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="group">      
                        <input type="tel" name="contact" required pattern="[0-9]{10}"/>
                        <label>Contact</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button class="form-button" type="submit" name="submit">SUBMIT</button>
                    <button class="form-button" type="reset">RESET</button>
                </div>
            </div>
            
        </form>
      </div>
      <script src="../js/footer.js"></script>
</body>
<?php include('add_event_db.php')  ?>

