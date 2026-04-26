<!DOCTYPE html>
<html lang="id">

<head>
    <title>5026241164</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <style>
        body {
            background-color: #fdfeff;
            font-family: 'Open Sans', sans-serif;
            color: #2d3436;
        }

        .tempat-belajar {
            padding: 60px 0;
        }

        h1.font-weight-bold {
            font-family: 'Georama', sans-serif;
            letter-spacing: 2px;
        }

        h3.font-weight-bold {
            font-family: 'Lexend', sans-serif;
        }

        .kotak-paket {
            background: #ffffff;
            border: 3px solid #a4aaaf;
            padding: 50px 25px;
            max-width: 324px;
            margin: 0 auto 30px auto;
            transition: transform 0.3s ease;
        }

        .kotak-paket:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .harga-paket {
            font-size: 1.2rem;
            color: #636e72;
            margin-bottom: 25px;
            font-family: 'Lexend', sans-serif;
        }

        .tombol-pilih {
            width: 100%;
            max-width: 180px;
            font-weight: bold;
            padding: 12px;
            border-radius: 1px;
            text-transform: uppercase;
            border: none;
            font-family: 'Lexend', sans-serif;
        }


        .abu-abu {
            background-color: #ced4da;
            color: #ffffff;
        }

        .warna-cerah {
            background-color: #ff6b6b;
            color: white;
        }

        .warna-cerah:hover {
            background-color: #fa5252;
            color: white;
        }

        .daftar-kelebihan {
            margin-top: 70px;
        }

        .teks-fitur {
            margin-bottom: 8px;
            font-size: 1rem;
            color: #687073;
            border: none;
        }
    </style>
</head>

<body>

    <section class="tempat-belajar">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-12">
                    <h1 class="font-weight-bold">PILIH PAKET BELAJAR</h1>
                    <br>
                    <p class="text-muted">Investasi cerdas untuk upgrade skill koding kamu. Pilih paket yang paling
                        sesuai dengan kebutuhan belajarmu!</p>
                    <br>
                </div>
            </div>

            <div class="row justify-content-center text-center">

                <div class="col-md-4">
                    <div class="kotak-paket h-100">
                        <h3 class="font-weight-bold">STARTER</h3>
                        <p class="harga-paket">$9/Bulan</p>
                        <br>
                        <button class="btn tombol-pilih abu-abu">PAKET AKTIF</button>

                        <div class="daftar-kelebihan">
                            <p class="teks-fitur">Akses <strong>100+ Materi</strong></p>
                            <p class="teks-fitur"><strong>Kuis</strong> Dasar & Latihan</p>
                            <p class="teks-fitur"><strong>Update</strong> Materi Mingguan</p>
                            <p class="teks-fitur"><strong>Sertifikat</strong> Digital</p>
                            <p class="teks-fitur"><strong>Penyimpanan</strong> Cloud 5GB</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="kotak-paket h-100">
                        <h3 class="font-weight-bold">PRO CREATOR</h3>
                        <p class="harga-paket">$16/Bulan</p>
                        <br>
                        <button class="btn tombol-pilih warna-cerah">UPGRADE</button>

                        <div class="daftar-kelebihan">
                            <p class="teks-fitur">Akses <strong>Semua Materi</strong></p>
                            <p class="teks-fitur"><strong>Review</strong> Kode Mentor</p>
                            <p class="teks-fitur"><strong></strong>Bebas</strong> Iklan Selamanya</p>
                            <p class="teks-fitur"><strong>Sertifikat</strong> Cetak</p>
                            <p class="teks-fitur"><strong>Penyimpanan</strong> Cloud 100GB</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="kotak-paket h-100">
                        <h3 class="font-weight-bold">TEAM MASTER</h3>
                        <p class="harga-paket">$24/Bulan</p>
                        <br>
                        <button class="btn tombol-pilih warna-cerah">UPGRADE</button>

                        <div class="daftar-kelebihan">
                            <p class="teks-fitur">Lisensi untuk <strong>5 User</strong></p>
                            <p class="teks-fitur"><strong>Akses</strong> API Privat</p>
                            <p class="teks-fitur"><strong>Dashboard</strong> Monitoring Tim</p>
                            <p class="teks-fitur"><strong>Dukungan</strong> Prioritas 24/7</p>
                            <p class="teks-fitur"><strong>Penyimpanan</strong> Cloud 1TB</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</body>

</html>
