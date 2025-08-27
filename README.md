# E-Commerce Laravel 11

**Platform toko online modern dibangun dengan Laravel 11, Tailwind CSS, dan SQLite.**

## Deskripsi
Aplikasi e-commerce sederhana untuk belajar atau prototyping: manajemen produk, shopping cart, checkout, dan lebih banyak lagi.

## Fitur Utama
- CRUD produk dengan gambar dan deskripsi
- Keranjang belanja dan checkout
- Autentikasi pengguna
- UI responsif menggunakan Tailwind CSS
- Migrasi & seeding otomatis

## ​ Teknologi
- Backend: Laravel 11, PHP 8.x  
- Frontend: Blade templating, Tailwind CSS, Vite, Node.js 20 + npm 10  
- Database: SQLite (lokal), dengan support .env untuk konfigurasi lainnya

## Instalasi
```bash
git clone https://github.com/Firlans/e-commerce.git
cd e-commerce
composer install
npm install
cp .env.example .env
php artisan key:generate
touch ./database/database.sqlite
php artisan migrate:fresh --seed
