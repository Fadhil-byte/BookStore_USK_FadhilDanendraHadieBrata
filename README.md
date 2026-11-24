# BookStore_USK_FadhilDanendraHadieBrata

Aplikasi Web Toko Buku USK (**BukuKita USK**) berbasis framework **Laravel 12** dan **PHP** yang dikembangkan untuk Uji Sertifikasi Kompetensi (USK) Siswa SMK RPL Skema Junior Web Developer.

---

## 🎨 Desain UI/UX (Figma)
Rancangan antarmuka visual sistem ini dapat diakses pada tautan Figma berikut:
* **Figma Project:** [USK Book Store - Fadhil](https://www.figma.com/design/HAhu7pnLgQ0O2KBmLJ33Z5/USK-Book_Store-Fadhil?node-id=0-1&t=nqpwRJVbiNqHJ2Go-1)

---

## 🚀 Fitur Utama Sistem

### 1. Hak Akses Pelanggan (User / Pembeli)
* **Landing Page & Beranda:** Informasi toko, cuplikan buku rekomendasi terbaru, alur pemesanan, dan kategori literatur.
* **Autentikasi Akun:** Registrasi akun baru (validasi domain `@gmail.com`) dan login dengan proteksi pengamanan session.
* **Katalog Buku:** Pencarian cepat berdasarkan judul buku, nama penulis, dan penerbit, serta filter kategori literatur dan pengurutan harga.
* **Detail Buku:** Halaman rincian sinopsis buku, harga, status ketersediaan stok, dan formulir penambahan kuantitas ke keranjang.
* **Keranjang Belanja:** Perhitungan total belanja otomatis, update kuantitas, dan validasi ketersediaan stok real-time.
* **Checkout & Pemesanan:** Payment at Delivery (PAD) / Transfer Bank sebelum pengiriman dengan upload bukti bayar
* **Riwayat Pesanan:** Memantau status transaksi (Menunggu Konfirmasi, Diproses, Dikirim, Selesai, Dibatalkan), cetak struk/detail pesanan, upload bukti transfer, dan fitur pembatalan pesanan mandiri dengan pengembalian stok otomatis.
* **Contact to Admin:** Formulir pengiriman pesan pertanyaan/bantuan langsung kepada pengelola toko beserta riwayat tanggapan balasan admin.

### 2. Hak Akses Pengelola (Administrator)
* **Dashboard Administrator:** Ringkasan statistik operasional toko (Total Judul Buku, Kategori Literatur, Total Pesanan Masuk, Pengguna Terdaftar, dan Pesan Belum Dibalas).
* **Proteksi Keamanan (AdminMiddleware):** Pengamanan rute admin dengan pembatasan hak akses dan halaman resmi HTTP 403 Forbidden jika diakses akun non-admin.
* **Manajemen Master Kategori:** Tambah kategori baru, edit data kategori, dan proteksi hapus kategori jika masih menaungi judul buku.
* **Manajemen Master Buku:** Tambah judul buku baru, kelola stok dan harga, upload sampul buku, validasi judul unik, serta proteksi hapus buku jika sudah memiliki riwayat transaksi.
* **Manajemen Transaksi Pesanan:** Pemantauan seluruh transaksi pengguna, verifikasi keabsahan bukti transfer pembayaran, dan pembaruan status transaksi (*Diproses, Dikirim, Selesai, Dibatalkan*).
* **Manajemen Pengguna Terdaftar:** Tinjau daftar akun pelanggan terdaftar, jumlah transaksi, tanggal bergabung, serta fitur pengelolaan akun.
* **Layanan Pesan Masuk:** Membaca pesan masuk dari pelanggan serta mengirimkan pesan balasan langsung ke akun pelanggan.

---

## 📸 Tangkapan Layar Antarmuka (Preview)

Seluruh berkas tangkapan layar antarmuka sistem tersedia di folder `Preview_Foto/`:
1. **Landing Page:** `Preview_Foto/LandingPages.jpg`
2. **Halaman Login:** `Preview_Foto/HalamanLogin.JPG`
3. **Halaman Registrasi:** `Preview_Foto/HalamanRegistrasi.JPG`
4. **Dashboard User:** `Preview_Foto/DashboardUser.JPG`
5. **Katalog Buku User:** `Preview_Foto/KatalogUser.JPG`
6. **Detail Buku User:** `Preview_Foto/DetailBukuUser.JPG`
7. **Keranjang Belanja User:** `Preview_Foto/CartBeliBukuUSer.JPG`
8. **Riwayat Pesanan User:** `Preview_Foto/RiwayatBeliBukuUser.JPG`
9. **Hubungi Admin (Contact):** `Preview_Foto/ContactAdmin.JPG`
10. **Dashboard Admin:** `Preview_Foto/DashboardAdmin.JPG`
11. **Kelola Kategori Buku (Admin):** `Preview_Foto/KelolaKategoriadmin.JPG`
12. **Edit Kategori Buku (Admin):** `Preview_Foto/EditKategoriAdmin.JPG`
13. **Katalog Buku Admin:** `Preview_Foto/KatalogAdmin.JPG`
14. **Detail Buku Admin:** `Preview_Foto/DetailBukuAdmin.JPG`
15. **Tambah Buku Baru (Admin):** `Preview_Foto/TambahBukuAdmin.JPG`
16. **Edit Data Buku (Admin):** `Preview_Foto/EditDataBukuAdmin.JPG`
17. **Daftar Pesanan Admin:** `Preview_Foto/DaftarPesananAdmin.JPG`
18. **Konfirmasi Transaksi Admin:** `Preview_Foto/KonfirmasiTransaksiAdmin.JPG`
19. **Daftar Pesan Masuk Admin:** `Preview_Foto/PesanMasukAdmin.JPG`
20. **Detail & Balas Pesan Admin:** `Preview_Foto/DetailBalasanAdmin.JPG`
21. **Data Pengguna Terdaftar:** `Preview_Foto/ListUserAdmin.JPG`

---

## 🛠️ Spesifikasi Teknologi
* **Framework:** Laravel 12
* **Bahasa Pemrograman:** PHP ^8.2
* **Arsitektur:** Model - View - Controller (MVC)
* **Basis Data:** MySQL
* **Template Engine:** Laravel Blade (`.blade.php`)
* **Styling Antarmuka:** Custom Pure CSS Modern (`public/style.css`) dengan CSS Variables `:root`, Flexbox, dan Grid
* **Ikonografi:** Inline SVG Vector murni
* **Keamanan:**
  * Proteksi CSRF (Cross-Site Request Forgery) pada seluruh form POST
  * Sanitasi XSS bawaan Blade Engine `{{ ... }}`
  * Enkripsi kata sandi menggunakan BCRYPT Hash
  * Role-Based Access Control (RBAC) via Custom Middleware (`AdminMiddleware`)
  * Rate limiting pada percobaan autentikasi login

---

## 💻 Panduan Instalasi Lokal

1. **Clone Repositori:**
```bash
git clone https://github.com/Fadhil-byte/BookStore_USK_FadhilDanendraHadieBrata.git
cd BookStore_USK_FadhilDanendraHadieBrata
```

2. **Pasang Dependensi PHP:**
```bash
composer install
```

3. **Konfigurasi Berkas Environment:**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Konfigurasi Basis Data di berkas `.env`:**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=usk_latihan_3
DB_USERNAME=root
DB_PASSWORD=
```

5. **Jalankan Migrasi & Data Seeder:**
```bash
php artisan migrate --seed
```

6. **Jalankan Server Lokal:**
```bash
php artisan serve
```
Akses sistem melalui peramban: `http://localhost:8000` atau melalui Laragon `http://localhost/Latihan-3/public`.

---

## 🔑 Akun Demo Pengujian

| Role Akun | Alamat Email | Kata Sandi | Keterangan |
| :--- | :--- | :--- | :--- |
| **Administrator** | `admin@tokobuku.usk` | `admin123` | Akses penuh dashboard, katalog, kategori, pesanan, pesan & user |
| **Pelanggan** | `user@gmail.com` | `user1234` | Akses belanja buku, keranjang, checkout pesanan & kirim pesan |

---

&copy; 2026 Toko Buku USK. Dikembangkan oleh **Muhammad Fadhil Danendra Hadie Brata**.
