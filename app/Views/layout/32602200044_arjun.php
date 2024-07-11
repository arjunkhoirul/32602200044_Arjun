<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>Layouting</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-icon">
            <i class="fa-solid fa-circle-user fa-2x1"></i>
        </div>
        <div class="navbar-page">
            <ul type='none'>
                <li><a href="#"></a>Homne</li>
                <li><a href="#"></a>About</li>
                <li><a href="#"></a>Portofolio</li>
                <li><a href="#"></a>Contact</li>
            </ul>
        </div>
        <div class="navbar-sosmed">
            <ul type='none'>
                <li><i class="fa-brands fa-linkedin fa-lg"></i></li>
                <li><i class="fa-brands fa-instagram fa-lg"></i></li>
                <li><i class="fa-brands fa-facebook fa-lg"></i></li>
                <li><i class="fa-brands fa-square-whatsapp fa-lg"></i></li>
            </ul>
        </div>
    </div>
    <div class="barcode">
        <span class="name">
            Arjun Khoirul Abror
        </span> </br>
        <span class="description">
            Mahasiswa Lulusan Teknik Informatika angkatan 2025
        </span>
    </div>
    <?= $this->renderSection('content') ?>
</body>

</html>