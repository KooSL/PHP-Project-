<?php include 'header.php'; 
    include '../includes/db.php';
    $qry = "SELECT * FROM categories ORDER BY priority";
    $result = mysqli_query($con, $qry);
?>

<div class="menu-heading">
    <h1>Dashboard</h1>
    <hr>
</div>

<div class="dashboard-grid">
    <a href="news.php"><div class="dashboard-card">
        <p>Total News</p>
        <h3>256</h3>
    </div></a>

    <a href="categories.php"><div class="dashboard-card">
        <p>Total Categories</p>
        <!-- <?php while($row = mysqli_fetch_assoc($result)) {?>
            <h3><?php echo $row['id'];?></h3>
        <?php }?>
 -->    </div></a>
    

    <a href="ads.php"><div class="dashboard-card">
        <p>Total Ads</p>
        <h3>26</h3>
    </div></a>
</div>

<?php include 'footer.php'; ?>
