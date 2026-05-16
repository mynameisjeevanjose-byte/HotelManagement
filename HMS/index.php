<!DOCTYPE html>
<html>
<head>
    <title>DBMS PROJECT</title>
    <style>
        body {
            margin: 0;
            font-family: Verdana, sans-serif;
            background: #e1dedee4;
        }

        /* Navbar */
        ul {
            list-style: none;
            background-color:rgba(8, 11, 190, 0.87);
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: sticky;
            top: 0;
            z-index: 1;
        }
        li {
            float: left;
        }
        li a {
            display: block;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
        }
        li a:hover {
            background-color: white;
            color: #094198;
        }

        /* Banner */
        .banner {
            width: 100%;
            height: 400px;
            background: url("images/hotel1.jpg") no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 40px;
            font-weight: bold;
            text-shadow: 2px 2px 4px black;
        }

        /* Reserve Button */
        .reserve_room {
            display: block;
            margin: 20px auto;
            padding: 14px;
            width: 300px;
            font-size: 24px;
            text-align: center;
            background-color: rgba(9,41,98,0.99);
            border-radius: 30px;
            color: white;
            text-decoration: none;
        }
        .reserve_room:hover {
            background-color: #4AB8F9;
            color: black;
        }

        /* Rooms Section */
        .basic_box {
            margin: 40px auto;
            padding: 20px;
            width: 80%;
            border-radius: 5px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19);
            background: white;
        }
        .row {
            display: flex;
            justify-content: space-around;
            gap: 20px;
        }
        .column {
            flex: 1;
            text-align: center;
        }
        .column img {
            width: 100%;
            max-width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Footer */
        .footer {
            background-color: rgba(4, 6, 121, 1);
            padding: 10px;
            text-align: center;
        }
        .foot-text {
            color: #D6FEFF;
            font-size: 19px;
        }
    </style>
</head>
<body>

<h1 style="text-align:center; 
           background-color:rgba(4, 6, 121, 1);
           color:#ffee00ff; 
           padding: 30px; 
           font-size: 48px; 
           font-weight: bold; 
           margin:0;">
  The Grand Emporium Hotel
</h1>



    <!-- Navbar -->
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="admin_login.php">ADMIN LOGIN</a></li>
        <li><a href="user_login.php">USER LOGIN</a></li>
        <li><a href="#rooms_and_rates">ROOM GALLERY</a></li>
        <li><a href="image_gallery.php">IMAGE GALLERY</a></li>
        <li style="float:right;"><a href="#contact">CONTACT</a></li>
    </ul>

    <!-- Banner -->
    <div class="banner">ENJOY THE DREAM EXPERIENCE</div>

    <!-- Reserve -->
    <a class="reserve_room" href="user_login.php">RESERVE A ROOM</a>

    <!-- Welcome -->
    <h2 style="text-align:center; font-family:Courier New;">Experience a good stay, enjoy fantastic offers</h2>
    

    <!-- Rooms -->
    <div id="rooms_and_rates" class="basic_box">
        <h2 style="text-align:center; color:#094198;">OUR ROOMS</h2>
        <div class="row">
            <div class="column">
                <img src="images/1.jpg" alt="Deluxe Room">
                <h3>Deluxe Room</h3>
            </div>
            <div class="column">
                <img src="images/2.jpg" alt="Executive Room">
                <h3>Executive Room</h3>
            </div>
            <div class="column">
                <img src="images/3.jpg" alt="Standard Room">
                <h3>Standard Room</h3>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div id="contact" class="footer">
        <h2 class="foot-text">S5 CSE B</h2>
        <h3 class="foot-text">J.M.S</h3>
    </div>

</body>
</html>
