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
    ?> 
<section class="profile">
    <div class="container profile--container">
        <div class="profile-heading">
            <h1>Welcome back, <?php $fname ?>fname!<h1>
</div>
        <aside class="side-menu">
            <ul>
                <li>menu item</li>
                <li>menu item</li>   
                <li>menu item</li>   
                <li>menu item</li>   
</ul>    
</aside>
            <div class="chart">
</div>
<div class="details--container">
    <div class="total_pitches"></div>
    <div class="average_grade"></div>
    <div class="highest_grade"></div>
</div>
</div>
</section>

    <?php 
        // require 'Includes/footer.php';
    ?>
</body>
</html>