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
                <h1>Welcome To The Christian Website</h1>
                <p>Be a God-fearing person with us in the service of the organization.</p>
                <a href="#learn-more" class="cta-button">Learn More</a>
            </section>
        </div>

        <div class="content">
            <h1>La Pâtisserie Belle</h1>
            <p>
              Welcome to La Pâtisserie Belle, where every bite is a journey into the
              exquisite world of finely crafted pastries. Our patisserie is
              dedicated to bringing you the most delicious and beautifully designed
              pastries that will delight your senses and elevate your taste
              experience. Nestled in the heart of the city, our patisserie is a
              haven for those who appreciate the finer things in life.
            </p>
            <button class="btn">Explore More</button>
          </div>
    
          <div class="stack">
            <div class="card">
              <img
                src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/a36d2695-58f8-4644-9e19-71988334e345"
                alt="" />
            </div>
            <div class="card">
              <img
                src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/9f9148ad-74c2-4ebc-a769-bb90fec7b9a5"
                alt="" />
            </div>
            <div class="card">
              <img
                src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/ff35104e-3a7e-458f-8077-7ea2780706fa"
                alt="" />
            </div>
            <div class="card">
              <img
                src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/060546fb-1cbb-428e-b48d-eae2711a0c83"
                alt="" />
            </div>
            <div class="card">
              <img
                src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/7feb903b-33f7-4326-90eb-a4f54c86c68e"
                alt="" />
            </div>
            <div class="card">
              <img
                src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/417d1d6b-4100-4419-9e01-37561a354b80"
                alt="" />
            </div>
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