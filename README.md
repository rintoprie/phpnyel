# phpnyel
Simple PHP web application with login and CRUD example using Bootstrap free template. Built without any framework like CodeIgniter, CakePHP or Laravel to keep it simple. Easy to modify if you are new to PHP and want to build a simple web application for a demo or prototyping. Consider to improve the security if you want to deploy in public domain.

Aplikasi web sederhana menggunakan PHP tapi tidak menggunakan framework seperti CI, Laravel, CakePHP atau semacamnya. Aplikasi ini menggunakan template HTML gratis yang dapat diunduh <a href="https://github.com/BootstrapDash/Kapella-Free-Bootstrap-Admin-Template">di sini</a> atau di web penyedia template HTML gratis seperti <a href="https://colorlib.com">ColorLib</a>. Template HTML ini menggunakan Bootstrap yang mudah dimodifikasi sesuai kebutuhan dan biasanya sudah cukup lengkap mencakup halaman dashboard, tabel, form, dan lain-lain. Dengan demikian menggunakan aplikasi ini sebagai template memudahkan kita untuk membuat prototipe aplikasi untuk kebutuhan demo atau tugas-tugas pembuatan aplikasi sederhana. Aplikasi ini juga sudah dilengkapi dengan user management sederhana untuk memfasilitasi registrasi user, login, dan logout. Juga dilengkapi contoh CRUD sederhana untuk mengelola konten website.

Cara menjalankan aplikasi:
1. Download source code dari github
2. Ekstrak di folder web
3. Buat database dengan nama phpnyeldb dan import file sql yang disertakan
4. Sesuaikan parameter lain di file connection.php
5. Login dapat menggunakan username/password a (satu huruf a) atau dengan registrasi lebih dulu

Contoh tampilan Dashboard. Contoh halaman yang sudah dimodifikasi ada di menu Manage.

<img src="images/screenshots/1.png"/>

Contoh form yang dibuat menggunakan template Bootstrap untuk manipulasi data.

<img src="images/screenshots/2.png"/>

Contoh tabel yang dibuat menggunakan template Bootstrap untuk menampilkan data.

<img src="images/screenshots/3.png"/>

Contoh form untuk mengubah data user. Perhatikan bahwa data user sangat ringkas hanya terdiri atas username, email dan password. Password sudah menggunakan hash tapi belum ada untuk pengaturan role dan akses user.

<img src="images/screenshots/4.png"/>

Contoh halaman login. Halaman ini memodifikasi template HTML Bootstrap hasil unduhan hanya dengan menambahkan sedikit kode PHP di awal skrip untuk pengecekan session, username, dan password. Penambahan ini dapat dilihat di file login.php.

<img src="images/screenshots/5.png"/>

CATATAN PENTING: Aplikasi ini dibuat sederhana untuk memudahkan pengembangan aplikasi web bagi yang baru mengenal PHP atau ingin membuat prototipe sederhana dengan cepat. Agar mudah dimodifikasi, kode-kodenya diatur mirip pola MVC dengan memisahkan kode pengatur logika per halaman, kode tampilan yang menggunakan template HTML dan Bootstrap yang disimpan di folder 'pages', dan kode-kode yang berisi query di dalam file functions.php. Untuk penggunaan final di web server umum (public domain) sangat disarankan untuk lebih dulu meningkatkan faktor keamanan seperti risiko SQL injection, error handling, dan sebagainya.