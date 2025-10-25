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

    <script>
        // Carousel
        document.querySelectorAll('[id$="Carousel"]').forEach(carouselContainer => {
            const slides = carouselContainer.querySelectorAll('.carousel-slide');
            const navButtons = carouselContainer.querySelectorAll('.carousel-nav-btn');
            navButtons.forEach(button => {
                button.addEventListener('mousedown', (e) => {
                    if (e.button !== 0) return;
                    const targetIndex = parseInt(button.getAttribute('data-slide'));
                    if (targetIndex >= 0 && targetIndex < slides.length) {
                        slides.forEach((slide, i) => {
                            slide.classList.toggle('active', i === targetIndex);
                        });
                    }
                });
            });
        });

            document.addEventListener('DOMContentLoaded', () => {
                const toggleHiring = document.getElementById('toggleHiring');
                const toggleFinding = document.getElementById('toggleFinding');

                // Pastikan assetUrl sudah didefinisikan di Blade
                const imageUrl = window.assetUrl || '/images/smkbm3.png';

                const content = {
                    hiring: {
                        card1: {
                            image: `<img src="${imageUrl}" alt="All in one place" class="w-full h-full object-cover">`,
                            title: 'Posting jobs is always free',
                            desc: 'Post your project for free and get proposals from top freelancers.'
                        },
                        card2: {
                            image: `<img src="${imageUrl}" alt="Get proposals" class="w-full h-full object-cover">`,
                            title: 'Get proposals and hire',
                            desc: 'Review proposals, interview candidates, and hire the perfect match.'
                        },
                        card3: {
                            image: `<img src="${imageUrl}" alt="Pay when done" class="w-full h-full object-cover">`,
                            title: 'Pay when work is done',
                            desc: 'Only pay for completed work you’re happy with — no surprises.'
                        }
                    },
                    finding: {
                        card1: {
                            image: `<img src="${imageUrl}" alt="Find your next gig" class="w-full h-full object-cover">`,
                            title: 'Create your profile',
                            desc: 'Showcase your skills, experience, and portfolio to attract clients.'
                        },
                        card2: {
                            image: `<img src="${imageUrl}" alt="Get hired" class="w-full h-full object-cover">`,
                            title: 'Get hired fast',
                            desc: 'Browse projects, submit proposals, and land your next job quickly.'
                        },
                        card3: {
                            image: `<img src="${imageUrl}" alt="Get paid" class="w-full h-full object-cover">`,
                            title: 'Get paid securely',
                            desc: 'Receive payments safely through our platform — no delays, no hassle.'
                        }
                    }
                };

                function updateContent(mode) {
                    const {
                        card1,
                        card2,
                        card3
                    } = content[mode];

                    // Card 1: innerHTML karena sekarang juga gambar
                    document.getElementById('card1Image').innerHTML = card1.image;

                    // Card 2 & 3: ganti seluruh elemen karena sebelumnya <img> langsung
                    const card2Container = document.getElementById('card2Image').closest('div.relative');
                    card2Container.innerHTML = `<img id="card2Image" src="${imageUrl}" alt="${card2.title}" class="w-full h-full object-cover">`;

                    const card3Container = document.getElementById('card3Image').closest('div.relative');
                    card3Container.innerHTML = `<img id="card3Image" src="${imageUrl}" alt="${card3.title}" class="w-full h-full object-cover">`;

                    // Update teks
                    document.getElementById('card1Title').textContent = card1.title;
                    document.getElementById('card1Desc').textContent = card1.desc;

                    document.getElementById('card2Title').textContent = card2.title;
                    document.getElementById('card2Desc').textContent = card2.desc;

                    document.getElementById('card3Title').textContent = card3.title;
                    document.getElementById('card3Desc').textContent = card3.desc;
                }

                toggleHiring.addEventListener('click', () => {
                    toggleHiring.classList.add('bg-white', 'border-b-2', 'border-blue-500');
                    toggleHiring.classList.remove('bg-gray-100');
                    toggleFinding.classList.remove('bg-white', 'border-b-2', 'border-blue-500');
                    toggleFinding.classList.add('bg-gray-100');
                    updateContent('hiring');
                });

                toggleFinding.addEventListener('click', () => {
                    toggleFinding.classList.add('bg-white', 'border-b-2', 'border-blue-500');
                    toggleFinding.classList.remove('bg-gray-100');
                    toggleHiring.classList.remove('bg-white', 'border-b-2', 'border-blue-500');
                    toggleHiring.classList.add('bg-gray-100');
                    updateContent('finding');
                });

                // Trigger default
                toggleHiring.click();
            });
    </script>
</body>

</html>