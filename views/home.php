<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Circular:wght@400;500;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --spotify-green: #1DB954;
            --spotify-black: #121212;
            --spotify-dark-gray: #282828;
            --spotify-light-gray: #B3B3B3;
            --spotify-white: #FFFFFF;
            --nav-height: 64px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--spotify-black);
            color: var(--spotify-white);
            overflow-x: hidden;
        }

        nav {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.6) 90%, transparent 100%);
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: var(--nav-height);
            transition: background-color 0.3s ease;
        }

        nav:hover {
            background-color: rgba(0, 0, 0, 0.95);
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-brand {
            color: var(--spotify-green);
            font-weight: 700;
            font-size: 1.5rem;
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--spotify-light-gray);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--spotify-white);
            transform: scale(1.05);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: var(--spotify-green);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .featured-hero {
            padding-top: var(--nav-height);
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .featured-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('assets/img/background.jpg'); /* Ganti dengan path gambar background Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 5.0;
            filter: blur(4px);
            z-index: 1;
        }

        .featured-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(60, 29, 81, 0.8), rgba(18, 18, 18, 0.9));
            z-index: 1;
        }

        .featured-content {
            padding: 4rem 8%;
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .featured-title {
            font-size: 5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, var(--spotify-white) 60%, var(--spotify-green));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: -2px;
            line-height: 1.1;
        }

        .featured-description {
            font-size: 1.4rem;
            color: var(--spotify-light-gray);
            margin-bottom: 2.5rem;
            max-width: 600px;
            line-height: 1.6;
        }

        .featured-buttons {
            display: flex;
            gap: 1.5rem;
        }

        .btn {
            padding: 1rem 2.5rem;
            border-radius: 500px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary {
            background: var(--spotify-green);
            color: var(--spotify-black);
        }

        .btn-primary:hover {
            background: #1ed760;
            transform: scale(1.05);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: var(--spotify-white);
            border: 1px solid var(--spotify-white);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }

        .content-row {
            padding: 3rem 8%;
            margin-bottom: 2rem;
            background: linear-gradient(to bottom, transparent, var(--spotify-black) 50%);
        }

        .row-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .row-header h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--spotify-white);
            letter-spacing: -0.5px;
        }

        .see-all {
            color: var(--spotify-light-gray);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .see-all:hover {
            color: var(--spotify-green);
            letter-spacing: 1.5px;
        }

        .content-slider {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 2rem;
            padding: 1rem 0;
        }

        .content-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 1.2rem;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
        }

        .content-card:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-8px);
        }

        .card-image {
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 1.2rem;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .card-content h3 {
            font-size: 1.1rem;
            margin-bottom: 0.8rem;
            color: var(--spotify-white);
            font-weight: 600;
        }

        .card-tags {
            display: flex;
            gap: 0.8rem;
        }

        .tag {
            font-size: 0.8rem;
            color: var(--spotify-light-gray);
            background: rgba(255, 255, 255, 0.1);
            padding: 4px 12px;
            border-radius: 100px;
            transition: all 0.3s ease;
        }

        .content-card:hover .tag {
            background: var(--spotify-green);
            color: var(--spotify-black);
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .featured-title {
                font-size: 3.5rem;
            }

            .featured-description {
                font-size: 1.2rem;
            }

            .content-slider {
                grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
                gap: 1rem;
            }

            .featured-content {
                padding: 2rem 4%;
            }
        }
    </style>
</head>

<body>
    <div class="featured-hero">
        <div class="featured-content">
            <h1 class="featured-title">KULINER NUSANTARA</h1>
            <p class="featured-description">Temukan cita rasa autentik Indonesia melalui koleksi makanan dan minuman tradisional yang menggugah selera, menjelajahi keragaman budaya dari barat ke timur nusantara.</p>
            <div class="featured-buttons">
                <button class="btn btn-primary">Jelajahi</button>
                <button class="btn btn-secondary">Info Lebih Lanjut</button>
            </div>
        </div>
    </div>

    <section class="content-row">
        <div class="row-header">
            <h2>Hidangan Tradisional</h2>
            <a href="?page=makanan" class="see-all">LIHAT SEMUA</a>
        </div>
        <div class="content-slider">
            <?php
            $queryMakanan = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC LIMIT 6";
            $resultMakanan = mysqli_query($conn, $queryMakanan);

            if (mysqli_num_rows($resultMakanan) > 0) {
                $counter = 1;
                while ($makanan = mysqli_fetch_assoc($resultMakanan)) {
            ?>
                    <div class="content-card">
                        <img src="images/makanan/<?= $counter; ?>.jpg" alt="<?= htmlspecialchars($makanan['nama_makanan']); ?>" class="card-image">
                        <div class="card-content">
                            <h3><?= htmlspecialchars($makanan['nama_makanan']); ?></h3>
                            <div class="card-tags">
                                <span class="tag"><?= htmlspecialchars($makanan['daerah_makanan']); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                    $counter++;
                }
            }
            ?>
        </div>
    </section>

    <section class="content-row">
        <div class="row-header">
            <h2>Minuman Tradisional</h2>
            <a href="?page=minuman" class="see-all">LIHAT SEMUA</a>
        </div>
        <div class="content-slider">
            <?php
            $queryMinuman = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC LIMIT 6";
            $resultMinuman = mysqli_query($conn, $queryMinuman);

            if (mysqli_num_rows($resultMinuman) > 0) {
                $counter = 1;
                while ($minuman = mysqli_fetch_assoc($resultMinuman)) {
            ?>
                    <div class="content-card">
                        <img src="images/minuman/<?= $counter; ?>.jpg" alt="<?= htmlspecialchars($minuman['nama_minuman']); ?>" class="card-image">
                        <div class="card-content">
                            <h3><?= htmlspecialchars($minuman['nama_minuman']); ?></h3>
                            <div class="card-tags">
                                <span class="tag"><?= htmlspecialchars($minuman['daerah_minuman']); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                    $counter++;
                }
            }
            ?>
        </div>
    </section>
</body>

</html>