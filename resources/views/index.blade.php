<!DOCTYPE html>
<html lang="en" class="h-full scroll-smooth bg-[#F9F6F0]">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homex Living – Complete Home & Interior Solutions</title>

    <!-- Google Fonts: Playfair Display & Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght=0,400..700;1,400..700&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS via Laravel Vite -->
    @vite('resources/css/app.css')
</head>

<body
    class="min-h-full font-['Poppins'] antialiased text-[#1A1A1A] bg-[#F9F6F0] overflow-x-hidden relative selection:bg-[#8A7355]/20 selection:text-[#1A1A1A]">
    <div
        class="absolute inset-0 bg-[linear-gradient(to_right,#1A1A1A/[0.02]_1px,transparent_1px)] bg-[size:15%] pointer-events-none z-0">
    </div>
    <div class="max-w-6xl mx-auto px-8 relative z-10 flex flex-col min-h-screen justify-between">

        <!-- HEADER / NAVIGATION -->
        <header
            class="py-12 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 border-b-2 border-[#1A1A1A]/10">
            <a href="#" class="group select-none">
                <span
                    class="font-['Playfair_Display'] font-black tracking-[0.15em] text-3xl sm:text-4xl text-[#1A1A1A] transition-colors duration-300 group-hover:text-[#C25A3F]">
                    HOMEX LIVING
                </span>
            </a>
            <div class="flex items-center gap-3 border-l-2 border-[#C25A3F] pl-4 py-1">
                <span class="text-xs font-bold tracking-[0.4em] uppercase text-[#8A7355]">Calicut, Kerala</span>
            </div>
        </header>
        <!-- ==========================
             HERO SECTION
             ========================== -->
        <main class="py-24 lg:py-32 flex flex-col items-start max-w-4xl">
            <span class="text-xs font-bold tracking-[0.3em] uppercase text-[#8A7355] mb-6 block">Complete Home &
                Interior Solution</span>

            <h1
                class="font-['Playfair_Display'] text-5xl sm:text-7xl md:text-8xl tracking-tight leading-[1.0] text-[#1A1A1A] font-bold">
                Designing spaces.<br>
                <span class="font-medium italic text-[#C25A3F]">Delivering quality.</span>
            </h1>

            <p class="mt-8 text-base text-[#2A2A2A] max-w-2xl font-bold leading-relaxed">
                Complete furniture, uPVC, aluminium, glass & interior solutions under one roof. Driven by premium
                craftsmanship and end-to-end execution.
            </p>

            <div class="mt-12 flex flex-wrap items-center gap-6">
                <a href="#services"
                    class="group flex items-center gap-3 text-xs font-bold tracking-widest uppercase text-[#1A1A1A] hover:text-[#8A7355] transition-colors duration-300">
                    Explore Our Services
                    <span class="transform group-hover:translate-x-1 transition-transform duration-300">→</span>
                </a>
                <div class="h-4 w-[2px] bg-[#1A1A1A]/20"></div>

                <div
                    class="inline-flex items-center gap-3 px-5 py-2.5 border-2 border-[#C25A3F] bg-[#C25A3F]/10 rounded-full text-xs font-bold tracking-[0.25em] text-[#C25A3F] uppercase shadow-sm">
                    <span class="relative flex h-2.5 w-2.5">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#C25A3F] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#C25A3F]"></span>
                    </span>
                    COMING SOON ...
                </div>
            </div>
        </main>

        <!-- ==========================
             COMPLETE SERVICES MATRIX (4-COLUMN GRID)
             ========================== -->
        <section id="services"
            class="py-20 border-t-2 border-[#1A1A1A]/10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

            <!-- COLUMN 1: WINDOWS & FABRICATION -->
            <div>
                <span class="text-[10px] font-bold tracking-widest text-[#8A7355] uppercase block mb-5">01 /
                    Systems</span>
                <h2 class="font-['Playfair_Display'] text-xl font-bold mb-6 text-[#1A1A1A]">Windows & Openings</h2>
                <ul class="space-y-3.5 text-sm font-bold text-[#2A2A2A]">
                    <li>uPVC Windows & Doors</li>
                    <li>WPC Doors & Windows</li>
                    <li>Aluminium Fabrication Work</li>
                </ul>
            </div>

            <!-- COLUMN 2: DOORS & GLASS -->
            <div>
                <span class="text-[10px] font-bold tracking-widest text-[#8A7355] uppercase block mb-5">02 /
                    Structural</span>
                <h2 class="font-['Playfair_Display'] text-xl font-bold mb-6 text-[#1A1A1A]">Doors & Glass</h2>
                <ul class="space-y-3.5 text-sm font-bold text-[#2A2A2A]">
                    <li>All Types of Doors</li>
                    <li>Glass Work</li>
                </ul>
            </div>

            <!-- COLUMN 3: INTERIOR ELEMENTS -->
            <div>
                <span class="text-[10px] font-bold tracking-widest text-[#8A7355] uppercase block mb-5">03 /
                    Millwork</span>
                <h2 class="font-['Playfair_Display'] text-xl font-bold mb-6 text-[#1A1A1A]">Kitchen & Furniture</h2>
                <ul class="space-y-3.5 text-sm font-bold text-[#2A2A2A]">
                    <li>Modular Kitchen</li>
                    <li>Wardrobes</li>
                    <li>Custom Furniture</li>
                </ul>
            </div>

            <!-- COLUMN 4: COMPLETE SOLUTIONS -->
            <div>
                <span class="text-[10px] font-bold tracking-widest text-[#8A7355] uppercase block mb-5">04 /
                    Finishes</span>
                <h2 class="font-['Playfair_Display'] text-xl font-bold mb-6 text-[#1A1A1A]">Decor & Turnkey</h2>
                <ul class="space-y-3.5 text-sm font-bold text-[#2A2A2A]">
                    <li>Home Interiors</li>
                    <li>Wall Paneling & Decorative Works</li>
                    <li>Curtains & Blinds</li>
                    <li>Turnkey Interior Solutions</li>
                    <li>False Ceiling Work</li>
                </ul>
            </div>

        </section>

        <!-- ==========================
             CORE VALUE METRICS
             ========================== -->
        <section class="py-16 border-t-2 border-[#1A1A1A]/10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 items-start">
                <div class="md:col-span-1">
                    <h3 class="font-['Playfair_Display'] text-xl font-bold italic text-[#8A7355]">Why Homex</h3>
                </div>
                <div
                    class="md:col-span-3 flex flex-wrap gap-x-8 gap-y-4 text-xs font-bold tracking-widest uppercase text-[#1A1A1A]">
                    <span>Quality Materials</span><span>•</span>
                    <span>Skilled Workmanship</span><span>•</span>
                    <span>Customised Design</span><span>•</span>
                    <span>Timely Delivery</span><span>•</span>
                    <span>Affordable Pricing</span><span>•</span>
                    <span>End-To-End Project Management</span>
                </div>
            </div>
        </section>

        <!-- ==========================
             CONTACT MATRIX
             ========================== -->
        <!-- <section class="py-20 border-t-2 border-[#1A1A1A]/10 grid grid-cols-1 md:grid-cols-2 gap-12 items-end">
            <div>
                <span class="text-xs font-bold tracking-widest uppercase text-[#8A7355] block mb-4">Location</span>
                <p class="font-['Playfair_Display'] text-2xl text-[#1A1A1A] font-bold">Near Chelannur BLC</p>
                <p class="text-sm font-medium text-[#2A2A2A] mt-1">Chelannur, KAK, Calicut, Kerala</p>

                <div class="mt-8 space-y-1 text-sm font-medium text-[#1A1A1A]">
                    <p class="hover:text-[#8A7355] font-semibold"><a
                            href="mailto:westawindows@gmail.com">westawindows@gmail.com</a></p>
                    <p class="hover:text-[#8A7355] font-semibold"><a href="http://westawindows.com"
                            target="_blank">westawindows.com</a></p>
                </div>
            </div>

            <div class="flex flex-col md:items-end gap-4">
                <span
                    class="text-xs font-bold tracking-widest uppercase text-[#8A7355] md:text-right block w-full">Inquiries</span>
                <div class="font-mono text-sm font-bold tracking-wide space-y-1 text-left md:text-right text-[#1A1A1A]">
                    <p class="block"><a href="tel:04952268836" class="hover:text-[#8A7355]">0495 22 688 36</a></p>
                    <p class="block"><a href="tel:+918086757975" class="hover:text-[#8A7355]">8086 7579 75</a></p>
                    <p class="block"><a href="tel:+919747299001" class="hover:text-[#8A7355]">9747 2990 01</a></p>
                </div>
            </div>
        </section> -->

        <section class="py-20 border-t-2 border-[#1A1A1A]/10 flex flex-col items-center justify-center text-center">
            <span class="text-xs font-bold tracking-[0.2em] uppercase text-[#8A7355] block mb-4">
                Direct Inquiries
            </span>

            <div class="group relative inline-block">
                <a href="tel:+918086757975"
                    class="font-['Playfair_Display'] text-xl sm:text-2xl md:text-3xl text-[#1A1A1A] font-bold tracking-tight hover:text-[#8A7355] transition-colors duration-300 block">
                    +91 8086757975
                </a>
                <div
                    class="h-0.5 w-0 bg-[#8A7355] group-hover:w-full transition-all duration-500 mx-auto mt-2 rounded-full">
                </div>
            </div>

            <p class="text-xs font-semibold uppercase tracking-widest text-[#2A2A2A]/60 mt-4 font-mono">
                Available for Consultations & Orders
            </p>
        </section>

        <!-- ==========================
             MINIMAL FOOTER
             ========================== -->
        <footer
            class="py-8 border-t-2 border-[#1A1A1A]/5 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs tracking-widest uppercase text-[#8A7355] font-bold">
            <span>&copy; 2026 Homex Living.</span>
            <span>Complete Home & Interior Studio</span>
        </footer>

    </div>
</body>

</html>