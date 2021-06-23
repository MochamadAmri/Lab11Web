# PRAKTIKUM 11 : PHP FRAMWORK ( Codeigniter )
```
Mochamad Amri Adrian Wiratama
311910226
TI. 19. A2
```
# Persiapan
Mengaktifkan beberapa ekstensi php, diantaranya:
* php-json ekstension untuk bekerja dengan JSON;
* php-mysqlnd native driver untuk MySQL;
* php-xml ekstension untuk bekerja dengan XML;
* php-intl ekstensi untuk membuat aplikasi multibahasa;
* libcurl (opsional), jika ingin pakai Curl
![Langkah 1](https://user-images.githubusercontent.com/56380838/122032002-6f224600-cdf9-11eb-821d-30fa24d95f29.png)
Hapus tanda ; (titik koma) pada bagian extension yang akan diaktifkan.
![Langkah 2](https://user-images.githubusercontent.com/56380838/122032477-dd670880-cdf9-11eb-814b-01d40bc549ac.png)
# Instalasi CodeIgniter 4
* Codeigniter dapat didownload dari website https://codeigniter.com/download
* Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.
* Ubah nama direktory framework-4.x.xx menjadi ci4.
* Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/
![Langkah 3](https://user-images.githubusercontent.com/56380838/122042978-05a83480-ce05-11eb-9a26-69ffe0849ba9.png)

# Praktikum 12 : Framework Lanjutan (CRUD) - Pemrograman Web
## Persiapan dan langkah langkah nyua
### Persiapan
Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP seperti berikut.
![12,1](https://user-images.githubusercontent.com/56380838/123021864-0ccfd380-d3ff-11eb-9509-663d24cfc92c.png)
## Langkah 1
Membuat database kemudian membuat Tabel dan masukkan kode pada database query seperti berikut.
![12,1](https://user-images.githubusercontent.com/56380838/123022292-c8910300-d3ff-11eb-8695-91c907018e59.png)
## Langkah 2
### Konfigurasi koneksi database
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Kemudian melakukan konfigurasi dengan cara mengubah beberapa kode pada file `htdocs\lab11_php_ci\ci4\.env.` Lalu cari pada line DATABASE dan hilangkan tanda pagar `(#)` didepan seperti berikut ini. 
![12,2](https://user-images.githubusercontent.com/56380838/123022661-4ce38600-d400-11eb-831e-c30840aca83c.png)
## Langkah 3
### Membuat Model
Selanjutnya adalah membuat Model untuk memproses data `Artikel`. Buat file baru pada direktori `app/Models` dengan nama `ArtikelModel.php` lalu masukkan kode seperti berikut.
