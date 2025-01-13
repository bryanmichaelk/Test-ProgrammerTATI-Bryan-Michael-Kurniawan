## Log Harian Dashboard

#### Prerequisites

You need to download and install some tools to run todo-apps-devops

-   #### PHP

    visit php official installation based on your machine: [Download](https://www.php.net/manual/en/install.php)

-   #### XAMPP

    visit XAMPP official installation based on your machine: [Download](https://www.apachefriends.org/download.html)

-   #### Composer

    visit composer official installation based on your machine: [Download](https://getcomposer.org/)

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
