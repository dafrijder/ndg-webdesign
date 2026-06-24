<x-base-layout>
    <!-- Hero Section -->
    <div class="hero min-h-screen bg-[#111823] flex flex-col items-center justify-center text-center px-4">
        <h1
            class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-blue-500 mb-4 drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]">
            NDG-webdesign
        </h1>
        <p class="text-base sm:text-lg md:text-xl text-blue-200 max-w-md md:max-w-xl drop-shadow-sm">
            Innovative web solutions and creative projects to bring your ideas to life.
        </p>
    </div>

    <!-- Projects Section -->
    <section class="py-16 bg-[#0f1626]">
        <div class="container mx-auto px-4 grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

            <!-- Project Card 1 -->
            <div
                class="bg-[#1b2340] rounded-3xl shadow-2xl border border-blue-500 p-6 sm:p-8 transform hover:scale-105 transition-transform duration-500 hover:shadow-[0_0_40px_rgba(59,130,246,0.7)]">
                <h2
                    class="text-2xl sm:text-3xl font-extrabold text-blue-400 mb-4 text-center drop-shadow-[0_0_8px_rgba(59,130,246,0.7)]">
                    Our Projects
                </h2>
                <ul class="space-y-3 text-blue-200 text-center text-base sm:text-lg">
                    <li>
                        <a href="https://www.spigotmc.org/resources/ride-operate.115637/" target="_blank"
                            class="hover:text-blue-500 transition-colors hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]">
                            Ride Operate
                        </a>
                    </li>
                    <li>
                        <a href="https://www.spigotmc.org/resources/parkcore-–-theme-park-management-plugin.131645/"
                            target="_blank"
                            class="hover:text-blue-500 transition-colors hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]">
                            ParkCore
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Project Card 2 -->
            <div
                class="bg-[#1b2340] rounded-3xl shadow-2xl border border-blue-500 p-6 sm:p-8 transform hover:scale-105 transition-transform duration-500 hover:shadow-[0_0_40px_rgba(59,130,246,0.7)]">
                <h2
                    class="text-2xl sm:text-3xl font-extrabold text-blue-400 mb-4 text-center drop-shadow-[0_0_8px_rgba(59,130,246,0.7)]">
                    Coming Soon
                </h2>
            </div>

            <!-- Project Card 3 -->
            <div
                class="bg-[#1b2340] rounded-3xl shadow-2xl border border-blue-500 p-6 sm:p-8 transform hover:scale-105 transition-transform duration-500 hover:shadow-[0_0_40px_rgba(59,130,246,0.7)]">
                <h2
                    class="text-2xl sm:text-3xl font-extrabold text-blue-400 mb-4 text-center drop-shadow-[0_0_8px_rgba(59,130,246,0.7)]">
                    Coming Soon
                </h2>
            </div>

        </div>
    </section>
    <section class="py-16 bg-[#0f1626]">
        <div class="container mx-auto px-4">

            <h2
                class="text-3xl md:text-4xl font-extrabold text-blue-400 text-center mb-12 drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]">
                Partnerships
            </h2>

            <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

                <!-- Partner Card -->
                <div
                    class="bg-[#1b2340] border border-blue-500 rounded-3xl p-6 text-center shadow-2xl hover:scale-105 transition-transform duration-300">
                    <h3 class="text-xl font-bold text-blue-300 mb-2">
                        FriendsparkMC
                    </h3>
                    <p class="text-blue-200 text-sm mb-4">
                        Make plugins for Minecraft.
                    </p>
                    <span class="inline-block text-xs text-blue-400 bg-blue-500/10 px-3 py-1 rounded-full">
                        Active Partner
                    </span>
                </div>

                <!-- Partner Card -->
                <div
                    class="bg-[#1b2340] border border-blue-500 rounded-3xl p-6 text-center shadow-2xl hover:scale-105 transition-transform duration-300">
                    <h3 class="text-xl font-bold text-blue-300 mb-2">
                        Your Brand?
                    </h3>
                    <p class="text-blue-200 text-sm mb-4">
                        Interested in working together? Let’s connect.
                    </p>
                    <a href="/contact" class="inline-block text-blue-400 hover:text-blue-500 font-semibold transition">
                        Contact us →
                    </a>
                </div>

            </div>

        </div>
    </section>

</x-base-layout>
