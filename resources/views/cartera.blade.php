<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Portfolio | Alice</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <style>
    html {
      scroll-behavior: smooth;
    }

    section {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .sticky-top {
      position: sticky;
      top: 0;
      z-index: 50;
      background-color: #000;
    }

    .nav-link.active {
      color: rgb(248, 112, 112);
    }
  </style>
</head>
<body class="font-sans text-white bg-black">

<div class="flex min-h-screen ml-0 md:ml-64">

<!-- Sidebar -->
<aside class="fixed top-0 left-0 h-full w-[290px] bg-gradient-to-b from-black via-red-900 to-black text-white shadow-lg hidden md:block z-50 flex flex-col items-center pt-10">


<!-- FOTO & NAMA -->
  <div class="text-center mb-10">
    <img src="{{ asset('images/alicee.jpg') }}" alt="Profile" class="w-24 h-24 rounded-full mx-auto border-4 border-white shadow-md">
    <h3 class="mt-4 text-lg font-semibold">Cia</h3>
  </div>

  <!-- NAV MENU -->
  <ul class="w-full space-y-2 text-sm font-medium px-6">
    <li>
      <a href="#home" class="flex items-center gap-3 p-3 rounded-lg hover:bg-red-600 transition duration-200">
        <i class="fas fa-home"></i> Home
      </a>
    </li>
    <li>
      <a href="#about" class="flex items-center gap-3 p-3 rounded-lg hover:bg-red-600 transition duration-200">
        <i class="fas fa-user"></i> About
      </a>
    </li>
    <li>
      <a href="#services" class="flex items-center gap-3 p-3 rounded-lg hover:bg-red-600 transition duration-200">
        <i class="fas fa-cogs"></i> Services
      </a>
    </li>
    <li>
      <a href="#projects" class="flex items-center gap-3 p-3 rounded-lg hover:bg-red-600 transition duration-200">
        <i class="fas fa-folder-open"></i> Projects
      </a>
    </li>
  </ul>
</aside>

    <!-- Main Content -->
    <div class="flex-1 bg-black px-10">
      <!-- Top Navbar -->
      <div class="sticky-top w-full py-4 px-6 flex justify-between items-center border-b border-gray-700">
        <div class="text-xl font-bold text-white">
          <span class="bg-gradient-to-r from-red-800 to-red-600 px-3 py-1 rounded-full">Alice</span>
        </div>
        <ul class="flex space-x-8 text-white font-semibold text-lg" id="nav-menu">
          <li><a href="#home" class="nav-link">Home</a></li>
          <li><a href="#about" class="nav-link">About</a></li>
          <li><a href="#services" class="nav-link">Services</a></li>
          <li><a href="#projects" class="nav-link">Projects</a></li>
        </ul>
        <a href="#" class="bg-red-600 text-white px-5 py-2 rounded-lg font-bold">Contact</a>
      </div>

      <!-- Hero Section -->
      <section id="home" class="flex items-center justify-center min-h-screen" data-aos="fade-up">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10 w-full max-w-6xl mx-auto px-4">

          <!-- KIRI -->
          <div class="flex flex-col justify-center items-center text-center h-full">
            <h1 class="text-4xl md:text-5xl font-bold mb-2">
              Hi, I'm <span class="font-script">Alice</span>
            </h1>
            <h2 class="text-3xl md:text-4xl font-bold text-red-600 mt-2 mb-4">
              <span id="typed-text"></span>
            </h2>
            <div class="mt-6">
              <span class="block mb-2">Find Me on</span>
              <div class="flex justify-center space-x-4 text-xl">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-pinterest"></i>
              </div>
            </div>
          </div>

          <!-- KANAN (FOTO) -->
          <div class="flex justify-center md:justify-end items-center mt-10 md:mt-0">
            <img src="{{ asset('images/alicee.jpg') }}" alt="Alice" class="relative z-10 w-52 md:w-64 drop-shadow-2xl">
          </div>
        </div>
      </section>

      <!-- About Section -->
      <section id="about" data-aos="fade-up">
        <div>
          <h2 class="text-3xl font-bold mb-2 border-b-4 border-white inline-block">About Me</h2>
          <h2 class="text-2xl md:text-2xl font-bold mt-4">
            Perkenalkan saya Alicia Gracia dari jurusan Computer Science B27, Universitas Bina Nusantara.<br>
            Saya adalah mahasiswi aktif semester 4, di bawah ini adalah beberapa informasi pribadi saya.
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">
            <ul class="space-y-3">
              <li><strong>Name:</strong> Alicia Gracia</li>
              <li><strong>Phone:</strong> +62 8224 4554 111</li>
              <li><strong>Major:</strong> Computer Science</li>
              <li><strong>Website:</strong> www.cia.com</li>
              <li><strong>City:</strong> Batu, Jawa Timur</li>
              <li><strong>Age:</strong> 19</li>
              <li><strong>Email:</strong> gracealice417@gmail.com</li>
              <li><strong>Freelance:</strong> Available</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section id="services" data-aos="fade-up">
        <div>
          <h2 class="text-3xl font-bold mb-4 border-b-4 border-white inline-block">Services</h2>
          <p class="mt-4 text-gray-300 leading-relaxed"> Saya membuat function CRUD pada penambahan data pribadi yang meliputi nama, email, dan phone.</p>
          <a href="{{ url('/services') }}" class="mt-8 inline-block bg-red-700 text-white font-semibold py-4 px-6 rounded-lg hover:bg-red-800 transition duration-300">
            Services for CRUD
          </a>
        </div>
      </section>

      <!-- Projects Section -->
      <section id="projects" data-aos="fade-up">
        <div>
          <h2 class="text-3xl font-bold mb-4 border-b-4 border-white inline-block">Projects</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            <div class="bg-gray-800 p-4 rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
              <h3 class="text-xl font-bold mb-2">Project 1</h3>
              <p class="text-gray-400">.......</p>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
              <h3 class="text-xl font-bold mb-2">Project 2</h3>
              <p class="text-gray-400">........</p>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
              <h3 class="text-xl font-bold mb-2">Project 3</h3>
              <p class="text-gray-400">........</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- AOS and Typed.js Scripts -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script>
    AOS.init({ duration: 1000, once: true });

    var typed = new Typed("#typed-text", {
      strings: ["Computer Science B27'", "Front-End Develop"],
      typeSpeed: 60,
      backSpeed: 30,
      backDelay: 1500,
      loop: true
    });
  </script>

  <!-- Scroll Active Nav -->
  <script>
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
      let current = "";
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        if (pageYOffset >= sectionTop - 100) {
          current = section.getAttribute('id');
        }
      });

      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
          link.classList.add('active');
        }
      });
    });
  </script>

</body>
</html>
