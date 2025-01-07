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
    <div class="relative h-screen bg-white">
        <div class="grid grid-cols-2">
            <div class="h-full flex flex-col items-center justify-center">
                <img class="w-1/2 h-fit mb-2" src="https://jakita.jakarta.go.id/assets/img/jakita/logo_jak_black.png" alt="">
                <form class="" method="POST" accept-charset="utf-8" action="<?php echo base_url() . 'login-data'; ?>">
                    <?php csrf_field() ?>
                    <h1 class="text-black font-bold text-2xl text-center mb-4">Masuk Akun Jakita</h1>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-md font-semibold mb-2" for="">Email</label>
                        <input class="border-2 border-black py-2 px-3 text-gray-700" name="email" placeholder="Email" type="text">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-md font-semibold mb-2" for="">Password</label>
                        <input class="border-2 border-black py-2 px-3 text-gray-700" name="password" placeholder="Password" type="text">
                    </div>
                    <div class="flex">
                        <button class="grow bg-black text-white p-2">Login</button>
                    </div>
                </form>
            </div>
            <div class="bg-black h-screen"></div>

        </div>
        <div class="absolute right-5 top-5 bg-slate-200 size-10">
            <a href="/homepage">
                <h1 class="text-black text-center text-2xl">X</h1>
            </a>
        </div>
    </div>

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