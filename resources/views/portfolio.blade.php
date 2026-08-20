<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Encoding" content="IE=edge">
    <title>Eka Wahyuning Tiyasa | Web Developer & Atlet Pencak Silat Nasional</title>
    
    <!-- Meta Descriptions for SEO -->
    <meta name="description" content="Portofolio Resmi Eka Wahyuning Tiyasa - Mahasiswa S1 Teknik Informatika Universitas Pamulang (Semester 7), Web Developer Laravel, serta Atlet & Official Pencak Silat Tingkat Nasional.">
    <meta name="keywords" content="Eka Wahyuning Tiyasa, Portofolio Laravel, Web Developer UNPAM, Atlet Pencak Silat, Official Pencak Silat, Tailwind CSS, Universitas Pamulang">
    <meta name="author" content="Eka Wahyuning Tiyasa">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Eka Wahyuning Tiyasa | Web Developer & Atlet Pencak Silat Nasional">
    <meta property="og:description" content="Portofolio Eka Wahyuning Tiyasa - Menggabungkan presisi logika pemrograman web Laravel dengan ketahanan disiplin atlet pencak silat nasional.">
    <meta property="og:image" content="{{ asset('images/profile-eka.jpg') }}">
    <meta property="og:type" content="website">

    <!-- Google Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Alpine.js & FontAwesome Icons -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CSS & Asset Resolution (Vite or Soft Pink Fallback) -->
    @if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Plus Jakarta Sans', 'system-ui', 'sans-serif'],
                        },
                        colors: {
                            rose: {
                                950: '#140C13',
                                900: '#1E121C',
                                800: '#2F192B',
                                700: '#4F2145',
                            }
                        }
                    }
                }
            }
        </script>
        <style>
            body {
                background-color: #130E14;
            }
            .glass-card {
                background: rgba(28, 19, 27, 0.85);
                backdrop-filter: blur(16px);
                -webkit-backdrop-filter: blur(16px);
                border: 1px solid rgba(244, 114, 182, 0.15);
            }
            .glass-card-hover {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            .glass-card-hover:hover {
                transform: translateY(-4px);
                border-color: rgba(244, 114, 182, 0.4);
                box-shadow: 0 20px 40px -15px rgba(244, 114, 182, 0.25);
            }
            .glass-nav {
                background: rgba(18, 12, 18, 0.90);
                backdrop-filter: blur(20px);
                border-bottom: 1px solid rgba(244, 114, 182, 0.15);
            }
            .text-gradient-pink {
                background: linear-gradient(135deg, #F472B6 0%, #FB7185 50%, #F43F5E 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .text-gradient-gold {
                background: linear-gradient(135deg, #FDE68A 0%, #F59E0B 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .bg-grid-pattern {
                background-size: 40px 40px;
                background-image: 
                linear-gradient(to right, rgba(244, 114, 182, 0.04) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(244, 114, 182, 0.04) 1px, transparent 1px);
            }
            @keyframes pulseGlow {
                0%, 100% { opacity: 0.35; filter: blur(70px); }
                50% { opacity: 0.65; filter: blur(90px); }
            }
            .animate-pulse-glow {
                animation: pulseGlow 5s ease-in-out infinite;
            }
        </style>
    @endif
</head>
<body class="bg-[#130E14] text-slate-100 font-sans antialiased selection:bg-pink-500 selection:text-white relative overflow-x-hidden min-h-screen">

    <!-- Soft Pink Ambient Glowing Background Spheres -->
    <div class="fixed top-0 left-1/4 w-[550px] h-[550px] bg-pink-500/10 rounded-full blur-[130px] pointer-events-none -z-10 animate-pulse-glow"></div>
    <div class="fixed bottom-0 right-1/4 w-[650px] h-[650px] bg-rose-500/10 rounded-full blur-[150px] pointer-events-none -z-10 animate-pulse-glow"></div>

    <!-- MAIN CONTAINER WITH ALPINE JS STATE -->
    <div x-data="{ 
        activeTab: 'all', 
        mobileMenuOpen: false, 
        activeModalImage: null, 
        activeModalTitle: '',
        activeProjectModal: null,
        scrolled: false
    }" @scroll.window="scrolled = (window.pageYOffset > 20)">

        <!-- NAVBAR -->
        <header :class="scrolled ? 'glass-nav py-3 shadow-lg shadow-pink-950/40' : 'bg-transparent py-4 sm:py-5'" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <!-- Brand Logo -->
                    <a href="#hero" class="flex items-center gap-3 group shrink-0">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-pink-400 via-rose-400 to-amber-300 p-[2px] transition-transform duration-300 group-hover:scale-105 shadow-md shadow-pink-500/20">
                            <div class="w-full h-full bg-[#130E14] rounded-[10px] flex items-center justify-center font-bold text-pink-400 text-sm">
                                EWT
                            </div>
                        </div>
                        <div>
                            <span class="font-bold text-base sm:text-lg tracking-tight text-white group-hover:text-pink-300 transition-colors">Eka Wahyuning Tiyasa</span>
                            <span class="block text-[11px] text-pink-300/70 font-medium">UNPAM • Teknik Informatika</span>
                        </div>
                    </a>

                    <!-- Desktop Navigation Links (Large Screens) -->
                    <nav class="hidden lg:flex items-center gap-1 bg-rose-950/40 p-1.5 rounded-full border border-pink-500/20 backdrop-blur-md">
                        <a href="#hero" class="px-4 py-2 text-xs font-semibold text-slate-200 hover:text-pink-300 rounded-full hover:bg-pink-500/10 transition-all">Beranda</a>
                        <a href="#about" class="px-4 py-2 text-xs font-semibold text-slate-200 hover:text-pink-300 rounded-full hover:bg-pink-500/10 transition-all">Tentang Saya</a>
                        <a href="#projects" class="px-4 py-2 text-xs font-semibold text-slate-200 hover:text-pink-300 rounded-full hover:bg-pink-500/10 transition-all">Proyek Web</a>
                        <a href="#achievements" class="px-4 py-2 text-xs font-semibold text-slate-200 hover:text-pink-300 rounded-full hover:bg-pink-500/10 transition-all">Prestasi & Galeri</a>
                        <a href="#certificates" class="px-4 py-2 text-xs font-semibold text-slate-200 hover:text-pink-300 rounded-full hover:bg-pink-500/10 transition-all">Sertifikat</a>
                        <a href="#contact" class="px-4 py-2 text-xs font-semibold text-slate-200 hover:text-pink-300 rounded-full hover:bg-pink-500/10 transition-all">Kontak</a>
                    </nav>

                    <!-- Header Actions (Large Screens) -->
                    <div class="hidden lg:flex items-center gap-3">
                        <a href="{{ route('cv.download') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-xs font-bold text-white bg-gradient-to-r from-pink-500 via-rose-400 to-pink-600 hover:from-pink-400 hover:to-rose-500 shadow-md shadow-pink-500/25 hover:shadow-pink-500/40 transition-all duration-300 hover:-translate-y-0.5">
                            <i class="fa-solid fa-download"></i> Unduh CV PDF
                        </a>
                    </div>

                    <!-- Mobile Hamburger Button -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle Mobile Menu" class="lg:hidden p-2.5 rounded-xl bg-rose-950/80 text-pink-300 border border-pink-500/30 hover:text-white focus:outline-none shadow-md">
                        <i x-show="!mobileMenuOpen" class="fa-solid fa-bars text-lg"></i>
                        <i x-show="mobileMenuOpen" class="fa-solid fa-xmark text-lg"></i>
                    </button>
                </div>

                <!-- Mobile Menu Dropdown -->
                <div x-show="mobileMenuOpen" 
                     @click.outside="mobileMenuOpen = false"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 -translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 -translate-y-4"
                     class="lg:hidden mt-3 p-4 glass-card rounded-2xl border border-pink-500/30 shadow-2xl flex flex-col gap-2 bg-[#170E17]/95 backdrop-blur-xl">
                    <a @click="mobileMenuOpen = false" href="#hero" class="px-4 py-2.5 text-sm font-medium text-slate-200 hover:text-pink-300 hover:bg-pink-500/10 rounded-xl flex items-center justify-between">
                        <span>Beranda</span>
                        <i class="fa-solid fa-chevron-right text-xs text-pink-500/50"></i>
                    </a>
                    <a @click="mobileMenuOpen = false" href="#about" class="px-4 py-2.5 text-sm font-medium text-slate-200 hover:text-pink-300 hover:bg-pink-500/10 rounded-xl flex items-center justify-between">
                        <span>Tentang Saya</span>
                        <i class="fa-solid fa-chevron-right text-xs text-pink-500/50"></i>
                    </a>
                    <a @click="mobileMenuOpen = false" href="#projects" class="px-4 py-2.5 text-sm font-medium text-slate-200 hover:text-pink-300 hover:bg-pink-500/10 rounded-xl flex items-center justify-between">
                        <span>Proyek Web</span>
                        <i class="fa-solid fa-chevron-right text-xs text-pink-500/50"></i>
                    </a>
                    <a @click="mobileMenuOpen = false" href="#achievements" class="px-4 py-2.5 text-sm font-medium text-slate-200 hover:text-pink-300 hover:bg-pink-500/10 rounded-xl flex items-center justify-between">
                        <span>Prestasi & Galeri</span>
                        <i class="fa-solid fa-chevron-right text-xs text-pink-500/50"></i>
                    </a>
                    <a @click="mobileMenuOpen = false" href="#certificates" class="px-4 py-2.5 text-sm font-medium text-slate-200 hover:text-pink-300 hover:bg-pink-500/10 rounded-xl flex items-center justify-between">
                        <span>Sertifikat</span>
                        <i class="fa-solid fa-chevron-right text-xs text-pink-500/50"></i>
                    </a>
                    <a @click="mobileMenuOpen = false" href="#contact" class="px-4 py-2.5 text-sm font-medium text-slate-200 hover:text-pink-300 hover:bg-pink-500/10 rounded-xl flex items-center justify-between">
                        <span>Kontak</span>
                        <i class="fa-solid fa-chevron-right text-xs text-pink-500/50"></i>
                    </a>
                    <div class="pt-3 mt-1 border-t border-pink-500/20">
                        <a href="{{ route('cv.download') }}" class="w-full py-3 text-center text-xs font-bold text-white bg-gradient-to-r from-pink-500 via-rose-400 to-pink-600 rounded-xl shadow-lg flex items-center justify-center gap-2">
                            <i class="fa-solid fa-download"></i> Unduh CV PDF (Eka)
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- HERO SECTION -->
        <section id="hero" class="relative pt-32 pb-20 md:pt-40 md:pb-28 overflow-hidden bg-grid-pattern">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Hero Content Left -->
                    <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                        <!-- Status Badges -->
                        <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2.5">
                            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-extrabold bg-pink-500/20 text-pink-300 border border-pink-500/40 uppercase tracking-wider backdrop-blur-sm">
                                <span class="w-2 h-2 rounded-full bg-pink-400 animate-ping"></span>
                                Portofolio Eka Wahyuning Tiyasa
                            </span>
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-pink-500/10 text-pink-300 border border-pink-500/30 backdrop-blur-sm">
                                S1 Teknik Informatika (UNPAM Sem 7)
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-sky-500/10 text-sky-300 border border-sky-500/30 backdrop-blur-sm">
                                <i class="fa-solid fa-graduation-cap text-sky-300"></i>
                                MAN 4 Bekasi (MIPA 85.00)
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-amber-500/10 text-amber-300 border border-amber-500/30 backdrop-blur-sm">
                                <i class="fa-solid fa-trophy text-amber-300"></i>
                                Atlet & Official Silat Nasional
                            </span>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight">
                            Full-Stack Web Developer & <span class="text-gradient-pink">Atlet Silat Nasional</span>
                        </h1>

                        <!-- Subtitle Bio -->
                        <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto lg:mx-0 leading-relaxed font-normal">
                            Saya mengembangkan sistem informasi & aplikasi web modern berbasis Laravel dengan presisi tinggi. Memiliki rekam jejak akademik S1 IT UNPAM, Pemegang Hak Cipta (HKI) Kemenkumham RI, Penulis 2 Jurnal Ilmiah, serta ketahanan disiplin peraih juara kejuaraan silat nasional.
                        </p>

                        <!-- Action Buttons & Socials -->
                        <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-3">
                            <a href="#projects" class="px-7 py-3.5 rounded-full text-sm font-bold text-white bg-gradient-to-r from-pink-500 via-rose-400 to-pink-600 hover:from-pink-400 hover:to-rose-500 shadow-xl shadow-pink-500/25 hover:shadow-pink-500/40 transition-all duration-300 hover:-translate-y-1 flex items-center gap-2">
                                <i class="fa-solid fa-code"></i> Lihat Proyek Web
                            </a>
                            <button @click="activeModalImage = '{{ asset('images/cv-eka.jpg') }}'; activeModalTitle = 'Curriculum Vitae - Eka Wahyuning Tiyasa'" class="px-6 py-3.5 rounded-full text-sm font-bold text-white bg-rose-900/80 hover:bg-rose-800 border border-pink-500/40 transition-all duration-300 hover:-translate-y-1 flex items-center gap-2 shadow-lg">
                                <i class="fa-solid fa-eye text-pink-300"></i> Lihat CV Graphic
                            </button>
                            <a href="{{ route('cv.download') }}" class="px-6 py-3.5 rounded-full text-sm font-bold text-pink-200 bg-rose-950/60 hover:bg-rose-900/60 border border-pink-500/30 hover:border-pink-400 transition-all duration-300 hover:-translate-y-1 flex items-center gap-2">
                                <i class="fa-solid fa-file-arrow-down text-pink-400"></i> Unduh CV
                            </a>
                            <div class="flex items-center gap-2">
                                <a href="{{ $profile['github'] ?? 'https://github.com/wahyuning004' }}" target="_blank" class="w-11 h-11 rounded-full bg-rose-950/60 border border-pink-500/30 hover:border-pink-400 text-pink-300 hover:text-white flex items-center justify-center transition-all hover:scale-110 shadow-md" title="GitHub Profile">
                                    <i class="fa-brands fa-github text-lg"></i>
                                </a>
                                <a href="{{ $profile['linkedin'] }}" target="_blank" class="w-11 h-11 rounded-full bg-rose-950/60 border border-pink-500/30 hover:border-pink-400 text-pink-300 hover:text-white flex items-center justify-center transition-all hover:scale-110 shadow-md" title="LinkedIn Profile">
                                    <i class="fa-brands fa-linkedin-in text-lg"></i>
                                </a>
                                <a href="{{ $profile['instagram'] }}" target="_blank" class="w-11 h-11 rounded-full bg-rose-950/60 border border-pink-500/30 hover:border-pink-400 text-pink-300 hover:text-white flex items-center justify-center transition-all hover:scale-110 shadow-md" title="Instagram Profile">
                                    <i class="fa-brands fa-instagram text-lg"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Highlights Micro Stats -->
                        <div class="pt-8 grid grid-cols-3 gap-4 border-t border-pink-500/20">
                            <div>
                                <div class="text-2xl sm:text-3xl font-extrabold text-pink-400">S1 IT UNPAM</div>
                                <div class="text-xs text-slate-400 mt-1">Teknik Informatika Sem 7</div>
                            </div>
                            <div>
                                <div class="text-2xl sm:text-3xl font-extrabold text-sky-400">HKI & Jurnal</div>
                                <div class="text-xs text-slate-400 mt-1">HKI Kemenkumham & JRIIN/APPA</div>
                            </div>
                            <div>
                                <div class="text-2xl sm:text-3xl font-extrabold text-amber-400">Juara 1 & 2</div>
                                <div class="text-xs text-slate-400 mt-1">Medali Nasional & Official CNN</div>
                            </div>
                        </div>
                    </div>

                    <!-- Hero Card Right (Formal Portrait Photo & Credentials Badges) -->
                    <div class="lg:col-span-5 relative flex justify-center">
                        <div class="relative w-full max-w-md">
                            <!-- Background Soft Pink Glow -->
                            <div class="absolute -inset-1.5 bg-gradient-to-r from-pink-500 via-rose-400 to-amber-400 rounded-3xl blur-xl opacity-35 animate-pulse"></div>
                            
                            <div class="relative glass-card rounded-3xl p-6 border border-pink-500/30 shadow-2xl overflow-hidden">
                                <!-- Top Bar Badge -->
                                <div class="flex items-center justify-between pb-4 border-b border-pink-500/20">
                                    <div class="flex items-center gap-2">
                                        <span class="w-3 h-3 rounded-full bg-pink-500"></span>
                                        <span class="w-3 h-3 rounded-full bg-rose-400"></span>
                                        <span class="w-3 h-3 rounded-full bg-amber-400"></span>
                                    </div>
                                    <span class="text-xs font-semibold text-pink-300/80 flex items-center gap-1.5">
                                        <i class="fa-solid fa-circle-check text-pink-400 text-[11px]"></i> Profil Resmi
                                    </span>
                                </div>

                                <!-- Image Container (Formal Portrait Pas Foto - Completely Uncovered Face) -->
                                <div class="mt-4 relative rounded-2xl overflow-hidden border border-pink-500/30 group">
                                    <img src="{{ asset('images/profile-eka.jpg') }}" 
                                         alt="Eka Wahyuning Tiyasa" 
                                         class="w-full h-[360px] object-cover object-[center_10%] transform transition-transform duration-500 group-hover:scale-105"
                                         onerror="this.src='{{ asset('images/profile-eka.png') }}'">
                                </div>

                                <div class="mt-4 p-3.5 rounded-2xl bg-rose-950/40 border border-pink-500/20 text-left space-y-1">
                                    <div class="flex items-center justify-between gap-2">
                                        <h3 class="text-base font-extrabold text-white">Eka Wahyuning Tiyasa</h3>
                                        <span class="px-2.5 py-0.5 rounded-md text-[10px] font-extrabold uppercase tracking-wider bg-pink-500 text-white shadow-md shrink-0">
                                            Web Developer & Silat Athlete
                                        </span>
                                    </div>
                                    <p class="text-xs text-pink-200/80">S1 Teknik Informatika UNPAM • Alumni MAN 4 Bekasi</p>
                                </div>

                                <!-- Floating Interactive Badges -->
                                <div class="mt-5 space-y-3">
                                    <div class="flex items-center gap-3 p-3 rounded-xl bg-rose-950/60 border border-pink-500/20 hover:border-pink-400/50 transition-colors">
                                        <div class="w-10 h-10 rounded-lg bg-sky-500/20 text-sky-300 flex items-center justify-center shrink-0">
                                            <i class="fa-solid fa-file-contract text-lg"></i>
                                        </div>
                                        <div class="text-left text-xs">
                                            <span class="font-semibold text-white block">Hak Cipta (HKI) Kemenkumham RI</span>
                                            <span class="text-slate-400">EC002026090327 • Y2O Water Solution</span>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-3 p-3 rounded-xl bg-rose-950/60 border border-pink-500/20 hover:border-pink-400/50 transition-colors">
                                        <div class="w-10 h-10 rounded-lg bg-emerald-500/20 text-emerald-300 flex items-center justify-center shrink-0">
                                            <i class="fa-solid fa-book-bookmark text-lg"></i>
                                        </div>
                                        <div class="text-left text-xs">
                                            <span class="font-semibold text-white block">Penulis Jurnal Ilmiah (JRIIN & APPA)</span>
                                            <span class="text-slate-400">SDN Bantarkambing 03 & SMPN 2 Kemang</span>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-3 p-3 rounded-xl bg-rose-950/60 border border-pink-500/20 hover:border-pink-400/50 transition-colors">
                                        <div class="w-10 h-10 rounded-lg bg-amber-500/20 text-amber-300 flex items-center justify-center shrink-0">
                                            <i class="fa-solid fa-trophy text-lg"></i>
                                        </div>
                                        <div class="text-left text-xs">
                                            <span class="font-semibold text-white block">Official CNN Piala Presiden & Coach Kemenpora</span>
                                            <span class="text-slate-400">Medali Emas Juara 1 & 2 Tingkat Nasional</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ABOUT ME SECTION -->
        <section id="about" class="py-20 relative bg-rose-950/20 border-y border-pink-500/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto space-y-3">
                    <span class="text-xs font-extrabold uppercase tracking-widest text-pink-400">Filosofi, Rekam Pendidikan & Profil</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-white">Tentang Eka Wahyuning Tiyasa</h2>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                        Mengenal latar belakang akademis S1 Teknik Informatika UNPAM, riwayat pendidikan MAN 4 Bekasi, publikasi ilmiah & HKI Kemenkumham, serta nilai kedisiplinan pencak silat.
                    </p>
                </div>

                <div class="mt-16 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    
                    <!-- Bio Description Card & Education History -->
                    <div class="lg:col-span-7 space-y-6">
                        <div class="glass-card p-8 rounded-3xl border border-pink-500/20 space-y-6">
                            <div>
                                <h3 class="text-2xl font-bold text-white flex items-center gap-3">
                                    <i class="fa-solid fa-graduation-cap text-pink-400"></i>
                                    Pendidikan & Akademik
                                </h3>
                                <p class="text-slate-300 text-sm sm:text-base leading-relaxed mt-2">
                                    Saya sedang menempuh pendidikan S1 Teknik Informatika di Universitas Pamulang (Semester 7). Aktif mempublikasikan karya ilmiah riset & pengabdian masyarakat (Jurnal JRIIN & APPA) serta memegang sertifikat Hak Kekayaan Intelektual (HKI) Kemenkumham RI No. EC002026090327.
                                </p>
                            </div>

                            <!-- Education History Timeline -->
                            <div class="pt-4 border-t border-pink-500/20 space-y-4">
                                <h4 class="text-xs font-extrabold uppercase tracking-wider text-pink-300">Riwayat Pendidikan Formal</h4>
                                
                                <div class="relative pl-6 border-l-2 border-pink-500/40 space-y-4">
                                    <!-- UNPAM -->
                                    <div class="relative">
                                        <span class="absolute -left-[31px] top-1.5 w-3 h-3 rounded-full bg-pink-500 ring-4 ring-pink-500/20"></span>
                                        <div class="flex items-center justify-between">
                                            <h5 class="text-base font-bold text-white">Universitas Pamulang (UNPAM)</h5>
                                            <span class="text-xs font-semibold px-2.5 py-0.5 rounded-full bg-pink-500/20 text-pink-300 border border-pink-500/30">Semester 7</span>
                                        </div>
                                        <p class="text-xs text-pink-300/80 font-medium">S1 Teknik Informatika • Fakultas Ilmu Komputer</p>
                                        <p class="text-xs text-slate-300 mt-1 leading-relaxed">
                                            Fokus pada Rekayasa Perangkat Lunak, Web Development (Laravel), Database Architecture (MySQL & PostgreSQL), RESTful API, Penulis Jurnal Ilmiah (JRIIN & APPA) & Pemegang Hak Cipta (HKI) Kemenkumham RI.
                                        </p>
                                        <div class="flex items-center gap-2 mt-1.5">
                                            <span class="px-3 py-1 rounded-lg text-xs font-bold bg-pink-500/20 text-pink-300 border border-pink-500/30">
                                                <i class="fa-solid fa-graduation-cap text-pink-400 mr-1"></i> Mahasiswa Aktif Semester 7
                                            </span>
                                        </div>
                                    </div>

                                    <!-- MAN 4 BEKASI -->
                                    <div class="relative pt-2">
                                        <span class="absolute -left-[31px] top-3.5 w-3 h-3 rounded-full bg-rose-400 ring-4 ring-rose-400/20"></span>
                                        <div class="flex items-center justify-between">
                                            <h5 class="text-base font-bold text-white">MAN 4 Bekasi</h5>
                                            <span class="text-xs font-semibold px-2.5 py-0.5 rounded-full bg-sky-500/20 text-sky-300 border border-sky-500/30">Lulusan MIPA</span>
                                        </div>
                                        <p class="text-xs text-rose-300/80 font-medium">Jurusan MIPA (Matematika & Ilmu Pengetahuan Alam)</p>
                                        <div class="flex items-center gap-2 mt-1.5">
                                            <span class="px-3 py-1 rounded-lg text-xs font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                                                <i class="fa-solid fa-star text-amber-400 mr-1"></i> Nilai Rata-Rata Kelulusan: 85.00
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Silat & Discipline -->
                            <div class="pt-4 border-t border-pink-500/20">
                                <h3 class="text-xl font-bold text-pink-300 flex items-center gap-3">
                                    <i class="fa-solid fa-shield-halved text-amber-400"></i>
                                    Kedisiplinan & Daya Juang Pencak Silat
                                </h3>
                                <p class="text-slate-300 text-sm sm:text-base leading-relaxed mt-2">
                                    Pengalaman sebagai Atlet peraih Juara 1 & 2 Tingkat Nasional serta peran sebagai Official Kontingen SHT Kota Bekasi Pusat Madiun pada <strong class="text-white">CNN Indonesia Piala Presiden 2026</strong> dan Coach pada <strong class="text-white">Kemenpora International Championship 2025</strong> membentuk mentalitas yang sangat tangguh, disiplin, dan teliti dalam eksekusi proyek software.
                                </p>
                            </div>
                        </div>

                        <!-- USP Cards Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            @foreach($profile['usp'] as $title => $desc)
                            <div class="glass-card p-5 rounded-2xl border border-pink-500/20 hover:border-pink-400/50 transition-all">
                                <div class="w-9 h-9 rounded-lg bg-pink-500/20 text-pink-300 flex items-center justify-center font-bold mb-3">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <h4 class="font-bold text-white text-sm mb-1">{{ $title }}</h4>
                                <p class="text-xs text-slate-400 leading-relaxed">{{ $desc }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Skills & Tech Stack Grid -->
                    <div class="lg:col-span-5 space-y-6">
                        <div class="glass-card p-8 rounded-3xl border border-pink-500/20 space-y-6">
                            <h3 class="text-xl font-bold text-white flex items-center gap-3">
                                <i class="fa-solid fa-layer-group text-pink-400"></i>
                                Keahlian Teknis & Pemrograman
                            </h3>

                            <!-- Tech Stack Progress Items -->
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between text-xs font-semibold mb-1.5">
                                        <span class="text-slate-200">Laravel Framework (PHP)</span>
                                        <span class="text-pink-400">90%</span>
                                    </div>
                                    <div class="w-full h-2 rounded-full bg-rose-950/80 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-pink-500 to-rose-400 rounded-full" style="width: 90%"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between text-xs font-semibold mb-1.5">
                                        <span class="text-slate-200">Tailwind CSS & Blade UI</span>
                                        <span class="text-pink-400">92%</span>
                                    </div>
                                    <div class="w-full h-2 rounded-full bg-rose-950/80 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-pink-500 to-rose-400 rounded-full" style="width: 92%"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between text-xs font-semibold mb-1.5">
                                        <span class="text-slate-200">MySQL & PostgreSQL Database</span>
                                        <span class="text-pink-400">85%</span>
                                    </div>
                                    <div class="w-full h-2 rounded-full bg-rose-950/80 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-pink-500 to-rose-400 rounded-full" style="width: 85%"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between text-xs font-semibold mb-1.5">
                                        <span class="text-slate-200">RESTful API Integration</span>
                                        <span class="text-pink-400">88%</span>
                                    </div>
                                    <div class="w-full h-2 rounded-full bg-rose-950/80 overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-pink-500 to-rose-400 rounded-full" style="width: 88%"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tech Stack Pills -->
                            <div class="pt-4 border-t border-pink-500/20">
                                <span class="text-xs font-semibold text-pink-300/80 block mb-3">Tools & Environment:</span>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 rounded-lg text-xs bg-rose-950/80 text-pink-200 border border-pink-500/30">Git & GitHub</span>
                                    <span class="px-3 py-1 rounded-lg text-xs bg-rose-950/80 text-pink-200 border border-pink-500/30">Alpine.js</span>
                                    <span class="px-3 py-1 rounded-lg text-xs bg-rose-950/80 text-pink-200 border border-pink-500/30">Laragon</span>
                                    <span class="px-3 py-1 rounded-lg text-xs bg-rose-950/80 text-pink-200 border border-pink-500/30">Bootstrap 5</span>
                                    <span class="px-3 py-1 rounded-lg text-xs bg-rose-950/80 text-pink-200 border border-pink-500/30">Postman</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- PROJECTS SHOWCASE SECTION -->
        <section id="projects" class="py-24 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                    <div class="space-y-3">
                        <span class="text-xs font-extrabold uppercase tracking-widest text-pink-400">Showcase Karya</span>
                        <h2 class="text-3xl sm:text-4xl font-bold text-white">Proyek Web Berbasis Laravel</h2>
                        <p class="text-slate-300 text-sm max-w-xl">
                            Aplikasi web enterprise dan sistem informasi yang dikembangkan menggunakan ekosistem Laravel modern dengan tampilan responsif.
                        </p>
                    </div>

                    <!-- Category Filter Tabs -->
                    <div class="flex flex-wrap gap-2 bg-rose-950/60 p-1.5 rounded-2xl border border-pink-500/20">
                        <button @click="activeTab = 'all'" 
                                :class="activeTab === 'all' ? 'bg-pink-500 text-white font-bold shadow-md shadow-pink-500/30' : 'text-slate-300 hover:text-white'"
                                class="px-4 py-2 rounded-xl text-xs transition-all">
                            Semua Proyek
                        </button>
                        <button @click="activeTab = 'fullstack'" 
                                :class="activeTab === 'fullstack' ? 'bg-pink-500 text-white font-bold shadow-md shadow-pink-500/30' : 'text-slate-300 hover:text-white'"
                                class="px-4 py-2 rounded-xl text-xs transition-all">
                            Laravel & Enterprise
                        </button>
                        <button @click="activeTab = 'mobile'" 
                                :class="activeTab === 'mobile' ? 'bg-pink-500 text-white font-bold shadow-md shadow-pink-500/30' : 'text-slate-300 hover:text-white'"
                                class="px-4 py-2 rounded-xl text-xs transition-all">
                            Aplikasi Mobile
                        </button>
                        <button @click="activeTab = 'silat'" 
                                :class="activeTab === 'silat' ? 'bg-pink-500 text-white font-bold shadow-md shadow-pink-500/30' : 'text-slate-300 hover:text-white'"
                                class="px-4 py-2 rounded-xl text-xs transition-all">
                            Sistem Pencak Silat
                        </button>
                    </div>
                </div>

                <!-- Projects Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($projects as $project)
                    @php
                        $projCategory = strtolower(is_object($project) ? $project->category : $project['category']);
                        $isSilat = str_contains($projCategory, 'silat');
                        $isEnterprise = str_contains($projCategory, 'fullstack') || str_contains($projCategory, 'enterprise') || str_contains($projCategory, 'e-commerce');
                        $isMobile = str_contains($projCategory, 'mobile') || str_contains($projCategory, 'android');
                        $filterTag = $isSilat ? 'silat' : ($isMobile ? 'mobile' : ($isEnterprise ? 'fullstack' : 'academic'));
                    @endphp
                    <div x-show="activeTab === 'all' || activeTab === '{{ $filterTag }}'"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="glass-card rounded-3xl overflow-hidden border border-pink-500/20 glass-card-hover flex flex-col group">
                        
                        <!-- Image Box -->
                        <div class="relative h-52 overflow-hidden bg-rose-950 border-b border-pink-500/20">
                            <img src="{{ is_object($project) ? $project->image : $project['image'] }}" 
                                 alt="{{ is_object($project) ? $project->title : $project['title'] }}" 
                                 class="w-full h-full object-cover object-top transform transition-transform duration-500 group-hover:scale-110"
                                 onerror="this.src='https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop'">
                            <div class="absolute inset-0 bg-rose-950/40 group-hover:bg-rose-950/20 transition-colors"></div>
                            
                            <span class="absolute top-4 left-4 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-rose-950/90 text-pink-300 border border-pink-500/30 backdrop-blur-md">
                                {{ is_object($project) ? $project->category : $project['category'] }}
                            </span>
                        </div>

                        <!-- Card Content -->
                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                            <div class="space-y-2">
                                <h3 class="text-xl font-bold text-white group-hover:text-pink-300 transition-colors line-clamp-1">
                                    {{ is_object($project) ? $project->title : $project['title'] }}
                                </h3>
                                <p class="text-slate-300 text-xs sm:text-sm line-clamp-2 leading-relaxed">
                                    {{ is_object($project) ? $project->summary : $project['summary'] }}
                                </p>
                            </div>

                            <!-- Tech Stack Badges -->
                            <div class="flex flex-wrap gap-1.5 pt-2">
                                @php
                                    $stacks = is_object($project) ? (is_array($project->tech_stack) ? $project->tech_stack : json_decode($project->tech_stack, true)) : $project['tech_stack'];
                                @endphp
                                @foreach($stacks as $tech)
                                <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-rose-950/80 text-pink-200 border border-pink-500/20">
                                    {{ $tech }}
                                </span>
                                @endforeach
                            </div>

                            <!-- Card Footer Links -->
                            <div class="pt-4 border-t border-pink-500/20 flex items-center justify-between">
                                <button @click="activeProjectModal = {{ json_encode($project) }}" class="text-xs font-semibold text-pink-400 hover:text-pink-300 flex items-center gap-1.5">
                                    <i class="fa-solid fa-circle-info"></i> Detail Proyek
                                </button>
                                <div class="flex items-center gap-3">
                                    @if((is_object($project) ? $project->github_url : $project['github_url']) != '#')
                                    <a href="{{ is_object($project) ? $project->github_url : $project['github_url'] }}" target="_blank" class="text-slate-400 hover:text-white transition-colors" title="Source Code">
                                        <i class="fa-brands fa-github text-lg"></i>
                                    </a>
                                    @endif
                                    @if((is_object($project) ? $project->demo_url : $project['demo_url']) != '#')
                                    <a href="{{ is_object($project) ? $project->demo_url : $project['demo_url'] }}" target="_blank" class="text-pink-400 hover:text-pink-300 transition-colors flex items-center gap-1.5 text-xs font-bold" title="Demo / Video">
                                        @if(str_contains(is_object($project) ? $project->demo_url : $project['demo_url'], 'youtu'))
                                        <i class="fa-brands fa-youtube text-red-500 text-base"></i> Video Demo
                                        @else
                                        <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i> Live Demo
                                        @endif
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>
        </section>

        <!-- ACHIEVEMENTS & GALLERY SECTION -->
        <section id="achievements" class="py-24 relative bg-rose-950/30 border-t border-pink-500/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
                    <span class="text-xs font-extrabold uppercase tracking-widest text-amber-400">Bukti Prestasi & Rekam Jejak</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-white">Prestasi & Galeri Pencak Silat</h2>
                    <p class="text-slate-300 text-sm sm:text-base">
                        Dokumentasi galeri prestasi medali kejuaraan nasional, penyerahan apresiasi kampus Universitas Pamulang, serta peraga seni pencak silat pada Seminar Nasional.
                    </p>
                </div>

                <!-- Achievements Grid Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($achievements as $ach)
                    <div class="glass-card rounded-3xl p-6 border border-pink-500/20 flex flex-col justify-between space-y-6 glass-card-hover">
                        <!-- Image Container with Modal Trigger -->
                        <div class="relative h-60 rounded-2xl overflow-hidden border border-pink-500/30 cursor-pointer group"
                             @click="activeModalImage = '{{ is_object($ach) ? $ach->image : $ach['image'] }}'; activeModalTitle = '{{ is_object($ach) ? $ach->title : $ach['title'] }}'">
                            
                            <img src="{{ is_object($ach) ? $ach->image : $ach['image'] }}" 
                                 alt="{{ is_object($ach) ? $ach->title : $ach['title'] }}" 
                                 class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                 onerror="this.src='https://images.unsplash.com/photo-1579546929518-9e396f3cc809?q=80&w=800&auto=format&fit=crop'">
                            
                            <div class="absolute inset-0 bg-rose-950/30 group-hover:bg-rose-950/10 transition-colors flex items-center justify-center">
                                <span class="w-12 h-12 rounded-full bg-rose-950/90 text-pink-300 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity shadow-lg border border-pink-500/30">
                                    <i class="fa-solid fa-magnifying-glass-plus text-lg"></i>
                                </span>
                            </div>

                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full text-[10px] font-extrabold uppercase bg-pink-500 text-white shadow-md">
                                {{ is_object($ach) ? $ach->year : $ach['year'] }}
                            </span>
                        </div>

                        <!-- Card Content -->
                        <div class="space-y-3">
                            <span class="inline-block px-3 py-1 rounded-lg text-xs font-bold bg-pink-500/20 text-pink-300 border border-pink-500/30">
                                {{ is_object($ach) ? $ach->role_or_rank : $ach['role_or_rank'] }}
                            </span>

                            <h3 class="text-xl font-bold text-white">
                                {{ is_object($ach) ? $ach->title : $ach['title'] }}
                            </h3>

                            <p class="text-xs text-pink-400 font-semibold">
                                <i class="fa-solid fa-building-columns mr-1"></i> {{ is_object($ach) ? $ach->organization : $ach['organization'] }}
                            </p>

                            <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                                {{ is_object($ach) ? $ach->description : $ach['description'] }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>

        <!-- CERTIFICATES SECTION -->
        <section id="certificates" class="py-24 relative" x-data="{ certTab: 'bootcamp' }">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto space-y-3 mb-10">
                    <span class="text-xs font-extrabold uppercase tracking-widest text-pink-400">Kredensial & Sertifikasi Resmi</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-white">Sertifikat Kompetensi, Bootcamp, HKI & Silat</h2>
                    <p class="text-slate-300 text-sm sm:text-base">
                        Koleksi sertifikasi kompetensi industri (Google Cloud, DeepMind, Microsoft, Dicoding, RevoU, DQLab), HKI Kemenkumham, Jurnal Ilmiah, serta Piagam Juara & Sertifikat Kejuaraan Pencak Silat.
                    </p>
                </div>

                <!-- Category Filter Tabs -->
                <div class="flex justify-center mb-12">
                    <div class="inline-flex p-1.5 rounded-2xl glass-card border border-pink-500/30 gap-1 sm:gap-2 flex-wrap justify-center">
                        <button @click="certTab = 'bootcamp'" 
                                :class="certTab === 'bootcamp' ? 'bg-gradient-to-r from-pink-500 to-rose-500 text-white font-bold shadow-lg shadow-pink-500/30' : 'text-slate-300 hover:text-white hover:bg-rose-950/50'"
                                class="px-4 sm:px-6 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all flex items-center gap-2">
                            <i class="fa-solid fa-laptop-code text-pink-300"></i> Sertifikat IT & Bootcamp
                        </button>
                        <button @click="certTab = 'academic'" 
                                :class="certTab === 'academic' ? 'bg-gradient-to-r from-pink-500 to-rose-500 text-white font-bold shadow-lg shadow-pink-500/30' : 'text-slate-300 hover:text-white hover:bg-rose-950/50'"
                                class="px-4 sm:px-6 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all flex items-center gap-2">
                            <i class="fa-solid fa-book-bookmark text-sky-400"></i> Jurnal Ilmiah & HKI
                        </button>
                        <button @click="certTab = 'silat'" 
                                :class="certTab === 'silat' ? 'bg-gradient-to-r from-pink-500 to-rose-500 text-white font-bold shadow-lg shadow-pink-500/30' : 'text-slate-300 hover:text-white hover:bg-rose-950/50'"
                                class="px-4 sm:px-6 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all flex items-center gap-2">
                            <i class="fa-solid fa-award text-amber-400"></i> Sertifikat Juara & Kejuaraan Silat
                        </button>
                        <button @click="certTab = 'all'" 
                                :class="certTab === 'all' ? 'bg-gradient-to-r from-pink-500 to-rose-500 text-white font-bold shadow-lg shadow-pink-500/30' : 'text-slate-300 hover:text-white hover:bg-rose-950/50'"
                                class="px-4 sm:px-6 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all flex items-center gap-2">
                            <i class="fa-solid fa-layer-group text-slate-300"></i> Semua Sertifikat
                        </button>
                    </div>
                </div>

                <!-- Certificates Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($certificates as $cert)
                    @php
                        $certCat = strtolower(is_object($cert) ? $cert->category : $cert['category']);
                        $isSilatCert = str_contains($certCat, 'silat') || str_contains($certCat, 'juara');
                        $isAcademicCert = str_contains($certCat, 'jurnal') || str_contains($certCat, 'hak cipta') || str_contains($certCat, 'hki');
                        $certTag = $isSilatCert ? 'silat' : ($isAcademicCert ? 'academic' : 'bootcamp');
                    @endphp
                    <div x-show="certTab === 'all' || certTab === '{{ $certTag }}'"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="glass-card rounded-2xl p-6 border border-pink-500/20 flex flex-col sm:flex-row items-start gap-5 glass-card-hover group">
                        @if((is_object($cert) ? $cert->image : $cert['image']))
                        <div class="w-full sm:w-44 h-32 rounded-xl overflow-hidden border border-pink-500/30 bg-rose-950 shrink-0 cursor-pointer relative group/img"
                             @click="activeModalImage = '{{ is_object($cert) ? $cert->image : $cert['image'] }}'; activeModalTitle = '{{ is_object($cert) ? $cert->title : $cert['title'] }}'">
                            <img src="{{ is_object($cert) ? $cert->image : $cert['image'] }}" 
                                 alt="{{ is_object($cert) ? $cert->title : $cert['title'] }}" 
                                 class="w-full h-full object-cover group-hover/img:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-rose-950/40 group-hover/img:bg-rose-950/10 transition-colors flex items-center justify-center">
                                <span class="w-8 h-8 rounded-full bg-rose-950/90 text-pink-300 flex items-center justify-center border border-pink-500/30 shadow-md">
                                    <i class="fa-solid fa-magnifying-glass-plus text-xs"></i>
                                </span>
                            </div>
                        </div>
                        @else
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-pink-500/20 to-rose-500/20 border border-pink-500/30 text-pink-400 flex items-center justify-center shrink-0 text-2xl">
                            <i class="{{ $isSilatCert ? 'fa-solid fa-award text-amber-400' : 'fa-solid fa-laptop-code text-pink-400' }}"></i>
                        </div>
                        @endif

                        <div class="flex-1 space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="text-[11px] font-bold text-pink-300/90 uppercase tracking-wider">
                                    {{ is_object($cert) ? $cert->category : $cert['category'] }} • {{ is_object($cert) ? $cert->year : $cert['year'] }}
                                </span>
                            </div>
                            
                            <h3 class="text-base font-bold text-white group-hover:text-pink-300 transition-colors">
                                {{ is_object($cert) ? $cert->title : $cert['title'] }}
                            </h3>

                            <p class="text-xs text-slate-300">
                                Penerbit: <span class="text-pink-300 font-semibold">{{ is_object($cert) ? $cert->issuer : $cert['issuer'] }}</span>
                            </p>

                            @php
                                $certCat = is_object($cert) ? $cert->category : $cert['category'];
                                $certTitle = is_object($cert) ? $cert->title : $cert['title'];
                                $certUrl = is_object($cert) ? $cert->credential_url : $cert['credential_url'];
                                $certId = is_object($cert) ? $cert->credential_id : $cert['credential_id'];
                                $isAcademicLink = (str_contains(strtolower($certCat), 'hki') || str_contains(strtolower($certCat), 'jurnal') || str_contains(strtolower($certTitle), 'hki') || str_contains(strtolower($certTitle), 'jurnal'));
                            @endphp

                            @if($certId)
                            <div class="flex flex-wrap items-center justify-between gap-2 pt-1.5 border-t border-pink-500/10">
                                <p class="text-[11px] text-slate-400 font-mono">
                                    ID: {{ $certId }}
                                </p>
                                @if($isAcademicLink && $certUrl && $certUrl != '#')
                                <a href="{{ $certUrl }}" target="_blank" class="text-xs font-semibold text-pink-400 hover:text-pink-300 flex items-center gap-1.5 transition-colors">
                                    Verifikasi <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                </a>
                                @endif
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>

        <!-- DOWNLOAD CV BANNER SECTION -->
        <section class="py-16 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative glass-card rounded-3xl p-8 md:p-12 border border-pink-500/30 overflow-hidden text-center md:text-left flex flex-col md:flex-row items-center justify-between gap-8 bg-gradient-to-r from-rose-950 via-[#1B1119] to-rose-950">
                    
                    <div class="space-y-3 max-w-2xl">
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-pink-500/20 text-pink-300 border border-pink-500/30">
                            Curriculum Vitae Terupdate
                        </span>
                        <h2 class="text-2xl sm:text-4xl font-extrabold text-white">
                            Ingin Berdiskusi atau Berkolaborasi?
                        </h2>
                        <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                            Unduh berkas CV resmi Eka Wahyuning Tiyasa untuk melihat rincian pendidikan S1 Teknik Informatika UNPAM, keahlian Laravel, serta riwayat prestasi atlet & official pencak silat.
                        </p>
                    </div>

                    <div class="shrink-0 flex flex-col sm:flex-row items-center gap-3">
                        <button @click="activeModalImage = '{{ asset('images/cv-eka.jpg') }}'; activeModalTitle = 'Curriculum Vitae - Eka Wahyuning Tiyasa'" class="px-7 py-4 rounded-full text-sm font-bold text-pink-200 bg-rose-950/80 hover:bg-rose-900 border border-pink-500/40 shadow-lg transition-all duration-300 hover:scale-105 flex items-center gap-2">
                            <i class="fa-solid fa-eye text-lg text-pink-400"></i> Lihat Preview CV
                        </button>
                        <a href="{{ route('cv.download') }}" class="px-8 py-4 rounded-full text-sm font-bold text-white bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-400 hover:to-rose-400 shadow-xl shadow-pink-500/30 transition-all duration-300 hover:scale-105 flex items-center gap-3">
                            <i class="fa-solid fa-file-arrow-down text-lg"></i> Unduh Berkas CV
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <section id="contact" class="py-24 relative bg-rose-950/40 border-t border-pink-500/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
                    <span class="text-xs font-extrabold uppercase tracking-widest text-pink-400">Hubungi Saya</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-white">Mari Berkolaborasi & Terhubung</h2>
                    <p class="text-slate-300 text-sm sm:text-base">
                        Silakan kirimkan pesan langsung melalui formulir di bawah ini atau hubungi melalui media sosial resmi.
                    </p>
                </div>

                <!-- Flash Message Alert -->
                @if(session('success'))
                <div class="max-w-4xl mx-auto mb-8 p-4 rounded-2xl bg-pink-500/20 border border-pink-500/40 text-pink-300 text-sm text-center font-semibold flex items-center justify-center gap-3">
                    <i class="fa-solid fa-circle-check text-xl text-pink-400"></i>
                    {{ session('success') }}
                </div>
                @endif

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 max-w-5xl mx-auto">
                    
                    <!-- Contact Cards Left -->
                    <div class="lg:col-span-5 space-y-6">
                        <div class="glass-card p-8 rounded-3xl border border-pink-500/20 space-y-6">
                            <h3 class="text-xl font-bold text-white">Informasi Kontak</h3>
                            
                            <div class="space-y-4">
                                <a href="mailto:{{ $profile['email'] }}" class="flex items-center gap-4 p-3 rounded-xl hover:bg-rose-950/60 transition-colors group">
                                    <div class="w-11 h-11 rounded-xl bg-pink-500/20 text-pink-300 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                        <i class="fa-solid fa-envelope text-lg"></i>
                                    </div>
                                    <div>
                                        <span class="text-[11px] text-slate-400 font-semibold block">Email Utama</span>
                                        <span class="text-sm font-semibold text-white group-hover:text-pink-300 transition-colors">{{ $profile['email'] }}</span>
                                    </div>
                                </a>

                                <a href="https://wa.me/628999652543" target="_blank" class="flex items-center gap-4 p-3 rounded-xl hover:bg-rose-950/60 transition-colors group">
                                    <div class="w-11 h-11 rounded-xl bg-emerald-500/20 text-emerald-300 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                        <i class="fa-brands fa-whatsapp text-lg"></i>
                                    </div>
                                    <div>
                                        <span class="text-[11px] text-slate-400 font-semibold block">Telepon / WhatsApp</span>
                                        <span class="text-sm font-semibold text-white group-hover:text-emerald-300 transition-colors">{{ $profile['phone'] }}</span>
                                    </div>
                                </a>

                                <a href="{{ $profile['github'] ?? 'https://github.com/wahyuning004' }}" target="_blank" class="flex items-center gap-4 p-3 rounded-xl hover:bg-rose-950/60 transition-colors group">
                                    <div class="w-11 h-11 rounded-xl bg-purple-500/20 text-purple-300 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                        <i class="fa-brands fa-github text-lg"></i>
                                    </div>
                                    <div>
                                        <span class="text-[11px] text-slate-400 font-semibold block">GitHub Repository</span>
                                        <span class="text-sm font-semibold text-white group-hover:text-purple-300 transition-colors">github.com/wahyuning004</span>
                                    </div>
                                </a>

                                <a href="{{ $profile['linkedin'] }}" target="_blank" class="flex items-center gap-4 p-3 rounded-xl hover:bg-rose-950/60 transition-colors group">
                                    <div class="w-11 h-11 rounded-xl bg-sky-500/20 text-sky-300 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                        <i class="fa-brands fa-linkedin-in text-lg"></i>
                                    </div>
                                    <div>
                                        <span class="text-[11px] text-slate-400 font-semibold block">LinkedIn Profile</span>
                                        <span class="text-sm font-semibold text-white group-hover:text-sky-300 transition-colors">eka-wahyuning-tiyasa</span>
                                    </div>
                                </a>

                                <a href="{{ $profile['instagram'] }}" target="_blank" class="flex items-center gap-4 p-3 rounded-xl hover:bg-rose-950/60 transition-colors group">
                                    <div class="w-11 h-11 rounded-xl bg-pink-500/20 text-pink-300 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                        <i class="fa-brands fa-instagram text-lg"></i>
                                    </div>
                                    <div>
                                        <span class="text-[11px] text-slate-400 font-semibold block">Instagram Profile</span>
                                        <span class="text-sm font-semibold text-white group-hover:text-pink-300 transition-colors">@ekawhynngtysa</span>
                                    </div>
                                </a>

                                <div class="flex items-center gap-4 p-3 rounded-xl">
                                    <div class="w-11 h-11 rounded-xl bg-amber-500/20 text-amber-300 flex items-center justify-center shrink-0">
                                        <i class="fa-solid fa-location-dot text-lg"></i>
                                    </div>
                                    <div>
                                        <span class="text-[11px] text-slate-400 font-semibold block">Domisili & Kampus</span>
                                        <span class="text-xs font-semibold text-white">Segarajaya, Tarumajaya, Kab. Bekasi / UNPAM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form Right -->
                    <div class="lg:col-span-7">
                        <form action="{{ route('contact.submit') }}" method="POST" class="glass-card p-8 rounded-3xl border border-pink-500/20 space-y-5">
                            @csrf
                            <h3 class="text-xl font-bold text-white mb-2">Kirim Pesan Direct</h3>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-pink-200 mb-2">Nama Lengkap</label>
                                    <input type="text" name="name" required placeholder="Masukkan nama Anda" class="w-full px-4 py-3 rounded-xl bg-rose-950/90 border border-pink-500/30 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-pink-400 transition-colors">
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-pink-200 mb-2">Alamat Email</label>
                                    <input type="email" name="email" required placeholder="nama@email.com" class="w-full px-4 py-3 rounded-xl bg-rose-950/90 border border-pink-500/30 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-pink-400 transition-colors">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-pink-200 mb-2">Subjek / Perihal</label>
                                <input type="text" name="subject" required placeholder="Tawaran Kerja / Proyek / Diskusi" class="w-full px-4 py-3 rounded-xl bg-rose-950/90 border border-pink-500/30 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-pink-400 transition-colors">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-pink-200 mb-2">Pesan Anda</label>
                                <textarea name="message" rows="4" required placeholder="Tuliskan pesan detail Anda di sini..." class="w-full px-4 py-3 rounded-xl bg-rose-950/90 border border-pink-500/30 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-pink-400 transition-colors"></textarea>
                            </div>

                            <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-sm text-white bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-400 hover:to-rose-400 shadow-lg shadow-pink-500/25 transition-all duration-300 hover:shadow-pink-500/40 flex items-center justify-center gap-2">
                                <i class="fa-solid fa-paper-plane"></i> Kirim Pesan Sekarang
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="pt-16 pb-12 bg-[#0C080D] border-t border-pink-500/20 text-slate-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-pink-500/15">
                    <!-- Col 1: Brand & Bio -->
                    <div class="space-y-4">
                        <a href="#hero" class="flex items-center gap-3 group inline-flex">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-pink-400 via-rose-400 to-amber-300 p-[2px]">
                                <div class="w-full h-full bg-[#130E14] rounded-[10px] flex items-center justify-center font-bold text-pink-400 text-sm">
                                    EWT
                                </div>
                            </div>
                            <div>
                                <span class="font-bold text-lg text-white group-hover:text-pink-300 transition-colors">Eka Wahyuning Tiyasa</span>
                                <span class="block text-xs text-pink-300/70">UNPAM • Teknik Informatika</span>
                            </div>
                        </a>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Mahasiswa S1 Teknik Informatika Universitas Pamulang, Pemegang HKI Kemenkumham, Penulis Jurnal Ilmiah & Atlet Pencak Silat Tingkat Nasional.
                        </p>
                        <div class="flex items-center gap-2 pt-2">
                            <a href="{{ $profile['linkedin'] }}" target="_blank" class="w-9 h-9 rounded-xl bg-rose-950/80 border border-pink-500/20 hover:border-pink-400 text-pink-300 hover:text-white flex items-center justify-center transition-all hover:scale-110" title="LinkedIn">
                                <i class="fa-brands fa-linkedin-in text-sm"></i>
                            </a>
                            <a href="{{ $profile['instagram'] }}" target="_blank" class="w-9 h-9 rounded-xl bg-rose-950/80 border border-pink-500/20 hover:border-pink-400 text-pink-300 hover:text-white flex items-center justify-center transition-all hover:scale-110" title="Instagram">
                                <i class="fa-brands fa-instagram text-sm"></i>
                            </a>
                            <a href="mailto:tiyasaekawahyuning@gmail.com" class="w-9 h-9 rounded-xl bg-rose-950/80 border border-pink-500/20 hover:border-pink-400 text-pink-300 hover:text-white flex items-center justify-center transition-all hover:scale-110" title="Email Direct">
                                <i class="fa-solid fa-envelope text-sm"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Col 2: Navigasi Cepat -->
                    <div class="space-y-3">
                        <h4 class="text-sm font-bold text-white uppercase tracking-wider">Navigasi Utama</h4>
                        <ul class="space-y-2 text-xs">
                            <li><a href="#hero" class="hover:text-pink-300 transition-colors flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-pink-500/60"></i> Beranda Hero</a></li>
                            <li><a href="#about" class="hover:text-pink-300 transition-colors flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-pink-500/60"></i> Tentang Saya & Pendidikan</a></li>
                            <li><a href="#projects" class="hover:text-pink-300 transition-colors flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-pink-500/60"></i> Portofolio Proyek Web</a></li>
                            <li><a href="#achievements" class="hover:text-pink-300 transition-colors flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-pink-500/60"></i> Prestasi & Galeri Silat</a></li>
                            <li><a href="#certificates" class="hover:text-pink-300 transition-colors flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-pink-500/60"></i> Sertifikat IT & HKI</a></li>
                            <li><a href="#contact" class="hover:text-pink-300 transition-colors flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-pink-500/60"></i> Kontak Direct</a></li>
                        </ul>
                    </div>

                    <!-- Col 3: Rekam Jejak -->
                    <div class="space-y-3">
                        <h4 class="text-sm font-bold text-white uppercase tracking-wider">Kualifikasi Utama</h4>
                        <ul class="space-y-2 text-xs text-slate-400">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-pink-400 text-xs"></i> S1 Teknik Informatika (Semester 7 UNPAM)</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-pink-400 text-xs"></i> MAN 4 Bekasi (Jurusan MIPA - 85.00)</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-pink-400 text-xs"></i> HKI Kemenkumham RI EC002026090327</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-pink-400 text-xs"></i> Penulis Jurnal Ilmiah (JRIIN & APPA)</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-pink-400 text-xs"></i> Peraih Medali Kejuaraan Silat Nasional</li>
                        </ul>
                    </div>

                    <!-- Col 4: Unduh CV & Kontak -->
                    <div class="space-y-4">
                        <h4 class="text-sm font-bold text-white uppercase tracking-wider">Dokumen Resmi</h4>
                        <p class="text-xs text-slate-400">
                            Unduh Curriculum Vitae (CV) terbaru Eka Wahyuning Tiyasa untuk rincian latar belakang lengkap.
                        </p>
                        <a href="{{ route('cv.download') }}" class="w-full py-2.5 px-4 rounded-xl text-xs font-bold text-white bg-gradient-to-r from-pink-500 via-rose-400 to-pink-600 hover:from-pink-400 hover:to-rose-500 shadow-md shadow-pink-500/20 transition-all flex items-center justify-center gap-2">
                            <i class="fa-solid fa-file-arrow-down"></i> Unduh CV PDF Resmi
                        </a>
                    </div>
                </div>

                <!-- Bottom Copyright -->
                <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-400">
                    <p>&copy; {{ date('Y') }} Eka Wahyuning Tiyasa. S1 Teknik Informatika Universitas Pamulang. All Rights Reserved.</p>
                    <a href="#hero" class="px-4 py-2 rounded-full bg-rose-950/80 border border-pink-500/20 hover:border-pink-400 text-pink-300 hover:text-white transition-all flex items-center gap-1.5 shadow-sm">
                        <span>Kembali ke Atas</span>
                        <i class="fa-solid fa-arrow-up text-xs"></i>
                    </a>
                </div>
            </div>
        </footer>

        <!-- IMAGE LIGHTBOX MODAL (Pencak Silat & Certificates) -->
        <div x-show="activeModalImage !== null" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-rose-950/90 backdrop-blur-md"
             @keydown.escape.window="activeModalImage = null">
            
            <div class="relative max-w-4xl w-full glass-card rounded-3xl p-4 border border-pink-500/30 shadow-2xl space-y-4">
                <div class="flex items-center justify-between px-2 pt-2">
                    <h3 x-text="activeModalTitle" class="text-base font-bold text-white truncate max-w-xl"></h3>
                    <button @click="activeModalImage = null" class="w-9 h-9 rounded-full bg-rose-900 text-pink-300 hover:text-white flex items-center justify-center">
                        <i class="fa-solid fa-xmark text-lg"></i>
                    </button>
                </div>
                
                <div class="rounded-2xl overflow-hidden max-h-[75vh] flex justify-center bg-rose-950 border border-pink-500/20">
                    <img :src="activeModalImage" :alt="activeModalTitle" class="max-h-[75vh] w-auto object-contain">
                </div>
            </div>
        </div>

        <!-- PROJECT DETAIL MODAL -->
        <div x-show="activeProjectModal !== null" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-rose-950/90 backdrop-blur-md"
             @keydown.escape.window="activeProjectModal = null">
            
            <template x-if="activeProjectModal">
                <div class="relative max-w-2xl w-full glass-card rounded-3xl p-6 sm:p-8 border border-pink-500/30 shadow-2xl space-y-6 max-h-[90vh] overflow-y-auto">
                    <div class="flex items-start justify-between">
                        <div>
                            <span x-text="activeProjectModal.category" class="text-xs font-bold text-pink-400 uppercase tracking-widest"></span>
                            <h3 x-text="activeProjectModal.title" class="text-2xl font-bold text-white mt-1"></h3>
                        </div>
                        <button @click="activeProjectModal = null" class="w-9 h-9 rounded-full bg-rose-900 text-pink-300 hover:text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-xmark text-lg"></i>
                        </button>
                    </div>

                    <template x-if="activeProjectModal.youtube_embed">
                        <div class="rounded-2xl overflow-hidden border border-pink-500/20 aspect-video bg-rose-950">
                            <iframe :src="activeProjectModal.youtube_embed" class="w-full h-full" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </template>
                    <template x-if="!activeProjectModal.youtube_embed">
                        <div class="rounded-2xl overflow-hidden border border-pink-500/20 h-64 bg-rose-950">
                            <img :src="activeProjectModal.image" :alt="activeProjectModal.title" class="w-full h-full object-cover object-top">
                        </div>
                    </template>

                    <div class="space-y-3">
                        <h4 class="text-sm font-bold text-white">Deskripsi Lengkap Proyek:</h4>
                        <p x-text="activeProjectModal.description || activeProjectModal.summary" class="text-slate-300 text-sm leading-relaxed"></p>
                    </div>

                    <div class="pt-4 border-t border-pink-500/20 flex items-center justify-end gap-3">
                        <button @click="activeProjectModal = null" class="px-5 py-2.5 rounded-xl bg-rose-900/80 hover:bg-rose-800 text-xs font-semibold text-pink-200">
                            Tutup
                        </button>
                        <template x-if="activeProjectModal.demo_url && activeProjectModal.demo_url !== '#'">
                            <a :href="activeProjectModal.demo_url" target="_blank" :class="activeProjectModal.youtube_embed ? 'bg-red-600 hover:bg-red-500' : 'bg-pink-500 hover:bg-pink-400'" class="px-5 py-2.5 rounded-xl text-xs font-bold text-white shadow-md flex items-center gap-2">
                                <i :class="activeProjectModal.youtube_embed ? 'fa-brands fa-youtube' : 'fa-solid fa-arrow-up-right-from-square'"></i> 
                                <span x-text="activeProjectModal.youtube_embed ? 'Tonton di YouTube' : 'Buka Website'"></span>
                            </a>
                        </template>
                    </div>
                </div>
            </template>
        </div>

    </div>

</body>
</html>
