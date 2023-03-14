Nama: Vika Valencia Susanto\
NIM: 2440062123\
Assignment Web Prog 2 (LA06)

Update (tugas individual)
--------------------------------------
Code lama diclone dan dipindahkan ke repository saya sendiri, sehingga contributor yang ada pada code lama masih tercantum, namun tugas update ini dikerjakan 100% secara individual.
- Perombakan struktur ui dengan menggunakan reusable component tag.
    Setiap page akan melakukan @extends('template') untuk mengikuti struktur yang sudah dibuat pada template.blade.php
    Template berisi section header dan konten. Header diinclude dari header.blade.php (@include('header')) dan diyield untuk nama profilenya (@yield('judul_halaman')). Konten merupakan yield yang akan diisi sendiri di masing-masing page (@yield('konten')).
- Penambahan conditional rendering (switch case)
    Ada penambahan fitur yaitu hire person agar user yang berinteraksi dengan web bisa menghire kami menjadi employeenya. Switch case di sini digunakan pada friend.blade.php untuk mengubah data tergantung dari orang yang dihire atau idnya sehingga page akan diforward ke halaman hire (/friend/{id}).
- Penambahan loop rendering (foreach)
    Pada halaman hire (/friend/{id}), jika user setuju untuk menghire orang tersebut dan meng-klik button yes, akan muncul pop-up notification berisi ucapan terima kasih, nama panggilan, dan nomor telepon untuk dikontak. Nama panggilan dan nomor telepon ini merupakan data yang ada di namecontroller.php dan direturn pada page '/friend/{id}'. Untuk setiap orang, nama dan nomor telepon pasti berbeda-beda, sehingga loop diaplikasikan (foreach) untuk mencocokan key dari data setiap orang pada namecontroller.php dengan id pada webnya (di sini diaplikasikan juga conditional rendering yaitu if) sehingga nama dan nomor telepon yang ditampilkan benar dan sesuai.

Page yang diupdate/ditambahkan
- Semua file yang ada pada https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/tree/main/resources/views
- https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/routes/web.php
- https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/app/Http/Controllers/namecontroller.php

Page Update Screenshots
--------------------------------------

### Jasons Update
<div styles="display: flex">
    <img src="https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/ssPage/update/updateJasons.png" alt="License" style="width: 30%">
    <img src="https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/ssPage/update/hireJasons.png" alt="License" style="width: 30%">
    <img src="https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/ssPage/update/YesJasons.png" alt="License" style="width: 30%">
</div>

 
--------------------------------------

### Matthew Update
<div styles="display: flex">
    <img src="https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/ssPage/update/updateMCH.png" alt="License" style="width: 30%">
    <img src="https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/ssPage/update/hireMCH.png" alt="License" style="width: 30%">
    <img src="https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/ssPage/update/YesMCH.png" alt="License" style="width: 30%">
</div>
 
--------------------------------------

### Vika Update
<div styles="display: flex">
    <img src="https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/ssPage/update/updateVika.png" alt="License" style="width: 30%">
    <img src="https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/ssPage/update/hireVika.png" alt="License" style="width: 30%">
    <img src="https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/ssPage/update/YesVika.png" alt="License" style="width: 30%">
</div>
 
--------------------------------------

### Vieren Update
<div styles="display: flex">
    <img src="https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/ssPage/update/updateVier.png" alt="License" style="width: 30%">
    <img src="https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/ssPage/update/hireVier.png" alt="License" style="width: 30%">
    <img src="https://github.com/valenciavika/WebProgramming-ProfileGSLC1-2440062123-VikaValenciaSusanto/blob/main/ssPage/update/YesVier.png" alt="License" style="width: 30%">
</div>


Original Page Screenshots (tugas kelompok)
--------------------------------------

### Jasons
<img src="https://github.com/jeje116/Web-Programming-Prototype/blob/main/ssPage/pageJasons.png" alt="License" style="width: 20%">
 
--------------------------------------

### Matthew
<img src="https://github.com/jeje116/Web-Programming-Prototype/blob/main/ssPage/pageMatthew.png" alt="License" style="width: 20%">
 
--------------------------------------

### Vika
<img src="https://github.com/jeje116/Web-Programming-Prototype/blob/main/ssPage/pageVika.png" alt="License" style="width: 20%">
 
--------------------------------------

### Vieren
<img src="https://github.com/jeje116/Web-Programming-Prototype/blob/main/ssPage/pageVieren.png" alt="License" style="width: 20%">
 
--------------------------------------

Frameworks Used
--------------------------------------
- Laravel
- Tailwind

Description
--------------------------------------
Profile dibuat dengan menggunakan CSS framework Tailwind. Di dalamnya sudah terdapat media query yang dibuat sendiri dan juga dari framework tailwind tersebut. 

Installation
--------------------------------------
1. Pastikan node.js dan laravel sudah tersedia

2. Pastikan vite sudah terinstall dan sudah dijalankan\
    Untuk menginstall vite
    ```
    vite install 
    ```
    atau
    ```
    npm install
    ```

    Untuk menjalankan vite
    ```
    npm run dev
    ```

3. Menjalankan laravel
    ```
    php artisan serve
    ```
    
    - Jika terdapat error saat menjalankan kode, berikut penyelesaian dari error tersebut:
      ```
      composer install
      ```
    
    - jika terdapat error "key not generated" atau "500|server error" pada web
      ```
      php artisan key:generate
      ```
    
    - Jika pada saat menjalankan syntax ini terdapat error tidak dapat menemukan file .env, maka rename dahulu file .env.example menjadi .env kemudian jalankan kembali syntax tersebut
    
    - Jika terdapat error "vite manifest not found" pada web, lakukan:
      1. ```
         npm install --save-dev vite laravel-vite-plugin
         ```
      2. Lalu update package.json file "scripts": { "dev": "vite", "build": "vite build" }
      3. ```
         npm run build
         ```
    
    - Menjalankan laravel
      ```
      php artisan serve
      ```
      
Contributors
--------------------------------------
Profile prototype ini dibuat oleh:
1. Matthew Christian Hadiprasetya (2440005252)
2. Jasons Januard Bongtari (2440062123)
3. Vika Valencia Susanto (2440079162)
4. Vieren Cristian (2440102202)
