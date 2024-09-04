# Formulir Kontak Sederhana

Ini adalah proyek sederhana yang menunjukkan cara membuat formulir kontak menggunakan HTML dan PHP. Data yang dikirimkan oleh pengguna akan disimpan dalam database MySQL.

## Fitur

- Formulir kontak dengan kolom untuk nama, email, dan pesan.
- Validasi input pengguna untuk memastikan data yang dimasukkan sesuai.
- Sanitasi input pengguna untuk mencegah serangan seperti SQL Injection dan XSS.
- Penyimpanan data ke dalam database MySQL.
- Menampilkan pesan konfirmasi setelah data berhasil disimpan.

## Persyaratan

Untuk menjalankan proyek ini, Anda memerlukan:
- Server web seperti Apache atau Nginx
- PHP 7.0 atau lebih tinggi
- MySQL 5.6 atau lebih tinggi
- Web browser (misalnya Chrome, Firefox)

## Instalasi

1. **Pindahkan folder ke direktori server web:**
   
    Jika Anda menggunakan XAMPP, pindahkan file ke folder `htdocs`.

32. **Impor database MySQL:**

    Masuk ke MySQL dan Impor database sql yang berada pada folder

3. **Jalankan server PHP:**

    Pastikan server web berjalan (misalnya dengan menjalankan XAMPP atau menggunakan server PHP bawaan):

4. **Akses Formulir Kontak:**

    Buka browser dan akses URL berikut:

    ```
    http://localhost/formContact/form.html
    ```

    Isi formulir dan klik "Submit" untuk mengirim data.

## Penggunaan

Setelah menginstal proyek ini, Anda dapat mengakses formulir kontak melalui browser. Ketika pengguna mengirimkan formulir, data akan disimpan dalam tabel `contacts` di database MySQL.
