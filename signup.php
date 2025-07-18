
<?php
include("connection.php");
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
    
    $sql="select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql="select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if($count_user == 0 && $count_email == 0){
        if($password == $cpassword){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$hash')";
            $result = mysqli_query($conn, $sql);
            if($result){
                $message = '<div class="alert alert-success">Registered successfully. <a href="login.php" class="alert-link">Login here</a>.</div>';
            }
        } else {
            $message = '<div class="alert alert-danger">Passwords do not match!</div>';
        }
    } else {
        if($count_user > 0){
            $message = '<div class="alert alert-warning">Username already exists!</div>';
        }
        if($count_email > 0){
            $message = '<div class="alert alert-warning">Email already exists!</div>';
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center mb-4">SignUp Form</h1>
                <!-- Display message here -->
                <?php if(isset($message)) { echo $message; } ?>
                <form action="signup.php" method="POST">
                    <div class="mb-3">
                        <label for="user" class="form-label">Enter Username:</label>
                        <input type="text" class="form-control" id="user" name="user" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Enter Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Create Password:</label>
                        <input type="password" class="form-control" id="pass" name="pass" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpass" class="form-label">Retype Password:</label>
                        <input type="password" class="form-control" id="cpass" name="cpass" required>
                    </div>
                    <button type="submit" id="btn" class="btn btn-primary mb-2" value="Signup" name="submit">SignUp</button>
                    <a href="index.php" class="btn btn-secondary">Home</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
