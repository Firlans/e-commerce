{{-- slide-show.blade.php --}}
<div class="w-full max-w-7xl mx-auto mt-4 mb-8 px-4 sm:px-6 lg:px-8">
    <!-- Promotional Banner Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Main Large Banner -->
        <div class="md:col-span-2 relative rounded-xl overflow-hidden shadow-lg h-[400px]">
            <img src="/dummy-banner-main.jpg" alt="Promo Utama" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-amber-900/70 to-transparent">
                <div class="absolute bottom-8 left-8 text-white max-w-lg">
                    <span class="bg-amber-600 text-white px-4 py-1 rounded-full text-sm mb-4 inline-block">Promo Terbatas</span>
                    <h2 class="text-3xl font-serif font-bold mb-2">Flash Sale Buku Bestseller</h2>
                    <p class="text-lg mb-4">Dapatkan diskon hingga 50% untuk koleksi buku terbaik minggu ini</p>
                    <a href="/promo" class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded-full inline-block transition-colors">
                        Lihat Sekarang
                    </a>
                </div>
            </div>
        </div>

        <!-- Secondary Banners -->
        <div class="relative rounded-xl overflow-hidden shadow-lg h-[250px]">
            <img src="/dummy-banner-1.jpg" alt="Buku Baru" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-amber-900/70 to-transparent">
                <div class="absolute bottom-6 left-6 text-white max-w-xs">
                    <span class="bg-amber-600 text-white px-3 py-1 rounded-full text-sm mb-3 inline-block">New Arrival</span>
                    <h3 class="text-xl font-serif font-bold mb-2">Koleksi Terbaru</h3>
                    <p class="text-sm mb-3">Temukan buku-buku terbaru bulan ini</p>
                    <a href="/new-books" class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-1.5 rounded-full text-sm inline-block transition-colors">
                        Lihat Koleksi
                    </a>
                </div>
            </div>
        </div>

        <!-- <div class="relative rounded-xl overflow-hidden shadow-lg h-[250px]">
            <img src="/dummy-banner-2.jpg" alt="Pre-Order" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-amber-900/70 to-transparent">
                <div class="absolute bottom-6 left-6 text-white max-w-xs">
                    <span class="bg-amber-600 text-white px-3 py-1 rounded-full text-sm mb-3 inline-block">Pre-Order</span>
                    <h3 class="text-xl font-serif font-bold mb-2">Pre-Order Buku</h3>
                    <p class="text-sm mb-3">Pesan sekarang dan dapatkan bonus eksklusif</p>
                    <a href="/pre-order" class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-1.5 rounded-full text-sm inline-block transition-colors">
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div> -->

        <!-- Additional Category Banners -->
        <div class="md:col-span-2 grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Category 1 -->
            <div class="relative rounded-xl overflow-hidden shadow-lg h-[200px]">
                <img src="/dummy-category-1.jpg" alt="Buku Anak" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-amber-900/70 to-transparent">
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-lg font-serif font-bold mb-1">Buku Anak</h3>
                        <a href="/category/children" class="text-sm hover:underline">Lihat Semua</a>
                    </div>
                </div>
            </div>

            <!-- Category 2 -->
            <!-- <div class="relative rounded-xl overflow-hidden shadow-lg h-[200px]">
                <img src="/dummy-category-2.jpg" alt="Novel" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-amber-900/70 to-transparent">
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-lg font-serif font-bold mb-1">Novel</h3>
                        <a href="/category/novel" class="text-sm hover:underline">Lihat Semua</a>
                    </div>
                </div>
            </div> -->

            <!-- Category 3 -->
            <!-- <div class="relative rounded-xl overflow-hidden shadow-lg h-[200px]">
                <img src="/dummy-category-3.jpg" alt="Non-Fiksi" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-amber-900/70 to-transparent">
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-lg font-serif font-bold mb-1">Non-Fiksi</h3>
                        <a href="/category/non-fiction" class="text-sm hover:underline">Lihat Semua</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>