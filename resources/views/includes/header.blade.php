<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lMS5 - Learning Management System</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap (only once) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
        }

        /* ===== NAVBAR ===== */
        .navbar {
            background: #0d6efd;
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            color: #fff;
            text-decoration: none;
        }

        .logo-icon {
            background: #fff;
            color: #0d6efd;
            padding: 6px 10px;
            border-radius: 6px;
            margin-right: 8px;
            font-weight: 700;
        }

        .nav-links {
            display: flex;
            gap: 15px;
            list-style: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
        }

        /* ===== HERO ===== */
        .hero {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            text-align: center;
            padding: 80px 20px;
        }

        .hero span {
            color: #ffd700;
        }

        /* ===== STATS ===== */
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px,1fr));
            gap: 20px;
            padding: 40px;
        }

        .stat-card {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
        }

        /* ===== FEATURES ===== */
        .section {
            padding: 50px 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
            gap: 20px;
        }

        .feature-card {
            padding: 20px;
            border: 1px solid #eee;
            border-radius: 10px;
        }

        /* ===== NOTICES ===== */
        .notices-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px,1fr));
            gap: 20px;
        }

        .notice-panel {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
        }

        /* ===== CTA ===== */
        .cta {
            background: #0d6efd;
            color: white;
            text-align: center;
            padding: 50px 20px;
        }

        /* ===== FOOTER ===== */
        .footer {
            background: #111;
            color: #ccc;
            padding: 50px 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px,1fr));
            gap: 30px;
        }

        .footer h3 {
            color: #fff;
            margin-bottom: 15px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer ul li {
            margin-bottom: 10px;
        }

        .footer a {
            color: #ccc;
            text-decoration: none;
        }

        .footer a:hover {
            color: #fff;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 30px;
            border-top: 1px solid #333;
            padding-top: 15px;
        }

        /* MOBILE */
        .hamburger {
            display: none;
            flex-direction: column;
            border: none;
            background: none;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: white;
            margin: 4px;
        }

        @media (max-width: 768px) {
            .hamburger { display: flex; }

            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                right: 0;
                top: 60px;
                background: #0d6efd;
                padding: 15px;
            }

            .nav-links.active {
                display: flex;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">
                <div class="logo-icon">LMS5</div>
                <span class="logo-text">Learning MS</span>
            </a>

            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="/register" class="btn btn-secondary">Register</a></li>
                <li><a href="/login" class="btn btn-primary">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Sample Content -->
    <div class="container mt-5">
        <h1>Welcome to LMS5</h1>
        <p>This is your Learning Management System homepage.</p>
    </div>

    <!-- JS -->
    <script>
        document.querySelector('.hamburger').addEventListener('click', function () {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>

