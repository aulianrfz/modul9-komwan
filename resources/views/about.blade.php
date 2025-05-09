<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KoTA - About</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fa;
            color: #333;
        }

        header {
            background-color: #ff5733;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            font-size: 36px;
        }

        .content {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 280px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            max-width: 100%;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .card h3 {
            font-size: 24px;
            margin: 10px 0;
        }

        .card p {
            font-size: 16px;
            color: #666;
        }

        .footer {
            background-color: #ff5733;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>CV Anggota KoTA</h1>
    </header>

    <div class="content">
        @foreach ($anggotas as $anggota)
            <div class="card">
                <img src="{{ asset('storage/' . $anggota->gambar) }}" alt="Foto Anggota">
                <h3>{{ $anggota->nama }}</h3>
                <p><strong>NIM:</strong> {{ $anggota->nim }}</p>
                <p><strong>Email:</strong> {{ $anggota->email }}</p>
                <p><strong>Nomor HP:</strong> {{ $anggota->nomor_hp }}</p>
                <p><strong>Pendidikan:</strong> {{ $anggota->pendidikan }}</p>
            </div>
        @endforeach
    </div>

    <div class="footer">
        <p>&copy; 2025 KoTA - CV Anggota</p>
    </div>
</body>
</html>
