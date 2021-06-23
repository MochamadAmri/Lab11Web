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
![1](https://user-images.githubusercontent.com/56380838/123072234-8edfec80-d43f-11eb-86f2-994533514f3b.png)
## Langkah 4
### Membuat Controller
Buat Controller baru dengan nama `Artikel.php` pada direktori `app/Controllers.`
![2](https://user-images.githubusercontent.com/56380838/123072648-eaaa7580-d43f-11eb-8d89-2ed43f86e271.png)
## Langkah 5
### Membuat View
Buat folder baru dengan nama `artikel` pada direktori `app/views`, kemudian buat file baru dengan nama `index.php`
![3](https://user-images.githubusercontent.com/56380838/123072913-27766c80-d440-11eb-966d-4092c813a972.png)
Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel
![12,7](https://user-images.githubusercontent.com/56380838/123073167-61e00980-d440-11eb-8636-b8cf844322a3.png)
Kemudian tambahkan beberapa data pada database agar dapat ditampilkan datanya.
![4](https://user-images.githubusercontent.com/56380838/123073770-eb8fd700-d440-11eb-99be-9ad0001b9ab2.png)
Refresh kembali browser, sehingga akan ditampilkan hasilnya.
![5](https://user-images.githubusercontent.com/56380838/123074243-53deb880-d441-11eb-800d-979d67983449.png)
## Langkah 6 - Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada `Controller Artikel` dengan nama `view()`.
![6](https://user-images.githubusercontent.com/56380838/123074774-d1a2c400-d441-11eb-9cea-89cfde79fad9.png)
## Langkah 7 - Membuat View Detail
Buat view baru untuk halaman detail dengan nama `app/views/artikel/detail.php`
![7](https://user-images.githubusercontent.com/56380838/123075126-25151200-d442-11eb-916d-e3418a8b4810.png)
## Langkah 8 - Membuat Routing untuk artikel detail
Buka Kembali file `app/config/Routes.php`, kemudian tambahkan routing untuk artikel detail.
![8](https://user-images.githubusercontent.com/56380838/123075423-6c9b9e00-d442-11eb-831b-3810ad02bf0c.png)
![9](https://user-images.githubusercontent.com/56380838/123075628-981e8880-d442-11eb-8ece-1cdf6f137c80.png)
## Langkah 9 - Membuat Menu Admin
Buat method baru pada `Controller Artikel` dengan nama `admin_index()`.
![10](https://user-images.githubusercontent.com/56380838/123076092-019e9700-d443-11eb-80cc-a37dc7e5fbe2.png)
![11](https://user-images.githubusercontent.com/56380838/123076100-03685a80-d443-11eb-8af1-a116b3594106.png)
Tambahkan routing untuk menu admin seperti berikut:
![12](https://user-images.githubusercontent.com/56380838/123076734-9b664400-d443-11eb-910d-6bb82ab69436.png)
![13](https://user-images.githubusercontent.com/56380838/123076744-9d300780-d443-11eb-9fc2-cdea6a81e38f.png)
Kemudian buat file baru lagi dengan nama `admin.css` pada direktori `ci4/public` untuk mempercantik tampilan Halaman Admin.
```
/* Reset CSS */
* {
    margin: 0;
    padding: 0;
}
body {
    line-height:1;
    font-size:100%;
    font-family:'Open Sans', sans-serif;
    color:#5a5a5a;
}
#container {
    width: 980px;
    margin: 0 auto;
    box-shadow: 0 0 1em #cccccc;
}

/* header */
header {
    padding: 20px;
}
header h1 {
    margin: 20px 10px;
    color: #b5b5b5;
}

/* navigasi */
nav {
    display: block;
    background-color: #1f5faa;
}
nav a {
    padding: 15px 30px;
    display: inline-block;
    color: #ffffff;
    font-size: 14px;
    text-decoration: none;
    font-weight: bold;
}
nav a.active,
nav a:hover {
    background-color: #2b83ea;
}

/* footer */
footer {
    clear: both;
    background-color: #1d1d1d;
    padding: 20px;
    color:  #eee
}

/* ADMIN TABEL */
body{
    font-family: sans-serif;
}
table{
    border-collapse: collapse;
    margin: 20px;
    width: 95%;
}
table td{
    border: 1px solid #c9c9c9;
    font-size: 19px;
    padding: 10px 8px;
}
table th {
    background:#4d8cd4;
    color:#ffffff;
    font-size: 17px;
    text-align: left;
    border: 1px solid #c9c9c9;
    padding: 13px 15px;
}
table tr {
    background:#ffffff;
    text-align: left;
}
tr:hover{
    background: #e7e7e7;
}

/* ADMIN TOMBOL */
.btn{
    font-size: 14px;
    background-color: #afafaf;
    color: #444444;
    border-radius: 5px;
    padding: 10px 20px;
    margin-top: 8x;
    text-decoration: none;
}

.btn-danger{
    font-size: 14px;
    background-color: rgb(223, 35, 35);
    color: white;
    border-radius: 5px;
    padding: 10px 20px;
    margin-top: 8x;
    text-decoration: none;
}

a:active,
a:hover{
    opacity: 80%;
}

/* TAMBAH ARTIKEL */
textarea{
    width: 94%;
    padding: 10px;
    border: 2px solid gray;
    box-sizing: border-box;
    font-size: 15px;
    margin-left: 20px;
}

input[type=text]{
    width: 94%;
    padding: 10px;
    border: 2px solid gray;
    box-sizing: border-box;
    font-size: 15px;
    margin: 20px;   
}

input[type=submit]{
    padding: 10px;
    background-color: rgb(30, 117, 216);
    color: white;
    box-sizing: border-box;
    font-size: 15px;
    margin: 20px;   
}

input[type=submit]:active,
input[type=submit]:hover{
    opacity: 80%;
}

h2{
    margin-top: 20px;
    margin-left: 20px;
}
```
Akses menu admin dengan url http://localhost:8080/admin/artikel
![14](https://user-images.githubusercontent.com/56380838/123077310-22b3b780-d444-11eb-950c-4d9de2f3b3fe.png)
## Langkah 10 - Menambah Data Artikel
Tambahkan fungsi/method baru pada `Controller Artikel` dengan nama `add()`.
![15](https://user-images.githubusercontent.com/56380838/123077706-7e7e4080-d444-11eb-88c1-ce661ff4de2d.png)
Kemudian buat view untuk form tambah dengan nama `form_add.php`
![16](https://user-images.githubusercontent.com/56380838/123077713-80480400-d444-11eb-8972-bd9023bd1f32.png)
Klik menu Tambah `Artikel` dan inilah hasilnya.
![17](https://user-images.githubusercontent.com/56380838/123077996-be452800-d444-11eb-8407-500d938208d1.png)
## Langkah 11 - Mengubah Data
Tambahkan fungsi/method baru pada `Controller Artikel` dengan nama `edit()`.
![18](https://user-images.githubusercontent.com/56380838/123078757-7b378480-d445-11eb-888d-045bb626c287.png)
Kemudian buat view untuk form tambah dengan nama `form_edit.php`
![19](https://user-images.githubusercontent.com/56380838/123078810-8b4f6400-d445-11eb-9091-a95c99caf7e8.png)
Klik ubah pada salah satu artikel dan inilah hasilnya
![20](https://user-images.githubusercontent.com/56380838/123078877-9b674380-d445-11eb-80e6-9edc5e185e40.png)
## Langkah 12 - Menghapus Data
Tambahkan fungsi/method baru pada `Controller Artikel` dengan nama `delete()`.
![21](https://user-images.githubusercontent.com/56380838/123079050-c356a700-d445-11eb-9265-5da6688f9ee2.png)






