# Aplikasi Website SMK Negeri 1 Manokwari

Aplikasi website sekolah berbasis Laravel 12 dengan dashboard admin untuk mengelola informasi dan konten sekolah secara terpusat.

---

## 📋 Daftar Isi

- [Spesifikasi](#spesifikasi)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Instalasi](#instalasi)
- [Konfigurasi](#konfigurasi)
- [Fitur Aplikasi](#fitur-aplikasi)
- [Deskripsi Menu](#deskripsi-menu)
- [Struktur Database](#struktur-database)
- [Troubleshooting](#troubleshooting)

---

## 🔧 Spesifikasi

### Tech Stack
| Komponen | Versi |
|----------|-------|
| **PHP** | ^8.2 |
| **Laravel Framework** | ^12.0 |
| **Database** | SQLite / MySQL |
| **Frontend Framework** | Tailwind CSS 3.1, Bootstrap 5 |
| **Build Tool** | Vite 6.2 |
| **Admin Panel Template** | AdminLTE 3.2 |
| **JavaScript** | Alpine.js 3.4, Axios 1.8 |
| **Package Manager** | Composer, NPM |

### Fitur Utama
- ✅ Responsive Web Design
- ✅ Admin Dashboard untuk manajemen konten
- ✅ Autentikasi user dengan email verification
- ✅ Management profile sekolah
- ✅ Galeri foto sekolah
- ✅ Informasi dan berita
- ✅ Program keahlian/jurusan
- ✅ Data guru dan tenaga kependidikan
- ✅ Manajemen fasilitas sekolah
- ✅ Data siswa/siswi
- ✅ Manajemen mata pelajaran dan course
- ✅ PKL (Praktik Kerja Lapangan)
- ✅ SPMB (Seleksi Penerimaan Murid Baru)

---

## 💻 Persyaratan Sistem

### Minimum Requirements
- PHP 8.2 atau lebih tinggi
- Composer (Package Manager PHP)
- Node.js & npm (untuk frontend)
- Web Server (Apache/Nginx)
- Database (SQLite sudah tersedia, atau MySQL/PostgreSQL)

### Tools Rekomendasi
- Git (version control)
- VS Code atau IDE PHP lainnya
- Postman (untuk testing API jika ada)

---

## 📦 Instalasi

### Step 1: Clone atau Copy Project
```bash
# Jika menggunakan git
git clone <repository-url> esemkan1
cd esemkan1

# Atau copy folder project secara langsung
```

### Step 2: Install PHP Dependencies
```bash
composer install
```

### Step 3: Install Frontend Dependencies
```bash
npm install
```

### Step 4: Setup Environment File
```bash
# Copy file .env
cp .env.example .env

# Atau buat secara manual dengan edit .env
# Sesuaikan konfigurasi database dan APP_KEY
```

### Step 5: Generate Application Key
```bash
php artisan key:generate
```

### Step 6: Migrasi Database
```bash
# Jalankan semua migrasi
php artisan migrate

# Atau dengan seeding data dummy
php artisan migrate --seed
```

### Step 7: Build Frontend Assets
```bash
# Development mode
npm run dev

# Production build
npm run build
```

### Step 8: Jalankan Development Server
```bash
# Terminal 1: PHP Server
php artisan serve

# Terminal 2: Vite dev server (jika menggunakan npm run dev)
npm run dev
```

Aplikasi akan accessible di: `http://localhost:8000`

### Akun Default (Jika Menggunakan Seeder)
```
Email: admin@example.com
Password: password
```

---

## ⚙️ Konfigurasi

### File Konfigurasi Penting

#### `.env` - Environment Configuration
```env
APP_NAME=Esemkan
APP_ENV=local
APP_DEBUG=true
APP_KEY=base64:xxxxxxxxxxxx
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

# Atau untuk MySQL:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=esemkan1
DB_USERNAME=root
DB_PASSWORD=
```

#### `config/app.php`
- Konfigurasi timezone dan locale
- Service providers

#### `config/database.php`
- Konfigurasi database connections

### Storage & Upload
- Upload files disimpan di: `public/uploads/`
- Pastikan folder dan permission sudah sesuai:
  ```bash
  chmod -R 775 storage/
  chmod -R 775 public/uploads/
  ```

---

## 🎯 Fitur Aplikasi

### Halaman Publik (Frontend)

#### 1. **Beranda**
- Halaman utama website sekolah
- Menampilkan informasi umum dan highlight konten
- **Controller:** `BerandaController`

#### 2. **Profil Sekolah**
- Informasi lengkap tentang sekolah
- Visi, misi, dan sejarah
- **Controller:** `ProfilController`

#### 3. **Program Keahlian**
- Daftar jurusan/program keahlian yang tersedia
- Detail program keahlian
- Informasi mata pelajaran dan struktur kurikulum
- **Controller:** `JurusanController`

#### 4. **Guru & Tenaga Kependidikan**
- Daftar lengkap GTK (Guru dan Tenaga Kependidikan)
- Informasi jabatan dan keahlian
- Photo profil guru
- **Controller:** `GtkController`

#### 5. **Fasilitas Sekolah**
- Daftar fasilitas dan infrastruktur sekolah
- Galeri foto fasilitas
- **Controller:** `FasilitasController`

#### 6. **Informasi & Berita**
- Berita terbaru dari sekolah
- Pengumuman penting
- Artikel informatif
- **Controller:** `InformasiController`

#### 7. **SPMB (Seleksi Penerimaan Murid Baru)**
- Informasi pendaftaran siswa baru
- Alur dan persyaratan pendaftaran
- Link pendaftaran online
- **Controller:** `SubmissionController`

#### 8. **PKL (Praktik Kerja Lapangan)**
- Informasi tentang program PKL
- Daftar industri/perusahaan partner
- Panduan pelaksanaan PKL
- **Controller:** `PklapangController`

#### 9. **Galeri**
- Koleksi foto sekolah
- Album galeri
- **Controller:** `GaleriController`

---

### Dashboard Admin (Backend)

Semua menu admin memerlukan **login dan email verification**. Mengakses via: `http://localhost:8000/admin/dashboard`

#### 1. **Dashboard**
- Ringkasan statistik sekolah
- Widget informasi penting
- **Controller:** `DashboardController`
- **Routes:** POST `admin/dashboard`

#### 2. **Identitas Sekolah**
- Kelola informasi identitas sekolah (nama, alamat, kontak)
- NPSN, akreditasi, dan informasi resmi lainnya
- Logo dan foto sekolah
- **Controller:** `IdentityController`
- **Routes:** 
  - GET `admin/identity` - Daftar
  - POST `admin/identity` - Buat
  - GET `admin/identity/{id}/edit` - Edit
  - PUT `admin/identity/{id}` - Update
  - DELETE `admin/identity/{id}` - Hapus

#### 3. **Galeri Sekolah**
- Upload dan manage foto sekolah
- Organisir photo dalam album
- Set photo sebagai featured/utama
- **Controller:** `GaleriController`
- **Routes:** Resource routes (CRUD lengkap)
  - GET `admin/galeri_sekolah` - Daftar galeri
  - POST `admin/galeri_sekolah` - Upload foto
  - GET `admin/galeri_sekolah/{id}/edit` - Edit
  - PUT `admin/galeri_sekolah/{id}` - Update
  - DELETE `admin/galeri_sekolah/{id}` - Hapus

#### 4. **Informasi & Berita**
- Publikasi berita dan pengumuman
- Manage artikel informasi
- Set featured information
- **Controller:** `InfoController`
- **Routes:** Resource routes (CRUD lengkap)
  - GET `admin/pen_informasi` - Daftar berita
  - POST `admin/pen_informasi` - Buat berita
  - GET `admin/pen_informasi/{id}/edit` - Edit
  - PUT `admin/pen_informasi/{id}` - Update
  - DELETE `admin/pen_informasi/{id}` - Hapus

#### 5. **Fasilitas Sekolah**
- Manage daftar fasilitas sekolah
- Deskripsi dan foto fasilitas
- Kategori dan kondisi fasilitas
- **Controller:** `FacilityController`
- **Routes:** Resource routes (CRUD lengkap)
  - GET `admin/fasilitas_sekolah` - Daftar fasilitas
  - POST `admin/fasilitas_sekolah` - Tambah fasilitas
  - GET `admin/fasilitas_sekolah/{id}/edit` - Edit
  - PUT `admin/fasilitas_sekolah/{id}` - Update
  - DELETE `admin/fasilitas_sekolah/{id}` - Hapus

#### 6. **Guru & Tenaga Kependidikan (GTK)**
- Data lengkap guru dan staff sekolah
- NIP, bidang keahlian, jabatan
- Status dan informasi pribadi
- Foto profil guru
- **Controller:** `GuruTKController`
- **Routes:** Resource routes (CRUD lengkap)
  - GET `admin/gt_kependidikan` - Daftar GTK
  - POST `admin/gt_kependidikan` - Tambah GTK
  - GET `admin/gt_kependidikan/{id}/edit` - Edit
  - PUT `admin/gt_kependidikan/{id}` - Update
  - DELETE `admin/gt_kependidikan/{id}` - Hapus

#### 7. **Jabatan**
- Manage daftar jabatan di sekolah
- Deskripsi dan tugas jabatan
- **Controller:** `JabatanController`
- **Routes:** Resource routes (CRUD lengkap)
  - GET `admin/jabatan` - Daftar jabatan
  - POST `admin/jabatan` - Tambah jabatan
  - GET `admin/jabatan/{id}/edit` - Edit
  - PUT `admin/jabatan/{id}` - Update
  - DELETE `admin/jabatan/{id}` - Hapus

#### 8. **Program Keahlian**
- Manage program keahlian/jurusan
- Deskripsi program, kompetensi lulusan
- Mata pelajaran yang diambil per jurusan
- Durasi dan sertifikasi program
- **Controller:** `KeahlianController`
- **Routes:** Resource routes (CRUD lengkap)
  - GET `admin/prog_keahlian` - Daftar program
  - POST `admin/prog_keahlian` - Tambah program
  - GET `admin/prog_keahlian/{id}/edit` - Edit
  - PUT `admin/prog_keahlian/{id}` - Update
  - DELETE `admin/prog_keahlian/{id}` - Hapus

#### 9. **Mata Pelajaran**
- Manage daftar mata pelajaran
- Kode mapel dan deskripsi
- Jam pembelajaran per semester
- **Controller:** `SubjectController`
- **Routes:** Resource routes + custom
  - GET `admin/matapelajaran` - Daftar
  - POST `admin/matapelajaran` - Buat
  - GET `admin/matapelajaran/{id}/edit` - Edit
  - PUT `admin/matapelajaran/{id}` - Update
  - DELETE `admin/matapelajaran/{id}` - Hapus
  - GET `admin/get-kode-mapel` - Get kode mapel (AJAX)

#### 10. **Course/Materi Pembelajaran**
- Manage course dan materi pembelajaran
- Konten per kelas dan semester
- Leader/ketua jurusan yang bertanggung jawab
- Deskripsi dan resource materi
- **Controller:** `CoursesController`
- **Routes:** Resource routes (CRUD lengkap)
  - GET `admin/courses` - Daftar course
  - POST `admin/courses` - Buat course
  - GET `admin/courses/{id}/edit` - Edit
  - PUT `admin/courses/{id}` - Update
  - DELETE `admin/courses/{id}` - Hapus

#### 11. **Data Siswa/Siswi**
- Manage data siswa sekolah
- NIS, biodata pribadi, alamat
- Kelas dan program keahlian
- Status kehadiran dan prestasi
- **Controller:** `SiswaController`
- **Routes:** Resource routes (CRUD lengkap)
  - GET `admin/siswa_siswi` - Daftar siswa
  - POST `admin/siswa_siswi` - Tambah siswa
  - GET `admin/siswa_siswi/{id}/edit` - Edit
  - PUT `admin/siswa_siswi/{id}` - Update
  - DELETE `admin/siswa_siswi/{id}` - Hapus

#### 12. **PKL (Praktik Kerja Lapangan)**
- Manage data PKL siswa
- Daftar industry/perusahaan partner
- Schedule dan laporan PKL
- Pembimbing dan evaluasi
- **Controller:** `PklController`
- **Routes:** Resource routes (CRUD lengkap)
  - GET `admin/pk_lapangan` - Daftar PKL
  - POST `admin/pk_lapangan` - Buat PKL
  - GET `admin/pk_lapangan/{id}/edit` - Edit
  - PUT `admin/pk_lapangan/{id}` - Update
  - DELETE `admin/pk_lapangan/{id}` - Hapus

#### 13. **SPMB Settings**
- Konfigurasi dan setting SPMB
- Periode pendaftaran
- Persyaratan dan biaya pendaftaran
- Kuota penerimaan per jurusan
- **Controller:** `SpmbController`
- **Routes:** 
  - GET `admin/spmb/settings` - Lihat settings
  - POST `admin/spmb/update` - Update settings

#### 14. **Pengaturan Halaman**
- Manage konten dinamis halaman publik
- Setting untuk berbagai section website
- Logo, banner, dan visual identity
- **Controller:** `PageSettingsController`
- **Routes:** 
  - GET `admin/pengaturan` - Halaman setting
  - POST `admin/pengaturan/update` - Update setting

#### 15. **Web Admin Management**
- Manage admin users dan permissions
- Setting keamanan aplikasi
- Log aktivitas admin
- **Controller:** `WebAdminController`
- **Routes:** Resource routes (CRUD lengkap)
  - GET `admin/webadmin` - Daftar admin
  - POST `admin/webadmin` - Tambah admin
  - GET `admin/webadmin/{id}/edit` - Edit
  - PUT `admin/webadmin/{id}` - Update
  - DELETE `admin/webadmin/{id}` - Hapus

---

## 📊 Struktur Database

### Model & Tabel Utama

| Model | Tabel | Deskripsi |
|-------|-------|-----------|
| **SchIdentity** | `sch_identities` | Identitas sekolah |
| **Jurusan** | `jurusans` | Program keahlian/jurusan |
| **Gtk** | `gtks` | Guru & tenaga kependidikan |
| **Jabatan** | `jabatans` | Daftar jabatan |
| **Fasilitas** | `fasilitas` | Fasilitas sekolah |
| **Informasi** | `informasis` | Berita & informasi |
| **Galeri** | `galeris` | Foto & galeri |
| **Siswa** | `siswas` | Data siswa |
| **Subject** | `subjects` | Mata pelajaran |
| **Courses** | `courses` | Course/materi pembelajaran |
| **Pkl** | `pkls` | Data PKL |
| **Spmb** | `spmb_settings` | Setting SPMB |
| **User** | `users` | Admin users |
| **PageSettings** | `page_settings` | Setting halaman dinamis |

---

## 🚀 Cara Menggunakan

### Untuk Website Frontend
1. Kunjungi `http://localhost:8000`
2. Jelajahi berbagai menu publik
3. Lihat informasi sekolah, program, dan galeri

### Untuk Admin Dashboard
1. Kunjungi `http://localhost:8000/login`
2. Login dengan akun admin
3. Verify email jika diperlukan
4. Akses `http://localhost:8000/admin/dashboard`
5. Manage semua konten sekolah

### Best Practices Admin
- ✅ Selalu backup database sebelum update besar
- ✅ Upload foto dengan format: JPG, PNG (max 5MB)
- ✅ Gunakan slug/URL-friendly naming
- ✅ Update informasi secara berkala
- ✅ Verifikasi data sebelum publish

---

## 🔐 Autentikasi & Keamanan

- **Sistem Login:** Email-based authentication
- **Email Verification:** Required untuk akses admin
- **Password Hash:** Using bcrypt (Laravel default)
- **Session Management:** Secure session handling
- **CSRF Protection:** Enabled untuk semua forms

### Ubah Password Admin
```bash
php artisan tinker
> $user = User::find(1);
> $user->password = bcrypt('password-baru');
> $user->save();
```

---

## 🐛 Troubleshooting

### Masalah Umum

#### Connection Refused (Port 8000 already in use)
```bash
# Gunakan port berbeda
php artisan serve --port=8001
```

#### Database error "Column not found"
```bash
# Re-run migrations
php artisan migrate:refresh
php artisan migrate --seed
```

#### npm run dev tidak berjalan
```bash
# Clear npm cache dan reinstall
rm -rf node_modules package-lock.json
npm install
npm run dev
```

#### Permission denied pada storage/uploads
```bash
# Set permission
chmod -R 777 storage/ public/uploads/
```

#### Session atau cache error
```bash
# Clear cache & config
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

---

## 📝 Dokumentasi Tambahan

### Environment Modes

**Development**
```bash
APP_ENV=local
APP_DEBUG=true
```

**Production**
```bash
APP_ENV=production
APP_DEBUG=false
# Enable caching dan optimization
php artisan config:cache
php artisan view:cache
php artisan route:cache
```

### Backup & Restore Database

```bash
# Backup
php artisan backup:run

# Restore
sqlite3 database/database.sqlite < backup.sql
```

### Deployment ke Server

```bash
# 1. Clone project
git clone <repo> /var/www/html/esemkan1

# 2. Install dependencies
cd /var/www/html/esemkan1
composer install --optimize-autoloader --no-dev
npm install && npm run build

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Database setup
php artisan migrate --force
php artisan db:seed --force

# 5. Set permissions
chown -R www-data:www-data .
chmod -R 755 storage/ bootstrap/cache/ public/uploads/
```

---

## 📞 Support & Kontribusi

Untuk pertanyaan lebih lanjut atau kontribusi:
- 📧 Email: admin@smkn1manokwari.sch.id
- 🌐 Website: https://smkn1manokwari.sch.id
- 📱 Phone: [Nomor sekolah]

---

## 📄 Lisensi

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

**Last Updated:** February 2026  
**Version:** 1.0  
**Status:** Active Development
