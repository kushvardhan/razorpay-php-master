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


<section class="py-16 bg-gradient-to-b from-blue-50 to-white">
  <div class="container mx-auto px-4 text-center">
    <h3 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-12">Hear From Our Beneficiaries & Donors</h3>

    <div class="relative overflow-hidden">
      <div class="flex space-x-6 transition-transform duration-500" id="testimonialSlider">

        <!-- Testimonial 1 -->
        <div class="min-w-full md:min-w-1/2 lg:min-w-1/3 bg-white p-8 rounded-3xl shadow-xl flex flex-col items-center text-center hover:scale-102 transform transition-all duration-300">
          <img src="img/post/post_1.png" alt="Asha Devi" class="h-24 w-24 rounded-full mb-4 ring-4 ring-yellow-300 shadow-md">
          <p class="italic text-gray-700 mb-4 text-base sm:text-lg">"Thanks to Cambridge Trust, my daughter now attends school and dreams of becoming a teacher. Their programs are life-changing and fully trustworthy."</p>
          <h4 class="font-bold text-[#1a237e] text-lg sm:text-xl">Asha Devi</h4>
          <span class="text-sm text-gray-500 mb-4">Beneficiary</span>
          <a href="cause_details.php" class="mt-2 inline-block bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-200 text-sm sm:text-base">Support Similar Causes ❤️</a>
        </div>

        <!-- Testimonial 2 -->
        <div class="min-w-full md:min-w-1/2 lg:min-w-1/3 bg-white p-8 rounded-3xl shadow-xl flex flex-col items-center text-center hover:scale-102 transform transition-all duration-300">
          <img src="img/post/post_2.png" alt="Rahul Singh" class="h-24 w-24 rounded-full mb-4 ring-4 ring-blue-300 shadow-md">
          <p class="italic text-gray-700 mb-4 text-base sm:text-lg">"I have seen the impact of their work in my village. Truly dedicated and transparent, Cambridge Trust is one NGO you can rely on completely."</p>
          <h4 class="font-bold text-[#1a237e] text-lg sm:text-xl">Rahul Singh</h4>
          <span class="text-sm text-gray-500 mb-4">Donor</span>
          <a href="cause_details.php" class="mt-2 inline-block bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-200 text-sm sm:text-base">Donate & Make Impact ❤️</a>
        </div>

        <!-- Testimonial 3 -->
        <div class="min-w-full md:min-w-1/2 lg:min-w-1/3 bg-white p-8 rounded-3xl shadow-xl flex flex-col items-center text-center hover:scale-102 transform transition-all duration-300">
          <img src="img/post/post_3.png" alt="Suman Kumar" class="h-24 w-24 rounded-full mb-4 ring-4 ring-green-300 shadow-md">
          <p class="italic text-gray-700 mb-4 text-base sm:text-lg">"The trust’s programs transformed our school. Teachers and children are happier and more motivated. Fully authentic and reliable NGO."</p>
          <h4 class="font-bold text-[#1a237e] text-lg sm:text-xl">Suman Kumar</h4>
          <span class="text-sm text-gray-500 mb-4">Community Leader</span>
          <a href="cause_details.php" class="mt-2 inline-block bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-200 text-sm sm:text-base">Support Their Mission ❤️</a>
        </div>

      </div>

      <!-- Navigation Arrows -->
      <button onclick="slidePrev()" class="absolute top-1/2 left-2 md:left-0 -translate-y-1/2 bg-white shadow-lg rounded-full p-3 text-lg font-bold hover:bg-green-100 transition z-50">‹</button>
      <button onclick="slideNext()" class="absolute top-1/2 right-2 md:right-0 -translate-y-1/2 bg-white shadow-lg rounded-full p-3 text-lg font-bold hover:bg-green-100 transition z-50">›</button>
    </div>
  </div>
</section>

<section id="donate" class="py-24 bg-gradient-to-b from-yellow-50 to-yellow-100">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl sm:text-5xl font-extrabold text-[#1a237e] mb-6">Transform a Life Today</h2>
        <p class="text-gray-700 text-lg max-w-2xl mx-auto mb-12">Join thousands of compassionate donors who believe in empowering children through education. Your donation has immediate and lasting impact.</p>

        <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-2xl p-12 relative overflow-hidden hover:shadow-3xl transition transform hover:scale-105">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8 text-center">
                <div class="p-4 bg-yellow-100 rounded-xl">
                    <h3 class="text-3xl font-bold text-[#1a237e]">1800+</h3>
                    <p class="text-gray-600 mt-1">Children Supported</p>
                </div>
                <div class="p-4 bg-yellow-100 rounded-xl">
                    <h3 class="text-3xl font-bold text-[#1a237e]">25</h3>
                    <p class="text-gray-600 mt-1">Education Projects</p>
                </div>
                <div class="p-4 bg-yellow-100 rounded-xl">
                    <h3 class="text-3xl font-bold text-[#1a237e]">100%</h3>
                    <p class="text-gray-600 mt-1">Secure Payments</p>
                </div>
            </div>

            <a href="cause_details.php" class="inline-block bg-yellow-400 text-[#1a237e] font-bold py-4 px-16 rounded-full shadow-lg hover:bg-yellow-300 transition text-xl mb-6">Donate Now</a>

            <div class="mt-8 space-y-4">
                <p class="text-gray-500 italic text-sm">“I feel proud to support this cause. Every rupee I give goes directly to helping children.” – <span class="font-semibold">Rohit S.</span></p>
                <p class="text-gray-500 italic text-sm">“Transparent, trustworthy, and impactful. Donating here is the best decision I made.” – <span class="font-semibold">Ananya K.</span></p>
            </div>
        </div>
    </div>
</section>

    
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