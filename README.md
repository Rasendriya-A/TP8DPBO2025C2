# Tugas Praktikum 8

## Janji
Saya Rasendriya Andhika dengan NIM 2305309 mengerjakan Tugas Praktikum 8 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Movie Tracker Mahasiswa
Sebuah aplikasi berbasis web modular menggunakan PHP untuk mencatat film yang telah ditonton oleh mahasiswa. Program ini dirancang dengan pendekatan Object-Oriented Programming (OOP) dan menggunakan arsitektur Model-View-Controller (MVC) untuk memisahkan antara logika aplikasi, tampilan, dan pengelolaan data.

## Desain Database
Aplikasi ini menggunakan tiga tabel utama:

### Student: 
menyimpan data mahasiswa </br>
id, name, nim, phone, join_date

### Movie: 
menyimpan data film </br>
id, title, genre, year

### Student_movie: 
menyimpan data relasi mahasiswa dan film yang ditonton </br>
id, student_id, movie_id, watch_date

![Screenshot 2025-05-05 015903](https://github.com/user-attachments/assets/d1f88405-8ed2-4440-8c2b-1e2744c3587f)

## Desain Program
### 1. Class Student
Class ini mengelola data mahasiswa, meliputi:
- Menambahkan mahasiswa baru
- Mengedit dan menghapus data mahasiswa
- Mengambil semua data mahasiswa untuk ditampilkan pada tampilan StudentIndex.view.php

### 2. Class Movie
Digunakan untuk mengelola data film:
- Menambah, mengubah, dan menghapus data film
- Mengambil seluruh data film dari database
- Ditampilkan melalui MovieIndex.view.php

### 3. Class Student_movie
Mengelola data film yang ditonton oleh mahasiswa:
- Menyimpan informasi film apa yang ditonton mahasiswa dan kapan ditontonnya (watch_date)
- Mengambil relasi antara mahasiswa dan film menggunakan JOIN
- Menyediakan fungsi edit dan hapus relasi
- Ditampilkan di StudentMovieIndex.view.php

### 4. Controller (index.php)
File index.php berperan sebagai router utama yang:
- Menerima parameter page dari URL dan memanggil controller yang sesuai
- Menangani aksi seperti tambah, edit, dan hapus untuk masing-masing entitas
- Menyusun tampilan dengan menggabungkan template header dan footer

### 5. Views (Folder views/)
Menampilkan UI pengguna berdasarkan data yang dikelola:
- student/: tampilan tambah, edit, dan daftar mahasiswa
- movie/: tampilan tambah, edit, dan daftar film
- student_movie/: daftar film yang telah ditonton oleh mahasiswa serta form untuk mencatatnya

## Penjelasan Alur
### 1. Inisialisasi Aplikasi
- Pengguna mengakses aplikasi melalui index.php
- Parameter page pada URL menentukan tampilan yang dibuka (mahasiswa, film, atau daftar tontonan)

### 2. Menambah Mahasiswa
- Pengguna mengisi form pada StudentCreate.view.php
- Data dikirim ke controller dan dimasukkan ke tabel student

### 3. Menambah Film
- Film baru dicatat melalui tampilan MovieCreate.view.php
- Data disimpan ke tabel movie dan ditampilkan di daftar film

### 4. Mencatat Film yang Ditonton
- Pengguna memilih nama mahasiswa, judul film, dan tanggal menonton pada StudentMovieCreate.view.php
- Data dikaitkan dalam tabel student_movie

### 5. Mengelola Data
- Semua data dapat diedit atau dihapus melalui tampilan daftar yang tersedia
- Aksi ini ditangani oleh controller masing-masing dan memperbarui database

### Dokumentasi
https://github.com/user-attachments/assets/b722d61f-6da0-43ea-af13-6d83a2821b31

