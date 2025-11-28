<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niwy Technology - Site en Construction</title>
    <link href="https://fonts.googleapis.com/css2?family=Product+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #1a1a2e 100%);
            font-family: "Product Sans", sans-serif;
            overflow-x: hidden;
        }

        body {
            display: flex;
            align-items: flex-start;
            /* IMPORTANT: commence en haut */
            justify-content: center;
        }

        /* Animation de particules en arrière-plan */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .particle {
            position: absolute;
            border-radius: 50%;
            animation: float 20s infinite;
        }

        .particle:nth-child(1) {
            width: 80px;
            height: 80px;
            background: rgba(94, 181, 255, 0.1);
            top: 10%;
            left: 20%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 60px;
            height: 60px;
            background: rgba(184, 107, 255, 0.1);
            top: 70%;
            left: 80%;
            animation-delay: 2s;
        }

        .particle:nth-child(3) {
            width: 100px;
            height: 100px;
            background: rgba(255, 107, 241, 0.1);
            top: 40%;
            left: 10%;
            animation-delay: 4s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-30px) rotate(180deg);
            }
        }

        .container {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 20px;
            max-width: 900px;
            width: 100%;
        }

        .logo-container {
            margin-bottom: 30px;
            animation: fadeInDown 1s ease-out;
        }

        .logo-container img {
            max-width: 300px;
            width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 30px rgba(94, 181, 255, 0.3));
        }

        h1 {
            color: #fff;
            font-size: 3em;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #5eb5ff, #b86bff, #ff6bf1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        .construction-text {
            color: #a8b2d1;
            font-size: 1.5em;
            margin-bottom: 15px;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        .description {
            color: #8892b0;
            font-size: 1.1em;
            margin-bottom: 40px;
            line-height: 1.6;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 50px;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease-out 0.8s both;
        }

        .countdown-item {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px 30px;
            min-width: 100px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .countdown-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(94, 181, 255, 0.3);
        }

        .countdown-number {
            font-size: 2.5em;
            font-weight: 700;
            background: linear-gradient(135deg, #5eb5ff, #ff6bf1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .countdown-label {
            color: #a8b2d1;
            font-size: 0.9em;
            text-transform: uppercase;
            margin-top: 5px;
        }

        .contact-section {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 40px;
            animation: fadeInUp 1s ease-out 1s both;
        }

        .contact-title {
            color: #fff;
            font-size: 2em;
            margin-bottom: 30px;
            background: linear-gradient(90deg, #5eb5ff, #b86bff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .contact-item {
            background: rgba(255, 255, 255, 0.03);
            padding: 20px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-5px);
            border-color: rgba(94, 181, 255, 0.5);
        }

        .contact-item i {
            font-size: 2em;
            margin-bottom: 15px;
            background: linear-gradient(135deg, #5eb5ff, #ff6bf1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .contact-item a {
            color: #a8b2d1;
            text-decoration: none;
            font-size: 1.1em;
            transition: color 0.3s ease;
        }

        .contact-item a:hover {
            color: #5eb5ff;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .social-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a8b2d1;
            font-size: 1.3em;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-icon:hover {
            background: linear-gradient(135deg, #5eb5ff, #ff6bf1);
            color: #fff;
            transform: translateY(-5px) rotate(360deg);
            box-shadow: 0 10px 30px rgba(94, 181, 255, 0.5);
        }

        .progress-bar {
            width: 100%;
            height: 6px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #5eb5ff, #b86bff, #ff6bf1);
            animation: progress 3s ease-out infinite;
        }

        @keyframes progress {
            0% {
                width: 0%;
            }

            100% {
                width: 75%;
            }
        }

        footer {
            color: #8892b0;
            margin-top: 40px;
            font-size: 0.9em;
            animation: fadeIn 1s ease-out 1.2s both;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2em;
            }

            .construction-text {
                font-size: 1.2em;
            }

            .countdown-item {
                padding: 15px 20px;
            }

            .countdown-number {
                font-size: 2em;
            }

            .contact-section {
                padding: 30px 20px;
            }

        }

        .logo-container img {
            max-width: 200px;
            border-radius: 12px;
            box-shadow: 0px 0px 2px teal;
        }
    </style>
</head>

<body>
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="container">
        <div class="logo-container">
            <!-- Remplacez le src par le chemin vers votre logo -->
            <img src="logo.jpeg" alt="Niwy Technology Logo" class="logo">
        </div>

        <h1>Niwy TECHNOLOGY</h1>
        <p class="construction-text">🚀 Site en Construction</p>
        <p class="description">
            Nous travaillons dur pour vous offrir une expérience exceptionnelle.
            Notre nouveau site sera bientôt en ligne avec des solutions technologiques innovantes.
        </p>

        <div class="countdown">
            <div class="countdown-item">
                <div class="countdown-number" id="days">00</div>
                <div class="countdown-label">Jours</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="hours">00</div>
                <div class="countdown-label">Heures</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="minutes">00</div>
                <div class="countdown-label">Minutes</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="seconds">00</div>
                <div class="countdown-label">Secondes</div>
            </div>
        </div>

        <div class="contact-section">
            <h2 class="contact-title">Contactez-nous</h2>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <a href="mailto:elconstant73@gmail.com">elconstant73@gmail.com</a>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <a href="tel:+243896524395">+243 896 524 395</a>
                    </div>
                </div>
            </div>

            <div class="social-links">
                <a href="#" class="social-icon" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="social-icon" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-icon" title="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>

            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> Niwy Technology. Tous droits réservés.</p>
            <p style="margin-top: 10px; font-style: italic;">Progress with us</p>
        </footer>
    </div>

    <script>
        // Compte à rebours
        function updateCountdown() {
            const launchDate = new Date('2026-01-15T00:00:00').getTime();
            const now = new Date().getTime();
            const distance = launchDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('days').textContent = String(days).padStart(2, '0');
            document.getElementById('hours').textContent = String(hours).padStart(2, '0');
            document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
            document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
        }

        setInterval(updateCountdown, 1000);
        updateCountdown();
    </script>
</body>

</html>