<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Buku - BookLovers</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #88b6d4 0%, #bae6fd 100%);
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #1f2937;
        }

        .page {
            width: min(640px, calc(100vw - 32px));
            background: #ffffff;
            border-radius: 28px;
            box-shadow: 0 24px 48px rgba(15, 23, 42, 0.12);
            padding: 40px 36px;
            text-align: center;
        }

        .brand {
            margin: 0;
            font-size: clamp(2rem, 4vw, 3rem);
            letter-spacing: -0.04em;
        }

        .subtitle {
            margin: 12px 0 32px;
            font-size: 1.05rem;
            color: #4b5563;
            line-height: 1.8;
        }

        .description {
            margin: 0 auto 28px;
            max-width: 520px;
            color: #4b5563;
            line-height: 1.75;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 22px;
            border-radius: 999px;
            background: #2563eb;
            color: #ffffff;
            text-decoration: none;
            font-weight: 700;
            transition: transform 0.2s ease, background 0.2s ease;
        }

        .button:hover {
            background: #1d4ed8;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>
    <main class="page">
        <h1 class="brand">BookLovers</h1>
        <p class="subtitle">Selamat datang di Rumah Buku — tempat berkumpulnya pecinta bacaan dan komunitas penikmat cerita.</p>
        <p class="description">Gabung sekarang untuk menemukan rekomendasi buku terbaru, berbagi review, dan bertemu pembaca lain yang punya selera buku sama.</p>
        <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
            <a class="button" href="/daftar">Daftar Sekarang</a>
            <a class="button" href="/masuk-anggota" style="background: #f8fafc; color: #2563eb; border: 1px solid #cbd5e1;">Masuk sebagai Anggota</a>
        </div>
    </main>
</body>
</html>