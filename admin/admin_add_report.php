<!DOCTYPE html>
<html>
<head>
    <title>Add Report</title>
    <!-- css file -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/form.css">
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
        $query1 = $db->query("SELECT * FROM event where soc_id=$soc_id and event_date<now()");
    ?>

    
    <!-- <hr> -->
    <div class="form-container" >
        <h2 class="page-heading">ADD REPORT</h2>
        <br/>
        <form action="add_report_db.php" method="POST">
            <div class="group">
                <select id="name" name="name">
                    <option value="" >--select--</option>
                    <?php include('select_event.php')  ?>        
                </select>
                <label>Name</label>
            </div>
            <br>
            <div class="group">
                <textarea name="report" value="" required></textarea>
                <label>Report</label>
            </div>
            <div class="group">
                <button type="submit" class="form-button" name="submit">Submit</button>
            </div>
            <br>
            <br>
        </form>
    </div>
    <script src="../js/footer.js"></script>
</body>
</html>