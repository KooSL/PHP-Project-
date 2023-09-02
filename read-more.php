<?php
    include 'includes/header.php';
    include 'includes/db.php';
    $qry = "SELECT * FROM news";
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_assoc($result);
?>

<div class="full-news">
	<div class="title">
		<h1><?php echo $row['title'];?></h1>
	</div>

	<div class="date">
		<p><?php echo $row['newsdate'];?></p>
	</div>

	<div class="description">
		<p><?php echo $row['description'];?></p>
	</div>
</div>

<?php include 'includes/footer.php'; ?>
	