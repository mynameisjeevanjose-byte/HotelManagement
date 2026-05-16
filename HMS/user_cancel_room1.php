<!DOCTYPE html>
<html>
<head>
    <title>Cancellation Confirmed - The Grand Emporium</title>
    <style>
        body {
            margin: 0;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        table {
            font-size: 22px;
        }
        p {
            font-size: 24px;
            color: #333;
        }
        .header {
            background-color: #203D70;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 48px;
            font-weight: normal;
        }
        .header .highlight {
            color: #e6b800;
            font-weight: bold;
        }
        .user-greet {
            font-size: 25px;
            text-align: right;
            padding-right: 20px;
        }
        .sidebar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 22%;
            font-size: 24px;
            background-color: #203D70;
            position: fixed;
            height: 100%;
            overflow: auto;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .sidebar a:hover, .sidebar a:active {
            background-color: #e6b800;
            color: white;
        }
        .main-content {
            margin-left: 24%;
            padding: 20px;
        }
        .button {
            display: inline-block;
            background-color: #203D70;
            color: white;
            padding: 12px 25px;
            text-align: center;
            text-decoration: none;
            border: 2px solid #203D70;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s, color 0.3s;
        }
        .button:hover {
            background-color: #e6b800;
            border-color: #e6b800;
        }
    </style>
</head>
<body>
    <?php
        $conn = new mysqli("localhost","root","", "iwp");
        if($conn->connect_error)
        {
            die("Connection failed: ".$conn->connect_error);
        }
        $sql = "SELECT * from temp_session";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_row($result); 
    ?>
    <table style="width: 100%;">
        <tr>
            <td class="header">
                <h1>THE <span class="highlight">GRAND EMPORIUM</span> HOTEL</h1>
            </td>
            <td class="header user-greet">Hello, <?php echo $row[2]; ?></td>
        </tr>
    </table>
    <ul class="sidebar">
        <li><a href="user_view.php">My Info</a></li>
        <li><a href="bookroom.php">Book A Room</a></li>
        <li><a href="user_room_status.php">Show Booking Status</a></li>
        <li><a href="user_payment.php">Payment</a></li>
        <li><a href="user_booking_history.php">Booking History</a></li>
        <li><a href="index.php">Logout</a></li>
    </ul>
    <div class="main-content">
        <h2>Booking Cancelled</h2>
        <p>Your room booking has been successfully cancelled.</p>
        <p>You will be redirected to your information page.</p>
        <br>
        <a href="user_view.php" class="button">Return to My Info</a>
    </div>
</body>
</html>