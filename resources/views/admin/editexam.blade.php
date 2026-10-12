
<!doctype html>
<html lang="en">
<head>
    <title>Edit Exam - LMS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        :root {
            --primary: #6558e8;
            --secondary: #8b5cf6;
            --muted: #777995;
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #f4f3ff, #f5f8ff, #fdf4ff);
            overflow-x: hidden;
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
            filter: blur(3px);
            opacity: .27;
            animation: float 11s ease-in-out infinite alternate;
        }

        .orb1 {
            width: 300px;
            height: 300px;
            background: #8b5cf6;
            top: -90px;
            left: -80px;
        }

        .orb2 {
            width: 250px;
            height: 250px;
            background: #60a5fa;
            right: -70px;
            top: 35%;
            animation-delay: -4s;
        }

        .orb3 {
            width: 180px;
            height: 180px;
            background: #f0abfc;
            bottom: -50px;
            left: 35%;
            animation-delay: -7s;
        }

        @keyframes float {
            from {
                transform: translate(0, 0) scale(1);
            }
            to {
                transform: translate(35px, -40px) scale(1.12);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-25px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Navbar */
        .main-navbar {
            background: linear-gradient(110deg, #5145cd, #8056e8, #4f8df9);
            padding: 13px 25px;
            box-shadow: 0 5px 22px rgba(78, 65, 190, .22);
            animation: slideDown .7s ease both;
        }

        .navbar-brand {
            color: #fff !important;
            font-size: 25px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .brand-icon {
            display: inline-flex;
            width: 38px;
            height: 38px;
            justify-content: center;
            align-items: center;
            margin-right: 8px;
            border-radius: 12px;
            background: rgba(255,255,255,.2);
        }

        .navbar-nav .nav-link {
            color: rgba(255,255,255,.92) !important;
            margin-left: 12px;
            transition: .3s;
        }

        .navbar-nav .nav-link:hover {
            color: #ffe58a !important;
            transform: translateY(-2px);
        }

        /* Page Layout */
        .page-container {
            max-width: 850px;
            margin: 40px auto;
            padding: 0 18px;
            animation: fadeUp .8s ease both;
        }

        .page-heading {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .heading-icon {
            display: flex;
            flex-shrink: 0;
            width: 58px;
            height: 58px;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
            border-radius: 18px;
            background: linear-gradient(135deg, #6558e8, #a855f7);
            color: white;
            font-size: 24px;
            box-shadow: 0 8px 20px rgba(101,88,232,.3);
        }

        .page-heading h2 {
            font-size: 28px;
            font-weight: 800;
            margin: 0 0 5px;
            color: #282747;
        }

        .page-heading p {
            margin: 0;
            color: var(--muted);
            font-size: 14px;
        }

        /* Form Card */
        .exam-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            background: rgba(255,255,255,.95);
            box-shadow: 0 15px 45px rgba(49,43,125,.12);
            transition: box-shadow .3s;
        }

        .exam-card:hover {
            box-shadow: 0 20px 55px rgba(49,43,125,.17);
        }

        .exam-card-header {
            padding: 25px 30px;
            color: white;
            background: linear-gradient(110deg, #5145cd, #8056e8, #578af5);
            position: relative;
            overflow: hidden;
        }

        .exam-card-header::after {
            content: "";
            position: absolute;
            width: 170px;
            height: 170px;
            right: -35px;
            top: -85px;
            border: 25px solid rgba(255,255,255,.09);
            border-radius: 50%;
            pointer-events: none;
        }

        .exam-card-header h3 {
            font-size: 23px;
            font-weight: 800;
            margin: 0 0 6px;
            position: relative;
            z-index: 1;
        }

        .exam-card-header p {
            margin: 0;
            font-size: 13px;
            color: rgba(255,255,255,.82);
            position: relative;
            z-index: 1;
        }

        .exam-card-body {
            padding: 30px;
        }

        .section-label {
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 1px;
            color: #6558d9;
            margin: 5px 0 18px;
        }

        .section-label i {
            margin-right: 7px;
        }

        .form-group {
            margin-bottom: 23px;
            animation: fadeUp .65s ease both;
        }

        .form-group label {
            color: #393957;
            font-weight: 700;
            font-size: 13px;
            margin-bottom: 9px;
        }

        .form-group label i {
            color: #7669eb;
            margin-right: 6px;
            width: 16px;
            text-align: center;
        }

        .form-control {
            height: 47px;
            border: 1px solid #e4e5f3;
            border-radius: 10px;
            background: #fafaff;
            color: #30304f;
            font-size: 14px;
            padding: 10px 14px;
            transition: border-color .3s, box-shadow .3s,
                        background .3s, transform .3s;
        }

        .form-control:focus {
            border-color: #8275ff;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(108,99,255,.12);
            outline: none;
            transform: translateY(-1px);
        }

        .form-control:hover {
            border-color: #c4bfff;
        }

        select.form-control,
        input[type="date"].form-control,
        input[type="time"].form-control {
            cursor: pointer;
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, #e9e7ff, #f3f3fb, transparent);
            margin: 8px 0 25px;
        }

        /* Buttons */
        .form-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            padding-top: 8px;
        }

        .btn-update {
            border: none;
            border-radius: 10px;
            padding: 12px 23px;
            font-weight: 750;
            font-size: 14px;
            color: white;
            background: linear-gradient(110deg, #6558e8, #8b5cf6);
            box-shadow: 0 7px 18px rgba(101,88,232,.27);
            transition: all .3s ease;
        }

        .btn-update:hover {
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 11px 25px rgba(101,88,232,.38);
            background: linear-gradient(110deg, #5145cd, #7845e8);
        }

        .btn-update:active {
            transform: scale(.98);
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #e2e2f1;
            border-radius: 10px;
            padding: 12px 22px;
            font-weight: 700;
            font-size: 14px;
            color: #60617e;
            background: #fff;
            transition: .3s;
        }

        .btn-back:hover {
            background: #f0efff;
            color: #6558e8;
            border-color: #c9c3ff;
            transform: translateY(-3px);
        }

        .alert {
            border: none;
            border-radius: 10px;
            animation: fadeUp .4s ease both;
        }

        .footer-note {
            text-align: center;
            padding: 22px 0 5px;
            color: #9293ad;
            font-size: 12px;
        }

        @media (max-width: 576px) {
            .main-navbar {
                padding: 11px 15px;
            }

            .page-container {
                margin: 25px auto;
                padding: 0 12px;
            }

            .page-heading h2 {
                font-size: 23px;
            }

            .heading-icon {
                width: 49px;
                height: 49px;
                font-size: 20px;
            }

            .exam-card-header {
                padding: 22px;
            }

            .exam-card-body {
                padding: 22px 18px;
            }

            .form-actions {
                flex-direction: column;
            }

            .form-actions .btn {
                width: 100%;
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
<div class="background">
    <div class="orb orb1"></div>
    <div class="orb orb2"></div>
    <div class="orb orb3"></div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark main-navbar">
    <a class="navbar-brand" href="/ims/public/admin/dashboard">
        <span class="brand-icon">
            <i class="fas fa-graduation-cap"></i>
        </span>
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

<!-- Main Page -->
<div class="page-container">

    <!-- Heading -->
    <div class="page-heading">
        <div class="heading-icon">
            <i class="fas fa-edit"></i>
        </div>

        <div>
            <h2>Edit Exam</h2>
            <p>Update the examination details and schedule.</p>
        </div>
    </div>

    <!-- Form Card -->
    <div class="card exam-card">

        <div class="exam-card-header">
            <h3><i class="fas fa-clipboard-check mr-2"></i> Update Exam Details</h3>
            <p>Modify the information below and save your changes.</p>
        </div>

        <div class="exam-card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session('success') }}
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

            <form action="{{ url('/admin/updateexam/'.$exam->id) }}"
                  method="POST">
                @csrf

                <!-- Course Information -->
                <div class="section-label">
                    <i class="fas fa-book-open"></i>
                    Course Information
                </div>

                <div class="form-group">
                    <label for="course_id">
                        <i class="fas fa-graduation-cap"></i>
                        Course Name
                    </label>

                    <select name="course_id" id="course_id"
                            class="form-control" required>
                        <option value="">-- Select Course Name --</option>

                        @foreach($courses as $course)
                            <option value="{{ $course->id }}"
                                {{ old('course_id', $exam->course_id) == $course->id ? 'selected' : '' }}>
                                {{ $course->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exam_name">
                        <i class="fas fa-file-alt"></i>
                        Exam Name
                    </label>

                    <input type="text"
                           name="exam_name"
                           id="exam_name"
                           class="form-control"
                           placeholder="Enter exam name"
                           value="{{ old('exam_name', $exam->exam_name) }}"
                           required>
                </div>

                <div class="divider"></div>

                <!-- Schedule -->
                <div class="section-label">
                    <i class="fas fa-calendar-alt"></i>
                    Exam Schedule
                </div>

                <div class="form-group">
                    <label for="exam_date">
                        <i class="far fa-calendar-check"></i>
                        Exam Date
                    </label>

                    <input type="date"
                           name="exam_date"
                           id="exam_date"
                           class="form-control"
                           value="{{ old('exam_date', $exam->exam_date) }}"
                           required>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="start_time">
                                <i class="far fa-clock"></i>
                                Start Time
                            </label>

                            <input type="time"
                                   name="start_time"
                                   id="start_time"
                                   class="form-control"
                                   value="{{ old('start_time', $exam->start_time) }}"
                                   required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="end_time">
                                <i class="fas fa-clock"></i>
                                End Time
                            </label>

                            <input type="time"
                                   name="end_time"
                                   id="end_time"
                                   class="form-control"
                                   value="{{ old('end_time', $exam->end_time) }}"
                                   required>

                            <small id="timeHint"
                                   style="font-size:11px;"></small>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- Exam Settings -->
                <div class="section-label">
                    <i class="fas fa-sliders-h"></i>
                    Exam Settings
                </div>

                <div class="form-group">
                    <label for="exam_type">
                        <i class="fas fa-tasks"></i>
                        Exam Type
                    </label>

                    <select name="exam_type" id="exam_type"
                            class="form-control" required>
                        <option value="">-- Select Exam Type --</option>

                        <option value="Internal"
                            {{ old('exam_type', $exam->exam_type) == 'Internal' ? 'selected' : '' }}>
                            Internal
                        </option>

                        <option value="Mid Semester"
                            {{ old('exam_type', $exam->exam_type) == 'Mid Semester' ? 'selected' : '' }}>
                            Mid Semester
                        </option>

                        <option value="Practical"
                            {{ old('exam_type', $exam->exam_type) == 'Practical' ? 'selected' : '' }}>
                            Practical
                        </option>

                        <option value="Final"
                            {{ old('exam_type', $exam->exam_type) == 'Final' ? 'selected' : '' }}>
                            Final
                        </option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="total_marks">
                                <i class="fas fa-star"></i>
                                Total Marks
                            </label>

                            <input type="number"
                                   name="total_marks"
                                   id="total_marks"
                                   class="form-control"
                                   placeholder="Enter total marks"
                                   min="1"
                                   value="{{ old('total_marks', $exam->total_marks) }}"
                                   required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="semester">
                                <i class="fas fa-layer-group"></i>
                                Semester
                            </label>

                            <input type="text"
                                   name="semester"
                                   id="semester"
                                   class="form-control"
                                   placeholder="e.g. Semester 1"
                                   value="{{ old('semester', $exam->semester) }}"
                                   required>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="divider"></div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-update">
                        <i class="fas fa-save mr-2"></i>
                        Update Exam
                    </button>

                    <a href="{{ url('/admin/exams') }}"
                       class="btn btn-back">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Back to Exams
                    </a>
                </div>

            </form>
        </div>
    </div>

    <div class="footer-note">
        <i class="fas fa-shield-alt mr-1"></i>
        LMS Exam Management System
    </div>

</div>

<!-- Bootstrap Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    // Validate exam timing
    const startTime = document.getElementById('start_time');
    const endTime = document.getElementById('end_time');
    const timeHint = document.getElementById('timeHint');

    function validateExamTime() {
        if (startTime.value && endTime.value) {
            if (endTime.value <= startTime.value) {
                endTime.setCustomValidity(
                    'End time must be later than start time.'
                );
                timeHint.textContent =
                    'End time must be later than start time.';
                timeHint.style.color = '#dc3545';
            } else {
                endTime.setCustomValidity('');
                timeHint.textContent = 'Exam time looks good.';
                timeHint.style.color = '#15945a';
            }
        } else {
            endTime.setCustomValidity('');
            timeHint.textContent = '';
        }
    }

    startTime.addEventListener('change', validateExamTime);
    endTime.addEventListener('change', validateExamTime);

    document.querySelector('form').addEventListener('submit', function (event) {
        validateExamTime();

        if (!this.checkValidity()) {
            event.preventDefault();
            this.reportValidity();
        }
    });

    validateExamTime();
</script>

</body>
</html>
