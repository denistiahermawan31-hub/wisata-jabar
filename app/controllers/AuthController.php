<?php
// =========================================================
// AuthController — login, register, logout
// =========================================================
class AuthController extends Controller
{
    public function login()
    {
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = $this->model('User');
            $email    = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            $user = $userModel->verify($email, $password);
            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['nama']    = $user['nama'];
                $_SESSION['role']    = $user['role'];
                redirect($user['role'] === 'admin' ? 'admin' : '');
            } else {
                $error = 'Email atau password salah.';
            }
        }

        $this->view('auth/login', ['title' => 'Login', 'error' => $error]);
    }

    public function register()
    {
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = $this->model('User');
            $nama     = trim($_POST['nama'] ?? '');
            $email    = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            if ($nama === '' || $email === '' || $password === '') {
                $error = 'Semua field wajib diisi.';
            } elseif ($userModel->findByEmail($email)) {
                $error = 'Email sudah terdaftar, silakan login.';
            } else {
                $userModel->create($nama, $email, $password, 'user');
                redirect('auth/login');
            }
        }

        $this->view('auth/register', ['title' => 'Daftar Akun', 'error' => $error]);
    }

    public function logout()
    {
        session_destroy();
        redirect('');
    }
}
