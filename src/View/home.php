<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Home</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .hero {
            background-image: url('car-rental.jpg');
            background-size: cover;
            text-align: center;
            padding: 100px 0;
            color: #fff;
        }
        .hero h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #555;
        }
        .features {
            padding: 50px 0;
            text-align: center;
        }
        .features h2 {
            margin-bottom: 20px;
        }
        .feature {
            display: inline-block;
            width: 30%;
            padding: 20px;
            margin: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            vertical-align: top;
        }
        .feature h3 {
            margin-bottom: 10px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
    <script>
        // JavaScript
        function showAlert() {
            alert('Welcome to Car Rental!');
        }
    </script>
</head>
<body>
    <header>
        <h1>Welcome to Car Rental</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="carangebote/index.php" class="button">View Car Offers</a></li>
                <li><a href="/kontakt">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero">
        <h2>Find Your Dream Car</h2>
        <p>Explore our wide range of cars available for rental.</p>
        <a href="index.php?controller=carangebote" class="button">View Car Offers</a>
    </section>

    <section class="features">
        <h2>Why Choose Us?</h2>
        <div class="feature">
            <h3>Wide Selection</h3>
            <p>We offer a diverse selection of vehicles to suit your needs.</p>
        </div>
        <div class="feature">
            <h3>Competitive Prices</h3>
            <p>Our rental rates are affordable and competitive.</p>
        </div>
        <div class="feature">
            <h3>Easy Booking</h3>
            <p>Our online booking system makes it quick and easy to reserve your vehicle.</p>
        </div>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Car Rental</p>
    </footer>
    <script>
        // Beispiel für JavaScript-Funktion
        window.onload = function() {
            showAlert();
        };
    </script>
</body>
</html>
