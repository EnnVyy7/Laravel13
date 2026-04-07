Belajar Laravel lagi Wok

Pelajaran baru:

1. Model laravel sudah punya fungsi all() atau find() bawaan jadi tidak perlu buat yang baru lagi

2. Dengan menambahkan bari seperti ini Route::get("/blog/{post:slug}", function (Post $post) {
   laravel bisa mencari suatu post berdasarkan isi table yang kita mau, misalnya slug

3. Sekarang handler.php sudah di hapus dan digabung dalam bootstrap\app.php

Semangat terus wok
