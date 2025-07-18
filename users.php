<?php
// Include database connection
include("connection.php");

// Query to fetch username and email
$sql = "SELECT username, email FROM users";
$result = mysqli_query($conn, $sql);

// Initialize an array to store users
$users = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
    echo json_encode($users);
} else {
    echo json_encode(['status' => 'no_users']);
}

?>
