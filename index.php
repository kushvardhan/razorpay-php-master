<?php
session_start();
$page_title = 'Cambridge Public Education and Welfare Trust';
include 'includes/header.php';
?>

    <!-- Simple Hero Section -->
<section class="relative w-full h-[80vh] lg:h-[550px] overflow-hidden">
  <!-- Background Image -->
  <!-- Background Image -->
<img src="img/banner/banner.png" alt="Children Learning" class="absolute inset-0 w-full h-full object-cover">

<!-- Top-right Trust Badge -->
<div class="absolute top-4 right-4 sm:top-6 sm:right-6 bg-white/90 text-green-700 select-none font-bold px-4 py-2 rounded-full shadow-md flex items-center gap-2 text-xs sm:text-sm md:text-base">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
  </svg>
  Registered NGO
</div>


  <!-- Overlay behind text -->
  <div class="absolute inset-0 lg:w-2/5 lg:right-0 bg-black/30 lg:backdrop-blur-sm flex items-center">
    <div class="text-left px-6 sm:px-8 lg:px-12 space-y-4 sm:space-y-6">
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-snug">
        Empowering Education,<br>
        <span class="text-yellow-400">Enabling Futures</span>
      </h1>
      <p class="text-gray-200 text-base sm:text-lg md:text-xl max-w-md">
        We are a registered charitable trust providing quality education and welfare support to underprivileged children in Bihar. Every donation transforms a child's future.
      </p>

      <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mt-4">
        <a href="cause_details.php" class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 sm:px-4 py-2 sm:py-2 rounded-full font-bold text-base sm:text-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
          ❤️ Donate Now
        </a>
        <a href="about.php" class="border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>

<section class="py-16 sm:py-20 bg-gradient-to-b from-blue-50 to-white">
  <div class="container mx-auto px-4 text-center">
    <h3 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-[#1a237e] mb-4 sm:mb-6">
      Our Mission
    </h3>
    <p class="max-w-3xl mx-auto mb-12 text-base sm:text-lg md:text-xl text-gray-700 px-2 sm:px-0">
      As a registered charitable trust, we are committed to providing quality education and welfare support to underprivileged children in Bihar, India. Every donation creates a brighter future for a child.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 lg:gap-10">

      <!-- Trust Goals Card -->
      <div class="bg-white rounded-3xl shadow-lg p-6 sm:p-8 transform hover:-translate-y-2 transition-transform duration-300">
        <div class="flex items-center justify-center w-14 h-14 sm:w-16 sm:h-16 bg-blue-100 rounded-full mx-auto mb-4 sm:mb-5">
          <svg class="w-7 h-7 sm:w-8 sm:h-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422M12 14l-6.16-3.422M12 14v7"/>
          </svg>
        </div>
        <h4 class="text-lg sm:text-xl font-bold text-[#1a237e] mb-2 sm:mb-3">Our Goals</h4>
        <ul class="text-left list-disc list-inside text-gray-700 space-y-1 sm:space-y-1.5 text-sm sm:text-base">
          <li>Provide quality education to every child</li>
          <li>Support child welfare and development</li>
          <li>Empower communities for long-term change</li>
        </ul>
      </div>

      <!-- Achievements Card -->
      <div class="bg-white rounded-3xl shadow-lg p-6 sm:p-8 transform hover:-translate-y-2 transition-transform duration-300">
        <div class="flex items-center justify-center w-14 h-14 sm:w-16 sm:h-16 bg-yellow-100 rounded-full mx-auto mb-4 sm:mb-5">
          <svg class="w-7 h-7 sm:w-8 sm:h-8 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 20c4.418 0 8-1.79 8-4s-3.582-4-8-4-8 1.79-8 4 3.582 4 8 4z"/>
          </svg>
        </div>
        <h4 class="text-lg sm:text-xl font-bold text-[#1a237e] mb-2 sm:mb-3">Achievements</h4>
        <ul class="text-left list-disc list-inside text-gray-700 space-y-1 sm:space-y-1.5 text-sm sm:text-base">
          <li>500+ children supported</li>
          <li>10+ schools partnered</li>
          <li>Countless successful projects</li>
        </ul>
      </div>

      <!-- Registration Card -->
      <div class="bg-white rounded-3xl shadow-lg p-6 sm:p-8 transform hover:-translate-y-2 transition-transform duration-300">
        <div class="flex items-center justify-center w-14 h-14 sm:w-16 sm:h-16 bg-green-100 rounded-full mx-auto mb-4 sm:mb-5">
          <svg class="w-7 h-7 sm:w-8 sm:h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
          </svg>
        </div>
        <h4 class="text-lg sm:text-xl font-bold text-[#1a237e] mb-2 sm:mb-3">Official Registration</h4>
        <ul class="text-left list-disc list-inside text-gray-700 space-y-1 sm:space-y-1.5 text-sm sm:text-base">
          <li>Registered with Govt. of Bihar</li>
          <li>Sub Registry Office, Darbhanga</li>
          <li>Registration Date: 15/07/2014</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 text-center">
    <h3 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-12">Our Projects</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="relative group rounded-2xl overflow-hidden shadow-lg">
        <img src="img/causes/1.png" alt="Education Camp" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="absolute inset-0 bg-black/30 flex flex-col justify-end p-6 transition duration-300">
          <h4 class="text-xl font-bold text-white mb-2">Education Camp</h4>
          <p class="text-white text-sm sm:text-base">Free learning camps for rural children in Darbhanga.</p>
        </div>
      </div>

      <div class="relative group rounded-2xl overflow-hidden shadow-lg">
        <img src="img/causes/2.png" alt="School Renovation" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="absolute inset-0 bg-black/30 flex flex-col justify-end p-6 transition duration-300">
          <h4 class="text-xl font-bold text-white mb-2">School Renovation</h4>
          <p class="text-white text-sm sm:text-base">Renovating local schools to create better learning environments.</p>
        </div>
      </div>

      <div class="relative group rounded-2xl overflow-hidden shadow-lg">
        <img src="img/causes/3.png" alt="Scholarship Program" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="absolute inset-0 bg-black/30 flex flex-col justify-end p-6 transition duration-300">
          <h4 class="text-xl font-bold text-white mb-2">Scholarship Program</h4>
          <p class="text-white text-sm sm:text-base">Providing scholarships to meritorious students from low-income families.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-20 bg-gradient-to-b from-[#e0f2f1] via-white to-[#e3f2fd]">
  <div class="container mx-auto px-4 text-center">
    <h3 class="text-3xl sm:text-4xl font-extrabold text-[#0d47a1] mb-14">
      What Our Donors & Beneficiaries Say
    </h3>

    <div class="relative overflow-hidden">
      <div class="flex space-x-8 transition-transform duration-500" id="testimonialSlider">
        
        <!-- Card 1 -->
        <div class="min-w-full md:min-w-1/2 lg:min-w-1/3 bg-white border border-[#e0f2f1] p-10 rounded-3xl shadow-[0_10px_25px_rgba(0,0,0,0.07)] hover:shadow-[0_15px_35px_rgba(0,0,0,0.12)] transition-all duration-300 flex flex-col items-center text-center">
          <img src="img/post/post_1.png" alt="Asha Devi" class="h-24 w-24 rounded-full mb-5 ring-4 ring-[#a7f3d0] shadow-md">
          <p class="italic text-gray-700 mb-6 text-base sm:text-lg leading-relaxed">
            "Cambridge Trust helped my daughter dream again. Their work brings hope and real change to our community."
          </p>
          <h4 class="font-bold text-[#0d47a1] text-lg sm:text-xl">Asha Devi</h4>
          <span class="text-sm text-gray-500 mb-6">Beneficiary</span>
          <a href="cause_details.php" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-[#2e7d32] to-[#43a047] text-white px-8 py-3 rounded-full font-semibold shadow-md hover:shadow-xl hover:scale-[1.03] transition-all duration-300 text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-white" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5c0-2.8 2.3-5 5.5-5 1.7 0 3.4.8 4.5 2.1C13.1 3.8 14.8 3 16.5 3 19.7 3 22 5.4 22 8.5c0 3.8-3.4 6.9-8.6 11.6L12 21.35z"/></svg>
            Support Their Cause
          </a>
        </div>

        <!-- Card 2 -->
        <div class="min-w-full md:min-w-1/2 lg:min-w-1/3 bg-white border border-[#bbdefb] p-10 rounded-3xl shadow-[0_10px_25px_rgba(0,0,0,0.07)] hover:shadow-[0_15px_35px_rgba(0,0,0,0.12)] transition-all duration-300 flex flex-col items-center text-center">
          <img src="img/post/post_2.png" alt="Rahul Singh" class="h-24 w-24 rounded-full mb-5 ring-4 ring-[#a7c7f9] shadow-md">
          <p class="italic text-gray-700 mb-6 text-base sm:text-lg leading-relaxed">
            "Transparent and trustworthy — Cambridge Trust makes a difference that you can see and believe in."
          </p>
          <h4 class="font-bold text-[#0d47a1] text-lg sm:text-xl">Rahul Singh</h4>
          <span class="text-sm text-gray-500 mb-6">Donor</span>
          <a href="cause_details.php" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-[#0288d1] to-[#039be5] text-white px-8 py-3 rounded-full font-semibold shadow-md hover:shadow-xl hover:scale-[1.03] transition-all duration-300 text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-white" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5c0-2.8 2.3-5 5.5-5 1.7 0 3.4.8 4.5 2.1C13.1 3.8 14.8 3 16.5 3 19.7 3 22 5.4 22 8.5c0 3.8-3.4 6.9-8.6 11.6L12 21.35z"/></svg>
            Donate Now
          </a>
        </div>

        <!-- Card 3 -->
        <div class="min-w-full md:min-w-1/2 lg:min-w-1/3 bg-white border border-[#c8e6c9] p-10 rounded-3xl shadow-[0_10px_25px_rgba(0,0,0,0.07)] hover:shadow-[0_15px_35px_rgba(0,0,0,0.12)] transition-all duration-300 flex flex-col items-center text-center">
          <img src="img/post/post_3.png" alt="Suman Kumar" class="h-24 w-24 rounded-full mb-5 ring-4 ring-[#b9f6ca] shadow-md">
          <p class="italic text-gray-700 mb-6 text-base sm:text-lg leading-relaxed">
            "Our school changed completely with their support. Honest people doing honest work — that’s rare."
          </p>
          <h4 class="font-bold text-[#0d47a1] text-lg sm:text-xl">Suman Kumar</h4>
          <span class="text-sm text-gray-500 mb-6">Community Leader</span>
          <a href="cause_details.php" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-[#2e7d32] to-[#43a047] text-white px-8 py-3 rounded-full font-semibold shadow-md hover:shadow-xl hover:scale-[1.03] transition-all duration-300 text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-white" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5c0-2.8 2.3-5 5.5-5 1.7 0 3.4.8 4.5 2.1C13.1 3.8 14.8 3 16.5 3 19.7 3 22 5.4 22 8.5c0 3.8-3.4 6.9-8.6 11.6L12 21.35z"/></svg>
            Support the Mission
          </a>
        </div>
      </div>

      <!-- Navigation Buttons -->
      <button onclick="slidePrev()" class="absolute top-1/2 left-0 -translate-y-1/2 bg-[#e8f5e9] text-[#1b5e20] shadow-md rounded-full p-4 md:p-5 text-2xl font-bold border border-[#a5d6a7] hover:bg-[#1b5e20] hover:text-white transition-all duration-300 z-50">‹</button>
      <button onclick="slideNext()" class="absolute top-1/2 right-0 -translate-y-1/2 bg-[#e3f2fd] text-[#0d47a1] shadow-md rounded-full p-4 md:p-5 text-2xl font-bold border border-[#90caf9] hover:bg-[#0d47a1] hover:text-white transition-all duration-300 z-50">›</button>
    </div>
  </div>
</section>



<section id="donate" class="relative py-16 bg-gradient-to-b from-[#f7f9fc] to-[#e8edf5] overflow-hidden">
    <div class="absolute top-0 left-0 w-64 h-64 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
    <div class="absolute -bottom-12 right-0 w-80 h-80 bg-indigo-200 rounded-full mix-blend-multiply filter blur-2xl opacity-15 animate-blob animation-delay-2000"></div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <h3 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4 leading-snug">
            Give the Gift of Education
        </h3>
        <p class="text-gray-700 sm:text-base md:text-lg max-w-2xl mx-auto mb-8">
            Support children from underprivileged backgrounds with quality education, mentorship, and a brighter future. Every contribution makes a lasting impact.
        </p>

        <div class="bg-white rounded-2xl shadow-xl max-w-lg mx-auto p-8 md:p-12">
            <p class="text-gray-800 text-base md:text-lg mb-6">
                Join thousands of donors in transforming lives. Your generosity empowers children to dream, learn, and thrive.
            </p>
            <a href="cause_details.php" 
   class="w-full inline-flex items-center justify-center gap-3 bg-gradient-to-r from-[#fbbf24] via-[#fcd34d] to-[#fde68a] text-[#1a237e] font-semibold py-4 px-12 rounded-full shadow-md hover:shadow-xl hover:-translate-y-0.2 transition-all duration-300 text-base sm:text-lg relative overflow-hidden">
   
   <svg class="w-6 h-6 sm:w-7 sm:h-7 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
   </svg>

   Donate Now
</a>


            <div class="flex flex-col sm:flex-row justify-center items-center mt-6 gap-4 text-gray-600 text-sm md:text-base font-medium">

    <!-- Secure Payments -->
    <span class="flex items-center gap-2">
        <svg class="w-6 h-6 sm:w-7 sm:h-7 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3zM5 20c0-3.333 5-5 7-5s7 1.667 7 5H5z"/>
        </svg>
        100% Secure Payments
    </span>

    <!-- Powered by Razorpay -->
    <span class="flex items-center gap-2">
        <svg class="w-6 h-6 sm:w-7 sm:h-7 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 6h18M3 14h18M3 18h18"/>
        </svg>
        Powered by Razorpay
    </span>

    <!-- Make a Lasting Impact -->
    <span class="flex items-center gap-2">
        <svg class="w-6 h-6 sm:w-7 sm:h-7 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21C12 21 5 13 5 8a7 7 0 0114 0c0 5-7 13-7 13z"/>
        </svg>
        Make a Lasting Impact
    </span>

</div>


            <p class="text-gray-500 text-xs mt-4">
                Donations are fully tax-deductible and go directly to educational programs. Transparency and accountability guaranteed.
            </p>
        </div>
    </div>
</section>

<style>
@keyframes blob {
  0%, 100% { transform: translate(0px, 0px) scale(1); }
  33% { transform: translate(15px, -25px) scale(1.03); }
  66% { transform: translate(-10px, 10px) scale(0.97); }
}
.animate-blob {
  animation: blob 10s infinite;
}
.animation-delay-2000 {
  animation-delay: 2s;
}
</style>


<script>
let currentSlide = 0;
const slider = document.getElementById('testimonialSlider');
const totalSlides = slider.children.length;

function updateSlider() {
  let width = slider.children[0].offsetWidth + 24; // including space-x-6
  slider.style.transform = `translateX(-${currentSlide * width}px)`;
}

function slideNext() {
  currentSlide = (currentSlide + 1) % totalSlides;
  updateSlider();
}

function slidePrev() {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  updateSlider();
}

window.addEventListener('resize', updateSlider);
</script>




<?php include 'includes/footer.php'; ?>