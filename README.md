# Zoo Database SQL

Terdapat 2 pratikum yang ada di respiratory ini dimana yang pertama adalah membuat website database terhadap database kebun binatang dan yang kedua adalah melakukan perbandingan performa antara MySQL Workbench dan mongoDB menggunakan database kebun binatang

### Database Kebun Binatang
Database kebun binatang ini didefinisikan mandiri oleh tim yang berisikan tabel:
1. animal: untuk mengatur nama hewan, jenis, hewan, dan data lain yang berkaitan dengan hewan di kebun binatang
2. animal_shift_schedule: untuk mengatur jadwal pegawai yang memiliki shift untuk menjaga hewan atau yang memberikan makan hewan
3. check_up_schedule: jadwal hewan melakukan check up
4. employee: data pegawai
5. facility: data fasilitas yang tersedia di kebun binatang
6. food: makanan hewan
7. supplier: data orang yang menyuplai makanan hewan
8. work_shift_facility: jadwal pegawai yang memiliki shift untuk menjaga fasilitas

### Implementasi Website Database sebagai Manajemen Sistem Internal Pada Kebun Binatang
adapun proses dalam pembutaan website database kebun binatang ini, diantaranya:
1. Pembuatan erd untuk menentuk primary key dan foreign key dalam database
2. proses normalisasi data
3. upload data dalam phpMyAdmin
4. pembuatan website dengan menyambungkan ke phpMyAdmin menggunakan vscode

Hasil tampilan website dapat dilihat pada laporan.

### Comparison of MySQL Workbench Database Performance 2 with MongoDB on Zoo Database
proses ini adalah lanjutan dari sebelumnya dengan tetap menggunakan database yang sama. Tujuan dibuatnya artikel ini adalah membandingkan performa antara MySQL Workbench dan MongoDB. MySQL berbasis SQL sedangkan, MongoDB berbasis NoSQL yang dikatakan merupakan upgrade dari database SQL. Adapun yang dibandingkan adalah:
1. GUI atau tampilannya
2. Proses melakukan CRUD
3. query performance (membandingkan waktu pemrosesan)
