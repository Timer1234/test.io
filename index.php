<?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center hero-gradient circuit-pattern pt-20 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-orange-500/20 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-purple-500/10 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 4s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-8 animate-float" data-aos="fade-down">
                <span class="flex h-2 w-2 rounded-full bg-green-500 animate-pulse"></span>
                <span class="text-sm text-gray-300">Available for new projects</span>
            </div>

            <h1 class="font-display text-5xl md:text-7xl font-bold leading-tight mb-6" data-aos="fade-up" data-aos-delay="100">
                Innovating <span class="gradient-text">Tomorrow's</span><br>
                Technology Today
            </h1>

            <p class="mt-6 text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Transform your ideas into powerful digital solutions. We build scalable websites, web applications, and deliver exceptional digital marketing results.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up" data-aos-delay="300">
                <a href="contact.php" class="px-8 py-4 rounded-full gradient-bg text-white font-bold text-lg hover:shadow-2xl hover:shadow-orange-500/25 transition-all transform hover:-translate-y-1 flex items-center gap-2">
                    Start Your Project
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="services.php" class="px-8 py-4 rounded-full border-2 border-white/20 text-white font-bold text-lg hover:bg-white/10 transition-all flex items-center gap-2">
                    <i class="fas fa-play-circle"></i>
                    View Services
                </a>
            </div>

            <!-- Stats -->
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl md:text-5xl font-display font-bold gradient-text counter" data-target="2" data-suffix="+">0</div>
                    <div class="mt-2 text-gray-400">Years Experience</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-4xl md:text-5xl font-display font-bold gradient-text counter" data-target="30" data-suffix="+">0</div>
                    <div class="mt-2 text-gray-400">Projects Delivered</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="text-4xl md:text-5xl font-display font-bold gradient-text counter" data-target="44" data-suffix="+">0</div>
                    <div class="mt-2 text-gray-400">Happy Clients</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="700">
                    <div class="text-4xl md:text-5xl font-display font-bold gradient-text">100%</div>
                    <div class="mt-2 text-gray-400">Satisfaction</div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-2xl text-gray-400"></i>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="py-24 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="font-display text-4xl md:text-5xl font-bold mb-4">Our <span class="gradient-text">Services</span></h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">Comprehensive technology solutions tailored to accelerate your business growth</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card glass-card p-8 rounded-2xl transition-all duration-300 cursor-pointer group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 rounded-2xl gradient-bg flex items-center justify-center text-3xl mb-6 transition-transform duration-300 group-hover:scale-110">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold mb-3 group-hover:text-orange-400 transition-colors">Website Design & Development</h3>
                    <p class="text-gray-400">Custom, responsive websites that captivate users and drive conversions.</p>
                </div>

                <!-- Service 2 -->
                <div class="service-card glass-card p-8 rounded-2xl transition-all duration-300 cursor-pointer group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 rounded-2xl gradient-bg flex items-center justify-center text-3xl mb-6 transition-transform duration-300 group-hover:scale-110">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold mb-3 group-hover:text-orange-400 transition-colors">Web Application Development</h3>
                    <p class="text-gray-400">Powerful, scalable web applications built with modern technologies.</p>
                </div>

                <!-- Service 3 -->
                <div class="service-card glass-card p-8 rounded-2xl transition-all duration-300 cursor-pointer group" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 rounded-2xl gradient-bg flex items-center justify-center text-3xl mb-6 transition-transform duration-300 group-hover:scale-110">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold mb-3 group-hover:text-orange-400 transition-colors">Software Application Development</h3>
                    <p class="text-gray-400">Custom software solutions designed to streamline your business operations.</p>
                </div>

                <!-- Service 4 -->
                <div class="service-card glass-card p-8 rounded-2xl transition-all duration-300 cursor-pointer group" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 rounded-2xl gradient-bg flex items-center justify-center text-3xl mb-6 transition-transform duration-300 group-hover:scale-110">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold mb-3 group-hover:text-orange-400 transition-colors">CRM Development</h3>
                    <p class="text-gray-400">Tailored CRM systems to manage customer relationships effectively.</p>
                </div>

                <!-- Service 5 -->
                <div class="service-card glass-card p-8 rounded-2xl transition-all duration-300 cursor-pointer group" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 rounded-2xl gradient-bg flex items-center justify-center text-3xl mb-6 transition-transform duration-300 group-hover:scale-110">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold mb-3 group-hover:text-orange-400 transition-colors">Digital Marketing</h3>
                    <p class="text-gray-400">SEO, platform handling & PPC marketing to boost your online presence.</p>
                </div>
            </div>

            <div class="text-center mt-12" data-aos="fade-up">
                <a href="services.php" class="inline-flex items-center gap-2 text-orange-500 font-semibold hover:gap-4 transition-all">
                    View All Services <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="about" class="py-24 bg-slate-800/50 relative overflow-hidden">
        <div class="absolute inset-0 circuit-pattern opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="font-display text-4xl md:text-5xl font-bold mb-6">
                        Why Choose <span class="gradient-text">JM Technolab</span>?
                    </h2>
                    <p class="text-gray-400 text-lg mb-8">
                        We combine technical expertise with business acumen to deliver solutions that drive real results.
                    </p>

                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full gradient-bg flex items-center justify-center">
                                <i class="fas fa-rocket text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2">Agile Methodology</h4>
                                <p class="text-gray-400">Iterative development with regular feedback and continuous improvement.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full gradient-bg flex items-center justify-center">
                                <i class="fas fa-shield-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2">Quality Assurance</h4>
                                <p class="text-gray-400">Rigorous testing protocols ensuring bug-free, high-performance applications.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full gradient-bg flex items-center justify-center">
                                <i class="fas fa-headset text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2">24/7 Support</h4>
                                <p class="text-gray-400">Round-the-clock technical support and maintenance services.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left">
                    <div class="absolute inset-0 gradient-bg rounded-3xl transform rotate-3 opacity-20"></div>
                    <div class="relative glass-card rounded-3xl p-8">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800" alt="Team working" class="rounded-2xl w-full">
                        <div class="mt-6 grid grid-cols-3 gap-4 text-center">
                            <div class="p-4 rounded-xl bg-white/5">
                                <div class="text-3xl font-bold gradient-text">2+</div>
                                <div class="text-sm text-gray-400">Years Exp.</div>
                            </div>
                            <div class="p-4 rounded-xl bg-white/5">
                                <div class="text-3xl font-bold gradient-text">30+</div>
                                <div class="text-sm text-gray-400">Projects</div>
                            </div>
                            <div class="p-4 rounded-xl bg-white/5">
                                <div class="text-3xl font-bold gradient-text">44+</div>
                                <div class="text-sm text-gray-400">Clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 gradient-bg opacity-90"></div>
        <div class="absolute inset-0 circuit-pattern opacity-20"></div>
        
        <div class="max-w-5xl mx-auto px-4 text-center relative">
            <h2 class="font-display text-4xl md:text-6xl font-bold mb-6" data-aos="fade-up">Ready to Start Your Project?</h2>
            <p class="text-xl text-white/90 mb-10" data-aos="fade-up" data-aos-delay="100">Let's discuss how we can help transform your ideas into reality. Get a free consultation today.</p>
            
            <a href="contact.php" class="px-8 py-4 rounded-full bg-white text-slate-900 font-bold text-lg hover:shadow-2xl transition-all transform hover:-translate-y-1 flex items-center justify-center gap-2 mx-auto" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-envelope"></i>
                Get in Touch
            </a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>