<?php
// =========================================================
// DestinasiController — halaman detail destinasi (publik)
// =========================================================
class DestinasiController extends Controller
{
    public function detail($id = null)
    {
        if (!$id) redirect('');

        $destinasiModel = $this->model('Destinasi');
        $data = $destinasiModel->getById((int)$id);

        if (!$data || $data['is_deleted'] == 1) {
            http_response_code(404);
            $this->view('home/404', ['title' => 'Destinasi Tidak Ditemukan']);
            return;
        }

        $this->view('destinasi/detail', [
            'title' => $data['nama'],
            'd'     => $data,
        ]);
    }
}
