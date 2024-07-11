<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Data</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px;
        text-align: center;
    }

    h2 {
        color: #333;
        margin-bottom: 20px;
    }
    
    p {
        font-size: 16px;
        color: #555;
        margin: 10px 0;
    }
    .button {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        font-size: 16px;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
    }

    .button:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hasil Input Data</h2>
        <p>Nama: <?= esc($nama) ?></p>
        <p>NIM: <?= esc($nim) ?></p>
        <p>Kelas: <?= esc($kelas) ?></p>
        <p>Mata Kuliah: <?= esc($matakuliah) ?></p>
        <p>Dosen Pengampu: <?= esc($dosen_pengampu) ?></p>
        <p>Asisten Praktikum: <?= esc($asisten_praktikum) ?></p>
        <a href="/form" class="button">Kembali ke Form</a>
    </div>
</body>
</html>