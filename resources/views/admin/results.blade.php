<!doctype html>
<html lang="en">
<head>
    <title>LMS - Results Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        :root {
            --primary: #4f46e5;
            --primary-dark: #3730a3;
            --sidebar: #111827;
            --sidebar-muted: #9ca3af;
            --page: #f4f6fb;
            --text: #1f2937;
            --muted: #6b7280;
            --border: #e5e7eb;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            overflow-x: hidden;
            background: var(--page);
            color: var(--text);
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .topbar {
            min-height: 72px;
            padding: 12px 26px;
            background: linear-gradient(110deg, #4338ca, #6366f1 60%, #818cf8);
            box-shadow: 0 6px 24px rgba(67, 56, 202, .2);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .navbar-brand {
            color: #fff !important;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: .5px;
        }
        .brand-icon {
            display: inline-flex;
            width: 38px;
            height: 38px;
            align-items: center;
            justify-content: center;
            margin-right: 9px;
            border-radius: 12px;
            background: rgba(255,255,255,.18);
        }
        .topbar .nav-link {
            color: rgba(255,255,255,.9) !important;
            font-weight: 600;
            margin-left: 10px;
            transition: .25s ease;
        }
        .topbar .nav-link:hover { color: #fff !important; transform: translateY(-2px); }

        .app-layout { display: flex; min-height: calc(100vh - 72px); }
        .sidebar {
            width: 250px;
            flex: 0 0 250px;
            background: var(--sidebar);
            padding: 24px 14px;
            color: white;
            animation: slideInLeft .65s ease both;
        }
        .sidebar-heading {
            padding: 5px 14px 20px;
            margin: 0 0 18px;
            border-bottom: 1px solid rgba(255,255,255,.1);
            color: #f9fafb;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.6px;
        }
        .menu-link {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 13px 15px;
            margin: 5px 0;
            border-radius: 12px;
            color: var(--sidebar-muted);
            font-weight: 600;
            text-decoration: none !important;
            transition: color .25s ease, background .25s ease, transform .25s ease;
        }
        .menu-link i { width: 19px; text-align: center; font-size: 15px; }
        .menu-link:hover {
            color: #fff;
            background: rgba(255,255,255,.08);
            transform: translateX(5px);
        }
        .menu-link.active {
            color: #fff;
            background: linear-gradient(100deg, #4f46e5, #6366f1);
            box-shadow: 0 7px 18px rgba(79,70,229,.25);
        }
        .menu-link.logout:hover { background: rgba(239,68,68,.15); color: #fca5a5; }

        .main-content {
            min-width: 0;
            flex: 1;
            padding: 34px;
            animation: fadeUp .65s ease both;
        }
        .page-heading {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 26px;
        }
        .eyebrow {
            margin-bottom: 7px;
            color: var(--primary);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.8px;
            text-transform: uppercase;
        }
        .page-heading h1 {
            margin: 0;
            color: #111827;
            font-size: clamp(25px, 3vw, 34px);
            font-weight: 800;
            letter-spacing: -.8px;
        }
        .page-subtitle { margin: 8px 0 0; color: var(--muted); font-size: 14px; }
        .btn-add {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 12px 18px;
            border: 0;
            border-radius: 12px;
            background: var(--primary);
            color: #fff !important;
            font-weight: 700;
            text-decoration: none !important;
            box-shadow: 0 8px 18px rgba(79,70,229,.22);
            transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
            white-space: nowrap;
        }
        .btn-add:hover { background: var(--primary-dark); transform: translateY(-3px); box-shadow: 0 12px 24px rgba(79,70,229,.3); }

        .summary-card {
            height: 100%;
            padding: 21px;
            border: 1px solid rgba(229,231,235,.8);
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 8px 24px rgba(31,41,55,.035);
            transition: transform .25s ease, box-shadow .25s ease;
            animation: fadeUp .65s ease both;
        }
        .summary-card:hover { transform: translateY(-5px); box-shadow: 0 14px 30px rgba(31,41,55,.08); }
        .summary-top { display: flex; justify-content: space-between; align-items: center; }
        .summary-label { color: var(--muted); font-size: 13px; font-weight: 700; }
        .summary-icon {
            display: inline-flex;
            width: 44px;
            height: 44px;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            font-size: 17px;
        }
        .icon-purple { background: #eef2ff; color: #4f46e5; }
        .icon-green { background: #dcfce7; color: #15803d; }
        .icon-red { background: #fee2e2; color: #b91c1c; }
        .icon-amber { background: #fef3c7; color: #b45309; }
        .summary-number { margin-top: 15px; color: #111827; font-size: 29px; font-weight: 800; line-height: 1.1; }
        .summary-note { margin-top: 7px; color: #9ca3af; font-size: 12px; }

        .results-card {
            overflow: hidden;
            margin-top: 26px;
            border: 1px solid var(--border);
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 8px 28px rgba(31,41,55,.045);
            animation: fadeUp .8s ease both;
        }
        .results-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            padding: 23px 25px;
            border-bottom: 1px solid var(--border);
        }
        .results-card-header h2 { margin: 0; font-size: 18px; font-weight: 800; color: #111827; }
        .results-card-header p { margin: 5px 0 0; color: var(--muted); font-size: 13px; }
        .table-tools { display: flex; gap: 12px; padding: 20px 25px 8px; }
        .search-wrap { position: relative; flex: 1; min-width: 180px; }
        .search-wrap i {
            position: absolute;
            top: 50%;
            left: 15px;
            color: #9ca3af;
            transform: translateY(-50%);
        }
        .search-wrap input { padding-left: 42px; }
        .form-control {
            height: 45px;
            border: 1px solid #e5e7eb;
            border-radius: 11px;
            background-color: #f9fafb;
            color: #374151;
            box-shadow: none !important;
            transition: border-color .2s ease, background .2s ease;
        }
        .form-control:focus { border-color: #818cf8; background: #fff; }
        .filter-select { width: 175px; }
        .table-responsive { padding: 12px 25px 24px; }
        .results-table { min-width: 1050px; margin-bottom: 0; border-collapse: separate; border-spacing: 0; }
        .results-table thead th {
            padding: 15px 14px;
            border: 0;
            background: #f3f4f6;
            color: #6b7280;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .65px;
            text-transform: uppercase;
            white-space: nowrap;
        }
        .results-table thead th:first-child { border-radius: 10px 0 0 10px; }
        .results-table thead th:last-child { border-radius: 0 10px 10px 0; }
        .results-table tbody td {
            padding: 16px 14px;
            border-top: 1px solid #f0f1f5;
            color: #4b5563;
            font-size: 13px;
            vertical-align: middle;
        }
        .results-table tbody tr { transition: background .2s ease, transform .2s ease; animation: rowFade .45s ease both; }
        .results-table tbody tr:hover { background: #f8faff; }
        .serial-number { display: inline-flex; width: 29px; height: 29px; align-items: center; justify-content: center; border-radius: 9px; background: #eef2ff; color: #4f46e5; font-weight: 800; }
        .student-name { color: #111827 !important; font-weight: 700; }
        .marks { color: #111827 !important; font-weight: 800; }
        .grade-badge, .status-badge {
            display: inline-block;
            padding: 7px 10px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 800;
            white-space: nowrap;
        }
        .grade-badge { background: #eef2ff; color: #4338ca; }
        .status-pass { background: #dcfce7; color: #15803d; }
        .status-fail { background: #fee2e2; color: #b91c1c; }
        .percentage-cell { min-width: 125px; }
        .percentage-value { display: block; margin-bottom: 6px; color: #374151; font-weight: 700; }
        .progress-track { height: 5px; overflow: hidden; border-radius: 10px; background: #e5e7eb; }
        .progress-fill { height: 100%; border-radius: 10px; background: linear-gradient(90deg, #6366f1, #818cf8); transition: width .8s ease; }
        .action-buttons { display: flex; gap: 7px; }
        .btn-action {
            display: inline-flex;
            width: 34px;
            height: 34px;
            align-items: center;
            justify-content: center;
            border-radius: 9px;
            font-size: 12px;
            text-decoration: none !important;
            transition: transform .2s ease, background .2s ease;
        }
        .btn-edit { background: #fef3c7; color: #b45309 !important; }
        .btn-delete { background: #fee2e2; color: #b91c1c !important; }
        .btn-action:hover { transform: translateY(-3px) scale(1.04); }
        .empty-state { padding: 42px 20px !important; color: #9ca3af !important; text-align: center; }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(18px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-18px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes rowFade {
            from { opacity: 0; transform: translateY(7px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation-duration: .01ms !important; transition-duration: .01ms !important; scroll-behavior: auto !important; }
        }
        @media (max-width: 991.98px) {
            .sidebar { width: 215px; flex-basis: 215px; }
            .main-content { padding: 25px 20px; }
        }
        @media (max-width: 767.98px) {
            .app-layout { display: block; }
            .sidebar { width: 100%; min-height: auto; padding: 12px; }
            .sidebar-heading { display: none; }
            .sidebar .list-menu { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 4px; }
            .menu-link { margin: 0; padding: 11px 12px; font-size: 13px; }
            .main-content { padding: 24px 14px; }
            .page-heading { flex-direction: column; }
            .results-card-header { align-items: flex-start; padding: 20px; }
            .table-tools { flex-direction: column; padding: 16px 20px 8px; }
            .filter-select { width: 100%; }
            .table-responsive { padding: 12px 15px 20px; }
            .topbar { padding: 10px 16px; }
        }
        @media (max-width: 420px) {
            .sidebar .list-menu { grid-template-columns: 1fr 1fr; }
            .menu-link { gap: 8px; padding: 10px 8px; }
            .summary-number { font-size: 25px; }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark topbar">
    <a class="navbar-brand" href="/ims/public/admin/dashboard">
        <span class="brand-icon"><i class="fas fa-graduation-cap"></i></span> LMS
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto align-items-lg-center">
            <li class="nav-item"><a class="nav-link" href="/ims/public/admin/dashboard"><i class="fas fa-th-large mr-1"></i> Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="far fa-user-circle mr-1"></i> Profile</a></li>
            <li class="nav-item"><a class="nav-link text-warning" href="#"><i class="fas fa-sign-out-alt mr-1"></i> Logout</a></li>
        </ul>
    </div>
</nav>

<div class="app-layout">
    <aside class="sidebar">
        <div class="sidebar-heading">Administration</div>
        <div class="list-menu">
            <a href="/ims/public/admin/dashboard" class="menu-link"><i class="fas fa-th-large"></i> Dashboard</a>
            <a href="/ims/public/admin/students" class="menu-link"><i class="fas fa-user-graduate"></i> Students</a>
            <a href="/ims/public/admin/teachers" class="menu-link"><i class="fas fa-chalkboard-teacher"></i> Teachers</a>
            <a href="/ims/public/admin/courses" class="menu-link"><i class="fas fa-book-open"></i> Courses</a>
            <a href="/ims/public/admin/exams" class="menu-link"><i class="fas fa-file-alt"></i> Exams</a>
            <a href="/ims/public/admin/results" class="menu-link active"><i class="fas fa-chart-line"></i> Results</a>
            <a href="#" class="menu-link"><i class="fas fa-cog"></i> Settings</a>
            <a href="#" class="menu-link logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </aside>

    <main class="main-content">
        @php
            $resultsCount = count($results);
            $passCount = 0;
            $failCount = 0;
            $totalPercentage = 0;
            $validPercentageCount = 0;
        @endphp

        @foreach($results as $result)
            @php
                $summaryTotal = 0;
                foreach($exams as $summaryExam) {
                    if($summaryExam->id == $result->course_id) {
                        $summaryTotal = $summaryExam->total_marks;
                        break;
                    }
                }
                $summaryPercentage = $summaryTotal > 0 ? ($result->marks_obtained / $summaryTotal) * 100 : 0;
                if($summaryTotal > 0) {
                    $totalPercentage += $summaryPercentage;
                    $validPercentageCount++;
                }
                if($summaryPercentage >= 40) $passCount++;
                else $failCount++;
            @endphp
        @endforeach

        <div class="page-heading">
            <div>
                <div class="eyebrow">Academic overview</div>
                <h1>Results Dashboard</h1>
                <p class="page-subtitle">Manage student performance, grades, and examination results.</p>
            </div>
            <a href="/ims/public/admin/addresult" class="btn-add"><i class="fas fa-plus"></i> Add Result</a>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xl-3 mb-3">
                <div class="summary-card" style="animation-delay:.05s">
                    <div class="summary-top">
                        <span class="summary-label">Total Results</span>
                        <span class="summary-icon icon-purple"><i class="fas fa-clipboard-list"></i></span>
                    </div>
                    <div class="summary-number">{{ $resultsCount }}</div>
                    <div class="summary-note">Recorded examination results</div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 mb-3">
                <div class="summary-card" style="animation-delay:.12s">
                    <div class="summary-top">
                        <span class="summary-label">Passed</span>
                        <span class="summary-icon icon-green"><i class="fas fa-check-circle"></i></span>
                    </div>
                    <div class="summary-number">{{ $passCount }}</div>
                    <div class="summary-note">Students scoring 40% or above</div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 mb-3">
                <div class="summary-card" style="animation-delay:.19s">
                    <div class="summary-top">
                        <span class="summary-label">Failed</span>
                        <span class="summary-icon icon-red"><i class="fas fa-times-circle"></i></span>
                    </div>
                    <div class="summary-number">{{ $failCount }}</div>
                    <div class="summary-note">Students scoring below 40%</div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 mb-3">
                <div class="summary-card" style="animation-delay:.26s">
                    <div class="summary-top">
                        <span class="summary-label">Average Score</span>
                        <span class="summary-icon icon-amber"><i class="fas fa-chart-pie"></i></span>
                    </div>
                    <div class="summary-number">{{ $validPercentageCount > 0 ? number_format($totalPercentage / $validPercentageCount, 1) : '0.0' }}<small style="font-size:16px">%</small></div>
                    <div class="summary-note">Average percentage across results</div>
                </div>
            </div>
        </div>

        <section class="results-card">
            <div class="results-card-header">
                <div>
                    <h2><i class="fas fa-list-alt mr-2" style="color:#6366f1"></i>All Results</h2>
                    <p>Search, filter, and manage student records.</p>
                </div>
                <span class="badge badge-light p-2" id="visibleCount">{{ $resultsCount }} records</span>
            </div>

            <div class="table-tools">
                <div class="search-wrap">
                    <i class="fas fa-search"></i>
                    <input type="text" id="searchResult" class="form-control" placeholder="Search student, course, or exam..." aria-label="Search results">
                </div>
                <select class="form-control filter-select" id="statusFilter" aria-label="Filter by result status">
                    <option value="">All Statuses</option>
                    <option value="pass">Passed</option>
                    <option value="fail">Failed</option>
                </select>
            </div>

            <div class="table-responsive">
                <table class="table results-table" id="resultTable">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Student Name</th>
                            <th>Course</th>
                            <th>Exam</th>
                            <th>Marks</th>
                            <th>Total</th>
                            <th>Percentage</th>
                            <th>Grade</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $i = 1; @endphp
                    @forelse($results as $result)
                        @php
                            $studentName = '';
                            $courseName = '';
                            $examName = '';
                            $totalMarks = 0;
                            $examCourseId = null;

                            foreach($students as $student) {
                                if($student->id == $result->student_id) {
                                    $studentName = $student->name;
                                    break;
                                }
                            }

                            foreach($exams as $exam) {
                                if($exam->id == $result->course_id) {
                                    $examName = $exam->exam_name;
                                    $totalMarks = $exam->total_marks;
                                    $examCourseId = $exam->course_id;
                                    break;
                                }
                            }

                            foreach($courses as $course) {
                                if($course->id == $examCourseId) {
                                    $courseName = $course->name;
                                    break;
                                }
                            }

                            $percentage = $totalMarks > 0 ? ($result->marks_obtained / $totalMarks) * 100 : 0;

                            if($percentage >= 90) $grade = 'A+';
                            elseif($percentage >= 80) $grade = 'A';
                            elseif($percentage >= 70) $grade = 'B+';
                            elseif($percentage >= 60) $grade = 'B';
                            elseif($percentage >= 50) $grade = 'C';
                            elseif($percentage >= 40) $grade = 'D';
                            else $grade = 'F';

                            $status = $percentage >= 40 ? 'Pass' : 'Fail';
                        @endphp
                        <tr data-status="{{ strtolower($status) }}">
                            <td><span class="serial-number">{{ $i++ }}</span></td>
                            <td class="student-name">{{ $studentName ?: 'Unknown student' }}</td>
                            <td>{{ $courseName ?: '—' }}</td>
                            <td>{{ $examName ?: '—' }}</td>
                            <td class="marks">{{ $result->marks_obtained }}</td>
                            <td>{{ $totalMarks }}</td>
                            <td class="percentage-cell">
                                <span class="percentage-value">{{ number_format($percentage, 2) }}%</span>
                                <div class="progress-track">
                                    <div class="progress-fill" style="width:{{ min(100, max(0, $percentage)) }}%"></div>
                                </div>
                            </td>
                            <td><span class="grade-badge">{{ $grade }}</span></td>
                            <td>
                                @if($status == 'Pass')
                                    <span class="status-badge status-pass"><i class="fas fa-check mr-1"></i>Pass</span>
                                @else
                                    <span class="status-badge status-fail"><i class="fas fa-times mr-1"></i>Fail</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ url('admin/editresult/'.$result->id) }}" class="btn-action btn-edit" title="Edit result" aria-label="Edit result">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ url('admin/deleteresult/'.$result->id) }}"
                                       class="btn-action btn-delete" title="Delete result" aria-label="Delete result"
                                       onclick="return confirm('Are you sure you want to delete this result?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="no-results-row">
                            <td colspan="10" class="empty-state">
                                <i class="fas fa-folder-open fa-2x mb-3 d-block"></i>
                                <strong>No results available yet</strong><br>
                                Add a result to see student performance here.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div id="noMatches" class="empty-state" style="display:none">
                    <i class="fas fa-search fa-2x mb-3 d-block"></i>
                    <strong>No matching results</strong><br>
                    Try another search term or status filter.
                </div>
            </div>
        </section>
        <p class="text-center mt-4 mb-0" style="color:#9ca3af;font-size:12px">
            <i class="far fa-copyright mr-1"></i> {{ date('Y') }} LMS Admin Panel · Results Management
        </p>
    </main>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
(function () {
    const searchInput = document.getElementById('searchResult');
    const statusFilter = document.getElementById('statusFilter');
    const table = document.getElementById('resultTable');
    const rows = Array.from(table.querySelectorAll('tbody tr[data-status]'));
    const visibleCount = document.getElementById('visibleCount');
    const noMatches = document.getElementById('noMatches');

    function filterResults() {
        const query = searchInput.value.trim().toLowerCase();
        const selectedStatus = statusFilter.value.toLowerCase();
        let visible = 0;

        rows.forEach(function (row, index) {
            const text = row.innerText.toLowerCase();
            const status = row.dataset.status;
            const matchesSearch = text.includes(query);
            const matchesStatus = !selectedStatus || status === selectedStatus;
            const show = matchesSearch && matchesStatus;

            row.style.display = show ? '' : 'none';
            if (show) {
                visible++;
                row.style.animationDelay = Math.min(index * 20, 200) + 'ms';
            }
        });

        visibleCount.textContent = visible + (visible === 1 ? ' record' : ' records');
        noMatches.style.display = rows.length > 0 && visible === 0 ? 'block' : 'none';
    }

    searchInput.addEventListener('input', filterResults);
    statusFilter.addEventListener('change', filterResults);
})();
</script>
</body>
</html>
