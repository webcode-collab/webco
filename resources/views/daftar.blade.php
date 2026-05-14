<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Buku - Daftar</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #eef2ff 0%, #e0f2fe 100%);
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #0f172a;
        }

        .kartu {
            width: min(500px, calc(100vw - 32px));
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

        p.tulisanbawah {
            margin: 0 0 28px;
            color: #475569;
            line-height: 1.7;
        }

        .kontennye {
            display: grid;
            gap: 8px;
            margin-bottom: 18px;
        }

        label {
            font-size: 0.95rem;
            font-weight: 600;
            color: #334155;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            border: 1px solid #cbd5e1;
            border-radius: 14px;
            padding: 12px 14px;
            font-size: 0.95rem;
            color: #0f172a;
            background: #f8fafc;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        .option {
            display: grid;
            gap: 10px;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 14px;
            background: #f8fafc;
        }

        .options label {
            font-weight: 500;
            color: #475569;
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
    <div class="kartu">
        <h1>Daftar Anggota Baru</h1>
        <p class="tulisanbawah">Isi informasi singkat untuk bergabung dengan komunitas BookLovers.</p>

        <form action="/welcome" method="POST">
            @csrf

            <div class="kontennye">
                <label for="first_name">Nama Depan</label>
                <input id="first_name" type="text" name="first_name" required>
            </div>

            <div class="kontennye">
                <label for="last_name">Nama Belakang</label>
                <input id="last_name" type="text" name="last_name" required>
            </div>

            <div class="kontennye">
                <label>Gender</label>
                <div class="options">
                    <label><input type="radio" name="gender" value="Male"> Male</label>
                    <label><input type="radio" name="gender" value="Female"> Female</label>
                </div>
            </div>

            <div class="kontennye">
                <label for="nationality">Kebangsaan</label>
                <select id="nationality" name="nationality">
                    <option value="Indonesian">Indonesian</option>
                </select>
            </div>

            <div class="kontennye">
                <label>Bahasa yang Dikuasai</label>
                <div class="options">
                    <label><input type="checkbox" name="language[]" value="Bahasa Indonesia"> Bahasa Indonesia</label>
                    <label><input type="checkbox" name="language[]" value="English"> English</label>
                    <label><input type="checkbox" name="language[]" value="Other"> Other</label>
                </div>
            </div>

            <div class="kontennye">
                <label for="bio">Bio</label>
                <textarea id="bio" name="bio" rows="5"></textarea>
            </div>

            <div class="actions">
                <button class="button" type="submit">Daftar</button>
                <a class="link" href="/masuk-anggota">Sudah daftar? Masuk</a>
                <a class="link" href="/">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>