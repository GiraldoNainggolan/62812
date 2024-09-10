{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}




{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Animated Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeInUp {
            animation: fadeInUp 0.5s ease-out forwards;
        }
        .animate-delay-100 { animation-delay: 100ms; }
        .animate-delay-200 { animation-delay: 200ms; }
        .animate-delay-300 { animation-delay: 300ms; }
        .animate-delay-400 { animation-delay: 400ms; }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-purple-600 to-blue-500 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full space-y-8 bg-white bg-opacity-20 backdrop-filter backdrop-blur-lg p-10 rounded-xl shadow-2xl animate-fadeInUp">
        <div class="text-center">
            <h2 class="mt-6 text-3xl font-bold text-white animate-float">
                Create Your Account
            </h2>
            <p class="mt-2 text-sm text-white animate-fadeInUp animate-delay-100">
                Join our community today!
            </p>
        </div>
        <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <div class="animate-fadeInUp animate-delay-100">
                    <label for="name" class="sr-only">Name</label>
                    <input id="name" name="name" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Full Name">
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-400" />
                </div>
                <div class="animate-fadeInUp animate-delay-200">
                    <label for="email" class="sr-only">Email address</label>
                    <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-400" />
                </div>
                <div class="animate-fadeInUp animate-delay-300">
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-400" />
                </div>
                <div class="animate-fadeInUp animate-delay-400">
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm Password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-400" />
                </div>
            </div>

            <div class="flex items-center justify-between animate-fadeInUp animate-delay-400">
                <div class="text-sm">
                    <a href="{{ route('login') }}" class="font-medium text-indigo-100 hover:text-white transition duration-150 ease-in-out">
                        Already registered?
                    </a>
                </div>
                <button type="submit" class="group relative flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
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
        });
    </script>
</body>
</html> --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeInUp {
            animation: fadeInUp 0.5s ease-out forwards;
        }
        .animate-delay-100 { animation-delay: 100ms; }
        .animate-delay-200 { animation-delay: 200ms; }
        .animate-delay-300 { animation-delay: 300ms; }
        .animate-delay-400 { animation-delay: 400ms; }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        /* Star Rain Animation */
        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            border-radius: 50%;
            animation: starFall linear infinite;
        }

        @keyframes starFall {
            0% { transform: translateY(-100vh); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(100vh); opacity: 0; }
        }

        /* Glowing effect for form */
        .glow {
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
            transition: box-shadow 0.3s ease;
        }
        .glow:hover {
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.8);
        }

        /* Improved button styles */
        .register-button {
            background: linear-gradient(135deg, #667eea, #764ba2);
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
        }
        .register-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
        }
        .register-button:active {
            transform: translateY(1px);
        }

        /* Eye icon styles */
        .eye-icon {
            position: absolute;
            right: 15px;
            top: 70%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-purple-900 via-blue-900 to-black min-h-screen flex items-center justify-center p-4 overflow-hidden">
    <div id="starContainer"></div>
    
    <div class="max-w-md w-full space-y-8 bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg p-10 rounded-xl shadow-2xl animate-fadeInUp glow">
        <div class="text-center">
            <h2 class="mt-6 text-4xl font-bold text-white animate-float">
                Create Your Account
            </h2>
            <p class="mt-2 text-sm text-indigo-200 animate-fadeInUp animate-delay-100">
                Join our stellar community today!
            </p>
        </div>
        <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <div class="animate-fadeInUp animate-delay-100">
                    <label for="name" class="block text-sm font-medium text-indigo-200 mb-1">Full Name</label>
                    <input id="name" name="name" type="text" required class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm bg-opacity-80 bg-white backdrop-filter backdrop-blur-sm" placeholder="John Doe">
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-400" />
                </div>
                <div class="animate-fadeInUp animate-delay-200 mt-4">
                    <label for="email" class="block text-sm font-medium text-indigo-200 mb-1">Email address</label>
                    <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm bg-opacity-80 bg-white backdrop-filter backdrop-blur-sm" placeholder="you@example.com">
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-400" />
                </div>
                <div class="animate-fadeInUp animate-delay-300 mt-4 relative">
                    <label for="password" class="block text-sm font-medium text-indigo-200 mb-1">Password</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" required class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm bg-opacity-80 bg-white backdrop-filter backdrop-blur-sm" placeholder="••••••••">
                    <i class="fas fa-eye eye-icon" id="togglePassword"></i>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-400" />
                </div>
                <div class="animate-fadeInUp animate-delay-400 mt-4 relative">
                    <label for="password_confirmation" class="block text-sm font-medium text-indigo-200 mb-1">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm bg-opacity-80 bg-white backdrop-filter backdrop-blur-sm" placeholder="••••••••">
                    <i class="fas fa-eye eye-icon" id="togglePasswordConfirmation"></i>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-400" />
                </div>
            </div>

            <div class="flex flex-col space-y-4 mt-8 animate-fadeInUp animate-delay-400">
                <button type="submit" class="register-button group relative flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 ease-in-out w-full">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-indigo-300 group-hover:text-indigo-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Register Now
                </button>
                <div class="text-center">
                    <a href="{{ route('login') }}" class="font-medium text-indigo-300 hover:text-white transition duration-150 ease-in-out">
                        Already registered?  Log in
                    </a>
                </div>
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

            // Star Rain Animation
            const starContainer = document.getElementById('starContainer');
            const starCount = 100;

            for (let i = 0; i < starCount; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.left = `${Math.random() * 100}vw`;
                star.style.animationDuration = `${Math.random() * 3 + 2}s`;
                star.style.animationDelay = `${Math.random() * 3}s`;
                starContainer.appendChild(star);
            }

            // Toggle password visibility
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');
            togglePassword.addEventListener('click', () => {
                const type = password.type === 'password' ? 'text' : 'password';
                password.type = type;
                togglePassword.classList.toggle('fa-eye-slash');
            });

            const togglePasswordConfirmation = document.getElementById('togglePasswordConfirmation');
            const passwordConfirmation = document.getElementById('password_confirmation');
            togglePasswordConfirmation.addEventListener('click', () => {
                const type = passwordConfirmation.type === 'password' ? 'text' : 'password';
                passwordConfirmation.type = type;
                togglePasswordConfirmation.classList.toggle('fa-eye-slash');
            });
        });
    </script>
</body>
</html>