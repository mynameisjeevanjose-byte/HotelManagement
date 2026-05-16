<!DOCTYPE html>
<html>
<head>
	<title>Payment Successful</title>
	<style>
		body {
			margin: 0;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background-color: #f4f4f4;
		}

		/* --- Header Styling --- */
		.header {
			background-color: #092962; /* Dark Blue */
			color: white;
			padding: 15px 30px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			border-bottom: 5px solid #e6b800; /* Gold accent */
		}
		.header h1 {
			margin: 0;
			font-size: 36px;
			font-weight: 700;
		}
		.header h1 span {
			color: #e6b800; /* Gold */
		}
		.header .user-info {
			font-size: 20px;
			font-weight: 500;
		}

		/* --- Sidebar Navigation --- */
		.sidebar {
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: 22%;
			background-color: #092962;
			position: fixed;
			height: 100%;
			overflow: auto;
		}
		.sidebar a {
			display: block;
			color: white;
			padding: 16px;
			text-decoration: none;
			font-size: 20px;
			transition: background-color 0.3s, padding-left 0.3s;
		}
		.sidebar a:hover {
			background-color: #e6b800;
			color: #092962;
			padding-left: 25px; /* Indent on hover for effect */
		}
		.sidebar a.active {
			background-color: #e6b800;
			color: #092962;
			font-weight: bold;
		}

		/* --- Main Content Area --- */
		.main-content {
			margin-left: 24%; /* Leave space for sidebar + a little gap */
			padding: 20px 30px;
		}

		/* --- Payment Confirmation Box --- */
		.confirmation-box {
			background-color: #ffffff;
			border-radius: 8px;
			padding: 40px;
			text-align: center;
			max-width: 600px;
			margin: 50px auto; /* Center the box */
			box-shadow: 0 4px 15px rgba(0,0,0,0.1);
		}
		.confirmation-box .icon {
			font-size: 60px;
			color: #28a745; /* Green for success */
		}
		.confirmation-box h2 {
			font-size: 28px;
			color: #333;
			margin-top: 20px;
			margin-bottom: 15px;
		}
		.confirmation-box p {
			font-size: 18px;
			color: #666;
			line-height: 1.6;
		}
		.next-button {
			display: inline-block;
			background-color: #092962;
			color: white;
			padding: 12px 30px;
			font-size: 18px;
			text-decoration: none;
			border-radius: 5px;
			margin-top: 30px;
			transition: background-color 0.3s;
		}
		.next-button:hover {
			background-color: #061c42; /* Darker blue on hover */
		}
	</style>
</head>
<body>
	<?php
		// --- PHP Logic (Unchanged) ---
		$conn = new mysqli("localhost", "root", "", "hotel_db");
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
	?>

	<div class="header">
		<h1>THE <span>GRAND EMPORIUM</span> HOTEL</h1>
		<div class="user-info">Hello, <?php echo htmlspecialchars($row[2]); ?></div>
	</div>

	<ul class="sidebar">
		<li><a href="user_view.php">My Info</a></li>
		<li><a href="bookroom.php">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php" class="active">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>

	<div class="main-content">
		<div class="confirmation-box">
			<div class="icon">&#10004;</div> <h2>Payment Successful!</h2>
			<p>
				Thank you for your payment. Your booking has been confirmed.
				You will be redirected to your information page shortly.
			</p>
			<a href="user_view.php" class="next-button">Go to My Info</a>
		</div>
	</div>

</body>
</html>