<?php include 'includes/header.php'; ?>

<form action="" class="sign-up" method="POST">
    <h1>Sign Up</h1>
    <input type="text" name="name" placeholder="Full Name">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="New Password">
    <input type="password" name="cpassword" placeholder="Confirm Password">
    <input type="submit" name="submit" value="Sign Up">
    <h5><a href="login.php">Already have an account</a></h5>
</form>

<?php include 'includes/footer.php'; ?>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword)
    {
        $qry = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', md5($password))";
        $con = mysqli_connect('localhost', 'root', '', 'php-projects');
        if(mysqli_query($con, $qry))
        {
            echo '<script type="text/javascript"> alert("Sign Up Successfully!"); window.href.location = "login.php"; </script>';
        }
        else
        {
            echo '<script type="text/javascript"> alert("Something Went Wrong!")</script>';
        }
    }
    else
    {
        echo '<script type="text/javascript"> alert("Password Doesnt Match!"); window.href.location = "sign-up.php"; </script>';
    }
}

?>