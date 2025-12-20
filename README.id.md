<!-- portfolio -->
<!-- slug: fanthom-store -->
<!-- title: Toko Fanthom -->
<!-- description: Aplikasi web e-commerce CRUD sederhana menggunakan Laravel 10, Docker, Tailwind CSS, dan Alpine JS -->
<!-- image: https://github.com/daffa09/fanthom-store/assets/68214221/868041dd-1c5e-4e9e-8861-1dfc8d8d5f26 -->
<!-- tags: laravel, docker, tailwindcss, alpinejs, mysql, sail, vite -->

<p align="center"><a href="" target="_blank"><img src="https://github.com/daffa09/fanthom-store/assets/68214221/868041dd-1c5e-4e9e-8861-1dfc8d8d5f26" width="900"></a></p>

# Toko Fanthom (Fanthom Store)

Aplikasi web e-commerce berbasis CRUD modern yang dibangun dengan Laravel 10, berjalan dalam lingkungan Docker. Proyek ini mendemonstrasikan pengembangan full-stack dengan Laravel Sail, menampilkan UI yang elegan ditenagai oleh Tailwind CSS dan komponen interaktif dengan Alpine.js.

## 📋 Ringkasan

Fanthom Store adalah proyek pembelajaran yang menampilkan praktik pengembangan web modern dengan Laravel 10 dan Docker. Terinspirasi oleh [tokokita-laravel](https://github.com/afifbasya/tokokita-laravel), aplikasi ini menyediakan solusi e-commerce lengkap dengan manajemen produk, fungsionalitas keranjang belanja, dan antarmuka pengguna yang responsif.

## ✨ Fitur

- **Manajemen Produk (CRUD)**
  - Membuat produk baru dengan gambar.
  - Membaca dan menampilkan produk dalam katalog.
  - Memperbarui informasi produk dan inventaris.
  - Menghapus produk dengan konfirmasi.

- **Pengalaman Pengguna**
  - Desain responsif untuk semua perangkat.
  - Pemuatan halaman cepat dengan Vite.
  - UI interaktif dengan Alpine.js.
  - Styling cantik dengan Tailwind CSS.

- **Integrasi Docker**
  - Lingkungan pengembangan yang ter-kontainerisasi.
  - Laravel Sail untuk manajemen Docker yang mudah.
  - Kontainer database MySQL.
  - PhpMyAdmin untuk administrasi database.

- **Stack Modern**
  - Framework backend Laravel 10.
  - Vite untuk bundling aset.
  - Livewire untuk komponen reaktif.
  - Sistem autentikasi.

## 🛠️ Tech Stack

| Teknologi | Tujuan |
|------------|---------|
| **Laravel 10** | Framework backend PHP |
| **Docker** | Platform kontainerisasi |
| **Laravel Sail** | Lingkungan pengembangan Docker |
| **MySQL** | Database relasional |
| **PhpMyAdmin** | Antarmuka manajemen database |
| **Tailwind CSS** | Framework CSS utility-first |
| **Alpine.js** | Framework JavaScript ringan |
| **Vite** | Alat bangun frontend modern |

## 📁 Struktur Proyek

```
fanthom-store/
├── app/
│   ├── Http/Controllers/          # Controller aplikasi
│   ├── Models/                    # Model Eloquent
│   └── Livewire/                 # Komponen Livewire
├── database/
│   ├── migrations/               # Migrasi database
│   └── seeders/                  # Seeder database
├── resources/
│   ├── views/                    # Template Blade
│   ├── css/                      # File Tailwind CSS
│   └── js/                       # File JavaScript
├── routes/
│   └── web.php                   # Rute web
├── public/                       # Aset publik
├── docker-compose.yml            # Konfigurasi layanan Docker
├── Makefile                      # Pintasan perintah
└── README.md
```

## 🚀 Memulai

### Prasyarat

- **Docker Desktop** - Harus sedang berjalan.
- **Terminal berbasis Unix** - Terminal Linux/macOS atau WSL untuk Windows.
- **Git** - Untuk mengkloning repositori.
- **Make** (opsional) - Untuk menggunakan perintah Makefile.

### Langkah Instalasi

1. **Clone Repositori**
   ```bash
   git clone https://github.com/daffa09/fanthom-store.git
   cd fanthom-store
   ```

2. **Buka di Editor Kode Anda**
   - Buka proyek di VS Code atau editor pilihan Anda.

3. **Ubah Nama File Environment**
   ```bash  
   cp .env.example .env
   ```

4. **Jalankan Layanan Docker**
   
   Menggunakan Makefile (disarankan):
   ```bash
   make db-start
   ```
   
   Atau secara manual:
   ```bash
   ./vendor/bin/sail up -d
   ```

5. **Instal Dependensi**
   
   Jalankan perintah berikut secara berurutan:
   
   ```bash
   # Instal dependensi Composer
   make composer-install
   # Atau: ./vendor/bin/sail composer install
   
   # Instal dependensi NPM
   make npm-install
   # Atau: ./vendor/bin/sail npm install
   ```

6. **Setup Database**
   
   ```bash
   # Jalankan migrasi
   make migrate
   # Atau: ./vendor/bin/sail artisan migrate
   
   # Opsional: Isi database dengan data sampel
   make db-migrate
   # Atau: ./vendor/bin/sail artisan db:seed
   ```

7. **Buat Link Penyimpanan (Storage Link)**
   ```bash
   make storage-link
   # Atau: ./vendor/bin/sail artisan storage:link
   ```

8. **Build Aset Frontend**
   ```bash
   make npm-dev
   # Atau: ./vendor/bin/sail npm run dev
   ```

9. **Jalankan Aplikasi**
   ```bash
   make run
   # Atau: ./vendor/bin/sail up
   ```

10. **Akses Aplikasi**
     - Frontend: `http://localhost`
     - PhpMyAdmin: `http://localhost:8080`

## 💻 Penggunaan

### Mengakses PhpMyAdmin

- URL: `http://localhost:8080`
- Server: `mysql`
- Username: Sesuai konfigurasi di `.env` (default: `sail`)
- Password: Sesuai konfigurasi di `.env` (default: `password`)

### Mengelola Produk

1. **Membuat Produk**
   - Navigasi ke halaman pembuatan produk.
   - Isi detail produk (nama, deskripsi, harga).
   - Unggah gambar produk.
   - Kirim formulir untuk menyimpan.

2. **Melihat Produk**
   - Telusuri katalog produk.
   - Filter dan cari produk.
   - Lihat detail produk.

3. **Memperbarui Produk**
   - Klik edit pada produk yang diinginkan.
   - Ubah informasi produk.
   - Simpan perubahan.

4. **Menghapus Produk**
   - Klik tombol hapus.
   - Konfirmasi penghapusan.
   - Produk dihapus dari database.

### Menggunakan Perintah Makefile

Proyek ini menyertakan Makefile untuk operasi umum:

```bash
# Operasi database
make db-start          # Jalankan layanan Docker
make db-migrate        # Jalankan migrasi dan seeder
make migrate           # Jalankan migrasi saja

# Manajemen dependensi
make composer-install  # Instal dependensi PHP
make npm-install       # Instal dependensi Node

# Pengembangan
make run               # Jalankan aplikasi
make npm-dev           # Bangun aset untuk pengembangan
make npm-build         # Bangun aset untuk produksi

# Utilitas
make storage-link      # Buat tautan simbolis storage
make fresh             # Instal ulang (migrasi + seeder)
```

## 🔧 Konfigurasi

### Variabel Lingkungan (Environment Variables)

Variabel kunci di `.env`:

```env
APP_NAME="Fanthom Store"
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=fanthom_store
DB_USERNAME=sail
DB_PASSWORD=password

VITE_APP_NAME="${APP_NAME}"
```

### Layanan Docker

Dikonfigurasi dalam `docker-compose.yml`:
- **Aplikasi Laravel**: Port 80
- **Database MySQL**: Port 3306
- **PhpMyAdmin**: Port 8080
- **Mailhog** (jika dikonfigurasi): Port 8025

## 🎨 Pengembangan Frontend

### Tailwind CSS

Tailwind sudah dikonfigurasi dan siap digunakan:

```html
<div class="bg-blue-500 text-white p-4 rounded-lg">
  Diberi gaya dengan Tailwind
</div>
```

### Alpine.js

Komponen interaktif dengan Alpine:

```html
<div x-data="{ open: false }">
  <button @click="open = !open">Beralih</button>
  <div x-show="open">Konten</div>
</div>
```

### Vite Build

```bash
# Pengembangan (dengan hot reload)
npm run dev

# Build produksi
npm run build
```

## 🐛 Pemecahan Masalah

### Masalah Umum

1. **Docker tidak berjalan**
   - Error: Cannot connect to Docker daemon
   - Solusi: Jalankan Docker Desktop.

2. **Port sudah digunakan**
   - Error: Port 80/3306/8080 already allocated
   - Solusi: Ubah port di `docker-compose.yml` atau hentikan layanan yang bentrok.

3. **Izin ditolak (WSL)**
   - Error: Permission denied saat menjalankan perintah.
   - Solusi: Pastikan integrasi WSL Docker Desktop diaktifkan.

4. **Composer install gagal**
   - Error: Dependensi tidak dapat diselesaikan.
   - Solusi: Perbarui `composer.json` atau jalankan `composer update`.

5. **Kesalahan migrasi**
   - Error: Table already exists.
   - Solusi: Jalankan `make fresh` untuk mereset database.

### Log dan Debugging

```bash
# Lihat log aplikasi
./vendor/bin/sail logs

# Lihat log layanan spesifik
./vendor/bin/sail logs mysql

# Masuk ke shell kontainer
./vendor/bin/sail shell

# Jalankan perintah artisan
./vendor/bin/sail artisan {perintah}
```

## 🚀 Deployment

### Build Produksi

1. **Build aset**
   ```bash
   npm run build
   ```

2. **Optimalkan autoloader**
   ```bash
   composer install --optimize-autoloader --no-dev
   ```

3. **Caching konfigurasi**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

4. **Atur environment**
   ```env
   APP_ENV=production
   APP_DEBUG=false
   ```

### Platform Deployment

Kompatibel dengan:
- AWS EC2 / ECS
- DigitalOcean
- Heroku
- Laravel Forge
- Laravel Vapor

## 🤝 Kontribusi

Proyek ini terinspirasi oleh [tokokita-laravel](https://github.com/afifbasya/tokokita-laravel). Kontribusi, perbaikan, dan saran sangat diterima!

## 📄 Lisensi

Proyek ini bersifat open source dan tersedia untuk tujuan edukasi.

## 🙏 Ucapan Terima Kasih

- Terinspirasi oleh [tokokita-laravel](https://github.com/afifbasya/tokokita-laravel) oleh [afifbasya](https://github.com/afifbasya).
- Dibangun dengan alat ekosistem Laravel.
- Ditenagai oleh Tailwind CSS dan Alpine.js.

---

**Selamat Berbelanja!** 🛒✨
