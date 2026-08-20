'use client';

import React, { useState } from 'react';
import { 
  Code2, 
  GraduationCap, 
  Trophy, 
  Award, 
  FileText, 
  Github, 
  Linkedin, 
  Instagram, 
  Mail, 
  Phone, 
  MapPin, 
  ExternalLink, 
  Download, 
  CheckCircle2, 
  Sparkles, 
  ChevronRight, 
  Layers, 
  ShieldCheck, 
  Send,
  Menu,
  X,
  BookOpen,
  Cpu
} from 'lucide-react';

export default function PortfolioPage() {
  const [activeTab, setActiveTab] = useState('all');
  const [selectedProject, setSelectedProject] = useState(null);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [contactSubmitted, setContactSubmitted] = useState(false);

  const profile = {
    name: 'Eka Wahyuning Tiyasa',
    title: 'Full-Stack Web Developer & Mahasiswa Teknik Informatika (UNPAM)',
    university: 'Universitas Pamulang (UNPAM)',
    faculty: 'Fakultas Ilmu Komputer',
    major: 'S1 Teknik Informatika (Semester 7)',
    location: 'Segarajaya, Tarumajaya, Kab. Bekasi, Jawa Barat - 17218',
    bio: 'Mahasiswa S1 Teknik Informatika aktif di Universitas Pamulang (Semester 7) dengan pencapaian akademis konsisten. Full-Stack Web Developer berpengalaman dalam ekosistem Laravel, Next.js, REST API, dan database modern. Pemegang Hak Kekayaan Intelektual (HKI) Kemenkumham RI, penulis jurnal ilmiah, serta memiliki kedisiplinan dan mentalitas tinggi peraih prestasi pencak silat nasional.',
    linkedin: 'https://www.linkedin.com/in/eka-wahyuning-tiyasa',
    instagram: 'https://www.instagram.com/ekawhynngtysa',
    github: 'https://github.com/wahyuning004',
    email: 'tiyasaekawahyuning@gmail.com',
    phone: '+62 899-9652-543',
    cvPath: '/cv/CV_Eka_Wahyuning_Tiyasa.pdf'
  };

  const stats = [
    { label: 'Pendidikan Tinggi', value: 'S1 IT UNPAM', sub: 'Teknik Informatika Sem 7' },
    { label: 'Pendidikan Menengah', value: 'MAN 4 Bekasi', sub: 'MIPA (Rata-rata 85.00)' },
    { label: 'Prestasi Olahraga', value: 'Medali Emas & Perak', sub: 'Kejuaraan Nasional Pencak Silat' },
    { label: 'Publikasi & HKI', value: '3 Kredensial', sub: 'HKI Kemenkumham & Jurnal JRIIN/APPA' }
  ];

  const projects = [
    {
      id: 1,
      title: 'PSHT Rayon Segarajaya Web Portal',
      category: 'laravel',
      categoryLabel: 'Laravel & Silat System',
      summary: 'Portal web resmi PSHT Rayon Segarajaya untuk pendaftaran anggota, galeri kejuaraan, jadwal latihan, dan sertifikasi atlet.',
      description: 'Platform manajemen keorganisasian dan pendaftaran atlet pencak silat PSHT Rayon Segarajaya Cabang Kota Bekasi Ranting Tarumajaya dengan sistem autentikasi, galeri kejuaraan, dan pendaftaran online.',
      techStack: ['Laravel 11', 'PHP', 'MySQL', 'Bootstrap 5', 'JavaScript'],
      image: '/images/proj-psht-segarajaya.png',
      demoUrl: '#',
      githubUrl: 'https://github.com/wahyuning004/portfolio-eka'
    },
    {
      id: 2,
      title: 'PT Sentra Medizin Platform',
      category: 'nextjs',
      categoryLabel: 'Next.js & Health Regulatory',
      summary: 'Platform landing page & portal klien konsultan regulasi alat kesehatan dan perizinan medis Indonesia.',
      description: 'Website resmi PT Sentra Medizin dengan katalog 17 layanan perizinan konsultan medis, sistem pengajuan konsultasi real-time, dan dashboard portal klien.',
      techStack: ['Next.js 14', 'React', 'Tailwind CSS', 'Laravel API', 'PostgreSQL'],
      image: '/images/proj-sentra-medizin.png',
      demoUrl: '#',
      githubUrl: 'https://github.com/wahyuning004'
    },
    {
      id: 3,
      title: 'Y2O Water Solution ERP & POS System',
      category: 'laravel',
      categoryLabel: 'Laravel ERP & Management',
      summary: 'Aplikasi manajemen stok, kasir POS, dan pelaporan keuangan otomatis untuk bisnis depot air minum modern.',
      description: 'Sistem informasi manajemen depot air minum Y2O Water Solution yang mengelola inventori, transaksi penjualan harian, cetak struk, dan analitik pendapatan.',
      techStack: ['Laravel', 'Livewire', 'MySQL', 'Tailwind CSS'],
      image: '/images/proj-y2o-water.png',
      demoUrl: '#',
      githubUrl: 'https://github.com/wahyuning004'
    },
    {
      id: 4,
      title: 'KRL CoPilot Realtime Assistant',
      category: 'web',
      categoryLabel: 'Cloud & AI Innovation',
      summary: 'Asisten cerdas navigasi jadwal dan posisi kereta Commuter Line Jabodetabek berbasis Google Cloud.',
      description: 'Aplikasi layanan informasi rute, jadwal keberangkatan, dan estimasi tarif KRL Jabodetabek berbasis integrasi REST API & arsitektur Google Cloud Run.',
      techStack: ['Google Cloud Run', 'REST API', 'JavaScript', 'Tailwind CSS'],
      image: '/images/proj-krl-copilot.png',
      demoUrl: '#',
      githubUrl: 'https://github.com/wahyuning004'
    }
  ];

  const credentials = [
    {
      title: 'Hak Kekayaan Intelektual (HKI) Kemenkumham RI',
      type: 'HKI / Hak Cipta',
      number: 'EC002026090327',
      publisher: 'Direktorat Jenderal Kekayaan Intelektual Kemenkumham RI',
      date: '2026',
      description: 'Surat Pencatatan Hak Cipta untuk Karya Cipta Sistem Informasi & Manajemen Web Pendaftaran Organisasi.'
    },
    {
      title: 'Publikasi Jurnal Ilmiah (JRIIN & APPA)',
      type: 'Jurnal Rekayasa Informasi & Komputer',
      number: 'ISSN / DOI Verified',
      publisher: 'JRIIN (Jurnal Rekayasa Informasi & Komputer) & APPA',
      date: '2025 - 2026',
      description: 'Penulis artikel penelitian rekayasa perangkat lunak dan implementasi arsitektur web modern.'
    },
    {
      title: 'Sertifikasi Google Cloud Architecture & AI Agents',
      type: 'Cloud & AI Specialist',
      number: 'GCP Certified',
      publisher: 'Google Cloud Platform',
      date: '2025',
      description: 'Sertifikasi kompetensi pengoperasian Google Cloud Run, deployment serverless, dan agentic AI.'
    },
    {
      title: 'Sertifikasi Dicoding Web Development & JavaScript',
      type: 'Full-Stack Developer',
      number: 'Dicoding Academy',
      publisher: 'Dicoding Indonesia',
      date: '2024',
      description: 'Kelulusan program kelas Pemrograman Web Modern, JavaScript ES6+, dan Dasar Rekayasa Perangkat Lunak.'
    }
  ];

  const achievements = [
    {
      title: 'Juara 1 (Medali Emas) Kejuaraan Pencak Silat Nasional',
      event: 'Kejuaraan Pencak Silat Tingkat Nasional',
      category: 'Prestasi Olahraga Non-Akademik',
      year: '2023 - 2024',
      description: 'Meraih Juara 1 Tanding Kelas Dewasa Putra dalam Kejuaraan Pencak Silat Tingkat Nasional.'
    },
    {
      title: 'Juara 2 (Medali Perak) Kejuaraan Pencak Silat Nasional',
      event: 'Kejuaraan Open Tournament Pencak Silat Indonesia',
      category: 'Prestasi Olahraga Non-Akademik',
      year: '2023',
      description: 'Meraih Juara 2 Tanding Dewasa dalam Turnamen Nasional Pencak Silat.'
    }
  ];

  const filteredProjects = activeTab === 'all' 
    ? projects 
    : projects.filter(p => p.category === activeTab);

  const handleContactSubmit = (e) => {
    e.preventDefault();
    setContactSubmitted(true);
    setTimeout(() => setContactSubmitted(false), 6000);
  };

  return (
    <div className="min-h-screen bg-[#080b11] text-slate-100 relative selection:bg-cyan-500 selection:text-black">
      {/* Background Radial Glow */}
      <div className="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-[600px] bg-cyan-600/10 blur-[140px] pointer-events-none rounded-full" />
      <div className="fixed bottom-0 right-0 w-[500px] h-[500px] bg-purple-600/10 blur-[160px] pointer-events-none rounded-full" />

      {/* Navigation Header */}
      <header className="sticky top-0 z-50 glass-panel border-b border-slate-800/80 backdrop-blur-md">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
          <a href="#" className="flex items-center gap-3 group">
            <div className="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center text-slate-950 font-extrabold text-lg shadow-lg shadow-cyan-500/20 group-hover:scale-105 transition-transform">
              EW
            </div>
            <div>
              <span className="text-lg font-bold tracking-tight text-white group-hover:text-cyan-400 transition-colors">
                Eka Wahyuning T.
              </span>
              <span className="block text-xs text-cyan-400 font-mono">Full-Stack Dev • S1 IT</span>
            </div>
          </a>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex items-center gap-8 text-sm font-medium">
            <a href="#about" className="text-slate-300 hover:text-cyan-400 transition-colors">Profil</a>
            <a href="#projects" className="text-slate-300 hover:text-cyan-400 transition-colors">Proyek</a>
            <a href="#credentials" className="text-slate-300 hover:text-cyan-400 transition-colors">HKI & Sertifikasi</a>
            <a href="#achievements" className="text-slate-300 hover:text-cyan-400 transition-colors">Prestasi</a>
            <a href="#contact" className="text-slate-300 hover:text-cyan-400 transition-colors">Kontak</a>
          </nav>

          <div className="hidden md:flex items-center gap-4">
            <a 
              href="#contact"
              className="px-5 py-2.5 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-slate-950 font-semibold text-sm shadow-md shadow-cyan-500/20 hover:brightness-110 transition-all flex items-center gap-2 hover:gap-3"
            >
              <span>Hubungi Eka</span>
              <ChevronRight className="w-4 h-4" />
            </a>
          </div>

          {/* Mobile Menu Button */}
          <button 
            onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
            className="md:hidden p-2.5 rounded-xl bg-slate-800/80 text-slate-300 hover:text-white"
          >
            {mobileMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
          </button>
        </div>

        {/* Mobile Navigation Drawer */}
        {mobileMenuOpen && (
          <div className="md:hidden border-b border-slate-800 bg-[#0b1120]/95 px-4 pt-4 pb-6 space-y-3">
            <a 
              href="#about" 
              onClick={() => setMobileMenuOpen(false)}
              className="block px-3 py-2 rounded-lg text-slate-300 hover:bg-slate-800"
            >
              Profil
            </a>
            <a 
              href="#projects" 
              onClick={() => setMobileMenuOpen(false)}
              className="block px-3 py-2 rounded-lg text-slate-300 hover:bg-slate-800"
            >
              Proyek
            </a>
            <a 
              href="#credentials" 
              onClick={() => setMobileMenuOpen(false)}
              className="block px-3 py-2 rounded-lg text-slate-300 hover:bg-slate-800"
            >
              HKI & Sertifikasi
            </a>
            <a 
              href="#achievements" 
              onClick={() => setMobileMenuOpen(false)}
              className="block px-3 py-2 rounded-lg text-slate-300 hover:bg-slate-800"
            >
              Prestasi
            </a>
            <a 
              href="#contact" 
              onClick={() => setMobileMenuOpen(false)}
              className="block px-3 py-2 rounded-lg text-slate-300 hover:bg-slate-800"
            >
              Kontak
            </a>
          </div>
        )}
      </header>

      {/* Hero Section */}
      <section className="relative pt-16 pb-24 md:pt-24 md:pb-32 overflow-hidden">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-12 gap-12 items-center">
            
            <div className="lg:col-span-7 space-y-8">
              {/* Badge */}
              <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-panel border border-cyan-500/30 text-cyan-300 text-xs font-semibold tracking-wide uppercase">
                <Sparkles className="w-4 h-4 text-cyan-400 animate-pulse" />
                <span>S1 Teknik Informatika Semester 7 • Universitas Pamulang</span>
              </div>

              {/* Main Headline */}
              <div className="space-y-4">
                <h1 className="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
                  Hi, Saya <span className="text-gradient-cyan">Eka Wahyuning Tiyasa</span>
                </h1>
                <p className="text-xl sm:text-2xl font-medium text-slate-300">
                  Full-Stack Web Developer & Innovator Digital
                </p>
              </div>

              {/* Bio Description */}
              <p className="text-slate-400 text-base sm:text-lg leading-relaxed max-w-2xl">
                {profile.bio}
              </p>

              {/* Primary Call To Actions */}
              <div className="flex flex-wrap items-center gap-4 pt-2">
                <a
                  href="#projects"
                  className="px-6 py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-slate-950 font-bold text-base shadow-xl shadow-cyan-500/25 hover:scale-105 transition-all flex items-center gap-3"
                >
                  <Code2 className="w-5 h-5" />
                  <span>Lihat Portofolio Karya</span>
                </a>
                <a
                  href={profile.cvPath}
                  download="CV_Eka_Wahyuning_Tiyasa.pdf"
                  className="px-6 py-3.5 rounded-xl glass-panel hover:bg-slate-800/80 text-white font-semibold text-base border border-slate-700 hover:border-cyan-500/50 transition-all flex items-center gap-3"
                >
                  <Download className="w-5 h-5 text-cyan-400" />
                  <span>Unduh CV Resmi</span>
                </a>
              </div>

              {/* Social Links */}
              <div className="flex items-center gap-6 pt-4 border-t border-slate-800/80">
                <span className="text-xs font-mono text-slate-500 uppercase tracking-widest">Connect:</span>
                <a href={profile.github} target="_blank" rel="noopener noreferrer" className="p-2.5 rounded-xl glass-panel text-slate-400 hover:text-cyan-400 hover:border-cyan-500/40 transition-colors">
                  <Github className="w-5 h-5" />
                </a>
                <a href={profile.linkedin} target="_blank" rel="noopener noreferrer" className="p-2.5 rounded-xl glass-panel text-slate-400 hover:text-cyan-400 hover:border-cyan-500/40 transition-colors">
                  <Linkedin className="w-5 h-5" />
                </a>
                <a href={profile.instagram} target="_blank" rel="noopener noreferrer" className="p-2.5 rounded-xl glass-panel text-slate-400 hover:text-cyan-400 hover:border-cyan-500/40 transition-colors">
                  <Instagram className="w-5 h-5" />
                </a>
                <a href={`mailto:${profile.email}`} className="p-2.5 rounded-xl glass-panel text-slate-400 hover:text-cyan-400 hover:border-cyan-500/40 transition-colors">
                  <Mail className="w-5 h-5" />
                </a>
              </div>
            </div>

            {/* Hero Interactive Stats Card */}
            <div className="lg:col-span-5">
              <div className="glass-panel p-8 rounded-3xl border border-slate-800 relative shadow-2xl">
                <div className="absolute -top-4 -right-4 w-20 h-20 bg-cyan-500/20 rounded-full blur-xl pointer-events-none" />
                
                <h2 className="text-lg font-bold text-white mb-6 flex items-center gap-3 border-b border-slate-800 pb-4">
                  <ShieldCheck className="w-5 h-5 text-cyan-400" />
                  <span>Kredensial & Sorotan Karir</span>
                </h2>

                <div className="grid grid-cols-2 gap-4">
                  {stats.map((stat, idx) => (
                    <div key={idx} className="p-4 rounded-2xl bg-slate-900/80 border border-slate-800/80 hover:border-cyan-500/40 transition-colors">
                      <div className="text-xl font-extrabold text-cyan-400">{stat.value}</div>
                      <div className="text-xs font-semibold text-slate-200 mt-1">{stat.label}</div>
                      <div className="text-[11px] text-slate-500 mt-1 line-clamp-1">{stat.sub}</div>
                    </div>
                  ))}
                </div>

                <div className="mt-6 p-4 rounded-2xl bg-gradient-to-r from-slate-900 to-slate-800 border border-cyan-500/20">
                  <div className="flex items-start gap-3">
                    <Award className="w-6 h-6 text-amber-400 shrink-0 mt-0.5" />
                    <div>
                      <div className="text-xs font-bold text-amber-300 uppercase tracking-wide">Hak Cipta Kemenkumham RI</div>
                      <div className="text-xs text-slate-300 mt-0.5">Nomor Pencatatan HKI: EC002026090327</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      {/* Profile & Education Section */}
      <section id="about" className="py-20 border-t border-slate-800/80 relative">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h2 className="text-xs font-mono text-cyan-400 tracking-widest uppercase">Latar Belakang</h2>
            <h3 className="text-3xl sm:text-4xl font-extrabold text-white">
              Pendidikan & Kualifikasi Utama
            </h3>
            <p className="text-slate-400 text-base">
              Kombinasi akademik IT yang kuat di Universitas Pamulang dan disiplin tinggi atlet nasional.
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-8">
            {/* Education Cards */}
            <div className="glass-panel p-8 rounded-3xl space-y-6">
              <h4 className="text-xl font-bold text-white flex items-center gap-3 border-b border-slate-800 pb-4">
                <GraduationCap className="w-6 h-6 text-cyan-400" />
                <span>Riwayat Pendidikan Resmi</span>
              </h4>

              <div className="space-y-6">
                <div className="p-5 rounded-2xl bg-slate-900/90 border border-slate-800 hover:border-cyan-500/40 transition-colors">
                  <div className="flex justify-between items-start gap-4">
                    <div>
                      <h5 className="text-base font-bold text-white">S1 Teknik Informatika (Semester 7)</h5>
                      <p className="text-sm font-medium text-cyan-400">Universitas Pamulang (UNPAM)</p>
                    </div>
                    <span className="px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-300 text-xs font-mono">2023 - Sekarang</span>
                  </div>
                  <p className="text-xs text-slate-400 mt-3 leading-relaxed">
                    Fakultas Ilmu Komputer, S1 Teknik Informatika. Fokus pada Rekayasa Perangkat Lunak, Web Development, Database Management, Pemegang HKI Kemenkumham RI & Penulis Jurnal Ilmiah JRIIN/APPA.
                  </p>
                </div>

                <div className="p-5 rounded-2xl bg-slate-900/90 border border-slate-800 hover:border-cyan-500/40 transition-colors">
                  <div className="flex justify-between items-start gap-4">
                    <div>
                      <h5 className="text-base font-bold text-white">Matematika & IPA (MIPA)</h5>
                      <p className="text-sm font-medium text-slate-300">MA Negeri 4 Bekasi</p>
                    </div>
                    <span className="px-3 py-1 rounded-full bg-slate-800 text-slate-400 text-xs font-mono">Lulus 2023</span>
                  </div>
                  <p className="text-xs text-slate-400 mt-3">
                    Lulusan Jurusan MIPA dengan Nilai Rata-Rata Kelulusan 85.00.
                  </p>
                </div>
              </div>
            </div>

            {/* Technical Skills & Discipline */}
            <div className="glass-panel p-8 rounded-3xl space-y-6">
              <h4 className="text-xl font-bold text-white flex items-center gap-3 border-b border-slate-800 pb-4">
                <Cpu className="w-6 h-6 text-cyan-400" />
                <span>Teknologi & Keahlian Utama</span>
              </h4>

              <div className="space-y-4">
                <div>
                  <label className="text-xs font-mono text-slate-400 block mb-2">Backend & Frameworks:</label>
                  <div className="flex flex-wrap gap-2">
                    {['Laravel 11', 'Next.js 14', 'PHP 8.3', 'Node.js', 'RESTful API', 'Livewire'].map((skill, i) => (
                      <span key={i} className="px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-200 text-xs font-medium">
                        {skill}
                      </span>
                    ))}
                  </div>
                </div>

                <div>
                  <label className="text-xs font-mono text-slate-400 block mb-2">Frontend & UI/UX:</label>
                  <div className="flex flex-wrap gap-2">
                    {['React.js', 'Tailwind CSS', 'JavaScript (ES6+)', 'HTML5 / CSS3', 'Bootstrap 5'].map((skill, i) => (
                      <span key={i} className="px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-200 text-xs font-medium">
                        {skill}
                      </span>
                    ))}
                  </div>
                </div>

                <div>
                  <label className="text-xs font-mono text-slate-400 block mb-2">Database & Cloud Tools:</label>
                  <div className="flex flex-wrap gap-2">
                    {['PostgreSQL', 'MySQL', 'Google Cloud Run', 'Git & GitHub', 'Postman', 'Vercel'].map((skill, i) => (
                      <span key={i} className="px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-200 text-xs font-medium">
                        {skill}
                      </span>
                    ))}
                  </div>
                </div>

                <div className="pt-4 border-t border-slate-800">
                  <div className="flex items-center gap-3 text-sm text-cyan-300 font-semibold">
                    <CheckCircle2 className="w-5 h-5 text-cyan-400 shrink-0" />
                    <span>Mentalitas Atlet & Kedisiplinan Pelatih PSHT Rayon Segarajaya</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      {/* Projects Section */}
      <section id="projects" className="py-20 relative">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-12 space-y-4">
            <h2 className="text-xs font-mono text-cyan-400 tracking-widest uppercase">Portofolio Karya</h2>
            <h3 className="text-3xl sm:text-4xl font-extrabold text-white">
              Proyek Web & Aplikasi Unggulan
            </h3>
            <p className="text-slate-400 text-base">
              Aplikasi berbasis Laravel 11, Next.js 14, dan sistem database modern yang dirancang untuk skala produksi.
            </p>

            {/* Filter Tabs */}
            <div className="flex flex-wrap justify-center gap-3 pt-4">
              {[
                { id: 'all', label: 'Semua Proyek' },
                { id: 'laravel', label: 'Laravel' },
                { id: 'nextjs', label: 'Next.js' },
                { id: 'web', label: 'Cloud & AI' }
              ].map(tab => (
                <button
                  key={tab.id}
                  onClick={() => setActiveTab(tab.id)}
                  className={`px-5 py-2.5 rounded-xl text-sm font-semibold transition-all ${
                    activeTab === tab.id
                      ? 'bg-cyan-500 text-slate-950 shadow-lg shadow-cyan-500/20'
                      : 'glass-panel text-slate-400 hover:text-white hover:border-cyan-500/40'
                  }`}
                >
                  {tab.label}
                </button>
              ))}
            </div>
          </div>

          {/* Projects Grid */}
          <div className="grid md:grid-cols-2 gap-8">
            {filteredProjects.map((project) => (
              <div 
                key={project.id}
                className="glass-panel glass-panel-hover rounded-3xl overflow-hidden flex flex-col justify-between group"
              >
                <div className="p-8 space-y-6">
                  <div className="flex justify-between items-start gap-4">
                    <span className="px-3.5 py-1.5 rounded-full bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 text-xs font-mono">
                      {project.categoryLabel}
                    </span>
                  </div>

                  <div>
                    <h4 className="text-2xl font-bold text-white group-hover:text-cyan-400 transition-colors">
                      {project.title}
                    </h4>
                    <p className="text-slate-400 text-sm mt-3 leading-relaxed">
                      {project.summary}
                    </p>
                  </div>

                  <div className="flex flex-wrap gap-2 pt-2">
                    {project.techStack.map((tech, i) => (
                      <span key={i} className="px-3 py-1 rounded-lg bg-slate-900 border border-slate-800 text-slate-300 text-xs">
                        {tech}
                      </span>
                    ))}
                  </div>
                </div>

                <div className="px-8 pb-8 pt-4 flex items-center justify-between border-t border-slate-800/80">
                  <button
                    onClick={() => setSelectedProject(project)}
                    className="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-2"
                  >
                    <span>Detail & Deskripsi</span>
                    <ChevronRight className="w-4 h-4" />
                  </button>

                  <a
                    href={project.githubUrl}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="p-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors"
                  >
                    <Github className="w-5 h-5" />
                  </a>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Credentials & HKI Section */}
      <section id="credentials" className="py-20 border-t border-slate-800/80 relative">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h2 className="text-xs font-mono text-cyan-400 tracking-widest uppercase">Legalisasi & Kredensial</h2>
            <h3 className="text-3xl sm:text-4xl font-extrabold text-white">
              HKI Kemenkumham RI & Sertifikasi
            </h3>
            <p className="text-slate-400 text-base">
              Bukti resmi hak cipta karya intelektual digital dan kelulusan sertifikasi industri.
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-8">
            {credentials.map((cred, idx) => (
              <div key={idx} className="glass-panel p-8 rounded-3xl space-y-4 border border-slate-800 hover:border-cyan-500/40 transition-colors">
                <div className="flex items-start justify-between gap-4">
                  <div className="p-3 rounded-2xl bg-cyan-500/10 text-cyan-400">
                    <FileText className="w-6 h-6" />
                  </div>
                  <span className="px-3 py-1 rounded-full bg-slate-800 text-slate-300 text-xs font-mono">
                    {cred.type}
                  </span>
                </div>

                <div>
                  <h4 className="text-lg font-bold text-white">{cred.title}</h4>
                  <div className="text-xs font-mono text-cyan-400 mt-1">{cred.number} • {cred.publisher}</div>
                </div>

                <p className="text-xs text-slate-400 leading-relaxed">
                  {cred.description}
                </p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Achievements Section */}
      <section id="achievements" className="py-20 border-t border-slate-800/80 relative">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h2 className="text-xs font-mono text-cyan-400 tracking-widest uppercase">Kedisiplinan & Olahraga</h2>
            <h3 className="text-3xl sm:text-4xl font-extrabold text-white">
              Prestasi Pencak Silat Tingkat Nasional
            </h3>
            <p className="text-slate-400 text-base">
              Pencapaian medali emas dan perak pada kejuaraan pencak silat tingkat nasional.
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-8">
            {achievements.map((ach, idx) => (
              <div key={idx} className="glass-panel p-8 rounded-3xl space-y-4 border border-slate-800 flex items-start gap-6">
                <div className="p-4 rounded-2xl bg-amber-500/10 text-amber-400 shrink-0">
                  <Trophy className="w-8 h-8" />
                </div>
                <div className="space-y-2">
                  <span className="text-xs font-mono text-amber-300 uppercase tracking-wide">{ach.category} ({ach.year})</span>
                  <h4 className="text-xl font-bold text-white">{ach.title}</h4>
                  <p className="text-xs text-slate-400 leading-relaxed">{ach.description}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Contact Section */}
      <section id="contact" className="py-20 border-t border-slate-800/80 relative">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-12 gap-12 items-center">
            
            <div className="lg:col-span-5 space-y-8">
              <div>
                <h2 className="text-xs font-mono text-cyan-400 tracking-widest uppercase">Hubungi Saya</h2>
                <h3 className="text-3xl sm:text-4xl font-extrabold text-white mt-2">
                  Mari Berkolaborasi
                </h3>
                <p className="text-slate-400 text-sm mt-4 leading-relaxed">
                  Siap berkontribusi sebagai Full-Stack Web Developer, menangani proyek sistem informasi, atau konsultasi rekayasa perangkat lunak.
                </p>
              </div>

              <div className="space-y-6">
                <div className="flex items-center gap-4 p-4 rounded-2xl glass-panel">
                  <div className="p-3 rounded-xl bg-cyan-500/10 text-cyan-400">
                    <Mail className="w-5 h-5" />
                  </div>
                  <div>
                    <div className="text-xs font-mono text-slate-500 uppercase">Email Utama</div>
                    <a href={`mailto:${profile.email}`} className="text-sm font-medium text-white hover:text-cyan-400">
                      {profile.email}
                    </a>
                  </div>
                </div>

                <div className="flex items-center gap-4 p-4 rounded-2xl glass-panel">
                  <div className="p-3 rounded-xl bg-cyan-500/10 text-cyan-400">
                    <Phone className="w-5 h-5" />
                  </div>
                  <div>
                    <div className="text-xs font-mono text-slate-500 uppercase">Telepon / WhatsApp</div>
                    <a href={`https://wa.me/628999652543`} target="_blank" rel="noopener noreferrer" className="text-sm font-medium text-white hover:text-cyan-400">
                      {profile.phone}
                    </a>
                  </div>
                </div>

                <div className="flex items-center gap-4 p-4 rounded-2xl glass-panel">
                  <div className="p-3 rounded-xl bg-cyan-500/10 text-cyan-400">
                    <MapPin className="w-5 h-5" />
                  </div>
                  <div>
                    <div className="text-xs font-mono text-slate-500 uppercase">Lokasi Domisili</div>
                    <span className="text-xs font-medium text-slate-300">
                      {profile.location}
                    </span>
                  </div>
                </div>
              </div>
            </div>

            {/* Form */}
            <div className="lg:col-span-7">
              <div className="glass-panel p-8 sm:p-10 rounded-3xl border border-slate-800">
                <h4 className="text-xl font-bold text-white mb-6">Kirim Pesan Langsung</h4>
                
                {contactSubmitted && (
                  <div className="mb-6 p-4 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm flex items-center gap-3">
                    <CheckCircle2 className="w-5 h-5 shrink-0" />
                    <span>Pesan Anda telah terkirim! Eka akan segera merespons email Anda.</span>
                  </div>
                )}

                <form onSubmit={handleContactSubmit} className="space-y-6">
                  <div className="grid sm:grid-cols-2 gap-6">
                    <div>
                      <label className="text-xs font-mono text-slate-300 block mb-2">Nama Lengkap</label>
                      <input 
                        type="text" 
                        required
                        placeholder="Nama Anda"
                        className="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-500 text-sm"
                      />
                    </div>
                    <div>
                      <label className="text-xs font-mono text-slate-300 block mb-2">Email Anda</label>
                      <input 
                        type="email" 
                        required
                        placeholder="email@contoh.com"
                        className="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-500 text-sm"
                      />
                    </div>
                  </div>

                  <div>
                    <label className="text-xs font-mono text-slate-300 block mb-2">Subjek / Topik</label>
                    <input 
                      type="text" 
                      required
                      placeholder="Subjek Pesan / Penawaran Kerjasama"
                      className="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-500 text-sm"
                    />
                  </div>

                  <div>
                    <label className="text-xs font-mono text-slate-300 block mb-2">Isi Pesan</label>
                    <textarea 
                      rows={4}
                      required
                      placeholder="Tuliskan detail pesan Anda di sini..."
                      className="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:border-cyan-500 text-sm resize-none"
                    ></textarea>
                  </div>

                  <button
                    type="submit"
                    className="w-full py-4 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-slate-950 font-bold text-base shadow-xl shadow-cyan-500/25 hover:brightness-110 transition-all flex items-center justify-center gap-3"
                  >
                    <Send className="w-5 h-5" />
                    <span>Kirim Pesan Sekarang</span>
                  </button>
                </form>
              </div>
            </div>

          </div>
        </div>
      </section>

      {/* Project Detail Modal */}
      {selectedProject && (
        <div className="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm">
          <div className="glass-panel p-8 rounded-3xl max-w-2xl w-full border border-slate-800 relative space-y-6 animate-in fade-in zoom-in duration-200">
            <button 
              onClick={() => setSelectedProject(null)}
              className="absolute top-6 right-6 p-2 rounded-xl bg-slate-800 text-slate-400 hover:text-white"
            >
              <X className="w-5 h-5" />
            </button>

            <span className="px-3.5 py-1.5 rounded-full bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 text-xs font-mono">
              {selectedProject.categoryLabel}
            </span>

            <h3 className="text-2xl font-bold text-white">{selectedProject.title}</h3>
            
            <p className="text-slate-300 text-sm leading-relaxed">
              {selectedProject.description}
            </p>

            <div>
              <h4 className="text-xs font-mono text-slate-400 uppercase mb-2">Tech Stack Utama:</h4>
              <div className="flex flex-wrap gap-2">
                {selectedProject.techStack.map((t, i) => (
                  <span key={i} className="px-3 py-1 rounded-lg bg-slate-900 border border-slate-800 text-cyan-400 text-xs font-medium">
                    {t}
                  </span>
                ))}
              </div>
            </div>

            <div className="pt-4 flex justify-end gap-4 border-t border-slate-800">
              <button
                onClick={() => setSelectedProject(null)}
                className="px-5 py-2.5 rounded-xl bg-slate-800 text-slate-300 text-sm font-semibold hover:bg-slate-700"
              >
                Tutup
              </button>
              <a
                href={selectedProject.githubUrl}
                target="_blank"
                rel="noopener noreferrer"
                className="px-5 py-2.5 rounded-xl bg-cyan-500 text-slate-950 text-sm font-bold flex items-center gap-2 hover:bg-cyan-400"
              >
                <Github className="w-4 h-4" />
                <span>Lihat Kode GitHub</span>
              </a>
            </div>
          </div>
        </div>
      )}

      {/* Footer */}
      <footer className="py-12 border-t border-slate-800/80 bg-[#06090e]">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6">
          <div className="flex items-center gap-3">
            <div className="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center text-slate-950 font-bold text-sm">
              EW
            </div>
            <span className="text-sm font-semibold text-slate-300">
              Eka Wahyuning Tiyasa • Full-Stack Developer
            </span>
          </div>

          <p className="text-xs text-slate-500 font-mono">
            © 2026 Eka Wahyuning Tiyasa. All rights reserved. S1 Teknik Informatika UNPAM.
          </p>
        </div>
      </footer>
    </div>
  );
}
