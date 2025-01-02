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
</head>

<body>
    <!-- start navbar -->
    <nav class="w-full fixed top-0 bg-opacity-0 z-10">
        <div class="container mx-auto py-5 flex items-center justify justify-between">
            <div class="flex items-center gap-2 mx-5">
                <span>JAKITA</span>
            </div>
            <div class="flex items-center gap-2 mx-5">
                <img alt="Jakita" width="180" height="80" data-sticky-width="82" data-sticky-height="40" src="https://jakita.jakarta.go.id/assets/img/jakita/logo_jak_black.png">
            </div>
            <div class="flex items-center gap-2 mx-5">
                <span>JAKITA</span>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- start careusel -->
    <div class="carousel h-screen w-full flex overflow-hidden drop-shadow-md">
        <div id="slide1" class="carousel-item relative w-full h-screen overflow-hidden">
            <img
                src="https://jakita.jakarta.go.id/assets/img/warna_jakarta/5.jpg"
                class="w-full h-fit" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide4" class="btn btn-circle">❮</a>
                <a href="#slide2" class="btn btn-circle">❯</a>
            </div>
            <div class="absolute bottom-5 left-0 right-0 flex items-center justify justify-center">
                <h1 class="text-white text-2xl font-bold">Jakarta Hari Ini</h1>
                <h1 class="text-white text-2xl font-bold">Jakarta Hari Ini</h1>
            </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full h-screen overflow-hidden">
            <img
                src="https://jakita.jakarta.go.id/assets/img/warna_jakarta/3.jpg"
                class="w-full h-fit" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide2" class="btn btn-circle">❮</a>
                <a href="#slide4" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide3" class="carousel-item relative w-full">
            <img
                src="https://jakita.jakarta.go.id/assets/img/warna_jakarta/8.jpg"
                class="w-full h-fit" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide3" class="btn btn-circle">❮</a>
                <a href="#slide1" class="btn btn-circle">❯</a>
            </div>
        </div>
    </div>
    <!-- end careusel -->

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