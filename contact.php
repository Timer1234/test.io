<?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="font-display text-5xl md:text-6xl font-bold mb-6" data-aos="fade-down">Get In <span class="gradient-text">Touch</span></h1>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">Let's discuss your project. We're here to help and answer any questions.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                
                <!-- Contact Form -->
                <div class="glass-card p-10 rounded-3xl" data-aos="fade-right">
                    <h2 class="font-display text-3xl font-bold mb-8">Send Us a Message</h2>
                    
                    <?php if(isset($_GET['success'])): ?>
                        <div class="bg-green-500/20 border border-green-500/50 text-green-400 px-4 py-3 rounded-xl mb-6">
                            <i class="fas fa-check-circle mr-2"></i>Thank you! Your message has been sent successfully.
                        </div>
                    <?php endif; ?>
                    
                    <?php if(isset($_GET['error'])): ?>
                        <div class="bg-red-500/20 border border-red-500/50 text-red-400 px-4 py-3 rounded-xl mb-6">
                            <i class="fas fa-exclamation-circle mr-2"></i>Oops! Something went wrong. Please try again.
                        </div>
                    <?php endif; ?>
                    
                    <form action="send-mail.php" method="POST" class="space-y-6" id="contactForm">
                        <div>
                            <label class="block text-sm font-medium mb-2">Full Name *</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl bg-slate-800/50 border border-white/10 focus:border-orange-500 focus:outline-none transition-colors" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Email Address *</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl bg-slate-800/50 border border-white/10 focus:border-orange-500 focus:outline-none transition-colors" placeholder="john@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Phone Number</label>
                            <input type="tel" name="phone" class="w-full px-4 py-3 rounded-xl bg-slate-800/50 border border-white/10 focus:border-orange-500 focus:outline-none transition-colors" placeholder="+91 12345 67890">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Service Interested In</label>
                            <select name="service" class="w-full px-4 py-3 rounded-xl bg-slate-800/50 border border-white/10 focus:border-orange-500 focus:outline-none transition-colors">
                                <option value="">Select a service</option>
                                <option value="website-design">Website Design & Development</option>
                                <option value="web-app">Web Application Development</option>
                                <option value="software">Software Application Development</option>
                                <option value="crm">CRM Development</option>
                                <option value="digital-marketing">Digital Marketing</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Message *</label>
                            <textarea name="message" required rows="4" class="w-full px-4 py-3 rounded-xl bg-slate-800/50 border border-white/10 focus:border-orange-500 focus:outline-none transition-colors" placeholder="Tell us about your project..."></textarea>
                        </div>
                        <button type="submit" class="w-full py-4 rounded-xl gradient-bg text-white font-bold text-lg hover:shadow-2xl hover:shadow-orange-500/25 transition-all transform hover:-translate-y-1">
                            Send Message <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="space-y-8" data-aos="fade-left">
                    <div>
                        <h2 class="font-display text-3xl font-bold mb-8">Contact Information</h2>
                        <p class="text-gray-400 text-lg mb-8">Fill out the form and our team will get back to you within 24 hours.</p>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-14 h-14 rounded-xl gradient-bg flex items-center justify-center text-2xl flex-shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Office Address</h4>
                                <p class="text-gray-400">611, Ugati Corporate Park,<br>Kudasan, Gandhinagar,<br>Gujarat 382424, INDIA</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-14 h-14 rounded-xl gradient-bg flex items-center justify-center text-2xl flex-shrink-0">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Phone Numbers</h4>
                                <p class="text-gray-400">+91 81000 03535<br>+91 92655 48214</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-14 h-14 rounded-xl gradient-bg flex items-center justify-center text-2xl flex-shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Email Address</h4>
                                <p class="text-gray-400">info@jmtechnolab.com</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-14 h-14 rounded-xl gradient-bg flex items-center justify-center text-2xl flex-shrink-0">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Business Hours</h4>
                                <p class="text-gray-400">Monday - Saturday: 9:00 AM - 6:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="pt-8 border-t border-white/10">
                        <h4 class="font-bold text-lg mb-4">Follow Us</h4>
                        <div class="flex gap-4">
                            <a href="https://facebook.com/jmtechnolab" target="_blank" class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-blue-600 transition-all hover:scale-110">
                                <i class="fab fa-facebook-f text-xl"></i>
                            </a>
                            <a href="https://twitter.com/jmtechnolab" target="_blank" class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-blue-400 transition-all hover:scale-110">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="https://instagram.com/jmtechnolab" target="_blank" class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-pink-600 transition-all hover:scale-110">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="https://linkedin.com/company/jmtechnolab" target="_blank" class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-blue-700 transition-all hover:scale-110">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                            <a href="https://github.com/jmtechnolab" target="_blank" class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-gray-700 transition-all hover:scale-110">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                            <a href="https://wa.me/919265548214" target="_blank" class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-green-600 transition-all hover:scale-110">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-slate-800/50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="glass-card p-4 rounded-3xl" data-aos="fade-up">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.1234567890123!2d72.65432109876543!3d23.215678901234567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDEyJzU2LjQiTiA3MsKwMzknMTUuNiJF!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
                    width="100%" 
                    height="450" 
                    style="border:0; border-radius: 1rem;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>