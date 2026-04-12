Belajar Laravel lagi Wok

Pelajaran baru:

1. Model laravel sudah punya fungsi all() atau find() bawaan jadi tidak perlu buat yang baru lagi

2. Dengan menambahkan bari seperti ini Route::get("/blog/{post:slug}", function (Post $post) {
   laravel bisa mencari suatu post berdasarkan isi table yang kita mau, misalnya slug

3. Sekarang handler.php sudah di hapus dan digabung dalam bootstrap\app.php

4. Bisa buat model dan migration sekaligus dengan php artisan make:model namaModel -m

5. Bisa menggunakan diffForHumans() pada data waktu untuk menunjukkan perbedaan waktu dengan saat ini

6. Belajar menggunakan factory, dari php artisan make:factory dan faker. Note : untuk menggunakan factory model harus ada use HasFactory

7. Belajar Relationship hasMany = punya banyak, belongsTo = dimiliki oleh. Ezz deck (Besoknya lupa)

8. Belajar eager loading geys. Biar query datanya ngga banyak, eager loading menggunakan method with() pada model. misalnya Post::with('author')->get(); atau jika sudah di panggil maka $post->with('author')->get(). Selain itu eager loading juga bisa dilakukan di model dengan cara menambahkan protected $with = []; yang diisi method realationship yang ingin digunakan.

Semangat terus wok
