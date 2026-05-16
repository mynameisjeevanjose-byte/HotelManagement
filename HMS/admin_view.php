<?php
session_start();

if (!isset($_SESSION['admin_name'])) {
    header("Location: admin_login.php");
    exit();
}
$adminName = $_SESSION['admin_name'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Rooms Info</title>
    <style>
        body {
            margin: 0;
            background: #e1dedee4;
            font-family: Verdana, sans-serif;
            padding-top: 80px; 
            padding-left: 22%;
            box-sizing: border-box;
        }
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(4, 6, 121, 1);
            color: white;
            padding: 0 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            box-sizing: border-box;
            height: 80px; 
        }
        .sidebar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 22%;
            background-color: rgba(8, 11, 190, 0.87);
            position: fixed;
            height: 100%;
            top: 80px; 
            left: 0;
            overflow: auto;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 16px;
            text-decoration: none;
            font-size: 20px;
        }
        .sidebar a:hover {
            background-color: white;
            color: #094198;
        }
        .sidebar a.active {
            background-color: #ffee00ff;
            color: #094198;
            font-weight: bold;
        }
        .main-content { padding: 20px; }
        .basic_box {
            background: white;
            border-radius: 5px;
            padding: 30px 40px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th { background-color: #f8f8f8; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .basic_box h2 {
            text-align: center;
            color: #094198;
            margin-top: 0;
        }
    </style>
</head>
<body>

    <header class="header">
        <div style="font-size: 40px; font-weight: bold; color: #ffee00ff;">
            The Grand Emporium Hotel
        </div>
        <div style="font-size: 22px;">
            Admin Panel | Hello, <?php echo htmlspecialchars($adminName); ?>
        </div>
    </header>

    <nav>
        <ul class="sidebar">
            <li><a href="admin_view.php" class="active">Rooms Info</a></li>
            <li><a href="add_room_admin.php">Add Room</a></li>
            <li><a href="remove_room_admin.php">Remove Rooms</a></li>
            <li><a href="admin_room_status.php">Booking Requests</a></li>
            <li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
            <li><a href="booking_history.php">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </nav>

    <main class="main-content">
        <div class="basic_box">
            <h2>Rooms Information</h2>
            <table>
                <tr>
                    <th>Room Type</th>
                    <th>Available Rooms</th>
                    <th>Occupied Rooms</th>
                    <th>Price per day (₹)</th>
                </tr>
                <?php
                    $conn = new mysqli("localhost", "root", "", "hotel_db");
                    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

                    $sql = "SELECT room_type, available_rooms, occupied_rooms, price FROM rooms_count";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['room_type']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['available_rooms']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['occupied_rooms']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['price']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No room information found.</td></tr>";
                    }
                    $conn->close();
                ?>
            </table>
        </div>
    </main>

</body>
</html>