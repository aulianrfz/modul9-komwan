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
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 280px;
            padding: 15px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            max-width: 100%;
            margin-bottom: 15px;
            /* No border-radius, making the image square */
        }

        .card h3 {
            font-size: 24px;
            margin: 10px 0;
            margin-bottom: 25px;
        }

        /* Align text to the left */
        .card p {
            font-size: 16px;
            color: #666;
            margin: 5px 0;
            line-height: 1.4;
            text-align: left; /* Aligning the text to the left */
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

        #formModal {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 30px 70px;
            border-radius: 8px;
            width: 500px;
            position: relative;
        }

        .modal-content label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: left; /* Aligning labels to the left */
        }

        .modal-content input,
        .modal-content textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            text-align: left; /* Aligning input fields to the left */
        }

        .modal-content button {
            padding: 10px 20px;
            border: none;
            margin-right: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn {
            background-color: #28a745;
            color: white;
        }

        .cancel-btn {
            background-color: #dc3545;
            color: white;
        }

    </style>
</head>
<body>
    <header>
        <h1>CV Anggota</h1>
        <div style="position: absolute; top: 20px; right: 20px;">
            <a href="{{ url('/') }}" style="color: white; text-decoration: underline;">Home</a>
        </div>
    </header>

    <div style="text-align: center; margin-top: 20px;">
        <button onclick="openModal()" style="padding: 10px 20px; background-color: #0066cc; color: white; border: none; border-radius: 5px; cursor: pointer;">Insert Anggota</button>
    </div>

    <!-- Modal Form -->
    <div id="formModal" onclick="closeModal(event)">
        <div class="modal-content" onclick="event.stopPropagation();">
            <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2>Form Tambah Anggota</h2>

                <label>Nama:</label>
                <input type="text" name="nama" required>

                <label>NIM:</label>
                <input type="text" name="nim" required>

                <label>Alamat:</label>
                <input type="text" name="alamat" required>

                <label>Email:</label>
                <input type="email" name="email" required>

                <label>Nomor HP:</label>
                <input type="text" name="nomor_hp" required>

                <label>Pendidikan Sekarang:</label>
                <input type="text" name="pendidikan" required>
                
                <label>Gambar:</label>
                <input type="file" name="gambar" accept="image/*" required>

                <button type="submit" class="submit-btn">Simpan</button>
                <button type="button" class="cancel-btn" onclick="closeModal()">Batal</button>
            </form>
        </div>
    </div>

    <div class="content">
        @foreach ($anggotas as $anggota)
            <div class="card">
                <img src="{{ asset('storage/' . $anggota->gambar) }}" alt="Foto Anggota">
                <h3>{{ $anggota->nama }}</h3>
                <p><strong>NIM:</strong> {{ $anggota->nim }}</p>
                <p><strong>Email:</strong> {{ $anggota->email }}</p>
                <p><strong>Nomor HP:</strong> {{ $anggota->nomor_hp }}</p>
                <p><strong>Pendidikan Sekarang:</strong> {{ $anggota->pendidikan }}</p>
            </div>
        @endforeach
    </div>

    <div class="footer">
        <p>&copy; 2025 - KoTA 105</p>
    </div>

    <script>
        function openModal() {
            document.getElementById('formModal').style.display = 'block';
        }

        function closeModal(event) {
            document.getElementById('formModal').style.display = 'none';
        }
    </script>
</body>
</html>
