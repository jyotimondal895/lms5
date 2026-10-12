<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS - Add Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            background: #f4f6f9;
            color: #343a40;
            font-family: Arial, Helvetica, sans-serif;
            overflow-x: hidden;
        }
        .navbar {
            background: #2457c5;
            padding: 13px 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,.08);
        }
        .navbar-brand { font-size: 23px; font-weight: 700; letter-spacing: .3px; }
        .navbar .nav-link { color: rgba(255,255,255,.9) !important; margin-left: 10px; }
        .layout { display: flex; min-height: calc(100vh - 60px); }
        .sidebar {
            width: 235px;
            flex: 0 0 235px;
            background: #252d3a;
            padding: 22px 12px;
            color: #fff;
        }
        .sidebar-title {
            margin: 0 10px 18px;
            padding: 5px 8px 17px;
            border-bottom: 1px solid rgba(255,255,255,.14);
            font-size: 17px;
            font-weight: 600;
        }
        .menu-link {
            display: block;
            padding: 12px 14px;
            margin: 4px 0;
            border-radius: 5px;
            color: #d6dbe3;
            text-decoration: none !important;
            transition: background .2s ease, color .2s ease;
        }
        .menu-link:hover { background: #343f50; color: #fff; }
        .menu-link.active { background: #2457c5; color: #fff; }
        .menu-link span { display: inline-block; width: 28px; }
        .main { flex: 1; min-width: 0; padding: 30px; animation: appear .35s ease-out; }
        .page-title { margin-bottom: 5px; font-size: 27px; font-weight: 700; color: #273142; }
        .page-subtitle { margin-bottom: 24px; color: #78818f; font-size: 14px; }
        .form-card {
            max-width: 1100px;
            margin: 0 auto;
            border: 1px solid #e1e5eb;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 3px 12px rgba(31,45,61,.05);
            overflow: hidden;
        }
        .form-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 18px 24px;
            background: #fff;
            border-bottom: 1px solid #e8ebf0;
        }
        .form-card-header h2 { margin: 0; font-size: 19px; font-weight: 700; color: #303a49; }
        .form-card-body { padding: 25px; }
        .section-label {
            margin: 0 0 18px;
            padding-bottom: 10px;
            border-bottom: 1px solid #edf0f4;
            color: #2457c5;
            font-size: 14px;
            font-weight: 700;
        }
        .form-row { row-gap: 3px; }
        .form-group { margin-bottom: 18px; }
        label { margin-bottom: 7px; font-size: 13px; font-weight: 600; color: #424b57; }
        .required { color: #dc3545; }
        .form-control {
            height: 42px;
            border: 1px solid #d8dee7;
            border-radius: 5px;
            background: #fff;
            font-size: 14px;
            box-shadow: none;
            transition: border-color .2s ease, box-shadow .2s ease;
        }
        textarea.form-control { height: auto; }
        .form-control:focus {
            border-color: #80a7f5;
            box-shadow: 0 0 0 3px rgba(36,87,197,.10);
        }
        .form-control[readonly] { background: #f3f5f8; color: #596273; }
        .help-text { display: block; margin-top: 6px; color: #7c8592; font-size: 12px; }
        .preview-box {
            height: 42px;
            display: flex;
            align-items: center;
            padding: 0 12px;
            border: 1px solid #e1e5eb;
            border-radius: 5px;
            background: #f8f9fb;
            color: #6c757d;
            font-size: 14px;
        }
        .preview-box.ready { color: #2457c5; font-weight: 700; }
        .preview-box.pass { color: #218838; background: #f0faf2; border-color: #c9e8d0; }
        .preview-box.fail { color: #c82333; background: #fff4f4; border-color: #f2c7cc; }
        .form-actions {
            display: flex;
            justify-content: flex-end;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
            padding-top: 20px;
            border-top: 1px solid #edf0f4;
        }
        .btn { min-width: 100px; border-radius: 5px; font-size: 14px; font-weight: 600; transition: background .2s ease, transform .2s ease; }
        .btn:hover { transform: translateY(-1px); }
        .btn-primary { background: #2457c5; border-color: #2457c5; }
        .btn-primary:hover { background: #1d49a7; border-color: #1d49a7; }
        .alert { border-radius: 5px; font-size: 14px; }
        @keyframes appear { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }
        @media (max-width: 767px) {
            .layout { display: block; }
            .sidebar { width: 100%; padding: 10px; }
            .sidebar-title { display: none; }
            .menu-list { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 4px; }
            .menu-link { margin: 0; padding: 10px; font-size: 13px; }
            .main { padding: 20px 12px; }
            .form-card-header, .form-card-body { padding: 17px; }
            .form-card-header { align-items: flex-start; flex-direction: column; }
            .form-card-header .btn { align-self: flex-start; }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation-duration: .01ms !important; transition-duration: .01ms !important; }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="/ims/public/admin/dashboard">LMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="/ims/public/admin/dashboard">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
            <li class="nav-item"><a class="nav-link text-warning" href="#">Logout</a></li>
        </ul>
    </div>
</nav>

<div class="layout">
    <aside class="sidebar">
        <h4 class="sidebar-title">LMS Menu</h4>
        <div class="menu-list">
            <a href="/ims/public/admin/dashboard" class="menu-link"><span>🏠</span>Dashboard</a>
            <a href="/ims/public/admin/students" class="menu-link"><span>👨‍🎓</span>Students</a>
            <a href="/ims/public/admin/teachers" class="menu-link"><span>👨‍🏫</span>Teachers</a>
            <a href="/ims/public/admin/courses" class="menu-link"><span>📚</span>Courses</a>
            <a href="/ims/public/admin/exams" class="menu-link"><span>📝</span>Exams</a>
            <a href="/ims/public/admin/results" class="menu-link active"><span>📈</span>Results</a>
            <a href="#" class="menu-link"><span>⚙️</span>Settings</a>
            <a href="#" class="menu-link"><span>↪</span>Logout</a>
        </div>
    </aside>

    <main class="main">
        <h1 class="page-title">Add Result</h1>
        <p class="page-subtitle">Enter student exam details and marks below.</p>

        <section class="form-card">
            <div class="form-card-header">
                <h2>Result Information</h2>
                <a href="/ims/public/admin/results" class="btn btn-outline-secondary"><span aria-hidden="true">←</span> Back to Results</a>
            </div>
            <div class="form-card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>Please fix the following errors:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('/admin/addresult') }}" method="POST" id="resultForm">
                    @csrf

                    <h3 class="section-label">Student & Examination Details</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="student_id">Student <span class="required">*</span></label>
                            <select name="student_id" id="student_id" class="form-control" required>
                                <option value="">-- Select Student --</option>
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}" {{ old('student_id') == $student->id ? 'selected' : '' }}>
                                        {{ $student->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="course_id">Course <span class="required">*</span></label>
                            <select name="course_name" id="course_id" class="form-control" required>
                                <option value="">-- Select Course --</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
                                        {{ $course->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exam_name">Exam Name</label>
                            <input type="text" name="exam_name" id="exam_name" class="form-control"
                                   value="{{ old('exam_name') }}" placeholder="Enter exam name">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exam_id">Exam <span class="required">*</span></label>
                            <select name="course_id" id="exam_id" class="form-control" required>
                                <option value="">-- Select Exam --</option>
                                @foreach($exams as $exam)
                                    <option value="{{ $exam->id }}" data-total="{{ $exam->total_marks }}"
                                        {{ old('exam_id') == $exam->id ? 'selected' : '' }}>
                                        {{ $exam->exam_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="semester">Semester</label>
                            <input type="text" name="semester" id="semester" class="form-control"
                                   value="{{ old('semester') }}" placeholder="e.g. Semester 1">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="total_marks">Total Marks</label>
                            <input type="number" id="total_marks" name="total_marks" class="form-control"
                                   placeholder="Auto-filled from selected exam" readonly>
                        </div>
                    </div>

                    <h3 class="section-label mt-3">Marks & Result Preview</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="marks_obtained">Marks Obtained <span class="required">*</span></label>
                            <input type="number" name="marks_obtained" id="marks_obtained" class="form-control"
                                   value="{{ old('marks_obtained') }}" placeholder="Enter marks obtained"
                                   min="0" step="any" required>
                            <small class="help-text">Marks cannot be greater than the total marks.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Percentage</label>
                            <div class="preview-box" id="percentage">Will be calculated automatically</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Grade</label>
                            <div class="preview-box" id="grade">—</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Status</label>
                            <div class="preview-box" id="status">—</div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <a href="/ims/public/admin/results" class="btn btn-secondary">Cancel</a>
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                        <button type="submit" class="btn btn-primary">Save Result</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
(function () {
    const examSelect = document.getElementById('exam_id');
    const totalInput = document.getElementById('total_marks');
    const marksInput = document.getElementById('marks_obtained');
    const percentageBox = document.getElementById('percentage');
    const gradeBox = document.getElementById('grade');
    const statusBox = document.getElementById('status');

    function clearPreview() {
        percentageBox.textContent = 'Will be calculated automatically';
        gradeBox.textContent = '—';
        statusBox.textContent = '—';
        [percentageBox, gradeBox, statusBox].forEach(function (el) {
            el.classList.remove('ready', 'pass', 'fail');
        });
    }

    function updateTotal() {
        const option = examSelect.options[examSelect.selectedIndex];
        totalInput.value = option && option.dataset.total ? option.dataset.total : '';
        marksInput.max = totalInput.value || '';
        calculateResult();
    }

    function calculateResult() {
        const total = parseFloat(totalInput.value);
        let marks = parseFloat(marksInput.value);

        if (!total || Number.isNaN(marks) || marksInput.value.trim() === '') {
            clearPreview();
            return;
        }
        if (marks < 0) marks = 0;
        if (marks > total) {
            marks = total;
            marksInput.value = total;
        }

        const percentage = (marks / total) * 100;
        let grade = 'F';
        if (percentage >= 90) grade = 'A+';
        else if (percentage >= 80) grade = 'A';
        else if (percentage >= 70) grade = 'B+';
        else if (percentage >= 60) grade = 'B';
        else if (percentage >= 50) grade = 'C';
        else if (percentage >= 40) grade = 'D';

        const passed = percentage >= 40;
        percentageBox.textContent = percentage.toFixed(2) + '%';
        gradeBox.textContent = grade;
        statusBox.textContent = passed ? 'Pass' : 'Fail';

        [percentageBox, gradeBox].forEach(function (el) {
            el.classList.add('ready');
        });
        statusBox.classList.remove('pass', 'fail');
        statusBox.classList.add('ready', passed ? 'pass' : 'fail');
    }

    examSelect.addEventListener('change', updateTotal);
    marksInput.addEventListener('input', calculateResult);

    document.getElementById('resultForm').addEventListener('reset', function () {
        window.setTimeout(function () {
            totalInput.value = '';
            clearPreview();
        }, 0);
    });

    if (examSelect.value) updateTotal();
    else if (marksInput.value) calculateResult();
})();
</script>
</body>
</html>
