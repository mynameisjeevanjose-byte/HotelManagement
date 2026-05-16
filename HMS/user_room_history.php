<!DOCTYPE html>
<html>
<head>
    <title>User Booking Details</title>
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
        .main-content {
            padding: 20px;
            min-height: calc(100vh - 120px);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .basic_box {
            background: white;
            border-radius: 5px;
            padding: 30px 40px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19);
            width: 100%;
            max-width: 600px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 18px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f8f8;
            text-align: center;
            font-size: 24px;
            color: #094198;
        }
        td:first-child {
            font-weight: bold;
            width: 40%;
        }
        .btn-container {
            text-align: center;
            margin-top: 20px;
        }
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #094198;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #4AB8F9;
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
        $row_user=mysqli_fetch_row($result); 
    ?>

    <header class="header">
        <div style="font-size: 40px; font-weight: bold; color: #ffee00ff;">
            The Grand Emporium Hotel
        </div>
        <div style="font-size: 22px;">
            Hello, <?php echo $row_user[2]; ?>
        </div>
    </header>

    <nav>
        <ul class="sidebar">
            <li><a href="user_view.php">Welcome</a></li>
            <li><a href="bookroom.php">Book A Room</a></li>
            <li><a href="user_room_status.php">Show Booking Status</a></li>
            <li><a href="user_payment.php">Payment</a></li>
            <li><a href="user_booking_history.php" class="active">Booking History</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </nav>

    <main class="main-content">
        <div class="basic_box">
            <?php
                // --- PHP Logic is Unchanged as Requested ---
                $bid = $_POST["book_id"];
                // SECURITY WARNING: This query is vulnerable to SQL Injection.
                $sql = "SELECT * FROM booked_hist WHERE book_id='$bid'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_row($result);
            ?>
            <table>
                <tr>
                    <th colspan="2">Booking Details</th>
                </tr>
                <tr>
                    <td>Booking ID:</td>
                    <td><?php echo $row[14]; ?></td>    
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><?php echo $row[1]; ?></td> 
                </tr>
                <tr>
                    <td>Room Type:</td>
                    <td><?php echo $row[3]; ?></td> 
                </tr>
                <tr>
                    <td>Check-in Date:</td>
                    <td><?php echo $row[4]; ?></td> 
                </tr>
                <tr>
                    <td>Check-out Date:</td>
                    <td><?php echo $row[5]; ?></td> 
                </tr>
                <tr>
                    <td>Days of Stay:</td>
                    <td><?php echo $row[6]; ?></td> 
                </tr>
                <tr>
                    <td>AC:</td>
                    <td><?php echo (strcmp($row[7], "true") == 0) ? "YES" : "NO"; ?></td>   
                </tr>
                <tr>
                    <td>Breakfast:</td>
                    <td><?php echo (strcmp($row[8], "true") == 0) ? "YES" : "NO"; ?></td>   
                </tr>
                <tr>
                    <td>Lunch:</td>
                    <td><?php echo (strcmp($row[9], "true") == 0) ? "YES" : "NO"; ?></td>   
                </tr>
                <tr>
                    <td>Snacks:</td>
                    <td><?php echo (strcmp($row[10], "true") == 0) ? "YES" : "NO"; ?></td>  
                </tr>
                <tr>
                    <td>Dinner:</td>
                    <td><?php echo (strcmp($row[11], "true") == 0) ? "YES" : "NO"; ?></td>  
                </tr>
                <tr>
                    <td>Swimming:</td>
                    <td><?php echo (strcmp($row[12], "true") == 0) ? "YES" : "NO"; ?></td>  
                </tr>
                 <tr>
                    <td>Total Bill Amount (₹):</td>
                    <td><?php echo $row[13]; ?></td>   
                </tr>
            </table>
            <div class="btn-container">
                <a href="user_booking_history.php" class="btn">Back</a>
            </div>
        </div>
    </main>

</body>
</html>