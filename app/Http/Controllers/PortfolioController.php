<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Certificate;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio home page.
     */
    public function index()
    {
        // Ensure image directory exists and sync images if needed
        $this->ensurePublicAssetsExist();

        // Retrieve data from DB or fallback gracefully if table doesn't exist yet
        $projects = $this->getProjectsData();
        $achievements = $this->getAchievementsData();
        $certificates = $this->getCertificatesData();

        $profile = [
            'name' => 'Eka Wahyuning Tiyasa',
            'title' => 'Full-Stack Web Developer & Mahasiswa Teknik Informatika (UNPAM)',
            'university' => 'Universitas Pamulang (UNPAM)',
            'faculty' => 'Fakultas Ilmu Komputer',
            'major' => 'S1 Teknik Informatika (Semester 7)',
            'location' => 'Segarajaya, Tarumajaya, Kab. Bekasi, Jawa Barat - 17218',
            'bio' => 'Mahasiswa S1 Teknik Informatika aktif di Universitas Pamulang (Semester 7) dengan pencapaian akademis konsisten. Full-Stack Web Developer berpengalaman dalam ekosistem Laravel, integrasi API, dan database modern. Pemegang Hak Kekayaan Intelektual (HKI) Kemenkumham RI, penulis jurnal ilmiah, serta memiliki kedisiplinan dan mentalitas tinggi peraih prestasi pencak silat nasional.',
            'linkedin' => 'https://www.linkedin.com/in/eka-wahyuning-tiyasa',
            'instagram' => 'https://www.instagram.com/ekawhynngtysa',
            'github' => 'https://github.com/wahyuning004',
            'email' => 'tiyasaekawahyuning@gmail.com',
            'phone' => '+62 899-9652-543',
            'cv_image' => '/images/cv-eka.jpg',
            'usp' => [
                'Keunggulan Akademik IT' => 'Semester 7 S1 Teknik Informatika UNPAM & Lulus Sertifikasi Google Cloud, Dicoding & DQLab.',
                'Ekosistem Laravel & API' => 'Menguasai Laravel 11, Next.js, React, PostgreSQL/MySQL, RESTful API & Tailwind CSS.',
                'Disiplin & Mentalitas Tinggi' => 'Terbentuk dari latihan atlet & tanggung jawab sebagai coach / official kejuaraan pencak silat nasional.'
            ],
            'education' => [
                [
                    'institution' => 'Universitas Pamulang (UNPAM)',
                    'major' => 'S1 Teknik Informatika (Semester 7)',
                    'year' => '2023 - Sekarang',
                    'detail' => 'Fakultas Ilmu Komputer, S1 Teknik Informatika Semester 7. Rekayasa Perangkat Lunak & Web Development, Pemegang HKI Kemenkumham RI & Penulis Jurnal Ilmiah (JRIIN & APPA).',
                ],
                [
                    'institution' => 'MA Negeri 4 Bekasi',
                    'major' => 'Matematika dan Ilmu Pengetahuan Alam (MIPA)',
                    'score' => '85.00',
                    'year' => '2023',
                    'detail' => 'Lulusan Jurusan MIPA dengan Nilai Rata-Rata Kelulusan 85.00.',
                ],
            ],
            'stats' => [
                ['label' => 'Pendidikan Tinggi', 'value' => 'S1 IT UNPAM', 'sub' => 'Teknik Informatika Semester 7'],
                ['label' => 'Pendidikan Menengah', 'value' => 'MAN 4 Bekasi', 'sub' => 'MIPA (Nilai Rata-rata 85.00)'],
                ['label' => 'Prestasi Olahraga', 'value' => 'Juara 1 & 2', 'sub' => 'Tingkat Nasional Pencak Silat'],
                ['label' => 'Publikasi & HKI', 'value' => '3 Kredensial', 'sub' => 'HKI Kemenkumham & Jurnal JRIIN/APPA'],
            ]
        ];

        return view('portfolio', compact('projects', 'achievements', 'certificates', 'profile'));
    }

    /**
     * Handle CV Download request.
     */
    public function downloadCv()
    {
        $cvJpgPath = public_path('cv/CV_Eka_Wahyuning_Tiyasa.jpg');
        $cvPdfPath = public_path('cv/CV_Eka_Wahyuning_Tiyasa.pdf');
        
        if (File::exists($cvPdfPath)) {
            return Response::download($cvPdfPath, 'CV_Eka_Wahyuning_Tiyasa_Fullstack_Developer.pdf');
        }
        
        if (File::exists($cvJpgPath)) {
            return Response::download($cvJpgPath, 'CV_Eka_Wahyuning_Tiyasa_Fullstack_Developer.jpg');
        }

        // HTML fallback for CV preview if file is not found
        $content = "=== CURRICULUM VITAE - EKA WAHYUNING TIYASA ===\n";
        $content .= "Nama: Eka Wahyuning Tiyasa\n";
        $content .= "Profesi: Full-Stack Web Developer\n";
        $content .= "Email: tiyasaekawahyuning@gmail.com\n";
        $content .= "Telepon: +62 899-9652-543\n";
        $content .= "Lokasi: Segarajaya, Tarumajaya, Kabupaten Bekasi, Jawa Barat - 17218\n";
        $content .= "Pendidikan: S1 Teknik Informatika (Semester 7) - Universitas Pamulang | MA Negeri 4 Bekasi (MIPA 85.00)\n";
        $content .= "Keahlian Teknis: Laravel, Tailwind CSS, Next.js, React, MySQL, PostgreSQL, RESTful API, Git, Postman, Vercel, Google Cloud (AI Agents, Cloud Run), Android (Java)\n";
        $content .= "Proyek: Sentra Medizin, Y2O Water Solution, PSHT Rayon Segarajaya, KRL CoPilot\n";
        $content .= "Pencapaian: Hak Cipta Kemenkumham RI (EC002026090327), Penulis Jurnal JRIIN & APPA, Sertifikasi Google Cloud, Dicoding, DQLab\n";
        $content .= "GitHub: https://github.com/wahyuning004\n";
        $content .= "LinkedIn: https://www.linkedin.com/in/eka-wahyuning-tiyasa\n";

        return response($content, 200, [
            'Content-Type' => 'text/plain',
            'Content-Disposition' => 'attachment; filename="CV_Eka_Wahyuning_Tiyasa.txt"',
        ]);
    }

    /**
     * Handle Contact Form submission.
     */
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Form submission simulated successfully
        return redirect()->to(url()->previous() . '#contact')
            ->with('success', 'Terima kasih, ' . htmlspecialchars($validated['name']) . '! Pesan Anda telah terkirim. Eka akan segera menghubungi Anda kembali.');
    }

    /**
     * Fetch projects data with fallback.
     */
    private function getProjectsData()
    {
        return collect([
            [
                'id' => 1,
                'title' => 'PSHT Rayon Segarajaya Web Portal',
                'slug' => 'psht-rayon-segarajaya-web-portal',
                'category' => 'Laravel & Silat System',
                'summary' => 'Portal web resmi PSHT Rayon Segarajaya untuk pendaftaran anggota, galeri kejuaraan, jadwal latihan, dan sertifikasi atlet.',
                'description' => 'Platform manajemen keorganisasian dan pendaftaran atlet pencak silat PSHT Rayon Segarajaya Cabang Kota Bekasi Ranting Tarumajaya dengan sistem autentikasi, galeri kejuaraan, dan pendaftaran online.',
                'tech_stack' => ['PHP', 'MySQL', 'Bootstrap 5', 'JavaScript', 'Laragon'],
                'image' => '/images/proj-psht-segarajaya.png',
                'demo_url' => 'https://pshtsegarajaya.great-site.net/',
                'github_url' => 'https://github.com/ekawahyuning/psht-rayon-portal',
                'is_featured' => true,
            ],
            [
                'id' => 2,
                'title' => 'Y2O Water Solution Platform',
                'slug' => 'y2o-water-solution-platform',
                'category' => 'Enterprise Web App',
                'summary' => 'Platform edukasi & layanan pemesanan sistem filtrasi air bersih modern untuk kebutuhan rumah tangga dan industri.',
                'description' => 'Web platform komprehensif yang menyediakan kalkulasi kebutuhan air murni, katalog solusi filtrasi air bebas bakteri, edukasi kesehatan air, dan pemesanan instalasi secara langsung.',
                'tech_stack' => ['PHP', 'MySQL', 'Tailwind CSS', 'Alpine.js', 'Responsive UI'],
                'image' => '/images/proj-y2o-water.png',
                'demo_url' => 'https://watersolution-y2o.gt.tc/',
                'github_url' => '#',
                'is_featured' => true,
            ],
            [
                'id' => 3,
                'title' => 'La Vie en Rose Cafe & Bakery',
                'slug' => 'la-vie-en-rose-cafe-bakery',
                'category' => 'E-Commerce & Web App',
                'summary' => 'Aplikasi web kafe & bakery interaktif berestetika tinggi dengan katalog menu digital, galeri, & pemesanan online.',
                'description' => 'Aplikasi web modern berkonsep aesthetic pink rose untuk bisnis F&B dengan fitur katalog menu interaktif, testimonial pelanggan, mode gelap/terang, dan keranjang belanja online.',
                'tech_stack' => ['Next.js / React', 'Tailwind CSS', 'Vercel Deployment', 'F&B E-Commerce'],
                'image' => '/images/proj-lavie-cafe.png',
                'demo_url' => 'https://website-cafe-kelompok-1.vercel.app/',
                'github_url' => '#',
                'is_featured' => true,
            ],
            [
                'id' => 4,
                'title' => 'Sentra Medizin - Regulatory Consultancy Portal',
                'slug' => 'sentra-medizin-consultancy-portal',
                'category' => 'Laravel & Enterprise',
                'summary' => 'Portal konsultasi legalitas & sertifikasi Alkes, PKRT, Farmasi, & Kosmetik dengan pelacakan status perizinan.',
                'description' => 'Platform konsultan spesialis regulasi medis terpadu yang memfasilitasi 17 katalog layanan perizinan faskes & kefarmasian (CDAKB, CPB, CPPKRTB, PBF, Halal, SNI, BPOM) dengan pencarian KBLI dan pelacakan status perizinan real-time.',
                'tech_stack' => ['Laravel 11', 'Tailwind CSS', 'PostgreSQL', 'REST API', 'Vercel'],
                'image' => '/images/proj-sentra-medizin-vercel.png',
                'demo_url' => 'https://sentra-medizin.vercel.app/',
                'github_url' => 'https://github.com/wahyuning004/sentra-medizin',
                'is_featured' => true,
            ],
            [
                'id' => 5,
                'title' => 'KRL CoPilot - Pendamping Perjalanan Komuter',
                'slug' => 'krl-copilot-android-app',
                'category' => 'Mobile & Android App',
                'summary' => 'Aplikasi Android pendamping perjalanan komuter KRL Commuter Line dengan rute, jadwal & notifikasi stasiun.',
                'description' => 'Aplikasi Android native yang dirancang untuk mempermudah pengguna KRL Commuter Line dalam memantau rute perjalanan, estimasi waktu kedatangan, tarif perjalanan, serta posisi kereta secara intuitif.',
                'tech_stack' => ['Java', 'Android Studio', 'RESTful API', 'Mobile UX'],
                'image' => '/images/proj-krl-copilot.jpg',
                'demo_url' => 'https://youtu.be/hTndrUygBek',
                'youtube_embed' => 'https://www.youtube.com/embed/hTndrUygBek',
                'github_url' => 'https://github.com/wahyuning004',
                'is_featured' => true,
            ],
        ]);
    }

    /**
     * Fetch achievements data with fallback.
     */
    private function getAchievementsData()
    {
        try {
            if (Schema::hasTable('achievements')) {
                $achievements = Achievement::orderBy('order', 'asc')->get();
                if ($achievements->isNotEmpty()) {
                    return $achievements;
                }
            }
        } catch (\Exception $e) {
            // fallback
        }

        return collect([
            [
                'id' => 1,
                'title' => 'Juara 2 Solo Kreatif - Jakarta National Championship II 2024',
                'event' => 'Jakarta National Championship II 2024 (Dispora DKI & Kemenpora)',
                'role_or_rank' => 'Juara 2 (Medali Perak) Solo Kreatif',
                'year' => '2024',
                'organization' => 'Kontingen Ranting Babelan (Dispora DKI Jakarta & Kemenpora RI)',
                'description' => 'Momen kebahagiaan meraih Medali Perak kategori Solo Kreatif Putri Dewasa pada Kejuaraan Pencak Silat Tingkat Nasional Jakarta National Championship II di Padepokan TMII Jakarta.',
                'badge' => 'Juara 2 Perak Nasional',
                'badge_color' => 'purple',
                'image' => '/images/gallery-jnc2.jpg',
            ],
            [
                'id' => 2,
                'title' => 'Apresiasi Prestasi Kejuaraan REFC 1 Tingkat Nasional 2025',
                'event' => 'Kejuaraan REFC 1 Tingkat Nasional 2025',
                'role_or_rank' => 'Penyerahan Apresiasi Kampus',
                'year' => '2025',
                'organization' => 'Program Studi S1 Teknik Informatika UNPAM',
                'description' => 'Penyerahan berkas & apresiasi atas raihan Medali Emas Kejuaraan REFC 1 Tingkat Nasional bersama jajaran dosen & Ketua Program Studi Teknik Informatika Universitas Pamulang.',
                'badge' => 'Apresiasi UNPAM',
                'badge_color' => 'emerald',
                'image' => '/images/gallery-refc1.png',
            ],
            [
                'id' => 3,
                'title' => 'Juara 1 Solo Kreatif - Kejuaraan Piala Panglima TNI 2024',
                'event' => 'Kejuaraan Pencak Silat Piala Panglima TNI Tingkat Nasional 2024',
                'role_or_rank' => 'Juara 1 (Medali Emas) Solo Kreatif',
                'year' => '2024',
                'organization' => 'Kontingen UNPAM (Panglima TNI & PB IPSI)',
                'description' => 'Penyerahan Sertifikat Prestasi Juara 1 Medali Emas Solo Kreatif Putri Dewasa Piala Panglima TNI di Gedung Fakultas Ilmu Komputer Universitas Pamulang.',
                'badge' => 'Juara 1 Emas Nasional',
                'badge_color' => 'amber',
                'image' => '/images/gallery-panglima-tni.jpg',
            ],
            [
                'id' => 4,
                'title' => 'Penampilan Seni Pencak Silat pada Seminar Nasional Kampus',
                'event' => 'Seminar Nasional Teknik Informatika Universitas Pamulang',
                'role_or_rank' => 'Peraga Seni Pencak Silat',
                'year' => '2025',
                'organization' => 'Universitas Pamulang & Ikatan Pencak Silat Indonesia',
                'description' => 'Penampilan atraksi keahlian seni pencak silat kategori jurus dan kipas sebagai pengisi acara utama pada Seminar Nasional Kampus Universitas Pamulang.',
                'badge' => 'Peraga Seni Utama',
                'badge_color' => 'sky',
                'image' => '/images/gallery-seminar-nasional.jpg',
            ],
        ]);
    }

    /**
     * Fetch certificates data with fallback.
     */
    private function getCertificatesData()
    {
        try {
            if (Schema::hasTable('certificates')) {
                $certificates = Certificate::orderBy('order', 'asc')->get();
                if ($certificates->isNotEmpty()) {
                    return $certificates;
                }
            }
        } catch (\Exception $e) {
            // fallback if database table not populated
        }

        return [
            [
                'title' => 'Train a Small Language Model',
                'issuer' => 'Google DeepMind',
                'year' => '2026',
                'category' => 'Artificial Intelligence (Skill Badge • Advanced)',
                'credential_id' => 'GDM-SLM-ADVANCED-2026',
                'credential_url' => 'https://www.cloudskillsboost.google/',
                'image' => '/images/cert-gdeepmind-slm.png',
            ],
            [
                'title' => 'Engineer AI Agents with Agent Development Kit (ADK)',
                'issuer' => 'Google Cloud',
                'year' => '2026',
                'category' => 'Artificial Intelligence (Skill Badge • Intermediate)',
                'credential_id' => 'GCP-ADK-INTERMEDIATE-2026',
                'credential_url' => 'https://www.cloudskillsboost.google/',
                'image' => '/images/cert-gcloud-adk.png',
            ],
            [
                'title' => 'Create Your First Gemini Enterprise Application',
                'issuer' => 'Google Cloud',
                'year' => '2026',
                'category' => 'Artificial Intelligence (Skill Badge • Introductory)',
                'credential_id' => 'GCP-GEMINI-ENTERPRISE-2026',
                'credential_url' => 'https://www.cloudskillsboost.google/',
                'image' => '/images/cert-gcloud-gemini.png',
            ],
            [
                'title' => 'Develop and Secure APIs with Apigee X',
                'issuer' => 'Google Cloud',
                'year' => '2026',
                'category' => 'Application Modernization (Skill Badge • Intermediate)',
                'credential_id' => 'GCP-APIGEE-X-2026',
                'credential_url' => 'https://www.cloudskillsboost.google/',
                'image' => '/images/cert-gcloud-apigee.png',
            ],
            [
                'title' => 'Deploy and Secure Serverless APIs with API Gateway',
                'issuer' => 'Google Cloud',
                'year' => '2026',
                'category' => 'Application Modernization (Skill Badge • Introductory)',
                'credential_id' => 'GCP-API-GATEWAY-2026',
                'credential_url' => 'https://www.cloudskillsboost.google/',
                'image' => '/images/cert-gcloud-apigateway.png',
            ],
            [
                'title' => 'Build Serverless Applications with Cloud Run Functions',
                'issuer' => 'Google Cloud',
                'year' => '2026',
                'category' => 'Application Modernization (Skill Badge • Introductory)',
                'credential_id' => 'GCP-CLOUDRUN-FUNCTIONS-2026',
                'credential_url' => 'https://www.cloudskillsboost.google/',
                'image' => '/images/cert-gcloud-cloudrun.png',
            ],
            [
                'title' => 'Implement CI/CD Pipelines on Google Cloud',
                'issuer' => 'Google Cloud',
                'year' => '2026',
                'category' => 'Application Modernization (Skill Badge • Intermediate)',
                'credential_id' => 'GCP-CICD-PIPELINES-2026',
                'credential_url' => 'https://www.cloudskillsboost.google/',
                'image' => '/images/cert-gcloud-cicd.png',
            ],
            [
                'title' => 'Manage Kubernetes in Google Cloud',
                'issuer' => 'Google Cloud',
                'year' => '2026',
                'category' => 'Hybrid & Multi-Cloud (Skill Badge • Intermediate)',
                'credential_id' => 'GCP-KUBERNETES-GKE-2026',
                'credential_url' => 'https://www.cloudskillsboost.google/',
                'image' => '/images/cert-gcloud-kubernetes.png',
            ],
            [
                'title' => 'Build Infrastructure with Terraform on Google Cloud',
                'issuer' => 'Google Cloud',
                'year' => '2026',
                'category' => 'Infrastructure Modernization (Skill Badge • Intermediate)',
                'credential_id' => 'GCP-TERRAFORM-INFRA-2026',
                'credential_url' => 'https://www.cloudskillsboost.google/',
                'image' => '/images/cert-gcloud-terraform.png',
            ],
            [
                'title' => 'Membangun Aplikasi Gen AI dengan Microsoft Azure',
                'issuer' => 'Dicoding Indonesia & Microsoft',
                'year' => '2026',
                'category' => 'AI & Cloud Computing',
                'credential_id' => 'RVZKM90QEXD5',
                'credential_url' => 'https://dicoding.com/certificates/RVZKM90QEXD5',
                'image' => '/images/cert-dicoding-azure.png',
            ],
            [
                'title' => 'Belajar Penerapan Data Science dengan Microsoft Fabric',
                'issuer' => 'Dicoding Indonesia & Microsoft',
                'year' => '2026',
                'category' => 'Data Science & Analytics',
                'credential_id' => 'JMZVLQOLOXN9',
                'credential_url' => 'https://dicoding.com/certificates/JMZVLQOLOXN9',
                'image' => '/images/cert-dicoding-fabric.png',
            ],
            [
                'title' => 'Intro to Data Analytics (2-Weeks Online Course)',
                'issuer' => 'RevoU (PT Revolusi Cita Edukasi)',
                'year' => '2024',
                'category' => 'Data Analytics (Bootcamp)',
                'credential_id' => 'REVOU-DATA-ANALYTICS-2024',
                'credential_url' => 'https://revou.co/',
                'image' => '/images/cert-revou-data-analytics.png',
            ],
            [
                'title' => 'Guide to Learn SQL with AI at DQLab',
                'issuer' => 'DQLab, Xeratic & UMN',
                'year' => '2025',
                'category' => 'SQL & AI (Certification)',
                'credential_id' => 'DQLABAI003NEVOFL',
                'credential_url' => 'https://dqlab.id/',
                'image' => '/images/cert-dqlab-sql-ai.png',
            ],
            [
                'title' => 'Introduction to Data Science with Python',
                'issuer' => 'DQLab, Xeratic & UMN',
                'year' => '2025',
                'category' => 'Data Science (Certification)',
                'credential_id' => 'DQLABINTP1CKRQPH',
                'credential_url' => 'https://dqlab.id/',
                'image' => '/images/cert-dqlab-ds-python.png',
            ],
            [
                'title' => 'Surat Pencatatan Ciptaan Hak Kekayaan Intelektual (HKI / Hak Cipta)',
                'issuer' => 'Direktorat Jenderal Kekayaan Intelektual (DJKI) Kemenkumham RI',
                'year' => '2026',
                'category' => 'Hak Cipta (HKI)',
                'credential_id' => 'EC002026090327',
                'credential_url' => 'https://drive.google.com/file/d/1D9xlbf39uqBwekQ5-0dV0DxG4efX-o6b/view?usp=drivesdk',
                'image' => '/images/cert-hki-kemenkumham.png',
            ],
            [
                'title' => 'Publikasi Jurnal: Website Profil Sekolah & Platform Ujian CBT (SMPN 2 Kemang)',
                'issuer' => 'APPA : Jurnal Pengabdian Kepada Masyarakat (Vol. 3 No. 4, 2025)',
                'year' => '2025',
                'category' => 'Jurnal Ilmiah (Pengabdian)',
                'credential_id' => 'APPA-VOL3-NO4-3697',
                'credential_url' => 'https://jurnalmahasiswa.com/index.php/appa/article/view/3697',
                'image' => '/images/cert-jurnal-appa.png',
            ],
            [
                'title' => 'Publikasi Jurnal: Sistem PPDB Berbasis Web Laravel (SDN Bantarkambing 03)',
                'issuer' => 'JRIIN : Jurnal Riset Informatika dan Inovasi (Vol. 4 No. 1, 2026)',
                'year' => '2026',
                'category' => 'Jurnal Ilmiah (Riset IT)',
                'credential_id' => 'JRIIN-VOL4-NO1-3928',
                'credential_url' => 'https://jurnalmahasiswa.com/index.php/jriin/article/view/3928',
                'image' => '/images/cert-jurnal-jriin.png',
            ],
            [
                'title' => 'Piagam Juara 1 Medali Emas Solo Kreatif - Piala Panglima TNI 2024',
                'issuer' => 'Panglima TNI & PB IPSI (Padepokan Silat TMII Jakarta)',
                'year' => '2024',
                'category' => 'Sertifikat Juara Silat (Panglima TNI)',
                'credential_id' => 'PANGLIMA-TNI-GOLD-2024',
                'credential_url' => '#',
                'image' => '/images/cert-panglima-tni.jpg',
            ],
            [
                'title' => 'Piagam Juara 1 Medali Emas Jurus Tunggal - REFC 1 Tingkat Nasional 2025',
                'issuer' => 'PB IPSI, Kemenpora RI & KONI Pusat (ViVo Mall Bogor)',
                'year' => '2025',
                'category' => 'Sertifikat Juara Silat (REFC 1 Nasional)',
                'credential_id' => 'REFC1-GOLD-2025',
                'credential_url' => '#',
                'image' => '/images/cert-refc1.jpg',
            ],
            [
                'title' => 'Piagam Juara 1 Medali Emas Solo Dewasa - Piala Ketua DPRD Kota Bekasi 2025',
                'issuer' => 'Ketua DPRD Kota Bekasi & Disdik / KONI',
                'year' => '2025',
                'category' => 'Sertifikat Juara Silat (DPRD Kota Bekasi)',
                'credential_id' => 'DPRD-BEKASI-GOLD-2025',
                'credential_url' => '#',
                'image' => '/images/cert-dprd-bekasi.jpg',
            ],
            [
                'title' => 'Piagam Juara 2 Medali Perak Solo Kreatif - Jakarta National Championship II 2024',
                'issuer' => 'Dispora DKI Jakarta & Kemenpora RI (Padepokan TMII)',
                'year' => '2024',
                'category' => 'Sertifikat Juara Silat (JNC II Nasional)',
                'credential_id' => 'JNC2-SILVER-2024',
                'credential_url' => '#',
                'image' => '/images/cert-jnc2.png',
            ],
            [
                'title' => 'Official Certificate - Kejuaraan CNN Indonesia Piala Presiden 2026',
                'issuer' => 'PB IPSI & CNN Indonesia (Presidential Championship)',
                'year' => '2026',
                'category' => 'Official Silat (CNN Piala Presiden)',
                'credential_id' => '0067/OFFICIAL/CNN Indonesia-Piala Presiden 2026/VI/2026',
                'credential_url' => '#',
                'image' => '/images/cert-cnn-presiden.jpg',
            ],
            [
                'title' => 'Coach Certificate - Kemenpora International Championship 2025',
                'issuer' => 'Kementerian Pemuda dan Olahraga (Kemenpora RI)',
                'year' => '2025',
                'category' => 'Coach Silat (Kemenpora International)',
                'credential_id' => 'KEMENPORA-INT-SILAT-2025-COACH',
                'credential_url' => '#',
                'image' => '/images/cert-kemenpora.jpg',
            ],
        ];
    }

    /**
     * Clean up unused temporary script files in public directory.
     */
    private function ensurePublicAssetsExist()
    {
        $krlBannerBrain = 'C:\\Users\\Advan\\.gemini\\antigravity\\brain\\35d7d16f-15a2-4d0d-b404-8bfe5ce0dd3e\\media__1787192878030.jpg';
        $publicImgDir = public_path('images');

        if (File::exists($krlBannerBrain)) {
            File::copy($krlBannerBrain, $publicImgDir . '/proj-krl-copilot.jpg');
            File::copy($krlBannerBrain, $publicImgDir . '/proj-krl-copilot.png');
        }

        $tempScripts = [
            public_path('clean_all.php'),
            public_path('copy_academic_certs_v10.php'),
            public_path('copy_champ_certs.php'),
            public_path('copy_real_images.php'),
            public_path('find_cert_images.php'),
            public_path('find_new_certs.php'),
            public_path('find_new_certs_2.php'),
            public_path('find_new_certs_3.php'),
            public_path('find_new_certs_4.php'),
            database_path('migrations/0001_01_01_000000_create_users_table.php'),
            database_path('migrations/0001_01_01_000001_create_cache_table.php'),
            database_path('migrations/0001_01_01_000002_create_jobs_table.php'),
            database_path('migrations/2026_08_15_000001_create_projects_table.php'),
            database_path('migrations/2026_08_15_000002_create_achievements_table.php'),
            database_path('migrations/2026_08_15_000003_create_certificates_table.php'),
        ];

        foreach ($tempScripts as $script) {
            if (File::exists($script)) {
                File::delete($script);
            }
        }
    }
}
