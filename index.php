<?php include 'inc/decoration.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Astrakit</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&amp;display=swap" rel="stylesheet">
  <link href="src/styles/output.css" rel="stylesheet">
  <link href="src/styles/extra.css" rel="stylesheet">
  <link rel="icon" href="favicon-2.png">

  <?php include 'inc/head.php'; ?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Astrakit is a free and open-source chat app designed by nerds. Enjoy secure, seamless communication with powerful features and complete transparency, all without any cost.">
  <meta name="author" content="Astrakit">
  <meta content="#6FFFE9" data-react-helmet="true" name="theme-color">
  <meta property="og:image" content="https://astrakit.cc/logo.png">

</head>

<body class="bg-gray-900" data-scroll-container>

  <?php include 'inc/nav.php'; ?>

  <div class="relative w-full h-full">

    <div class="relative isolate overflow-hidden bg-gray-900">
      <div class="absolute inset-0 -z-20 h-full w-full animate-fade animate-duration-[3000ms]">
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-gray-900 to-transparent"></div>
      </div>
      <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)] animate-fade-down" aria-hidden="true">
        <defs>
          <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
            <path d="M.5 200V.5H200" fill="none" />
          </pattern>
        </defs>
        <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
          <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
        </svg>
        <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
      </svg>
      <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)] animate-fade animate-duration-[3000ms]" aria-hidden="true">
        <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#ff6f61] via-[#ffb347] via-[#ffff66] via-[#66ff66] via-[#66b2ff] via-[#b266ff] via-[#ff6f61] to-[#ff6f61] opacity-50 animate-gradient" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
      </div>
      <style>
        @keyframes gradient {
          0% { background-position: 0% 50%; }
          50% { background-position: 100% 50%; }
          100% { background-position: 0% 50%; }
        }
        .animate-gradient {
          background-size: 200% 200%;
          animation: gradient 5s ease infinite;
        }
      </style>
      <div class="mx-auto max-w-7xl px-6 pt-20 pb-24 sm:pb-32 lg:flex lg:px-8 animate-fade">
        <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8 mt-20">
          <h1 class="mt-10 text-5xl font-bold tracking-tight text-white sm:text-7xl">Discover the future of chatting</h1>
          <p class="mt-6 text-lg leading-8 text-gray-300">Astrakit is a free and open-source chat app designed by nerds. Enjoy secure, seamless communication with powerful features and complete transparency, all without any cost.</p>
          <div class="mt-10 flex items-center gap-x-6">
            <span class="text-sm font-semibold leading-6 text-white">Scroll down <span aria-hidden="true">↓</span></span>
          </div>
        </div>
        <div class="relative mt-20 lg:ml-20 flex justify-center lg:justify-center animate-fade-left">
          <div class="relative bg-gray-800 rounded-lg border border-gray-600 shadow-[0_0_15px_5px_#6FFFE9] transform transition duration-300 -translate-y-8">
            <img src="src/img/s1.png" alt="Phone Screenshot 1" class="w-full h-full object-cover rounded-lg">
          </div>
          <div class="relative bg-gray-800 rounded-lg border border-gray-600 shadow-[0_0_15px_5px_#6FFFE9] transform transition duration-300 -translate-x-20">
            <img src="src/img/s2.png" alt="Phone Screenshot 2" class="w-full h-full object-cover rounded-lg">
          </div>
        </div>
      </div>
    </div>


    <section class="relative py-16 dark:bg-gray-900 bg-gray-800 border-t-2 border-b-2 border-gray-700 animate-fade-right" id="our-team">
      <div class="absolute inset-0">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" style="stop-color:#cc5a4d;stop-opacity:1">
              <animate attributeName="stop-color" values="#cc5a4d;#cc9239;#cccc52;#52cc52;#5292cc;#9252cc;#cc5a4d" dur="10s" repeatCount="indefinite" />
              </stop>
              <stop offset="20%" style="stop-color:#cc9239;stop-opacity:1">
              <animate attributeName="stop-color" values="#cc9239;#cccc52;#52cc52;#5292cc;#9252cc;#cc5a4d;#cc9239" dur="10s" repeatCount="indefinite" />
              </stop>
              <stop offset="40%" style="stop-color:#cccc52;stop-opacity:1">
              <animate attributeName="stop-color" values="#cccc52;#52cc52;#5292cc;#9252cc;#cc5a4d;#cc9239;#cccc52" dur="10s" repeatCount="indefinite" />
              </stop>
              <stop offset="60%" style="stop-color:#52cc52;stop-opacity:1">
              <animate attributeName="stop-color" values="#52cc52;#5292cc;#9252cc;#cc5a4d;#cc9239;#cccc52;#52cc52" dur="10s" repeatCount="indefinite" />
              </stop>
              <stop offset="80%" style="stop-color:#5292cc;stop-opacity:1">
              <animate attributeName="stop-color" values="#5292cc;#9252cc;#cc5a4d;#cc9239;#cccc52;#52cc52;#5292cc" dur="10s" repeatCount="indefinite" />
              </stop>
              <stop offset="100%" style="stop-color:#9252cc;stop-opacity:1">
              <animate attributeName="stop-color" values="#9252cc;#cc5a4d;#cc9239;#cccc52;#52cc52;#5292cc;#9252cc" dur="10s" repeatCount="indefinite" />
              </stop>
            </linearGradient>
            <filter id="blur" x="-50%" y="-50%" width="200%" height="200%">
              <feGaussianBlur in="SourceGraphic" stdDeviation="40" />
            </filter>
          </defs>
          <rect width="100%" height="100%" fill="url(#grad1)" />
          <circle cx="30%" cy="30%" r="20%" fill="url(#grad1)" filter="url(#blur)" opacity="0.5">
            <animate attributeName="cx" values="30%;70%;30%" dur="10s" repeatCount="indefinite" />
            <animate attributeName="cy" values="30%;70%;30%" dur="10s" repeatCount="indefinite" />
          </circle>
          <circle cx="70%" cy="70%" r="25%" fill="url(#grad1)" filter="url(#blur)" opacity="0.5">
            <animate attributeName="cx" values="70%;30%;70%" dur="10s" repeatCount="indefinite" />
            <animate attributeName="cy" values="70%;30%;70%" dur="10s" repeatCount="indefinite" />
          </circle>
          <circle cx="50%" cy="50%" r="15%" fill="url(#grad1)" filter="url(#blur)" opacity="0.5">
            <animate attributeName="cx" values="50%;50%;50%" dur="10s" repeatCount="indefinite" />
            <animate attributeName="cy" values="50%;50%;50%" dur="10s" repeatCount="indefinite" />
          </circle>
        </svg>
      </div>
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-white dark:text-gray-900">Features That Shine</h2>
        <p class="text-1xl font-bold text-white dark:text-gray-900">Discover the tools that make Astrakit the perfect place to connect, share, and chat effortlessly. From seamless messaging to customizable experiences, we’ve got everything you need to stay connected your way!</p>
        <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-3">
          <div class="p-6 bg-gray-900 dark:bg-gray-700 rounded-lg shadow-lg">
            <div class="flex items-center">
              <i class="fas fa-lock text-2xl text-[#6FFFE9] mr-2"></i>
              <h3 class="text-lg font-medium text-[#6FFFE9]">Secure & Encrypted</h3>
            </div>
            <p class="mt-2 text-sm text-gray-300">You have control over your data, with options to delete it at any time and customizable encryption methods.</p>
          </div>
          <div class="p-6 bg-gray-900 dark:bg-gray-700 rounded-lg shadow-lg">
            <div class="flex items-center">
              <i class="fas fa-random text-2xl text-[#6FFFE9] mr-2"></i>
              <h3 class="text-lg font-medium text-[#6FFFE9]">Random user ID's</h3>
            </div>
            <p class="mt-2 text-sm text-gray-300">Random user ID's ensure that you cannot be found if you do not want to be. But you can let people add you by a username if that's what you want.</p>
          </div>
          <div class="p-6 bg-gray-900 dark:bg-gray-700 rounded-lg shadow-lg">
            <div class="flex items-center">
              <i class="fas fa-code text-2xl text-[#6FFFE9] mr-2"></i>
              <h3 class="text-lg font-medium text-[#6FFFE9]">Open source & Free</h3>
            </div>
            <p class="mt-2 text-sm text-gray-300">We believe that open source software combined with privacy should be accessible to everyone. We're funded only by donations and sponsors.</p>
          </div>
          <div class="p-6 bg-gray-900 dark:bg-gray-700 rounded-lg shadow-lg">
            <div class="flex items-center">
              <i class="fas fa-eye text-2xl text-[#6FFFE9] mr-2"></i>
              <h3 class="text-lg font-medium text-[#6FFFE9]">Transparent</h3>
            </div>
            <p class="mt-2 text-sm text-gray-300">We operate with complete transparency, providing open access to our source code and development process, by still keeping your data secure at any time.</p>
          </div>
          <div class="p-6 bg-gray-900 dark:bg-gray-700 rounded-lg shadow-lg">
            <div class="flex items-center">
              <i class="fas fa-star text-2xl text-[#6FFFE9] mr-2"></i>
              <h3 class="text-lg font-medium text-[#6FFFE9]">Feature packed</h3>
            </div>
            <p class="mt-2 text-sm text-gray-300">Astrakit is loaded with features that enhance your chatting experience. Stay tuned for upcoming features that will make communication even more enjoyable.</p>
          </div>
          <div class="p-6 bg-gray-900 dark:bg-gray-700 rounded-lg shadow-lg">
            <div class="flex items-center">
              <i class="fas fa-users text-2xl text-[#6FFFE9] mr-2"></i>
              <h3 class="text-lg font-medium text-[#6FFFE9]">Community Driven</h3>
            </div>
            <p class="mt-2 text-sm text-gray-300">Join a vibrant community of users and cats (hehe) who contribute to the continuous improvement and evolution of Astrakit.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-gray-900 animate-fade-left" id="screenshots">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-white text-center">Experience Astrakit Yourself</h2>
        <p class="text-lg text-gray-300 text-center mt-4">Get a glimpse of Astrakit’s sleek design and powerful features in action.</p>
        <div class="mt-10 flex justify-center">
          <a href="https://docs.astrakit.cc/docs/category/showcase/" target="_blank" class="bg-[#6FFFE9] text-black py-3 px-8 rounded-full hover:bg-[#43ffe3] transition">Explore the screenshot gallery</a>
        </div>
      </div>
    </section>

    <section class="py-20 text-center bg-gray-800 animate-fade-right">
      <h2 class="text-3xl sm:text-4xl font-semibold text-white mb-6">Download Astrakit</h2>
      <p class="text-lg text-gray-400 mb-8">Available for iOS, Android, and Desktop</p>
      <div class="flex justify-center gap-6">
        <button class="bg-[#6FFFE9] text-black py-3 px-8 rounded-full hover:bg-[#43ffe3] transition">Download for Android</button>
        <button class="bg-[#6FFFE9] text-black py-3 px-8 rounded-full hover:bg-[#43ffe3] transition">Download for Desktop (alpha)</button>
      </div>
    </section>

    <section class="py-20 bg-gray-900 animate-fade-left" id="contact">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-white text-center">Get in Touch</h2>
        <p class="text-lg text-gray-300 text-center mt-4">We'd love to hear from you! Whether you have questions, feedback, or just want to say hello, feel free to reach out.</p>
        <div class="mt-12 flex justify-center">
          <form class="w-full max-w-lg bg-gray-800 p-8 rounded-lg shadow-lg">
            <div class="mb-6">
              <label for="name" class="block text-sm font-medium text-gray-300">Name</label>
              <input type="text" id="name" name="name" class="mt-1 block w-full p-2.5 bg-gray-700 border border-gray-600 rounded-md text-white" required>
            </div>
            <div class="mb-6">
              <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
              <input type="email" id="email" name="email" class="mt-1 block w-full p-2.5 bg-gray-700 border border-gray-600 rounded-md text-white" required>
            </div>
            <div class="mb-6">
              <label for="message" class="block text-sm font-medium text-gray-300">Message</label>
              <textarea id="message" name="message" rows="4" class="mt-1 block w-full p-2.5 bg-gray-700 border border-gray-600 rounded-md text-white" required></textarea>
            </div>
            <div class="flex justify-center">
              <a href="#" id="mailto-link" class="bg-[#6FFFE9] text-black py-3 px-8 rounded-full hover:bg-[#43ffe3] transition">Send Message</a>
            </div>
          </form>

          <script>
            document.getElementById('mailto-link').addEventListener('click', function(event) {
              event.preventDefault();
              const name = document.getElementById('name').value;
              const email = document.getElementById('email').value;
              const message = document.getElementById('message').value;
              const mailtoLink = `mailto:contact@astrokit.cc?subject=Contact%20from%20${encodeURIComponent(name)}&body=${encodeURIComponent(message)}%0A%0AFrom:%20${encodeURIComponent(name)}%20(${encodeURIComponent(email)})`;
              window.location.href = mailtoLink;
            });
          </script>
        </div>
      </div>
    </section>

  </div>

  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/scripts.php'; ?>
</body>

</html>