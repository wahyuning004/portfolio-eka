<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Certificate;
use App\Models\Project;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed Projects
        Project::create([
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
            'order' => 1,
        ]);

        Project::create([
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
            'order' => 2,
        ]);

        Project::create([
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
            'order' => 3,
        ]);

        Project::create([
            'title' => 'Sentra Medizin - Regulatory Consultancy Portal',
            'slug' => 'sentra-medizin-consultancy-portal',
            'category' => 'Laravel & Enterprise',
            'summary' => 'Portal konsultasi legalitas & sertifikasi Alkes, PKRT, Farmasi, & Kosmetik dengan pelacakan status perizinan.',
            'description' => 'Platform konsultan spesialis regulasi medis terpadu yang memfasilitasi 17 katalog layanan perizinan faskes & kefarmasian (CDAKB, CPB, CPPKRTB, PBF, Halal, SNI, BPOM) dengan pencarian KBLI dan pelacakan status perizinan real-time.',
            'tech_stack' => ['Laravel 11', 'Tailwind CSS', 'PostgreSQL', 'REST API', 'Vercel'],
            'image' => '/images/proj-sentra-medizin-vercel.png',
            'demo_url' => 'https://sentra-medizin.vercel.app/',
            'github_url' => 'https://github.com/ekawahyuning/sentra-medizin',
            'is_featured' => true,
            'order' => 4,
        ]);

        // 2. Seed Achievements
        // Achievements Seeder (Focused on Pencak Silat National Championships & Official/Coach Roles)


        Achievement::create([
            'title' => 'Juara 2 Solo Kreatif - Jakarta National Championship II 2024',
            'event' => 'Jakarta National Championship II 2024 (Dispora DKI & Kemenpora)',
            'role_or_rank' => 'Juara 2 (Medali Perak) Solo Kreatif',
            'year' => '2024',
            'organization' => 'Kontingen Ranting Babelan (Dispora DKI Jakarta & Kemenpora RI)',
            'description' => 'Momen kebahagiaan meraih Medali Perak kategori Solo Kreatif Putri Dewasa pada Kejuaraan Pencak Silat Tingkat Nasional Jakarta National Championship II di Padepokan TMII Jakarta.',
            'badge' => 'Juara 2 Perak Nasional',
            'badge_color' => 'purple',
            'image' => '/images/gallery-jnc2.jpg',
            'order' => 1,
        ]);

        Achievement::create([
            'title' => 'Apresiasi Prestasi Kejuaraan REFC 1 Tingkat Nasional 2025',
            'event' => 'Kejuaraan REFC 1 Tingkat Nasional 2025',
            'role_or_rank' => 'Penyerahan Apresiasi Kampus',
            'year' => '2025',
            'organization' => 'Program Studi S1 Teknik Informatika UNPAM',
            'description' => 'Penyerahan berkas & apresiasi atas raihan Medali Emas Kejuaraan REFC 1 Tingkat Nasional bersama jajaran dosen & Ketua Program Studi Teknik Informatika Universitas Pamulang.',
            'badge' => 'Apresiasi UNPAM',
            'badge_color' => 'emerald',
            'image' => '/images/gallery-refc1.png',
            'order' => 2,
        ]);

        Achievement::create([
            'title' => 'Juara 1 Solo Kreatif - Kejuaraan Piala Panglima TNI 2024',
            'event' => 'Kejuaraan Pencak Silat Piala Panglima TNI Tingkat Nasional 2024',
            'role_or_rank' => 'Juara 1 (Medali Emas) Solo Kreatif',
            'year' => '2024',
            'organization' => 'Kontingen UNPAM (Panglima TNI & PB IPSI)',
            'description' => 'Penyerahan Sertifikat Prestasi Juara 1 Medali Emas Solo Kreatif Putri Dewasa Piala Panglima TNI di Gedung Fakultas Ilmu Komputer Universitas Pamulang.',
            'badge' => 'Juara 1 Emas Nasional',
            'badge_color' => 'amber',
            'image' => '/images/gallery-panglima-tni.jpg',
            'order' => 3,
        ]);

        Achievement::create([
            'title' => 'Penampilan Seni Pencak Silat pada Seminar Nasional Kampus',
            'event' => 'Seminar Nasional Teknik Informatika Universitas Pamulang',
            'role_or_rank' => 'Peraga Seni Pencak Silat',
            'year' => '2025',
            'organization' => 'Universitas Pamulang & Ikatan Pencak Silat Indonesia',
            'description' => 'Penampilan atraksi keahlian seni pencak silat kategori jurus dan kipas sebagai pengisi acara utama pada Seminar Nasional Kampus Universitas Pamulang.',
            'badge' => 'Peraga Seni Utama',
            'badge_color' => 'sky',
            'image' => '/images/gallery-seminar-nasional.jpg',
            'order' => 4,
        ]);

        // 3. Seed Certificates
        Certificate::create([
            'title' => 'Train a Small Language Model',
            'issuer' => 'Google DeepMind',
            'year' => '2026',
            'category' => 'Artificial Intelligence (Skill Badge • Advanced)',
            'credential_id' => 'GDM-SLM-ADVANCED-2026',
            'credential_url' => 'https://www.cloudskillsboost.google/',
            'image' => '/images/cert-gdeepmind-slm.png',
            'order' => 1,
        ]);

        Certificate::create([
            'title' => 'Engineer AI Agents with Agent Development Kit (ADK)',
            'issuer' => 'Google Cloud',
            'year' => '2026',
            'category' => 'Artificial Intelligence (Skill Badge • Intermediate)',
            'credential_id' => 'GCP-ADK-INTERMEDIATE-2026',
            'credential_url' => 'https://www.cloudskillsboost.google/',
            'image' => '/images/cert-gcloud-adk.png',
            'order' => 2,
        ]);

        Certificate::create([
            'title' => 'Create Your First Gemini Enterprise Application',
            'issuer' => 'Google Cloud',
            'year' => '2026',
            'category' => 'Artificial Intelligence (Skill Badge • Introductory)',
            'credential_id' => 'GCP-GEMINI-ENTERPRISE-2026',
            'credential_url' => 'https://www.cloudskillsboost.google/',
            'image' => '/images/cert-gcloud-gemini.png',
            'order' => 3,
        ]);

        Certificate::create([
            'title' => 'Develop and Secure APIs with Apigee X',
            'issuer' => 'Google Cloud',
            'year' => '2026',
            'category' => 'Application Modernization (Skill Badge • Intermediate)',
            'credential_id' => 'GCP-APIGEE-X-2026',
            'credential_url' => 'https://www.cloudskillsboost.google/',
            'image' => '/images/cert-gcloud-apigee.png',
            'order' => 4,
        ]);

        Certificate::create([
            'title' => 'Deploy and Secure Serverless APIs with API Gateway',
            'issuer' => 'Google Cloud',
            'year' => '2026',
            'category' => 'Application Modernization (Skill Badge • Introductory)',
            'credential_id' => 'GCP-API-GATEWAY-2026',
            'credential_url' => 'https://www.cloudskillsboost.google/',
            'image' => '/images/cert-gcloud-apigateway.png',
            'order' => 5,
        ]);

        Certificate::create([
            'title' => 'Build Serverless Applications with Cloud Run Functions',
            'issuer' => 'Google Cloud',
            'year' => '2026',
            'category' => 'Application Modernization (Skill Badge • Introductory)',
            'credential_id' => 'GCP-CLOUDRUN-FUNCTIONS-2026',
            'credential_url' => 'https://www.cloudskillsboost.google/',
            'image' => '/images/cert-gcloud-cloudrun.png',
            'order' => 6,
        ]);

        Certificate::create([
            'title' => 'Implement CI/CD Pipelines on Google Cloud',
            'issuer' => 'Google Cloud',
            'year' => '2026',
            'category' => 'Application Modernization (Skill Badge • Intermediate)',
            'credential_id' => 'GCP-CICD-PIPELINES-2026',
            'credential_url' => 'https://www.cloudskillsboost.google/',
            'image' => '/images/cert-gcloud-cicd.png',
            'order' => 7,
        ]);

        Certificate::create([
            'title' => 'Manage Kubernetes in Google Cloud',
            'issuer' => 'Google Cloud',
            'year' => '2026',
            'category' => 'Hybrid & Multi-Cloud (Skill Badge • Intermediate)',
            'credential_id' => 'GCP-KUBERNETES-GKE-2026',
            'credential_url' => 'https://www.cloudskillsboost.google/',
            'image' => '/images/cert-gcloud-kubernetes.png',
            'order' => 8,
        ]);

        Certificate::create([
            'title' => 'Build Infrastructure with Terraform on Google Cloud',
            'issuer' => 'Google Cloud',
            'year' => '2026',
            'category' => 'Infrastructure Modernization (Skill Badge • Intermediate)',
            'credential_id' => 'GCP-TERRAFORM-INFRA-2026',
            'credential_url' => 'https://www.cloudskillsboost.google/',
            'image' => '/images/cert-gcloud-terraform.png',
            'order' => 9,
        ]);

        Certificate::create([
            'title' => 'Membangun Aplikasi Gen AI dengan Microsoft Azure',
            'issuer' => 'Dicoding Indonesia & Microsoft',
            'year' => '2026',
            'category' => 'AI & Cloud Computing',
            'credential_id' => 'RVZKM90QEXD5',
            'credential_url' => 'https://dicoding.com/certificates/RVZKM90QEXD5',
            'image' => '/images/cert-dicoding-azure.png',
            'order' => 10,
        ]);

        Certificate::create([
            'title' => 'Belajar Penerapan Data Science dengan Microsoft Fabric',
            'issuer' => 'Dicoding Indonesia & Microsoft',
            'year' => '2026',
            'category' => 'Data Science & Analytics',
            'credential_id' => 'JMZVLQOLOXN9',
            'credential_url' => 'https://dicoding.com/certificates/JMZVLQOLOXN9',
            'image' => '/images/cert-dicoding-fabric.png',
            'order' => 11,
        ]);

        Certificate::create([
            'title' => 'Intro to Data Analytics (2-Weeks Online Course)',
            'issuer' => 'RevoU (PT Revolusi Cita Edukasi)',
            'year' => '2024',
            'category' => 'Data Analytics (Bootcamp)',
            'credential_id' => 'REVOU-DATA-ANALYTICS-2024',
            'credential_url' => 'https://revou.co/',
            'image' => '/images/cert-revou-data-analytics.png',
            'order' => 12,
        ]);

        Certificate::create([
            'title' => 'Guide to Learn SQL with AI at DQLab',
            'issuer' => 'DQLab, Xeratic & UMN',
            'year' => '2025',
            'category' => 'SQL & AI (Certification)',
            'credential_id' => 'DQLABAI003NEVOFL',
            'credential_url' => 'https://dqlab.id/',
            'image' => '/images/cert-dqlab-sql-ai.png',
            'order' => 13,
        ]);

        Certificate::create([
            'title' => 'Introduction to Data Science with Python',
            'issuer' => 'DQLab, Xeratic & UMN',
            'year' => '2025',
            'category' => 'Data Science (Certification)',
            'credential_id' => 'DQLABINTP1CKRQPH',
            'credential_url' => 'https://dqlab.id/',
            'image' => '/images/cert-dqlab-ds-python.png',
            'order' => 14,
        ]);

        Certificate::create([
            'title' => 'Surat Pencatatan Ciptaan Hak Kekayaan Intelektual (HKI / Hak Cipta)',
            'issuer' => 'Direktorat Jenderal Kekayaan Intelektual (DJKI) Kemenkumham RI',
            'year' => '2026',
            'category' => 'Hak Cipta (HKI)',
            'credential_id' => 'EC002026090327',
            'credential_url' => 'https://drive.google.com/file/d/1D9xlbf39uqBwekQ5-0dV0DxG4efX-o6b/view?usp=drivesdk',
            'image' => '/images/cert-hki-kemenkumham.png',
            'order' => 15,
        ]);

        Certificate::create([
            'title' => 'Publikasi Jurnal: Website Profil Sekolah & Platform Ujian CBT (SMPN 2 Kemang)',
            'issuer' => 'APPA : Jurnal Pengabdian Kepada Masyarakat (Vol. 3 No. 4, 2025)',
            'year' => '2025',
            'category' => 'Jurnal Ilmiah (Pengabdian)',
            'credential_id' => 'APPA-VOL3-NO4-3697',
            'credential_url' => 'https://jurnalmahasiswa.com/index.php/appa/article/view/3697',
            'image' => '/images/cert-jurnal-appa.png',
            'order' => 16,
        ]);

        Certificate::create([
            'title' => 'Publikasi Jurnal: Sistem PPDB Berbasis Web Laravel (SDN Bantarkambing 03)',
            'issuer' => 'JRIIN : Jurnal Riset Informatika dan Inovasi (Vol. 4 No. 1, 2026)',
            'year' => '2026',
            'category' => 'Jurnal Ilmiah (Riset IT)',
            'credential_id' => 'JRIIN-VOL4-NO1-3928',
            'credential_url' => 'https://jurnalmahasiswa.com/index.php/jriin/article/view/3928',
            'image' => '/images/cert-jurnal-jriin.png',
            'order' => 17,
        ]);

        Certificate::create([
            'title' => 'Piagam Juara 1 Medali Emas Solo Kreatif - Kejuaraan Piala Panglima TNI 2024',
            'issuer' => 'Panglima TNI & PB IPSI (Padepokan Silat TMII Jakarta)',
            'year' => '2024',
            'category' => 'Sertifikat Juara Silat',
            'credential_id' => 'PANGLIMA-TNI-GOLD-2024',
            'credential_url' => '#',
            'image' => '/images/cert-panglima-tni.jpg',
            'order' => 18,
        ]);

        Certificate::create([
            'title' => 'Piagam Juara 1 Medali Emas Jurus Tunggal - Kejuaraan REFC 1 Tingkat Nasional 2025',
            'issuer' => 'PB IPSI, Kemenpora RI & KONI Pusat (ViVo Mall Bogor)',
            'year' => '2025',
            'category' => 'Sertifikat Juara Silat',
            'credential_id' => 'REFC1-GOLD-2025',
            'credential_url' => '#',
            'image' => '/images/cert-refc1.jpg',
            'order' => 19,
        ]);

        Certificate::create([
            'title' => 'Piagam Juara 1 Medali Emas Solo Dewasa - Piala Ketua DPRD Kota Bekasi 2025',
            'issuer' => 'Ketua DPRD Kota Bekasi & Disdik / KONI',
            'year' => '2025',
            'category' => 'Sertifikat Juara Silat',
            'credential_id' => 'DPRD-BEKASI-GOLD-2025',
            'credential_url' => '#',
            'image' => '/images/cert-dprd-bekasi.jpg',
            'order' => 20,
        ]);

        Certificate::create([
            'title' => 'Piagam Juara 2 Medali Perak Solo Kreatif - Jakarta National Championship II 2024',
            'issuer' => 'Dispora DKI Jakarta & Kemenpora RI (Padepokan TMII)',
            'year' => '2024',
            'category' => 'Sertifikat Juara Silat',
            'credential_id' => 'JNC2-SILVER-2024',
            'credential_url' => '#',
            'image' => '/images/cert-jnc2.png',
            'order' => 21,
        ]);

        Certificate::create([
            'title' => 'Official Certificate - Kejuaraan CNN Indonesia Piala Presiden 2026',
            'issuer' => 'PB IPSI & CNN Indonesia (Presidential Championship)',
            'year' => '2026',
            'category' => 'Pencak Silat',
            'credential_id' => '0067/OFFICIAL/CNN Indonesia-Piala Presiden 2026/VI/2026',
            'credential_url' => '#',
            'image' => '/images/cert-cnn-presiden.jpg',
            'order' => 22,
        ]);

        Certificate::create([
            'title' => 'Coach Certificate - Kemenpora International Championship 2025',
            'issuer' => 'Kementerian Pemuda dan Olahraga (Kemenpora RI)',
            'year' => '2025',
            'category' => 'Pencak Silat',
            'credential_id' => 'KEMENPORA-INT-SILAT-2025-COACH',
            'credential_url' => '#',
            'image' => '/images/cert-kemenpora.jpg',
            'order' => 23,
        ]);
    }
}
