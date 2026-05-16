<!DOCTYPE html>
<html>
<head>
    <title>Admin - Add Rooms</title>
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
            margin-bottom: 20px;
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

        /* Form Styling */
        .add-room-form .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 18px;
        }
        .add-room-form label {
            flex-basis: 40%;
            text-align: left;
        }
        .add-room-form select, .add-room-form input {
            flex-grow: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .add-room-form .btn {
            width: 100%;
            padding: 14px;
            margin-top: 10px;
            background-color: #094198;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .add-room-form .btn:hover {
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
            <li><a href="admin_view.php">Rooms Info</a></li>
            <li><a href="add_room_admin.php" class="active">Add Room</a></li>
            <li><a href="remove_room_admin.php">Remove Rooms</a></li>
            <li><a href="admin_room_status.php">Booking Requests</a></li>
            <li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
            <li><a href="booking_history.php">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </nav>

    <main class="main-content">
        <div class="basic_box">
            <h2>Current Room Counts</h2>
            <?php
                // --- PHP Logic is Unchanged as Requested ---
                $conn = new mysqli("localhost","root","", "hotel_db");
                if($conn->connect_error)
                {
                    die("Connection failed: ".$conn->connect_error);
                }
                $sql = "SELECT * from rooms_count";
                $result=mysqli_query($conn,$sql); 
            ?>
            <table>
                <tr>
                    <th>Room Type</th>
                    <th>Available Rooms</th>
                    <th>Occupied Rooms</th>
                    <th>Price</th>
                </tr>
                <?php 
                while ($row=mysqli_fetch_row($result))
                {   ?>
                    <tr>
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <div class="basic_box">
            <h2>Add New Rooms</h2>
            <form action="admin_room_added.php" method="post" class="add-room-form">
                <div class="form-group">
                    <label for="rooms">Select room type:</label>
                    <select name="rooms" id="rooms" required>
                        <option value="">Select</option>
                        <option value="Single bed">Single bedded</option>
                        <option value="Double bed">Double bedded</option>
                        <option value="Four bed">Four bedded</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="noofrooms">Number of rooms to add:</label>
                    <input type="number" min="1" name="noofrooms" id="noofrooms" required>
                </div>
                <button type="submit" class="btn">Add Rooms</button>
            </form>
        </div>
    </main>

</body>
</html>