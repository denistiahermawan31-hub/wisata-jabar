<?php
// =========================================================
// AdminController — CRUD destinasi (khusus role admin)
// =========================================================
class AdminController extends Controller
{
    private Destinasi $destinasiModel;
    private Kategori $kategoriModel;

    public function __construct()
    {
        $this->requireAdmin(); // semua method di sini wajib login sebagai admin
        $this->destinasiModel = $this->model('Destinasi');
        $this->kategoriModel  = $this->model('Kategori');
    }

    public function index()
    {
        $this->view('admin/dashboard', [
            'title'     => 'Admin Dashboard',
            'destinasi' => $this->destinasiModel->getAllAdmin(),
        ]);
    }

    public function create()
    {
        $this->view('admin/form', [
            'title'    => 'Tambah Destinasi',
            'kategori' => $this->kategoriModel->getAll(),
            'd'        => null,
        ]);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->destinasiModel->create([
                'nama'        => trim($_POST['nama']),
                'kategori_id' => (int)$_POST['kategori_id'],
                'kabupaten'   => trim($_POST['kabupaten']),
                'deskripsi'   => trim($_POST['deskripsi']),
                'harga_tiket' => trim($_POST['harga_tiket']),
                'jam_buka'    => trim($_POST['jam_buka']),
                'foto'        => trim($_POST['foto']),
                'maps_query'  => trim($_POST['maps_query']),
            ]);
        }
        redirect('admin');
    }

    public function edit($id = null)
    {
        if (!$id) redirect('admin');
        $data = $this->destinasiModel->getById((int)$id);
        if (!$data) redirect('admin');

        $this->view('admin/form', [
            'title'    => 'Edit Destinasi',
            'kategori' => $this->kategoriModel->getAll(),
            'd'        => $data,
        ]);
    }

    public function update($id = null)
    {
        if ($id && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->destinasiModel->update((int)$id, [
                'nama'        => trim($_POST['nama']),
                'kategori_id' => (int)$_POST['kategori_id'],
                'kabupaten'   => trim($_POST['kabupaten']),
                'deskripsi'   => trim($_POST['deskripsi']),
                'harga_tiket' => trim($_POST['harga_tiket']),
                'jam_buka'    => trim($_POST['jam_buka']),
                'foto'        => trim($_POST['foto']),
                'maps_query'  => trim($_POST['maps_query']),
            ]);
        }
        redirect('admin');
    }

    public function delete($id = null)
    {
        if ($id) $this->destinasiModel->delete((int)$id);
        redirect('admin');
    }

    public function restore($id = null)
    {
        if ($id) $this->destinasiModel->restore((int)$id);
        redirect('admin');
    }
}
