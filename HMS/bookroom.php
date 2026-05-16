<?php
    // --- PHP Logic is Unchanged as Requested ---
    $conn = new mysqli("localhost","root","", "hotel_db");
    if($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
    $sql = "SELECT * from temp_session";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Room Book</title>
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
            font-size: 18px;
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

        input[type="date"], select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="checkbox"] {
            transform: scale(1.2);
            margin-right: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 14px;
            background-color: rgba(9,41,98,0.99);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #4AB8F9;
            color: black;
        }
    </style>
</head>
<body>

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
            <h2>Room Details</h2>
            <table>
                <tr>
                    <th>Room Type</th>
                    <th>Number of beds</th>
                    <th>Price per day (₹)</th>
                </tr>
                <tr>
                    <td>Single Bedded</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">1000</td>
                </tr>
                <tr>
                    <td>Double Bedded</td>
                    <td style="text-align: center;">2</td>
                    <td style="text-align: center;">1800</td>
                </tr>
                <tr>
                    <td>Four Bedded</td>
                    <td style="text-align: center;">4</td>
                    <td style="text-align: center;">3000</td>
                </tr>
            </table>
        </div>

        <div class="basic_box">
            <h2>Create Your Booking</h2>
            <form action="bookroom1.php" method="post">
                <table>
                    <tr>
                        <td>Select room type:</td>
                        <td>
                            <select name="rooms" required>
                                <option value="">Select</option>
                                <option value="Single bed">Single bedded</option>
                                <option value="Double bed">Double bedded</option>
                                <option value="Four bed">Four bedded</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Enter check-in date:</td>
                        <td><input type="date" name="checkin" required></td>
                    </tr>
                    <tr>
                        <td>Enter check-out date:</td>
                        <td><input type="date" name="checkout" required></td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <th>Optional Services</th>
                        <th>Cost per day (₹)</th>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="ac" value="on">AC</label></td>
                        <td style="text-align: center;">300</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="breakfast" value="on">Breakfast</label></td>
                        <td style="text-align: center;">150</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="lunch" value="on">Lunch</label></td>
                        <td style="text-align: center;">300</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="snacks" value="on">Evening Snacks</label></td>
                        <td style="text-align: center;">120</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="dinner" value="on">Dinner</label></td>
                        <td style="text-align: center;">250</td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="swimming" value="on">Swimming Pool Access</label></td>
                        <td style="text-align: center;">300</td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Book Now">
            </form>
        </div>
    </main>

</body>
</html>