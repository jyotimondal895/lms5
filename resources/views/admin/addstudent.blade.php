
<!doctype html>
<html lang="en">
<head>
    <title>LMS - Add Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f4f7fc;
            color: #253047;
            overflow-x: hidden;
        }

        /* Top Navbar */
        .topbar {
            height: 72px;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            box-shadow: 0 3px 18px rgba(24, 39, 75, 0.05);
            position: relative;
            z-index: 2;
        }

        .brand {
            font-size: 25px;
            font-weight: 700;
            color: #246bfd;
            text-decoration: none !important;
        }

        .brand i {
            margin-right: 8px;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 13px;
            font-weight: 600;
        }

        .admin-avatar {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: #e8efff;
            color: #246bfd;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
        }

        /* Sidebar */
        .sidebar {
            background: #17243d;
            min-height: calc(100vh - 72px);
            padding: 25px 15px;
        }

        .sidebar-label {
            color: #8593ad;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 2px;
            padding: 10px 15px;
            text-transform: uppercase;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 13px;
            color: #aab6cc;
            padding: 14px 16px;
            margin: 5px 0;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 500;
            text-decoration: none !important;
            transition: .25s;
        }

        .menu-link i {
            width: 20px;
            font-size: 16px;
            text-align: center;
        }

        .menu-link:hover,
        .menu-link.active {
            background: #246bfd;
            color: white;
            transform: translateX(3px);
        }

        .sidebar-bottom {
            margin-top: 35px;
            padding: 17px;
            border-radius: 12px;
            background: #223351;
            color: #c8d2e3;
            font-size: 11px;
            line-height: 1.8;
        }

        .sidebar-bottom i {
            color: #61d6a5;
            margin-right: 6px;
        }

        /* Main Content */
        .main-content {
            padding: 32px;
        }

        .breadcrumb-text {
            color: #8490a5;
            font-size: 12px;
            margin-bottom: 12px;
        }

        .breadcrumb-text span {
            color: #246bfd;
        }

        .page-heading {
            font-size: 27px;
            font-weight: 700;
            color: #17243d;
            margin-bottom: 7px;
        }

        .page-subtitle {
            font-size: 13px;
            color: #8590a5;
            margin-bottom: 25px;
        }

        /* Form Card */
        .student-card {
            background: #ffffff;
            border-radius: 17px;
            border: 1px solid #e9edf5;
            box-shadow: 0 8px 35px rgba(27, 45, 80, .05);
            overflow: hidden;
        }

        .card-heading {
            padding: 23px 28px;
            border-bottom: 1px solid #edf0f6;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .heading-icon {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: #edf3ff;
            color: #246bfd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .card-heading h5 {
            margin: 0 0 5px;
            font-weight: 600;
            font-size: 17px;
        }

        .card-heading p {
            margin: 0;
            font-size: 12px;
            color: #8994a8;
        }

        .form-body {
            padding: 30px;
        }

        .section-title {
            font-size: 13px;
            font-weight: 600;
            color: #246bfd;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 23px;
        }

        .form-group {
            margin-bottom: 23px;
        }

        .form-group label {
            font-size: 12px;
            font-weight: 600;
            color: #37445b;
            margin-bottom: 9px;
        }

        .form-control {
            height: 49px;
            border: 1px solid #e0e6f0;
            border-radius: 9px;
            background: #fbfcff;
            font-size: 13px;
            padding: 12px 15px;
            color: #29364d;
            transition: .2s;
        }

        .form-control:focus {
            background: #ffffff;
            border-color: #246bfd;
            box-shadow: 0 0 0 3px rgba(36, 107, 253, .10);
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            right: 16px;
            top: 17px;
            color: #9aa6ba;
            font-size: 14px;
            pointer-events: none;
        }

        .input-icon .form-control {
            padding-right: 42px;
        }

        .form-note {
            font-size: 11px;
            color: #929db0;
            margin-top: 8px;
        }

        .form-footer {
            padding: 20px 30px;
            border-top: 1px solid #edf0f6;
            background: #fcfdff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
        }

        .btn {
            border-radius: 9px;
            padding: 11px 20px;
            font-size: 12px;
            font-weight: 600;
            transition: .2s;
        }

        .btn-save {
            background: #246bfd;
            border: 1px solid #246bfd;
            color: white;
        }

        .btn-save:hover {
            background: #1455db;
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(36, 107, 253, .2);
        }

        .btn-back {
            background: #ffffff;
            color: #637087;
            border: 1px solid #dfe5ef;
        }

        .btn-back:hover {
            background: #edf2fa;
            color: #253047;
        }

        .alert {
            font-size: 13px;
            border-radius: 9px;
        }

        .footer-note {
            text-align: center;
            color: #9aa4b5;
            font-size: 11px;
            margin-top: 25px;
        }

        @media (max-width: 767px) {
            .topbar {
                padding: 0 18px;
            }

            .sidebar {
                min-height: auto;
                padding: 12px;
            }

            .sidebar-label,
            .sidebar-bottom {
                display: none;
            }

            .menu-link {
                display: inline-flex;
                padding: 11px;
                margin: 3px;
            }

            .menu-link span {
                display: none;
            }

            .main-content {
                padding: 22px 15px;
            }

            .page-heading {
                font-size: 23px;
            }

            .form-body {
                padding: 22px 18px;
            }

            .card-heading {
                padding: 20px 18px;
            }

            .form-footer {
                padding: 18px;
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="topbar">
        <a href="/ims/public/admin/dashboard" class="brand">
            <i class="fas fa-graduation-cap"></i>LMS
        </a>

        <div class="admin-profile">
            <div class="text-right d-none d-sm-block">
                <div>Administrator</div>
                <small class="text-muted">Management Panel</small>
            </div>
            <div class="admin-avatar">
                <i class="fas fa-user-shield"></i>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <aside class="col-md-2 sidebar">

                <div class="sidebar-label">Main Menu</div>

                <a href="/ims/public/admin/dashboard" class="menu-link">
                    <i class="fas fa-th-large"></i>
                    <span>Dashboard</span>
                </a>

                <a href="/ims/public/admin/addstudent" class="menu-link active">
                    <i class="fas fa-user-plus"></i>
                    <span>Add Student</span>
                </a>

                <a href="#" class="menu-link">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Teachers</span>
                </a>

                <a href="#" class="menu-link">
                    <i class="fas fa-book-open"></i>
                    <span>Courses</span>
                </a>

                <a href="#" class="menu-link">
                    <i class="fas fa-file-alt"></i>
                    <span>Exams</span>
                </a>

                <a href="#" class="menu-link">
                    <i class="fas fa-chart-line"></i>
                    <span>Results</span>
                </a>

                <a href="#" class="menu-link">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>

                <a href="/ims/public/admin/logout" class="menu-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>

                <div class="sidebar-bottom">
                    <i class="fas fa-circle"></i> System Online
                    <br>
                    Learning Management System
                </div>

            </aside>

            <!-- Main Content -->
            <main class="col-md-10 main-content">

                <div class="breadcrumb-text">
                    Dashboard / Students / <span>Add Student</span>
                </div>

                <h2 class="page-heading">Add New Student</h2>

                <p class="page-subtitle">
                    Create a student account and add them to your learning management system.
                </p>

                <div class="student-card">

                    <div class="card-heading">
                        <div class="heading-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>

                        <div>
                            <h5>Student Information</h5>
                            <p>Enter the student's account details below.</p>
                        </div>
                    </div>

                    <form action="/admin/addstudent" method="POST">
                        @csrf

                        <div class="form-body">

                            @if(session('success'))
                                <div class="alert alert-success">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Please correct the following:</strong>
                                    <ul class="mb-0 mt-2">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="section-title">
                                <i class="fas fa-id-card mr-2"></i>
                                Account Details
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Student Name *</label>

                                        <div class="input-icon">
                                            <input
                                                type="text"
                                                id="name"
                                                name="name"
                                                class="form-control"
                                                placeholder="Enter full name"
                                                value="{{ old('name') }}"
                                                maxlength="255"
                                                autocomplete="name"
                                                required>

                                            <i class="fas fa-user"></i>
                                        </div>

                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address *</label>

                                        <div class="input-icon">
                                            <input
                                                type="email"
                                                id="email"
                                                name="email"
                                                class="form-control"
                                                placeholder="student@example.com"
                                                value="{{ old('email') }}"
                                                maxlength="255"
                                                autocomplete="email"
                                                required>

                                            <i class="fas fa-envelope"></i>
                                        </div>

                                        <div class="form-note">
                                            Use a valid email address for the student account.
                                        </div>

                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password *</label>

                                        <div class="input-icon">
                                            <input
                                                type="password"
                                                id="password"
                                                name="password"
                                                class="form-control"
                                                placeholder="Create a secure password"
                                                minlength="8"
                                                autocomplete="new-password"
                                                required>

                                            <i class="fas fa-lock"></i>
                                        </div>

                                        <div class="form-note">
                                            Use at least 8 characters.
                                        </div>

                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="alert alert-info mt-2 mb-0">
                                <i class="fas fa-info-circle mr-2"></i>
                                Fields marked with * are required.
                            </div>

                        </div>

                        <div class="form-footer">

                            <a href="/ims/public/admin/dashboard" class="btn btn-back">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Back to Dashboard
                            </a>

                            <button type="submit" class="btn btn-save">
                                <i class="fas fa-user-plus mr-2"></i>
                                Save Student
                            </button>

                        </div>

                    </form>

                </div>

                <div class="footer-note">
                    LMS &copy; {{ date('Y') }} | Learning Management System
                </div>

            </main>

        </div>
    </div>

</body>
</html>
