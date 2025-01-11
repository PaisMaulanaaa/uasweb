<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan | Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --spotify-green: #1DB954;
            --spotify-black: #121212;
            --spotify-dark-gray: #282828;
            --spotify-light-gray: #B3B3B3;
            --spotify-white: #FFFFFF;
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(to bottom, #3C1D51, var(--spotify-black));
        }

        /* Navbar Styles */
        nav {
            background: rgba(0, 0, 0, 0.3);
            padding: 1rem 0;
            backdrop-filter: blur(10px);
            margin-bottom: 2rem;
        }

        .nav-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--spotify-light-gray);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 4px;
        }

        .nav-links a:hover {
            color: var(--spotify-white);
            background: rgba(255, 255, 255, 0.1);
        }

        /* Error Content Styles */
        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .error-container {
            max-width: 800px;
            background: rgba(255, 255, 255, 0.05);
            padding: 3rem;
            border-radius: 8px;
            backdrop-filter: blur(10px);
            text-align: center;
        }

        .error-code {
            font-size: 8rem;
            font-weight: 700;
            background: linear-gradient(to right, var(--spotify-green), #4CAF50);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1;
            margin-bottom: 1rem;
        }

        .error-title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .error-message {
            font-size: 1.2rem;
            color: var(--spotify-light-gray);
            margin-bottom: 2.5rem;
            line-height: 1.6;
        }

        .error-icon {
            width: 120px;
            height: 120px;
            margin: 2rem auto;
            background: var(--spotify-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: var(--spotify-green);
            color: var(--spotify-black);
            text-decoration: none;
            border-radius: 500px;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn:hover {
            background: #1ed760;
            transform: scale(1.05);
        }

        .error-footer {
            margin-top: 3rem;
            color: var(--spotify-light-gray);
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .error-code {
                font-size: 6rem;
            }

            .error-title {
                font-size: 2rem;
            }

            .error-message {
                font-size: 1rem;
            }

            .error-container {
                padding: 2rem;
                margin: 1rem;
            }

            .nav-links {
                flex-direction: column;
                gap: 1rem;
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <?php require "includes/navbar.php" ?>
    
    <div class="main-content">
        <div class="error-container">
            <div class="error-code">404</div>
            <h1 class="error-title">Menu Tidak Ditemukan</h1>
            <p class="error-message">
                Waduh! Sepertinya menu yang Anda cari belum ada di daftar makanan dan minuman web kami.
                Yuk kembali ke halaman utama untuk melihat-lihat menu lainnya!
            </p>
            <div class="error-icon">🍽️</div>
            <a href="index.php" class="btn">Kembali ke Menu</a>
            <div class="error-footer">
                © <?php echo date('Y'); ?> Kuliner Nusantara. All rights reserved.
            </div>
        </div>
    </div>
</body>

</html>