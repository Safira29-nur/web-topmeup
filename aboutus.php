<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopMeUp</title>
</head>
<body>

   <?php include "layout/header.html" ?>
   <link rel="stylesheet" type="text/css" href="css/style.css">


    <main>
    <?php
// Mulai sesi (optional)
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Tim Kami</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <style>
        body{
            background-image: url('img/back.svg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    
    
    <header>
        <h1>This is kelompok 1</h1>
    </header>
    <main>
        <section>
            <h2>Tim Top Me Up</h2>
            <div class="team-container">
                <div class="team-member">
                    <img src="maul.jpg" alt="Anggota Tim 1">
                    <h3>Maulidya Syifa</h3>
                    <p>Posisi: CEO</p>
                    <p>Mahasiswa Aktif di STT Nurul Fikri</p>
                </div>
                <div class="team-member">
                    <img src="sapiraa.jpg" alt="Safira Nur Azkia">
                    <h3>Safira Nur Azkia</h3>
                    <p>Posisi: CEO </p>
                    <p>Mahasiswa Aktif di STT Nurul Fikri</p>
                </div>
                <div class="team-member">
                    <img src="tiaranew.jpg" alt="Anggota Tim 3">
                    <h3>Tiara Safitri Handayani</h3>
                    <p>Posisi: Manager</p>
                    <p>Mahasiswa Aktif di STT Nurul Fikri.</p>
                </div>
                <div class="team-member">
                    <img src="nurul.jpg" alt="Anggota Tim 4">
                    <h3>Nurul Destiyana</h3>
                    <p>Posisi: Designer</p>
                    <p>Mahasiswa Aktif di STT Nurul Fikri</p>
                     </a>
                </div>
                
            </div>
        </section>
    </main>
    <?php include "layout/footer.html" ?>
   
</body>
</html>
