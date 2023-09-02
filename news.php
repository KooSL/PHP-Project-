<?php
    include 'includes/header.php';
    include 'includes/db.php';
    $qry = "SELECT * FROM news";
    $result = mysqli_query($con, $qry);
?>

<div class="news-container">
 <?php while($row = mysqli_fetch_assoc($result)) {?>
    <a href="read-more.php?dataid=<?php echo $row['id'];?>"><div class="news">
         <!-- <img src="images/nepal-asia-cup-2023.jpg" alt="image"> -->
         <p><?php echo $row['newsdate'];?></p>
         <h2><?php echo $row['title'];?></h2>
         <!-- <a href="read-more.php">Read More</a> -->
    </div></a>
  <?php }?>
</div>

<?php include 'includes/footer.php'; ?>
