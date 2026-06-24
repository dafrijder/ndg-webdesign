<nav class="fixed w-full top-0 z-50 backdrop-blur-md bg-[#111823]/70 border-b border-blue-700 shadow-lg">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="text-2xl font-bold text-blue-500 drop-shadow-[0_0_8px_rgba(59,130,246,0.7)]">
            NDG-webdesign
        </a>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-8 text-blue-200 font-medium">
            <li>
                <a href="{{ route('home') }}" class="hover:text-blue-400 hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)] transition-all">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('project') }}" class="hover:text-blue-400 hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)] transition-all">
                    Project
                </a>
            </li>
            <li>
                <a href="{{ route('blog') }}" class="hover:text-blue-400 hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)] transition-all">
                    Blog
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="hover:text-blue-400 hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)] transition-all">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="hover:text-blue-400 hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)] transition-all">
                    Contact
                </a>
            </li>
        </ul>

        <!-- Hamburger Menu (Mobile) -->
        <div class="md:hidden">
            <button id="menu-btn" class="text-blue-200 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#111823]/90 backdrop-blur-md border-t border-blue-700">
        <ul class="flex flex-col space-y-4 px-6 py-4 text-blue-200 font-medium">
            <li><a href="{{ route('home') }}" class="hover:text-blue-400 transition-all">Home</a></li>
            <li><a href="{{ route('project') }}" class="hover:text-blue-400 transition-all">Projects</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-blue-400 transition-all">About</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-blue-400 transition-all">Contact</a></li>
        </ul>
    </div>

    <script>
        // Toggle mobile menu
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</nav>
