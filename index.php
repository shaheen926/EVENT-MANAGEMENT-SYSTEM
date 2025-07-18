<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEC Event Sphere</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(82, 100, 135);
        }

        /* Header Styling */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #003366;
            padding: 15px 30px;
            color: white;
        }

        .header h1 {
            font-size: 30px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 3px;
        }

        .header nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 15px;
            font-size: 18px;
            padding: 10px 20px;
            border: 2px solid #fff;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .header nav a:hover {
            background-color: #fff;
            color: #003366;
        }

        /* Slider Styling */
        .slider-container {
            position: relative;
            max-width: 70%; /* Medium size */
            margin: 20px auto;
            overflow: hidden;
            border-radius: 15px;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slide img,
        .slide video {
            width: 100%;
            height: auto;
            border-radius: 15px;
            object-fit: cover;
        }

        .slider-buttons {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .slider-button {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 50%;
        }

        .slider-button:hover {
            background-color: rgba(255, 255, 255, 0.7);
            color: #000;
        }

        /* Main Content */
        .content {
            text-align: center;
            margin: 20px;
            color: #fff;
        }

        .content h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .content a {
            text-decoration: none;
            background-color: #ffcc00;
            color: #003366;
            padding: 15px 30px;
            font-size: 20px;
            border-radius: 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        .content a:hover {
            background-color: #003366;
            color: #ffcc00;
        }

        /* Footer */
        .footer {
            background-color: #003366;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
    <script>
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.querySelector('.slider');
            const totalSlides = slides.children.length;
            if (index >= totalSlides) currentSlide = 0;
            else if (index < 0) currentSlide = totalSlides - 1;
            else currentSlide = index;

            slides.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        document.addEventListener('DOMContentLoaded', () => {
            setInterval(nextSlide, 3000); // Auto-slide every 3 seconds
        });
    </script>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <h1>BEC Event Sphere</h1>
        <nav>
            <a href="admin_login.php">Admin Login</a>
            <a href="about_us.php">About Us</a>
        </nav>
    </div>

    <!-- Slider Section -->
    <div class="slider-container">
        <div class="slider">
            <div class="slide"><img src="images/wave2.jfif" alt="Slide 1"></div>
            <div class="slide"><img src="images/ho.jfif" alt="Slide 2"></div>
            <div class="slide"><img src="images/ise2.jfif" alt="Slide 3"></div>
        </div>
        <div class="slider-buttons">
            <button class="slider-button" onclick="prevSlide()">&#10094;</button>
            <button class="slider-button" onclick="nextSlide()">&#10095;</button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h2>Welcome to BEC Event Sphere</h2>
        <p>To explore and register for our amazing events, please sign up or log in below:

        </p>


            
            <a href="sign.php"> Register</a>

            <a href="login.php"> Login</a>

        
        


    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>&copy; 2025 BEC Event Sphere. All Rights Reserved.</p>
    </div>
</body>
</html>
