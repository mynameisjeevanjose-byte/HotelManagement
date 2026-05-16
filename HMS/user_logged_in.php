<html>
<body>
<?php
$conn = new mysqli("localhost","root","","hotel_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$phone = $_POST["phone"];
$pwd   = $_POST["password"];

// Query only matching row
$sql = "SELECT * FROM user_login WHERE phone=? AND password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $phone, $pwd);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_row()) {
    // clear old session table
    $conn->query("DELETE FROM temp_session");

    // insert this user into temp_session
    $sql1 = "INSERT INTO temp_session VALUES (?,?,?,?,?,?)";
    $stmt2 = $conn->prepare($sql1);
    $stmt2->bind_param("ssssss", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
    $stmt2->execute();

    // redirect to user view
    header("Location: user_view.php");
    exit();
} else {
    echo "<p style='color:red;'>Invalid phone number or password!</p>";
}

$conn->close();
?>
</body>
</html>
