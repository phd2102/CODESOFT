<?php
    include("dbcon.php");
?>


<?php
if (isset($_POST["submit"])) {
    $trip = $_POST["trip"];
    $from1 = $_POST["from1"];
    $to1 = $_POST["to1"];
    $departure = $_POST["departure"];
    $return1 = $_POST["return1"];
    $adult = $_POST["adult"];
    $children = $_POST["children"];



    $ins = mysqli_query($con, "INSERT INTO `book1` (trip,from1,to1,departure,return1,adult,children) VALUES('$trip','$from1','$to1','$departure','$return1','$adult','$children')");
    if ($ins) {
        echo "Success";
    } else {
        echo "Try Letter";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>SkyBooking</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="search-section">
            <div class="search-box">
                <div class="tabs">
                    <button class="tab active" onclick="openTab('flights')">Flights</button>
                    <button class="tab" onclick="openTab('hotels')">Hotels</button>
                    <button class="tab" onclick="openTab('car-hire')">Car Hire</button>
                </div>
                
                <div id="flights" class="tab-content active">
                    <form method="post">
                        <div class="form-group">
                            <label>
                                <input type="radio" name="trip" value="round-trip" checked> Round Trip
                            </label>
                            <label>
                                <input type="radio" name="trip" value="one-way"> One Way
                            </label>
                            <label>
                                <input type="radio" name="trip" value="multi-city"> Multi-city
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <label for="from">From</label>
                            <input type="text" name="from1" id="from" placeholder="New Delhi (DEL)">
                        </div>
                        
                        <div class="form-group">
                            <label for="to">To</label>
                            <input type="text" name="to1" id="to" placeholder="New York (JFK)">
                        </div>
                        
                        <div class="form-group">
                            <label for="departure">Departure</label>
                            <input type="date" name="departure" id="departure">
                        </div>
                        
                        <div class="form-group">
                            <label for="return">Return</label>
                            <input type="date" name="return1" id="return">
                        </div>
                        
                        <div class="form-group">
                            <label for="adults">Adults (16+)</label>
                            <input type="number" name="adult" id="adults" value="2">
                        </div>
                        
                        <div class="form-group">
                            <label for="children">Children</label>
                            <input type="number" name="children" id="children" value="0">
                        </div>
                        
                        <div class="form-group">
                            <label for="cabin-class">Cabin Class</label>
                            <select id="cabin-class">
                                <option value="economy">Economy</option>
                                <option value="business">Business</option>
                                <option value="first">First</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <input type="checkbox" id="direct-flights-only">
                            <label for="direct-flights-only">Direct Flights Only</label>
                        </div>
                        
                        <button type="submit" name="submit">Search Flight</button>
                    </form>
                </div>
            </div>
        </section>
        
        <section class="airline-logos">
            <div class="logos">
                <img src="image/emirates.png" alt="Emirates">
                <img src="image/airfrance.png" alt="Air France">
                <img src="image/britishairways.png" alt="British Airways">
                <img src="image/qatar.png" alt="Qatar Airways">
                <img src="image/singapore.png" alt="Singapore Airlines">
                <img src="image/turkish.png" alt="Turkish Airlines">
            </div>
        </section>
    </main>
    
    <script src="script.js"></script>
</body>
</html>
