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
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-[#1a237e] mb-6">Send us a Message</h2>
                    <form action="contact_process.php" method="post" class="space-y-4">
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
                        <button type="submit" class="w-full bg-yellow-400 text-[#1a237e] font-bold py-3 rounded-lg hover:bg-yellow-300 transition">Send Message</button>
                    </form>
                </div>

                <div class="space-y-8">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-[#1a237e] mb-6">Contact Information</h2>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4">
                                <div class="text-2xl text-[#1a237e]">📍</div>
                                <div>
                                    <h3 class="font-semibold text-[#1a237e]">Address</h3>
                                    <p class="text-gray-700">Vill. Jatpur, P.O.-Somra Baghla<br>P.S.-Moro, Dist.-Darbhanga<br>Bihar, India</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="text-2xl text-[#1a237e]">📧</div>
                                <div>
                                    <h3 class="font-semibold text-[#1a237e]">Email</h3>
                                    <p class="text-gray-700">info@cambridgetrust.org</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="text-2xl text-[#1a237e]">📞</div>
                                <div>
                                    <h3 class="font-semibold text-[#1a237e]">Phone</h3>
                                    <p class="text-gray-700">+91 98765 43210</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-[#1a237e] mb-6">Registration Details</h2>
                        <div class="space-y-2 text-gray-700">
                            <p><strong>Registration Date:</strong> 11th July 2014</p>
                            <p><strong>Registry Office:</strong> Sub Registry Office, Darbhanga</p>
                            <p><strong>Government:</strong> Government of Bihar</p>
                            <p><strong>Founder/Trustee:</strong> Md. Tabrizi (Sattler)</p>
                        </div>
                    </div>

                    <div class="bg-yellow-50 rounded-lg p-6 text-center">
                        <h3 class="text-lg font-bold text-[#1a237e] mb-2">Want to Support Our Cause?</h3>
                        <p class="text-gray-700 mb-4">Your donation can make a real difference in a child's education.</p>
                        <a href="cause_details.php" class="bg-yellow-400 text-[#1a237e] font-bold py-2 px-6 rounded-full hover:bg-yellow-300 transition">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>