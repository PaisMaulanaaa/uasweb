<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Kuliner Tradisional</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --spotify-green: #1DB954;
            --spotify-black: #121212;
            --spotify-dark-gray: #282828;
            --spotify-light-gray: #B3B3B3;
            --spotify-white: #FFFFFF;
            --transition-speed: 0.3s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--spotify-black);
            color: var(--spotify-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: var(--spotify-black);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--spotify-dark-gray);
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #3E3E3E;
        }

        .container {
            padding: 2rem 8%;
            margin-top: 2rem;
            min-height: 100vh;
            background: linear-gradient(180deg, #3C1D51 0%, var(--spotify-black) 25%);
        }

        .page-header {
            text-align: center;
            margin-bottom: 4rem;
            padding: 2.5rem;
            border-radius: 16px;
            background: linear-gradient(135deg, rgba(60, 29, 81, 0.8) 0%, rgba(18, 18, 18, 0.4) 100%);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .page-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(to right, var(--spotify-white), var(--spotify-green));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            animation: titleGlow 3s ease-in-out infinite;
        }

        @keyframes titleGlow {

            0%,
            100% {
                filter: brightness(100%);
            }

            50% {
                filter: brightness(120%);
            }
        }

        .content-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-bottom: 4rem;
        }

        .about-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            padding: 2rem;
            transition: all var(--transition-speed) ease;
            position: relative;
            overflow: hidden;
        }

        .about-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(29, 185, 84, 0.1), transparent);
            opacity: 0;
            transition: opacity var(--transition-speed) ease;
        }

        .about-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .about-card:hover::before {
            opacity: 1;
        }

        .about-title {
            font-size: 1.5rem;
            color: var(--spotify-green);
            margin-bottom: 1rem;
            position: relative;
        }

        .about-text {
            color: var(--spotify-light-gray);
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .highlight {
            color: var(--spotify-white);
            font-weight: 500;
        }

        .feature-list {
            list-style: none;
            margin-top: 1.5rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            color: var(--spotify-light-gray);
        }

        .feature-item::before {
            content: '•';
            color: var(--spotify-green);
            font-size: 1.5rem;
            margin-right: 0.5rem;
        }

        .team-section {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            margin-top: 3rem;
        }

        .team-title {
            color: var(--spotify-green);
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .team-member {
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            transition: transform var(--transition-speed) ease;
        }

        .team-member:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.05);
        }

        .member-name {
            color: var(--spotify-white);
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .member-role {
            color: var(--spotify-green);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .social-link {
            color: var(--spotify-light-gray);
            text-decoration: none;
            transition: color var(--transition-speed) ease;
        }

        .social-link:hover {
            color: var(--spotify-green);
        }

        @media (max-width: 768px) {
            .container {
                padding: 1.5rem 4%;
            }

            .page-header {
                padding: 2rem;
            }

            .page-title {
                font-size: 2.5rem;
            }

            .content-section {
                grid-template-columns: 1fr;
            }

            .team-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1rem 3%;
            }

            .page-title {
                font-size: 2rem;
            }

            .about-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">About Us</h1>
            <p class="about-text">Menjelajahi Kekayaan Kuliner Tradisional Indonesia</p>
        </div>

        <div class="content-section">
            <div class="about-card">
                <h2 class="about-title">Visi Kami</h2>
                <p class="about-text">
                    Menjadi platform terdepan dalam melestarikan dan memperkenalkan kekayaan kuliner tradisional Indonesia kepada generasi muda dan dunia.
                </p>
                <p class="about-text highlight">
                    Kami berkomitmen untuk mendokumentasikan dan membagikan warisan kuliner nusantara yang tak ternilai.
                </p>
            </div>

            <div class="about-card">
                <h2 class="about-title">Misi Kami</h2>
                <ul class="feature-list">
                    <li class="feature-item">Mendokumentasikan resep makanan dan minuman tradisional</li>
                    <li class="feature-item">Memperkenalkan keanekaragaman kuliner daerah</li>
                    <li class="feature-item">Mendukung pelestarian warisan kuliner Indonesia</li>
                    <li class="feature-item">Mengedukasi masyarakat tentang nilai budaya kuliner</li>
                </ul>
            </div>
        </div>

        <div class="team-section">
            <h2 class="team-title">Tim Kami</h2>
            <div class="team-grid">
                <div class="team-member">
                    <h3 class="member-name">Faiz Maulana</h3>
                    <p class="member-role">Mahasiswa UPB</p>
                    <div class="social-links">
                        <a href="#" class="social-link">Github</a>
                        <a href="#" class="social-link">Instagram</a>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>