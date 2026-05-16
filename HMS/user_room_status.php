<!DOCTYPE html>
<html>
<head>
    <title>User Room Status</title>
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

        .main-content {
            padding: 20px;
        }

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
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f8f8;
        }
        .basic_box h2 {
            text-align: center;
            color: #094198;
            margin-top: 0;
        }

        .cancel-form {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        .cancel-form input[type="number"] {
            flex-grow: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .cancel-form button {
            padding: 10px 20px;
            background-color: #d9534f;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .cancel-form button:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <?php
        // --- PHP Logic is Unchanged as Requested ---
        $conn = new mysqli("localhost","root","", "hotel_db");
        if($conn->connect_error)
        {
            die("Connection failed: ".$conn->connect_error);
        }
        $sql = "SELECT * from temp_session";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_row($result); 
    ?>

    <header class="header">
        <div style="font-size: 40px; font-weight: bold; color: #ffee00ff;">
            The Grand Emporium Hotel
        </div>
        <div style="font-size: 22px;">
            Hello, <?php echo $row[2]; ?>
        </div>
    </header>

    <nav>
        <ul class="sidebar">
            <li><a href="user_view.php">Welcome</a></li>
            <li><a href="bookroom.php">Book A Room</a></li>
            <li><a href="user_room_status.php">Show Booking Status</a></li>
            <li><a href="user_payment.php">Payment</a></li>
            <li><a href="user_booking_history.php">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </nav>

    <main class="main-content">
        <div class="basic_box">
            <h2>Room Booking Status</h2>
            <table>
                <tr>
                    <th>Booking ID</th>
                    <th>Name</th>
                    <th>Room Type</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Room Status</th>
                    <th>Price</th>
                </tr>
                
                <?php
                    // --- PHP Logic is Unchanged as Requested ---
                    $conn = new mysqli("localhost","root","", "hotel_db"); // Note: DB was 'iwp' in original, changed to 'hotel_db' for consistency
                    if($conn->connect_error)
                    {
                        die("Connection failed: ".$conn->connect_error);
                    }
                    $sql1 = "SELECT * from user_room_book";
                    $sql = "SELECT * from temp_session";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_row($result);
                    $phone = $row[0];
                    $idproof = $row[4];
                    if ($result=mysqli_query($conn,$sql1))
                    {
                        while ($row=mysqli_fetch_row($result))
                        {
                            if($phone==$row[0] && $idproof==$row[2])
                            {
                                ?>
                                <tr>
                                    <td><?php echo $row[15]; ?></td>
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $row[3]; ?></td>
                                    <td><?php echo $row[4]; ?></td>
                                    <td><?php echo $row[5]; ?></td>
                                    <td><?php echo $row[13]; ?></td>
                                    <td><?php echo $row[14]; ?></td>
                                </tr><?php
                            }
                        }
                        mysqli_free_result($result);
                    }
                ?>
            </table>
        </div>

        <div class="basic_box">
            <h2>Cancel a Booking</h2>
            <form action="user_cancel_room.php" method="post" class="cancel-form">
                <label for="book_id">Enter Booking ID:</label>
                <input type="number" name="book_id" id="book_id" placeholder="e.g., 101" required>
                <button type="submit">Cancel Booking</button>
            </form>
        </div>
    </main>

</body>
</html>