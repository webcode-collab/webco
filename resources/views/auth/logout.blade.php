<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - Laravel Proyek</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #111827 0%, #1f2937 100%);
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #f9fafb;
        }

        .card {
            width: min(420px, calc(100vw - 32px));
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 24px;
            padding: 36px;
            text-align: center;
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.25);
        }

        h1 {
            margin: 0 0 16px;
            font-size: 2rem;
        }

        p {
            margin: 0 0 24px;
            color: #d1d5db;
            line-height: 1.6;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 18px;
            border-radius: 14px;
            background: #2563eb;
            color: #ffffff;
            text-decoration: none;
            font-weight: 700;
        }

        .button:hover {
            background: #1d4ed8;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Berhasil Logout</h1>
        <p>Anda telah keluar dari akun. Silakan masuk kembali jika ingin mengakses beranda.</p>
        <a class="button" href="/login">Kembali ke Login</a>
    </div>
</body>
</html>
