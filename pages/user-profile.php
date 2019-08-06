<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Climb Tracker</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="styling/reset.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700|Raleway:200" rel="stylesheet">
<link href="../climb-tracker.css" rel="stylesheet">
<script src="climb-tracker.js" async defer></script>
</head>
<body>
    <?php 
        // require header
        include '../php_connect.php';
        $conn = OpenCon();
        echo "Connected Successfully";
        CloseCon($conn);
    ?> 
<section class="profile">
    <div class="container profile--container">
        <div class="profile-heading">
            <h1>Welcome back, <?php $fname ?>[first name]!<h1>
</div>
        <aside class="side-menu">
            <ul>
                <li>Add a climb</li>
                <li>menu item</li>   
                <li>menu item</li>   
                <li>menu item</li>   
</ul>    
</aside>
            <div class="chart">
</div>
<div class="details--container">
    <div class="total_pitches">
        <h3>Total Pitches</h3>
        <span>129</span>
    </div>
    <div class="average_grade">
    <h3>Average Grade</h3>
        <span>5.10c</span>
    </div>
    <div class="highest_grade">
    <h3>Highest Grade</h3>
        <span>5.11c</span>
    </div>
</div>
</div>
</section>

    <?php 
        // require 'Includes/footer.php';
    ?>
</body>
</html>