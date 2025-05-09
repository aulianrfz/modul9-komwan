<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KoTA - Index</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fa;
            color: #333;
        }

        header {
            background-color: #0066cc;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            font-size: 36px;
        }

        .content {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .content h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.6;
        }

        .image-gallery {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .image-gallery img {
            width: 32%;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .image-gallery img:hover {
            transform: scale(1.05);
        }

        .footer {
            background-color: #0066cc;
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
        <h1>KoTA - Tugas Akhir</h1>
    </header>

    <div class="content">
        <h2>KoTA 105</h2>
        <h3>Judul: Pengembangan Aplikasi Pengelolaan Kegiatan Kompetisi Pariwisata Indonesia</h3>
        <p>Deskripsi: Ini adalah deskripsi tentang tugas akhir kami yang berfokus pada pengembangan aplikasi X untuk memecahkan masalah Y. Aplikasi ini bertujuan untuk membantu Z dalam meningkatkan efisiensi dan kemudahan dalam proses bisnis mereka.</p>
        
        <h3>Gambar-Gambar yang Menarik</h3>
        <div class="image-gallery">
            <img src="https://via.placeholder.com/600x400" alt="Gambar 1">
            <img src="https://via.placeholder.com/600x400" alt="Gambar 2">
            <img src="https://via.placeholder.com/600x400" alt="Gambar 3">
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 KoTA - Tugas Akhir</p>
    </div>
</body>
</html>
