<?php include 'inc/decoration.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Astrakit · Privacy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&amp;display=swap" rel="stylesheet">
    <link href="src/styles/output.css" rel="stylesheet">
    <link href="src/styles/extra.css" rel="stylesheet">
    <link rel="icon" href="favicon-2.png">

    <?php include 'inc/head.php'; ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Astrakit is a free and open-source chat app designed by nerds. Enjoy secure, seamless communication with powerful features and complete transparency, all without any cost.">
    <meta name="author" content="Astrakit · Privacy">
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
                <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#6FFFE9] to-[#2bf1ff] opacity-50" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
            </div>
            <div class="mx-auto max-w-7xl px-6 pt-20 pb-24 sm:pb-32 lg:flex lg:px-8 animate-fade">
                <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8 mt-20">
                    <h1 class="mt-10 text-5xl font-bold tracking-tight text-white sm:text-7xl">Privacy Policy</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-300">At Astrakit, we are deeply committed to protecting your privacy and ensuring the security of your data. Our Privacy Policy outlines the types of information we collect, how we use it, and the measures we take to safeguard your personal information.</p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="javascript:history.back()" class="bg-[#6FFFE9] text-black py-1 px-8 rounded-full hover:bg-[#43ffe3] transition">
                            <i class="fas fa-arrow-left mr-2"></i> Go back
                        </a>
                        <a href="/" class="bg-[#6FFFE9] text-black py-1 px-8 rounded-full hover:bg-[#43ffe3] transition">
                            <i class="fas fa-home mr-2"></i> Go home
                        </a>
                    </div>
                </div>
                <div class="relative mt-20 lg:ml-20 flex justify-center lg:justify-start animate-fade-left lg:w-1/2 hidden sm:flex">
                    <img src="/src/img/logo.png" alt="Contact Us" class="w-full rounded-lg" style="max-width: 300px;max-height: 300px;">
                </div>
            </div>
        </div>

        <section class="py-20 bg-gray-900 animate-fade-left" id="contact">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-white">Last revision 28/01/2025</h2>
            </div>
        </section>

    </div>

    <?php include 'inc/footer.php'; ?>
    <?php include 'inc/scripts.php'; ?>
</body>

</html>