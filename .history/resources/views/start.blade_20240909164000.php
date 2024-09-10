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
            transition: background-color 0.3s;
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
        }

        .hero {
            text-align: center;
            padding: 100px 0;
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
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: var(--hover-color);
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
            <section class="hero">
                <h1>Welcome to Organise</h1>
                <p>Discover amazing features and connect with our community.</p>
                <a href="#learn-more" class="cta-button">Learn More</a>
            </section>
        </div>
    </main>

    <button class="theme-toggle" id="themeToggle">🌓</button>

    <script>
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
        });
    </script>
</body>
</html>