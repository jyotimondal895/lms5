
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS | Admin Dashboard</title>

    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>
        :root {
            --primary: #5b5ce2;
            --primary-dark: #4142bd;
            --sidebar: #171a35;
            --body-bg: #f5f6fc;
            --text: #252744;
            --muted: #8589a6;
            --border: #eceef6;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: var(--body-bg);
            color: var(--text);
            overflow-x: hidden;
        }

        a {
            text-decoration: none !important;
        }

        /* Sidebar */

        .sidebar {
            width: 255px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: var(--sidebar);
            color: white;
            padding: 24px 16px;
            z-index: 1000;
            overflow-y: auto;
            transition: .3s;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 5px 12px 30px;
            color: white;
            font-size: 21px;
            font-weight: 700;
        }

        .brand-icon {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 13px;
            background: linear-gradient(135deg, #818cf8, #5b5ce2);
            font-size: 20px;
        }

        .menu-label {
            padding: 13px 13px 8px;
            color: #777c9f;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 2px;
        }

        .sidebar .nav-link {
            display: flex;
            align-items: center;
            gap: 14px;
            color: #aeb2d0;
            padding: 13px 15px;
            margin-bottom: 5px;
            border-radius: 11px;
            font-size: 12px;
            font-weight: 500;
            transition: .25s;
        }

        .sidebar .nav-link i {
            width: 20px;
            text-align: center;
            font-size: 15px;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: #fff;
            background: linear-gradient(100deg, #5b5ce2, #7475ef);
            box-shadow: 0 7px 20px rgba(91, 92, 226, .2);
        }

        .sidebar-bottom {
            margin-top: 28px;
            padding: 15px;
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.07);
            border-radius: 13px;
        }

        .sidebar-bottom p {
            color: #aeb2d0;
            font-size: 11px;
            margin-bottom: 12px;
        }

        .sidebar-bottom a {
            display: block;
            text-align: center;
            background: #fff;
            color: var(--primary);
            border-radius: 8px;
            padding: 9px;
            font-size: 11px;
            font-weight: 600;
        }

        /* Main area */

        .main {
            margin-left: 255px;
            min-height: 100vh;
            padding: 0 30px 30px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 85px;
            gap: 15px;
            margin-bottom: 25px;
        }

        .page-title {
            font-size: 22px;
            font-weight: 700;
            margin: 0;
        }

        .page-subtitle {
            font-size: 11px;
            color: var(--muted);
            margin-top: 5px;
        }

        .top-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .icon-button {
            height: 39px;
            width: 39px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: white;
            color: #666b8c;
            border: 1px solid var(--border);
            border-radius: 11px;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 41px;
            height: 41px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            background: linear-gradient(135deg, #7778ed, #4142bd);
            font-weight: 700;
        }

        .profile-name {
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .profile-role {
            color: var(--muted);
            font-size: 10px;
        }

        .mobile-menu {
            display: none;
            border: 0;
            background: white;
            border-radius: 9px;
            padding: 10px 12px;
        }

        /* Welcome banner */

        .welcome-banner {
            position: relative;
            overflow: hidden;
            background: linear-gradient(110deg, #5557d9, #8184f4);
            color: white;
            border-radius: 19px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: 0 12px 30px rgba(91,92,226,.15);
        }

        .welcome-banner:after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            right: 45px;
            top: -100px;
            border: 35px solid rgba(255,255,255,.09);
            border-radius: 50%;
        }

        .welcome-banner:before {
            content: "";
            position: absolute;
            width: 130px;
            height: 130px;
            right: -15px;
            bottom: -85px;
            background: rgba(255,255,255,.10);
            border-radius: 50%;
        }

        .welcome-banner h2 {
            font-size: 23px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .welcome-banner p {
            color: #e8e8ff;
            font-size: 12px;
            margin-bottom: 19px;
        }

        .welcome-btn {
            display: inline-block;
            padding: 10px 17px;
            background: white;
            color: var(--primary);
            border-radius: 9px;
            font-size: 11px;
            font-weight: 600;
        }

        .welcome-btn:hover {
            color: var(--primary-dark);
        }

        .welcome-illustration {
            position: absolute;
            right: 65px;
            top: 27px;
            z-index: 1;
            font-size: 90px;
            opacity: .95;
        }

        /* Stat cards */

        .stat-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 22px;
            height: 100%;
            transition: .25s;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(33,38,85,.07);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .stat-icon {
            width: 47px;
            height: 47px;
            border-radius: 14px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 19px;
        }

        .purple { background: #efedff; color: #6965e8; }
        .blue { background: #e8f3ff; color: #3994ec; }
        .orange { background: #fff1e4; color: #f59e46; }
        .green { background: #e4f9ef; color: #28b981; }

        .stat-tag {
            font-size: 10px;
            color: #26a879;
            background: #e7f9f1;
            padding: 6px 8px;
            border-radius: 7px;
        }

        .stat-number {
            font-size: 27px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 12px;
            color: var(--muted);
        }

        .stat-footer {
            border-top: 1px solid #f0f1f7;
            margin-top: 18px;
            padding-top: 13px;
            color: var(--muted);
            font-size: 10px;
        }

        /* General panels */

        .panel {
            background: white;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 23px;
            height: 100%;
        }

        .panel-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
            gap: 10px;
        }

        .panel-heading h5 {
            font-size: 14px;
            font-weight: 700;
            margin: 0;
        }

        .panel-heading small {
            color: var(--muted);
            font-size: 10px;
        }

        .text-link {
            font-size: 11px;
            color: var(--primary);
            font-weight: 600;
        }

        /* Chart */

        .chart-legend {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 15px;
            font-size: 10px;
            color: var(--muted);
        }

        .legend-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .chart-area {
            position: relative;
            width: 100%;
            height: 230px;
        }

        .chart-area canvas {
            width: 100%;
            height: 100%;
        }

        /* Activity */

        .activity-item {
            display: flex;
            gap: 13px;
            padding: 13px 0;
            border-bottom: 1px solid #f0f1f7;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            min-width: 37px;
            height: 37px;
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .activity-title {
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .activity-desc {
            font-size: 10px;
            color: var(--muted);
            line-height: 1.6;
        }

        /* Quick actions */

        .quick-action {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 15px;
            border: 1px solid var(--border);
            border-radius: 12px;
            color: var(--text);
            margin-bottom: 11px;
            transition: .2s;
        }

        .quick-action:last-child {
            margin-bottom: 0;
        }

        .quick-action:hover {
            background: #f8f8ff;
            border-color: #dadaff;
            color: var(--primary);
            transform: translateX(3px);
        }

        .quick-action-icon {
            width: 39px;
            height: 39px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 11px;
        }

        .quick-action strong {
            display: block;
            font-size: 11px;
            margin-bottom: 4px;
        }

        .quick-action small {
            display: block;
            color: var(--muted);
            font-size: 9px;
        }

        /* Table */

        .table-responsive {
            overflow-x: auto;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background: #f8f9fd;
            color: #8589a6;
            border-top: 0;
            border-bottom: 1px solid var(--border);
            padding: 14px 12px;
            font-size: 10px;
            font-weight: 600;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 15px 12px;
            font-size: 10px;
            vertical-align: middle;
            border-color: #f0f1f7;
            white-space: nowrap;
        }

        .student-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .student-avatar {
            height: 35px;
            width: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            color: #5657cf;
            background: #efedff;
            font-weight: 700;
        }

        .student-name {
            font-weight: 600;
            font-size: 10px;
        }

        .student-email {
            font-size: 9px;
            color: var(--muted);
            margin-top: 4px;
        }

        .status {
            display: inline-block;
            padding: 6px 9px;
            border-radius: 7px;
            font-size: 9px;
            font-weight: 600;
        }

        .status-active {
            background: #e5f9ef;
            color: #1eaa77;
        }

        .status-pending {
            background: #fff3df;
            color: #dc9a27;
        }

        .status-inactive {
            background: #ffebed;
            color: #e45865;
        }

        /* Bottom section */

        .course-item {
            margin-bottom: 21px;
        }

        .course-item:last-child {
            margin-bottom: 0;
        }

        .course-info {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 9px;
            font-size: 10px;
        }

        .course-info strong {
            font-weight: 600;
        }

        .course-info span {
            color: var(--muted);
        }

        .progress {
            height: 7px;
            border-radius: 10px;
            background: #f0f1f8;
        }

        .progress-bar {
            border-radius: 10px;
        }

        .footer {
            text-align: center;
            color: var(--muted);
            font-size: 10px;
            padding: 25px 0 5px;
        }

        /* Responsive */

        @media (max-width: 991px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main {
                margin-left: 0;
                padding: 0 18px 25px;
            }

            .mobile-menu {
                display: inline-block;
            }

            .welcome-illustration {
                right: 35px;
                font-size: 70px;
            }
        }

        @media (max-width: 575px) {
            .main {
                padding: 0 12px 20px;
            }

            .topbar {
                min-height: 75px;
            }

            .page-title {
                font-size: 17px;
            }

            .page-subtitle {
                font-size: 9px;
            }

            .profile-details {
                display: none;
            }

            .top-actions {
                gap: 8px;
            }

            .welcome-banner {
                padding: 23px 20px;
            }

            .welcome-banner h2 {
                font-size: 18px;
                max-width: 75%;
            }

            .welcome-banner p {
                max-width: 75%;
                font-size: 10px;
            }

            .welcome-illustration {
                right: 15px;
                top: 40px;
                font-size: 46px;
            }

            .stat-card {
                padding: 16px;
            }

            .stat-number {
                font-size: 23px;
            }

            .panel {
                padding: 16px;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->

<aside class="sidebar" id="sidebar">

    <a href="/ims/public/admin/dashboard" class="brand">
        <span class="brand-icon">
            <i class="fas fa-graduation-cap"></i>
        </span>
        <span>Edu<span style="color:#9293ff;">Manage</span></span>
    </a>

    <div class="menu-label">MAIN MENU</div>

    <nav>
        <a href="/ims/public/admin/dashboard" class="nav-link active">
            <i class="fas fa-th-large"></i> Dashboard
        </a>

        <a href="/ims/public/admin/students" class="nav-link">
            <i class="fas fa-user-graduate"></i> Students
        </a>

        <a href="/ims/public/admin/" class="nav-link">
            <i class="fas fa-chalkboard-teacher"></i> Teachers
        </a>

        <a href="/ims/public/admin/courses" class="nav-link">
            <i class="fas fa-book-open"></i> Courses
        </a>

        <a href="/ims/public/admin/exams" class="nav-link">
            <i class="fas fa-file-alt"></i> Exams
        </a>

        <a href="/ims/public/admin/results" class="nav-link">
            <i class="fas fa-chart-line"></i> Results
        </a>
    </nav>

    <div class="menu-label mt-3">PREFERENCES</div>

    <nav>
        <a href="/ims/public/admin/settings" class="nav-link">
            <i class="fas fa-cog"></i> Settings
        </a>

        <a href="#help" class="nav-link">
            <i class="fas fa-question-circle"></i> Help & Support
        </a>

        <a href="/ims/public/admin/logout" class="nav-link">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </nav>

    <div class="sidebar-bottom">
        <div class="mb-2">
            <i class="fas fa-headset" style="color:#999aff;"></i>
            <strong style="font-size:11px; margin-left:6px;">Need Help?</strong>
        </div>
        <p>Get assistance with your learning management system.</p>
        <a href="#help">Contact Support</a>
    </div>

</aside>


<!-- MAIN CONTENT -->

<main class="main">

    <!-- TOP NAVBAR -->

    <header class="topbar">

        <div class="d-flex align-items-center">
            <button class="mobile-menu mr-3" id="menuToggle"
                    aria-label="Toggle sidebar">
                <i class="fas fa-bars"></i>
            </button>

            <div>
                <h1 class="page-title">Dashboard Overview</h1>
                <div class="page-subtitle">
                    Welcome back! Here's what's happening in your LMS.
                </div>
            </div>
        </div>

        <div class="top-actions">

            <a href="/ims/public/admin/settings" class="icon-button"
               title="Settings">
                <i class="far fa-bell"></i>
            </a>

            <div class="admin-profile">
                <div class="avatar">A</div>
                <div class="profile-details">
                    <div class="profile-name">Administrator</div>
                    <div class="profile-role">Super Admin</div>
                </div>
            </div>

        </div>
    </header>


    <!-- WELCOME BANNER -->

    <section class="welcome-banner">

        <div style="position:relative;z-index:2;">
            <h2>Welcome to Your LMS Dashboard! 👋</h2>

            <p>
                Manage students, teachers, courses and examinations
                from one powerful workspace.
            </p>

            <a href="/ims/public/admin/students" class="welcome-btn">
                <i class="fas fa-users mr-2"></i> Manage Students
            </a>
        </div>

        <div class="welcome-illustration">
            <i class="fas fa-graduation-cap"></i>
        </div>

    </section>


    <!-- STATISTICS CARDS -->

    <section class="row mb-4">

        <div class="col-xl-3 col-md-6 mb-3">
            <div class="stat-card">

                <div class="stat-top">
                    <div class="stat-icon purple">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <span class="stat-tag">Students</span>
                </div>

                <div class="stat-number">
                    {{ $studentsCount ?? 0 }}
                </div>

                <div class="stat-label">Total Students</div>

                <div class="stat-footer">
                    <i class="fas fa-users mr-1"></i>
                    Registered student accounts
                </div>

            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3">
            <div class="stat-card">

                <div class="stat-top">
                    <div class="stat-icon blue">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <span class="stat-tag">Teachers</span>
                </div>

                <div class="stat-number">
                    {{ $teachersCount ?? 0 }}
                </div>

                <div class="stat-label">Total Teachers</div>

                <div class="stat-footer">
                    <i class="fas fa-user-tie mr-1"></i>
                    Teaching staff accounts
                </div>

            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3">
            <div class="stat-card">

                <div class="stat-top">
                    <div class="stat-icon orange">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <span class="stat-tag">Courses</span>
                </div>

                <div class="stat-number">
                    {{ $coursesCount ?? 0 }}
                </div>

                <div class="stat-label">Available Courses</div>

                <div class="stat-footer">
                    <i class="fas fa-layer-group mr-1"></i>
                    Courses in the LMS
                </div>

            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3">
            <div class="stat-card">

                <div class="stat-top">
                    <div class="stat-icon green">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <span class="stat-tag">Exams</span>
                </div>

                <div class="stat-number">
                    {{ $examsCount ?? 0 }}
                </div>

                <div class="stat-label">Total Examinations</div>

                <div class="stat-footer">
                    <i class="fas fa-clipboard-check mr-1"></i>
                    Examination records
                </div>

            </div>
        </div>

    </section>


    <!-- CHART AND ACTIVITY -->

    <section class="row mb-4">

        <div class="col-lg-8 mb-4">
            <div class="panel">

                <div class="panel-heading">
                    <div>
                        <h5>Student Enrollment</h5>
                        <small>Monthly enrollment overview</small>
                    </div>

                    <span class="text-link">
                        <i class="fas fa-chart-area mr-1"></i> Overview
                    </span>
                </div>

                <div class="chart-legend">
                    <span>
                        <i class="legend-dot"
                           style="background:#6667e8;"></i>
                        Enrollments
                    </span>
                </div>

                <div class="chart-area">
                    <canvas id="enrollmentChart"></canvas>
                </div>

                <small class="text-muted" style="font-size:9px;">
                    Demo chart data. Connect your enrollment records for
                    real monthly statistics.
                </small>

            </div>
        </div>


        <div class="col-lg-4 mb-4">
            <div class="panel">

                <div class="panel-heading">
                    <div>
                        <h5>Quick Actions</h5>
                        <small>Common administration tasks</small>
                    </div>
                    <i class="fas fa-bolt" style="color:#f4a640;"></i>
                </div>

                <a href="/ims/public/admin/students" class="quick-action">
                    <div class="quick-action-icon purple">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div>
                        <strong>Manage Students</strong>
                        <small>View and manage student records</small>
                    </div>
                    <i class="fas fa-chevron-right ml-auto"
                       style="font-size:10px;"></i>
                </a>

                <a href="/ims/public/admin/teachers" class="quick-action">
                    <div class="quick-action-icon blue">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div>
                        <strong>Manage Teachers</strong>
                        <small>View teaching staff</small>
                    </div>
                    <i class="fas fa-chevron-right ml-auto"
                       style="font-size:10px;"></i>
                </a>

                <a href="/ims/public/admin/courses" class="quick-action">
                    <div class="quick-action-icon orange">
                        <i class="fas fa-book"></i>
                    </div>
                    <div>
                        <strong>Manage Courses</strong>
                        <small>View available courses</small>
                    </div>
                    <i class="fas fa-chevron-right ml-auto"
                       style="font-size:10px;"></i>
                </a>

                <a href="/ims/public/admin/settings" class="quick-action">
                    <div class="quick-action-icon green">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div>
                        <strong>Admin Settings</strong>
                        <small>Update profile and preferences</small>
                    </div>
                    <i class="fas fa-chevron-right ml-auto"
                       style="font-size:10px;"></i>
                </a>

            </div>
        </div>

    </section>


    <!-- STUDENT TABLE -->

    <section class="row mb-4">

        <div class="col-12">
            <div class="panel">

                <div class="panel-heading">
                    <div>
                        <h5>Recent Students</h5>
                        <small>Latest registered students</small>
                    </div>

                    <a href="/ims/public/admin/students" class="text-link">
                        View All <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="table-responsive">

                    <table class="table">

                        <thead>
                            <tr>
                                <th>STUDENT</th>
                                <th>STUDENT ID</th>
                                <th>COURSE</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse(($students ?? collect())->take(5) as $student)

                                <tr>
                                    <td>
                                        <div class="student-info">
                                            <div class="student-avatar">
                                                {{ strtoupper(substr($student->name ?? 'S', 0, 1)) }}
                                            </div>

                                            <div>
                                                <div class="student-name">
                                                    {{ $student->name ?? 'Student' }}
                                                </div>

                                                <div class="student-email">
                                                    {{ $student->email ?? 'No email available' }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        {{ $student->id }}
                                    </td>

                                    <td>
                                        {{ $student->course_name ?? 'Not assigned' }}
                                    </td>

                                    <td>
                                        <span class="status status-active">
                                            Registered
                                        </span>
                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="4" class="text-center py-5">
                                        <i class="fas fa-user-graduate mb-3"
                                           style="font-size:28px;color:#b4b6d8;display:block;"></i>

                                        <strong>No student records found</strong>

                                        <div class="text-muted mt-2"
                                             style="font-size:10px;">
                                            Student records will appear here
                                            when available.
                                        </div>
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>
        </div>

    </section>


    <!-- COURSE OVERVIEW -->

    <section class="row">

        <div class="col-lg-7 mb-4">
            <div class="panel">

                <div class="panel-heading">
                    <div>
                        <h5>Learning Management</h5>
                        <small>Quick access to LMS modules</small>
                    </div>
                </div>

                <div class="row text-center">

                    <div class="col-4">
                        <a href="/ims/public/admin/courses" style="color:inherit;">
                            <div class="stat-icon purple mx-auto mb-3">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div class="student-name">Courses</div>
                            <div class="student-email">Course records</div>
                        </a>
                    </div>

                    <div class="col-4">
                        <a href="/ims/public/admin/exams" style="color:inherit;">
                            <div class="stat-icon orange mx-auto mb-3">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="student-name">Exams</div>
                            <div class="student-email">Exam records</div>
                        </a>
                    </div>

                    <div class="col-4">
                        <a href="/ims/public/admin/results" style="color:inherit;">
                            <div class="stat-icon green mx-auto mb-3">
                                <i class="fas fa-poll"></i>
                            </div>
                            <div class="student-name">Results</div>
                            <div class="student-email">Result records</div>
                        </a>
                    </div>

                </div>

            </div>
        </div>


        <div class="col-lg-5 mb-4">
            <div class="panel">

                <div class="panel-heading">
                    <div>
                        <h5>System Information</h5>
                        <small>Administration summary</small>
                    </div>

                    <i class="fas fa-info-circle"
                       style="color:#6965e8;"></i>
                </div>

                <div class="course-item">
                    <div class="course-info">
                        <strong>Student Management</strong>
                        <span><i class="fas fa-check-circle text-success"></i></span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar"
                             style="width:100%;background:#6667e8;"></div>
                    </div>
                </div>

                <div class="course-item">
                    <div class="course-info">
                        <strong>Course Management</strong>
                        <span><i class="fas fa-check-circle text-success"></i></span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar"
                             style="width:100%;background:#3c9bea;"></div>
                    </div>
                </div>

                <div class="course-item">
                    <div class="course-info">
                        <strong>Examination Module</strong>
                        <span><i class="fas fa-cog"
                                  style="color:#f3a441;"></i></span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar"
                             style="width:75%;background:#f3a441;"></div>
                    </div>
                </div>

                <small class="text-muted" style="font-size:9px;">
                    These indicators are illustrative UI elements,
                    not automatic checks of your application.
                </small>

            </div>
        </div>

    </section>


    <footer class="footer">
        © {{ date('Y') }} EduManage LMS. All rights reserved.
        <br>
        <span style="display:inline-block;margin-top:6px;">
            Designed for smarter education management
        </span>
    </footer>

</main>


<!-- SCRIPTS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

<script>
    // Mobile sidebar
    document.getElementById('menuToggle').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('show');
    });

    // Illustrative enrollment chart
    var chartCanvas = document.getElementById('enrollmentChart');

    if (chartCanvas && typeof Chart !== 'undefined') {
        new Chart(chartCanvas, {
            type: 'line',

            data: {
                labels: [
                    'Jan', 'Feb', 'Mar', 'Apr',
                    'May', 'Jun', 'Jul', 'Aug',
                    'Sep', 'Oct', 'Nov', 'Dec'
                ],

                datasets: [{
                    label: 'Enrollments',
                    data: [12, 19, 15, 28, 24, 35, 30, 42, 37, 48, 43, 55],
                    borderColor: '#6667e8',
                    backgroundColor: 'rgba(102,103,232,0.10)',
                    borderWidth: 3,
                    pointRadius: 3,
                    pointBackgroundColor: '#6667e8',
                    fill: true,
                    lineTension: 0.35
                }]
            },

            options: {
                responsive: true,
                maintainAspectRatio: false,

                legend: {
                    display: false
                },

                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: '#999bb3',
                            fontSize: 10
                        },
                        gridLines: {
                            color: '#f0f1f8',
                            drawBorder: false
                        }
                    }],

                    xAxes: [{
                        ticks: {
                            fontColor: '#999bb3',
                            fontSize: 10
                        },
                        gridLines: {
                            display: false
                        }
                    }]
                },

                tooltips: {
                    backgroundColor: '#252744',
                    titleFontFamily: 'Poppins',
                    bodyFontFamily: 'Poppins',
                    cornerRadius: 8
                }
            }
        });
    }
</script>

</body>
</html>
