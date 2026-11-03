<?php
// =========================================================
// Model: Destinasi — semua query terkait tabel destinasi
// =========================================================
class Destinasi
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    // Ambil semua destinasi aktif, bisa difilter search & kategori
    public function getAll(string $keyword = '', int $kategoriId = 0): array
    {
        $sql = "SELECT d.*, k.nama AS kategori_nama, k.icon AS kategori_icon
                FROM destinasi d
                LEFT JOIN kategori k ON d.kategori_id = k.id
                WHERE d.is_deleted = 0";
        $params = [];

        if ($keyword !== '') {
            $sql .= " AND (d.nama LIKE :keyword OR d.kabupaten LIKE :keyword)";
            $params['keyword'] = '%' . $keyword . '%';
        }
        if ($kategoriId > 0) {
            $sql .= " AND d.kategori_id = :kategori_id";
            $params['kategori_id'] = $kategoriId;
        }
        $sql .= " ORDER BY d.nama ASC";

        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    // Semua data termasuk yang soft-deleted (dipakai admin kalau perlu)
    public function getAllAdmin(): array
    {
        $sql = "SELECT d.*, k.nama AS kategori_nama
                FROM destinasi d LEFT JOIN kategori k ON d.kategori_id = k.id
                ORDER BY d.is_deleted ASC, d.nama ASC";
        return $this->db->query($sql)->fetchAll();
    }

    public function getById(int $id): array|false
    {
        $stmt = $this->db->prepare(
            "SELECT d.*, k.nama AS kategori_nama
             FROM destinasi d LEFT JOIN kategori k ON d.kategori_id = k.id
             WHERE d.id = :id"
        );
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function create(array $data): bool
    {
        $sql = "INSERT INTO destinasi (nama, kategori_id, kabupaten, deskripsi, harga_tiket, jam_buka, foto, maps_query)
                VALUES (:nama, :kategori_id, :kabupaten, :deskripsi, :harga_tiket, :jam_buka, :foto, :maps_query)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($data);
    }

    public function update(int $id, array $data): bool
    {
        $sql = "UPDATE destinasi SET
                    nama = :nama, kategori_id = :kategori_id, kabupaten = :kabupaten,
                    deskripsi = :deskripsi, harga_tiket = :harga_tiket, jam_buka = :jam_buka,
                    foto = :foto, maps_query = :maps_query
                WHERE id = :id";
        $data['id'] = $id;
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($data);
    }

    // Soft delete, bukan hapus permanen
    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare("UPDATE destinasi SET is_deleted = 1 WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    public function restore(int $id): bool
    {
        $stmt = $this->db->prepare("UPDATE destinasi SET is_deleted = 0 WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
