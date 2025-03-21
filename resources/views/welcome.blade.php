<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Zakat Fitrah Sederhana</title>
    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animasi kustom */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes bounceIn {
            0% {
                transform: scale(0.9);
                opacity: 0;
            }
            50% {
                transform: scale(1.05);
                opacity: 1;
            }
            100% {
                transform: scale(1);
            }
        }

        .animate-bounce-in {
            animation: bounceIn 0.8s ease-out;
        }
    </style>
</head>
<body class="bg-[#FDFDFC] text-[#1b1b18] font-sans">

    <!-- Navbar -->
    <header class="sticky top-0 z-50 bg-white shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)]">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-medium text-[#1b1b18] hover:text-[#F53003] transition-colors duration-300">
                Aplikasi Zakat
            </a>
            <button id="menu-toggle" class="block sm:hidden text-[#1b1b18] hover:text-[#F53003] focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
            <ul id="menu" class="hidden sm:flex space-x-4">
                <li><a href="{{ route('login') }}" class="hover:text-[#F53003] transition-colors duration-300">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center space-y-4">
            <h1 class="text-4xl sm:text-5xl font-bold text-[#1b1b18] animate-fade-in-up">
                Selamat Datang di Aplikasi Zakat
            </h1>
            <p class="text-lg sm:text-xl text-[#706f6c] leading-normal animate-fade-in-up" style="animation-delay: 0.3s;">
                Aplikasi sederhana ini membantu panitia zakat untuk mengelola dan mentasarufkan zakat
            </p>
            <a href="#"
               class="inline-block px-6 py-3 bg-[#F53003] text-white rounded-full hover:bg-[#e02d02] transition-colors duration-300 shadow-[0px_4px_6px_rgba(0,0,0,0.1)] animate-bounce-in">
                Zakat Fitrah Apps
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#1b1b18] text-white py-8 mt-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            &copy; {{ date('Y') }} Panitia Zakat. All rights reserved.
        </div>
    </footer>

    <script>
        // Toggle menu untuk mobile
        const menuToggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');

        menuToggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
            menu.classList.toggle('flex-col');
            menu.classList.toggle('items-center');
            menu.classList.toggle('py-4');
        });
    </script>
</body>
</html>