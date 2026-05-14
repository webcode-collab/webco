<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Laravel Proyek</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%);
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #ffffff;
        }

        .container {
            width: min(460px, calc(100vw - 32px));
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.25);
            text-align: center;
        }

        h1 {
            margin: 0 0 12px;
            font-size: 2rem;
        }

        p {
            margin: 0 0 24px;
            color: #dbeafe;
            line-height: 1.6;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 18px;
            background: #ffffff;
            color: #1d4ed8;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            cursor: pointer;
        }

        .image-section {
            margin: 32px 0;
            text-align: center;
        }

        .image-section h3 {
            color: #ffffff;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .image-item {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 16px;
            transition: transform 0.2s ease;
        }

        .image-item:hover {
            transform: translateY(-5px);
        }

        .image-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .image-item p {
            color: #dbeafe;
            margin: 0;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat datang, {{ $name }}!</h1>
        <p>Ini adalah beranda sederhana setelah login. Anda bisa menambahkan konten lebih lanjut di halaman ini.</p>

        <!-- Contoh menampilkan gambar -->
        <div class="image-section">
            <h3>📚 Koleksi Buku Kami</h3>

            <!-- Gambar dari public folder -->
            <div class="image-grid">
                <div class="image-item">
                    <img src="{{ asset('images/book1.jpg') }}" alt="Buku Fiksi" onerror="this.src='https://via.placeholder.com/200x300?text=Buku+Fiksi'">
                    <p>Buku Fiksi Terbaik</p>
                </div>

                <div class="image-item">
                    <img src="{{ asset('images/book2.jpg') }}" alt="Buku Non-Fiksi" onerror="this.src='https://via.placeholder.com/200x300?text=Buku+Non-Fiksi'">
                    <p>Buku Non-Fiksi</p>
                </div>

                <div class="image-item">
                    <img src="{{ asset('images/book3.jpg') }}" alt="Komik" onerror="this.src='https://via.placeholder.com/200x300?text=Komik'">
                    <p>Komik Seru</p>
                </div>
            </div>

            <!-- Gambar dari storage (untuk upload user) -->
            <h3>🖼️ Gambar dari Storage</h3>
            <img src="{{ Storage::url('uploads/user-avatar.jpg') }}" alt="Avatar User" style="width: 100px; height: 100px; border-radius: 50%;" onerror="this.src='https://via.placeholder.com/100x100?text=Avatar'">
        </div>

        <form action="/logout" method="POST">
            @csrf
            <button class="button" type="submit">Keluar</button>
        </form>
    </div>
</body>
</html>
