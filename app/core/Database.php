<?php
// =========================================================
// Database.php — koneksi PDO (singleton) ke MySQL
// =========================================================
class Database
{
    private static ?PDO $instance = null;

    public static function getConnection(): PDO
    {
        if (self::$instance === null) {
            try {
                $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
                self::$instance = new PDO($dsn, DB_USER, DB_PASS, [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);
            } catch (PDOException $e) {
                die('Koneksi database gagal: ' . $e->getMessage() .
                    '<br>Pastikan database "wisata_jabar" sudah diimport di phpMyAdmin dan Laragon aktif.');
            }
        }
        return self::$instance;
    }
}
