<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pterodactyl Balance System Configuration
    |--------------------------------------------------------------------------
    |
    | File ini mengatur cara kerja sistem saldo untuk pengguna panel.
    | Admin dapat menambah saldo manual, dan pengguna bisa menggunakan
    | saldo mereka untuk membeli server otomatis.
    |
    */

    'currency' => 'IDR', // Mata uang yang ditampilkan di panel

    'min_topup' => 2000, // Minimal top up saldo (manual oleh admin)
    'min_purchase' => 2000, // Minimal saldo untuk bisa membeli server

    'notify_admin_on_purchase' => true, // Kirim notifikasi ke admin ketika user beli server
    'notify_user_on_success' => true,  // Kirim notifikasi sukses ke user
    'notify_user_on_failed' => true,   // Kirim notifikasi gagal ke user

    /*
    |--------------------------------------------------------------------------
    | Paket Server Otomatis
    |--------------------------------------------------------------------------
    |
    | Paket server yang tersedia untuk dibeli user. Ketika user menekan tombol
    | "Beli Sekarang" di dashboard, sistem akan membuat server sesuai preset ini.
    |
    | name      → Nama paket
    | price     → Harga dalam IDR
    | egg_id    → ID Egg yang digunakan
    | memory    → Jumlah RAM (MB)
    | disk      → Jumlah Disk (MB)
    | cpu       → Jumlah CPU (persentase)
    |
    */

    'packages' => [
        [
            'name' => '1GB Server',
            'price' => 2000,
            'egg_id' => 15,
            'memory' => 1024,
            'disk' => 1000,
            'cpu' => 100,
        ],
        [
            'name' => '2GB Server',
            'price' => 3000,
            'egg_id' => 15,
            'memory' => 2096,
            'disk' => 2000,
            'cpu' => 200,
        ],
        [
            'name' => '3Gb Server',
            'price' => 4000,
            'egg_id' => 15,
            'memory' => 3000,
            'disk' => 3000,
            'cpu' => 300,
        ],
        [
            'name' => '4Gb Server',
            'price' => 5000,
            'egg_id' => 15,
            'memory' => 4000,
            'disk' => 4000,
            'cpu' => 400,
        ],
        [
            'name' => '5Gb Server',
            'price' => 6000,
            'egg_id' => 15,
            'memory' => 5000,
            'disk' => 5000,
            'cpu' => 500,
        ],
        [
            'name' => '6Gb Server',
            'price' => 7000,
            'egg_id' => 15,
            'memory' => 6000,
            'disk' => 6000,
            'cpu' => 600,
        ],
        [
            'name' => '7Gb Server',
            'price' => 8000,
            'egg_id' => 15,
            'memory' => 7192,
            'disk' => 7000,
            'cpu' => 700,
        ],
        [
            'name' => '8Gb Server',
            'price' => 9000,
            'egg_id' => 15,
            'memory' => 8192,
            'disk' => 8000,
            'cpu' => 800,
        ],
        [
            'name' => '9Gb Server',
            'price' => 10000,
            'egg_id' => 15,
            'memory' => 10192,
            'disk' => 10000,
            'cpu' => 1000,
        ],
        [
            'name' => 'Unlimited Server',
            'price' => 15000,
            'egg_id' => 15,
            'memory' => 0,
            'disk' => 0,
            'cpu' => 0,
        ],
    ],

];
