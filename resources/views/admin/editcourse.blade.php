
<!doctype html>
<html lang="en">
<head>
    <title>Edit Course - LMS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
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

        /* Animated Background */
        .background {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: -1;
            background: linear-gradient(135deg, #eff6ff, #f5f3ff, #ecfeff);
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            opacity: .45;
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
            width: 210px;
            height: 210px;
            background: linear-gradient(135deg, #a5f3fc, #c4b5fd);
            bottom: -65px;
            right: -45px;
            animation-delay: -3s;
        }

        .orb-three {
            width: 95px;
            height: 95px;
            background: #ddd6fe;
            top: 38%;
            right: 10%;
            animation-delay: -5s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            50% {
                transform: translate(12px, -25px) rotate(8deg);
            }
        }

        /* Navbar */
        .topbar {
            background: linear-gradient(110deg, #172554, #4338ca, #6366f1);
            padding: 13px 28px;
            box-shadow: 0 5px 20px rgba(15, 23, 42, .16);
            position: relative;
            z-index: 2;
        }

        .navbar-brand {
            color: white !important;
            font-size: 25px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .brand-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 12px;
            margin-right: 8px;
            background: rgba(255, 255, 255, .17);
        }

        .topbar .nav-link {
            color: #e0e7ff !important;
            font-size: 13px;
            margin-left: 12px;
            transition: .25s;
        }

        .topbar .nav-link:hover {
            color: white !important;
            transform: translateY(-2px);
        }

        /* Sidebar */
        .sidebar {
            min-height: calc(100vh - 66px);
            background: #111827;
            padding: 0;
        }

        .sidebar-heading {
            padding: 27px 12px;
            text-align: center;
            border-bottom: 1px solid #293449;
        }

        .sidebar-heading h5 {
            color: white;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .sidebar-heading small {
            color: #94a3b8;
        }

        .menu-label {
            padding: 23px 21px 9px;
            color: #64748b;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
        }

        .sidebar .list-group-item {
            background: transparent;
            border: none;
            color: #cbd5e1;
            padding: 14px 21px;
            font-size: 13px;
            transition: all .25s ease;
        }

        .sidebar .list-group-item i {
            width: 27px;
            font-size: 15px;
        }

        .sidebar .list-group-item:hover,
        .sidebar .list-group-item.active-menu {
            background: #4338ca;
            color: white;
            padding-left: 28px;
            text-decoration: none;
        }

        .sidebar .logout-link {
            color: #fca5a5;
        }

        .sidebar .logout-link:hover {
            background: #991b1b;
            color: white;
        }

        /* Main content */
        .main-content {
            padding: 32px;
            animation: pageEnter .75s ease both;
        }

        @keyframes pageEnter {
            from {
                opacity: 0;
                transform: translateY(18px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .breadcrumb-text {
            font-size: 13px;
            color: #7c89a5;
            margin-bottom: 12px;
        }

        .breadcrumb-text a {
            color: #5b5bd6;
            text-decoration: none;
        }

        .page-heading {
            margin-bottom: 28px;
        }

        .page-heading h1 {
            color: #172554;
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .page-heading p {
            color: #74809b;
            font-size: 14px;
            margin: 0;
        }

        /* Edit card */
        .course-card {
            background: rgba(255, 255, 255, .95);
            border: 1px solid rgba(255, 255, 255, .9);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 22px 60px rgba(57, 65, 120, .12);
            animation: cardEnter .85s cubic-bezier(.2, .8, .2, 1) both;
            transition: box-shadow .3s ease;
        }

        .course-card:hover {
            box-shadow: 0 25px 70px rgba(57, 65, 120, .17);
        }

        @keyframes cardEnter {
            from {
                opacity: 0;
                transform: translateY(30px) scale(.985);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Card header */
        .card-top {
            position: relative;
            padding: 25px 30px;
            color: white;
            background: linear-gradient(110deg, #3730a3, #6366f1, #8b5cf6);
            overflow: hidden;
        }

        .card-top::after {
            content: "";
            position: absolute;
            width: 175px;
            height: 175px;
            right: -35px;
            top: -95px;
            border: 25px solid rgba(255, 255, 255, .08);
            border-radius: 50%;
        }

        .card-top h5 {
            font-size: 19px;
            font-weight: 800;
            margin-bottom: 6px;
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

        .header-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 47px;
            height: 47px;
            background: rgba(255, 255, 255, .15);
            border: 1px solid rgba(255, 255, 255, .2);
            border-radius: 13px;
            font-size: 21px;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .mode-label {
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
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            color: #334155;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .required-star {
            color: #ef4444;
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
            height: 50px;
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
            background: white;
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

        .helper-text {
            display: block;
            font-size: 11px;
            color: #8a94aa;
            margin-top: 8px;
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

        .btn-update {
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

        .btn-update:hover {
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 12px 24px rgba(99, 102, 241, .35);
        }

        .btn-update:active {
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

        .footer-text {
            text-align: center;
            color: #94a3b8;
            font-size: 12px;
            margin-top: 28px;
        }

        /* Responsive */
        @media (max-width: 767px) {
            .sidebar {
                min-height: auto;
            }

            .topbar {
                padding: 12px 17px;
            }

            .main-content {
                padding: 22px 14px;
            }

            .page-heading h1 {
                font-size: 25px;
            }

            .form-content {
                padding: 23px 19px;
            }

            .card-top {
                padding: 22px 20px;
            }

            .mode-label {
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

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
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
<nav class="navbar navbar-expand-lg navbar-dark topbar">

    <a class="navbar-brand" href="/ims/public/admin/dashboard">
        <span class="brand-icon">
            <i class="fas fa-graduation-cap"></i>
        </span>
        LMS
    </a>

    <button class="navbar-toggler" type="button"
            data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="/ims/public/admin/dashboard">
                    <i class="fas fa-home mr-1"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-warning" href="#">
                    <i class="fas fa-sign-out-alt mr-1"></i> Logout
                </a>
            </li>

        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <aside class="col-md-2 sidebar">

            <div class="sidebar-heading">
                <h5><i class="fas fa-layer-group mr-2"></i>LMS Menu</h5>
                <small>Management System</small>
            </div>

            <div class="menu-label">MAIN MENU</div>

            <div class="list-group list-group-flush">

                <a href="/ims/public/admin/dashboard" class="list-group-item">
                    <i class="fas fa-th-large"></i> Dashboard
                </a>

                <a href="/ims/public/admin/students" class="list-group-item">
                    <i class="fas fa-user-graduate"></i> Students
                </a>

                <a href="/ims/public/admin/teachers" class="list-group-item">
                    <i class="fas fa-chalkboard-teacher"></i> Teachers
                </a>

                <a href="/ims/public/admin/courses"
                   class="list-group-item active-menu">
                    <i class="fas fa-book-open"></i> Courses
                </a>

                <a href="#" class="list-group-item">
                    <i class="fas fa-file-alt"></i> Exams
                </a>

                <a href="#" class="list-group-item">
                    <i class="fas fa-chart-bar"></i> Results
                </a>

                <a href="#" class="list-group-item">
                    <i class="fas fa-cog"></i> Settings
                </a>

                <div class="menu-label">ACCOUNT</div>

                <a href="#" class="list-group-item logout-link">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>

            </div>
        </aside>

        <!-- Main Content -->
        <main class="col-md-10 main-content">

            <div class="breadcrumb-text">
                <a href="/ims/public/admin/dashboard">
                    <i class="fas fa-home mr-1"></i> Dashboard
                </a>
                <span class="mx-2">/</span>
                <a href="/ims/public/admin/courses">Courses</a>
                <span class="mx-2">/</span>
                <strong>Edit Course</strong>
            </div>

            <div class="page-heading">
                <h1>
                    <i class="fas fa-edit mr-2" style="color:#6366f1;"></i>
                    Edit Course
                </h1>

                <p>
                    Update course information, fees, and duration.
                </p>
            </div>

            <!-- Edit Course Card -->
            <div class="course-card">

                <div class="card-top">
                    <div class="d-flex justify-content-between align-items-center">

                        <div class="d-flex align-items-center">
                            <div class="header-icon">
                                <i class="fas fa-book-open"></i>
                            </div>

                            <div>
                                <h5>Course Information</h5>
                                <p>Modify the details and save your changes.</p>
                            </div>
                        </div>

                        <div class="mode-label">
                            <i class="fas fa-pen mr-1"></i>
                            Edit Mode
                        </div>

                    </div>
                </div>

                <div class="form-content">

                    @if(session('message'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <i class="fas fa-check-circle mr-2"></i>
                            {{ session('message') }}

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
                                Please correct the following errors:
                            </strong>

                            <ul class="mb-0 mt-2">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="section-label">
                        <i class="fas fa-info-circle mr-2"></i>
                        Course Details
                    </div>

                    <form action="{{ url('/admin/updatecourse/'.$course->id) }}"
                          method="POST">

                        @csrf

                        <div class="row">

                            <!-- Course Name -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">
                                        Course Name
                                        <span class="required-star">*</span>
                                    </label>

                                    <div class="field-wrapper">
                                        <i class="fas fa-book field-icon"></i>

                                        <input type="text"
                                               id="name"
                                               name="name"
                                               class="form-control"
                                               placeholder="Enter course name"
                                               value="{{ old('name', $course->name) }}"
                                               required>
                                    </div>

                                    <small class="helper-text">
                                        Enter the complete course name.
                                    </small>
                                </div>
                            </div>

                            <!-- Course Fee -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fee">
                                        Course Fee (₹)
                                        <span class="required-star">*</span>
                                    </label>

                                    <div class="field-wrapper">
                                        <i class="fas fa-rupee-sign field-icon"></i>

                                        <input type="number"
                                               id="fee"
                                               name="fee"
                                               class="form-control"
                                               placeholder="Enter course fee"
                                               value="{{ old('fee', $course->fee) }}"
                                               min="0"
                                               step="0.01"
                                               required>
                                    </div>

                                    <small class="helper-text">
                                        Enter the fee in Indian rupees.
                                    </small>
                                </div>
                            </div>

                            <!-- Duration -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="duration">
                                        Course Duration
                                        <span class="required-star">*</span>
                                    </label>

                                    <div class="field-wrapper">
                                        <i class="fas fa-clock field-icon"></i>

                                        <input type="text"
                                               id="duration"
                                               name="duration"
                                               class="form-control"
                                               placeholder="Example: 6 Months"
                                               value="{{ old('duration', $course->duration) }}"
                                               required>
                                    </div>

                                    <small class="helper-text">
                                        Example: 6 Months, 1 Year, or 12 Weeks.
                                    </small>
                                </div>
                            </div>

                        </div>

                        <div class="form-divider"></div>

                        <!-- Buttons -->
                        <div class="button-row">

                            <button type="submit" class="btn btn-update">
                                <i class="fas fa-save mr-2"></i>
                                Update Course
                                <i class="fas fa-arrow-right ml-2"></i>
                            </button>

                            <a href="/ims/public/admin/courses" class="btn btn-back">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Back to Courses
                            </a>

                        </div>

                    </form>

                </div>
            </div>

            <div class="bottom-note">
                <i class="fas fa-lightbulb"></i>
                Review the updated fee and duration before saving.
            </div>

            <div class="footer-text">
                &copy; {{ date('Y') }} LMS Admin Panel. All rights reserved.
            </div>

        </main>
    </div>
</div>

<!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>