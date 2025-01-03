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
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
</head>

<body class="bg-black">
    <!-- start navbar -->
    <nav class="w-full fixed top-0 z-10">
        <div class="container max-w-full bg-white mx-auto py-4 flex items-center justify justify-between border-b-2 border-slate-300">
            <div class="w-1/6 flex items-center justify justify-start gap-2 mx-5">
                <img class="w-7" src="<?php echo base_url() . 'images/loop.png'; ?>" alt="">
            </div>
            <div class="flex items-center gap-2 mx-5">
                <img alt="Jakita" class="w-24" src="https://jakita.jakarta.go.id/assets/img/jakita/logo_jak_black.png">
            </div>
            <div class="w-1/6 flex items-center justify justify-end gap-2 mx-5">
                <a class="text-white bg-black font-bold p-3 mx-1" href="#">Register</a>
                <a class="text-black font-bold mx-1" href="">Login</a>
            </div>
        </div>
        <div class="container max-w-full mx-auto bg-white py-5 flex items-center justify justify-center border-b-2 border-slate-300">
            <ul
                class="flex text-grey-600 font-semibold text-sm uppercase grid grid-cols-4 divide-x">
                <li class="hover:text-black font-bold text-black"><a href="#">Home</a></li>
                <li class="hover:text-black"><a href="#services">Majalah</a></li>
                <li class="hover:text-black"><a href="#works">Infografis</a></li>
                <li class="hover:text-black"><a href="#contact">Video Informasi</a></li>
            </ul>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- start main -->
    <div
        class="relative h-screen w-full bg-red-200 overflow-hidden py-6">
        <div class="absolute top-40 left-0 right-0 mx-auto bg-emerald-200 w-5/6 h-2/3 mx-auto flex">
            <div class="bg-orange-200 w-3/12 h-full p-2 grid grid-cols-1 gap-10">
                <div class="overflow-hidden h-fit">

                    <a href="#"></a>
                    <div class="relative">
                        <a href="#">
                            <img class="w-full"
                                src="https://images.pexels.com/photos/196667/pexels-photo-196667.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>

                    </div>
                    <div class="py-1">

                        <a href="#"
                            class="font-semibold text-lg text-black inline-block hover:text-indigo-600 transition duration-500 ease-in-out">Best
                            View in Newyork City</a>
                        <p class="text-black text-sm">
                            The city that never sleeps
                        </p>
                    </div>
                    <div class=" py-1 flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                </div>
                <!-- <div class="card card-compact bg-base-100 w-full h-1/2 shadow-xl">
                        <figure>
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" />
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">Shoes!</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div> -->
            </div>
            <div class="bg-green-300 w-6/12 h-full"></div>
            <div class="bg-cyan-200 w-3/12 h-full"></div>
        </div>
    </div>
    <!-- end main -->

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