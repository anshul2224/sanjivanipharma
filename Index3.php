<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanjivani Pharmaceutical Company - Data Entry</title>

    <!-- CSS Embedded Directly in HTML -->
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f9f9f9; /* Light background for better contrast */
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        header {
            background-color: #2e7d32;
            color: white;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Add shadow */
        }

        header .logo {
            display: flex;
            align-items: center;
        }

        header .logo img {
            height: 50px;
            margin-right: 10px;
        }

        header .logo h1 {
            margin: 0;
            font-size: 24px;
            letter-spacing: 1px; /* Slight spacing for aesthetics */
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: right;
        }

        nav ul li {
            display: inline-block;
            margin-left: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s; /* Smooth transition for hover effect */
        }

        nav ul li a:hover {
            color: #ff5722; /* Change color on hover */
        }

        /* Hero Section */
        .hero {
            position: relative;
            overflow: hidden;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            background: rgba(0, 0, 0, 0.5); /* Dark overlay for text readability */
        }

        .video-background {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 1;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 20px;
        }

        .hero-content h1,
        .hero-content h3 {
            margin: 0;
            color: white; /* Ensure text is visible */
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7); /* Text shadow for better visibility */
        }

        .hero-content .btn {
            background-color: #ff5722;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s; /* Smooth transition */
        }

        .hero-content .btn:hover {
            background-color: #e64a19; /* Darker shade on hover */
        }

        /* About Section */
        .about {
            padding: 60px 20px;
            background-color: white; /* White background for contrast */
            margin-top: 20px; /* Space between sections */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Shadow for depth */
        }

        .about h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2e7d32;
        }

        /* Products Section */
        .products {
            background-color: #ffffff;
            padding: 60px 20px;
            margin-top: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .products h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2e7d32;
        }

        .product-grid {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            width: calc(30% - 20px);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.2s; /* Animation effect */
        }

        .product-card:hover {
            transform: scale(1.05); /* Scale effect on hover */
        }

        .product-card img {
            max-width: 100%;
            border-radius: 5px;
        }

        .product-card h3 {
            font-size: 18px;
            color: #2e7d32; /* Green color for product titles */
        }

        .price {
            font-weight: bold;
            color: #ff5722; /* Price color */
        }

        /* Form Styling */
        .form-container {
            background-color: #f4f4f4;
            padding: 60px 20px;
            text-align: center;
            margin-top: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #2e7d32;
        }

        .form-container input {
            width: 80%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container button {
            background-color: #ff5722;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s; /* Smooth transition */
        }

        .form-container button:hover {
            background-color: #e64a19; /* Darker shade on hover */
        }

        /* Location Option */
        .location {
            padding: 60px 20px;
            text-align: center;
            margin-top: 20px;
            background-color: white; /* White background for contrast */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #2e7d32;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="3.jpg" alt="Sanjivani Pharma Logo">
                <h1>Sanjivani Pharma</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <video class="video-background" autoplay loop muted>
            <source src="5.mp4" type="video/mp4">
        </video>

        <div class="hero-content">
            <h1>Your Health, Our Priority</h1>
            <h3>Leading the way in pharmaceutical innovation and healthcare solutions.</h3>
            <a href="#products" class="btn">Explore Our Products</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Sanjivani Pharmaceutical Company is committed to delivering high-quality, innovative healthcare solutions. With a focus on research and development, we aim to improve the lives of patients globally.</p>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products">
        <div class="container">
            <h2>Our Products</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="1.jpg" alt="Product 1">
                    <h3>Fever Relief Tablet</h3>
                    <p>Sangivani Pharma Fever Relief Tablet - Effective relief from fever and body aches.</p>
                    <p class="price">₹ 750.00</p> <!-- Price in INR -->
                    <button class="btn" onclick="addToCart('Fever Relief Tablet')">Buy Now</button>
                    <button class="btn" onclick="addToCart('Fever Relief Tablet')">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="2.jpg" alt="Product 2">
                    <h3>Body Pain Capsule</h3>
                    <p>Sangivani Pharma Body Pain Capsule - Quick relief from muscle and joint pain.</p>
                    <p class="price">₹ 950.00</p> <!-- Price in INR -->
                    <button class="btn" onclick="addToCart('Body Pain Capsule')">Buy Now</button>
                    <button class="btn" onclick="addToCart('Body Pain Capsule')">Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="4.jpg" alt="Product 3">
                    <h3>Hair Growth Tablet</h3>
                    <p>Sangivani Pharma Hair Growth Tablet - Nourishes and strengthens hair roots for healthy hair growth.</p>
                    <p class="price">₹ 1200.00</p> <!-- Price in INR -->
                    <button class="btn" onclick="addToCart('Hair Growth Tablet')">Buy Now</button>
                    <button class="btn" onclick="addToCart('Hair Growth Tablet')">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section class="form-container">
        <h2>Insert Data Into Database</h2>
        <form action="insert3.php" method="post">
            <input type="text" name="Name" placeholder="User Name" required /><br>
            <input type="text" name="Product_id" placeholder="Product ID" required /><br>
            <input type="text" name="Product_name" placeholder="Product Name" required /><br>
            <input type="text" name="Address" placeholder="Address" required /><br>
            <input type="email" name="Email_id" placeholder="Email ID" required /><br>
            <button type="submit">Submit</button>
        </form>
    </section>

    <!-- Location Option -->
    <div class="location">
        <h3>Our Location</h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.8703650666993!2d74.18040641435314!3d16.850034688395983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc11e6edc6b4f17%3A0x1bf2d9e3b91bdf57!2sStarde%2C%20Maharashtra%20416911!5e0!3m2!1sen!2sin!4v1693481587770!5m2!1sen!2sin"
            width="600"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Sanjivani Pharmaceutical Company. All rights reserved.</p>
    </footer>
</body>
</html>
