<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link
        href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css"
        rel="stylesheet"
        type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Domine:wght@400..700&display=swap" rel="stylesheet">
    <style>
        .dm-serif-text-regular {
            font-family: "DM Serif Text", serif;
            font-weight: 400;
            font-style: normal;
        }

        .dm-serif-text-regular-italic {
            font-family: "DM Serif Text", serif;
            font-weight: 400;
            font-style: italic;
        }
    </style>
</head>

<body class="bg-white dm-serif-text-regular">
    <!-- start navbar -->
    <nav class="w-full sticky top-0 z-10">
        <div class="container max-w-full bg-white mx-auto py-3 flex items-center justify justify-between border-b-2 border-slate-300">
            <div class="w-1/6 flex items-center justify justify-start gap-2 mx-5">
                <img class="w-7" src="<?php echo base_url() . 'images/loop.png'; ?>" alt="">
            </div>
            <div class="flex items-center gap-2 mx-5">
                <img alt="Jakita" class="w-24" src="https://jakita.jakarta.go.id/assets/img/jakita/logo_jak_black.png">
            </div>
            <div class="w-1/6 flex items-center justify justify-end gap-2 mx-5">
                <?php if (auth()->loggedIn()): ?>
                    <!-- User is logged in -->
                    <span class="text-black font-bold mx-1 flex">
                        Hi, <?php echo auth()->user()->username; ?>
                    </span>
                    <a class="text-slate-200 bg-black font-bold p-2 mx-1" href="<?php echo site_url('/logout'); ?>">Logout</a>
                <?php else: ?>
                    <!-- User is not logged in -->
                    <a class="text-slate-200 bg-black font-bold p-2 mx-1" href="<?php echo site_url('/register'); ?>">Register</a>
                    <a class="text-black font-bold mx-1" href="<?php echo site_url('/login'); ?>">Login</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="max-w-full mx-auto bg-white py-3 flex items-center justify justify-center border-b-2 border-slate-300">
            <ul
                class="flex text-grey-600 font-semibold text-sm uppercase ">
                <li class="px-2 hover:text-black font-bold text-black"><a href="/homepage">Home</a></li>
                <li class="px-2 hover:text-black"><a href="#services">Majalah</a></li>
                <li class="px-2 hover:text-black"><a href="#works">Infografis</a></li>
                <li class="px-2 hover:text-black"><a href="#contact">Video Informasi</a></li>
                <?php if (auth()->loggedIn()): ?>
                    <li class="px-2 hover:text-black"><a href="/role">Role Access</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <!-- end navbar -->

    <?= $this->renderSection('content') ?>

    <!-- start footer  -->
    <footer class="relative">
        <div class="grid grid-cols-3">
            <div class="m-2 border-b-2 border-slate-900 col-span-3">
            </div>
            <div class="grid grid-cols-1 justify-items-center py-4">
                <img class="w-1/3 col-span-4" src="https://jakita.jakarta.go.id/assets/img/jakita/logo_jak_black.png" alt="jakita">
                <p class="col-span-4 mb-2 text-black">Majalah Digital Pemerintah Provinsi DKI Jakarta.</p>
                <div class="flex flex-row space-x-4">
                    <a class="size-5" href=""><img class="w-full" src="<?php echo base_url() . 'images/facebook-black.png'; ?>" alt="jakita"></a>
                    <a class="size-5" href=""><img class="w-full" src="<?php echo base_url() . 'images/instagram-black.png'; ?>" alt="jakita"></a>
                    <a class="size-5" href=""><img class="w-full" src="<?php echo base_url() . 'images/tiktok-black.png'; ?>" alt="jakita"></a>
                    <a class="size-5" href=""><img class="w-full" src="<?php echo base_url() . 'images/twitter-black.png'; ?>" alt="jakita"></a>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <img class="p-4 w-2/3" src="https://multimedia.beritajakarta.id/banner/logo-jakgo-2023.jpg" alt="">
            </div>
            <div class="flex flex-col justify-center">
                <h1 class="text-black font-bold text-lg">Langganan Berita</h1>
                <form class="flex flex-wrap" action="POST">
                    <input class="bg-gray-200 text-gray-700 border-2 border-black" type="text">
                    <button class="bg-black text-slate-300 inline block p-2">Langganan</button>
                </form>
            </div>
        </div>
        <div class="grid grid-cols-3 items-center">
            <div class="grid col-span-2">
                <div class="mx-4 border-b-2 border-slate-900">
                </div>
                <div class="mx-4 grid grid-cols-3 justify-items-center">
                    <a class="text-black" href="">Majalah</a>
                    <a class="text-black" href="">Infografis</a>
                    <a class="text-black" href="">Video Informasi</a>
                </div>
                <div class="mx-4 border-b-2 border-slate-900">
                </div>
            </div>
            <div class="py-2">
                <div class="flex flex-col ">
                    <h1 class="text-black text-lg font-semibold">Kontak Kami:</h1>
                    <div class="flex">
                        <img class="size-7 mx-2" src="<?php echo base_url() . 'images/location-black.png'; ?>" alt="">
                        <h1 class="text-black">JL. Medan Merdeka Selatan No. 8-9 Blok E Lt.3 Gambir, Jakarta Pusat.</h1>
                    </div>
                    <div class="flex">
                        <img class="size-7 mx-2" src="<?php echo base_url() . 'images/email-black.png'; ?>" alt="">
                        <h1 class="text-black">jakita@jakarta.go.id</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3">
            <div class="mb-2 border-b-2 border-slate-900 col-span-3">
            </div>
            <div class="mb-2 col-start-2 justify-items-center">
                <h1 class="text-black">© 2025 Fiko Redha</h1>
            </div>
    </footer>
    <!-- end footer -->

    <script {csp-script-nonce}>
        document.getElementById("menuToggle").addEventListener('click', toggleMenu);

        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>

</body>

</html>