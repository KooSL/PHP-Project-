<?php include 'header.php'; ?>

<div class="menu-heading">
    <h1>Create News</h1>
    <hr>
</div>


<form action="actionnews.php" method="POST" class="admin-form" enctype="multipart/form-data">
    <input type="date" name="newsdate">
    <input type="text" placeholder="Enter News Title" name="title">
    <textarea name="description" placeholder="Enter Description"></textarea>
    <input type="file" name="photopath">
    <div class="form-footer">
        <input type="submit" name="create" value="Add">
        <a href="news.php" class="exit-btn">Cancel</a>
    </div>
</form>

<?php include 'footer.php'; ?>
