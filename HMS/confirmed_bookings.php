<!DOCTYPE html>
<html>
<head>
    <title>Admin - Confirmed Bookings</title>
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
        .modify-form .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 18px;
        }
        .modify-form label {
            flex-basis: 40%;
            text-align: left;
        }
        .modify-form input {
            flex-grow: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .modify-form .btn {
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
        .modify-form .btn:hover {
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
            <li><a href="add_room_admin.php">Add Room</a></li>
            <li><a href="remove_room_admin.php">Remove Rooms</a></li>
            <li><a href="admin_room_status.php">Booking Requests</a></li>
            <li><a href="confirmed_bookings.php" class="active">Confirmed Bookings</a></li>
            <li><a href="booking_history.php">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </nav>

    <main class="main-content">
        <div class="basic_box">
            <h2>Confirmed Bookings</h2>
            <table>
                <tr>
                    <th>Booking ID</th>
                    <th>Name</th>
                    <th>Room Type</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Price (₹)</th>
                </tr>
                <?php
                    // --- PHP Logic is Unchanged as Requested ---
                    $conn = new mysqli("localhost","root","", "hotel_db");
                    if($conn->connect_error)
                    {
                        die("Connection failed: ".$conn->connect_error);
                    }
                    $sql1 = "SELECT * from confirmed_booking";
                    if ($result=mysqli_query($conn,$sql1))
                    {
                        while ($row=mysqli_fetch_row($result))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row[14]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[4]; ?></td>
                                <td><?php echo $row[5]; ?></td>
                                <td><?php echo $row[13]; ?></td>
                            </tr>
                            <?php
                        }
                        mysqli_free_result($result); 
                    }
                ?>
            </table>
        </div>

        <div class="basic_box">
            <h2>Modify Stay</h2>
            <form action="admin_modify_room.php" method="post" class="modify-form">
                <div class="form-group">
                    <label for="book_id">Enter Booking ID:</label>
                    <input type="number" name="book_id" id="book_id" required>
                </div>
                <div class="form-group">
                    <label for="checkout">Enter new Check-out date:</label>
                    <input type="date" name="checkout" id="checkout" required>
                </div>
                <button type="submit" class="btn">Change Date</button>
            </form>
        </div>
    </main>

</body>
</html>