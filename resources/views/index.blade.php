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
            position: relative;
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
            padding: 75px;
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
            justify-content: center; /* Tengah horizontal */
            align-items: center;     /* Tengah vertikal jika diperlukan */
            margin-top: 30px;
        }

        .image-gallery img {
            width: 60%; /* Sesuaikan ukuran gambar */
            max-width: 600px;
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
        <h1>Topik Tugas Akhir</h1>
        <div style="position: absolute; top: 20px; right: 20px;">
            <a href="{{ url('/about') }}" style="color: white; text-decoration: underline;">About</a>
        </div>
    </header>

    <div class="content">
        <h2>KoTA 105</h2>
        <h3>Pengembangan Aplikasi Pengelolaan Kegiatan Kompetisi Pariwisata Indonesia</h3>
        <p>Aplikasi KPI merupakan aplikasi yang dibangun untuk membantu panitia dalam mengelola kegiatan KPI,
            diantaranya proses pendaftaran, pembayaran, penjadwalan, dan pendaftaran ulang. Dalam aplikasi ini,
            terdapat pemanfaatan algoritma dalam salah satu proses KPI, yaitu penjadwalan. Pembuatan jadwal aplikasi yang akan
            dibangun akan memanfaatkan penggunaan Constraint Satisfaction Problem.
        </p>
        
        <!-- <h3>Beberapa </h3> -->
        <div class="image-gallery">
            <img src="{{ asset('storage/kpi.jpg') }}" alt="Gambar KPI">
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 - KoTA 105</p>
    </div>
</body>
</html>
