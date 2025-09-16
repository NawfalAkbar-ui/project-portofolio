<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portfolio – Nawfal Akbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
  <style>
    :root {
      --accent-from:#6a0dad; /* ungu tua */
      --accent-to:#4b0082;   /* indigo tua */
    }
    body { font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, Arial, sans-serif; }
    .headline { font-family: Montserrat, Inter, system-ui, sans-serif; }
    .gradient-text { background: linear-gradient(90deg, var(--accent-from), var(--accent-to)); -webkit-background-clip: text; background-clip:text; color: transparent; }
    .btn-gradient { background: linear-gradient(135deg, var(--accent-from), var(--accent-to)); }
    .typing-text {
      border-right: 2px solid var(--accent-from);
      white-space: nowrap;
      overflow: hidden;
      width: 0;
      animation: typing 4s steps(40, end) forwards, blink 0.7s step-end infinite;
    }
    @keyframes typing { from { width: 0 } to { width: 100% } }
    @keyframes blink { 50% { border-color: transparent } }
  </style>
</head>
<body class="bg-[#0b1324] text-slate-100 antialiased">

<!-- ✅ Navbar -->
<nav class="flex justify-between items-center px-6 md:px-20 py-4 bg-[#0F172A]/80 backdrop-blur-md fixed top-0 left-0 w-full z-50 shadow-lg">
  <h1 class="text-2xl font-bold text-[#6a0dad]">Portofolio</h1>
  <ul class="hidden md:flex items-center space-x-8">
    <li><a href="#about" class="hover:text-[#6a0dad] transition">About</a></li>
    <li><a href="#skills" class="hover:text-[#6a0dad] transition">Skills</a></li>
    <li><a href="#projects" class="hover:text-[#6a0dad] transition">Projects</a></li>
    <li><a href="#contact" class="hover:text-[#6a0dad] transition">Contact</a></li>
    <li>
      <a href="#contact" class="px-5 py-2 rounded-xl bg-gradient-to-r from-[#6a0dad] to-[#4b0082] text-white font-semibold shadow-md hover:shadow-[#6a0dad]/50 hover:scale-105 transition duration-300">
        Hire Me
      </a>
    </li>
  </ul>
</nav>

<!-- Hero Section -->
<section class="relative min-h-screen flex flex-col items-center justify-center text-center bg-gray-900 px-6 overflow-hidden">
  <!-- Particle Background -->
  <div id="particles-js" class="absolute inset-0"></div>

  <!-- Judul -->
  <h1 class="text-5xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500 animate-text relative z-10">
    Welcome to My Portfolio
  </h1>

  <!-- Efek Typing -->
  <p class="mt-4 text-xl md:text-2xl font-semibold text-gray-300 typing relative z-10"></p>

  <!-- Tombol Explore -->
  <div class="mt-8 relative z-10">
    <a href="#about" 
       class="px-8 py-3 rounded-xl font-semibold text-white bg-gradient-to-r from-purple-600 to-pink-500 
              shadow-lg hover:scale-105 hover:shadow-pink-500/50 transition-transform duration-300 flex items-center gap-2">
      Explore
    </a>
  </div>
</section>

<!-- Typing & Particle Script -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
<script>
  // Efek typing
  new Typed(".typing", {
    strings: ["Halo, saya Nawfal Akbar 👋", "Seorang Web Designer 💻", "Dan Web Developer 🚀"],
    typeSpeed: 60,
    backSpeed: 40,
    loop: true
  });

  // Particles
  particlesJS("particles-js", {
    particles: {
      number: { value: 80, density: { enable: true, value_area: 800 } },
      color: { value: "#ffffff" },
      shape: { type: "circle" },
      opacity: { value: 0.5, random: true },
      size: { value: 3, random: true },
      move: { enable: true, speed: 2, random: true, out_mode: "out" }
    },
    interactivity: {
      detect_on: "canvas",
      events: { onhover: { enable: true, mode: "repulse" } }
    },
    retina_detect: true
  });
</script>


<section id="about" class="relative min-h-screen flex items-center justify-center text-white px-6 py-20 overflow-hidden">
  <!-- Particle Background -->
  <div id="particles-about" class="absolute inset-0 z-0"></div>

  <div class="container mx-auto lg:flex lg:items-center lg:justify-between gap-16 relative z-10">
    
 <!-- Container Foto Profil -->
<div class="relative flex justify-center items-center">

  <!-- Wave line animasi (geser ke kanan) -->
  <svg class="absolute w-[500px] h-[500px] opacity-50 translate-x-24" 
       viewBox="0 0 500 200" fill="none" xmlns="http://www.w3.org/2000/svg">

    <!-- Wave 1 -->
    <path d="M0,100 C150,0 350,200 500,100" 
          stroke="#a855f7" 
          stroke-width="2" 
          fill="none" 
          stroke-dasharray="1000" 
          stroke-dashoffset="1000">
      <animate attributeName="stroke-dashoffset" from="1000" to="0" dur="6s" repeatCount="indefinite" />
    </path>

    <!-- Wave 2 -->
    <path d="M0,110 C150,10 350,210 500,110" 
          stroke="#ec4899" 
          stroke-width="2" 
          fill="none" 
          stroke-dasharray="1000" 
          stroke-dashoffset="1000">
      <animate attributeName="stroke-dashoffset" from="1000" to="0" dur="8s" begin="2s" repeatCount="indefinite" />
    </path>

    <!-- Wave 3 -->
    <path d="M0,90 C150,-10 350,190 500,90" 
          stroke="#8b5cf6" 
          stroke-width="2" 
          fill="none" 
          stroke-dasharray="1000" 
          stroke-dashoffset="1000">
      <animate attributeName="stroke-dashoffset" from="1000" to="0" dur="10s" begin="4s" repeatCount="indefinite" />
    </path>

  </svg>

  <!-- Card Foto -->
  <div class="relative w-64 h-80 rounded-[2rem] overflow-hidden shadow-2xl border border-purple-500/40 bg-gradient-to-b from-purple-900/40 to-pink-900/20">
    <img src="images/fotonya.png" alt="Foto Profil" class="w-full h-full object-cover">
  </div>
</div>

    <!-- Teks About Me -->
    <div class="max-w-xl">
      <h2 class="text-3xl md:text-4xl font-bold text-pink-400 mb-6">About Me</h2>
      <p class="text-lg text-gray-300 leading-relaxed mb-6">
        Halo! Saya <span class="font-semibold text-pink-400">Nawfal Akbar</span>, seorang desainer grafis dan web developer yang menyukai desain minimalis dan teknologi modern.
      </p>
      <p class="text-lg text-gray-400 leading-relaxed mb-6">
        Dengan pengalaman di berbagai proyek, saya terbiasa menggabungkan kreativitas dan logika untuk menciptakan solusi digital yang indah dan fungsional.
      </p>

      <!-- Skill Highlight -->
      <div class="flex gap-4 mt-4">
        <span class="bg-purple-600 px-3 py-1 rounded-full text-sm font-semibold">Web Design</span>
        <span class="bg-pink-500 px-3 py-1 rounded-full text-sm font-semibold">UI/UX</span>
        <span class="bg-purple-600 px-3 py-1 rounded-full text-sm font-semibold">Web Development</span>
      </div>

      <!-- Tombol -->
      <div class="mt-8">
        <a href="#projects" 
           class="px-6 py-3 rounded-xl font-semibold text-white bg-gradient-to-r from-purple-600 to-pink-500 
                  shadow-lg hover:scale-105 hover:shadow-pink-500/50 transition duration-300">
          Lihat Project Saya
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Particles Script -->
<script>
  particlesJS("particles-about", {
    particles: {
      number: { value: 60, density: { enable: true, value_area: 800 } },
      color: { value: ["#ff00ff", "#a855f7", "#f472b6"] },
      shape: { type: "circle" },
      opacity: { value: 0.4, random: true },
      size: { value: 3, random: true },
      move: { enable: true, speed: 1.5, random: true, out_mode: "out" }
    },
    interactivity: {
      detect_on: "canvas",
      events: { onhover: { enable: true, mode: "repulse" } }
    },
    retina_detect: true
  });
</script>



<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes grow {
      from { width: 0; }
      to { width: var(--tw-grow-width); }
    }

    .animate-grow {
      animation: grow 2s ease-in-out forwards;
    }
  </style>
</head>

<body class="bg-gray-900 text-white">
  <section id="skills" class="py-20">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12">My Skills</h2>

      <!-- Frontend -->
      <h3 class="text-xl font-semibold mb-6 text-cyan-400">Frontend</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        
        <!-- HTML -->
        <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-cyan-500/30 transition">
          <div class="flex items-center gap-3 mb-3">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-plain.svg" 
                 alt="HTML" class="w-10 h-10 object-contain">
            <h4 class="font-semibold text-lg">HTML</h4>
          </div>
          <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
            <div class="h-3 w-0 animate-grow bg-gradient-to-r from-orange-400 to-red-500"
                 style="--tw-grow-width:90%"></div>
          </div>
          <p class="mt-2 text-sm text-gray-400">Level: 90% – <span class="text-green-400">Expert</span></p>
        </div>

        <!-- CSS -->
        <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-cyan-500/30 transition">
          <div class="flex items-center gap-3 mb-3">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-plain.svg" 
                 alt="CSS" class="w-10 h-10 object-contain">
            <h4 class="font-semibold text-lg">CSS</h4>
          </div>
          <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
            <div class="h-3 w-0 animate-grow bg-gradient-to-r from-blue-400 to-blue-600"
                 style="--tw-grow-width:85%"></div>
          </div>
          <p class="mt-2 text-sm text-gray-400">Level: 85% – <span class="text-green-400">Expert</span></p>
        </div>

        <!-- TailwindCSS -->
        <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-cyan-500/30 transition">
          <div class="flex items-center gap-3 mb-3">
            <img src="images/talwind.png" 
                 alt="TailwindCSS" class="w-10 h-10 object-contain">
            <h4 class="font-semibold text-lg">TailwindCSS</h4>
          </div>
          <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
            <div class="h-3 w-0 animate-grow bg-gradient-to-r from-cyan-400 to-blue-500"
                 style="--tw-grow-width:85%"></div>
          </div>
          <p class="mt-2 text-sm text-gray-400">Level: 85% – <span class="text-green-400">Expert</span></p>
        </div>

        <!-- JavaScript -->
        <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-cyan-500/30 transition">
          <div class="flex items-center gap-3 mb-3">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-plain.svg" 
                 alt="JavaScript" class="w-10 h-10 object-contain">
            <h4 class="font-semibold text-lg">JavaScript</h4>
          </div>
          <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
            <div class="h-3 w-0 animate-grow bg-gradient-to-r from-yellow-400 to-orange-500"
                 style="--tw-grow-width:75%"></div>
          </div>
          <p class="mt-2 text-sm text-gray-400">Level: 75% – <span class="text-yellow-400">Intermediate</span></p>
        </div>

        <!-- React -->
        <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-cyan-500/30 transition">
          <div class="flex items-center gap-3 mb-3">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" 
                 alt="React" class="w-10 h-10 object-contain">
            <h4 class="font-semibold text-lg">React</h4>
          </div>
          <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
            <div class="h-3 w-0 animate-grow bg-gradient-to-r from-cyan-400 to-blue-500"
                 style="--tw-grow-width:70%"></div>
          </div>
          <p class="mt-2 text-sm text-gray-400">Level: 70% – <span class="text-yellow-400">Intermediate</span></p>
        </div>

      </div>
    </div>
  </section>
</body>

    <!-- Backend -->
<h3 class="text-xl font-semibold mb-6 text-green-400">Backend</h3>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

  <!-- PHP -->
  <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-green-500/30 transition">
    <div class="flex items-center gap-3 mb-3">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" 
           alt="PHP" class="w-10 h-10 object-contain">
      <h4 class="font-semibold text-lg">PHP</h4>
    </div>
    <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
      <div class="h-3 w-0 animate-grow bg-gradient-to-r from-indigo-400 to-purple-500"
           style="--tw-grow-width:80%"></div>
    </div>
    <p class="mt-2 text-sm text-gray-400">Level: 80% – <span class="text-green-400">Expert</span></p>
  </div>

  <!-- Laravel -->
  <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-green-500/30 transition">
    <div class="flex items-center gap-3 mb-3">
      <img src="images/laravel.png" 
           alt="Laravel" class="w-10 h-10 object-contain">
      <h4 class="font-semibold text-lg">Laravel</h4>
    </div>
    <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
      <div class="h-3 w-0 animate-grow bg-gradient-to-r from-red-400 to-pink-500"
           style="--tw-grow-width:70%"></div>
    </div>
    <p class="mt-2 text-sm text-gray-400">Level: 70% – <span class="text-yellow-400">Intermediate</span></p>
  </div>

  <!-- MySQL -->
  <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-green-500/30 transition">
    <div class="flex items-center gap-3 mb-3">
      <img src="images/MySQL.png" 
           alt="MySQL" class="w-10 h-10 object-contain">
      <h4 class="font-semibold text-lg">MySQL</h4>
    </div>
    <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
      <div class="h-3 w-0 animate-grow bg-gradient-to-r from-blue-400 to-cyan-500"
           style="--tw-grow-width:75%"></div>
    </div>
    <p class="mt-2 text-sm text-gray-400">Level: 75% – <span class="text-yellow-400">Intermediate</span></p>
  </div>

  <!-- Node.js -->
  <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-green-500/30 transition">
    <div class="flex items-center gap-3 mb-3">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-plain.svg" 
           alt="Node.js" class="w-10 h-10 object-contain">
      <h4 class="font-semibold text-lg">Node.js</h4>
    </div>
    <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
      <div class="h-3 w-0 animate-grow bg-gradient-to-r from-green-400 to-lime-500"
           style="--tw-grow-width:65%"></div>
    </div>
    <p class="mt-2 text-sm text-gray-400">Level: 65% – <span class="text-yellow-400">Intermediate</span></p>
  </div>
</div>

  <!-- Tools -->
<h3 class="text-xl font-bold mb-4">Tools</h3>
<div class="grid md:grid-cols-2 gap-6">

  <!-- Git -->
  <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-yellow-500/30 transition">
    <div class="flex items-center gap-3 mb-3">
      <img src="{{ asset('images/git.png') }}" class="w-8 h-8" alt="Git Logo">
      <h4 class="font-semibold text-lg">Git</h4>
    </div>
    <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
      <div class="h-3 w-0 animate-grow rounded-full bg-gradient-to-r from-orange-500 to-red-500"
           style="--tw-grow-width:85%"></div>
    </div>
    <p class="mt-2 text-sm text-gray-400">Level: 85% – <span class="text-green-400">Expert</span></p>
  </div>

  <!-- GitHub -->
  <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-gray-500/30 transition">
    <div class="flex items-center gap-3 mb-3">
      <img src="{{ asset('images/github.png') }}" class="w-8 h-8" alt="GitHub Logo">
      <h4 class="font-semibold text-lg">GitHub</h4>
    </div>
    <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
      <div class="h-3 w-0 animate-grow rounded-full bg-gradient-to-r from-gray-400 to-gray-700"
           style="--tw-grow-width:80%"></div>
    </div>
    <p class="mt-2 text-sm text-gray-400">Level: 80% – <span class="text-green-400">Expert</span></p>
  </div>

  <!-- Figma -->
  <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-pink-500/30 transition">
    <div class="flex items-center gap-3 mb-3">
      <img src="{{ asset('images/figma.png') }}" class="w-8 h-8" alt="Figma Logo">
      <h4 class="font-semibold text-lg">Figma</h4>
    </div>
    <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
      <div class="h-3 w-0 animate-grow rounded-full bg-gradient-to-r from-pink-500 to-purple-500"
           style="--tw-grow-width:75%"></div>
    </div>
    <p class="mt-2 text-sm text-gray-400">Level: 75% – <span class="text-yellow-400">Intermediate</span></p>
  </div>

  <!-- Inkscape -->
  <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-indigo-500/30 transition">
    <div class="flex items-center gap-3 mb-3">
      <img src="{{ asset('images/inkscape.png') }}" class="w-8 h-8" alt="Inkscape Logo">
      <h4 class="font-semibold text-lg">Inkscape</h4>
    </div>
    <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
      <div class="h-3 w-0 animate-grow rounded-full bg-gradient-to-r from-indigo-400 to-indigo-700"
           style="--tw-grow-width:70%"></div>
    </div>
    <p class="mt-2 text-sm text-gray-400">Level: 70% – <span class="text-yellow-400">Intermediate</span></p>
  </div>

  <!-- VS Code -->
  <div class="p-6 rounded-2xl bg-white/5 border border-white/10 shadow-lg hover:shadow-blue-500/30 transition">
    <div class="flex items-center gap-3 mb-3">
      <img src="{{ asset('images/vscode.png') }}" class="w-8 h-8" alt="VS Code Logo">
      <h4 class="font-semibold text-lg">VS Code</h4>
    </div>
    <div class="h-3 w-full rounded-full bg-white/10 overflow-hidden">
      <div class="h-3 w-0 animate-grow rounded-full bg-gradient-to-r from-cyan-400 to-blue-500"
           style="--tw-grow-width:90%"></div>
    </div>
    <p class="mt-2 text-sm text-gray-400">Level: 90% – <span class="text-green-400">Expert</span></p>
  </div>
</div>

 <!-- Education Section -->
<section id="education" class="py-20 mt-16 bg-gradient-to-b from-[#0f172a] to-[#0f172a]/90">
  <div class="container mx-auto text-center">
    <h2 class="text-4xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent mb-12">
      Education
    </h2>
    <div class="relative border-l-4 border-cyan-400/50 mx-auto w-fit">

        <!-- SD -->
        <div class="mb-12 ml-10 relative" data-aos="fade-up">
          <div class="absolute -left-16 top-0 bg-gradient-to-r from-cyan-400 to-blue-500 text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg shadow-blue-500/30">
            🎒
          </div>
          <h3 class="text-2xl font-bold text-cyan-400">SD Muhammadiyah 8 KH.Mas Mansyur</h3>
          <span class="text-gray-400 text-sm">2013 – 2019</span>
          <p class="text-gray-300 mt-2">
            Foundation of my education journey, where I learned the basics and developed curiosity for learning.
          </p>
        </div>
  
        <!-- SMP -->
        <div class="mb-12 ml-10 relative" data-aos="fade-up" data-aos-delay="200">
          <div class="absolute -left-16 top-0 bg-gradient-to-r from-cyan-400 to-blue-500 text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg shadow-blue-500/30">
            🏫
          </div>
          <h3 class="text-2xl font-bold text-cyan-400">Pondok Pesantren Tahfidzul Qur'an Al-Furqon Malang</h3>
          <span class="text-gray-400 text-sm">2020 – 2023</span>
          <p class="text-gray-300 mt-2">
            Where I expanded my knowledge, developed friendships, and discovered my interests in technology and creativity.
          </p>
        </div>
  
        <!-- SMA -->
        <div class="ml-10 relative" data-aos="fade-up" data-aos-delay="400">
          <div class="absolute -left-16 top-0 bg-gradient-to-r from-cyan-400 to-blue-500 text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg shadow-blue-500/30">
            🎓
          </div>
          <h3 class="text-2xl font-bold text-cyan-400">Pondok Pesantren Tahfidz & IT Hubbul Khoir Sukoharjo</h3>
          <span class="text-gray-400 text-sm">2024 – 2026</span>
          <p class="text-gray-300 mt-2">
            Focused on academic excellence and began exploring design and web development as hobbies.
          </p>
        </div>
  
      </div>
    </div>
  </section>
  


  <!-- Projects Section -->
<section id="projects" class="py-20 bg-gradient-to-b from-[#0f172a] to-[#0f172a]/90">
  <div class="container mx-auto text-center px-6">
    <h2 class="text-4xl font-bold text-center text-blue-500 mb-12">
      Projects
    </h2>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-[#111827] rounded-2xl overflow-hidden shadow-lg shadow-blue-500/10 hover:shadow-blue-500/40 transition-all duration-300" data-aos="fade-up">
        <img src="images/portofolio.png" alt="Portfolio Website" class="w-full h-40 object-cover hover:scale-105 transition-transform duration-500">
        <div class="p-5 text-left">
          <h3 class="text-xl font-semibold text-cyan-400">Portfolio Website</h3>
          <p class="text-gray-400 text-sm mb-3">Website pribadi dengan desain modern menggunakan TailwindCSS dan animasi AOS.</p>
          <a href="https://github.com/username/portfolio" target="_blank" class="text-blue-400 font-semibold hover:underline">Lihat Project →</a>
        </div>
      </div>
      
        <!-- Project 2 -->
        <div class="bg-[#111827] rounded-2xl overflow-hidden shadow-lg shadow-blue-500/10 hover:shadow-blue-500/40 transition-all duration-300" data-aos="fade-up">
          <img src="todo-app.png" alt="Todo App" class="w-full h-40 object-cover hover:scale-105 transition-transform duration-500">
          <div class="p-5 text-left">
            <h3 class="text-xl font-semibold text-cyan-400">Todo App</h3>
            <p class="text-gray-400 text-sm mb-3">Aplikasi manajemen tugas dengan fitur CRUD dan autentikasi.</p>
            <a href="https://github.com/username/todo-app" target="_blank" class="text-blue-400 font-semibold hover:underline">Lihat Project →</a>
          </div>
        </div>
  
        <!-- Project 3 -->
        <div class="bg-[#111827] rounded-2xl overflow-hidden shadow-lg shadow-blue-500/10 hover:shadow-blue-500/40 transition-all duration-300" data-aos="fade-up">
          <img src="ecommerce.png" alt="E-Commerce" class="w-full h-40 object-cover hover:scale-105 transition-transform duration-500">
          <div class="p-5 text-left">
            <h3 class="text-xl font-semibold text-cyan-400">Mini E-Commerce</h3>
            <p class="text-gray-400 text-sm mb-3">Website toko online sederhana dengan fitur keranjang belanja dan checkout.</p>
            <a href="https://github.com/username/ecommerce" target="_blank" class="text-blue-400 font-semibold hover:underline">Lihat Project →</a>
          </div>
        </div>
  
        <!-- Project 4 -->
        <div class="bg-[#111827] rounded-2xl overflow-hidden shadow-lg shadow-blue-500/10 hover:shadow-blue-500/40 transition-all duration-300" data-aos="fade-up">
          <img src="project4.png" alt="Project 4" class="w-full h-40 object-cover hover:scale-105 transition-transform duration-500">
          <div class="p-5 text-left">
            <h3 class="text-xl font-semibold text-cyan-400">Project 4</h3>
            <p class="text-gray-400 text-sm mb-3">Deskripsi singkat proyek 4.</p>
            <a href="#" target="_blank" class="text-blue-400 font-semibold hover:underline">Lihat Project →</a>
          </div>
        </div>
  
        <!-- Project 5 -->
        <div class="bg-[#111827] rounded-2xl overflow-hidden shadow-lg shadow-blue-500/10 hover:shadow-blue-500/40 transition-all duration-300" data-aos="fade-up" data-aos-delay="150">
          <img src="project5.png" alt="Project 5" class="w-full h-40 object-cover hover:scale-105 transition-transform duration-500">
          <div class="p-5 text-left">
            <h3 class="text-xl font-semibold text-cyan-400">Project 5</h3>
            <p class="text-gray-400 text-sm mb-3">Deskripsi singkat proyek 5.</p>
            <a href="#" target="_blank" class="text-blue-400 font-semibold hover:underline">Lihat Project →</a>
          </div>
        </div>
  
        <!-- Project 6 -->
        <div class="bg-[#111827] rounded-2xl overflow-hidden shadow-lg shadow-blue-500/10 hover:shadow-blue-500/40 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
          <img src="project6.png" alt="Project 6" class="w-full h-40 object-cover hover:scale-105 transition-transform duration-500">
          <div class="p-5 text-left">
            <h3 class="text-xl font-semibold text-cyan-400">Project 6</h3>
            <p class="text-gray-400 text-sm mb-3">Deskripsi singkat proyek 6.</p>
            <a href="#" target="_blank" class="text-blue-400 font-semibold hover:underline">Lihat Project →</a>
          </div>
        </div>
  
      </div>
    </div>
  </section>
  

    <!-- Footer CTA -->
    <section id="contact" class="relative py-16 scroll-fade opacity-0 translate-y-10">
        <div class="mx-auto max-w-6xl px-4">
          <div class="rounded-3xl border border-white/10 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 p-10 text-center" data-aos="fade-up">
            <h3 class="headline text-2xl md:text-3xl font-extrabold">Punya proyek atau ide? Yuk diskusi!</h3>
            <p class="mt-2 text-slate-300">Saya siap bantu buat tampilan bersih dan performa optimal.</p>
            <div class="mt-6 flex justify-center gap-3">
                <a href="mailto:lafwan.rabka.malang@gmail.com" class="btn-gradient inline-flex rounded-2xl px-5 py-2.5 font-semibold">Email Saya</a>
              <a href="https://wa.me/6285979214578" 
              target="_blank" 
              class="inline-flex rounded-2xl border border-white/10 px-5 py-2.5 font-semibold hover:bg-white/5">
              WhatsApp
           </a>
           <a href="https://instagram.com/akynalvv_" 
   target="_blank"
   class="inline-flex items-center gap-2 rounded-2xl border border-white/10 px-5 py-2.5 font-semibold hover:bg-white/5">
   <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-5 w-5 text-pink-500">
     <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.35 3.608 1.325.975.975 1.263 2.242 1.325 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.35 2.633-1.325 3.608-.975.975-2.242 1.263-3.608 1.325-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.35-3.608-1.325-.975-.975-1.263-2.242-1.325-3.608C2.175 15.584 2.163 15.204 2.163 12s.012-3.584.07-4.85c.062-1.366.35-2.633 1.325-3.608.975-.975 2.242-1.263 3.608-1.325C8.416 2.175 8.796 2.163 12 2.163m0-2.163C8.741 0 8.332.014 7.052.072 5.773.13 4.673.428 3.758 1.343 2.843 2.258 2.545 3.358 2.487 4.637 2.429 5.917 2.415 6.326 2.415 12s.014 6.083.072 7.363c.058 1.279.356 2.379 1.271 3.294.915.915 2.015 1.213 3.294 1.271 1.28.058 1.689.072 7.363.072s6.083-.014 7.363-.072c1.279-.058 2.379-.356 3.294-1.271.915-.915 1.213-2.015 1.271-3.294.058-1.28.072-1.689.072-7.363s-.014-6.083-.072-7.363c-.058-1.279-.356-2.379-1.271-3.294C21.379.428 20.279.13 19 .072 17.72.014 17.311 0 12 0Z"/>
     <path d="M12 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324Zm0 10.162a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881Z"/>
   </svg>
   Instagram
</a>

           
          </div>
        </div>
      </section>
    
      <footer class="border-t border-white/5 py-8 text-center text-sm text-slate-500">© <span id="y"></span> Nawfal Akbar. Dibuat dengan TailwindCSS.</footer>
    
      <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
      <script>
        AOS.init({ once: true, duration: 700, easing: 'ease-out-cubic' });
        // Animate progress bars on load
        window.addEventListener('DOMContentLoaded', () => {
          document.querySelectorAll('.progress > span').forEach((el, i) => {
            const w = getComputedStyle(el).width; // target width from utility class
            el.style.width = '0px';
            el.style.transition = 'width 1.2s cubic-bezier(.2,.8,.2,1)';
            setTimeout(() => { el.style.width = w; }, 120 + i * 120);
          });
          document.getElementById('y').textContent = new Date().getFullYear();
        });
      </script>
    </body>
    </html>
    

    <!-- Footer -->
    <footer class="py-6 bg-gray-800 text-center text-gray-400">
      <p>&copy; 2025 Nawfal Akbar Kurnialam. All rights reserved.</p>
    </footer>
  
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 800,
        once: true
      });
  
      // Toggle Mobile Menu
      const menuBtn = document.getElementById('menu-btn');
      const menu = document.getElementById('menu');
      menuBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
      });
  
      // Smooth Scroll
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
          });
          menu.classList.add('hidden');
        });
      });
    </script>
  </body>
  </html>

  <!-- Scroll effect script -->
  <script>
  const scrollElements = document.querySelectorAll('.scroll-fade');

  const elementInView = (el, dividend = 1) => {
    const elementTop = el.getBoundingClientRect().top;
    return elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend;
  };

  const elementOutofView = (el) => {
    const elementTop = el.getBoundingClientRect().top;
    return elementTop > (window.innerHeight || document.documentElement.clientHeight);
  };

  const displayScrollElement = (element) => {
    element.classList.add('opacity-100', 'translate-y-0');
    element.classList.remove('opacity-0', 'translate-y-10');
  };

  const hideScrollElement = (element) => {
    element.classList.add('opacity-0', 'translate-y-10');
    element.classList.remove('opacity-100', 'translate-y-0');
  };

  const handleScrollAnimation = () => {
    scrollElements.forEach((el) => {
      if (elementInView(el, 1.25)) {
        displayScrollElement(el);
      } else if (elementOutofView(el)) {
        hideScrollElement(el);
      }
    })
  }

  window.addEventListener('scroll', () => { handleScrollAnimation(); });
  </script>

  <style>
  .scroll-fade {
    transition: all 0.8s ease-out;
  }
  .opacity-0 { opacity: 0; }
  .opacity-100 { opacity: 1; }
  .translate-y-10 { transform: translateY(2.5rem); }
  .translate-y-0 { transform: translateY(0); }
  </style>
   <!-- AOS JS -->
   <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
   <script>
     AOS.init({
       duration: 800,
       once: true
     });
 
     // Toggle Mobile Menu
     const menuBtn = document.getElementById('menu-btn');
     const menu = document.getElementById('menu');
     menuBtn.addEventListener('click', () => {
       menu.classList.toggle('hidden');
     });
 
     // Smooth Scroll
     document.querySelectorAll('a[href^="#"]').forEach(anchor => {
       anchor.addEventListener('click', function(e) {
         e.preventDefault();
         document.querySelector(this.getAttribute('href')).scrollIntoView({
           behavior: 'smooth'
         });
         menu.classList.add('hidden');
       });
     });
 
     // Progress bar animasi on scroll
     document.addEventListener("DOMContentLoaded", () => {
       const bars = document.querySelectorAll("#skills .bg-blue-500");
 
       const observer = new IntersectionObserver((entries) => {
         entries.forEach((entry) => {
           if (entry.isIntersecting) {
             entry.target.classList.add("animate-[grow_2s_ease-in-out_forwards]");
             observer.unobserve(entry.target);
           }
         });
       }, { threshold: 0.3 });
 
       bars.forEach(bar => observer.observe(bar));
     });
   </script>
</body>
</html>
