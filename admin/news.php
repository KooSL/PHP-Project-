<?php include 'header.php';
    include '../includes/db.php';
    $qry = "SELECT * FROM news ORDER BY newsdate DESC";
    $result = mysqli_query($con, $qry);
?>

<div class="menu-heading">
    <h1>News</h1>
    <hr>
</div>

<div class="add-btn">
    <a href="createnews.php">Add</a>
</div>

<table class="admin-table">
    <tr>
        <th>News Date</th>
        <th>News Title</th>
        <th>Description</th>
        <th>Picture</th>
        <th>Action</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['newsdate']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><img src="../images/<?php echo $row['photopath'];?>" alt="" style="width:100px"></td>
        <td>
            <a href="editnews.php?dataid=<?php echo $row['id'];?>" class="edit-btn">Edit</a>
            <a href="actionnews.php?deleteid=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Are you Sure to Delete?')">Delete</a>
        </td>
    </tr>

    <?php } ?>

</table>

<?php include 'footer.php'; ?>
