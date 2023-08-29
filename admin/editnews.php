<?php include 'header.php'; 
include '../includes/db.php';
$dataid = $_GET['dataid'];
$qry = "SELECT * FROM news WHERE id = $dataid";
$result = mysqli_query($con, $qry);
$row = mysqli_fetch_assoc($result);
?>

<div class="menu-heading">
    <h1>Edit News</h1>
    <hr>
</div>


<form action="actionnews.php" method="POST" class="admin-form" enctype="multipart/form-data">
    <input type="date" value="<?php echo $row['newsdate'];?>" name="newsdate">
    <input type="text" value="<?php echo $row['title'] ?>" placeholder="Enter News Title" name="title">
    <textarea name="description" placeholder="Enter Description"><?php echo $row['description']; ?></textarea>
    <input type="hidden" name="dataid" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="oldphotopath" value="<?php echo $row['photopath']; ?>">
    <input type="file" name="photopath">
    <div class="form-footer">
        <input type="submit" name="update" value="Update">
        <a href="news.php" class="exit-btn">Cancel</a>
    </div>
</form>

<?php include 'footer.php'; ?>
