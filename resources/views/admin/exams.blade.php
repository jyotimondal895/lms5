
<!doctype html>
<html lang="en">
<head>
    <title>LMS - Exams Dashboard</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 4.3.1 -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        :root {
            --primary: #6c63ff;
            --secondary: #8b5cf6;
            --dark: #17172e;
            --muted: #777995;
            --light-bg: #f5f6ff;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            overflow-x: hidden;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--light-bg);
            color: #292943;
        }

        /* Animated Background */
        .background {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: -1;
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(2px);
            opacity: .20;
            animation: float 12s ease-in-out infinite alternate;
        }

        .orb-one {
            width: 300px;
            height: 300px;
            background: #8b5cf6;
            top: 8%;
            right: -100px;
        }

        .orb-two {
            width: 250px;
            height: 250px;
            background: #38bdf8;
            bottom: 0;
            left: 15%;
            animation-delay: -4s;
        }

        .orb-three {
            width: 150px;
            height: 150px;
            background: #f472b6;
            top: 45%;
            left: 40%;
            animation-delay: -7s;
        }

        @keyframes float {
            from {
                transform: translate(0, 0) scale(1);
            }
            to {
                transform: translate(35px, -45px) scale(1.12);
            }
        }

        /* Navbar */
        .main-navbar {
            background: linear-gradient(115deg, #5145cd, #8056e8, #4f8df9);
            padding: 13px 25px;
            box-shadow: 0 5px 22px rgba(78, 65, 190, .25);
            animation: slideDown .7s ease both;
        }

        .navbar-brand {
            font-size: 25px;
            font-weight: 800;
            letter-spacing: 1px;
            color: white !important;
        }

        .brand-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            margin-right: 8px;
            border-radius: 12px;
            background: rgba(255,255,255,.2);
        }

        .navbar-nav .nav-link {
            color: rgba(255,255,255,.9) !important;
            margin-left: 12px;
            transition: .3s;
        }

        .navbar-nav .nav-link:hover {
            color: #ffe58a !important;
            transform: translateY(-2px);
        }

        /* Sidebar */
        .sidebar {
            min-height: calc(100vh - 64px);
            background: linear-gradient(180deg, #191a35, #25244a);
            padding: 20px 12px;
            box-shadow: 5px 0 22px rgba(20, 20, 50, .08);
        }

        .sidebar-title {
            color: #fff;
            font-size: 17px;
            font-weight: 700;
            padding: 12px 15px 25px;
            border-bottom: 1px solid rgba(255,255,255,.12);
            margin-bottom: 20px;
            letter-spacing: .5px;
        }

        .sidebar-title i {
            color: #a89bff;
            margin-right: 9px;
        }

        .list-group-item {
            border: none;
            border-radius: 10px !important;
            padding: 13px 15px;
            margin-bottom: 7px;
            background: transparent;
            color: #c9c9e7;
            font-size: 14px;
            transition: all .3s ease;
        }

        .list-group-item i {
            width: 25px;
            margin-right: 5px;
            text-align: center;
        }

        .list-group-item:hover {
            background: rgba(139, 92, 246, .2) !important;
            color: #fff !important;
            padding-left: 23px;
            transform: translateX(3px);
        }

        .list-group-item.active-menu {
            background: linear-gradient(100deg, #6c63ff, #8b5cf6) !important;
            color: #fff !important;
            box-shadow: 0 5px 16px rgba(108, 99, 255, .3);
        }

        .list-group-item.logout {
            color: #ff8d9b !important;
        }

        /* Main Content */
        .main-content {
            padding: 30px;
            animation: fadeUp .8s ease both;
        }

        .page-heading {
            margin-bottom: 25px;
        }

        .page-heading h2 {
            font-size: 28px;
            font-weight: 800;
            color: #262647;
            margin-bottom: 5px;
        }

        .page-heading p {
            color: var(--muted);
            margin-bottom: 0;
            font-size: 14px;
        }

        .heading-icon {
            display: inline-flex;
            width: 48px;
            height: 48px;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            background: linear-gradient(135deg, #6c63ff, #a855f7);
            color: #fff;
            margin-right: 12px;
            box-shadow: 0 7px 18px rgba(108,99,255,.25);
        }

        /* Summary Cards */
        .summary-card {
            background: rgba(255,255,255,.92);
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 24px;
            box-shadow: 0 8px 25px rgba(40, 40, 100, .06);
            border: 1px solid rgba(108,99,255,.07);
            transition: transform .3s, box-shadow .3s;
            animation: fadeUp .7s ease both;
        }

        .summary-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(70,60,160,.12);
        }

        .summary-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            font-size: 20px;
            color: white;
        }

        .icon-purple {
            background: linear-gradient(135deg, #6c63ff, #a855f7);
        }

        .icon-blue {
            background: linear-gradient(135deg, #339af0, #4f8df9);
        }

        .icon-pink {
            background: linear-gradient(135deg, #f472b6, #ec4899);
        }

        .summary-number {
            font-size: 27px;
            font-weight: 800;
            margin-top: 13px;
            color: #292943;
        }

        .summary-label {
            font-size: 13px;
            color: var(--muted);
        }

        /* Exam Table Card */
        .exam-card {
            border: none;
            border-radius: 18px;
            overflow: hidden;
            background: rgba(255,255,255,.96);
            box-shadow: 0 10px 35px rgba(40,40,100,.08);
            animation: fadeUp .9s ease both;
        }

        .exam-card-header {
            background: linear-gradient(110deg, #5145cd, #8056e8, #578af5);
            padding: 22px 25px;
            color: white;
        }

        .exam-card-header h4 {
            font-weight: 750;
            font-size: 20px;
            margin: 0;
        }

        .exam-card-header p {
            font-size: 12px;
            margin: 5px 0 0;
            color: rgba(255,255,255,.8);
        }

        .btn-add {
            color: #5d50d6;
            background: #fff;
            border: none;
            border-radius: 9px;
            padding: 10px 17px;
            font-weight: 700;
            transition: .3s;
            box-shadow: 0 4px 12px rgba(30,20,90,.12);
        }

        .btn-add:hover {
            color: #4f46e5;
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(30,20,90,.2);
        }

        .exam-card-body {
            padding: 25px;
        }

        .table-search {
            position: relative;
            max-width: 340px;
            margin-bottom: 20px;
        }

        .table-search i {
            position: absolute;
            left: 14px;
            top: 13px;
            color: #8a8ba8;
        }

        .table-search input {
            width: 100%;
            border: 1px solid #e5e6f3;
            background: #fafaff;
            padding: 11px 15px 11px 40px;
            border-radius: 10px;
            outline: none;
            transition: .3s;
        }

        .table-search input:focus {
            border-color: #8175ff;
            box-shadow: 0 0 0 3px rgba(108,99,255,.12);
            background: #fff;
        }

        .table-responsive {
            border-radius: 10px;
        }

        .table {
            margin-bottom: 0;
            white-space: nowrap;
        }

        .table thead th {
            background: #f0efff;
            color: #5145a8;
            border: none;
            padding: 16px 13px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .5px;
            vertical-align: middle;
        }

        .table tbody td {
            padding: 15px 13px;
            vertical-align: middle;
            border-top: 1px solid #f0f0fa;
            font-size: 13px;
            color: #555671;
        }

        .table tbody tr {
            transition: background .25s, transform .25s;
            animation: fadeUp .5s ease both;
        }

        .table tbody tr:hover {
            background: #f8f7ff;
        }

        .serial-number {
            display: inline-flex;
            width: 30px;
            height: 30px;
            justify-content: center;
            align-items: center;
            border-radius: 9px;
            background: #eeecff;
            color: #6458db;
            font-weight: 700;
        }

        .course-name {
            color: #5145cd;
            font-weight: 700;
        }

        .exam-name {
            color: #30304f;
            font-weight: 700;
        }

        .type-badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            background: #eeeaff;
            color: #6552d5;
            font-size: 11px;
            font-weight: 700;
        }

        .marks-badge {
            display: inline-block;
            background: #e6f8ef;
            color: #15945a;
            padding: 6px 10px;
            border-radius: 8px;
            font-weight: 700;
        }

        .btn-action {
            border: none;
            border-radius: 7px;
            padding: 7px 10px;
            font-size: 12px;
            font-weight: 700;
            margin: 2px;
            transition: .25s;
        }

        .btn-edit {
            background: #fff1d6;
            color: #b77700;
        }

        .btn-edit:hover {
            background: #ffca65;
            color: #583900;
            transform: translateY(-2px);
        }

        .btn-delete {
            background: #ffe5e9;
            color: #d93650;
        }

        .btn-delete:hover {
            background: #f65d73;
            color: #fff;
            transform: translateY(-2px);
        }

        .empty-state {
            text-align: center;
            padding: 40px 15px !important;
            color: #8889a5 !important;
        }

        .empty-state i {
            display: block;
            font-size: 35px;
            margin-bottom: 12px;
            color: #a7a1ed;
        }

        .footer-note {
            text-align: center;
            color: #9293ad;
            font-size: 12px;
            padding: 22px 0 5px;
        }

        /* Animations */
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-25px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive */
        @media (max-width: 767px) {
            .sidebar {
                min-height: auto;
            }

            .main-content {
                padding: 18px 12px;
            }

            .page-heading h2 {
                font-size: 23px;
            }

            .exam-card-header {
                padding: 18px;
            }

            .exam-card-body {
                padding: 15px;
            }

            .header-action {
                margin-top: 15px;
                text-align: left !important;
            }

            .summary-card {
                padding: 15px;
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

<div class="background">
    <div class="orb orb-one"></div>
    <div class="orb orb-two"></div>
    <div class="orb orb-three"></div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark main-navbar">
    <a class="navbar-brand" href="/ims/public/admin/dashboard">
        <span class="brand-icon"><i class="fas fa-graduation-cap"></i></span>
        LMS
    </a>

    <button class="navbar-toggler" type="button"
            data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/ims/public/admin/dashboard">
                    <i class="fas fa-home"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user-circle"></i> Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-warning" href="#">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <aside class="col-md-2 sidebar">
            <div class="sidebar-title">
                <i class="fas fa-th-large"></i> LMS MENU
            </div>

            <div class="list-group">
                <a href="/ims/public/admin/dashboard" class="list-group-item">
                    <i class="fas fa-home"></i> Dashboard
                </a>

                <a href="/ims/public/admin/students" class="list-group-item">
                    <i class="fas fa-user-graduate"></i> Students
                </a>

                <a href="/ims/public/admin/teachers" class="list-group-item">
                    <i class="fas fa-chalkboard-teacher"></i> Teachers
                </a>

                <a href="/ims/public/admin/courses" class="list-group-item">
                    <i class="fas fa-book-open"></i> Courses
                </a>

                <a href="/ims/public/admin/exams"
                   class="list-group-item active-menu">
                    <i class="fas fa-file-alt"></i> Exams
                </a>

                <a href="#" class="list-group-item">
                    <i class="fas fa-chart-line"></i> Results
                </a>

                <a href="#" class="list-group-item">
                    <i class="fas fa-cog"></i> Settings
                </a>

                <a href="#" class="list-group-item logout">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="col-md-10 main-content">

            <!-- Page Heading -->
            <div class="page-heading d-flex align-items-center">
                <span class="heading-icon">
                    <i class="fas fa-file-alt fa-lg"></i>
                </span>
                <div>
                    <h2>Exams Dashboard</h2>
                    <p>Manage examinations, schedules and marks.</p>
                </div>
            </div>

            <!-- Summary Cards -->
            <div class="row">

                <div class="col-md-4">
                    <div class="summary-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="summary-label">Total Exams</div>
                                <div class="summary-number">
                                    {{ count($exams) }}
                                </div>
                            </div>
                            <div class="summary-icon icon-purple">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="summary-card" style="animation-delay:.12s">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="summary-label">Available Courses</div>
                                <div class="summary-number">
                                    {{ count($courses) }}
                                </div>
                            </div>
                            <div class="summary-icon icon-blue">
                                <i class="fas fa-book-open"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="summary-card" style="animation-delay:.24s">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="summary-label">Exam Types</div>
                                <div class="summary-number">
                                    {{ $exams->pluck('exam_type')->filter()->unique()->count() }}
                                </div>
                            </div>
                            <div class="summary-icon icon-pink">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Exams Table -->
            <div class="card exam-card">

                <div class="exam-card-header">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h4><i class="fas fa-list-ul mr-2"></i> All Exams</h4>
                            <p>View and manage all scheduled examinations.</p>
                        </div>

                        <div class="col-md-5 text-right header-action">
                            <a href="/ims/public/admin/addexam" class="btn btn-add">
                                <i class="fas fa-plus-circle mr-1"></i>
                                Add New Exam
                            </a>
                        </div>
                    </div>
                </div>

                <div class="exam-card-body">

                    <!-- Search -->
                    <div class="table-search">
                        <i class="fas fa-search"></i>
                        <input type="text" id="examSearch"
                               placeholder="Search exams, courses, type...">
                    </div>

                    <div class="table-responsive">
                        <table class="table" id="examsTable">

                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Course Name</th>
                                <th>Exam Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Type</th>
                                <th>Marks</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php
                                $i = 1;
                            @endphp

                            @forelse($exams as $exam)
                                <tr>
                                    <td>
                                        <span class="serial-number">
                                            {{ $i++ }}
                                        </span>
                                    </td>

                                    <td>
                                        @php
                                            $examCourse = $courses->firstWhere('id', $exam->course_id);
                                        @endphp

                                        <span class="course-name">
                                            {{ $examCourse ? $examCourse->name : 'Course not found' }}
                                        </span>
                                    </td>

                                    <td>
                                        <span class="exam-name">
                                            {{ $exam->exam_name }}
                                        </span>
                                    </td>

                                    <td>
                                        <i class="far fa-calendar-alt mr-1 text-muted"></i>
                                        {{ $exam->exam_date }}
                                    </td>

                                    <td>
                                        <i class="far fa-clock mr-1 text-muted"></i>
                                        {{ $exam->start_time }} - {{ $exam->end_time }}
                                    </td>

                                    <td>
                                        <span class="type-badge">
                                            {{ $exam->exam_type }}
                                        </span>
                                    </td>

                                    <td>
                                        <span class="marks-badge">
                                            {{ $exam->total_marks }}
                                        </span>
                                    </td>

                                    <td>
                                        <button type="button"
                                                class="btn-action btn-edit"
                                                onclick="window.location.href='{{ url('admin/editexam/'.$exam->id) }}'">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>

                                        <a href="{{ url('admin/deleteexam/'.$exam->id) }}"
                                           class="btn-action btn-delete"
                                           onclick="return confirm('Are you sure you want to delete this exam?')">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="empty-state">
                                        <i class="fas fa-calendar-times"></i>
                                        <strong>No exams found</strong>
                                        <div class="mt-2">
                                            Click "Add New Exam" to create your first exam.
                                        </div>
                                    </td>
                                </tr>
                            @endforelse

                            <tr id="noSearchResults" style="display:none">
                                <td colspan="8" class="empty-state">
                                    <i class="fas fa-search"></i>
                                    No matching exams found.
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="footer-note">
                        <i class="fas fa-shield-alt mr-1"></i>
                        LMS Exam Management System
                    </div>

                </div>
            </div>

        </main>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    // Live exam search
    document.getElementById('examSearch').addEventListener('input', function () {
        var searchText = this.value.toLowerCase().trim();
        var rows = document.querySelectorAll('#examsTable tbody tr:not(#noSearchResults)');
        var visibleCount = 0;

        rows.forEach(function (row) {
            // Skip the empty-state row rendered by Blade
            if (row.querySelector('.empty-state')) {
                return;
            }

            var matches = row.innerText.toLowerCase().includes(searchText);
            row.style.display = matches ? '' : 'none';

            if (matches) {
                visibleCount++;
            }
        });

        var noResults = document.getElementById('noSearchResults');
        noResults.style.display =
            (visibleCount === 0 && rows.length > 0 &&
             !document.querySelector('#examsTable tbody .empty-state'))
                ? ''
                : 'none';
    });
</script>

</body>
</html>
