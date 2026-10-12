
<!doctype html>
<html lang="en">
<head>
    <title>Add Teacher - LMS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f3f5ff;
            color: #202944;
            overflow-x: hidden;
        }

        /* Animated background */
        .background {
            position: fixed;
            inset: 0;
            overflow: hidden;
            z-index: -1;
            background: linear-gradient(
                135deg,
                #eff6ff 0%,
                #f5f3ff 50%,
                #ecfeff 100%
            );
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(2px);
            opacity: .55;
            animation: float 9s ease-in-out infinite;
        }

        .orb-one {
            width: 260px;
            height: 260px;
            background: linear-gradient(135deg, #93c5fd, #c4b5fd);
            top: -75px;
            left: -65px;
        }

        .orb-two {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, #a5f3fc, #c4b5fd);
            bottom: -55px;
            right: -45px;
            animation-delay: -3s;
        }

        .orb-three {
            width: 95px;
            height: 95px;
            background: #ddd6fe;
            top: 35%;
            right: 10%;
            animation-delay: -5s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0) rotate(0deg);
            }
            50% {
                transform: translateY(-25px) translateX(12px) rotate(8deg);
            }
        }

        /* Navbar */
        .topbar {
            background: rgba(17, 24, 55, .96);
            padding: 14px 35px;
            box-shadow: 0 5px 25px rgba(15, 23, 42, .13);
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            z-index: 2;
        }

        .brand {
            color: #fff;
            font-size: 25px;
            font-weight: 800;
            letter-spacing: 1px;
            text-decoration: none !important;
        }

        .brand-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            margin-right: 9px;
            border-radius: 12px;
            background: linear-gradient(135deg, #60a5fa, #a78bfa);
        }

        .topbar-right {
            color: #cbd5e1;
            font-size: 13px;
        }

        .online-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            margin-right: 6px;
            border-radius: 50%;
            background: #4ade80;
            box-shadow: 0 0 10px rgba(74, 222, 128, .7);
        }

        /* Page */
        .page-wrapper {
            max-width: 1050px;
            padding: 35px 20px 45px;
            margin: 0 auto;
        }

        .breadcrumb-custom {
            font-size: 13px;
            color: #7c89a5;
            margin-bottom: 12px;
            animation: slideDown .7s ease both;
        }

        .breadcrumb-custom a {
            color: #5b5bd6;
            text-decoration: none;
        }

        .page-heading {
            text-align: center;
            margin-bottom: 30px;
            animation: slideDown .8s ease both;
        }

        .heading-icon {
            width: 66px;
            height: 66px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            border-radius: 20px;
            color: white;
            font-size: 27px;
            background: linear-gradient(135deg, #4f46e5, #8b5cf6);
            box-shadow: 0 12px 25px rgba(99, 102, 241, .3);
            animation: iconPulse 3s ease-in-out infinite;
        }

        @keyframes iconPulse {
            0%, 100% {
                box-shadow: 0 12px 25px rgba(99, 102, 241, .25);
            }
            50% {
                box-shadow: 0 14px 32px rgba(139, 92, 246, .45);
            }
        }

        .page-heading h1 {
            color: #172554;
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 9px;
        }

        .page-heading p {
            color: #74809b;
            font-size: 14px;
            margin: 0;
        }

        /* Main card */
        .teacher-card {
            background: rgba(255, 255, 255, .94);
            border: 1px solid rgba(255, 255, 255, .9);
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 22px 65px rgba(57, 65, 120, .13);
            animation: cardEnter .85s cubic-bezier(.2, .8, .2, 1) both;
            transition: box-shadow .3s ease;
        }

        .teacher-card:hover {
            box-shadow: 0 25px 75px rgba(57, 65, 120, .18);
        }

        @keyframes cardEnter {
            from {
                opacity: 0;
                transform: translateY(35px) scale(.98);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Card header */
        .card-top {
            position: relative;
            padding: 24px 30px;
            color: white;
            background: linear-gradient(110deg, #3730a3, #6366f1, #8b5cf6);
            overflow: hidden;
        }

        .card-top::after {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            right: -35px;
            top: -95px;
            border: 25px solid rgba(255, 255, 255, .08);
            border-radius: 50%;
        }

        .card-top h5 {
            font-size: 19px;
            font-weight: 800;
            margin: 0 0 6px;
            position: relative;
            z-index: 1;
        }

        .card-top p {
            font-size: 12px;
            color: #e0e7ff;
            margin: 0;
            position: relative;
            z-index: 1;
        }

        .secure-label {
            font-size: 11px;
            color: #eef2ff;
            border: 1px solid rgba(255, 255, 255, .3);
            background: rgba(255, 255, 255, .1);
            border-radius: 20px;
            padding: 8px 12px;
            position: relative;
            z-index: 1;
        }

        /* Form */
        .form-content {
            padding: 32px;
        }

        .section-label {
            color: #4f46e5;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.4px;
            text-transform: uppercase;
            margin-bottom: 22px;
        }

        .form-group {
            margin-bottom: 23px;
        }

        .form-group label {
            display: block;
            color: #334155;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 9px;
        }

        .field-wrapper {
            position: relative;
        }

        .field-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #818cf8;
            font-size: 15px;
            pointer-events: none;
            transition: color .25s;
        }

        .form-control {
            height: 49px;
            padding: 12px 15px 12px 43px;
            background: #f8faff;
            border: 1px solid #e0e5f1;
            border-radius: 11px;
            font-size: 13px;
            color: #1e293b;
            transition: all .25s ease;
        }

        .form-control::placeholder {
            color: #a0a9bd;
        }

        .form-control:hover {
            border-color: #c7d2fe;
            background: #fff;
        }

        .form-control:focus {
            background: white;
            border-color: #818cf8;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, .11);
            outline: none;
        }

        .field-wrapper:focus-within .field-icon {
            color: #4f46e5;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            opacity: 1;
        }

        .helper-text {
            font-size: 11px;
            color: #8a94aa;
            margin-top: 7px;
            display: block;
        }

        .required-star {
            color: #ef4444;
        }

        .form-divider {
            border-top: 1px solid #edf0f7;
            margin: 7px 0 25px;
        }

        /* Buttons */
        .button-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
        }

        .btn-save {
            color: white;
            border: none;
            border-radius: 10px;
            padding: 13px 24px;
            font-size: 13px;
            font-weight: 800;
            background: linear-gradient(110deg, #4f46e5, #7c3aed);
            box-shadow: 0 7px 18px rgba(99, 102, 241, .25);
            transition: all .25s ease;
        }

        .btn-save:hover {
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 12px 24px rgba(99, 102, 241, .35);
        }

        .btn-save:active {
            transform: scale(.98);
        }

        .btn-back {
            background: #f1f5f9;
            color: #475569;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 12px 22px;
            font-size: 13px;
            font-weight: 700;
            transition: all .25s ease;
        }

        .btn-back:hover {
            background: #e2e8f0;
            color: #1e293b;
            transform: translateY(-2px);
            text-decoration: none;
        }

        .bottom-note {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 23px;
            color: #94a3b8;
            font-size: 11px;
        }

        .bottom-note i {
            color: #6366f1;
        }

        .alert {
            border-radius: 10px;
            font-size: 13px;
        }

        /* Mobile */
        @media (max-width: 767px) {
            .topbar {
                padding: 12px 18px;
            }

            .brand {
                font-size: 22px;
            }

            .topbar-right {
                font-size: 11px;
            }

            .page-wrapper {
                padding: 25px 13px 35px;
            }

            .page-heading h1 {
                font-size: 27px;
            }

            .form-content {
                padding: 23px 19px;
            }

            .card-top {
                padding: 22px 20px;
            }

            .secure-label {
                display: none;
            }

            .button-row {
                flex-direction: column;
                align-items: stretch;
            }

            .button-row .btn {
                width: 100%;
            }

            .orb-three {
                right: -35px;
            }
        }

        /* Respect reduced-motion accessibility settings */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>

<body>

<!-- Animated Background -->
<div class="background" aria-hidden="true">
    <div class="orb orb-one"></div>
    <div class="orb orb-two"></div>
    <div class="orb orb-three"></div>
</div>

<!-- Navbar -->
<nav class="topbar">
    <a href="/ims/public/admin/dashboard" class="brand">
        <span class="brand-icon">
            <i class="fas fa-graduation-cap"></i>
        </span>
        LMS
    </a>

    <div class="topbar-right">
        <span class="online-dot"></span>
        Teacher Management Portal
    </div>
</nav>

<!-- Page Content -->
<div class="page-wrapper">

    <div class="breadcrumb-custom">
        <a href="/ims/public/admin/dashboard">
            <i class="fas fa-home mr-1"></i> Dashboard
        </a>
        <span class="mx-2">/</span>
        <a href="/ims/public/admin/teachers">Teachers</a>
        <span class="mx-2">/</span>
        <strong>Add Teacher</strong>
    </div>

    <!-- Page Heading -->
    <div class="page-heading">
        <div class="heading-icon">
            <i class="fas fa-user-plus"></i>
        </div>

        <h1>Add New Teacher</h1>

        <p>
            Welcome a new educator to your team. Enter their details below.
        </p>
    </div>

    <!-- Form Card -->
    <div class="teacher-card">

        <div class="card-top">
            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <h5>
                        <i class="fas fa-id-card mr-2"></i>
                        Teacher Registration
                    </h5>

                    <p>Complete all required fields to register a teacher.</p>
                </div>

                <div class="secure-label">
                    <i class="fas fa-shield-alt mr-1"></i>
                    Secure Form
                </div>

            </div>
        </div>

        <div class="form-content">

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session('success') }}

                    <button type="button" class="close"
                            data-dismiss="alert" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <strong>
                        <i class="fas fa-exclamation-circle mr-1"></i>
                        Please correct these errors:
                    </strong>

                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="section-label">
                <i class="fas fa-user-tie mr-2"></i>
                Personal & Professional Details
            </div>

            <form action="{{ url('admin/addteacher') }}" method="POST">
                @csrf

                <div class="row">

                    <!-- Teacher Name -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Teacher Name <span class="required-star">*</span>
                            </label>

                            <div class="field-wrapper">
                                <i class="fas fa-user field-icon"></i>

                                <input type="text"
                                       id="name"
                                       name="name"
                                       class="form-control"
                                       placeholder="Enter full name"
                                       value="{{ old('name') }}"
                                       autocomplete="name"
                                       required>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">
                                Email Address <span class="required-star">*</span>
                            </label>

                            <div class="field-wrapper">
                                <i class="fas fa-envelope field-icon"></i>

                                <input type="email"
                                       id="email"
                                       name="email"
                                       class="form-control"
                                       placeholder="teacher@example.com"
                                       value="{{ old('email') }}"
                                       autocomplete="email"
                                       required>
                            </div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">
                                Password <span class="required-star">*</span>
                            </label>

                            <div class="field-wrapper">
                                <i class="fas fa-lock field-icon"></i>

                                <input type="password"
                                       id="password"
                                       name="password"
                                       class="form-control"
                                       placeholder="Create a strong password"
                                       autocomplete="new-password"
                                       minlength="8"
                                       required>
                            </div>

                            <small class="helper-text">
                                Use at least 8 characters.
                            </small>
                        </div>
                    </div>

                    <!-- Department -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="department">
                                Department <span class="required-star">*</span>
                            </label>

                            <div class="field-wrapper">
                                <i class="fas fa-building field-icon"></i>

                                <input type="text"
                                       id="department"
                                       name="department"
                                       class="form-control"
                                       placeholder="e.g. Computer Science"
                                       value="{{ old('department') }}"
                                       required>
                            </div>
                        </div>
                    </div>

                    <!-- Experience -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="experience">
                                Experience (Years)
                                <span class="required-star">*</span>
                            </label>

                            <div class="field-wrapper">
                                <i class="fas fa-briefcase field-icon"></i>

                                <input type="number"
                                       id="experience"
                                       name="experience"
                                       class="form-control"
                                       placeholder="e.g. 5"
                                       value="{{ old('experience') }}"
                                       min="0"
                                       step="1"
                                       required>
                            </div>

                            <small class="helper-text">
                                Enter 0 if the teacher is a fresher.
                            </small>
                        </div>
                    </div>

                </div>

                <div class="form-divider"></div>

                <!-- Actions -->
                <div class="button-row">

                    <button type="submit" class="btn btn-save">
                        <i class="fas fa-user-plus mr-2"></i>
                        Save Teacher
                        <i class="fas fa-arrow-right ml-2"></i>
                    </button>

                    <a href="{{ url('admin/teachers') }}"
                       class="btn btn-back">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Back to Teachers
                    </a>

                </div>

            </form>

        </div>
    </div>

    <div class="bottom-note">
        <i class="fas fa-lock"></i>
        Your registration details are submitted securely to the LMS server.
    </div>

</div>

<!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
