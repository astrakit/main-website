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
  <link rel="icon" href="favicon.png">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Write the description for the chat app here, yes yes ">
  <meta name="author" content="Astrakit">
  <meta content="#00ff22" data-react-helmet="true" name="theme-color">
  <meta property="og:image" content="https://astrokit.cc/favicon.png">

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
        <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#6FFFE9] to-[#2bf1ff] opacity-50" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
      </div>
      <div class="mx-auto max-w-7xl px-6 pt-20 pb-24 sm:pb-32 lg:flex lg:px-8 animate-fade">
        <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8 mt-20">
          <h1 class="mt-10 text-5xl font-bold tracking-tight text-white sm:text-7xl">Discover the future of chatting</h1>
          <p class="mt-6 text-lg leading-8 text-gray-300">Write the description for the chat app here, yes yes </p>
          <div class="mt-10 flex items-center gap-x-6">
            <span class="text-sm font-semibold leading-6 text-white">Scroll down <span aria-hidden="true">↓</span></span>
          </div>
        </div>
        <div class="relative mt-20 lg:ml-20 flex justify-center lg:justify-center">
          <div class="relative bg-gray-800 rounded-lg border border-gray-600 shadow-[0_0_15px_5px_#6FFFE9] transform transition duration-300 -translate-y-8">
            <img src="src/img/s1.png" alt="Phone Screenshot 1" class="w-full h-full object-cover rounded-lg">
          </div>
          <div class="relative bg-gray-800 rounded-lg border border-gray-600 shadow-[0_0_15px_5px_#6FFFE9] transform transition duration-300 -translate-x-20">
            <img src="src/img/s2.png" alt="Phone Screenshot 2" class="w-full h-full object-cover rounded-lg">
          </div>
        </div>
      </div>
    </div>


    <!-- Features Section -->
    <section class="py-20 bg-gray-800">
      <div class="max-w-screen-xl mx-auto px-4 text-center">
        <h2 class="text-3xl sm:text-4xl font-semibold text-light-blue-400 mb-12">Amazing Features</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
          <div class="bg-gray-700 p-8 rounded-xl shadow-lg transform transition duration-300 hover:scale-105">
            <h3 class="text-xl font-semibold text-white mb-4">Instant Messaging</h3>
            <p class="text-gray-400">Send and receive messages in real-time, no delays or interruptions.</p>
          </div>
          <div class="bg-gray-700 p-8 rounded-xl shadow-lg transform transition duration-300 hover:scale-105">
            <h3 class="text-xl font-semibold text-white mb-4">Voice and Video Calls</h3>
            <p class="text-gray-400">Make high-quality voice and video calls anytime, anywhere.</p>
          </div>
          <div class="bg-gray-700 p-8 rounded-xl shadow-lg transform transition duration-300 hover:scale-105">
            <h3 class="text-xl font-semibold text-white mb-4">Seamless Sync</h3>
            <p class="text-gray-400">Sync your messages across all your devices instantly.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Download Section -->
    <section class="py-20 text-center">
      <h2 class="text-3xl sm:text-4xl font-semibold text-white mb-6">Download Astrakit</h2>
      <p class="text-lg text-gray-400 mb-8">Available for iOS, Android, and Desktop</p>
      <div class="flex justify-center gap-6">
        <button class="bg-blue-500 text-white py-3 px-8 rounded-full hover:bg-blue-600 transition">Download for iOS</button>
        <button class="bg-blue-500 text-white py-3 px-8 rounded-full hover:bg-blue-600 transition">Download for Android</button>
      </div>
    </section>
  </div>

  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/scripts.php'; ?>
</body>

</html>