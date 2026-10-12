
<!doctype html>
<html lang="en">
<head>
    <title>LMS - Edit Student</title>

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
            background: #f3f6fb;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #27324a;
            overflow-x: hidden;
        }

        /* Navbar */
        .top-navbar {
            background: linear-gradient(110deg, #172554, #2563eb);
            padding: 14px 28px;
            box-shadow: 0 4px 15px rgba(15, 23, 42, 0.15);
        }

        .navbar-brand {
            font-size: 25px;
            font-weight: 800;
            color: #fff !important;
            letter-spacing: 1px;
        }

        .brand-icon {
            background: rgba(255, 255, 255, 0.18);
            padding: 9px;
            border-radius: 10px;
            margin-right: 8px;
        }

        .admin-label {
            color: #e0eaff;
            font-size: 14px;
        }

        /* Sidebar */
        .sidebar {
            min-height: calc(100vh - 68px);
            background: #111827;
            padding: 0;
        }

        .sidebar-heading {
            padding: 27px 15px;
            text-align: center;
            border-bottom: 1px solid #293449;
        }

        .sidebar-heading h5 {
            color: #fff;
            font-weight: 700;
            margin: 0 0 6px;
        }

        .sidebar-heading small {
            color: #94a3b8;
        }

        .menu-label {
            padding: 23px 22px 10px;
            color: #64748b;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
        }

        .sidebar .list-group-item {
            background: transparent;
            color: #cbd5e1;
            border: none;
            padding: 14px 22px;
            font-size: 14px;
            transition: all 0.25s ease;
        }

        .sidebar .list-group-item i {
            width: 27px;
            font-size: 16px;
        }

        .sidebar .list-group-item:hover,
        .sidebar .list-group-item.active-menu {
            background: #2563eb;
            color: #fff;
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
            padding: 35px;
        }

        .breadcrumb-text {
            font-size: 13px;
            color: #64748b;
            margin-bottom: 8px;
        }

        .page-title {
            font-size: 29px;
            font-weight: 800;
            color: #172554;
            margin-bottom: 7px;
        }

        .page-subtitle {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 27px;
        }

        /* Form card */
        .edit-card {
            background: #fff;
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(31, 41, 55, 0.07);
        }

        .card-header-custom {
            padding: 24px 28px;
            background: linear-gradient(110deg, #eff6ff, #f8faff);
            border-bottom: 1px solid #e5eaf3;
        }

        .card-header-custom h5 {
            margin: 0 0 6px;
            font-weight: 800;
            color: #1e3a8a;
            font-size: 19px;
        }

        .card-header-custom p {
            margin: 0;
            color: #64748b;
            font-size: 13px;
        }

        .card-header-icon {
            height: 48px;
            width: 48px;
            border-radius: 13px;
            background: #dbeafe;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .card-body-custom {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 23px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 700;
            color: #334155;
            margin-bottom: 9px;
        }

        .form-control {
            height: 48px;
            border: 1px solid #dbe2ed;
            border-radius: 9px;
            padding: 12px 15px;
            font-size: 14px;
            color: #1e293b;
            background: #fbfcfe;
            transition: all 0.25s ease;
        }

        .form-control:focus {
            background: #fff;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.12);
        }

        .input-help {
            display: block;
            font-size: 12px;
            color: #64748b;
            margin-top: 7px;
        }

        .form-divider {
            border-top: 1px solid #edf0f5;
            margin: 8px 0 24px;
        }

        /* Buttons */
        .btn-update {
            background: linear-gradient(110deg, #2563eb, #1d4ed8);
            color: #fff;
            border: none;
            border-radius: 9px;
            padding: 12px 23px;
            font-size: 14px;
            font-weight: 700;
            transition: all 0.25s ease;
        }

        .btn-update:hover {
            background: #1e40af;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 5px 14px rgba(37, 99, 235, 0.22);
        }

        .btn-back {
            background: #f1f5f9;
            color: #475569;
            border: 1px solid #dbe2ed;
            border-radius: 9px;
            padding: 12px 22px;
            font-size: 14px;
            font-weight: 700;
        }

        .btn-back:hover {
            background: #e2e8f0;
            color: #1e293b;
        }

        .alert {
            border-radius: 9px;
            font-size: 14px;
        }

        .footer-text {
            margin-top: 25px;
            text-align: center;
            color: #94a3b8;
            font-size: 12px;
        }

        /* Responsive */
        @media (max-width: 767px) {
            .sidebar {
                min-height: auto;
            }

            .main-content {
                padding: 22px 15px;
            }

            .card-body-custom {
                padding: 22px 18px;
            }

            .card-header-custom {
                padding: 20px;
            }

            .page-title {
                font-size: 25px;
            }

            .top-navbar {
                padding: 12px 18px;
            }

            .form-actions .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>

<!-- Top Navbar -->
<nav class="navbar navbar-dark top-navbar">
    <a class="navbar-brand" href="/ims/public/admin/dashboard">
        <i class="fas fa-graduation-cap brand-icon"></i>
        LMS
    </a>

    <span class="admin-label">
        <i class="fas fa-user-shield mr-2"></i>Admin Panel
    </span>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <aside class="col-md-2 sidebar">

            <div class="sidebar-heading">
                <h5><i class="fas fa-layer-group mr-2"></i> LMS Menu</h5>
                <small>Management System</small>
            </div>

            <div class="menu-label">MAIN MENU</div>

            <div class="list-group list-group-flush">
                <a href="/ims/public/admin/dashboard" class="list-group-item">
                    <i class="fas fa-th-large"></i> Dashboard
                </a>

                <a href="/ims/public/admin/addstudent"
                   class="list-group-item active-menu">
                    <i class="fas fa-user-graduate"></i> Students
                </a>

                <a href="#" class="list-group-item">
                    <i class="fas fa-chalkboard-teacher"></i> Teachers
                </a>

                <a href="#" class="list-group-item">
                    <i class="fas fa-book-open"></i> Courses
                </a>

                <a href="#" class="list-group-item">
                    <i class="fas fa-file-alt"></i> Exams
                </a>

                <a href="#" class="list-group-item">
                    <i class="fas fa-chart-bar"></i> Results
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
                Dashboard / Students / <strong>Edit Student</strong>
            </div>

            <h1 class="page-title">Edit Student</h1>

            <p class="page-subtitle">
                Update student information and maintain accurate records.
            </p>

            <div class="card edit-card">

                <div class="card-header-custom">
                    <div class="d-flex align-items-center">
                        <div class="card-header-icon mr-3">
                            <i class="fas fa-user-edit"></i>
                        </div>

                        <div>
                            <h5>Student Information</h5>
                            <p>Edit the details below and save your changes.</p>
                        </div>
                    </div>
                </div>

                <div class="card-body-custom">

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <i class="fas fa-check-circle mr-2"></i>
                            {{ session('success') }}
                            <button type="button" class="close"
                                    data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <strong>Please correct the following errors:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ url('admin/updatestudent/'.$student->id) }}"
                          method="POST">

                        @csrf

                        <div class="form-group">
                            <label for="name">
                                <i class="fas fa-user mr-2 text-primary"></i>
                                Student Name
                            </label>

                            <input type="text"
                                   id="name"
                                   name="name"
                                   class="form-control"
                                   placeholder="Enter student's full name"
                                   value="{{ old('name', $student->name) }}"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="email">
                                <i class="fas fa-envelope mr-2 text-primary"></i>
                                Email Address
                            </label>

                            <input type="email"
                                   id="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Enter email address"
                                   value="{{ old('email', $student->email) }}"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="password">
                                <i class="fas fa-lock mr-2 text-primary"></i>
                                New Password
                            </label>

                            <input type="password"
                                   id="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Enter a new password">

                            <small class="input-help">
                                Leave this field blank to keep the current password.
                            </small>
                        </div>

                        <div class="form-divider"></div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-update mr-2">
                                <i class="fas fa-save mr-2"></i>
                                Update Student
                            </button>

                            <a href="/ims/public/admin/dashboard" class="btn btn-back">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Back
                            </a>
                        </div>

                    </form>

                </div>
            </div>

            <div class="footer-text">
                &copy; {{ date('Y') }} LMS Admin Panel. All rights reserved.
            </div>

        </main>

    </div>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>