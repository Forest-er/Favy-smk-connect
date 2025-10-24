<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Connect</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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

        // Toggle How It Works
        document.addEventListener('DOMContentLoaded', () => {
            const toggleHiring = document.getElementById('toggleHiring');
            const toggleFinding = document.getElementById('toggleFinding');

            const content = {
                hiring: {
                    card1: {
                        image: '<span class="text-white text-xl font-bold text-center p-4">all in one place</span>',
                        title: 'Posting jobs is always free',
                        desc: 'Post your project for free and get proposals from top freelancers.'
                    },
                    card2: {
                        image: '<img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Get proposals" class="w-full h-full object-cover">',
                        title: 'Get proposals and hire',
                        desc: 'Review proposals, interview candidates, and hire the perfect match.'
                    },
                    card3: {
                        image: '<img src="https://images.unsplash.com/photo-1581091580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Pay when done" class="w-full h-full object-cover">',
                        title: 'Pay when work is done',
                        desc: 'Only pay for completed work you’re happy with — no surprises.'
                    }
                },
                finding: {
                    card1: {
                        image: '<span class="text-white text-xl font-bold text-center p-4">find your next gig</span>',
                        title: 'Create your profile',
                        desc: 'Showcase your skills, experience, and portfolio to attract clients.'
                    },
                    card2: {
                        image: '<img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Get hired" class="w-full h-full object-cover">',
                        title: 'Get hired fast',
                        desc: 'Browse projects, submit proposals, and land your next job quickly.'
                    },
                    card3: {
                        image: '<img src="https://images.unsplash.com/photo-1581091580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Get paid" class="w-full h-full object-cover">',
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
                document.getElementById('card1Image').innerHTML = card1.image;
                document.getElementById('card1Title').textContent = card1.title;
                document.getElementById('card1Desc').textContent = card1.desc;

                document.getElementById('card2Image').outerHTML = `<div id="card2Image">${card2.image}</div>`;
                document.getElementById('card2Title').textContent = card2.title;
                document.getElementById('card2Desc').textContent = card2.desc;

                document.getElementById('card3Image').outerHTML = `<div id="card3Image">${card3.image}</div>`;
                document.getElementById('card3Title').textContent = card3.title;
                document.getElementById('card3Desc').textContent = card3.desc;
            }

            toggleHiring.addEventListener('click', () => {
                toggleHiring.classList.add('bg-white', 'border-b-2', 'border-blue-500');
                toggleFinding.classList.remove('bg-white', 'border-b-2', 'border-blue-500');
                toggleFinding.classList.add('bg-gray-100');
                updateContent('hiring');
            });

            toggleFinding.addEventListener('click', () => {
                toggleFinding.classList.add('bg-white', 'border-b-2', 'border-blue-500');
                toggleHiring.classList.remove('bg-white', 'border-b-2', 'border-blue-500');
                toggleHiring.classList.add('bg-gray-100');
                updateContent('finding');
            });

            toggleHiring.click();
        });
    </script>
</body>

</html>