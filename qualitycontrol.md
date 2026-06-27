# Quality Control (QC) - Sistem Pendaftaran Santri Baru Pondok Serambi Qur'an

## Informasi Proyek

| Keterangan         | Detail                                               |
| ------------------ | ---------------------------------------------------- |
| Nama Proyek        | Sistem Pendaftaran Santri Baru Pondok Serambi Qur'an |
| Versi              | 1.0                                                  |
| Platform           | Website                                              |
| Bahasa Pemrograman | PHP Native                                           |
| Database           | MySQL                                                |
| Web Server         | Apache (XAMPP)                                       |
| Pengembang         | Azka Putra                                           |
| Status             | Development                                          |

---

# Tujuan Quality Control

Dokumen ini dibuat untuk memastikan bahwa seluruh fitur pada Sistem Pendaftaran Santri Baru berjalan sesuai kebutuhan, bebas dari kesalahan (bug), aman digunakan, dan memberikan pengalaman pengguna yang baik.

---

# Standar Pengujian

## Functional Testing

Semua fungsi utama harus berjalan dengan benar.

### Halaman Beranda

* [ ] Website dapat dibuka.
* [ ] Logo tampil dengan benar.
* [ ] Menu navigasi berfungsi.
* [ ] Banner tampil normal.
* [ ] Footer tampil sempurna.

---

### Pendaftaran Santri

* [ ] Form dapat dibuka.
* [ ] Semua input dapat diisi.
* [ ] Validasi field wajib berjalan.
* [ ] Format email valid.
* [ ] Nomor HP hanya menerima angka.
* [ ] Data berhasil disimpan ke database.
* [ ] Notifikasi berhasil muncul.

---

### Login Admin

* [ ] Username benar dapat login.
* [ ] Password benar dapat login.
* [ ] Password salah ditolak.
* [ ] Username salah ditolak.
* [ ] Session login aktif.
* [ ] Logout berhasil.

---

### Dashboard Admin

* [ ] Dashboard tampil.
* [ ] Total pendaftar muncul.
* [ ] Menu navigasi berfungsi.
* [ ] Data santri tampil.
* [ ] Detail santri dapat dibuka.
* [ ] Edit data berjalan.
* [ ] Hapus data berjalan.
* [ ] Konfirmasi hapus muncul.

---

### Upload Dokumen

* [ ] Upload foto berhasil.
* [ ] Upload KK berhasil.
* [ ] Upload Akta berhasil.
* [ ] File melebihi batas ditolak.
* [ ] Format file salah ditolak.
* [ ] File tersimpan pada folder upload.

---

### Database

* [ ] Koneksi database berhasil.
* [ ] CRUD berjalan normal.
* [ ] Tidak ada data ganda.
* [ ] Foreign key berjalan.
* [ ] Backup database berhasil.

---

# User Interface Testing

## Tampilan

* [ ] Layout rapi.
* [ ] Tidak ada elemen bertumpuk.
* [ ] Responsive di Desktop.
* [ ] Responsive di Tablet.
* [ ] Responsive di Smartphone.

---

## Warna

* [ ] Konsisten.
* [ ] Kontras mudah dibaca.

---

## Font

* [ ] Mudah dibaca.
* [ ] Ukuran sesuai.

---

# Security Testing

## Login

* [ ] Password terenkripsi (hash).
* [ ] SQL Injection dicegah.
* [ ] XSS dicegah.
* [ ] Session aman.
* [ ] Session timeout berjalan.

---

## Form Input

* [ ] Validasi server-side.
* [ ] Sanitasi input.
* [ ] Tidak menerima script HTML berbahaya.

---

# Performance Testing

* [ ] Halaman terbuka < 3 detik.
* [ ] Query database cepat.
* [ ] Upload file tidak gagal.
* [ ] Website stabil saat banyak pengguna.

---

# Compatibility Testing

## Browser

* [ ] Google Chrome
* [ ] Microsoft Edge
* [ ] Mozilla Firefox

---

## Sistem Operasi

* [ ] Windows
* [ ] Android

---

# Data Validation

* [ ] Nama tidak boleh kosong.
* [ ] NIK terdiri dari 16 digit.
* [ ] Nomor HP valid.
* [ ] Email valid.
* [ ] Tanggal lahir valid.
* [ ] Jenis kelamin dipilih.
* [ ] Alamat tidak kosong.

---

# Backup & Recovery

* [ ] Backup database berhasil.
* [ ] Restore database berhasil.
* [ ] Data tetap utuh setelah restore.

---

# Bug Tracking

| No | Tanggal | Modul | Deskripsi Bug | Status |
| -- | ------- | ----- | ------------- | ------ |
| 1  | -       | -     | -             | Open   |

---

# Hasil Pengujian

| Modul            | Status        |
| ---------------- | ------------- |
| Beranda          | ☐ Belum diuji |
| Form Pendaftaran | ☐ Belum diuji |
| Login Admin      | ☐ Belum diuji |
| Dashboard        | ☐ Belum diuji |
| Upload Dokumen   | ☐ Belum diuji |
| Database         | ☐ Belum diuji |
| Keamanan         | ☐ Belum diuji |
| Responsif        | ☐ Belum diuji |

---

# Kriteria Kelulusan (Acceptance Criteria)

Sistem dinyatakan **Layak Digunakan** apabila memenuhi syarat berikut:

* Seluruh fungsi utama berjalan tanpa error.
* Tidak ditemukan bug dengan tingkat Critical.
* Seluruh data berhasil tersimpan di database.
* Website dapat diakses melalui perangkat Desktop dan Mobile.
* Sistem login aman.
* Validasi form berjalan dengan baik.
* Upload dokumen berhasil.
* Dashboard admin berfungsi dengan normal.
* Data santri dapat dikelola (Create, Read, Update, Delete).

---

# Catatan Quality Control

Seluruh proses pengujian dilakukan sebelum sistem dipublikasikan. Setiap bug yang ditemukan harus dicatat pada tabel Bug Tracking dan diperbaiki sebelum proses deployment. Setelah semua pengujian berhasil, sistem dapat dinyatakan siap digunakan oleh Pondok Serambi Qur'an sebagai media pendaftaran santri baru secara online.

---

**Dokumen:** `qualitycontrol.md`

**Versi:** 1.0

**Terakhir diperbarui:** Juni 2026
