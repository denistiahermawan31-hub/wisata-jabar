document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('sliderTrack');
    const items = document.querySelectorAll('.slider-item');
    const viewport = document.querySelector('.dest-slider-viewport');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let currentIndex = 0;
    let autoSlideTimer;

    function updateSliderPosition(index) {
        if (!items[index] || !track || !viewport) return;

        items.forEach((item, i) => {
            item.classList.remove('active');
            if (i === index) item.classList.add('active');
        });

        const item = items[index];
        const viewportWidth = viewport.offsetWidth;
        const itemOffsetLeft = item.offsetLeft;
        const itemWidth = item.offsetWidth;

        const targetTranslateX = (viewportWidth / 2) - (itemOffsetLeft + itemWidth / 2);
        track.style.transform = `translateX(${targetTranslateX}px)`;
        
        currentIndex = index;
    }

    function nextSlide() {
        let newIndex = (currentIndex + 1) % items.length;
        updateSliderPosition(newIndex);
    }

    function prevSlide() {
        let newIndex = (currentIndex - 1 + items.length) % items.length;
        updateSliderPosition(newIndex);
    }

    if (nextBtn && prevBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            resetAutoSlide();
        });

        prevBtn.addEventListener('click', () => {
            prevSlide();
            resetAutoSlide();
        });
    }

    items.forEach((item, index) => {
        item.addEventListener('click', () => {
            if (currentIndex === index) {
                const targetUrl = item.getAttribute('data-url');
                if (targetUrl) window.location.href = targetUrl;
            } else {
                updateSliderPosition(index);
                resetAutoSlide();
            }
        });
    });

    function startAutoSlide() {
        autoSlideTimer = setInterval(nextSlide, 4000);
    }

    function resetAutoSlide() {
        clearInterval(autoSlideTimer);
        startAutoSlide();
    }

    updateSliderPosition(0);
    startAutoSlide();

    window.addEventListener('resize', () => {
        updateSliderPosition(currentIndex);
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('sliderTrack');
    const items = document.querySelectorAll('.slider-item');
    const viewport = document.querySelector('.dest-slider-viewport');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let currentIndex = 0;
    let autoSlideTimer;

    function updateSliderPosition(index) {
        if (!items[index] || !track || !viewport) return;

        items.forEach((item, i) => {
            item.classList.remove('active');
            if (i === index) item.classList.add('active');
        });

        const item = items[index];
        const viewportWidth = viewport.offsetWidth;
        const itemOffsetLeft = item.offsetLeft;
        const itemWidth = item.offsetWidth;

        const targetTranslateX = (viewportWidth / 2) - (itemOffsetLeft + itemWidth / 2);
        track.style.transform = `translateX(${targetTranslateX}px)`;
        
        currentIndex = index;
    }

    function nextSlide() {
        let newIndex = (currentIndex + 1) % items.length;
        updateSliderPosition(newIndex);
    }

    function prevSlide() {
        let newIndex = (currentIndex - 1 + items.length) % items.length;
        updateSliderPosition(newIndex);
    }

    if (nextBtn && prevBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            resetAutoSlide();
        });

        prevBtn.addEventListener('click', () => {
            prevSlide();
            resetAutoSlide();
        });
    }

    // Klik pada judul tempat untuk navigasi / menggeser
    items.forEach((item, index) => {
        item.addEventListener('click', () => {
            if (currentIndex === index) {
                const targetUrl = item.getAttribute('data-url');
                if (targetUrl) window.location.href = targetUrl;
            } else {
                updateSliderPosition(index);
                resetAutoSlide();
            }
        });
    });

    function startAutoSlide() {
        autoSlideTimer = setInterval(nextSlide, 4000);
    }

    function resetAutoSlide() {
        clearInterval(autoSlideTimer);
        startAutoSlide();
    }

    updateSliderPosition(0);
    startAutoSlide();

    window.addEventListener('resize', () => {
        updateSliderPosition(currentIndex);
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('sliderTrack');
    const items = document.querySelectorAll('.slider-item');
    const viewport = document.querySelector('.dest-slider-viewport');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let currentIndex = 0;
    let autoSlideTimer;

    function updateSliderPosition(index) {
        if (!items[index] || !track || !viewport) return;

        items.forEach((item, i) => {
            item.classList.remove('active');
            if (i === index) item.classList.add('active');
        });

        const item = items[index];
        const viewportWidth = viewport.offsetWidth;
        const itemOffsetLeft = item.offsetLeft;
        const itemWidth = item.offsetWidth;

        const targetTranslateX = (viewportWidth / 2) - (itemOffsetLeft + itemWidth / 2);
        track.style.transform = `translateX(${targetTranslateX}px)`;
        
        currentIndex = index;
    }

    function nextSlide() {
        let newIndex = (currentIndex + 1) % items.length;
        updateSliderPosition(newIndex);
    }

    function prevSlide() {
        let newIndex = (currentIndex - 1 + items.length) % items.length;
        updateSliderPosition(newIndex);
    }

    if (nextBtn && prevBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            resetAutoSlide();
        });

        prevBtn.addEventListener('click', () => {
            prevSlide();
            resetAutoSlide();
        });
    }

    // Jika item aktif diklik, langsung buka halaman tujuan (misal: gedung-sate.php)
    items.forEach((item, index) => {
        item.addEventListener('click', () => {
            if (currentIndex === index) {
                const targetUrl = item.getAttribute('data-url');
                if (targetUrl) {
                    window.location.href = targetUrl;
                }
            } else {
                updateSliderPosition(index);
                resetAutoSlide();
            }
        });
    });

    function startAutoSlide() {
        autoSlideTimer = setInterval(nextSlide, 4000);
    }

    function resetAutoSlide() {
        clearInterval(autoSlideTimer);
        startAutoSlide();
    }

    updateSliderPosition(0);
    startAutoSlide();

    window.addEventListener('resize', () => {
        updateSliderPosition(currentIndex);
    });
});
// INISIALISASI PETA INTERAKTIF JAWA BARAT
document.addEventListener('DOMContentLoaded', () => {
    const mapElement = document.getElementById('jabarMap');
    
    if (mapElement) {
        // Koordinat Tengah Jawa Barat (Sekitar Bandung / Sumedang)
        const jabarMap = L.map('jabarMap', {
            scrollWheelZoom: false // Mencegah scroll terganggu
        }).setView([-6.9175, 107.6191], 8);

        // Tile Layer Bergaya Soft Emerald/Minimalis (CartoDB Positron)
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            maxZoom: 18
        }).addTo(jabarMap);

        // Data Pin Lokasi Wilayah Wisata Utama Jawa Barat
        const wilayahJabar = [
            {
                nama: "Bandung & Raya",
                deskripsi: "Pegunungan sejuk, Lembang, Kawah Putih & Wisata Kuliner",
                coords: [-6.9175, 107.6191],
                url: "destinasi.php?wilayah=bandung"
            },
            {
                nama: "Garut",
                deskripsi: "Gunung Papandayan, Air Panas Cipanas & Curug Sanghyang Taraje",
                coords: [-7.2167, 107.9000],
                url: "destinasi.php?wilayah=garut"
            },
            {
                nama: "Pangandaran",
                deskripsi: "Green Canyon, Pantai Barat/Timur & Cagar Alam",
                coords: [-7.6833, 108.6500],
                url: "destinasi.php?wilayah=pangandaran"
            },
            {
                nama: "Bogor & Puncak",
                deskripsi: "Taman Nasional Gede Pangrango, Kebun Raya & Curug",
                coords: [-6.5944, 106.7892],
                url: "destinasi.php?wilayah=bogor"
            },
            {
                nama: "Sukabumi",
                deskripsi: "Geopark Ciletuh, Curug Cikaso & Pelabuhan Ratu",
                coords: [-6.9181, 106.9267],
                url: "destinasi.php?wilayah=sukabumi"
            },
            {
                nama: "Cirebon & Kuningan",
                deskripsi: "Gunung Ciremai, Telaga Biru Cicerem & Wisata Budaya",
                coords: [-6.7320, 108.5523],
                url: "destinasi.php?wilayah=cirebon"
            }
        ];

        // Tambahkan Marker Untuk Setiap Wilayah
        wilayahJabar.forEach(region => {
            const popupContent = `
                <div class="map-popup-card">
                    <h4>${region.nama}</h4>
                    <p>${region.deskripsi}</p>
                    <a href="${region.url}">Eksplorasi Wilayah <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            `;

            L.marker(region.coords)
                .addTo(jabarMap)
                .bindPopup(popupContent);
        });
    }
});
document.addEventListener('DOMContentLoaded', () => {
    const mapElement = document.getElementById('jabarMap');
    
    if (mapElement) {
        // 1. Set titik tengah peta (Jawa Barat) & level zoom
        const jabarMap = L.map('jabarMap', {
            scrollWheelZoom: false // Supaya tidak mengganggu scroll halaman
        }).setView([-6.9175, 107.6191], 8);

        // 2. Load gambar peta gratis dari OpenStreetMap (Bebas Watermark & Tanpa API Key)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors',
            maxZoom: 18
        }).addTo(jabarMap);

        // 3. Data lokasi marker di Jawa Barat
        const wilayahJabar = [
            { nama: "Bandung", coords: [-6.9175, 107.6191], info: "Wisata Kota & Pegunungan" },
            { nama: "Garut", coords: [-7.2167, 107.9000], info: "Gunung Papandayan & Curug" },
            { nama: "Pangandaran", coords: [-7.6833, 108.6500], info: "Green Canyon & Pantai" },
            { nama: "Bogor & Puncak", coords: [-6.5944, 106.7892], info: "Kebun Raya & Curug" },
            { nama: "Sukabumi", coords: [-6.9181, 106.9267], info: "Geopark Ciletuh & Pantai" }
        ];

        // 4. Pasang pin marker ke dalam peta
        wilayahJabar.forEach(item => {
            L.marker(item.coords)
                .addTo(jabarMap)
                .bindPopup(`<b>${item.nama}</b><br>${item.info}`);
        });
    }
});
