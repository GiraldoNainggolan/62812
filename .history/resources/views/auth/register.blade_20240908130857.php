{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out forwards;
        }
        .animate-delay-100 { animation-delay: 100ms; }
        .animate-delay-200 { animation-delay: 200ms; }
        .animate-delay-300 { animation-delay: 300ms; }
        .animate-delay-400 { animation-delay: 400ms; }

        /* Starry background styles */
        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            border-radius: 50%;
            animation: fall linear infinite;
        }
        @keyframes fall {
            0% {
                transform: translateY(-100vh) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
</head>
<body class="bg-gradient-to-b from-purple-900 to-indigo-900 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 overflow-hidden">
    <div class="stars" id="stars"></div>
    <div class="max-w-md w-full space-y-8 bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg p-10 rounded-xl shadow-2xl animate-fadeIn">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-white">
                Create your account
            </h2>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <div class="animate-fadeIn animate-delay-100">
                    <label for="name" class="sr-only">Name</label>
                    <input id="name" name="name" type="text" autocomplete="name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
                </div>
                <div class="animate-fadeIn animate-delay-200">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
                </div>
                <div class="animate-fadeIn animate-delay-300">
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                </div>
                <div class="animate-fadeIn animate-delay-400">
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm Password">
                </div>
            </div>

            <div class="flex items-center justify-between animate-fadeIn animate-delay-400">
                <div class="text-sm">
                    <a href="{{ route('login') }}" class="font-medium text-indigo-300 hover:text-indigo-100">
                        Already registered?
                    </a>
                </div>
            </div>

            <div class="animate-fadeIn animate-delay-400">
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Register
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('focus', () => {
                    input.classList.add('ring-2', 'ring-indigo-500', 'border-indigo-500');
                });
                input.addEventListener('blur', () => {
                    input.classList.remove('ring-2', 'ring-indigo-500', 'border-indigo-500');
                });
            });

            // Create starry background
            const starsContainer = document.getElementById('stars');
            const starCount = 100;

            for (let i = 0; i < starCount; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.left = `${Math.random() * 100}%`;
                star.style.top = `${Math.random() * 100}%`;
                star.style.animationDuration = `${Math.random() * 3 + 2}s`;
                star.style.animationDelay = `${Math.random() * 3}s`;
                starsContainer.appendChild(star);
            }
        });
    </script>
</body>
</html> --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook-style Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out forwards;
        }
        .animate-delay-100 { animation-delay: 100ms; }
        .animate-delay-200 { animation-delay: 200ms; }
        .animate-delay-300 { animation-delay: 300ms; }

        /* Starry background styles */
        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            border-radius: 50%;
            animation: fall linear infinite;
        }
        @keyframes fall {
            0% {
                transform: translateY(-100vh) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8 overflow-hidden">
    <div class="stars" id="stars"></div>
    <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-xl shadow-md animate-fadeIn">
        <div>
            <h1 class="text-center text-4xl font-bold text-blue-600">facebook</h1>
            <h2 class="mt-6 text-center text-2xl font-bold text-gray-900">
                Create a new account
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                It's quick and easy.
            </p>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <div class="flex gap-2 animate-fadeIn animate-delay-100">
                    <input id="firstname" name="firstname" type="text" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="First name">
                    <input id="lastname" name="lastname" type="text" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Last name">
                </div>
                <div class="animate-fadeIn animate-delay-200">
                    <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm mt-2" placeholder="Mobile number or email address">
                </div>
                <div class="animate-fadeIn animate-delay-300">
                    <input id="password" name="password" type="password" autocomplete="new-password" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm mt-2" placeholder="New password">
                </div>
            </div>

            <div class="animate-fadeIn animate-delay-300">
                <label class="block text-sm font-medium text-gray-700">Date of birth</label>
                <div class="mt-1 flex gap-2">
                    <select name="birthday_day" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <!-- Add options for days -->
                    </select>
                    <select name="birthday_month" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <!-- Add options for months -->
                    </select>
                    <select name="birthday_year" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <!-- Add options for years -->
                    </select>
                </div>
            </div>

            <div class="animate-fadeIn animate-delay-300">
                <label class="block text-sm font-medium text-gray-700">Gender</label>
                <div class="mt-1 flex gap-2">
                    <label class="inline-flex items-center px-3 py-2 border border-gray-300 rounded-md">
                        <input type="radio" name="gender" value="female" class="form-radio h-4 w-4 text-blue-600">
                        <span class="ml-2">Female</span>
                    </label>
                    <label class="inline-flex items-center px-3 py-2 border border-gray-300 rounded-md">
                        <input type="radio" name="gender" value="male" class="form-radio h-4 w-4 text-blue-600">
                        <span class="ml-2">Male</span>
                    </label>
                    <label class="inline-flex items-center px-3 py-2 border border-gray-300 rounded-md">
                        <input type="radio" name="gender" value="custom" class="form-radio h-4 w-4 text-blue-600">
                        <span class="ml-2">Custom</span>
                    </label>
                </div>
            </div>

            <div class="animate-fadeIn animate-delay-300 text-xs text-gray-600">
                By clicking Sign Up, you agree to our <a href="#" class="text-blue-600 hover:underline">Terms</a>, <a href="#" class="text-blue-600 hover:underline">Data Policy</a> and <a href="#" class="text-blue-600 hover:underline">Cookie Policy</a>.
            </div>

            <div class="animate-fadeIn animate-delay-300">
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-150 ease-in-out">
                    Sign Up
                </button>
            </div>
        </form>
        <div class="text-center animate-fadeIn animate-delay-300">
            <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">
                Already have an account?
            </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('focus', () => {
                    input.classList.add('ring-2', 'ring-blue-500', 'border-blue-500');
                });
                input.addEventListener('blur', () => {
                    input.classList.remove('ring-2', 'ring-blue-500', 'border-blue-500');
                });
            });

            // Create starry background
            const starsContainer = document.getElementById('stars');
            const starCount = 100;

            for (let i = 0; i < starCount; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.left = `${Math.random() * 100}%`;
                star.style.top = `${Math.random() * 100}%`;
                star.style.animationDuration = `${Math.random() * 3 + 2}s`;
                star.style.animationDelay = `${Math.random() * 3}s`;
                starsContainer.appendChild(star);
            }
        });
    </script>
</body>
</html>