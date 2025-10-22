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

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto">
            <h3 class="text-2xl font-bold text-[#1a237e] mb-8 text-center">Our Projects</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="img/causes/1.png" alt="Education Camp" class="rounded-lg h-40 w-full object-cover mb-4">
                    <h4 class="text-lg font-bold text-[#1a237e] mb-2">Education Camp</h4>
                    <p>Free learning camps for rural children in Darbhanga.</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="img/causes/2.png" alt="School Renovation" class="rounded-lg h-40 w-full object-cover mb-4">
                    <h4 class="text-lg font-bold text-[#1a237e] mb-2">School Renovation</h4>
                    <p>Renovating local schools to create better learning environments.</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="img/causes/3.png" alt="Scholarship Program" class="rounded-lg h-40 w-full object-cover mb-4">
                    <h4 class="text-lg font-bold text-[#1a237e] mb-2">Scholarship Program</h4>
                    <p>Providing scholarships to meritorious students from low-income families.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto">
            <h3 class="text-2xl font-bold text-[#1a237e] mb-8 text-center">Testimonials</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg shadow flex flex-col">
                    <p class="text-lg italic mb-4">"Thanks to Cambridge Trust, my daughter now attends school and dreams of becoming a teacher."</p>
                    <div class="flex items-center gap-4">
                        <img src="img/post/post_1.png" alt="Beneficiary" class="h-12 w-12 rounded-full object-cover">
                        <span class="font-bold text-[#1a237e]">Asha Devi, Beneficiary</span>
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow flex flex-col">
                    <p class="text-lg italic mb-4">"I have seen the impact of their work in my village. Truly trustworthy and dedicated."</p>
                    <div class="flex items-center gap-4">
                        <img src="img/post/post_2.png" alt="Donor" class="h-12 w-12 rounded-full object-cover">
                        <span class="font-bold text-[#1a237e]">Rahul Singh, Donor</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="donate" class="py-16 bg-yellow-50">
        <div class="container mx-auto">
            <h3 class="text-2xl font-bold text-[#1a237e] mb-8 text-center">Make a Donation</h3>
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-md mx-auto text-center">
                <p class="mb-6 text-gray-700">Your support can transform a child's future through education.</p>
                <a href="cause_details.php" class="w-full inline-block bg-yellow-400 text-[#1a237e] font-bold py-3 px-8 rounded-full hover:bg-yellow-300 transition">Support Our Cause</a>
                <p class="text-center text-sm text-gray-600 mt-4">All donations are processed securely via Razorpay. Your support makes a difference!</p>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>