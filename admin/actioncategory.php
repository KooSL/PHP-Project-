<?php
    include '../includes/db.php';

    if(isset($_POST['create']))
    {
        $priority = $_POST['priority'];
        $name = $_POST['name'];

        $query = "INSERT INTO categories(priority, name) VALUES ('$priority', '$name')";
        $result = mysqli_query($con, $query);

        if($result)
        {
            echo '<script type="text/javascript"> alert("Category Created Successfully"); window.location.href = "categories.php"; </script>';

        }

        else
        {
            echo "Error on creating category";
        }
    }


    if(isset($_POST['update']))
    {
        $dataid = $_POST['dataid'];
        $priority = $_POST['priority'];
        $name = $_POST['name'];

        $query = "UPDATE categories SET priority='$priority', name='$name' WHERE id=$dataid";
        $result = mysqli_query($con, $query);

        if($result)
        {
            echo "<script>alert('Category Updated Successfully'); 
            window.location.href='category.php';</script>";
        }
        else
        {
            echo "Error on updating category";
        }
    }

    if(isset($_GET['deleteid']))
    {
        $dataid = $_GET['deleteid'];

        $query = "DELETE FROM categories WHERE id=$dataid";
        $result = mysqli_query($con, $query);

        if($result)
        {
            echo "<script>alert('Category Deleted Successfully'); 
            window.location.href='category.php';</script>";
        }
        else
        {
            echo "Error on deleting category";
        }
    }

?>

