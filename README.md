## Test Programmer TATI

#### Prerequisites

You need to download and install some tools to run todo-apps-devops

- #### PHP

  visit php official installation based on your machine: [Download](https://www.php.net/manual/en/install.php)

- #### Composer

  visit composer official installation based on your machine: [Download](https://getcomposer.org/)

- #### XAMPP

  visit XAMPP official installation based on your machine: [Download](https://www.apachefriends.org/download.html)

- #### Node.js
  visit Node.js official installation based on your machine: [Download](https://nodejs.org/en)

## Setup Project Pegawai Dashboard

_After downloading all prequities, you can follow this setup steps:_

1. Clone the repo
   ```sh
   git clone https://github.com/bryanmichaelk/Test-ProgrammerTATI-Bryan-Michael-Kurniawan.git
   ```
2. Go to clone directory
   ```sh
   cd Test-ProgrammerTATI-Bryan-Michael-Kurniawan/dashboard-pegawai
   ```
3. Copy the env-example to env
4. Setup database
   ```sh
   php artisan migrate
   php artisan db:seed --class=UserSeeder
   ```
5. Install Dependencies
   ```sh
   npm run install
   ```
6. Run Xampp Apache and MySQL
7. Run Artisan
   ```sh
   php artisan serve
   ```
8. Run Node.js for Tailwindcss
   ```sh
   npm run dev
   ```

### Akun:
##### 1. Kepala Dinas
email: kepala.dinas@example.com
password: kepaladinas
##### 2. Kepala Bidang 1
email: kepala.bidang1@example.com
password: kepalabidang1
##### 3. Kepala Bidang 2
email: kepala.bidang2@example.com
password: kepalabidang2
##### 4. Staff 1
email: staff1@example.com
password: staff1
##### 5. Staff 2
email: staff2@example.com
password: staff2

## Setup Project Wilayah API

_After downloading all prequities, you can follow this setup steps:_

1. Clone the repo
   ```sh
   git clone https://github.com/bryanmichaelk/Test-ProgrammerTATI-Bryan-Michael-Kurniawan.git
   ```
2. Go to clone directory
   ```sh
   cd Test-ProgrammerTATI-Bryan-Michael-Kurniawan/wilayah-api
   ```
3. Copy the env-example to env
4. Setup database
   ```sh
   php artisan migrate
   php artisan db:seed --class=WilayahSeeder
   ```
5. Run Xampp Apache and MySQL
6. Run Artisan
   ```sh
   php artisan serve
   ```
