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
        

        /* Stacked Card With Autoplay */
        @import url("https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Quicksand:wght@300..700&display=swap");

*,
*:before,
*:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Quicksand", sans-serif;
}

body {
  background-color: #0d0a0b;
  background: linear-gradient(145deg, #55566a 0%, #131318 76%);
}

main {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr;
  place-items: center;
  min-height: 100vh;
}

/* Content */

.content {
  padding-left: 120px;
  color: #c7c7c7c9;
  user-select: none;
}

.content h1 {
  font-family: "Dancing Script", cursive;
  font-size: clamp(2.5rem, 4vw, 6rem);
  font-weight: 700;
  background: -webkit-linear-gradient(0deg, #f76591, #ffc16f);
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  line-height: 1.1;
  margin-bottom: 36px;
  padding-left: 10px;
}

.content p {
  font-size: clamp(0.9rem, 4vw, 1.2rem);
  line-height: 1.6;
  padding-right: 100px;
}

.btn {
  background-color: #f76591;
  background-image: linear-gradient(-180deg, #ffc16f, #f76591);
  font-size: clamp(0.8rem, 8vw, 0.9rem);
  font-weight: 600;
  color: #fff;
  width: max-content;
  outline: 0;
  border: 0;
  border-radius: 6px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 10px 20px;
  margin-top: 26px;
  text-align: center;
  transform: scale(1);
  transition: all 0.2s ease-in;
  cursor: pointer;
  touch-action: manipulation;
  user-select: none;
  -webkit-user-select: none;
  pointer-events: auto;
}

.btn:hover {
  box-shadow: 0 4px 10px rgba(247, 101, 145, 0.5);
  transform: scale(0.98);
}

/* Stacked Cards */

.stack {
  position: relative;
}

.card {
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  width: 350px;
  height: 500px;
  border-radius: 2rem;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.25),
    0 15px 20px 0 rgba(0, 0, 0, 0.125);
  transition: transform 0.6s;
  user-select: none;
}

.card img {
  display: block;
  width: 100%;
  height: 100%;
  border-radius: inherit;
  object-fit: cover;
  pointer-events: none;
}

.card:nth-last-child(n + 5) {
  --x: calc(-50% + 90px);
  transform: translate(var(--x), -50%) scale(0.85);
  box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.01);
}

.card:nth-last-child(4) {
  --x: calc(-50% + 60px);
  transform: translate(var(--x), -50%) scale(0.9);
}

.card:nth-last-child(3) {
  --x: calc(-50% + 30px);
  transform: translate(var(--x), -50%) scale(0.95);
}

.card:nth-last-child(2) {
  --x: calc(-50%);
  transform: translate(var(--x), -50%) scale(1);
}

.card:nth-last-child(1) {
  --x: calc(-50% - 30px);
  transform: translate(var(--x), -50%) scale(1.05);
}

.card:nth-last-child(1) img {
  box-shadow: 0 1px 5px 5px rgba(255, 193, 111, 0.5);
}

.swap {
  animation: swap 1.3s ease-out forwards;
}

@keyframes swap {
  30% {
    transform: translate(calc(var(--x) - 250px), -50%) scale(0.85) rotate(-5deg)
      rotateY(65deg);
  }
  100% {
    transform: translate(calc(var(--x) - 30px), -50%) scale(0.5);
    z-index: -1;
  }
}

/* Media queries for keyframes */

@media (max-width: 1200px) {
  @keyframes swap {
    30% {
      transform: translate(calc(var(--x) - 200px), -50%) scale(0.85)
        rotate(-5deg) rotateY(65deg);
    }

    100% {
      transform: translate(calc(var(--x) - 30px), -50%) scale(0.5);
      z-index: -1;
    }
  }
}

@media (max-width: 1050px) {
  @keyframes swap {
    30% {
      transform: translate(calc(var(--x) - 150px), -50%) scale(0.85)
        rotate(-5deg) rotateY(65deg);
    }

    100% {
      transform: translate(calc(var(--x) - 30px), -50%) scale(0.5);
      z-index: -1;
    }
  }
}

/* Media queries for other classes */

@media (max-width: 1200px) {
  .content {
    padding-left: 80px;
  }

  .content p {
    padding-right: 40px;
  }

  .card {
    width: 250px;
    height: 380px;
  }
}

@media (max-width: 1050px) {
  .content {
    padding-left: 60px;
  }

  .content p {
    line-height: 1.5;
  }

  .card {
    width: 220px;
    height: 350px;
  }
}

@media (max-width: 990px) {
  .content p {
    padding-right: 0;
  }

  .card {
    width: 200px;
    height: 300px;
  }
}

@media (max-width: 950px) {
  main {
    grid-template-columns: 1fr;
    grid-template-rows: 4fr 3fr;
    grid-template-areas:
      "stacked"
      "content";
  }

  .content {
    grid-area: content;
    text-align: center;
    padding: 0 90px;
  }

  .btn {
    margin-bottom: 30px;
  }

  .stack {
    grid-area: stacked;
  }
}

@media (max-width: 650px) {
  main {
    grid-template-rows: 1fr 1fr;
  }

  .content {
    padding: 0 50px;
  }

  .content h1 {
    padding-left: 0;
  }

  .btn {
    padding: 8px 16px;
  }

  .card {
    width: 180px;
    height: 260px;
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


        // Stacked Cards With Autoplay
        const stack = document.querySelector(".stack");
const cards = Array.from(stack.children)
  .reverse()
  .filter((child) => child.classList.contains("card"));

cards.forEach((card) => stack.appendChild(card));

function moveCard() {
  const lastCard = stack.lastElementChild;
  if (lastCard.classList.contains("card")) {
    lastCard.classList.add("swap");

    setTimeout(() => {
      lastCard.classList.remove("swap");
      stack.insertBefore(lastCard, stack.firstElementChild);
    }, 1200);
  }
}

let autoplayInterval = setInterval(moveCard, 4000);

stack.addEventListener("click", function (e) {
  const card = e.target.closest(".card");
  if (card && card === stack.lastElementChild) {
    card.classList.add("swap");

    setTimeout(() => {
      card.classList.remove("swap");
      stack.insertBefore(card, stack.firstElementChild);
    }, 1200);
  }
});

    </script>
</body>
</html>