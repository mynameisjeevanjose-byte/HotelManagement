<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery - The Grand Emporium Hotel</title>
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

        /* Content Box */
        .basic_box {
            margin: 40px auto;
            padding: 20px;
            width: 80%;
            border-radius: 5px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19);
            background: white;
        }

        /* Image Gallery Grid */
        .row {
            display: flex;
            flex-wrap: wrap; /* Allows items to wrap to the next line */
            justify-content: space-around;
            gap: 15px;
            margin-bottom: 15px; /* Adds space between rows */
        }
        .column {
            flex-basis: 32%; /* Sets initial size, allowing for 3 columns with gap */
            text-align: center;
        }
        .column img {
            width: 100%;
            height: auto; /* Maintain aspect ratio */
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

<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="admin_login.php">ADMIN LOGIN</a></li>
    <li><a href="user_login.php">USER LOGIN</a></li>
    <li><a href="index.php#rooms_and_rates">ROOM GALLERY</a></li>
    <li><a href="image_gallery.php">IMAGE GALLERY</a></li>
    <li style="float:right;"><a href="#contact">CONTACT</a></li>
</ul>

<div class="basic_box">
    <h2 style="text-align:center; color:#094198;">IMAGE GALLERY</h2>
    
    <div class="row">
        <div class="column">
            <img src="images/1.jpg" alt="Deluxe Room">
        </div>
        <div class="column">
            <img src="images/2.jpg" alt="Executive Room">
        </div>
        <div class="column">
            <img src="images/3.jpg" alt="Standard Room">
        </div>
    </div>
    
    <div class="row">
        <div class="column">
            <img src="images/A1.jpg" alt="Hotel Amenity 1">
        </div>
        <div class="column">
            <img src="images/A2.jpg" alt="Hotel Amenity 2">
        </div>
        <div class="column">
            <img src="images/A3.jpg" alt="Hotel Amenity 3">
        </div>
    </div>
    
    <div class="row">
        <div class="column">
            <img src="images/A4.jpg" alt="Hotel Amenity 4">
        </div>
        <div class="column">
            <img src="images/A5.jpg" alt="Hotel Amenity 5">
        </div>
        <div class="column">
            <img src="images/A6.jpg" alt="Hotel Amenity 6">
        </div>
    </div>
</div>

<div id="contact" class="footer">
    <h2 class="foot-text">S5 CSE B</h2>
    <h3 class="foot-text">J.M.S</h3>
</div>

</body>
</html>