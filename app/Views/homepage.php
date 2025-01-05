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
                <a class="text-white bg-black font-bold p-2 mx-1" href="#">Register</a>
                <a class="text-black font-bold mx-1" href="">Login</a>
            </div>
        </div>
        <div class="max-w-full mx-auto bg-white py-3 flex items-center justify justify-center border-b-2 border-slate-300">
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
        class="relative container mx-auto h-screen bg-red-500 py-6 border-b-2 border-slate-900">
        <div class="absolute top-0 bottom-0 left-0 right-0 m-auto p-2 m-auto grid grid-cols-12">
            <div class="p-2 grid grid-cols-1 col-span-3">
                <div class="h-fit">
                    <a href="#"></a>
                    <div class="hover:underline hover:underline-offset-2 decoration-black">
                        <div class="relative">
                            <a href="#">
                                <img class="w-full"
                                    src="https://jakita.jakarta.go.id/assets/img/rubrik/layanan_jakarta_12_2024.jpg"
                                    alt="Sunset in the mountains">
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>
                            </a>

                        </div>
                        <div class="py-1">

                            <a href="#"
                                class="font-semibold text-md text-black inline-block">Pantau Kualitas Udara dengan Platform Digital</a>
                            <p class="text-slate-400 text-xs inline-block">
                                Untuk Memantau kualitas udara udara di Jakarta, Pemprov DKI Jakarta meluncurkan platform pertama di Indonesia yang menggabungkan data pemerintah dengan non pemerintah.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                </div>
                <div class="h-fit">
                    <a href="#"></a>
                    <div class="hover:underline hover:underline-offset-2 decoration-black">
                        <div class="relative">
                            <a href="#">
                                <img class="w-full"
                                    src="https://jakita.jakarta.go.id/assets/img/rubrik/layanan_jakarta_12_2024.jpg"
                                    alt="Sunset in the mountains">
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>
                            </a>

                        </div>
                        <div class="py-1">

                            <a href="#"
                                class="font-semibold text-md text-black inline-block">Pantau Kualitas Udara dengan Platform Digital</a>
                            <p class="text-slate-400 text-xs inline-block">
                                Untuk Memantau kualitas udara udara di Jakarta, Pemprov DKI Jakarta meluncurkan platform pertama di Indonesia yang menggabungkan data pemerintah dengan non pemerintah.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                </div>
            </div>
            <div class="col-span-6 p-2">
                <div class="">

                    <a href="#"></a>
                    <div class="hover:underline hover:underline-offset-2 decoration-black">
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
                                class="font-semibold text-md text-black inline-block">Best
                                View in Newyork City</a>
                            <p class="text-black text-sm inline-block">
                                The city that never sleeps
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                </div>
            </div>
            <div class="col-span-3 p-2 grid grid-cols-1">
                <div class="h-fit ">

                    <a href="#"></a>
                    <div class="hover:underline hover:underline-offset-2 decoration-black">
                        <div class="py-1">

                            <a href="#"
                                class="font-semibold text-md text-black inline-block">Best
                                View in Newyork City</a>
                            <p class="text-black text-sm inline-block">
                                The city that never sleeps
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                </div>
                <div class="h-fit ">

                    <a href="#"></a>
                    <div class="hover:underline hover:underline-offset-2 decoration-black">
                        <div class="py-1">

                            <a href="#"
                                class="font-semibold text-md text-black inline-block">Best
                                View in Newyork City</a>
                            <p class="text-black text-sm inline-block">
                                The city that never sleeps
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                </div>
                <div class="h-fit ">

                    <a href="#"></a>
                    <div class="hover:underline hover:underline-offset-2 decoration-black">
                        <div class="py-1">

                            <a href="#"
                                class="font-semibold text-md text-black inline-block">Best
                                View in Newyork City</a>
                            <p class="text-black text-sm inline-block">
                                The city that never sleeps
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                </div>
                <div class="h-fit ">

                    <a href="#"></a>
                    <div class="hover:underline hover:underline-offset-2 decoration-black">
                        <div class="py-1">

                            <a href="#"
                                class="font-semibold text-md text-black inline-block">Best
                                View in Newyork City</a>
                            <p class="text-black text-sm inline-block">
                                The city that never sleeps
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                </div>
                <div class="h-fit ">

                    <a href="#"></a>
                    <div class="hover:underline hover:underline-offset-2 decoration-black">
                        <div class="py-1">

                            <a href="#"
                                class="font-semibold text-md text-black inline-block">Best
                                View in Newyork City</a>
                            <p class="text-black text-sm inline-block">
                                The city that never sleeps
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                </div>
                <div class="h-fit ">

                    <a href="#"></a>
                    <div class="hover:underline hover:underline-offset-2 decoration-black">
                        <div class="py-1">

                            <a href="#"
                                class="font-semibold text-md text-black inline-block">Best
                                View in Newyork City</a>
                            <p class="text-black text-sm inline-block">
                                The city that never sleeps
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main -->
    <div class="relative container h-screen w-full bg-white mx-auto">

    </div>

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