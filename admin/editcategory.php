 <?php 
	include 'header.php';
	$dataid = $_GET['dataid'];
	include '../includes/db.php';
	$qry = "SELECT * FROM categories WHERE id=$dataid";
	$result = mysqli_query($con, $qry);
	$row = mysqli_fetch_assoc($result);
?>

<div class="menu-heading">
    <h1>Edit Category</h1>
    <hr>
</div>


<form action="actioncategory.php" method="POST" class="admin-form">
    <input type="hidden" name="dataid" value="<?php echo $_GET['id'];?>">
    <input type="number" value="<?php echo $row['priority'];?>" placeholder="Enter Priority" name="priority">
    <input type="text" placeholder="Enter Category Name" name="name" value="<?php echo $row['name'];?>" >
    <div class="form-footer">
        <input type="submit" name="update" value="Update">
        <a href="categories.php" class="exit-btn">Cancle</a>
    </div>
</form>

<?php include 'footer.php'; ?>
