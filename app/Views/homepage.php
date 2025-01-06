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
                <a class="text-slate-200 bg-black font-bold p-2 mx-1" href="#">Register</a>
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
        class="relative h-fit bg-white py-6">
        <div class="p-2 m-auto grid grid-cols-12">
            <div class="grid grid-cols-1 col-span-3">
                <div class="h-fit p-2">
                    <a class="group" href="https://jakita.jakarta.go.id/file/magazine/ind/edisi_12_2024/mobile/index.html#p=30" target="_blank">
                        <div class="">
                            <div class="relative">
                                <img class="w-full border-2 border-black"
                                    src="https://jakita.jakarta.go.id/assets/img/rubrik/layanan_jakarta_12_2024.jpg"
                                    alt="Sunset in the mountains">
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>

                            </div>
                            <div class="">

                                <h1
                                    class="group-hover:underline group-hover:underline-offset-2 font-semibold text-md text-black inline-block">Pantau Kualitas Udara dengan Platform Digital</h1>
                                <p class="text-slate-400 text-xs inline-block">
                                    Untuk Memantau kualitas udara udara di Jakarta, Pemprov DKI Jakarta meluncurkan platform pertama di Indonesia yang menggabungkan data pemerintah dengan non pemerintah.
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                    <div class="flex bg-gray-300 border-b-2 border-gray-300"></div>
                </div>
                <div class="h-fit p-2">
                    <a class="group" href="https://jakita.jakarta.go.id/file/magazine/ind/edisi_12_2024/mobile/index.html#p=32" target="_blank">
                        <div class="hover:underline hover:underline-offset-2 decoration-black">
                            <div class="relative">
                                <img class="w-full border-2 border-black"
                                    src="https://jakita.jakarta.go.id/assets/img/rubrik/wirausaha_12_2024.jpg"
                                    alt="Sunset in the mountains">
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>

                            </div>
                            <div>
                                <h1 href="https://jakita.jakarta.go.id/file/magazine/ind/edisi_12_2024/mobile/index.html#p=32"
                                    class="group-hover:underline group-hover:underline-offset-2 font-semibold text-md text-black inline-block">Pantau Kualitas Udara dengan Platform Digital</h1>
                                <p class="text-slate-400 text-xs inline-block">
                                    Untuk Memantau kualitas udara udara di Jakarta, Pemprov DKI Jakarta meluncurkan platform pertama di Indonesia yang menggabungkan data pemerintah dengan non pemerintah.
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                    <div class="flex bg-gray-300 border-b-2 border-gray-300"></div>
                </div>
            </div>
            <div class="col-span-6">
                <div class="h-fit p-2">
                    <a class="group" href="https://jakita.jakarta.go.id/file/magazine/ind/edisi_12_2024/mobile/index.html#p=26" target="_blank">
                        <div class="decoration-black">
                            <div class="relative">
                                <img class="w-full border-2 border-black"
                                    src="https://jakita.jakarta.go.id/assets/img/rubrik/kabar_jakarta_12_2024.jpg"
                                    alt="Sunset in the mountains">
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>

                            </div>
                            <div>
                                <h1
                                    class="group-hover:underline group-hover:underline-offset-2 font-semibold text-4xl text-black inline-block">Kabar Baik dari Jakarta</h1>
                                <p class="text-slate-400 text-lg inline-block">
                                    Desain Besar Pengelolaan Ruang Laut Terpadu diperlukan untuk menata wilayah pesisir Jakarta.
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                </div>
            </div>
            <div class="col-span-3 grid grid-cols-1">
                <div class="h-fit px-2">
                    <a class="group" href="https://jakita.jakarta.go.id/file/magazine/ind/edisi_1_2024/mobile/index.html#p=7" target="_blank">
                        <div class="">
                            <div class="">
                                <h1
                                    class="group-hover:underline group-hover:underline-offset-2 font-semibold text-2xl text-black inline-block">Menakar Peluang Menjadi Kota Global</h1>
                                <p class="text-slate-400 text-lg inline-block">
                                    Desain Besar Pengelolaan Ruang Laut Terpadu diperlukan untuk menata wilayah pesisir Jakarta.
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                    <div class="flex bg-gray-300 border-b-2 border-gray-300"></div>
                </div>
                <div class="h-fit px-2">
                    <a class="group" href="https://jakita.jakarta.go.id/file/magazine/ind/edisi_2_2024/mobile/index.html#p=30" target="_blank">
                        <div class="">
                            <div class="">
                                <h1
                                    class="group-hover:underline group-hover:underline-offset-2 font-semibold text-2xl text-black inline-block">Bus Sekolah untuk Penyandang Disabilitas</h1>
                                <p class="text-slate-400 text-lg inline-block">
                                    Desain Besar Pengelolaan Ruang Laut Terpadu diperlukan untuk menata wilayah pesisir Jakarta.
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                    <div class="flex bg-gray-300 border-b-2 border-gray-300"></div>
                </div>
                <div class="h-fit px-2">
                    <a class="group" href="https://jakita.jakarta.go.id/file/magazine/ind/edisi_12_2024/mobile/index.html#p=6" target="_blank">
                        <div class="">
                            <div class="">
                                <h1
                                    class="group-hover:underline group-hover:underline-offset-2 font-semibold text-2xl text-black inline-block">Menakar Potensi Wisata Kuliner Jakarta</h1>
                                <p class="text-slate-400 text-lg inline-block">
                                    Desain Besar Pengelolaan Ruang Laut Terpadu diperlukan untuk menata wilayah pesisir Jakarta.
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                    <div class="flex bg-gray-300 border-b-2 border-gray-300"></div>
                </div>
                <div class="h-fit px-2">
                    <a class="group" href="https://jakita.jakarta.go.id/file/magazine/ind/edisi_3_2024/mobile/index.html#p=6" target="_blank">
                        <div class="">
                            <div class="">
                                <h1
                                    class="group-hover:underline group-hover:underline-offset-2 font-semibold text-2xl text-black inline-block">Menjaga Perisai Pangan Jakarta</h1>
                                <p class="text-slate-400 text-lg inline-block">
                                    Desain Besar Pengelolaan Ruang Laut Terpadu diperlukan untuk menata wilayah pesisir Jakarta.
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="flex flex-row items-center">
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="text-gray-500">6 mins ago</span></span>
                    </div>
                    <div class="flex bg-gray-300 border-b-2 border-gray-300"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main -->

    <!-- start berita terkirni -->
    <div class="relative bg-white py-2">
        <div class="p-2 grid grid-cols-2">
            <div class="m-2 border-b-2 border-slate-900 col-span-2">
            </div>
            <div class="p-2 col-span-2">
                <h1 class="text-lg text-black text-bold">Berita Terkini</h1>
            </div>
            <div class="h-fit p-2">
                <a class="group" href="https://jakita.jakarta.go.id/file/magazine/ind/edisi_12_2024/mobile/index.html#p=30" target="_blank">
                    <div class="">
                        <div class="relative">
                            <img class="aspect-video object-none border-2 border-black"
                                src="https://multimedia.beritajakarta.id/photo/2014_508c75c8507a2ae5223dfd2faeb98122/bc881dcc3548280e401dd1039a298072.jpg"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>

                        </div>
                        <div class="">

                            <h1
                                class="group-hover:underline group-hover:underline-offset-2 font-bold text-xl text-black inline-block py-2">Pj Gubernur Teguh-Ketua DPRD Launching FoodHub dan Beras Resik</h1>
                            <p class="text-slate-400 text-md inline-block py-2">
                                Penjabat (Pj) Gubernur DKI Jakarta, Teguh Setyabudi bersama Ketua DPRD DKI Jakarta, Khoirudin melakukan launching FoodHub dan beras Resik PT Food Station Tjipinang Jaya di Rice Plant Cipinang, Jakarta Timur.
                            </p>
                        </div>
                    </div>
                </a>
                <div class="flex flex-row items-center">
                    <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <span class="text-gray-500">6 mins ago</span></span>
                </div>
            </div>
            <div class="h-fit p-2">
                <a class="group" href="https://jakita.jakarta.go.id/file/magazine/ind/edisi_12_2024/mobile/index.html#p=32" target="_blank">
                    <div class="hover:underline hover:underline-offset-2 decoration-black">
                        <div class="relative">
                            <img class="aspect-video object-none border-2 border-black"
                                src="https://multimedia.beritajakarta.id/photo/2014_508c75c8507a2ae5223dfd2faeb98122/7913fb5e76d8040766f4a285993b5313.jpg"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>

                        </div>
                        <div>
                            <h1 href="https://jakita.jakarta.go.id/file/magazine/ind/edisi_12_2024/mobile/index.html#p=32"
                                class="group-hover:underline group-hover:underline-offset-2 font-bold text-xl text-black inline-block py-2">Bank DKI Gandeng KOPNUS Salurkan Kredit untuk Pensiunan ASN dan TNI/Polri</h1>
                            <p class="text-slate-400 text-md inline-block py-2">
                                Bank DKI menjalin sinergi dengan Koperasi Simpan Pinjam Nusantara (KOPNUS) dalam hal pemanfaatan produk dan layanan sebagai bentuk dukungan terhadap layanan keuangan yang inklusif khususnya bagi Pensiunan ASN, TNI dan Polri.
                            </p>
                        </div>
                    </div>
                </a>
                <div class="flex flex-row items-center">
                    <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <span class="text-gray-500">6 mins ago</span></span>
                </div>
            </div>
        </div>
    </div>
    <!-- end berita terkini -->

    <!-- start Highlight -->
    <div class="relative bg-black py-2">
        <div class="p-2 grid grid-cols-1">
            <div class="m-2 border-b-2 border-white">
            </div>
            <div class="p-2">
                <h1 class="text-lg text-white text-bold">Populer</h1>
            </div>
            <div class="h-fit p-2">
                <a class="group grid grid-cols-3 gap-4" href="https://jakita.jakarta.go.id/file/magazine/ind/edisi_12_2024/mobile/index.html#p=30" target="_blank">
                    <div class="relative">
                        <img class="w-full border-2 border-black"
                            src="https://multimedia.beritajakarta.id/photo/2014_508c75c8507a2ae5223dfd2faeb98122/534f050eaf1bb176df7a520c7d23561f.jpg"
                            alt="Sunset in the mountains">
                        <div
                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>

                    </div>
                    <div class="col-span-2 flex flex-col justify-center">
                        <h1 class="group-hover:underline group-hover:underline-offset-2 font-semibold text-4xl text-slate-200 py-2">
                            Tekan Inflasi, Pemprov DKI Gelar Pasar Murah
                        </h1>
                        <p class="text-slate-400 text-md py-2">
                            Pemerintah Provinsi (Pemprov) DKI Jakarta, melalui BUMD Pangan PT Food Station Tjipinang Jaya bekerja sama dengan Bank Indonesia mengadakan Pasar Murah pada 2 dan 3 Januari 2025 di delapan lokasi.
                        </p>
                        <button class="w-fit p-2 border-2 border-white text-slate-200">Telusuri</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- end Highlight -->

    <!-- start apa kabar jakarta -->
    <div class="relative bg-white mt-6 py-2">
        <div class="grid grid-cols-4">
            <div class="m-2 border-b-2 border-slate-900 col-span-4">
            </div>
            <div class="p-2 col-span-4">
                <h1 class="text-xl text-black text-bold">Apa Kabar Jakarta?</h1>
            </div>
            <div class="h-fit p-2">
                <a class="group" href="https://www.beritajakarta.id/read/141693/pesta-kembang-api-bakal-meriahkan-malam-tahun-baru-di-old-shanghai" target="_blank">
                    <div class="">
                        <div class="relative">
                            <img class="w-full border-2 border-black"
                                src="https://multimedia.beritajakarta.id/photo/2014_508c75c8507a2ae5223dfd2faeb98122/16be8745e7fdc440c59d3dd710d4b76b.jpg"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>

                        </div>
                        <div class="my-2">

                            <h1
                                class="group-hover:underline group-hover:underline-offset-2 font-semibold text-md text-black inline-block">Pesta Kembang Api Bakal Meriahkan Malam Tahun Baru di Old Shanghai</h1>
                        </div>
                    </div>
                </a>
                <div class="flex flex-row items-center">
                    <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <span class="text-gray-500">30 Desember 2024</span></span>
                </div>
                <div class="flex bg-gray-300 border-b-2 border-gray-300"></div>
            </div>
            <div class="h-fit p-2">
                <a class="group" href="https://www.beritajakarta.id/read/141691/jakarta-diprediksi-hujan-dengan-intensitas-ringan-hingga-sedang" target="_blank">
                    <div class="">
                        <div class="relative">
                            <img class="w-full border-2 border-black"
                                src="https://multimedia.beritajakarta.id/photo/2014_508c75c8507a2ae5223dfd2faeb98122/b522b1ed3a1f95ec91c869a27c20a7d7.jpg"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>

                        </div>
                        <div class="my-2">

                            <h1
                                class="group-hover:underline group-hover:underline-offset-2 font-semibold text-md text-black inline-block">Jakarta Diprediksi Hujan dengan Intensitas Ringan hingga Sedang</h1>
                        </div>
                    </div>
                </a>
                <div class="flex flex-row items-center">
                    <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <span class="text-gray-500">30 Desember 2024</span></span>
                </div>
                <div class="flex bg-gray-300 border-b-2 border-gray-300"></div>
            </div>
            <div class="h-fit p-2">
                <a class="group" href="https://www.beritajakarta.id/read/141687/operasional-bus-transjakarta-dilakukan-penyesuaian-dukung-acara-pergantian-tahun" target="_blank">
                    <div class="">
                        <div class="relative">
                            <img class="w-full border-2 border-black"
                                src="https://multimedia.beritajakarta.id/photo/2014_508c75c8507a2ae5223dfd2faeb98122/71436c3d23b3fac01e42e819c9c0aaf4.jpg"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>

                        </div>
                        <div class="my-2">

                            <h1
                                class="group-hover:underline group-hover:underline-offset-2 font-semibold text-md text-black inline-block">Operasional Bus Transjakarta Dilakukan Penyesuaian Dukung Acara Pergantian Tahun</h1>
                        </div>
                    </div>
                </a>
                <div class="flex flex-row items-center">
                    <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <span class="text-gray-500">29 Desember 2024</span></span>
                </div>
                <div class="flex bg-gray-300 border-b-2 border-gray-300"></div>
            </div>
            <div class="h-fit p-2">
                <a class="group" href="https://www.beritajakarta.id/read/141690/dishub-siapkan-rekayasa-lalin-di-sekitar-lokasi-wisata" target="_blank">
                    <div class="">
                        <div class="relative">
                            <img class="w-full border-2 border-black"
                                src="https://multimedia.beritajakarta.id/photo/2014_508c75c8507a2ae5223dfd2faeb98122/d85cf82463818505d78c3f7d8bc33e88.jpg"
                                alt="Sunset in the mountains">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>

                        </div>
                        <div class="my-2">

                            <h1
                                class="group-hover:underline group-hover:underline-offset-2 font-semibold text-md text-black inline-block">Dishub Siapkan Rekayasa Lalin di Sekitar Lokasi Wisata</h1>
                        </div>
                    </div>
                </a>
                <div class="flex flex-row items-center">
                    <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <span class="text-gray-500">29 Desember 2024</span></span>
                </div>
                <div class="flex bg-gray-300 border-b-2 border-gray-300"></div>
            </div>
        </div>
    </div>
    <!-- end apa kabar jakarta -->

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