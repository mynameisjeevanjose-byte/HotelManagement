<!DOCTYPE html>
<html>
<head>
    <title>User Welcome</title>
    <style>
        body {
            margin: 0;
            background: #e1dedee4; 
            font-family: Verdana, sans-serif;
            padding-top: 80px; 
            padding-left: 22%;
            box-sizing: border-box; /* Ensures padding doesn't add to total dimensions */
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
            margin: 0;
            padding: 0;
            width: 22%;
            background-color: rgba(8, 11, 190, 0.87); 
            position: fixed;
            height: 100%;
            top: 80px;
            left: 0;
            overflow: auto;
            list-style-type: none;
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
            box-sizing: border-box;
            /* Change: Make the content area fill the vertical space */
            min-height: calc(100vh - 80px);
            display: flex;
        }

        .basic_box {
            background: white;
            border-radius: 5px;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19);
            text-align: center;
            /* Change: Allow the box to grow and fill the available space */
            flex-grow: 1;
            /* Change: Use flexbox to perfectly center the content inside */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .decor {
            /* Change: Updated to a modern, cleaner font */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .decor p {
             /* Change: Constrain paragraph width for better readability */
            max-width: 800px;
        }
    </style>
</head>
<body>
    <?php 
        // --- PHP Logic is Unchanged as Requested ---
        $conn = new mysqli("localhost","root","", "hotel_db"); 
        if($conn->connect_error) { 
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
        <div class="basic_box decor">
            <h1 style="font-size: 38px;"><b>Welcome!</b></h1>
            <p style="font-size: 20px; line-height: 1.6;">
                Welcome to <b>The Grand Emporium Hotel</b>, where comfort meets elegance. 
                We pride ourselves on providing luxurious accommodations, world-class dining, 
                and exceptional hospitality to make your stay truly unforgettable.
            </p>
            <p style="font-size: 20px; line-height: 1.6;">
                Whether you are here for business or leisure, our hotel offers a perfect blend 
                of modern amenities and timeless charm. Relax, unwind, and let us make your stay 
                as pleasant as possible.
            </p>
        </div>
    </main>
</body>
</html>