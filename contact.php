<?php
session_start();
$page_title = 'Contact Us | Cambridge Public Education and Welfare Trust';
include 'includes/header.php';
?>

<section class="bg-[#1a237e] text-white py-16">
  <div class="container mx-auto text-center">
    <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
    <p class="text-xl">Get in touch with Cambridge Public Education and Welfare Trust</p>
  </div>
</section>

<main class="container mx-auto py-12">
  <div class="max-w-6xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

      <!-- Contact Form -->
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-[#1a237e] mb-6">Send us a Message</h2>
        <form id="contactForm" class="space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
              <input type="text" name="name" required class="w-full p-3 border border-gray-300 rounded-lg focus:border-[#1a237e] focus:outline-none">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
              <input type="email" name="email" required class="w-full p-3 border border-gray-300 rounded-lg focus:border-[#1a237e] focus:outline-none">
            </div>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
            <input type="text" name="subject" required class="w-full p-3 border border-gray-300 rounded-lg focus:border-[#1a237e] focus:outline-none">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
            <textarea name="message" rows="5" required class="w-full p-3 border border-gray-300 rounded-lg focus:border-[#1a237e] focus:outline-none"></textarea>
          </div>
          <button type="submit" class="w-full bg-[#1a237e] text-white font-bold py-3 rounded-lg hover:bg-[#283593] transition">
            Send Message
          </button>
        </form>
      </div>

      <!-- Info Section -->
      <div class="space-y-8">
         <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100 hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300">
    <h2 class="text-2xl font-extrabold text-[#1a237e] mb-6 flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-[#00bcd4]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 12.414a4 4 0 10-5.657 5.657l4.243 4.243a8 8 0 115.657-5.657z" />
      </svg>
      Contact Information
    </h2>

    <div class="space-y-6">

      <div class="flex items-start space-x-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-[#009688]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
          <circle cx="12" cy="9" r="2.5" fill="#009688" />
        </svg>
        <div>
          <h3 class="font-semibold text-[#1a237e] text-lg">Address</h3>
          <p class="text-gray-600">Vill. Saidpur PO Sormar Baghala<br>P.S.-Moro, Dist.-Darbhanga<br>Bihar, India</p>
        </div>
      </div>

      <div class="flex items-start space-x-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-[#1976d2]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 0l-4-4m4 4l-4 4" />
        </svg>
        <div>
          <h3 class="font-semibold text-[#1a237e] text-lg">Email</h3>
          <p class="text-gray-600">info@cambridgetrust.org</p>
        </div>
      </div>

      <div class="flex items-start space-x-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-[#ff6f00]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 5h2l3.6 7.59L5.25 19a1 1 0 001.25 1.25L9 18h6l2.5 2.25A1 1 0 0019 19l-3.35-6.41L19 5h2" />
        </svg>
        <div>
          <h3 class="font-semibold text-[#1a237e] text-lg">Phone</h3>
          <p class="text-gray-600">+91 9693387840</p>
        </div>
      </div>
    </div>
  </div>

        <div class="bg-gradient-to-br from-white to-[#e8f5e9] rounded-2xl shadow-xl p-8 border border-gray-100 hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300">
    <h2 class="text-2xl font-extrabold text-[#1a237e] mb-6 flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-[#4caf50]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3h14a2 2 0 012 2v12a2 2 0 01-2 2H9l-4 4V5a2 2 0 012-2z" />
      </svg>
      Registration Details
    </h2>
    <div class="space-y-2 text-gray-700 text-base">
      <p><strong>Registration Date:</strong> 11th July 2014</p>
      <p><strong>Registry Office:</strong> Sub Registry Office, Darbhanga</p>
      <p><strong>Government:</strong> Government of Bihar</p>
      <p><strong>Founder/Trustee:</strong> Md. Tabrej (Sattler)</p>
    </div>
  </div>

         <!-- Donate Now -->
  <div class="relative overflow-hidden bg-gradient-to-r from-[#1a237e] via-[#283593] to-[#3949ab] rounded-3xl p-10 text-center text-white shadow-2xl transition-all duration-300">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/white-diamond.png')]"></div>

    <div class="relative z-10">
      <h3 class="text-2xl font-extrabold mb-3">Want to Support Our Cause?</h3>
      <p class="text-white/90 mb-6 max-w-lg mx-auto">Your support helps us provide quality education and brighter futures for children in need.</p>

      <a href="cause_details.php"
        class="group inline-flex items-center justify-center gap-3 bg-white text-[#1a237e] font-bold py-3 px-8 rounded-full shadow-md hover:bg-[#00bcd4] hover:text-white transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform duration-300 group-hover:scale-110" fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5C2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg>
        Donate Now
      </a>
    </div>

    <!-- Floating SVG Hearts -->
    <div class="absolute bottom-0 left-0 w-full h-full overflow-hidden pointer-events-none">
      <svg class="absolute bottom-0 left-1/2 w-6 h-6 text-pink-400 animate-[float_6s_infinite_ease-in-out]" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5C2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
      </svg>
      <svg class="absolute bottom-5 left-1/3 w-5 h-5 text-green-400 animate-[float_7s_infinite_ease-in-out]" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5C2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
      </svg>
      <svg class="absolute bottom-10 right-1/3 w-5 h-5 text-blue-400 animate-[float_8s_infinite_ease-in-out]" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5C2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
      </svg>
    </div>
  </div>

  <style>
    @keyframes float {
      0% { transform: translateY(0) scale(1); opacity: 0.9; }
      50% { transform: translateY(-40px) scale(1.1); opacity: 1; }
      100% { transform: translateY(-80px) scale(0.9); opacity: 0; }
    }
  </style>
      </div>
    </div>
  </div>
</main>

<!-- Thank You Popup -->
<div id="thankYouModal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-2xl shadow-2xl p-8 text-center max-w-sm mx-auto animate-fadeIn">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 text-green-500 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
    <h2 class="text-2xl font-bold text-[#1a237e] mb-2">Thank You!</h2>
    <p class="text-gray-700 mb-6">Your message has been received. We'll get back to you shortly.</p>
    <button onclick="closeModal()" class="bg-[#1a237e] text-white font-semibold py-2 px-6 rounded-full hover:bg-[#283593] transition">Close</button>
  </div>
</div>

<script>
const contactForm = document.getElementById('contactForm');
const thankYouModal = document.getElementById('thankYouModal');

contactForm.addEventListener('submit', function(e) {
  e.preventDefault(); 
  thankYouModal.classList.remove('hidden'); 
  contactForm.reset(); 
});

function closeModal() {
  thankYouModal.classList.add('hidden');
}
</script>

<style>
@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.9); }
  to { opacity: 1; transform: scale(1); }
}
.animate-fadeIn {
  animation: fadeIn 0.3s ease-out;
}
</style>

<?php include 'includes/footer.php'; ?>
