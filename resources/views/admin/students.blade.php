
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS | Student Management</title>

    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>
        :root {
            --navy: #101a35;
            --navy-light: #1b2949;
            --primary: #635bff;
            --purple: #8078ff;
            --background: #f5f7fc;
            --text: #202b45;
            --muted: #8590a5;
            --border: #e9edf5;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: var(--background);
            color: var(--text);
            overflow-x: hidden;
        }

        a {
            text-decoration: none !important;
        }

        /* Sidebar */

        .sidebar {
            width: 255px;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            background: var(--navy);
            color: white;
            z-index: 1000;
            overflow-y: auto;
            transition: .3s;
        }

        .brand {
            padding: 27px 25px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(255,255,255,.08);
        }

        .brand-icon {
            width: 43px;
            height: 43px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 13px;
            background: linear-gradient(135deg, #8179ff, #5548e8);
            font-size: 21px;
            margin-right: 12px;
            box-shadow: 0 5px 18px rgba(99,91,255,.3);
        }

        .brand h4 {
            margin: 0;
            font-size: 19px;
            font-weight: 800;
            letter-spacing: .5px;
        }

        .brand small {
            color: #a8b3d0;
            font-size: 10px;
            letter-spacing: 2px;
        }

        .menu-label {
            color: #7381a5;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.5px;
            padding: 28px 25px 12px;
        }

        .side-link {
            display: flex;
            align-items: center;
            padding: 13px 22px;
            margin: 4px 13px;
            border-radius: 10px;
            color: #aeb9d2;
            font-size: 13px;
            font-weight: 500;
            transition: .25s;
        }

        .side-link i {
            width: 29px;
            font-size: 16px;
        }

        .side-link:hover,
        .side-link.active {
            background: linear-gradient(110deg, #655cff, #5148d9);
            color: white;
            box-shadow: 0 6px 18px rgba(99,91,255,.19);
        }

        .sidebar-bottom {
            margin: 30px 14px 20px;
            padding: 17px;
            border-radius: 12px;
            background: var(--navy-light);
            color: #c7d0e8;
            font-size: 11px;
            line-height: 1.7;
        }

        .sidebar-bottom i {
            color: #9e98ff;
            margin-right: 6px;
        }

        /* Main layout */

        .main {
            margin-left: 255px;
            min-height: 100vh;
        }

        .topbar {
            height: 78px;
            padding: 0 35px;
            background: #fff;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .breadcrumb-text {
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 5px;
        }

        .breadcrumb-text span {
            color: var(--primary);
            font-weight: 600;
        }

        .topbar-title {
            font-size: 17px;
            font-weight: 700;
            margin: 0;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .admin-avatar {
            height: 39px;
            width: 39px;
            border-radius: 12px;
            background: #eceaff;
            color: var(--primary);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 16px;
        }

        .admin-profile strong {
            display: block;
            font-size: 12px;
        }

        .admin-profile small {
            color: var(--muted);
            font-size: 10px;
        }

        .page-content {
            padding: 32px 35px;
        }

        /* Welcome banner */

        .welcome-banner {
            background: linear-gradient(115deg, #25265d, #6259e9 75%, #817aff);
            border-radius: 18px;
            padding: 29px 30px;
            color: white;
            position: relative;
            overflow: hidden;
            margin-bottom: 27px;
        }

        .welcome-banner:after {
            content: '';
            position: absolute;
            width: 210px;
            height: 210px;
            border: 35px solid rgba(255,255,255,.07);
            border-radius: 50%;
            right: 40px;
            top: -95px;
        }

        .welcome-banner h2 {
            font-size: 23px;
            font-weight: 800;
            margin-bottom: 9px;
            position: relative;
            z-index: 1;
        }

        .welcome-banner p {
            font-size: 12px;
            color: #e0dfff;
            margin: 0;
            position: relative;
            z-index: 1;
        }

        .banner-icon {
            position: absolute;
            right: 70px;
            bottom: -12px;
            font-size: 100px;
            opacity: .13;
        }

        /* Statistics */

        .stats-row {
            margin-bottom: 28px;
        }

        .stat-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 15px;
            padding: 22px;
            height: 100%;
            transition: .25s;
            box-shadow: 0 4px 16px rgba(29,43,76,.025);
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(29,43,76,.07);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 21px;
        }

        .stat-icon {
            width: 45px;
            height: 45px;
            border-radius: 13px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 19px;
        }

        .icon-purple { background: #eeecff; color: #685cff; }
        .icon-blue   { background: #e5f2ff; color: #3190ee; }
        .icon-green  { background: #e2f9ef; color: #1ba978; }
        .icon-orange { background: #fff0e3; color: #ef943b; }

        .stat-label {
            color: var(--muted);
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .stat-number {
            font-size: 27px;
            font-weight: 800;
            letter-spacing: -.8px;
        }

        .stat-note {
            color: #a0a8b9;
            font-size: 10px;
            margin-top: 5px;
        }

        /* Student panel */

        .student-panel {
            background: white;
            border: 1px solid var(--border);
            border-radius: 17px;
            box-shadow: 0 4px 20px rgba(29,43,76,.025);
            overflow: hidden;
        }

        .panel-header {
            padding: 25px 25px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            border-bottom: 1px solid var(--border);
        }

        .panel-header h4 {
            font-size: 17px;
            font-weight: 800;
            margin: 0 0 7px;
        }

        .panel-header p {
            color: var(--muted);
            font-size: 11px;
            margin: 0;
        }

        .btn-add {
            background: linear-gradient(110deg, #6e64ff, #574de7);
            color: white !important;
            padding: 12px 17px;
            border-radius: 10px;
            font-size: 11px;
            font-weight: 700;
            border: none;
            box-shadow: 0 5px 14px rgba(99,91,255,.18);
            transition: .25s;
        }

        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(99,91,255,.28);
        }

        .panel-tools {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 18px 25px;
        }

        .search-box {
            position: relative;
            width: 300px;
            max-width: 100%;
        }

        .search-box i {
            position: absolute;
            left: 14px;
            top: 14px;
            color: #9ca6ba;
            font-size: 13px;
        }

        .search-box input {
            width: 100%;
            height: 41px;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: #fafbfe;
            padding: 0 12px 0 37px;
            font-family: inherit;
            font-size: 11px;
            outline: none;
            transition: .2s;
        }

        .search-box input:focus {
            border-color: #918aff;
            box-shadow: 0 0 0 3px rgba(99,91,255,.08);
        }

        .result-count {
            color: var(--muted);
            font-size: 11px;
            margin-left: auto;
        }

        /* Table */

        .table-responsive {
            padding: 0 20px 10px;
        }

        .student-table {
            margin-bottom: 0;
            min-width: 620px;
        }

        .student-table thead th {
            background: #f7f8fc;
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
            color: #8490a7;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: .7px;
            font-weight: 700;
            padding: 16px 14px;
            white-space: nowrap;
        }

        .student-table tbody td {
            border-top: 1px solid #f0f2f8;
            padding: 17px 14px;
            vertical-align: middle;
            font-size: 11px;
            color: #56627a;
        }

        .student-table tbody tr {
            transition: .2s;
        }

        .student-table tbody tr:hover {
            background: #fafaff;
        }

        .student-id {
            color: #929db1;
            font-weight: 600;
        }

        .student-info {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .student-avatar {
            height: 39px;
            width: 39px;
            min-width: 39px;
            border-radius: 12px;
            background: #eeecff;
            color: #655bfa;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 800;
            font-size: 13px;
        }

        .student-name {
            color: #25304a;
            font-weight: 700;
            font-size: 11px;
            margin-bottom: 4px;
        }

        .student-subtitle {
            color: #9aa3b4;
            font-size: 9px;
        }

        .email-text {
            color: #68748a;
            word-break: break-word;
        }

        .status-badge {
            background: #e4f8ee;
            color: #159563;
            padding: 7px 10px;
            border-radius: 7px;
            font-size: 9px;
            font-weight: 700;
            white-space: nowrap;
        }

        .action-group {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .btn-action {
            border: 1px solid #e8eaf2;
            background: white;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            transition: .2s;
        }

        .btn-edit {
            color: #685cff;
        }

        .btn-edit:hover {
            background: #eeecff;
            border-color: #d7d2ff;
        }

        .btn-delete {
            color: #ee5c72;
        }

        .btn-delete:hover {
            background: #fff0f1;
            border-color: #ffcbd1;
        }

        .empty-state {
            text-align: center;
            padding: 45px 15px !important;
            color: #909bb0 !important;
        }

        .empty-state i {
            display: block;
            font-size: 29px;
            color: #b8b3ff;
            margin-bottom: 12px;
        }

        .panel-footer {
            border-top: 1px solid var(--border);
            padding: 17px 25px;
            color: #929cb0;
            font-size: 10px;
            display: flex;
            justify-content: space-between;
            gap: 10px;
            flex-wrap: wrap;
        }

        .footer-dot {
            color: #25b982;
            margin-right: 5px;
        }

        /* Mobile */

        .mobile-menu {
            display: none;
            background: transparent;
            border: 0;
            font-size: 20px;
            color: var(--navy);
            margin-right: 13px;
        }

        @media (max-width: 991px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
                box-shadow: 10px 0 40px rgba(0,0,0,.18);
            }

            .main {
                margin-left: 0;
            }

            .mobile-menu {
                display: inline-block;
            }

            .page-content {
                padding: 24px 20px;
            }

            .topbar {
                padding: 0 20px;
            }
        }

        @media (max-width: 575px) {
            .topbar {
                height: 68px;
            }

            .admin-profile .profile-info {
                display: none;
            }

            .page-content {
                padding: 17px 12px;
            }

            .welcome-banner {
                padding: 24px 20px;
            }

            .welcome-banner h2 {
                font-size: 19px;
            }

            .banner-icon {
                right: 20px;
                font-size: 75px;
            }

            .panel-header {
                padding: 20px 16px;
            }

            .panel-tools {
                padding: 15px 16px;
                flex-wrap: wrap;
            }

            .search-box {
                width: 100%;
            }

            .result-count {
                margin-left: 0;
            }

            .table-responsive {
                padding: 0 10px 10px;
            }

            .panel-footer {
                padding: 15px 16px;
            }
        }
    </style>
</head>

<body>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">

    <div class="brand">
        <div class="brand-icon">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div>
            <h4>LearnSpace</h4>
            <small>MANAGEMENT SYSTEM</small>
        </div>
    </div>

    <div class="menu-label">MAIN MENU</div>

    <a href="/ims/public/admin/dashboard" class="side-link">
        <i class="fas fa-th-large"></i> Dashboard
    </a>

    <a href="/ims/public/admin/students" class="side-link active">
        <i class="fas fa-user-graduate"></i> Students
    </a>

    <a href="/ims/public/admin/teachers" class="side-link">
        <i class="fas fa-chalkboard-teacher"></i> Teachers
    </a>

    <a href="/ims/public/admin/courses" class="side-link">
        <i class="fas fa-book-open"></i> Courses
    </a>

    <a href="/ims/public/admin/exams" class="side-link">
        <i class="fas fa-file-alt"></i> Examinations
    </a>

    <a href="/ims/public/admin/results" class="side-link">
        <i class="fas fa-chart-line"></i> Results
    </a>

    <div class="menu-label">PREFERENCES</div>

    <a href="/ims/public/admin/settings" class="side-link">
        <i class="fas fa-sliders-h"></i> Settings
    </a>

    <a href="/ims/public/admin/profile" class="side-link">
        <i class="fas fa-user-circle"></i> My Profile
    </a>

    <a href="/ims/public/admin/logout" class="side-link"
       onclick="return confirm('Are you sure you want to logout?')">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>

    <div class="sidebar-bottom">
        <i class="fas fa-shield-alt"></i>
        <strong>Admin Workspace</strong><br>
        Manage your students, courses and academic records in one place.
    </div>

</aside>

<!-- Main -->
<main class="main">

    <!-- Topbar -->
    <header class="topbar">

        <div class="d-flex align-items-center">
            <button class="mobile-menu" id="menuToggle"
                    aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div>
                <div class="breadcrumb-text">
                    Home / Management / <span>Students</span>
                </div>
                <h5 class="topbar-title">Student Management</h5>
            </div>
        </div>

        <div class="admin-profile">
            <div class="admin-avatar">
                <i class="fas fa-user-shield"></i>
            </div>
            <div class="profile-info">
                <strong>Administrator</strong>
                <small>System Manager</small>
            </div>
        </div>

    </header>

    <section class="page-content">

        <!-- Welcome banner -->
        <div class="welcome-banner">
            <i class="fas fa-users banner-icon"></i>

            <h2>Student Management Center 👋</h2>
            <p>Manage student records, maintain information and keep your
               learning community organized.</p>
        </div>

        <!-- Statistics -->
        @php
            $totalStudents = $students->count();
        @endphp

        <div class="row stats-row">

            <div class="col-6 col-xl-3 mb-3">
                <div class="stat-card">
                    <div class="stat-top">
                        <div class="stat-icon icon-purple">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <i class="fas fa-ellipsis-h text-muted"></i>
                    </div>
                    <div class="stat-label">TOTAL STUDENTS</div>
                    <div class="stat-number">{{ $totalStudents }}</div>
                    <div class="stat-note">Student records in the system</div>
                </div>
            </div>

            <div class="col-6 col-xl-3 mb-3">
                <div class="stat-card">
                    <div class="stat-top">
                        <div class="stat-icon icon-blue">
                            <i class="fas fa-id-card"></i>
                        </div>
                        <i class="fas fa-ellipsis-h text-muted"></i>
                    </div>
                    <div class="stat-label">STUDENT RECORDS</div>
                    <div class="stat-number">{{ $totalStudents }}</div>
                    <div class="stat-note">Profiles available to manage</div>
                </div>
            </div>

            <div class="col-6 col-xl-3 mb-3">
                <div class="stat-card">
                    <div class="stat-top">
                        <div class="stat-icon icon-green">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <i class="fas fa-ellipsis-h text-muted"></i>
                    </div>
                    <div class="stat-label">LISTED STUDENTS</div>
                    <div class="stat-number">{{ $totalStudents }}</div>
                    <div class="stat-note">Currently displayed records</div>
                </div>
            </div>

            <div class="col-6 col-xl-3 mb-3">
                <div class="stat-card">
                    <div class="stat-top">
                        <div class="stat-icon icon-orange">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <i class="fas fa-ellipsis-h text-muted"></i>
                    </div>
                    <div class="stat-label">EMAIL RECORDS</div>
                    <div class="stat-number">
                        {{ $students->whereNotNull('email')->count() }}
                    </div>
                    <div class="stat-note">Profiles with an email address</div>
                </div>
            </div>

        </div>

        <!-- Student table -->
        <div class="student-panel">

            <div class="panel-header">
                <div>
                    <h4>
                        <i class="fas fa-users mr-2"
                           style="color:#685cff"></i>
                        All Students
                    </h4>
                    <p>View, search, edit and manage your student directory.</p>
                </div>

                <a href="{{ url('/admin/addstudent') }}" class="btn-add">
                    <i class="fas fa-plus mr-2"></i> Add New Student
                </a>
            </div>

            <div class="panel-tools">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="studentSearch"
                           placeholder="Search by student name or email..."
                           aria-label="Search students">
                </div>

                <div class="result-count">
                    Showing <strong id="visibleCount">{{ $totalStudents }}</strong>
                    of {{ $totalStudents }} students
                </div>
            </div>

            <div class="table-responsive">
                <table class="table student-table">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Information</th>
                            <th>Email Address</th>
                            <th>Record Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody id="studentTableBody">

                        @forelse($students as $student)
                            <tr class="student-row">

                                <td>
                                    <span class="student-id">
                                        #{{ str_pad($student->id, 4, '0', STR_PAD_LEFT) }}
                                    </span>
                                </td>

                                <td>
                                    <div class="student-info">
                                        <div class="student-avatar">
                                            {{ strtoupper(substr($student->name ?? 'S', 0, 1)) }}
                                        </div>

                                        <div>
                                            <div class="student-name">
                                                {{ $student->name }}
                                            </div>
                                            <div class="student-subtitle">
                                                Registered student
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <span class="email-text">
                                        {{ $student->email ?? 'No email provided' }}
                                    </span>
                                </td>

                                <td>
                                    <span class="status-badge">
                                        <i class="fas fa-check-circle mr-1"></i>
                                        Listed
                                    </span>
                                </td>

                                <td>
                                    <div class="action-group justify-content-center">

                                        <a href="{{ url('admin/editstudent/' . $student->id) }}"
                                           class="btn-action btn-edit"
                                           title="Edit student"
                                           aria-label="Edit student">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <a href="{{ url('admin/deletestudent/' . $student->id) }}"
                                           class="btn-action btn-delete"
                                           title="Delete student"
                                           aria-label="Delete student"
                                           onclick="return confirm('Are you sure you want to delete this student?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>

                                    </div>
                                </td>

                            </tr>

                        @empty
                            <tr id="emptyRow">
                                <td colspan="5" class="empty-state">
                                    <i class="fas fa-user-graduate"></i>
                                    <strong>No students found</strong>
                                    <div class="mt-2">
                                        Add your first student to get started.
                                    </div>
                                </td>
                            </tr>
                        @endforelse

                        <tr id="noSearchResults" style="display:none;">
                            <td colspan="5" class="empty-state">
                                <i class="fas fa-search"></i>
                                <strong>No matching students</strong>
                                <div class="mt-2">
                                    Try another name or email address.
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="panel-footer">
                <div>
                    <i class="fas fa-circle footer-dot"></i>
                    Student directory
                </div>
                <div>
                    LMS Admin Panel &copy; {{ date('Y') }}
                </div>
            </div>

        </div>

    </section>

</main>

<script>
    // Sidebar toggle for mobile screens
    document.getElementById('menuToggle').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('open');
    });

    // Live student search
    const searchInput = document.getElementById('studentSearch');
    const studentRows = document.querySelectorAll('.student-row');
    const visibleCount = document.getElementById('visibleCount');
    const noSearchResults = document.getElementById('noSearchResults');

    searchInput.addEventListener('input', function () {
        const query = this.value.toLowerCase().trim();
        let visible = 0;

        studentRows.forEach(function (row) {
            const matches = row.textContent.toLowerCase().includes(query);

            row.style.display = matches ? '' : 'none';

            if (matches) {
                visible++;
            }
        });

        visibleCount.textContent = visible;
        noSearchResults.style.display =
            (visible === 0 && studentRows.length > 0) ? '' : 'none';
    });

    // Close sidebar after tapping outside on mobile
    document.addEventListener('click', function (event) {
        const sidebar = document.getElementById('sidebar');
        const toggle = document.getElementById('menuToggle');

        if (
            window.innerWidth <= 991 &&
            sidebar.classList.contains('open') &&
            !sidebar.contains(event.target) &&
            !toggle.contains(event.target)
        ) {
            sidebar.classList.remove('open');
        }
    });
</script>

</body>
</html>
