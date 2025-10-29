<div id="overlay" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden z-40 transition-opacity" onclick="closePopup()"></div>
<div id="rightPopup" class="fixed top-0 right-0 h-full w-full md:w-[500px] bg-white shadow-2xl transform translate-x-full transition-all duration-500 z-50 overflow-y-auto">
  <div class="sticky top-0 bg-white border-b border-gray-100 p-6 flex justify-between items-center z-10">
    <h3 class="text-xl font-bold text-gray-900">Project Details</h3>
    <button onclick="closePopup()" class="w-10 h-10 rounded-full hover:bg-gray-100 flex items-center justify-center transition">
      <i class="bi bi-x-lg text-gray-600"></i>
    </button>
  </div>

  <div class="p-6">
    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 mb-6">
      <h2 id="popupTitle" class="text-2xl font-bold text-gray-900 mb-4">UI Design for App</h2>

      <div class="flex items-center gap-3 mb-4">
        <img src="https://i.pravatar.cc/40?img=1" class="w-12 h-12 rounded-full ring-2 ring-white">
        <div>
          <p id="popupClient" class="font-semibold text-gray-900">Nova Tech</p>
          <div class="flex items-center text-sm text-gray-600">
            <i class="bi bi-star-fill text-yellow-400 text-xs"></i>
            <span class="ml-1">4.9 (120 reviews)</span>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-2 gap-4">
        <div class="bg-white rounded-xl p-4">
          <p class="text-xs text-gray-500 mb-1">Budget</p>
          <p id="popupBudget" class="text-xl font-bold text-gray-900">Rp2.000.000</p>
        </div>
        <div class="bg-white rounded-xl p-4">
          <p class="text-xs text-gray-500 mb-1">Deadline</p>
          <p id="popupDeadline" class="text-xl font-bold text-gray-900">20 Nov 2025</p>
        </div>
      </div>
    </div>

    <div class="mb-6">
      <h4 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
        <i class="bi bi-file-text text-purple-600"></i> Project Description
      </h4>
      <p class="text-gray-600 leading-relaxed">
        Design a clean, minimal, and modern mobile app interface for our new product launch. The project requires creating user flows, wireframes, and high-fidelity mockups. Applicants must have prior experience in UI/UX design with a strong portfolio showcasing mobile app designs.
      </p>
    </div>

    <div class="mb-6">
      <h4 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
        <i class="bi bi-check-square text-purple-600"></i> Requirements
      </h4>
      <ul class="space-y-2">
        <li class="flex items-start gap-2 text-gray-600">
          <i class="bi bi-check-circle-fill text-green-500 mt-1"></i>
          <span>3+ years experience in UI/UX design</span>
        </li>
        <li class="flex items-start gap-2 text-gray-600">
          <i class="bi bi-check-circle-fill text-green-500 mt-1"></i>
          <span>Proficiency in Figma and Adobe XD</span>
        </li>
        <li class="flex items-start gap-2 text-gray-600">
          <i class="bi bi-check-circle-fill text-green-500 mt-1"></i>
          <span>Strong portfolio of mobile app designs</span>
        </li>
        <li class="flex items-start gap-2 text-gray-600">
          <i class="bi bi-check-circle-fill text-green-500 mt-1"></i>
          <span>Ability to work independently and meet deadlines</span>
        </li>
      </ul>
    </div>

    <div class="mb-6">
      <h4 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
        <i class="bi bi-tag text-purple-600"></i> Skills Required
      </h4>
      <div class="flex flex-wrap gap-2">
        <span class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">UI Design</span>
        <span class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">UX Design</span>
        <span class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">Figma</span>
        <span class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">Adobe XD</span>
        <span class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">Mobile Design</span>
      </div>
    </div>

    <div class="mb-6 bg-blue-50 border border-blue-200 rounded-xl p-4">
      <div class="flex items-start gap-3">
        <i class="bi bi-info-circle text-blue-600 text-xl mt-0.5"></i>
        <div>
          <p class="font-semibold text-blue-900 mb-1">Application Tips</p>
          <p class="text-sm text-blue-800">Include your portfolio link and mention your relevant experience to increase your chances of getting selected.</p>
        </div>
      </div>
    </div>

    <div class="space-y-3">
      <button class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-semibold py-4 rounded-xl transition shadow-lg flex items-center justify-center gap-2">
        <i class="bi bi-send"></i> Send Proposal
      </button>
      <button class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-4 rounded-xl transition flex items-center justify-center gap-2">
        <i class="bi bi-bookmark"></i> Save for Later
      </button>
    </div>
  </div>
</div>