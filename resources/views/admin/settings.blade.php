
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Settings | LMS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          rel="stylesheet">

    <style>
        :root {
            --primary: #5b5cf0;
            --secondary: #8b5cf6;
            --dark: #172033;
            --muted: #7b8498;
            --border: #e8eaf2;
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: var(--dark);
            background: linear-gradient(135deg, #eef2ff, #f8f7ff, #e8f4ff);
            overflow-x: hidden;
        }

        /* Animated background */
        .background-shape {
            position: fixed;
            border-radius: 50%;
            filter: blur(2px);
            opacity: 0.5;
            pointer-events: none;
            z-index: 0;
            animation: float 8s ease-in-out infinite;
        }

        .shape-one {
            width: 300px;
            height: 300px;
            background: #c7d2fe;
            top: -100px;
            left: -90px;
        }

        .shape-two {
            width: 350px;
            height: 350px;
            background: #ddd6fe;
            right: -100px;
            bottom: -120px;
            animation-delay: 2s;
        }

        .shape-three {
            width: 120px;
            height: 120px;
            background: #bfdbfe;
            right: 15%;
            top: 15%;
            animation-delay: 1s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-25px) rotate(8deg);
            }
        }

        /* Main layout */
        .settings-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 35px 15px;
            position: relative;
            z-index: 1;
        }

        .settings-card {
            width: 100%;
            max-width: 650px;
            background: rgba(255, 255, 255, 0.94);
            border: 1px solid rgba(255, 255, 255, 0.9);
            border-radius: 24px;
            padding: 35px 42px;
            box-shadow: 0 25px 70px rgba(58, 65, 130, 0.13);
            animation: cardEnter 0.8s ease both;
            transition: box-shadow 0.3s ease;
        }

        .settings-card:hover {
            box-shadow: 0 30px 80px rgba(58, 65, 130, 0.18);
        }

        @keyframes cardEnter {
            from {
                opacity: 0;
                transform: translateY(35px) scale(0.97);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Back link */
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            text-decoration: none;
            color: #626b82;
            font-size: 14px;
            font-weight: 600;
            padding: 10px 14px;
            border-radius: 10px;
            background: #f5f6fb;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            color: var(--primary);
            background: #ededff;
            transform: translateX(-4px);
        }

        /* Header */
        .settings-header {
            text-align: center;
            margin: 24px 0 30px;
        }

        .profile-icon {
            width: 86px;
            height: 86px;
            margin: 0 auto 18px;
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 35px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            box-shadow: 0 12px 28px rgba(91, 92, 240, 0.30);
            animation: iconFloat 3s ease-in-out infinite;
        }

        @keyframes iconFloat {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-7px);
            }
        }

        .settings-header h2 {
            font-size: 29px;
            font-weight: 800;
            letter-spacing: -0.8px;
            margin-bottom: 9px;
        }

        .settings-header p {
            color: var(--muted);
            font-size: 14px;
            margin: 0;
        }

        .section-label {
            display: flex;
            align-items: center;
            gap: 9px;
            color: #68718a;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.3px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .section-label i {
            color: var(--primary);
        }

        /* Form controls */
        .form-label {
            color: #30394e;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 9px;
        }

        .input-wrap {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9aa2b5;
            z-index: 2;
            transition: color 0.3s ease;
        }

        .form-control {
            height: 51px;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 12px 45px 12px 45px;
            font-size: 14px;
            color: #283147;
            background: #fafbfe;
            transition: border-color 0.3s ease,
                        box-shadow 0.3s ease,
                        background 0.3s ease;
        }

        .form-control::placeholder {
            color: #a7adbd;
        }

        .form-control:hover {
            border-color: #c7c8fb;
        }

        .form-control:focus {
            background: #fff;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(91, 92, 240, 0.11);
            outline: none;
        }

        .input-wrap:focus-within .input-icon {
            color: var(--primary);
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            border: 0;
            background: transparent;
            color: #9199ac;
            padding: 5px;
            cursor: pointer;
            z-index: 3;
            transition: color 0.2s ease;
        }

        .toggle-password:hover {
            color: var(--primary);
        }

        .password-note {
            color: #8991a4;
            font-size: 12px;
            margin-top: 8px;
        }

        /* Alerts */
        .alert {
            border: 0;
            border-radius: 12px;
            font-size: 14px;
            animation: cardEnter 0.4s ease both;
        }

        .alert-success {
            background: #e9fbf1;
            color: #147a46;
        }

        .alert-danger {
            background: #fff0f1;
            color: #b42336;
        }

        /* Save button */
        .btn-save {
            position: relative;
            width: 100%;
            min-height: 53px;
            border: 0;
            border-radius: 12px;
            margin-top: 10px;
            overflow: hidden;
            background: linear-gradient(110deg, var(--primary), var(--secondary));
            color: #fff;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.2px;
            box-shadow: 0 9px 22px rgba(91, 92, 240, 0.23);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .btn-save::before {
            content: "";
            position: absolute;
            top: 0;
            left: -120%;
            width: 70%;
            height: 100%;
            background: linear-gradient(
                100deg,
                transparent,
                rgba(255, 255, 255, 0.25),
                transparent
            );
            transform: skewX(-20deg);
            transition: left 0.6s ease;
        }

        .btn-save:hover::before {
            left: 150%;
        }

        .btn-save:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 30px rgba(91, 92, 240, 0.35);
            color: #fff;
        }

        .btn-save:active {
            transform: translateY(0) scale(0.99);
        }

        .security-note {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 7px;
            color: #9299aa;
            font-size: 12px;
            margin-top: 20px;
        }

        .security-note i {
            color: #19a56b;
        }

        .footer-text {
            text-align: center;
            color: #969db0;
            font-size: 11px;
            margin-top: 20px;
            letter-spacing: 0.3px;
        }

        /* Mobile responsive */
        @media (max-width: 576px) {
            .settings-wrapper {
                padding: 18px 12px;
            }

            .settings-card {
                padding: 24px 19px;
                border-radius: 19px;
            }

            .settings-header {
                margin: 22px 0 25px;
            }

            .settings-header h2 {
                font-size: 25px;
            }

            .profile-icon {
                width: 74px;
                height: 74px;
                border-radius: 22px;
                font-size: 30px;
            }

            .form-control {
                height: 48px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>

<body>

    <!-- Background decoration -->
    <div class="background-shape shape-one"></div>
    <div class="background-shape shape-two"></div>
    <div class="background-shape shape-three"></div>

    <div class="container settings-wrapper">

        <div class="settings-card">

            <!-- Back Button -->
            <a href="{{ url('/admin/dashboard') }}" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i>
                Back to Dashboard
            </a>

            <!-- Header -->
            <div class="settings-header">

                <div class="profile-icon">
                    <i class="fa-solid fa-user-shield"></i>
                </div>

                <h2>Admin Settings</h2>

                <p>Manage your administrator account securely</p>

            </div>

            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show"
                     role="alert">
                    <i class="fa-solid fa-circle-check me-2"></i>
                    {{ session('success') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close"></button>
                </div>
            @endif

            <!-- Error Messages -->
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <strong>
                        <i class="fa-solid fa-circle-exclamation me-2"></i>
                        Please correct the following:
                    </strong>

                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="section-label">
                <i class="fa-solid fa-sliders"></i>
                Account Information
            </div>

            <form action="{{ url('/admin/settings/update') }}"
                  method="POST">

                @csrf

                <!-- Admin ID -->
                <div class="mb-4">
                    <label for="adminid" class="form-label">
                        Admin ID
                    </label>

                    <div class="input-wrap">
                        <i class="fa-solid fa-id-badge input-icon"></i>

                        <input
                            type="text"
                            id="adminid"
                            name="adminid"
                            class="form-control"
                            value="{{ old('adminid', $userData->adminid ?? '') }}"
                            placeholder="Enter your admin ID"
                            autocomplete="username"
                            required
                        >
                    </div>
                </div>

                <div class="section-label mt-4">
                    <i class="fa-solid fa-shield-halved"></i>
                    Change Password
                </div>

                <!-- Current Password -->
                <div class="mb-4">
                    <label for="current_password" class="form-label">
                        Current Password
                    </label>

                    <div class="input-wrap">
                        <i class="fa-solid fa-lock input-icon"></i>

                        <input
                            type="password"
                            id="current_password"
                            name="current_password"
                            class="form-control"
                            placeholder="Enter current password"
                            autocomplete="current-password"
                            required
                        >

                        <button type="button"
                                class="toggle-password"
                                data-target="current_password"
                                aria-label="Show current password"
                                aria-pressed="false">
                            <i class="fa-regular fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- New Password -->
                <div class="mb-4">
                    <label for="password" class="form-label">
                        New Password
                    </label>

                    <div class="input-wrap">
                        <i class="fa-solid fa-key input-icon"></i>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control"
                            placeholder="Enter new password"
                            autocomplete="new-password"
                            minlength="8"
                            required
                        >

                        <button type="button"
                                class="toggle-password"
                                data-target="password"
                                aria-label="Show new password"
                                aria-pressed="false">
                            <i class="fa-regular fa-eye"></i>
                        </button>
                    </div>

                    <div class="password-note">
                        <i class="fa-solid fa-circle-info me-1"></i>
                        Use at least 8 characters.
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation"
                           class="form-label">
                        Confirm New Password
                    </label>

                    <div class="input-wrap">
                        <i class="fa-solid fa-lock input-icon"></i>

                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="form-control"
                            placeholder="Re-enter your new password"
                            autocomplete="new-password"
                            minlength="8"
                            required
                        >

                        <button type="button"
                                class="toggle-password"
                                data-target="password_confirmation"
                                aria-label="Show confirm password"
                                aria-pressed="false">
                            <i class="fa-regular fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Save Button -->
                <button type="submit" class="btn-save">
                    <i class="fa-solid fa-floppy-disk me-2"></i>
                    Save Changes
                </button>

            </form>

            <div class="security-note">
                <i class="fa-solid fa-shield-halved"></i>
                Your account security matters
            </div>

            <div class="footer-text">
                LEARNING MANAGEMENT SYSTEM &bull; ADMIN PANEL
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function () {
                const input = document.getElementById(this.dataset.target);
                const icon = this.querySelector('i');

                const showPassword = input.type === 'password';

                input.type = showPassword ? 'text' : 'password';

                icon.classList.toggle('fa-eye', !showPassword);
                icon.classList.toggle('fa-eye-slash', showPassword);
                icon.classList.toggle('fa-regular', !showPassword);
                icon.classList.toggle('fa-solid', showPassword);

                this.setAttribute(
                    'aria-label',
                    showPassword ? 'Hide password' : 'Show password'
                );

                this.setAttribute('aria-pressed', String(showPassword));
            });
        });

        // Confirm password before submission
        const form = document.querySelector('form');
        const password = document.getElementById('password');
        const confirmation = document.getElementById('password_confirmation');

        function checkPasswordMatch() {
            if (!confirmation.value) {
                confirmation.setCustomValidity('');
                return;
            }

            confirmation.setCustomValidity(
                password.value === confirmation.value
                    ? ''
                    : 'The new passwords do not match.'
            );
        }

        password.addEventListener('input', checkPasswordMatch);
        confirmation.addEventListener('input', checkPasswordMatch);

        form.addEventListener('submit', function (event) {
            checkPasswordMatch();

            if (!form.checkValidity()) {
                event.preventDefault();
                form.reportValidity();
            }
        });
    </script>

</body>
</html>
