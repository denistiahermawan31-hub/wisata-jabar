<?php
// =========================================================
// Controller.php — parent class untuk semua Controller
// =========================================================
class Controller
{
    // Muat file View dari app/views dan sisipkan data ($data jadi variabel di view)
    protected function view(string $view, array $data = [])
    {
        extract($data);
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (!file_exists($viewFile)) {
            die("View tidak ditemukan: {$view}");
        }
        require __DIR__ . '/../views/layouts/header.php';
        require $viewFile;
        require __DIR__ . '/../views/layouts/footer.php';
    }

    // Muat model
    protected function model(string $model)
    {
        require_once __DIR__ . '/../models/' . $model . '.php';
        return new $model();
    }

    // Wajib login (dipakai di controller yang butuh auth)
    protected function requireLogin()
    {
        if (!is_logged_in()) {
            redirect('auth/login');
        }
    }

    // Wajib admin (dipakai di AdminController)
    protected function requireAdmin()
    {
        if (!is_admin()) {
            redirect('auth/login');
        }
    }
}
