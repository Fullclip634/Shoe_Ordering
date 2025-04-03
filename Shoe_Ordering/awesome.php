<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Ordering System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            overflow-x: hidden;
        }

        /* Navigation Bar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: linear-gradient(90deg, #1a1a1a, #2c2c2c);
            padding: 1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: background 0.3s ease;
        }

        .navbar .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        .navbar ul li {
            position: relative;
        }

        .navbar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
        }

        .navbar ul li a:hover {
            color: #ff6f61;
        }

        .navbar ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #ff6f61;
            bottom: -5px;
            left: 0;
            transition: width 0.3s ease;
        }

        .navbar ul li a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: url('https://images.unsplash.com/photo-1600585154347-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            position: relative;
            padding: 0 5%;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            animation: fadeInDown 1s ease;
        }

        .hero-content p {
            font-size: 1.3rem;
            font-weight: 300;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.3s;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        .cta-button {
            background: #ff6f61;
            color: #fff;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 500;
            text-decoration: none;
            transition: transform 0.3s ease, background 0.3s ease;
            animation: fadeInUp 1s ease 0.6s;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        .cta-button:hover {
            background: #e65b50;
            transform: translateY(-5px);
        }

        /* Animations */
        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar {
                padding: 1rem 3%;
            }

            .navbar .logo {
                font-size: 1.5rem;
            }

            .navbar ul {
                gap: 1rem;
            }

            .navbar ul li a {
                font-size: 1rem;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .cta-button {
                padding: 0.8rem 2rem;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">Shoe Ordering</div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#account">Account</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#explore">Explore</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Step Into Style</h1>
            <p>Discover the perfect pair of shoes with our premium collection. Order now and elevate your wardrobe!</p>
            <a href="#explore" class="cta-button">Explore Now</a>
        </div>
    </section>

    <!-- JavaScript for Scroll Effect on Navbar -->
    <script>
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(26, 26, 26, 0.95)';
            } else {
                navbar.style.background = 'linear-gradient(90deg, #1a1a1a, #2c2c2c)';
            }
        });
    </script>
</body>
</html>