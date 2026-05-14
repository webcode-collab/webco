<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Buku - Masuk Anggota</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #0f172a;
        }

        .card {
            width: min(420px, calc(100vw - 32px));
            background: #ffffff;
            border-radius: 28px;
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12);
            padding: 36px;
        }

        h1 {
            margin: 0 0 14px;
            font-size: 2rem;
            letter-spacing: -0.04em;
        }

        p.subtitle {
            margin: 0 0 28px;
            color: #475569;
            line-height: 1.7;
        }

        .field {
            display: grid;
            gap: 8px;
            margin-bottom: 18px;
        }

        label {
            font-size: 0.95rem;
            font-weight: 600;
            color: #334155;
        }

        input[type="text"] {
            width: 100%;
            border: 1px solid #cbd5e1;
            border-radius: 14px;
            padding: 12px 14px;
            font-size: 0.95rem;
            color: #0f172a;
            background: #f8fafc;
        }

        .actions {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 8px;
        }

        .button {
            width: 100%;
            padding: 14px 16px;
            border-radius: 14px;
            border: none;
            background: #2563eb;
            color: white;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.2s ease;
        }

        .button:hover {
            background: #1d4ed8;
            transform: translateY(-1px);
        }

        .link {
            display: inline-flex;
            justify-content: center;
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px solid #cbd5e1;
            background: white;
            color: #334155;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Masuk sebagai Anggota</h1>
        <p class="subtitle">Masukkan nama depan dan belakang Anda untuk masuk ke komunitas.</p>

        <form action="/masuk-anggota" method="POST">
            @csrf

            <div class="field">
                <label for="first_name">Nama Depan</label>
                <input id="first_name" type="text" name="first_name" required>
            </div>

            <div class="field">
                <label for="last_name">Nama Belakang</label>
                <input id="last_name" type="text" name="last_name" required>
            </div>

            <div class="actions">
                <button class="button" type="submit">Masuk</button>
                <a class="link" href="/daftar">Belum daftar? Daftar</a>
                <a class="link" href="/">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>