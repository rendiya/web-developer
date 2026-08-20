<?php
// Setup SQLite Database
$db_file = __DIR__ . '/database.sqlite';
$db = new PDO('sqlite:' . $db_file);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Buat tabel jika belum ada
$db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL
)");

// Proses Form Submit (Logika Bisnis - Backend)
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    
    if ($name && $email) {
        $stmt = $db->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->execute([':name' => $name, ':email' => $email]);
        $message = "User berhasil ditambahkan!";
    }
}

// Ambil data (Database Read)
$users = $db->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Monolith Sederhana</title>
    <style>
        body { font-family: system-ui, -apple-system, sans-serif; max-width: 600px; margin: 40px auto; padding: 20px; color: #333; }
        .card { background: #f8fafc; padding: 24px; border-radius: 8px; border: 1px solid #e2e8f0; margin-bottom: 20px; }
        input { display: block; margin-bottom: 16px; width: 100%; padding: 10px; box-sizing: border-box; border: 1px solid #cbd5e1; border-radius: 4px; }
        button { background: #2563eb; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; width: 100%; }
        button:hover { background: #1d4ed8; }
        .msg { color: #15803d; font-weight: bold; margin-bottom: 16px; background: #bbf7d0; padding: 10px; border-radius: 4px; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 12px; border: 1px solid #e2e8f0; text-align: left; }
        th { background: #f1f5f9; }
        .badge { background: #818cf8; color: white; padding: 4px 8px; border-radius: 12px; font-size: 0.8rem; }
    </style>
</head>
<body>
    <h1>Aplikasi Monolith <span class="badge">PHP + SQLite</span></h1>
    <p>Ini adalah contoh aplikasi Monolith dimana antarmuka (Frontend), logika bisnis (Backend), dan query Database semuanya menyatu dalam satu *codebase*.</p>
    
    <div class="card" id="form">
        <h2>Form Pendaftaran User</h2>
        <?php if ($message) echo "<p class='msg'>$message</p>"; ?>
        <form method="POST">
            <label>Nama:</label>
            <input type="text" name="name" required placeholder="Masukkan nama...">
            <label>Email:</label>
            <input type="email" name="email" required placeholder="Masukkan email...">
            <button type="submit">Simpan Data</button>
        </form>
    </div>

    <h2>Data Users (Database)</h2>
    <table>
        <tr><th>ID</th><th>Nama</th><th>Email</th></tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['name']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
        </tr>
        <?php endforeach; ?>
        <?php if (count($users) === 0): ?>
        <tr><td colspan="3" style="text-align: center; color: #64748b;">Belum ada data. Silakan isi form di atas.</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>
