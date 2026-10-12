
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Login</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e3a8a, #6366f1);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 430px;
        }

        .brand {
            text-align: center;
            color: white;
            margin-bottom: 25px;
        }

        .brand-icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 22px;
            font-size: 32px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .brand h2 {
            font-size: 27px;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .brand p {
            font-size: 14px;
            color: #dbeafe;
            margin: 0;
        }

        .login-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);
        }

        .login-title {
            font-size: 25px;
            font-weight: 700;
            color: #172554;
            margin-bottom: 8px;
        }

        .login-subtitle {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 27px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            font-size: 13px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 9px;
        }

        .input-group {
            border: 1px solid #dbe3ef;
            border-radius: 10px;
            overflow: hidden;
            background: #f8fafc;
            transition: 0.3s;
        }

        .input-group:focus-within {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.12);
            background: #fff;
        }

        .input-group-text {
            background: transparent;
            border: none;
            color: #64748b;
            padding-left: 15px;
        }

        .form-control {
            height: 48px;
            border: none;
            background: transparent;
            font-size: 14px;
            box-shadow: none !important;
        }

        .form-control:focus {
            background: transparent;
        }

        .password-toggle {
            border: none;
            background: transparent;
            color: #64748b;
            padding: 0 15px;
            cursor: pointer;
            outline: none;
        }

        .password-toggle:focus {
            outline: 2px solid #6366f1;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            margin-bottom: 24px;
        }

        .remember-label {
            color: #475569;
            cursor: pointer;
            margin: 0;
        }

        .remember-label input {
            margin-right: 5px;
            accent-color: #4f46e5;
        }

        .login-btn {
            width: 100%;
            height: 49px;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.3px;
            background: linear-gradient(135deg, #4f46e5, #2563eb);
            transition: 0.3s;
            box-shadow: 0 7px 16px rgba(79, 70, 229, 0.22);
        }

        .login-btn:hover {
            background: linear-gradient(135deg, #4338ca, #1d4ed8);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .security-note {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 7px;
            margin-top: 23px;
            color: #64748b;
            font-size: 12px;
        }

        .security-note i {
            color: #16a34a;
        }

        .footer-text {
            text-align: center;
            margin-top: 23px;
            color: #dbeafe;
            font-size: 12px;
        }

        .alert {
            border-radius: 9px;
            font-size: 13px;
            padding: 12px 14px;
        }

        @media (max-width: 480px) {
            body {
                padding: 18px;
            }

            .login-card {
                padding: 25px 20px;
            }

            .brand h2 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <!-- Brand -->
    <div class="brand">
        <div class="brand-icon">
            <i class="fas fa-user-shield"></i>
        </div>

        <h2>Admin Portal</h2>
        <p>Secure access to your dashboard</p>
    </div>

    <!-- Login Card -->
    <div class="login-card">

        <h3 class="login-title">Welcome Back!</h3>
        <p class="login-subtitle">
            Enter your admin credentials to continue.
        </p>

        <!-- Laravel error message -->
        @if(session('message'))
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-circle mr-2"></i>
                {{ session('message') }}
            </div>
        @endif

        @if(isset($message) && $message)
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-circle mr-2"></i>
                {{ $message }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ url('/admin/login') }}" method="POST">
            @csrf

            <!-- Admin ID -->
            <div class="form-group">
                <label for="adminid">ADMIN ID</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>

                    <input
                        type="text"
                        class="form-control"
                        id="adminid"
                        name="adminid"
                        placeholder="Enter your admin ID"
                        value="{{ old('adminid') }}"
                        autocomplete="username"
                        required>
                </div>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">PASSWORD</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>

                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        autocomplete="current-password"
                        required>

                    <div class="input-group-append">
                        <button
                            class="password-toggle"
                            type="button"
                            id="togglePassword"
                            aria-label="Show password"
                            aria-pressed="false">
                            <i class="fas fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Remember Me -->
            <div class="form-options">
                <label class="remember-label">
                    <input type="checkbox" name="remember" value="1">
                    Remember me
                </label>
            </div>

            <!-- Submit -->
            <button type="submit" class="login-btn">
                <i class="fas fa-sign-in-alt mr-2"></i>
                Sign In
            </button>

        </form>

        <div class="security-note">
            <i class="fas fa-shield-alt"></i>
            Your login session is protected
        </div>

    </div>

    <div class="footer-text">
        &copy; {{ date('Y') }} Admin Portal. All rights reserved.
    </div>

</div>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', function () {
        const isPassword = password.type === 'password';

        password.type = isPassword ? 'text' : 'password';
        eyeIcon.classList.toggle('fa-eye', !isPassword);
        eyeIcon.classList.toggle('fa-eye-slash', isPassword);

        togglePassword.setAttribute('aria-pressed', String(isPassword));
        togglePassword.setAttribute(
            'aria-label',
            isPassword ? 'Hide password' : 'Show password'
        );
    });
</script>

</body>
</html>
