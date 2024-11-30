<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Tentang Firlan Books Store - Toko buku terpercaya dengan koleksi lengkap untuk pecinta buku di Indonesia">
    <title>About - Firlan Books Store</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-amber-50/30">
    <x-navbar></x-navbar>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12 font-main">
        <!-- Hero Section -->
        <section class="mb-16 overflow-hidden rounded-2xl bg-gradient-to-r from-amber-100 to-amber-50 shadow-lg">
            <div class="flex flex-col md:flex-row items-center justify-between p-8 md:p-12">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-serif font-bold text-amber-800 mb-6">
                        Selamat Datang di Firlan Books Store
                    </h1>
                    <p class="text-amber-700 text-lg leading-relaxed">
                        Kami adalah destinasi terpercaya bagi para pencinta buku di Indonesia. Dengan koleksi yang
                        lengkap dan pelayanan prima, kami berkomitmen untuk memberikan pengalaman berbelanja yang
                        memuaskan bagi setiap pelanggan.
                    </p>
                </div>
                <div class="md:w-1/2 md:pl-8">
                    <!-- TODO : CARIKAN GAMBAR TOKO BUKU -->
                    <img src="/images/about-hero.jpg" alt="Suasana Toko Firlan Books"
                        class="w-full rounded-lg shadow-xl transform hover:scale-105 transition-transform duration-300">
                </div>
            </div>
        </section>

        <!-- Vision & Mission Section -->
        <section class="mb-16">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-serif font-bold text-amber-800 mb-4">Visi & Misi</h2>
                <p class="text-amber-700 max-w-2xl mx-auto">Komitmen kami untuk mengembangkan budaya literasi di
                    Indonesia</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="group bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border border-amber-100">
                    <div class="flex items-center mb-6">
                        <span class="text-3xl text-amber-600 mr-4">
                            <i class="fa-solid fa-eye"></i>
                        </span>
                        <h3 class="text-2xl font-serif font-bold text-amber-800">Visi</h3>
                    </div>
                    <ul class="space-y-4 text-amber-700">
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            Menjadi toko buku terkemuka dan terpercaya di Indonesia
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            Menjadi mitra terbaik dalam pengembangan industri buku
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            Berkontribusi dalam peningkatan literasi nasional
                        </li>
                    </ul>
                </div>
                <div
                    class="group bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border border-amber-100">
                    <div class="flex items-center mb-6">
                        <span class="text-3xl text-amber-600 mr-4">
                            <i class="fa-solid fa-bullseye"></i>
                        </span>
                        <h3 class="text-2xl font-serif font-bold text-amber-800">Misi</h3>
                    </div>
                    <ul class="space-y-4 text-amber-700">
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            Menyediakan koleksi buku berkualitas dan komprehensif
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            Memberikan pelayanan prima kepada setiap pelanggan
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            Mendukung perkembangan budaya literasi nasional
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="mb-16">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-serif font-bold text-amber-800 mb-4">Mengapa Memilih Kami?</h2>
                <p class="text-amber-700 max-w-2xl mx-auto">Keunggulan yang kami tawarkan untuk pengalaman berbelanja
                    terbaik Anda</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                    <div
                        class="bg-amber-50 rounded-full w-16 h-16 flex items-center justify-center mb-6 group-hover:bg-amber-100 transition-colors">
                        <i class="fa-solid fa-truck text-amber-700 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-amber-800 mb-3">Pengiriman Cepat</h3>
                    <p class="text-amber-700">Layanan pengiriman yang cepat dan efisien ke seluruh Indonesia.</p>
                </div>
                <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                    <div
                        class="bg-amber-50 rounded-full w-16 h-16 flex items-center justify-center mb-6 group-hover:bg-amber-100 transition-colors">
                        <i class="fa-solid fa-shield-halved text-amber-700 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-amber-800 mb-3">Keamanan Berbelanja</h3>
                    <p class="text-amber-700">Sistem pembayaran aman dan terpercaya untuk kenyamanan Anda.</p>
                </div>
                <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                    <div
                        class="bg-amber-50 rounded-full w-16 h-16 flex items-center justify-center mb-6 group-hover:bg-amber-100 transition-colors">
                        <i class="fa-solid fa-book-open text-amber-700 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-amber-800 mb-3">Koleksi Lengkap</h3>
                    <p class="text-amber-700">Beragam kategori buku untuk memenuhi kebutuhan membaca Anda.</p>
                </div>
                <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                    <div
                        class="bg-amber-50 rounded-full w-16 h-16 flex items-center justify-center mb-6 group-hover:bg-amber-100 transition-colors">
                        <i class="fa-solid fa-headset text-amber-700 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-amber-800 mb-3">Layanan Pelanggan</h3>
                    <p class="text-amber-700">Tim support yang ramah dan profesional siap membantu Anda.</p>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="mb-16">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-serif font-bold text-amber-800 mb-4">Tim Kami</h2>
                <p class="text-amber-700 max-w-2xl mx-auto">Berkenalan dengan orang-orang hebat di balik Firlan Books
                    Store</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- TODO : MASUKKAN GAMBAR ANGGOTA YANG LAIN -->
                <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="relative mb-6">
                        <img src="/images/staff/firlan-syah.jpeg" alt="Firlan Syah"
                            class="w-32 h-32 rounded-full mx-auto object-cover group-hover:scale-105 transition-transform duration-300">
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-amber-100 px-4 py-1 rounded-full">
                            <span class="text-amber-800 font-medium">Pemilik</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-amber-800 text-center">Firlan Syah</h3>
                </div>
                <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="relative mb-6">
                        <img src="/images/staff/yudistira.jpeg" alt="Yudistira"
                            class="w-32 h-32 rounded-full mx-auto object-cover group-hover:scale-105 transition-transform duration-300">
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-amber-100 px-4 py-1 rounded-full">
                            <span class="text-amber-800 font-medium">Marketing</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-amber-800 text-center">Yudistira</h3>
                </div>
                <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="relative mb-6">
                        <img src="/images/social-media.jpg" alt="Devinta"
                            class="w-32 h-32 rounded-full mx-auto object-cover group-hover:scale-105 transition-transform duration-300">
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-amber-100 px-4 py-1 rounded-full">
                            <span class="text-amber-800 font-medium">Social Media</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-amber-800 text-center">Devinta</h3>
                </div>
                <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="relative mb-6">
                        <img src="/images/warehouse.jpg" alt="Yudistira"
                            class="w-32 h-32 rounded-full mx-auto object-cover group-hover:scale-105 transition-transform duration-300">
                        <div
                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-amber-100 px-4 py-1 rounded-full">
                            <span class="text-amber-800 font-medium">Warehouse</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-amber-800 text-center">Yudistira</h3>
                </div>
            </div>
        </section>
    </main>

    <x-footer></x-footer>
</body>

</html>