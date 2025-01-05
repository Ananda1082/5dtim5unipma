# TIM-5_WEB-PROFILE
Repositori ini dibuat agar dapat memenuhi tugas UAS Mata kuliah Pemrograman Web

# Profil Tim 5

Website **Profil Tim 5** adalah sebuah aplikasi web sederhana yang memungkinkan pengguna untuk mengelola data profil anggota tim secara dinamis. Aplikasi ini mendukung fitur CRUD (Create, Read, Update, Delete) dan memiliki antarmuka yang user-friendly dengan tema hijau (#4CAF50).

## Fitur Utama

1. **Menampilkan Profil**
   - Menampilkan daftar anggota tim beserta detail seperti nama, email, dan deskripsi singkat.

2. **Tambah Profil**
   - Pengguna dapat menambahkan anggota tim baru melalui formulir yang tersedia.
   - Data yang ditambahkan akan disimpan dalam file `data.json`.

3. **Edit Profil**
   - Memungkinkan pengguna untuk mengubah informasi anggota tim.
   - Perubahan langsung diperbarui pada file JSON dan halaman web.

4. **Hapus Profil**
   - Fitur untuk menghapus anggota tim yang tidak lagi diperlukan.

5. **Pencarian Profil**
   - Pengguna dapat mencari anggota tim berdasarkan nama menggunakan formulir pencarian.
   - Hasil pencarian ditampilkan secara real-time.

## Teknologi yang Digunakan

- **Frontend**:
  - HTML5
  - CSS3 (tema hijau dengan warna utama #4CAF50)

- **Backend**:
  - PHP (untuk pengelolaan data dan operasi CRUD)

- **Data Storage**:
  - File JSON (`data.json`) digunakan untuk menyimpan data profil secara dinamis.

## Instalasi

1. Clone repositori ini ke direktori lokal Anda:
   ```bash
   git clone https://github.com/username/profil-tim5.git
   ```

2. Pastikan Anda memiliki server lokal (seperti XAMPP, WAMP, atau Laragon).

3. Pindahkan folder proyek ke direktori server lokal Anda (misalnya, `htdocs` untuk XAMPP).

4. Jalankan server lokal Anda dan akses aplikasi melalui browser:
   ```
   http://localhost/profil-tim5/
   ```

## Struktur Direktori

```
profil-tim5/
├── assets/
│   ├── css/
│   │   └── styles.css       # File CSS untuk styling
│   ├── nav/
│   │   └── navbar.html      # Navigasi
│   └── tim5-profile.jpg     # Gambar profil tim
├── data.json                # Penyimpanan data profil
├── profil.php               # Halaman utama untuk menampilkan profil
├── tambah-data.php          # Halaman untuk menambahkan data
├── edit-profil.php          # Halaman untuk mengedit profil
├── hapus-profil.php         # Halaman untuk menghapus profil
├── login.html               # Halaman login
└── README.md                # Dokumentasi
```

## Cara Penggunaan

1. **Login**: Buka halaman `login.html` untuk mengakses halaman utama.
2. **Menambahkan Profil**: Isi formulir "Tambah Data Profil" dan klik "Tambah Data".
3. **Mengedit Profil**: Klik tombol "Edit" di daftar profil, lakukan perubahan, dan simpan.
4. **Menghapus Profil**: Klik tombol "Hapus" pada profil yang ingin dihapus.
5. **Pencarian**: Gunakan kolom pencarian untuk menemukan anggota tim berdasarkan nama.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE). Anda bebas untuk menggunakan, memodifikasi, dan mendistribusikan proyek ini selama mengikuti ketentuan lisensi.

## Kontribusi

Kami sangat menghargai kontribusi Anda untuk meningkatkan proyek ini. Silakan buat pull request atau laporkan masalah melalui [Issue Tracker](https://github.com/username/profil-tim5/issues).

---

Dikembangkan dengan ❤ oleh **Tim 5**.
