<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JM Technolab - Innovative Technology Solutions</title>
    <meta name="description" content="JM Technolab - Your trusted partner for web development, software solutions, CRM, and digital marketing services.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Space Grotesk', 'sans-serif'],
                    },
                    animation: {
                        'gradient': 'gradient 8s linear infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        gradient: {
                            '0%, 100%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6 0%, #f97316 50%, #7c3aed 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #f97316 50%, #7c3aed 100%);
            background-size: 200% 200%;
            animation: gradient 8s ease infinite;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .circuit-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%233b82f6' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .hero-gradient {
            background: radial-gradient(ellipse at top, rgba(59, 130, 246, 0.15), transparent 50%),
                        radial-gradient(ellipse at bottom right, rgba(249, 115, 22, 0.1), transparent 50%);
        }
        .nav-blur {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px -12px rgba(249, 115, 22, 0.25);
        }
        .counter {
            font-variant-numeric: tabular-nums;
        }
    </style>
</head>
<body class="font-sans antialiased bg-slate-900 text-white overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 nav-blur bg-slate-900/80 border-b border-white/10 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3 cursor-pointer" onclick="window.location.href='index.php'">
                    <img src="Logo_Icon.svg" alt="JM Technolab" class="h-12 w-auto">
                    <span class="font-display font-bold text-2xl tracking-tight">
                        JM <span class="gradient-text">Technolab</span>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="<?= $currentPage == 'index.php' ? 'text-white font-medium' : 'text-gray-300 hover:text-white transition-colors' ?>">Home</a>
                    <a href="about.php" class="<?= $currentPage == 'about.php' ? 'text-white font-medium' : 'text-gray-300 hover:text-white transition-colors' ?>">About</a>
                    <a href="services.php" class="<?= $currentPage == 'services.php' ? 'text-white font-medium' : 'text-gray-300 hover:text-white transition-colors' ?>">Services</a>
                    <a href="contact.php" class="px-6 py-3 rounded-full gradient-bg text-white font-semibold hover:shadow-lg hover:shadow-orange-500/25 transition-all transform hover:-translate-y-0.5">
                        Get Started
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button onclick="toggleMobileMenu()" class="text-gray-300 hover:text-white focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-slate-900/95 border-b border-white/10">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="index.php" class="block px-3 py-2 <?= $currentPage == 'index.php' ? 'text-white bg-white/10' : 'text-gray-300 hover:bg-white/10' ?> rounded-lg">Home</a>
                <a href="about.php" class="block px-3 py-2 <?= $currentPage == 'about.php' ? 'text-white bg-white/10' : 'text-gray-300 hover:bg-white/10' ?> rounded-lg">About</a>
                <a href="services.php" class="block px-3 py-2 <?= $currentPage == 'services.php' ? 'text-white bg-white/10' : 'text-gray-300 hover:bg-white/10' ?> rounded-lg">Services</a>
                <a href="contact.php" class="block px-3 py-2 text-orange-500 font-semibold">Contact</a>
            </div>
        </div>
    </nav>