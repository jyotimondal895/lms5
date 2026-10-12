
<!doctype html>
<html lang="en">
<head>
    <title>LMS - Teachers Management</title>

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
            color: #263248;
            overflow-x: hidden;
        }

        /* Navbar */
        .top-navbar {
            background: linear-gradient(110deg, #172554, #2563eb);
            padding: 13px 25px;
            box-shadow: 0 4px 15px rgba(15, 23, 42, .15);
        }

        .navbar-brand {
            font-size: 25px;
            font-weight: 800;
            color: white !important;
            letter-spacing: 1px;
        }

        .brand-icon {
            background: rgba(255, 255, 255, .18);
            padding: 9px;
            border-radius: 10px;
            margin-right: 8px;
        }

        .top-navbar .nav-link {
            color: #e2e8f0 !important;
            font-size: 14px;
            margin-left: 12px;
        }

        .top-navbar .nav-link:hover {
            color: #fff !important;
        }

        /* Sidebar */
        .sidebar {
            min-height: calc(100vh - 66px);
            background: #111827;
            padding: 0;
        }

        .sidebar-heading {
            padding: 26px 12px;
            text-align: center;
            border-bottom: 1px solid #293449;
        }

        .sidebar-heading h5 {
            color: white;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .sidebar-heading small {
            color: #94a3b8;
        }

        .menu-label {
            padding: 22px 20px 9px;
            font-size: 11px;
            color: #64748b;
            font-weight: 800;
            letter-spacing: 1.5px;
        }

        .sidebar .list-group-item {
            background: transparent;
            border: none;
            color: #cbd5e1;
            padding: 14px 21px;
            font-size: 14px;
            transition: .25s;
        }

        .sidebar .list-group-item i {
            width: 27px;
            font-size: 16px;
        }

        .sidebar .list-group-item:hover,
        .sidebar .list-group-item.active-menu {
            background: #2563eb;
            color: white;
            padding-left: 27px;
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
        }

        .breadcrumb-text {
            color: #64748b;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .page-title {
            color: #172554;
            font-size: 29px;
            font-weight: 800;
            margin-bottom: 7px;
        }

        .page-subtitle {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 25px;
        }

        /* Summary cards */
        .summary-card {
            background: white;
            border-radius: 13px;
            padding: 20px;
            border: 1px solid #edf0f5;
            box-shadow: 0 5px 20px rgba(31, 41, 55, .04);
            margin-bottom: 23px;
        }

        .summary-icon {
            height: 48px;
            width: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 20px;
        }

        .icon-blue {
            color: #2563eb;
            background: #dbeafe;
        }

        .icon-green {
            color: #059669;
            background: #d1fae5;
        }

        .summary-card h4 {
            color: #172554;
            font-weight: 800;
            margin: 0 0 4px;
            font-size: 24px;
        }

        .summary-card p {
            color: #64748b;
            font-size: 13px;
            margin: 0;
        }

        /* Table card */
        .table-card {
            background: white;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 7px 28px rgba(31, 41, 55, .06);
        }

        .table-card-header {
            padding: 23px 25px;
            border-bottom: 1px solid #edf0f5;
        }

        .table-card-header h5 {
            color: #172554;
            font-size: 19px;
            font-weight: 800;
            margin: 0 0 5px;
        }

        .table-card-header p {
            color: #64748b;
            font-size: 13px;
            margin: 0;
        }

        .btn-add {
            background: linear-gradient(110deg, #2563eb, #1d4ed8);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 11px 17px;
            font-size: 13px;
            font-weight: 700;
            transition: .25s;
        }

        .btn-add:hover {
            background: #1e40af;
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, .2);
        }

        .search-box {
            max-width: 280px;
            position: relative;
        }

        .search-box i {
            position: absolute;
            left: 13px;
            top: 13px;
            color: #94a3b8;
        }

        .search-box input {
            width: 100%;
            height: 41px;
            border: 1px solid #dbe2ed;
            background: #f8fafc;
            border-radius: 8px;
            padding: 8px 12px 8px 37px;
            font-size: 13px;
            outline: none;
        }

        .search-box input:focus {
            border-color: #3b82f6;
            background: white;
        }

        .table-responsive {
            padding: 0 20px 15px;
        }

        .table {
            margin: 0;
            min-width: 760px;
        }

        .table thead th {
            background: #f8fafc;
            color: #64748b;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .7px;
            border-top: none;
            border-bottom: 1px solid #e5eaf3;
            padding: 17px 13px;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 17px 13px;
            font-size: 13px;
            color: #475569;
            vertical-align: middle;
            border-color: #edf0f5;
        }

        .table tbody tr {
            transition: background .2s;
        }

        .table tbody tr:hover {
            background: #f8fbff;
        }

        .serial-number {
            color: #94a3b8;
            font-weight: 700;
        }

        .teacher-name {
            color: #1e293b;
            font-weight: 700;
        }

        .teacher-avatar {
            width: 38px;
            height: 38px;
            border-radius: 11px;
            background: #dbeafe;
            color: #2563eb;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-weight: 800;
            font-size: 14px;
            flex-shrink: 0;
        }

        .department-badge {
            background: #eff6ff;
            color: #1d4ed8;
            border-radius: 6px;
            padding: 6px 9px;
            font-size: 11px;
            font-weight: 700;
            display: inline-block;
        }

        .experience-badge {
            background: #ecfdf5;
            color: #047857;
            border-radius: 6px;
            padding: 6px 9px;
            font-size: 11px;
            font-weight: 700;
            display: inline-block;
        }

        .btn-action {
            width: 33px;
            height: 33px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 7px;
            font-size: 12px;
            margin-right: 4px;
        }

        .btn-edit {
            background: #fef3c7;
            color: #b45309;
            border: 1px solid #fde68a;
        }

        .btn-edit:hover {
            background: #f59e0b;
            color: white;
        }

        .btn-delete {
            background: #fee2e2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }

        .btn-delete:hover {
            background: #dc2626;
            color: white;
        }

        .empty-state {
            text-align: center;
            padding: 45px 15px !important;
            color: #94a3b8 !important;
        }

        .empty-state i {
            display: block;
            font-size: 35px;
            margin-bottom: 12px;
            color: #cbd5e1;
        }

        .table-footer {
            padding: 15px 25px;
            background: #fbfcfe;
            border-top: 1px solid #edf0f5;
            color: #64748b;
            font-size: 12px;
        }

        .footer-text {
            text-align: center;
            color: #94a3b8;
            font-size: 12px;
            margin-top: 25px;
        }

        @media (max-width: 767px) {
            .sidebar {
                min-height: auto;
            }

            .main-content {
                padding: 22px 14px;
            }

            .page-title {
                font-size: 25px;
            }

            .table-card-header {
                padding: 20px;
            }

            .search-box {
                max-width: 100%;
                margin-top: 15px;
            }

            .top-navbar {
                padding: 12px 16px;
            }

            .top-navbar .nav-link {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark top-navbar">
    <a class="navbar-brand" href="/ims/public/admin/dashboard">
        <i class="fas fa-graduation-cap brand-icon"></i> LMS
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

                <a href="/ims/public/admin/teachers" class="list-group-item">
                    <i class="fas fa-user-graduate"></i> Students
                </a>

                <a href="/ims/public/admin/teachers"
                   class="list-group-item active-menu">
                    <i class="fas fa-chalkboard-teacher"></i> Teachers
                </a>

                <a href="/ims/public/admin/courses" class="list-group-item">
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
                Dashboard / <strong>Teachers</strong>
            </div>

            <h1 class="page-title">Teachers Management</h1>

            <p class="page-subtitle">
                Manage your teaching staff, departments and experience details.
            </p>

            <!-- Summary Cards -->
            <div class="row">

                <div class="col-sm-6 col-lg-4">
                    <div class="summary-card d-flex align-items-center">
                        <div class="summary-icon icon-blue mr-3">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div>
                            <h4>{{ count($teachers) }}</h4>
                            <p>Total Teachers</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="summary-card d-flex align-items-center">
                        <div class="summary-icon icon-green mr-3">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div>
                            <h4>{{ count($teachers) }}</h4>
                            <p>Registered Staff</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Teachers Table -->
            <div class="card table-card">

                <div class="table-card-header">
                    <div class="row align-items-center">

                        <div class="col-md-6">
                            <h5>
                                <i class="fas fa-users mr-2 text-primary"></i>
                                All Teachers
                            </h5>
                            <p>View, edit or remove teacher records.</p>
                        </div>

                        <div class="col-md-6 text-md-right mt-3 mt-md-0">
                            <a href="/ims/public/admin/addteacher" class="btn btn-add">
                                <i class="fas fa-plus mr-2"></i>
                                Add Teacher
                            </a>
                        </div>

                    </div>

                    <div class="search-box mt-4">
                        <i class="fas fa-search"></i>
                        <input type="text" id="teacherSearch"
                               placeholder="Search teachers...">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover" id="teachersTable">

                        <thead>
                            <tr>
                                <th>Sl. No.</th>
                                <th>Teacher Name</th>
                                <th>Email Address</th>
                                <th>Department</th>
                                <th>Experience</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($teachers as $teacher)
                                <tr>
                                    <td class="serial-number">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="teacher-avatar">
                                                {{ strtoupper(substr($teacher->name, 0, 1)) }}
                                            </span>

                                            <span class="teacher-name">
                                                {{ $teacher->name }}
                                            </span>
                                        </div>
                                    </td>

                                    <td>
                                        <i class="far fa-envelope mr-1 text-muted"></i>
                                        {{ $teacher->email }}
                                    </td>

                                    <td>
                                        <span class="department-badge">
                                            {{ $teacher->department ?: 'Not specified' }}
                                        </span>
                                    </td>

                                    <td>
                                        <span class="experience-badge">
                                            {{ $teacher->experience ?: 'Not specified' }}
                                        </span>
                                    </td>

                                    <td>
                                        <a href="{{ url('admin/editteacher/'.$teacher->id) }}"
                                           class="btn btn-action btn-edit"
                                           title="Edit Teacher">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <a href="{{ url('admin/deleteteacher/'.$teacher->id) }}"
                                           class="btn btn-action btn-delete"
                                           title="Delete Teacher"
                                           onclick="return confirm('Are you sure you want to delete this teacher?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="empty-state">
                                        <i class="fas fa-user-slash"></i>
                                        <strong>No teachers found</strong>
                                        <div class="mt-2">
                                            Click Add Teacher to register your first teacher.
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
                        Teacher records
                    </span>
                    <span>
                        Total: {{ count($teachers) }}
                    </span>
                </div>

            </div>

            <div class="footer-text">
                &copy; {{ date('Y') }} LMS Admin Panel. All rights reserved.
            </div>

        </main>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Live Search -->
<script>
    document.getElementById('teacherSearch').addEventListener('keyup', function () {
        var searchValue = this.value.toLowerCase();
        var rows = document.querySelectorAll('#teachersTable tbody tr');

        rows.forEach(function (row) {
            var text = row.textContent.toLowerCase();
            row.style.display = text.includes(searchValue) ? '' : 'none';
        });
    });
</script>

</body>
</html>
