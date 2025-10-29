<!-- HOW IT WORKS SECTION -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-6 md:px-12 lg:px-24">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-6">
      <h2 class="text-2xl font-bold text-gray-900">Bagaimana Caranya Rekrut/Dapat Kerjaan?</h2>
      <div class="flex rounded-full border border-gray-300 overflow-hidden shadow-sm">
        <button id="toggleHiring"
          class="px-6 py-3 bg-gray-100 text-gray-800 font-medium hover:bg-gray-200 transition active:bg-white active:border-b-2 active:border-blue-500">
          Cara rekrutmen
        </button>
        <button id="toggleFinding"
          class="px-6 py-3 text-gray-700 font-medium hover:bg-gray-100 transition">
          Cara mencari kerja
        </button>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="relative bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group max-w-full">
        <div class="relative aspect-video md:h-64 lg:h-72 bg-gray-100 overflow-hidden">
          <img id="card1Image" src="{{ asset('images/register.jpg') }}" 
               alt="Langkah 1"
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

          <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white p-4 
                      translate-y-full md:group-hover:translate-y-0 
                      transition-all duration-500">
            <h3 id="card1Title" class="font-semibold text-base mb-1">Posting pekerjaan gratis</h3>
            <p id="card1Desc" class="text-sm text-gray-200">
              Pasang proyek Anda tanpa biaya dan dapatkan penawaran dari talenta terbaik.
            </p>
          </div>
        </div>

        <div class="p-4 md:hidden">
          <h3 id="card1TitleMobile" class="font-semibold text-base mb-1">Posting pekerjaan gratis</h3>
          <p id="card1DescMobile" class="text-sm text-gray-600">
            Pasang proyek Anda tanpa biaya dan dapatkan penawaran dari talenta terbaik.
          </p>
        </div>
      </div>

      <div class="relative bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group max-w-full">
        <div class="relative aspect-video md:h-64 lg:h-72 bg-gray-100 overflow-hidden">
          <img id="card2Image" src="{{ asset('images/review.jpg') }}" 
               alt="Langkah 2"
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

          <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white p-4 
                      translate-y-full md:group-hover:translate-y-0 
                      transition-all duration-500">
            <h3 id="card2Title" class="font-semibold text-base mb-1">Tinjau & rekrut</h3>
            <p id="card2Desc" class="text-sm text-gray-200">
              Bandingkan proposal, wawancara, dan rekrut freelancer yang tepat.
            </p>
          </div>
        </div>

        <div class="p-4 md:hidden">
          <h3 id="card2TitleMobile" class="font-semibold text-base mb-1">Tinjau & rekrut</h3>
          <p id="card2DescMobile" class="text-sm text-gray-600">
            Bandingkan proposal, wawancara, dan rekrut freelancer yang tepat.
          </p>
        </div>
      </div>

      <div class="relative bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group max-w-full">
        <div class="relative aspect-video md:h-64 lg:h-72 bg-gray-100 overflow-hidden">
          <img id="card3Image" src="{{ asset('images/pay.jpg') }}" 
               alt="Langkah 3"
               class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

          <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white p-4 
                      translate-y-full md:group-hover:translate-y-0 
                      transition-all duration-500">
            <h3 id="card3Title" class="font-semibold text-base mb-1">Bayar dengan aman</h3>
            <p id="card3Desc" class="text-sm text-gray-200">
              Lepaskan pembayaran hanya jika Anda puas dengan hasilnya.
            </p>
          </div>
        </div>

        <div class="p-4 md:hidden">
          <h3 id="card3TitleMobile" class="font-semibold text-base mb-1">Bayar dengan aman</h3>
          <p id="card3DescMobile" class="text-sm text-gray-600">
            Lepaskan pembayaran hanya jika Anda puas dengan hasilnya.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const toggleHiring = document.getElementById('toggleHiring');
    const toggleFinding = document.getElementById('toggleFinding');

    const content = {
        hiring: {
            card1: { title: 'Posting pekerjaan gratis', desc: 'Pasang proyek Anda tanpa biaya dan dapatkan penawaran dari talenta terbaik.', img: "{{ asset('images/register.jpg') }}" },
            card2: { title: 'Tinjau & rekrut', desc: 'Bandingkan proposal, wawancara, dan rekrut freelancer yang tepat.', img: "{{ asset('images/review.jpg') }}" },
            card3: { title: 'Bayar dengan aman', desc: 'Lepaskan pembayaran hanya jika Anda puas dengan hasilnya.', img: "{{ asset('images/pay.jpg') }}" }
        },
        finding: {
            card1: { title: 'Bangun profil Anda', desc: 'Tampilkan keahlian dan portofolio untuk menarik klien.', img: "{{ asset('images/build.jpg') }}" },
            card2: { title: 'Lamar & diterima kerja', desc: 'Kirim proposal dan dapatkan pekerjaan sesuai keahlian Anda.', img: "{{ asset('images/hired.jpg') }}" },
            card3: { title: 'Terima pembayaran aman', desc: 'Terima pembayaran dengan aman melalui platform terpercaya kami.', img: "{{ asset('images/paid.jpg') }}" }
        }
    };

    function updateContent(mode) {
        const data = content[mode];

        for (let i = 1; i <= 3; i++) {
            const cardData = data[`card${i}`];

            const img = document.getElementById(`card${i}Image`);
            if (img) img.src = cardData.img;

            const title = document.getElementById(`card${i}Title`);
            const desc = document.getElementById(`card${i}Desc`);
            
            const titleMobile = document.getElementById(`card${i}TitleMobile`);
            const descMobile = document.getElementById(`card${i}DescMobile`);

            if (title) title.textContent = cardData.title;
            if (desc) desc.textContent = cardData.desc;
            if (titleMobile) titleMobile.textContent = cardData.title;
            if (descMobile) descMobile.textContent = cardData.desc;
        }
    }

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

        toggleHiring.click();
    }
});
</script>
