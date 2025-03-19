# Tugas Praktikum Pemrograman Web 2

Nama : Adimas Bayu Aditya
Kelas : TI.23.C1
Dosen : Agung Nugroho, S.Kom., M.Kom.

# Tugas Praktikum 1

- Membuat Controller Lengkap
  [(https://github.com/bayulearning/Lab7Web/blob/6831421c647484a5204dea1b03f9451e961b3550/app/Controllers/Page.php)]

- Membuat View
  [(https://github.com/bayulearning/Lab7Web/blob/6831421c647484a5204dea1b03f9451e961b3550/app/Views/about.php)]

- Membuat Template Header & Footer
  [(https://github.com/bayulearning/Lab7Web/tree/6831421c647484a5204dea1b03f9451e961b3550/app/Views/template)]

- Perubahan Halaman yang terjadi
  ![alt text](image.png)

# Tugas Praktikum 2

- Membuat database lokal & Tabel
  ![alt text](image-1.png)

- Membuat Model untuk data artikel
  [(https://github.com/bayulearning/Lab7Web/blob/4038247f70c6fcd9fda9ecd3576cba58d2ab276c/app/Models/ArtikelModel.php)]

- Membuat Controller Baru Artikel.php
  [(https://github.com/bayulearning/Lab7Web/blob/4038247f70c6fcd9fda9ecd3576cba58d2ab276c/app/Controllers/Artikel.php)]

- Membuat View direktori artikel dan index.php dan menghubungkan dengan database
  [(https://github.com/bayulearning/Lab7Web/blob/4038247f70c6fcd9fda9ecd3576cba58d2ab276c/app/Views/artikel/index.php)]
  ![alt text](image-2.png)

- Membuat tampilan detail artikel
- menambahkan controller
  ![alt text](image-3.png)
- membuat view detail
  ![alt text](image-4.png)
- menambahkan route
  $routes->get('artikel/index', 'Artikel::index');
- tampilan halaman
  ![alt text](image-5.png)

- membuat halaman admin
- menambahkan route
  $routes->group('admin', function($routes) {
  $routes->get('artikel', 'Artikel::admin_index');
$routes->add('artikel/add', 'Artikel::add');
  $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
$routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
  });

![alt text](image-6.png)

- membuat halaman tambah artikel
  ![alt text](image-7.png)

- membuat halaman edit
  ![alt text](image-8.png)
