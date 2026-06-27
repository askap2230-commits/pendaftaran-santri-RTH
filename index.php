<?php
// ============================================
// SEO MASTER FILE - Rumah Tahfidzh Hikmah
// ============================================

// SEO Variables
$site_url = 'https://' . $_SERVER['HTTP_HOST'];
$current_url = $site_url . $_SERVER['REQUEST_URI'];
$site_name = 'Rumah Tahfidzh Hikmah';
$site_description = 'Pondok pesantren tahfidz Al-Qur\'an yang berkomitmen mencetak generasi Qur\'ani yang berpegang teguh kepada Al-Qur\'an dan As-Sunnah';
$site_keywords = 'pondok tahfidz, pesantren tahfidz, rumah tahfidzh hikmah, pendaftaran santri baru, tahfidz quran, pondok quran, generasi qurani, tahfidz intensif, program menghafal quran';
$logo_url = $site_url . '/img/logo.png';
$hero_image = $site_url . '/img/bg.png';

// ============================================
// DATA SERVICES - Program Unggulan
// ============================================
$services = [
    [
        'icon_class' => 'fa-quran',
        'title' => 'Tahfidz Intensif',
        'description' => 'Target hafal 30 Juz Al-Qur\'an dalam waktu 2 tahun dengan metode yang efektif dan menyenangkan.'
    ],
    [
        'icon_class' => 'fa-chalkboard-user',
        'title' => 'Tahfidz Reguler',
        'description' => 'Program fleksibel untuk menghafal Al-Qur\'an dengan target 10 Juz, cocok untuk santri yang masih bersekolah.'
    ],
    [
        'icon_class' => 'fa-child',
        'title' => 'Program Anak',
        'description' => 'Khusus untuk usia 7-12 tahun dengan pendekatan menyenangkan dan mudah dipahami anak-anak.'
    ],
    [
        'icon_class' => 'fa-user-graduate',
        'title' => 'Program Dewasa',
        'description' => 'Untuk usia 13-25 tahun dengan sistem mentoring personal dan jadwal yang terstruktur.'
    ],
    [
        'icon_class' => 'fa-laptop',
        'title' => 'Program Online',
        'description' => 'Program tahfidz jarak jauh via Zoom untuk santri yang tidak bisa tinggal di pondok.'
    ],
    [
        'icon_class' => 'fa-hand-holding-heart',
        'title' => 'Tahfidz Santunan',
        'description' => 'Program beasiswa bagi santri berprestasi dari keluarga kurang mampu.'
    ]
];

// ============================================
// DATA PRODUCTS - Aktivitas Santri (HANYA 3)
// ============================================
$products = [
    [
        'image' => 'pho1',
        'title' => 'Setoran Hafalan Pagi',
        'description' => 'Kegiatan setoran hafalan Al-Qur\'an setiap pagi setelah shubuh kepada ustadz pembimbing.',
        'badge' => 'Setiap Hari',
        'link_url' => '#'
    ],
    [
        'image' => 'pho2',
        'title' => 'Kajian Kitab Kuning',
        'description' => 'Pembelajaran kitab-kitab klasik untuk memahami Islam secara mendalam.',
        'badge' => 'Mingguan',
        'link_url' => '#'
    ],
    [
        'image' => 'pho3',
        'title' => 'Olahraga & Outbound',
        'description' => 'Kegiatan fisik untuk menjaga kesehatan dan kebugaran santri.',
        'badge' => 'Jum\'at',
        'link_url' => '#'
    ]
];

// ============================================
// DATA TESTIMONIALS - Testimoni Santri & Orang Tua
// ============================================
$testimonials = [
    [
        'author_name' => 'Ahmad Fauzi',
        'author_role' => 'Santri Tahfidz Intensif',
        'author_avatar' => 'AF',
        'content' => 'Alhamdulillah, dengan metode di Rumah Tahfidzh Hikmah, saya sudah menyelesaikan hafalan 30 Juz dalam waktu 1.5 tahun. Ustadz-ustadznya sangat sabar dan membimbing dengan baik.'
    ],
    [
        'author_name' => 'Siti Khadijah',
        'author_role' => 'Orang Tua Santri',
        'author_avatar' => 'SK',
        'content' => 'Anak saya yang dulunya sulit menghafal, sekarang menjadi semangat setiap hari. Lingkungan pondok yang nyaman dan kondusif sangat membantu proses hafalan.'
    ],
    [
        'author_name' => 'Muhammad Rizki',
        'author_role' => 'Alumni',
        'author_avatar' => 'MR',
        'content' => 'Pengalaman berharga selama di pondok. Selain hafalan, saya juga dibekali dengan ilmu agama dan akhlak mulia. Sangat direkomendasikan!'
    ],
    [
        'author_name' => 'Dr. Hj. Nur Aini',
        'author_role' => 'Orang Tua',
        'author_avatar' => 'NA',
        'content' => 'Pondok ini sangat memperhatikan kualitas hafalan dan pemahaman agama. Putri saya kini hafal 10 Juz dan akhlaknya semakin baik.'
    ],
    [
        'author_name' => 'Abdullah bin Salim',
        'author_role' => 'Santri Program Online',
        'author_avatar' => 'AS',
        'content' => 'Program online sangat membantu saya yang tinggal jauh. Bimbingan via Zoom tetap efektif dan personal.'
    ],
    [
        'author_name' => 'Umi Kalsum',
        'author_role' => 'Wali Santri',
        'author_avatar' => 'UK',
        'content' => 'Biaya terjangkau namun fasilitas dan kualitas pengajaran sangat baik. Anak saya betah dan berkembang pesat.'
    ]
];

// Settings untuk dinamis content
$settings = [
    'site_title' => 'Rumah Tahfidzh Hikmah',
    'site_description' => $site_description,
    'footer_text' => 'Generasi Qur\'ani Indonesia',
    'hero_badge' => 'بسم الله الرحمن الرحيم',
    'hero_title' => 'Welcome to <span>Rumah Tahfidzh Hikmah</span>'
];

// Function to get current page/section
function get_current_section() {
    $section = 'home';
    if(isset($_SERVER['REQUEST_URI'])) {
        if(strpos($_SERVER['REQUEST_URI'], '#services') !== false) $section = 'services';
        elseif(strpos($_SERVER['REQUEST_URI'], '#products') !== false) $section = 'products';
        elseif(strpos($_SERVER['REQUEST_URI'], '#reviews') !== false) $section = 'reviews';
        elseif(strpos($_SERVER['REQUEST_URI'], '#about') !== false) $section = 'about';
        elseif(strpos($_SERVER['REQUEST_URI'], '#registration') !== false) $section = 'registration';
    }
    return $section;
}

$current_section = get_current_section();

// Dynamic title and description based on section
$section_titles = [
    'home' => $site_name . ' - Pendaftaran Santri Baru | Pondok Tahfidz Qur\'an',
    'services' => 'Program Unggulan ' . $site_name . ' - Metode Tahfidz Mudah & Menyenangkan',
    'products' => 'Aktivitas Santri ' . $site_name . ' - Kegiatan Sehari-hari Pondok Pesantren',
    'reviews' => 'Testimoni Santri & Orang Tua - ' . $site_name,
    'about' => 'Tentang ' . $site_name . ' - Profil Pondok Pesantren Tahfidz Qur\'an',
    'registration' => 'Formulir Pendaftaran Santri Baru - ' . $site_name
];

$section_descriptions = [
    'home' => $site_description . ' Daftarkan putra-putri Anda menjadi santri penghafal Al-Qur\'an. Program tahfidz intensif dengan target 30 juz.',
    'services' => 'Berbagai program unggulan ' . $site_name . ': Tahfidz Intensif (30 Juz), Tahfidz Reguler (10 Juz), Program Anak (7-12 tahun), Program Dewasa, dan Program Online via Zoom.',
    'products' => 'Lihat aktivitas santri sehari-hari di ' . $site_name . '. Mulai dari kegiatan menghafal Al-Qur\'an, kajian, hingga pembinaan karakter islami.',
    'reviews' => 'Apa kata mereka tentang pengalaman menghafal Al-Qur\'an di ' . $site_name . '? Baca testimoni dari para santri dan orang tua.',
    'about' => $site_name . ' adalah pondok pesantren tahfidz Al-Qur\'an yang berkomitmen mencetak generasi Qur\'ani berpegang teguh pada Al-Qur\'an dan As-Sunnah.',
    'registration' => 'Isi formulir pendaftaran santri baru ' . $site_name . '. Daftar sekarang untuk mengikuti program tahfidz Al-Qur\'an terbaik.'
];

$page_title = $section_titles[$current_section];
$page_description = $section_descriptions[$current_section];

// Default placeholder image
$default_product_image = 'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"%3E%3Crect width="400" height="300" fill="%231a1e2b"/%3E%3Ctext x="50%25" y="50%25" text-anchor="middle" fill="%23666" dy=".3em"%3EAktivitas Santri%3C/text%3E%3C/svg%3E';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo $site_keywords; ?>">
    <meta name="author" content="Rumah Tahfidzh Hikmah">
    <meta name="robots" content="index, follow">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $current_url; ?>">
    
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $current_url; ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="<?php echo $hero_image; ?>">
    <meta property="og:site_name" content="Rumah Tahfidzh Hikmah">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #0fc518d3;
            --primary-dark: #05a10de1;
            --dark: #0f1a24;
            --text-light: #ffffff;
            --text-gray: #e0e0e0;
            --glass-bg: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.05);
            --gradient-primary: linear-gradient(135deg, #05af1cd3, #00cc22f1);
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--dark);
            color: var(--text-light);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        /* Header */
        header {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 1400px;
            padding: 15px 30px;
            background: rgba(15, 26, 36, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 100px;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
            cursor: pointer;
        }
        
        .logo-container img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
            background: var(--gradient-primary);
            padding: 2px;
        }
        
        .logo-text {
            font-size: 1.3rem;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        nav {
            display: flex;
            gap: 5px;
        }
        
        nav a {
            padding: 10px 20px;
            color: var(--text-gray);
            text-decoration: none;
            font-weight: 500;
            border-radius: 50px;
            transition: 0.3s;
        }
        
        nav a:hover, nav a.active {
            background: var(--gradient-primary);
            color: white;
        }
        
        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        /* Hero Section */
        .showcase {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            background: linear-gradient(135deg, #0a141c, #0f1a24);
        }
        
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0.4;
        }
        
        .hero-background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 1000px;
            padding: 0 20px;
        }
        
        .hero-badge {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 50px;
            margin-bottom: 30px;
            font-size: 0.9rem;
        }
        
        .showcase h1 {
            font-size: clamp(2.5rem, 8vw, 5rem);
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .showcase h1 span {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .hero-description {
            font-size: 1.2rem;
            color: var(--text-gray);
            max-width: 600px;
            margin: 0 auto 40px;
        }
        
        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 30px;
        }
        
        .section {
            padding: 100px 0;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-header h2 {
            font-size: clamp(2rem, 5vw, 3rem);
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }
        
        .section-header p {
            color: var(--text-gray);
            margin-top: 15px;
            font-size: 1.1rem;
        }
        
        /* Services */
        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .service-box {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 30px;
            padding: 50px 30px;
            transition: 0.3s;
            text-align: center;
        }
        
        .service-box:hover {
            transform: translateY(-15px);
            border-color: var(--primary);
            box-shadow: 0 0 30px rgba(3, 97, 19, 0.89);
        }
        
        .service-icon {
            width: 90px;
            height: 90px;
            background: var(--gradient-primary);
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
            margin: 0 auto 30px;
            transform: rotate(45deg);
        }
        
        .service-icon i {
            transform: rotate(-45deg);
        }
        
        .service-box h3 {
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        /* Products */
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .product-box {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 30px;
            overflow: hidden;
            transition: 0.3s;
        }
        
        .product-box:hover {
            transform: translateY(-15px);
            border-color: var(--primary);
            box-shadow: 0 0 30px rgba(3, 97, 19, 0.89);
        }
        
        .product-image-container {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
            background: #1a1e2b;
        }
        
        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .product-box:hover .product-image {
            transform: scale(1.1);
        }
        
        .product-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--gradient-primary);
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            z-index: 2;
        }
        
        .product-content {
            padding: 25px;
        }
        
        .product-content h3 {
            margin-bottom: 10px;
            font-size: 1.3rem;
        }
        
        .product-content p {
            color: var(--text-gray);
            margin-bottom: 15px;
        }
        
        /* Reviews */
        .reviews {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .review-box {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 30px;
            padding: 40px 30px;
            transition: 0.3s;
        }
        
        .review-box:hover {
            transform: translateY(-15px);
            border-color: var(--primary);
        }
        
        .review-quote {
            font-size: 3rem;
            color: var(--primary);
            opacity: 0.5;
            line-height: 1;
        }
        
        .review-author {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: 20px;
        }
        
        .review-avatar {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 1.2rem;
        }
        
        /* About */
        .about-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
            background: var(--glass-bg);
            padding: 50px;
            border-radius: 30px;
        }
        
        .about-content p {
            margin-bottom: 20px;
            line-height: 1.8;
        }
        
        /* Button */
        .btn {
            padding: 14px 35px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            background: var(--gradient-primary);
            color: white;
            border: none;
            transition: 0.3s;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(41, 255, 77, 0.5);
        }
        
        /* Form */
        .registration-form {
            max-width: 900px;
            margin: 0 auto;
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 30px;
            padding: 50px;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--primary);
            font-weight: 500;
        }
        
        .form-group label .required {
            color: #ff4444;
        }
        
        .form-group input, 
        .form-group select, 
        .form-group textarea {
            width: 100%;
            padding: 14px 18px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--glass-border);
            border-radius: 15px;
            color: white;
            font-size: 1rem;
            transition: 0.3s;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 15px rgba(15, 197, 24, 0.3);
        }
        
        .form-group select option {
            background: var(--dark);
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        .form-section-title {
            font-size: 1.3rem;
            color: var(--primary);
            margin: 30px 0 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--primary);
            display: inline-block;
        }
        
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }
        
        .radio-group label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-weight: normal;
        }
        
        .radio-group input[type="radio"] {
            width: auto;
            cursor: pointer;
        }
        
        .btn-submit {
            width: 100%;
            padding: 16px;
            font-size: 1.1rem;
            margin-top: 20px;
        }
        
        .success-message {
            background: rgba(15, 197, 24, 0.2);
            border: 1px solid var(--primary);
            padding: 15px 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            text-align: center;
            color: var(--primary);
        }
        
        .error-message {
            background: rgba(255, 68, 68, 0.2);
            border: 1px solid #ff4444;
            padding: 15px 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            text-align: center;
            color: #ff8888;
        }
        
        /* Footer */
        .footer {
            background: linear-gradient(135deg, #0a141c, #0f1a24);
            border-top: 1px solid rgba(15, 197, 24, 0.2);
            padding: 60px 0 30px;
            text-align: center;
            margin-top: 80px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }
            
            nav {
                display: none;
                position: absolute;
                top: 80px;
                left: 20px;
                right: 20px;
                background: var(--dark);
                flex-direction: column;
                border-radius: 20px;
                padding: 20px;
            }
            
            nav.active {
                display: flex;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .services, .products, .reviews {
                grid-template-columns: 1fr;
            }
            
            .registration-form {
                padding: 30px 20px;
            }
            
            .container {
                padding: 0 20px;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .about-content {
                padding: 30px 20px;
            }
            
            header {
                width: 95%;
                padding: 12px 20px;
            }
            
            .logo-text {
                font-size: 1rem;
            }
            
            nav a {
                text-align: center;
                padding: 12px;
            }
        }
        
        /* SEO Helper */
        .seo-helper {
            position: absolute;
            left: -9999px;
            top: -9999px;
            visibility: hidden;
        }
    </style>
</head>
<body>
    <!-- SEO Helper -->
    <div class="seo-helper">
        <h1>Rumah Tahfidzh Hikmah - Pondok Pesantren Tahfidz Al-Qur'an Terbaik</h1>
        <p>Pendaftaran santri baru dibuka sepanjang tahun. Program tahfidz Al-Qur'an dengan metode mudah dan menyenangkan.</p>
    </div>

    <header id="header">
        <div class="logo-container" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
            <img src="<?php echo $logo_url; ?>" alt="Logo Rumah Tahfidzh Hikmah" 
                 onerror="this.src='img/logo.png'">
            <span class="logo-text"><?php echo $settings['footer_text']; ?></span>
        </div>
        <nav id="navMenu">
            <a href="#home" class="active">Home</a>
            <a href="#services">Layanan</a>
            <a href="#products">Aktivitas</a>
            <a href="#reviews">Testimoni</a>
            <a href="#about">Tentang</a>
            <a href="#registration">Daftar</a>
            <a href="admin/login.php">Admin</a>
        </nav>
        <div class="mobile-menu-btn" onclick="toggleMobileMenu()">
            <i class="fas fa-bars"></i>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="showcase" id="home">
        <div class="hero-background">
            <img src="img/bg.png" alt="Rumah Tahfidzh Hikmah" 
                 onerror="this.style.display='none'">
        </div>
        <div class="hero-content">
            <span class="hero-badge"><?php echo $settings['hero_badge']; ?></span>
            <h1><?php echo $settings['hero_title']; ?></h1>
            <p class="hero-description"><?php echo $settings['site_description']; ?></p>
            <div>
                <a href="#registration" class="btn">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Services Section -->
        <section class="section" id="services">
            <div class="section-header">
                <h2>Program Unggulan</h2>
                <p>Berbagai program yang kami tawarkan untuk mencetak generasi Qur'ani</p>
            </div>
            <div class="services">
                <?php foreach($services as $service): ?>
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas <?php echo $service['icon_class']; ?>"></i>
                    </div>
                    <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                    <p><?php echo htmlspecialchars($service['description']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Products Section -->
        <section class="section" id="products">
            <div class="section-header">
                <h2>Aktivitas Santri</h2>
                <p>Kegiatan sehari-hari santri di pondok pesantren</p>
            </div>
            <div class="products">
                <?php foreach($products as $product): ?>
                <div class="product-box">
                    <div class="product-image-container">
                        <img class="product-image" 
                             src="img/<?php echo $product['image']; ?>.png" 
                             alt="<?php echo htmlspecialchars($product['title']); ?>"
                             onerror="this.src='<?php echo $default_product_image; ?>'">
                        <?php if(!empty($product['badge'])): ?>
                        <div class="product-badge"><?php echo htmlspecialchars($product['badge']); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="product-content">
                        <h3><?php echo htmlspecialchars($product['title']); ?></h3>
                        <p><?php echo htmlspecialchars($product['description']); ?></p>
                        <a href="<?php echo $product['link_url']; ?>" class="btn" style="padding: 10px 25px; font-size: 0.9rem;">Lihat Detail</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Reviews Section -->
        <section class="section" id="reviews">
            <div class="section-header">
                <h2>Testimoni Santri & Orang Tua</h2>
                <p>Apa kata mereka tentang pengalaman di pondok kami</p>
            </div>
            <div class="reviews">
                <?php foreach($testimonials as $testimonial): ?>
                <div class="review-box">
                    <div class="review-quote">❝</div>
                    <p>"<?php echo htmlspecialchars($testimonial['content']); ?>"</p>
                    <div class="review-author">
                        <div class="review-avatar">
                            <?php echo $testimonial['author_avatar']; ?>
                        </div>
                        <div>
                            <h3><?php echo htmlspecialchars($testimonial['author_name']); ?></h3>
                            <small style="color: var(--primary);"><?php echo htmlspecialchars($testimonial['author_role']); ?></small>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- About Section -->
        <section class="section" id="about">
            <div class="section-header">
                <h2>Tentang Kami</h2>
            </div>
            <div class="about-content">
                <p>Rumah Tahfidzh Hikmah adalah pondok pesantren tahfidz Al-Qur'an yang berkomitmen mencetak generasi Qur'ani yang berpegang teguh kepada Al-Qur'an dan As-Sunnah.</p>
                <p>Kami menyediakan program unggulan menghafal Al-Qur'an dengan metode yang mudah dan menyenangkan, didukung oleh tenaga pengajar yang profesional dan berpengalaman. Lingkungan yang nyaman, asri, dan kondusif untuk fokus menghafal Al-Qur'an.</p>
                <p><strong>Visi:</strong> Menjadi pusat pendidikan tahfidz Al-Qur'an terkemuka yang mencetak generasi penghafal Qur'an dengan akhlak mulia.</p>
                <p><strong>Misi:</strong> Menyelenggarakan program tahfidz berkualitas, membina santri berakhlak Qur'ani, dan melahirkan hafizh-hafizhah yang bermanfaat bagi umat.</p>
            </div>
        </section>

        <!-- Registration Section -->
        <section class="section" id="registration">
            <div class="section-header">
                <h2>Pendaftaran Santri Baru</h2>
                <p>Isi formulir di bawah ini untuk mendaftar menjadi santri</p>
            </div>
            
            <div class="registration-form">
                <div id="form-message"></div>
                
                <form id="registrationForm" method="POST" action="#">
                    <h3 class="form-section-title"><i class="fas fa-user"></i> Data Pribadi</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Nama Lengkap <span class="required">*</span></label>
                            <input type="text" name="full_name" placeholder="Nama lengkap sesuai KTP" required>
                        </div>
                        <div class="form-group">
                            <label>NIK (Opsional)</label>
                            <input type="text" name="nik" placeholder="Nomor Induk Kependudukan" maxlength="16">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="place_birth" placeholder="Tempat lahir">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="date_birth">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Jenis Kelamin <span class="required">*</span></label>
                            <div class="radio-group">
                                <label><input type="radio" name="gender" value="Laki-laki" required> Laki-laki</label>
                                <label><input type="radio" name="gender" value="Perempuan" required> Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon/WA <span class="required">*</span></label>
                            <input type="tel" name="phone" placeholder="0812xxxx" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <select name="last_education">
                                <option value="">Pilih Pendidikan</option>
                                <option value="SD">SD Sederajat</option>
                                <option value="SMP">SMP Sederajat</option>
                                <option value="SMA">SMA Sederajat</option>
                                <option value="D1/D2/D3">D1/D2/D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Alamat Lengkap <span class="required">*</span></label>
                        <textarea name="address" placeholder="Alamat lengkap sesuai KTP" required></textarea>
                    </div>
                    
                    <h3 class="form-section-title"><i class="fas fa-graduation-cap"></i> Data Pendidikan & Program</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Program Pilihan <span class="required">*</span></label>
                            <select name="program_choice" required>
                                <option value="Tahfidz Intensif">Tahfidz Intensif (Target Hafal 30 Juz)</option>
                                <option value="Tahfidz Reguler">Tahfidz Reguler (Target Hafal 10 Juz)</option>
                                <option value="Program Anak">Program Anak (Usia 7-12 Tahun)</option>
                                <option value="Program Dewasa">Program Dewasa (Usia 13-25 Tahun)</option>
                                <option value="Program Online">Program Online (Via Zoom)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kemampuan Baca Al-Quran</label>
                            <select name="can_read_quran">
                                <option value="Belum">Belum Bisa</option>
                                <option value="Sedang Belajar">Sedang Belajar</option>
                                <option value="Ya">Sudah Bisa</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Jumlah Hafalan Saat Ini (Juz)</label>
                        <input type="number" name="memorization_juz" min="0" max="30" value="0">
                    </div>
                    
                    <div class="form-group">
                        <label>Asal Sekolah/Institusi</label>
                        <input type="text" name="school_name" placeholder="Nama sekolah atau institusi terakhir">
                    </div>
                    
                    <h3 class="form-section-title"><i class="fas fa-users"></i> Data Orang Tua/Wali</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Nama Orang Tua/Wali</label>
                            <input type="text" name="parent_name" placeholder="Nama ayah/ibu/wali">
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon Orang Tua</label>
                            <input type="tel" name="parent_phone" placeholder="Nomor telepon orang tua">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Pekerjaan Orang Tua</label>
                        <input type="text" name="parent_occupation" placeholder="Pekerjaan orang tua/wali">
                    </div>
                    
                    <button type="submit" class="btn btn-submit">
                        <i class="fas fa-paper-plane"></i> Daftar Sekarang
                    </button>
                </form>
            </div>
        </section>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Rumah Tahfidzh Hikmah. All Rights Reserved. Made with <span style="color: #ff4444;">❤️</span> for Quran Generation</p>
            <p style="margin-top: 15px; font-size: 0.85rem;">
                <i class="fas fa-map-marker-alt"></i> Jl. Pendidikan No. 123, Kota Santri | 
                <i class="fas fa-phone"></i> (021) 1234567 | 
                <i class="fas fa-envelope"></i> info@rumahtahfidzhhikmah.com
            </p>
        </div>
    </footer>

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            document.getElementById('navMenu').classList.toggle('active');
        }
        
        // Smooth scroll for navigation
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', function(e) {
                if(this.getAttribute('href').startsWith('#')) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const target = document.getElementById(targetId);
                    if(target) {
                        window.scrollTo({ top: target.offsetTop - 100, behavior: 'smooth' });
                        // Update active class
                        document.querySelectorAll('nav a').forEach(l => l.classList.remove('active'));
                        this.classList.add('active');
                    }
                    if(window.innerWidth <= 768) toggleMobileMenu();
                }
            });
        });
        
        // Logo click handler
        document.querySelector('.logo-container').addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
            document.querySelectorAll('nav a').forEach(l => l.classList.remove('active'));
            document.querySelector('nav a[href="#home"]').classList.add('active');
        });
        
        // Active navigation highlight on scroll
        const sections = ['home', 'services', 'products', 'reviews', 'about', 'registration'];
        
        window.addEventListener('scroll', () => {
            let current = '';
            const scrollPosition = window.scrollY + 150;
            
            for(let section of sections) {
                const element = document.getElementById(section);
                if(element) {
                    const offsetTop = element.offsetTop;
                    const offsetBottom = offsetTop + element.offsetHeight;
                    if(scrollPosition >= offsetTop && scrollPosition < offsetBottom) {
                        current = section;
                        break;
                    }
                }
            }
            
            document.querySelectorAll('nav a').forEach(link => {
                link.classList.remove('active');
                const href = link.getAttribute('href').substring(1);
                if(href === current) {
                    link.classList.add('active');
                }
            });
        });
        
        // Form submission handler
        document.getElementById('registrationForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            const messageDiv = document.getElementById('form-message');
            
            messageDiv.innerHTML = '';
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';
            submitBtn.disabled = true;
            
            try {
                const formData = new FormData(this);
                const response = await fetch('api/register.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                if (result.success) {
                    messageDiv.innerHTML = `<div class="success-message">
                        <i class="fas fa-check-circle"></i> ${result.message}
                    </div>`;
                    this.reset();
                } else {
                    messageDiv.innerHTML = `<div class="error-message">
                        <i class="fas fa-exclamation-circle"></i> ${result.message}
                    </div>`;
                }
            } catch (error) {
                console.error('Error submitting form:', error);
                messageDiv.innerHTML = `<div class="error-message">
                    <i class="fas fa-exclamation-circle"></i> Terjadi kesalahan koneksi. Silakan coba lagi nanti.
                </div>`;
            } finally {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                messageDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    </script>
</body>
</html>