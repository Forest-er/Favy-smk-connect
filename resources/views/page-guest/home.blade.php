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
        document.addEventListener('DOMContentLoaded', () => {
            // === CAROUSEL ===
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

            // === HOW IT WORKS TOGGLE ===
            const toggleHiring = document.getElementById('toggleHiring');
            const toggleFinding = document.getElementById('toggleFinding');

            // Gunakan asset() dari Laravel untuk path gambar
            const imageUrl = "{{ asset('images/smkbm3.png') }}";

            const content = {
                hiring: {
                    card1: {
                        title: 'Post jobs for free',
                        desc: 'List your project at no cost and receive offers from top talent.'
                    },
                    card2: {
                        title: 'Review & hire',
                        desc: 'Compare proposals, interview, and hire the right freelancer.'
                    },
                    card3: {
                        title: 'Pay securely',
                        desc: 'Release payment only when you’re happy with the result.'
                    }
                },
                finding: {
                    card1: {
                        title: 'Build your profile',
                        desc: 'Highlight your skills and portfolio to attract clients.'
                    },
                    card2: {
                        title: 'Apply & get hired',
                        desc: 'Send proposals and land jobs that match your expertise.'
                    },
                    card3: {
                        title: 'Get paid safely',
                        desc: 'Receive payments securely through our trusted platform.'
                    }
                }
            };

            function updateContent(mode) {
                const data = content[mode];

                for (let i = 1; i <= 3; i++) {
                    const title = document.getElementById(`card${i}Title`);
                    const desc = document.getElementById(`card${i}Desc`);
                    const image = document.getElementById(`card${i}Image`);

                    if (title && desc && image) {
                        // 🔥 Terapkan gaya wrap secara eksplisit — ini kunci agar teks selalu multiline
                        title.style.whiteSpace = 'normal';
                        title.style.wordWrap = 'break-word';
                        title.style.overflowWrap = 'break-word';
                        title.style.maxWidth = '100%';

                        desc.style.whiteSpace = 'normal';
                        desc.style.wordWrap = 'break-word';
                        desc.style.overflowWrap = 'break-word';
                        desc.style.maxWidth = '100%';

                        // Fade out
                        title.classList.add('opacity-0');
                        desc.classList.add('opacity-0');

                        setTimeout(() => {
                            title.textContent = data[`card${i}`].title;
                            desc.textContent = data[`card${i}`].desc;
                            image.src = imageUrl;

                            // Fade in
                            title.classList.remove('opacity-0');
                            desc.classList.remove('opacity-0');
                        }, 200);
                    }
                }
            }

            // === EVENT LISTENER ===
            if (toggleHiring && toggleFinding) {
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

                // Default: tampilkan mode "hiring"
                toggleHiring.click();
            }
        });
    </script>

</body>

</html>