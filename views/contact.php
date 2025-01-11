<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --spotify-green: #1DB954;
            --spotify-black: #121212;
            --spotify-dark-gray: #282828;
            --spotify-light-gray: #B3B3B3;
            --spotify-white: #FFFFFF;
            --nav-height: 64px;
            --transition-speed: 0.3s;
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
            line-height: 1.5;
        }

        .container {
            min-height: 100vh;
            padding: 2rem 8%;
            background: linear-gradient(180deg, #3C1D51 0%, var(--spotify-black) 25%);
        }

        .contact-wrapper {
            max-width: 1200px;
            margin: 4rem auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .contact-info {
            padding: 2rem;
        }

        .contact-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, var(--spotify-white), var(--spotify-green));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .contact-description {
            color: var(--spotify-light-gray);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .contact-items {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .contact-item {
            display: flex;
            align-items: center; /* Ikon dan teks sejajar secara vertikal */
            gap: 1rem; /* Jarak antara ikon dan teks */
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            transition: all var(--transition-speed) ease;
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(10px);
        }

        .contact-item i {
            font-size: 1.5rem;
            color: var(--spotify-green);
        }

        .contact-item div {
            display: flex;
            flex-direction: column; /* Susunan teks vertikal */
            justify-content: center; /* Teks berada di tengah secara vertikal */
            text-align: left; /* Teks tetap rata kiri */
        }

        .contact-item h3 {
            margin: 0;
            font-size: 1.2rem;
        }

        .contact-item p {
            margin: 0;
            font-size: 1rem;
            color: var(--spotify-light-gray);
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(10px);
        }

        .contact-item i {
            font-size: 1.5rem;
            color: var(--spotify-green);
        }

        .contact-form {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 16px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--spotify-light-gray);
            font-weight: 500;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: var(--spotify-white);
            font-family: 'Poppins', sans-serif;
            transition: all var(--transition-speed) ease;
        }

        .form-textarea {
            min-height: 150px;
            resize: vertical;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--spotify-green);
            background: rgba(255, 255, 255, 0.08);
        }

        .submit-button {
            background: var(--spotify-green);
            color: var(--spotify-black);
            padding: 1rem 2rem;
            border: none;
            border-radius: 500px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: all var(--transition-speed) ease;
        }

        .submit-button:hover {
            background: #1ed760;
            transform: scale(1.02);
        }

        /* Social Media Links */
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all var(--transition-speed) ease;
        }

        .social-link:hover {
            background: var(--spotify-green);
            transform: translateY(-5px);
        }

        .social-link i {
            color: var(--spotify-white);
            font-size: 1.2rem;
        }

        @media (max-width: 992px) {
            .contact-wrapper {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem 4%;
            }

            .contact-title {
                font-size: 2rem;
            }

            .contact-wrapper {
                margin: 2rem auto;
                padding: 1rem;
            }

            .contact-info,
            .contact-form {
                padding: 1rem;
            }
        }
    </style>
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info">
                <h1 class="contact-title">Hubungi Kami</h1>
                <p class="contact-description">Ada pertanyaan atau saran? Jangan ragu untuk menghubungi kami. Kami siap membantu Anda mengeksplorasi kuliner nusantara.</p>

                <div class="contact-items">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Lokasi</h3>
                            <p>Jl. Kuliner Nusantara No. 123, Cikarang</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Telepon</h3>
                            <p>+62 812-9869-2950</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>faiz.maulana1405@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="contact-form">
                <form action="process.php" method="POST">
                    <div class="form-group">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-input" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-input" name="email" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Subjek</label>
                        <input type="text" class="form-input" name="subjek" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Pesan</label>
                        <textarea class="form-textarea" name="pesan" required></textarea>
                    </div>

                    <button type="submit" class="submit-button">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>