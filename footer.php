    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-white/10 py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="Logo_Icon.svg" alt="JM Technolab" class="h-10 w-auto">
                        <span class="font-display font-bold text-xl">
                            JM <span class="gradient-text">Technolab</span>
                        </span>
                    </div>
                    <p class="text-gray-400 mb-4 max-w-sm">
                        Empowering businesses with innovative web solutions, software development, and digital marketing strategies.
                    </p>
                    <div class="flex gap-4">
                        <a href="https://facebook.com/jmtechnolab" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-blue-600 transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/jmtechnolab" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-blue-400 transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com/jmtechnolab" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-pink-600 transition-colors"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com/company/jmtechnolab" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-blue-700 transition-colors"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/jmtechnolab" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-gray-700 transition-colors"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="index.php" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="about.php" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="services.php" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="contact.php" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="services.php#web-design" class="hover:text-white transition-colors">Web Design</a></li>
                        <li><a href="services.php#web-app" class="hover:text-white transition-colors">Web Apps</a></li>
                        <li><a href="services.php#software" class="hover:text-white transition-colors">Software Dev</a></li>
                        <li><a href="services.php#crm" class="hover:text-white transition-colors">CRM Solutions</a></li>
                        <li><a href="services.php#digital-marketing" class="hover:text-white transition-colors">Digital Marketing</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-400 text-sm">
                    © <?= date('Y') ?> JM Technolab. All rights reserved.
                </p>
                <div class="flex gap-6 text-sm text-gray-400">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Mobile Menu Toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }

        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg');
                navbar.classList.add('bg-slate-900/95');
            } else {
                navbar.classList.remove('shadow-lg');
                navbar.classList.remove('bg-slate-900/95');
            }
        });

        // Counter Animation
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;
                
                const updateCounter = () => {
                    current += step;
                    if (current < target) {
                        counter.textContent = Math.ceil(current) + (counter.dataset.suffix || '+');
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target + (counter.dataset.suffix || '+');
                    }
                };
                updateCounter();
            });
        }

        // Trigger counter animation when in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const statsSection = document.querySelector('.counter');
        if (statsSection) {
            observer.observe(statsSection.closest('section'));
        }
    </script>
</body>
</html>