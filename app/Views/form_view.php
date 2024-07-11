<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
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
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    label {
        margin: 10px 0 5px;
        color: #555;
        display: block;
        text-align: left;
        width: 100%;
    }
    input[type="text"],
    input[type="submit"] {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        width: 100%;
        box-sizing: border-box;
    }
    input[type="text"] {
        margin-bottom: 20px;
    }
    input[type="submit"] {
        background-color: #28a745;
        color: #fff;
        border: none;
        cursor: pointer;
        width: auto;
    }
    input[type="submit"]:hover {
        background-color: #218838;
    }
    .form-group {
        margin-bottom: 15px;
        width: 100%;
    }
    .form-group label {
        margin-bottom: 5px;
    }
    </style>
</head>
<body>
<div class="container">
        <h2>Form Input Data</h2>
        <form action="/submit" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" name="nim" id="nim">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" name="kelas" id="kelas">
            </div>
            <div class="form-group">
                <label for="matakuliah">Mata Kuliah:</label>
                <input type="text" name="matakuliah" id="matakuliah">
            </div>
            <div class="form-group">
                <label for="dosen_pengampu">Dosen Pengampu:</label>
                <input type="text" name="dosen_pengampu" id="dosen_pengampu">
            </div>
            <div class="form-group">
                <label for="asisten_praktikum">Asisten Praktikum:</label>
                <input type="text" name="asisten_praktikum" id="asisten_praktikum">
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>