
<!doctype html>
<html lang="en">
<head>
    <title>LMS - Courses Dashboard</title>

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
            background: #f3f5ff;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #263248;
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
            opacity: .35;
            animation: float 10s ease-in-out infinite;
        }

        .orb-one {
            width: 280px;
            height: 280px;
            background: linear-gradient(135deg, #93c5fd, #c4b5fd);
            top: -100px;
            left: -80px;
        }

        .orb-two {
            width: 220px;
            height: 220px;
            background: linear-gradient(135deg, #a5f3fc, #c4b5fd);
            bottom: -80px;
            right: -60px;
            animation-delay: -4s;
        }

        .orb-three {
            width: 90px;
            height: 90px;
            background: #c4b5fd;
            top: 40%;
            right: 12%;
            animation-delay: -6s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            50% {
                transform: translate(12px, -24px) rotate(8deg);
            }
        }

        /* Navbar */
        .top-navbar {
            background: linear-gradient(110deg, #172554, #4338ca, #6366f1);
            padding: 13px 26px;
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
            background: rgba(255, 255, 255, .17);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 12px;
            margin-right: 8px;
        }

        .top-navbar .nav-link {
            color: #e0e7ff !important;
            font-size: 13px;
            margin-left: 12px;
            transition: .25s;
        }

        .top-navbar .nav-link:hover {
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
            color: #7c89a5;
            font-size: 13px;
            margin-bottom: 10px;
        }

        .breadcrumb-text strong {
            color: #4f46e5;
        }

        .page-title {
            color: #172554;
            font-size: 29px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .page-subtitle {
            color: #74809b;
            font-size: 14px;
            margin-bottom: 27px;
        }

        /* Summary cards */
        .summary-card {
            background: rgba(255, 255, 255, .95);
            border: 1px solid #edf0f7;
            border-radius: 15px;
            padding: 21px;
            margin-bottom: 23px;
            box-shadow: 0 8px 25px rgba(31, 41, 55, .05);
            transition: all .3s ease;
            animation: cardEnter .7s ease both;
        }

        .summary-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(31, 41, 55, .09);
        }

        @keyframes cardEnter {
            from {
                opacity: 0;
                transform: translateY(22px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .summary-icon {
            width: 49px;
            height: 49px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 13px;
            font-size: 20px;
            flex-shrink: 0;
        }

        .icon-purple {
            color: #6d28d9;
            background: #ede9fe;
        }

        .icon-blue {
            color: #2563eb;
            background: #dbeafe;
        }

        .icon-green {
            color: #047857;
            background: #d1fae5;
        }

        .summary-card h4 {
            color: #172554;
            font-weight: 800;
            font-size: 25px;
            margin: 0 0 4px;
        }

        .summary-card p {
            color: #74809b;
            font-size: 12px;
            margin: 0;
        }

        /* Table card */
        .table-card {
            background: rgba(255, 255, 255, .96);
            border: 1px solid rgba(255, 255, 255, .9);
            border-radius: 17px;
            overflow: hidden;
            box-shadow: 0 10px 35px rgba(31, 41, 55, .07);
            animation: cardEnter .85s ease both;
        }

        .table-card-header {
            padding: 24px 25px;
            border-bottom: 1px solid #edf0f7;
        }

        .table-card-header h5 {
            color: #172554;
            font-size: 19px;
            font-weight: 800;
            margin-bottom: 6px;
        }

        .table-card-header p {
            color: #74809b;
            font-size: 12px;
            margin: 0;
        }

        /* Add Course Button */
        .btn-add {
            color: white;
            border: none;
            border-radius: 9px;
            padding: 12px 18px;
            font-size: 13px;
            font-weight: 800;
            background: linear-gradient(110deg, #4f46e5, #7c3aed);
            box-shadow: 0 7px 18px rgba(99, 102, 241, .22);
            transition: all .25s ease;
        }

        .btn-add:hover {
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 12px 24px rgba(99, 102, 241, .35);
            text-decoration: none;
        }

        /* Search */
        .search-box {
            max-width: 330px;
            position: relative;
        }

        .search-box i {
            position: absolute;
            left: 14px;
            top: 14px;
            color: #818cf8;
        }

        .search-box input {
            width: 100%;
            height: 43px;
            background: #f8faff;
            border: 1px solid #e0e5f1;
            border-radius: 9px;
            padding: 10px 13px 10px 39px;
            font-size: 13px;
            outline: none;
            transition: .25s;
        }

        .search-box input:focus {
            border-color: #818cf8;
            background: white;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, .1);
        }

        /* Course table */
        .table-responsive {
            padding: 0 20px 15px;
        }

        .table {
            min-width: 680px;
            margin: 0;
        }

        .table thead th {
            background: #f8faff;
            color: #74809b;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .8px;
            text-transform: uppercase;
            padding: 18px 14px;
            border-top: none;
            border-bottom: 1px solid #e5eaf3;
            white-space: nowrap;
        }

        .table tbody td {
            color: #475569;
            font-size: 13px;
            padding: 17px 14px;
            vertical-align: middle;
            border-color: #edf0f7;
        }

        .table tbody tr {
            transition: background .2s ease;
        }

        .table tbody tr:hover {
            background: #f8faff;
        }

        .serial-number {
            color: #94a3b8;
            font-weight: 700;
        }

        .course-icon {
            display: inline-flex;
            width: 39px;
            height: 39px;
            flex-shrink: 0;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #ede9fe, #dbeafe);
            color: #5b21b6;
            border-radius: 11px;
            margin-right: 11px;
            font-size: 15px;
        }

        .course-name {
            font-weight: 700;
            color: #1e293b;
        }

        .fee-badge {
            display: inline-block;
            background: #ecfdf5;
            color: #047857;
            padding: 7px 10px;
            border-radius: 7px;
            font-weight: 800;
            font-size: 12px;
        }

        .duration-badge {
            display: inline-block;
            background: #eff6ff;
            color: #1d4ed8;
            padding: 7px 10px;
            border-radius: 7px;
            font-weight: 700;
            font-size: 11px;
        }

        /* Action buttons */
        .btn-action {
            width: 34px;
            height: 34px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            font-size: 12px;
            margin-right: 5px;
            transition: all .22s ease;
        }

        .btn-edit {
            background: #fef3c7;
            color: #b45309;
            border: 1px solid #fde68a;
        }

        .btn-edit:hover {
            background: #f59e0b;
            color: white;
            transform: translateY(-2px);
        }

        .btn-delete {
            background: #fee2e2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }

        .btn-delete:hover {
            background: #dc2626;
            color: white;
            transform: translateY(-2px);
        }

        .empty-state {
            padding: 45px 15px !important;
            text-align: center;
            color: #94a3b8 !important;
        }

        .empty-state i {
            display: block;
            font-size: 37px;
            color: #c4b5fd;
            margin-bottom: 13px;
        }

        .table-footer {
            padding: 16px 25px;
            background: #fbfcff;
            border-top: 1px solid #edf0f7;
            color: #74809b;
            font-size: 12px;
        }

        .footer-text {
            text-align: center;
            color: #94a3b8;
            font-size: 12px;
            margin-top: 26px;
        }

        @media (max-width: 767px) {
            .sidebar {
                min-height: auto;
            }

            .main-content {
                padding: 23px 14px;
            }

            .page-title {
                font-size: 25px;
            }

            .top-navbar {
                padding: 12px 17px;
            }

            .table-card-header {
                padding: 20px;
            }

            .search-box {
                max-width: 100%;
                margin-top: 18px;
            }

            .summary-card {
                padding: 17px;
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
<nav class="navbar navbar-expand-lg navbar-dark top-navbar">

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
                <a class="nav-link" href="#">
                    <i class="fas fa-user-circle mr-1"></i> Profile
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
                Dashboard / <strong>Courses</strong>
            </div>

            <h1 class="page-title">Courses Management</h1>

            <p class="page-subtitle">
                Organize your courses, manage fees, and update course durations.
            </p>

            <!-- Summary Cards -->
            <div class="row">

                <div class="col-sm-6 col-lg-4">
                    <div class="summary-card d-flex align-items-center">
                        <div class="summary-icon icon-purple mr-3">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div>
                            <h4>{{ count($courses) }}</h4>
                            <p>Total Courses</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="summary-card d-flex align-items-center">
                        <div class="summary-icon icon-blue mr-3">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h4>{{ count($courses) }}</h4>
                            <p>Registered Courses</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="summary-card d-flex align-items-center">
                        <div class="summary-icon icon-green mr-3">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div>
                            <h4>{{ number_format($courses->sum('fee'), 0) }}</h4>
                            <p>Total Listed Fees</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Courses Table -->
            <div class="card table-card">

                <div class="table-card-header">

                    <div class="row align-items-center">

                        <div class="col-md-6">
                            <h5>
                                <i class="fas fa-graduation-cap mr-2"
                                   style="color:#6366f1;"></i>
                                All Courses
                            </h5>

                            <p>View and manage your registered courses.</p>
                        </div>

                        <div class="col-md-6 text-md-right mt-3 mt-md-0">
                            <a href="/ims/public/admin/addcourse" class="btn btn-add">
                                <i class="fas fa-plus mr-2"></i>
                                Add Course
                            </a>
                        </div>

                    </div>

                    <!-- Live Search -->
                    <div class="search-box mt-4">
                        <i class="fas fa-search"></i>
                        <input type="text"
                               id="courseSearch"
                               placeholder="Search course name, fee, duration...">
                    </div>

                </div>

                <div class="table-responsive">

                    <table class="table table-hover" id="coursesTable">

                        <thead>
                            <tr>
                                <th>Sl. No.</th>
                                <th>Course Name</th>
                                <th>Course Fee</th>
                                <th>Duration</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($courses as $course)

                                <tr>
                                    <td class="serial-number">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="course-icon">
                                                <i class="fas fa-book"></i>
                                            </span>

                                            <span class="course-name">
                                                {{ $course->name }}
                                            </span>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="fee-badge">
                                            <i class="fas fa-rupee-sign mr-1"></i>
                                            {{ number_format((float) $course->fee, 2) }}
                                        </span>
                                    </td>

                                    <td>
                                        <span class="duration-badge">
                                            <i class="far fa-clock mr-1"></i>
                                            {{ $course->duration }}
                                        </span>
                                    </td>

                                    <td>
                                        <a href="{{ url('admin/editcourse/'.$course->id) }}"
                                           class="btn btn-action btn-edit"
                                           title="Edit Course">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <a href="{{ url('admin/deletecourse/'.$course->id) }}"
                                           class="btn btn-action btn-delete"
                                           title="Delete Course"
                                           onclick="return confirm('Are you sure you want to delete this course?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="5" class="empty-state">
                                        <i class="fas fa-book-open"></i>
                                        <strong>No courses found</strong>

                                        <div class="mt-2">
                                            Click Add Course to register your first course.
                                        </div>
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

                <div class="table-footer d-flex justify-content-between">
                    <span>
                        <i class="fas fa-info-circle mr-1"></i>
                        Course records
                    </span>

                    <span>
                        Total: {{ count($courses) }}
                    </span>
                </div>

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

<!-- Live Search -->
<script>
    document.getElementById('courseSearch').addEventListener('input', function () {
        var searchValue = this.value.toLowerCase().trim();
        var rows = document.querySelectorAll('#coursesTable tbody tr');

        rows.forEach(function (row) {
            var text = row.textContent.toLowerCase();
            row.style.display = text.includes(searchValue) ? '' : 'none';
        });
    });
</script>

</body>
</html>
