<?php
// =========================================================
// Konfigurasi dasar aplikasi
// =========================================================

// --- Koneksi Database (default Laragon: user root, password kosong) ---
define('DB_HOST', 'localhost');
define('DB_NAME', 'wisata_jabar');
define('DB_USER', 'root');
define('DB_PASS', '');

// --- Mulai session untuk semua halaman ---
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// =========================================================
// Helper function: base URL otomatis
// Supaya link tetap benar baik diakses lewat
// http://localhost/WisataJabar/public/  ATAUPUN
// http://wisatajabar.test/ (virtual host langsung ke /public)
// =========================================================
function base_url($path = '')
{
    $base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
    return $base . '/' . ltrim($path, '/');
}

function asset($path = '')
{
    return base_url('assets/' . ltrim($path, '/'));
}

// --- Helper auth sederhana ---
function is_logged_in()
{
    return isset($_SESSION['user_id']);
}

function is_admin()
{
    return is_logged_in() && $_SESSION['role'] === 'admin';
}

function current_user()
{
    return $_SESSION['user_id'] ?? null;
}

function redirect($path)
{
    header('Location: ' . base_url($path));
    exit;
}
