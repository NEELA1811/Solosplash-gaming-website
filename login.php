
<?php
$login = false;
$message = ''; // To store the alert message
include('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$username'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    
    if($row){  
        if(password_verify($password, $row["password"])){
            $login = true;
            session_start();

            $sql = "SELECT username FROM users WHERE username = '$username' OR email = '$username'";     
            $r = mysqli_fetch_array(mysqli_query($conn, $sql), MYSQLI_ASSOC);  

            $_SESSION['username'] = $r['username'];
            $_SESSION['loggedin'] = true;

            $message = '<div class="alert alert-success">Login successful! Redirecting to <a href="index.php" class="alert-link">Home</a>.</div>';
            echo '<script>setTimeout(function() { window.location.href = "index.php"; }, 2000);</script>'; // Redirect after 2 seconds
        } else {
            $message = '<div class="alert alert-danger">Invalid password!</div>';
        }
    } else {
        $message = '<div class="alert alert-danger">Login failed. Invalid username or email!</div>';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center mb-4">Login Form</h1>

                <!-- Display alert message -->
                <?php if(!empty($message)) { echo $message; } ?>

                <form name="form" action="login.php" method="POST" required>
                    <div class="mb-3">
                        <label for="user" class="form-label">Enter Username/Email:</label>
                        <input type="text" class="form-control" id="user" name="user" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="pass" name="pass" required>
                    </div>
                    <button type="submit" id="btn" class="btn btn-primary mb-2" value="Login" name="submit">Login</button>
                    <a href="index.php" class="btn btn-secondary">Home</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        function isvalid(){
            var user = document.form.user.value;
            if(user.length==""){
                alert(" Enter username or email id!");
                return false;
            }
        }
    </script>
</body>
</html>
