    <footer class="bg-gray-900 text-white">
        <!-- Main Footer Content -->
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Organization Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="cpeduw-Photoroom.png" alt="Trust Logo" style="width: 80px; height: 80px;">
                        <div>
                            <h3 class="text-xl font-bold">Cambridge Trust</h3>
                            <p class="text-gray-400 text-sm">Public educational and welfare</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-4 leading-relaxed">
                        We are a registered charitable trust dedicated to providing quality education and welfare support to underprivileged children in Bihar, India. Every donation directly impacts a child's future.
                    </p>
                    
                    <!-- Trust Credentials -->
                    <div class="bg-gray-800 p-4 rounded-lg mb-4">
                        <h4 class="font-semibold text-green-400 mb-2 flex items-center gap-2">
                            <span>✓</span>
                            <span>Official Registration</span>
                        </h4>
                        <div class="text-sm text-gray-300 space-y-1">
                            <p>Registered: 11th July 2014</p>
                            <p>Sub Registry Office, Darbhanga, Govt. of Bihar</p>
                            <p>Founder/Trustee: Md. Tabrizi (Sattler)</p>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div>
                        <h4 class="font-semibold mb-3">Follow Our Journey</h4>
                        <div class="flex gap-3">
                            <a href="https://www.facebook.com/share/1ameNW6Wmn/"  target="_blank" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                                <span class="text-white font-bold">f</span>
                            </a>
                            <a href="#"  target="_blank" class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                                <span class="text-white font-bold">x</span>
                            </a>
                            <a href="#" class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center hover:bg-pink-700 transition-colors">
                                <span class="text-white font-bold">i</span>
                            </a>
                            <a href="#" class="w-10 h-10 bg-blue-700 rounded-full flex items-center justify-center hover:bg-blue-800 transition-colors">
                                <span class="text-white font-bold">in</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold mb-4 text-lg">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="about.php" class="text-gray-300 hover:text-white transition-colors flex items-center gap-2">
                            <span>→</span>
                            <span>About Us</span>
                        </a></li>
                        <li><a href="projects.php" class="text-gray-300 hover:text-white transition-colors flex items-center gap-2">
                            <span>→</span>
                            <span>Our Projects</span>
                        </a></li>
                        <li><a href="cause_details.php" class="text-gray-300 hover:text-white transition-colors flex items-center gap-2">
                            <span>→</span>
                            <span>How to Donate</span>
                        </a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors flex items-center gap-2">
                            <span>→</span>
                            <span>Privacy Policy</span>
                        </a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors flex items-center gap-2">
                            <span>→</span>
                            <span>Terms & Conditions</span>
                        </a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors flex items-center gap-2">
                            <span>→</span>
                            <span>FAQs</span>
                        </a></li>
                    </ul>
                </div>

                <!-- Contact & Donate -->
                <div>
                    <h4 class="font-semibold mb-4 text-lg">Get Involved</h4>
                    
                    <!-- Donation Methods -->
                    <div class="mb-6">
                        <h5 class="font-semibold mb-3 text-yellow-400 flex items-center gap-2">
                            <span>❤️</span>
                            <span>Donate Securely</span>
                        </h5>
                        <a href="cause_details.php" class="block bg-gradient-to-r from-red-500 to-pink-500 text-white text-center py-3 px-4 rounded-lg font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-200 mb-3">
                            Donate Now
                        </a>
                        <div class="flex gap-2 text-xs text-gray-400">
                            <span>🔒 Secure</span>
                            <span>•</span>
                            <span>💳 All Cards</span>
                            <span>•</span>
                            <span>📋 Receipt</span>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h5 class="font-semibold mb-3">Contact Us</h5>
                        <div class="space-y-2 text-sm text-gray-300">
                            <div class="flex items-start gap-2">
                                <span>📍</span>
                                <div>
                                    <p>Vill. Jatpur, P.O.-Somra Baghla</p>
                                    <p>P.S.-Moro, Dist.-Darbhanga, Bihar</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span>📧</span>
                                <span>info@cambridgetrust.org</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span>📞</span>
                                <span>+91 98765 43210</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800">
            <div class="container mx-auto px-4 py-6">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-sm text-gray-400">
                        <p>&copy; <?= date('Y') ?> Cambridge Public Education and Welfare Trust. All rights reserved.</p>
                    </div>
                    <div class="flex items-center gap-6 text-sm text-gray-400">
                        <div class="flex items-center gap-2">
                            <span class="text-green-500">✓</span>
                            <span>80G Tax Exemption</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-green-500">✓</span>
                            <span>100% Secure</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-green-500">✓</span>
                            <span>Transparent</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>