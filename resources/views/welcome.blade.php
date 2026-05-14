<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Buku - Selamat Datang</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #0f172a;
        }

        .card {
            width: min(620px, calc(100vw - 32px));
            background: #ffffff;
            border-radius: 28px;
            box-shadow: 0 26px 64px rgba(15, 23, 42, 0.14);
            padding: 40px 36px;
            text-align: center;
        }

        h1 {
            margin: 0 0 16px;
            font-size: clamp(2rem, 4vw, 2.75rem);
            letter-spacing: -0.05em;
        }

        h3 {
            margin: 0 0 28px;
            font-size: 1.05rem;
            color: #475569;
            line-height: 1.8;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 22px;
            border-radius: 50px;
            background: #2563eb;
            color: #ffffff;
            font-weight: 700;
            text-decoration: none;
            transition: background 0.2s ease, transform 0.2s ease;
        }

        .button:hover {
            background: #1d4ed8;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="{{ asset('images/buku1.webp') }}" alt="Deskripsi" width="80" height="100"><br>
        <h1><b>Selamat Datang</b> {{ $firstName }}!</h1>
        <h3>Terima kasih telah bergabung di Rumah Buku. Komunitas kita bersama!</h3>
        <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
            <a class="button" href="/">Kembali ke Beranda</a>
                    </div>
    </div>
</body>
</html>