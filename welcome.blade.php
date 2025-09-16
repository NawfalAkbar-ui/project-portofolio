<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Nawfal Akbar</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black text-gray-200 font-sans">

    <!-- Navbar -->
    <header class="flex justify-between items-center px-6 py-4 border-b border-gray-800">
        <h1 class="text-xl font-bold text-white">Nawfal Akbar</h1>
        <nav class="space-x-6">
            <a href="#about" class="hover:text-white">About</a>
            <a href="#projects" class="hover:text-white">Projects</a>
            <a href="#contact" class="hover:text-white">Contact</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="flex flex-col items-center justify-center text-center py-24">
        <h2 class="text-4xl font-extrabold text-white mb-4">Hi, I’m Nawfal 👋</h2>
        <p class="text-gray-400 max-w-xl">I’m a web developer & designer who loves creating clean and modern websites.</p>
        <a href="#projects" class="mt-6 px-6 py-2 bg-white text-black rounded hover:bg-gray-200">
            View My Work
        </a>
    </section>

    <!-- About Section -->
    <section id="about" class="px-6 py-16 max-w-4xl mx-auto">
        <h3 class="text-2xl font-semibold mb-4 text-white">About Me</h3>
        <p class="text-gray-400 leading-relaxed">
            I’m a passionate developer with experience in Laravel, TailwindCSS, and modern web design. 
            I focus on building responsive, user-friendly, and visually appealing websites.
        </p>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="px-6 py-16 max-w-5xl mx-auto">
        <h3 class="text-2xl font-semibold mb-8 text-white text-center">Projects</h3>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-900 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h4 class="text-lg font-bold mb-2 text-white">Project 1</h4>
                <p class="text-gray-400 text-sm">Description of project 1 goes here.</p>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h4 class="text-lg font-bold mb-2 text-white">Project 2</h4>
                <p class="text-gray-400 text-sm">Description of project 2 goes here.</p>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h4 class="text-lg font-bold mb-2 text-white">Project 3</h4>
                <p class="text-gray-400 text-sm">Description of project 3 goes here.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="px-6 py-16 max-w-3xl mx-auto text-center">
        <h3 class="text-2xl font-semibold mb-4 text-white">Get in Touch</h3>
        <p class="text-gray-400 mb-6">Interested in working together? Let’s connect!</p>
        <a href="mailto:youremail@example.com" class="px-6 py-2 bg-white text-black rounded hover:bg-gray-200">
            Contact Me
        </a>
    </section>

    <!-- Footer -->
    <footer class="border-t border-gray-800 text-center py-6 text-gray-500 text-sm">
        © {{ date('Y') }} Nawfal Akbar. All rights reserved.
    </footer>

</body>
</html>
