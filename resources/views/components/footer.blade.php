<footer class="bg-[#111823]/90 backdrop-blur-md border-t border-blue-700 text-blue-200">
    <div class="container mx-auto px-6 py-12 grid md:grid-cols-3 gap-12">
        <!-- About Us -->
        <section>
            <h3 class="text-xl font-bold text-blue-400 mb-4 drop-shadow-[0_0_5px_rgba(59,130,246,0.7)]">
                About Us
            </h3>
            <p class="text-blue-200 text-sm leading-relaxed">
                NDG-webdesign creates innovative web solutions, helping businesses bring their ideas to life with modern and creative designs.
            </p>
        </section>

        <!-- Links -->
        <section>
            <h3 class="text-xl font-bold text-blue-400 mb-4 drop-shadow-[0_0_5px_rgba(59,130,246,0.7)]">
                Links
            </h3>
            <ul class="space-y-2 text-blue-200 text-sm">
                <li>
                    <a href="#hero" class="hover:text-blue-400 hover:drop-shadow-[0_0_8px_rgba(59,130,246,0.7)] transition-all">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#projects" class="hover:text-blue-400 hover:drop-shadow-[0_0_8px_rgba(59,130,246,0.7)] transition-all">
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#about" class="hover:text-blue-400 hover:drop-shadow-[0_0_8px_rgba(59,130,246,0.7)] transition-all">
                        About
                    </a>
                </li>
                <li>
                    <a href="#contact" class="hover:text-blue-400 hover:drop-shadow-[0_0_8px_rgba(59,130,246,0.7)] transition-all">
                        Contact
                    </a>
                </li>
            </ul>
        </section>

        <!-- Contact -->
        <section>
            <h3 class="text-xl font-bold text-blue-400 mb-4 drop-shadow-[0_0_5px_rgba(59,130,246,0.7)]">
                Contact
            </h3>
            <p class="text-blue-200 text-sm">Email: <a href="mailto:info@ndg-webdesign.net" class="hover:text-blue-400 transition-all">info@ndg-webdesign.net</a></p>
            <div class="flex mt-4 space-x-4">
                <a href="https://www.youtube.com/@NDG-Webdesign" class="text-blue-200 hover:text-blue-400 transition-all"><i class="fab fa-youtube"></i></a>
                <a href="https://discord.gg/ZvewDrxvSw" class="text-blue-200 hover:text-blue-400 transition-all"><i class="fab fa-discord"></i></a>
                <a href="https://x.com/Ndg_Webdesign" class="text-blue-200 hover:text-blue-400 transition-all"><i class="fab fa-x"></i></a>
                <a href="https://www.tiktok.com/@ndgwebdesign" class="text-blue-200 hover:text-blue-400 transition-all"><i class="fab fa-tiktok"></i></a>
                {{-- <a href="#" class="text-blue-200 hover:text-blue-400 transition-all"><i class="fab fa-instagram"></i></a>   --}}
            </div>
        </section>
    </div>

    <!-- Footer Bottom -->
    <div class="border-t border-blue-700 mt-8 pt-4 pb-2 text-center text-blue-400 text-sm">
        &copy; {{ Date('Y') }} NDG-webdesign. All rights reserved.
    </div>
</footer>
