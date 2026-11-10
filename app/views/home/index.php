<?php require_once __DIR__ . '/../templates/header.php'; ?>

<style>
    .destination-section {
        padding-top: 72px;
        padding-bottom: 72px;
    }

    .map-placeholder {
        min-height: 230px;
        display: grid;
        place-items: center;
        padding: 32px 20px;
        background: #f8faf8;
        border-top: 1px solid #e5ece7;
        border-bottom: 1px solid #e5ece7;
        text-align: center;
    }

    .map-placeholder-inner {
        width: min(760px, 100%);
        padding: 34px 24px;
        border: 1px dashed #a9bcae;
        border-radius: 12px;
        color: #718078;
    }

    .map-placeholder-inner i {
        display: block;
        margin-bottom: 10px;
        color: #477a58;
        font-size: 1.5rem;
    }

    .map-placeholder-inner strong {
        display: block;
        margin-bottom: 6px;
        color: #173d32;
        font-size: 1rem;
    }

    .map-placeholder-inner span {
        font-size: 0.82rem;
    }

    .stats-banner {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
        padding-top: 68px;
        padding-bottom: 68px;
    }

    .stats-banner .stat-item {
        padding: 28px 24px;
        background: #ffffff;
        border: 1px solid #e2ebe4;
        border-radius: 14px;
        box-shadow: 0 8px 20px rgba(23, 61, 50, 0.06);
        text-align: center;
    }

    .stats-banner .stat-item h2 {
        margin-bottom: 8px;
        color: #2f8a5a;
        font-family: var(--font-heading);
        font-size: clamp(2rem, 4vw, 2.8rem);
        line-height: 1;
    }

    .stats-banner .stat-item p {
        color: #6d7d73;
        font-size: 0.82rem;
        font-weight: 600;
        letter-spacing: 0.03em;
    }

    .destination-section .section-header {
        max-width: 1200px;
        margin: 0 auto 32px;
    }

    .destination-cards {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 24px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .destination-cards .dest-card {
        height: 100%;
    }

    .destination-cards .dest-body {
        display: flex;
        min-height: 220px;
        flex-direction: column;
    }

    .destination-cards .dest-body p {
        flex: 1;
    }

    @media (max-width: 900px) {
        .destination-cards {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

    }

    @media (max-width: 600px) {
        .destination-section {
            padding: 52px 20px;
        }

        .hero-title {
            font-size: 2.35rem;
            line-height: 1.12;
        }

        .destination-cards {
            grid-template-columns: 1fr;
        }

        .stats-banner {
            grid-template-columns: 1fr;
            padding-top: 48px;
            padding-bottom: 48px;
        }
    }

</style>

<!-- HERO SECTION DENGAN BACKGROUND VIDEO & CAROUSEL SLIDER -->
<section class="hero-section">
    <div class="video-overlay"></div>
    <video autoplay muted loop playsinline class="hero-video">
        <source src="public/videos/video4.mp4" type="video/mp4">
        Browser Anda tidak mendukung video HTML5.
    </video>

    <div class="hero-content">
        <h1 class="hero-title">Rasakan Keheningan dan Keajaiban Alam Murni</h1>
        <p class="hero-subtitle">Temukan pegunungan asri, air terjun tersembunyi, hingga pantai eksotis di Jawa Barat dan seluruh Nusantara.</p>
    </div>

    <!-- CAROUSEL SLIDER DESTINASI TANPA TOMBOL JELAJAHI -->
    <div class="dest-slider-wrapper">
        <div class="active-indicator-arrow"></div>

        <button class="slider-btn prev-btn" id="prevBtn" aria-label="Previous">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="dest-slider-viewport">
            <div class="dest-slider-track" id="sliderTrack">
                <div class="slider-item active" data-index="0" data-url="destinasi-gedung-sate.php">
                    <h3>Gedung Sate</h3>
                </div>
                <div class="slider-item" data-index="1" data-url="destinasi-papandayan.php">
                    <h3>Gunung Papandayan</h3>
                </div>
                <div class="slider-item" data-index="2" data-url="destinasi-kawah-putih.php">
                    <h3>Kawah Putih</h3>
                </div>
                <div class="slider-item" data-index="3" data-url="destinasi-green-canyon.php">
                    <h3>Green Canyon</h3>
                </div>
                <div class="slider-item" data-index="4" data-url="destinasi-curug-cikaso.php">
                    <h3>Curug Cikaso</h3>
                </div>
            </div>
        </div>

        <button class="slider-btn next-btn" id="nextBtn" aria-label="Next">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</section>

<!-- SEKSI DESTINASI UNGGULAN (CARDS) -->
<section class="section-container bg-light">
    <div class="section-header">
        <div>
            <span class="sub-title">Rekomendasi Utama</span>
            <h2 class="main-title">Destinasi Wisata Alam Terfavorit</h2>
        </div>
        <a href="#" class="link-more">Lihat Semua Wisata <i class="fa-solid fa-arrow-right"></i></a>
    </div>

    <div class="destination-grid">
        <!-- Card 1: Taman Safari Indonesia Bogor -->
        <div class="dest-card">
            <div class="dest-img">
                <img src="public/images/safari.jpeg" alt="Taman Safari Indonesia Bogor">
                <span class="badge-rating"><i class="fa-solid fa-star"></i> 4.7</span>
            </div>
            <div class="dest-body">
                <span class="dest-location"><i class="fa-solid fa-location-dot"></i> Cisarua, Bogor</span>
                <h3>Taman Safari Indonesia Bogor</h3>
                <p>Jelajahi konservasi alam terbuka, wahana permainan seru, dan lanskap alam pegunungan yang asri.</p>
                <div class="dest-footer">
                    <span class="price">Rp 450.000 <span>/ Orang</span></span>
                    <a href="taman-safari.php" class="btn-outline">Detail Spot</a>
                </div>
            </div>
        </div>

        <!-- Card 2: Kawah Putih -->
        <div class="dest-card">
            <div class="dest-img">
                <img src="public/images/kawah.jpeg" alt="Kawah Putih Ciwidey">
                <span class="badge-rating"><i class="fa-solid fa-star"></i> 4.5</span>
            </div>
            <div class="dest-body">
                <span class="dest-location"><i class="fa-solid fa-location-dot"></i> Pasirjambu, Kab. Bandung</span>
                <h3>Kawah Putih Ciwidey</h3>
                <p>Danau kawah gunung berapi belerang ini memiliki warna khas, tanaman langka & satwa liar eksotis.</p>
                <div class="dest-footer">
                    <span class="price">Rp 30.000 <span>/ Orang</span></span>
                    <a href="kawah-putih.php" class="btn-outline">Detail Spot</a>
                </div>
            </div>
        </div>

        <!-- Card 3: Gunung Tangkuban Parahu -->
        <div class="dest-card">
            <div class="dest-img">
                <img src="public/images/tangkuban.jpeg" alt="Gunung Tangkuban Parahu">
                <span class="badge-rating"><i class="fa-solid fa-star"></i> 4.6</span>
            </div>
            <div class="dest-body">
                <span class="dest-location"><i class="fa-solid fa-location-dot"></i> Sagalaherang, Subang</span>
                <h3>Gunung Tangkuban Parahu</h3>
                <p>Objek wisata populer dengan tempat pengamatan yang menyajikan panorama kawah gunung berapi yang mendidih.</p>
                <div class="dest-footer">
                    <span class="price">Rp 30.000 <span>/ Orang</span></span>
                    <a href="tangkuban-parahu.php" class="btn-outline">Detail Spot</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="map-placeholder" aria-label="Tempat peta Jawa Barat">
    <div class="map-placeholder-inner">
        <i class="fa-solid fa-map-location-dot" aria-hidden="true"></i>
        <strong>Peta destinasi Jawa Barat</strong>
        <span>Area peta akan dipasang di sini.</span>
    </div>
</section>

<!-- BANNER STATISTIK & REVIU -->
<section class="section-container stats-banner">
    <div class="stat-item">
        <h2>350+</h2>
        <p>Destinasi Terdaftar</p>
    </div>
    <div class="stat-item">
        <h2>50K+</h2>
        <p>Wisatawan Aktif</p>
    </div>
    <div class="stat-item">
        <h2>4.9/5</h2>
        <p>Penilaian Kepuasan</p>
    </div>
</section>

<script src="public/js/main.js"></script>
</body>
</html>
