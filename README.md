# Wifi api admin
cara instalasi:
1. rename .env.example menjadi .env
2. jalankan composer install
3. jalankan npm install dan npm run dev
4. jalankan php artisan key:generate
5. tambahkan DB_DATABASE dengan database yang akan digunakan
6. jalankan php artisan migrate:fresh --seed
7. jalankan php artisan serve
8. api untuk data wifi dapat diakses di /api/wifi