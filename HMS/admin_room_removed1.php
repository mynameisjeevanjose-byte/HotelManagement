<!DOCTYPE html>
<html>
<head>
    <title>Admin - Room Removed</title>
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
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19);
            text-align: center; /* Center content in the box */
        }
        .basic_box h2 {
            text-align: center;
            color: #094198;
            margin-top: 0;
            font-size: 24px;
        }
        .basic_box p {
            font-size: 18px;
            color: #333;
        }
        .basic_box a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #094198;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s;
        }
        .basic_box a:hover {
            background-color: #4AB8F9;
        }
    </style>
</head>
<body>

    <header class="header">
        <div style="font-size: 40px; font-weight: bold; color: #ffee00ff;">
            The Grand Emporium Hotel
        </div>
        <div style="font-size: 22px;">
            Admin Panel
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
            <h2>Success!</h2>
            <p>The selected room has been removed successfully from the hotel database.</p>
            <a href="admin_view.php">View Updated Room List</a>
        </div>
    </main>

</body>
</html>