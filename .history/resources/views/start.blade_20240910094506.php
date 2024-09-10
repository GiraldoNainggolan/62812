<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Welcome to Our Website</title>
    <style>
        :root {
            --bg-color: #ffffff;
            --text-color: #333333;
            --accent-color: #4a90e2;
            --hover-color: #2a70c2;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            transition: background-color 0.3s, color 0.3s;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: var(--accent-color);
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .menu {
            display: flex;
            gap: 20px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 500;
        }

        .menu a:hover {
            color: #f0f0f0;
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
        }

        .auth-buttons a {
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 500;
        }

        .login {
            background-color: transparent;
            color: white;
            border: 1px solid white;
        }

        .login:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .register {
            background-color: white;
            color: var(--accent-color);
        }

        .register:hover {
            background-color: #f0f0f0;
            transform: translateY(-2px);
        }

        .hero {
            text-align: center;
            padding: 150px 0 100px;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 24px;
            background-color: var(--accent-color);
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.3s;
            font-weight: 500;
        }

        .cta-button:hover {
            background-color: var(--hover-color);
            transform: translateY(-2px);
        }

        .theme-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--accent-color);
            color: white;
            border: none;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .theme-toggle:hover {
            background-color: var(--hover-color);
        }

        .dark-mode {
            --bg-color: #333333;
            --text-color: #ffffff;
            --accent-color: #4a90e2;
            --hover-color: #2a70c2;
        }

        .about-section {
            padding: 100px 0;
            background-color: #f9f9f9;
        }

        .about-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
        }

        .about-text {
            flex: 1;
        }

        .about-image {
            flex: 1;
            text-align: center;
        }

        .about-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        @media (max-width: 768px) {
            .menu {
                display: none;
            }

            .auth-buttons {
                flex-direction: column;
            }

            .hero {
                padding: 120px 0 80px;
            }

            h1 {
                font-size: 36px;
            }

            .about-content {
                flex-direction: column;
            }

            .about-image {
                order: -1;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">UK3</div>
                <div class="menu">
                    <a href="#home">Beranda</a>
                    <a href="#about">Tentang</a>
                    <a href="#alumni">Alumni</a>
                    <a href="#forum">Forum Diskusi</a>
                </div>
                <div class="auth-buttons">
                    <a href="{{ route('login') }}" class="login">Login</a>
                    <a href="{{ route('register') }}" class="register">Register</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <section id="home" class="hero">
                <h1>Welcome To The Christian Website</h1>
                <p>Be a God-fearing person with us in the service of the organization.</p>
                <a href="#about" class="cta-button">Learn More</a>
            </section>
        </div>

        <section id="about" class="about-section">
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <h2>About Us</h2>
                        <p>We are a community dedicated to fostering Christian values and providing a platform for spiritual growth. Our organization aims to bring people together in faith, offering support, guidance, and opportunities for service.</p>
                        <p>Through our various programs and initiatives, we strive to make a positive impact on individuals and communities, spreading the message of love, compassion, and unity.</p>
                    </div>
                    <div class="about-image">
                        <img src="/api/placeholder/400/300" alt="About Us Image">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <button class="theme-toggle" id="themeToggle">🌓</button>

    <script>
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
        });

        // Smooth scroll function
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>