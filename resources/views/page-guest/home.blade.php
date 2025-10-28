<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Connect</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .carousel-slide {
            display: none;
        }

        .carousel-slide.active {
            display: block;
        }
    </style>
</head>

<body class="font-sans antialiased">
    @include('page-guest.navbarguest')
    @include('page-guest.heroguest')
    @include('page-guest.aboutguest')
    @include('page-guest.kategoriguest')
    @include('page-guest.populerguest')
    @include('page-guest.caraguset')
    @include('page-guest.footerguest')
</body>

</html>