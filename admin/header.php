<?php 
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != "Yes")
    {
        header('location: ../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="admin-container">
        <div class="nav">
            <a href="../index.php" onclick="return confirm('Are you sure to log out?')"><img src="../images/kushal (2).png" alt="Logo"></a>
            <ul class="menu">
                <li><a href="dashboard.php" class="active">Dashboard</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="ads.php">Ads</a></li>   
                <div class="logout">       
                    <li><a href="logout.php" class="logout-btn" onclick="return confirm('Are you sure to log out?')">Logout</a></li>
                </div>
            </ul>
        </div>
        
     

        <div class="content">
            <!-- Content Here  -->
        