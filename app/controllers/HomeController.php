<?php
// =========================================================
// HomeController — halaman beranda (list + search + filter)
// =========================================================
class HomeController extends Controller
{
    public function index()
    {
        $destinasiModel = $this->model('Destinasi');
        $kategoriModel  = $this->model('Kategori');

        $keyword    = trim($_GET['q'] ?? '');
        $kategoriId = (int)($_GET['kategori'] ?? 0);

        $this->view('home/index', [
            'title'      => 'Beranda',
            'destinasi'  => $destinasiModel->getAll($keyword, $kategoriId),
            'kategori'   => $kategoriModel->getAll(),
            'keyword'    => $keyword,
            'kategoriId' => $kategoriId,
        ]);
    }

    public function notFound()
    {
        http_response_code(404);
        $this->view('home/404', ['title' => 'Halaman Tidak Ditemukan']);
    }
}
