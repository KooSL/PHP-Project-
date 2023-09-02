<?php
    session_start();
    include 'includes/header.php'; 
?>

<form action="" class="login-form" method="POST">
    <h1>Log In</h1>
    <div class="l-inputs">
    <input type="text" name="email" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    </div>
    <h4><a href="" class="fp">Forget Password?</a></h4>
    <input type="submit" value="Login">
    <h5><a href="sign-up.php" class="cna">Create new account</a></h5>
</form>

<?php include 'includes/footer.php'; ?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $qry = "SELECT * FROM users WHERE email = '$email' AND password = md5('$password')";
    include 'includes/db.php';
    $result = mysqli_query($con, $qry);
    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['loggedin'] = "Yes";
        header('location: admin/dashboard.php');
    }
    else
    {
        echo '<script type="text/javascript"> alert("Invalid Credentials"); window.href.location = "login.php"; </script>';
    }
}
?>