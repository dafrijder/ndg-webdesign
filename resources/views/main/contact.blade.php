<x-base-layout>
    <section class="min-h-screen bg-[#111823] flex items-center justify-center py-12 px-4">
        <div class="container mx-auto max-w-4xl bg-[#1b2340]/90 backdrop-blur-md rounded-3xl shadow-2xl border border-blue-500 p-8 sm:p-12">

            <h2 class="text-4xl font-extrabold text-blue-400 mb-8 text-center drop-shadow-[0_0_8px_rgba(59,130,246,0.7)]">
                Contact Us
            </h2>

            <div class="flex flex-col md:flex-row gap-8">

                <!-- Contact Info -->
                <aside class="md:w-1/3 text-blue-200 space-y-4">
                    <p>We’d love to hear from you! Send us a message and we’ll get back to you as soon as possible.</p>
                    <p>Email: <a href="mailto:info@ndg-webdesign.net" class="hover:text-blue-400 transition-all">info@ndg-webdesign.net</a></p>
                </aside>

                <!-- Contact Form -->
                <form action="{{ route('send.mail') }}" method="post" class="md:w-2/3 flex flex-col gap-4">
                    @csrf
                    <div class="flex flex-col">
                        <label for="name" class="text-blue-200 mb-2 font-medium">Name:</label>
                        <input type="text" name="name" id="name" placeholder="Your Name"
                               class="bg-[#111823]/80 border border-blue-500 rounded-xl px-4 py-2 text-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:shadow-[0_0_10px_rgba(59,130,246,0.5)] transition-all" required>
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="text-blue-200 mb-2 font-medium">Email:</label>
                        <input type="email" name="email" id="email" placeholder="your@email.com"
                               class="bg-[#111823]/80 border border-blue-500 rounded-xl px-4 py-2 text-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:shadow-[0_0_10px_rgba(59,130,246,0.5)] transition-all" required>
                    </div>

                    <div class="flex flex-col">
                        <label for="subject" class="text-blue-200 mb-2 font-medium">Subject:</label>
                        <select name="subject" id="subject" class="bg-[#111823]/80 border border-blue-500 rounded-xl px-4 py-2 text-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:shadow-[0_0_10px_rgba(59,130,246,0.5)] transition-all" required>
                            <option value="" disabled selected class="text-blue-200">Select a subject</option>
                            <option value="General Inquiry">General questions</option>
                            <option value="Support">Support</option>
                            <option value="Feedback">Feedback</option>
                            <option value="Other">Other</option>
                        </select>

                    <div class="flex flex-col">
                        <label for="content" class="text-blue-200 mb-2 font-medium">Message:</label>
                        <textarea name="content" id="content" rows="6" placeholder="Your message..."
                                  class="bg-[#111823]/80 border border-blue-500 rounded-xl px-4 py-2 text-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:shadow-[0_0_10px_rgba(59,130,246,0.5)] transition-all" required></textarea>
                    </div>

                    <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 rounded-xl drop-shadow-[0_0_10px_rgba(59,130,246,0.7)] transition-all">
                        Send Message
                    </button>
                </form>

            </div>
        </div>
    </section>
</x-base-layout>
