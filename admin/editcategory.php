<?php 
	include 'header.php';
	$id = $_GET['id'];
	include '../includes/db.php';
	$qry = "SELECT * FROM categories WHERE id=$id";
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
        <input type="submit" name="update" value="Update Category">
        <a href="category.php" class="exit-btn">Exit</a>
    </div>
</form>

<?php include 'footer.php'; ?>
