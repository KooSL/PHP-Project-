<?php include 'header.php'; 
    include '../includes/db.php';
    // $qry = "SELECT * FROM categories ORDER BY priority";
    $qry1= "SELECT * FROM categories";
    $qry2= "SELECT * FROM news";
    // $qry3= "SELECT * FROM ads";
    $categories = mysqli_query($con, $qry1);
    $news = mysqli_query($con, $qry2);
    // $ads = mysqli_query($con, $qry3);
    $rows_count_categories = mysqli_num_rows($categories);
    $rows_count_news = mysqli_num_rows($news);
    // $rows_count_ads = mysqli_num_rows($ads);
?>

<div class="menu-heading">
    <h1>Dashboard</h1>
    <hr>
</div>

<div class="dashboard-grid">
    <a href="news.php"><div class="dashboard-card">
        <p>Total News</p>
        <h3><?php echo $rows_count_news;?></h3>
    </div></a>

    <a href="categories.php"><div class="dashboard-card">
        <p>Total Categories</p>
        <h3><?php echo $rows_count_categories;?></h3>
    </div></a>
    

    <a href="ads.php"><div class="dashboard-card">
        <p>Total Ads</p>
        <!-- <h3><?php echo $rows_count;?></h3> -->
    </div></a>
</div>

<?php include 'footer.php'; ?>
