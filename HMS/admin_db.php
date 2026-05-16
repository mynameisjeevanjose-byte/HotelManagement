<?php
session_start();

$conn = new mysqli("localhost", "root", "", "hotel_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$adminid_form = $_POST["adminid"];
$password_form = $_POST["password"];

$stmt = $conn->prepare("SELECT adminid, password FROM admin WHERE adminid = ?");
$stmt->bind_param("s", $adminid_form);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $admin = $result->fetch_assoc();

    // WARNING: INSECURE PASSWORD CHECK
    // This compares the submitted password directly with the plain text in the database.
    if ($password_form == $admin['password']) {
        
        // --- LOGIN SUCCESSFUL ---
        $_SESSION['admin_name'] = $admin['adminid'];
        header("Location: admin_view.php");
        exit();
    }
}

// --- LOGIN FAILED ---
header("Location: admin_login.php?error=1");
exit();

?>