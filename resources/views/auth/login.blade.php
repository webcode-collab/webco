<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laravel Proyek</title>
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
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .field input:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
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

        .button:hover {
            background: #1d4ed8;
        }

        .secondary-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin-top: 12px;
            padding: 14px 16px;
            border-radius: 14px;
            background: #f3f4f6;
            color: #1f2937;
            text-decoration: none;
            box-shadow: inset 0 0 0 1px rgba(17, 24, 39, 0.08);
            font-weight: 600;
        }

        .secondary-button:hover {
            background: #e5e7eb;
        }

        .note {
            margin-top: 16px;
            font-size: 0.9rem;
            color: #6b7280;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Masuk ke Akun</h2>
        <form action="/login" method="POST">
            @csrf

            @if ($errors->any())
                <div style="margin-bottom: 16px; color: #b91c1c; font-size: 0.95rem;">
                    {{ $errors->first() }}
                </div>
            @endif

            <div class="field">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="nama@contoh.com">
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required placeholder="Minimal 8 karakter">
            </div>

            <button class="button" type="submit">Masuk</button>
        </form>

        <a class="secondary-button" href="/register">Buat Akun Baru</a>
        <p class="note">Pastikan email dan password Anda benar untuk akses cepat.</p>
    </div>
</body>
</html>