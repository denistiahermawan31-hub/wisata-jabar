<!-- HERO SECTION DENGAN BACKGROUND VIDEO -->
<section class="hero-section">
    <div class="video-overlay"></div>
    <video autoplay muted loop playsinline class="hero-video">
        <source src="public/videos/video4.mp4" type="video/mp4">
        Browser Anda tidak mendukung video HTML5.
    </video>

    <div class="hero-content">
        <h1 class="hero-title">Rasakan Keheningan dan Keajaiban Alam Murni</h1>
        <p class="hero-subtitle">Temukan pegunungan asri, air terjun tersembunyi, hingga pantai eksotis di Jawa Barat dan seluruh Nusantara.</p>
        
        <!-- Filter Pencarian Cepat -->
        <form class="search-bar-box" onsubmit="event.preventDefault();">
            <div class="search-item">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <label>Lokasi / Wilayah</label>
                    <input type="text" placeholder="Mau jalan ke mana?">
                </div>
            </div>
            <div class="search-divider"></div>
            <div class="search-item">
                <i class="fa-solid fa-mountain-sun"></i>
                <div>
                    <label>Kategori Wisata</label>
                    <select>
                        <option value="">Semua Jenis Alam</option>
                        <option value="gunung">Pegunungan & Hutan</option>
                        <option value="pantai">Pantai & Bahari</option>
                        <option value="curug">Curug / Air Terjun</option>
                        <option value="camping">Camping Ground</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn-search-submit">
                <i class="fa-solid fa-magnifying-glass"></i> Cari Wisata
            </button>
        </form>
    </div>

    <div class="scroll-down-indicator">
        <span>Scroll Ke Bawah</span>
        <i class="fa-solid fa-chevron-down"></i>
    </div>
</section>

<!-- SEKSI KATEGORI POPULER -->
<section class="section-container">
    <div class="section-header">
        <div>
            <span class="sub-title">Kategori Pilihan</span>
            <h2 class="main-title">Eksplorasi Berdasarkan Kebutuhanmu</h2>
        </div>
        <a href="#" class="link-more">Lihat Semua Kategori <i class="fa-solid fa-arrow-right"></i></a>
    </div>

    <div class="category-grid">
        <div class="category-card">
            <div class="icon-wrapper"><i class="fa-solid fa-mountain"></i></div>
            <h3>Pegunungan</h3>
            <p>120+ Destinasi Rindang</p>
        </div>
        <div class="category-card active">
            <div class="icon-wrapper"><i class="fa-solid fa-water"></i></div>
            <h3>Air Terjun / Curug</h3>
            <p>85+ Spot Segar</p>
        </div>
        <div class="category-card">
            <div class="icon-wrapper"><i class="fa-solid fa-umbrella-beach"></i></div>
            <h3>Pantai & Pesisir</h3>
            <p>95+ Pantai Eksotis</p>
        </div>
        <div class="category-card">
            <div class="icon-wrapper"><i class="fa-solid fa-campground"></i></div>
            <h3>Camping Ground</h3>
            <p>60+ Area Kemah</p>
        </div>
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
        <!-- Card 1 -->
        <div class="dest-card">
            <div class="dest-img">
                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80" alt="Pantai Pangandaran">
                <span class="badge-rating"><i class="fa-solid fa-star"></i> 4.9</span>
            </div>
            <div class="dest-body">
                <span class="dest-location"><i class="fa-solid fa-location-dot"></i> Pangandaran, Jawa Barat</span>
                <h3>Cagar Alam & Pantai Green Canyon</h3>
                <p>Jelajahi ngarai hijau yang memesona dengan tebing batu purba dan aliran sungai jernih.</p>
                <div class="dest-footer">
                    <span class="price">Rp 25.000 <span>/ Orang</span></span>
                    <a href="#" class="btn-outline">Detail Spot</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="dest-card">
            <div class="dest-img">
                <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=800&q=80" alt="Gunung Gede Pangrango">
                <span class="badge-rating"><i class="fa-solid fa-star"></i> 4.8</span>
            </div>
            <div class="dest-body">
                <span class="dest-location"><i class="fa-solid fa-location-dot"></i> Cianjur, Jawa Barat</span>
                <h3>Taman Nasional Gunung Gede</h3>
                <p>Nikmati pemandangan padang edelweis Surya Kencana dan jalur pendakian yang asri.</p>
                <div class="dest-footer">
                    <span class="price">Rp 35.000 <span>/ Orang</span></span>
                    <a href="#" class="btn-outline">Detail Spot</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="dest-card">
            <div class="dest-img">
                <img src="https://images.unsplash.com/photo-1448375240586-882707db888b?auto=format&fit=crop&w=800&q=80" alt="Hutan Pinus Rahong">
                <span class="badge-rating"><i class="fa-solid fa-star"></i> 4.7</span>
            </div>
            <div class="dest-body">
                <span class="dest-location"><i class="fa-solid fa-location-dot"></i> Pangalengan, Bandung</span>
                <h3>Hutan Pinus & River Tubing Rahong</h3>
                <p>Kawasan tempat berkemah sejuk di tengah rindangnya pepohonan pinus dan petualangan sungai.</p>
                <div class="dest-footer">
                    <span class="price">Rp 15.000 <span>/ Orang</span></span>
                    <a href="#" class="btn-outline">Detail Spot</a>
                </div>
            </div>
        </div>
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