<?php
include '../includes/db.php';
if(isset($_POST['create']))
{
    $newsdate = $_POST['newsdate'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $photopath = $_FILES['photopath']['name'];
    $tmpname = $_FILES['photopath']['tmp_name'];
    $photopath = time().$photopath;
    $path = "../images/".$photopath;
    move_uploaded_file($tmpname, $path);

    $query = "INSERT INTO news(newsdate, title, description, photopath) VALUES('$newsdate', '$title', '$description', '$photopath')";
    $result = mysqli_query($con, $query);

    if($result)
    {
        echo "<script>alert('News Created Successfully'); 
        window.location.href='news.php';</script>";
    }
    else
    {
        echo "Error on creating news";
    }
}

if(isset($_POST['update']))
{
    $dataid = $_POST['dataid'];
    $newsdate = $_POST['newsdate'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $oldphotopath = $_POST['oldphotopath'];
    $photopath = $oldphotopath;
    if($_FILES['photopath']['name'] != "")
    {
        $photopath = $_FILES['photopath']['name'];
        $tmpname = $_FILES['photopath']['tmp_name'];
        $photopath = time().$photopath;
        $path = "../images/".$photopath;
        move_uploaded_file($tmpname, $path);
        unlink("../images/".$oldphotopath);
    }

    $query = "UPDATE news SET newsdate='$newsdate', title='$title', description='$description', photopath='$photopath' WHERE id=$dataid";
    $result = mysqli_query($con, $query);

    if($result)
    {
        echo "<script>alert('News Updated Successfully'); 
        window.location.href='news.php';</script>";
    }
    else
    {
        echo "Error on updating news";
    }
}

if(isset($_GET['deleteid']))
{
    $dataid = $_GET['deleteid'];

    //delete photo
    $qry = "SELECT * FROM news WHERE id=$dataid";
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_assoc($result);
    $photopath = $row['photopath'];
    unlink("../images/".$photopath);

    $query = "DELETE FROM news WHERE id=$dataid";
    $result = mysqli_query($con, $query);

    if($result)
    {
        echo "<script>alert('News Deleted Successfully'); 
        window.location.href='news.php';</script>";
    }
    else
    {
        echo "Error on deleting news";
    }
}
?>