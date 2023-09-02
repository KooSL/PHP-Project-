<?php include 'header.php'; 
    include '../includes/db.php';

    $qry = "SELECT * FROM categories ORDER BY priority";
    $result = mysqli_query($con, $qry);


?>

<div class="menu-heading">
    <h1>Categories</h1>
    <hr>
</div>

<div class="add-btn">
    <a href="createcategory.php">Add</a>
</div>

<table class="admin-table">
    <tr>
        <th>Priority</th>
        <th>Category Name</th>
        <th>Action</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) {?>
    <tr>
        <td><?php echo $row['priority'];?></td>
        <td><?php echo $row['name'];?></td>
        <td>
            <a href="editcategory.php?dataid=<?php echo $row['id'];?>" class="edit-btn">Edit</a>
            <a href="actioncategory.php?deleteid=<?php echo $row['id']; ?>" class="delete-btn">Remove</a>
        </td>
    </tr>
    <?php }?>

</table>

<?php include 'footer.php'; ?>
