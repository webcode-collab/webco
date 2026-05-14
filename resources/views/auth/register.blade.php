<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Laravel Proyek</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #4f46e5 0%, #2563eb 100%);
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #111827;
        }

        .card {
            width: min(360px, calc(100vw - 32px));
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.15);
            padding: 32px;
        }

        .card h2 {
            margin: 0 0 20px;
            font-size: 1.75rem;
            color: #111827;
        }

        .field {
            display: grid;
            gap: 8px;
            margin-bottom: 16px;
        }

        .field label {
            font-size: 0.95rem;
            color: #4b5563;
        }

        .field input {
            width: 100%;
            border: 1px solid #d1d5db;
            border-radius: 12px;
            padding: 12px 14px;
            font-size: 1rem;
        }

        .button {
            width: 100%;
            padding: 14px 16px;
            border: none;
            border-radius: 14px;
            background: #2563eb;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
        }

        .note {
            margin-top: 16px;
            font-size: 0.9rem;
            color: #6b7280;
            text-align: center;
        }

        .link {
            display: block;
            margin-top: 16px;
            text-align: center;
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Buat Akun Baru</h2>

        <form action="/register" method="POST">
            @csrf

            @if ($errors->any())
                <div style="margin-bottom: 16px; color: #b91c1c; font-size: 0.95rem;">
                    {{ $errors->first() }}
                </div>
            @endif

            <div class="field">
                <label for="name">Nama</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required placeholder="Nama lengkap">
            </div>

            <div class="field">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="nama@contoh.com">
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required placeholder="Minimal 8 karakter">
            </div>

            <div class="field">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Ulangi password">
            </div>

            <button class="button" type="submit">Daftar</button>
        </form>

        <a class="link" href="/login">Sudah punya akun? Masuk</a>
    </div>
</body>
</html>
