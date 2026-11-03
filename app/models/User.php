<?php
// =========================================================
// Model: User — auth (register, login)
// =========================================================
class User
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function findByEmail(string $email): array|false
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }

    public function create(string $nama, string $email, string $password, string $role = 'user'): bool
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare(
            "INSERT INTO users (nama, email, password, role) VALUES (:nama, :email, :password, :role)"
        );
        return $stmt->execute([
            'nama' => $nama,
            'email' => $email,
            'password' => $hash,
            'role' => $role,
        ]);
    }

    public function verify(string $email, string $password): array|false
    {
        $user = $this->findByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
