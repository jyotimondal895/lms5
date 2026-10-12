
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Update Admin Settings</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body {
            background: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .wrapper {
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .settings-card {

            width: 100%;
            max-width: 650px;

            background: #ffffff;

            padding: 35px;

            border-radius: 15px;

            box-shadow:
                0 8px 30px rgba(0, 0, 0, 0.10);
        }

        .back-btn {

            text-decoration: none;

            color: #0d6efd;

            display: inline-block;

            margin-bottom: 20px;
        }

        .settings-header {

            text-align: center;

            margin-bottom: 30px;
        }

        .settings-header h2 {

            font-weight: 700;

            color: #212529;
        }

        .settings-header p {

            color: #777;
        }

        .profile-icon {

            width: 80px;
            height: 80px;

            background: #0d6efd;

            color: white;

            border-radius: 50%;

            display: flex;

            justify-content: center;

            align-items: center;

            font-size: 35px;

            margin: 0 auto 15px;
        }

        .form-label {

            font-weight: 600;
        }

        .form-control {

            height: 48px;

            border-radius: 8px;
        }

        .form-control:focus {

            border-color: #0d6efd;

            box-shadow:
                0 0 0 0.2rem rgba(13, 110, 253, 0.15);
        }

        .btn-update {

            width: 100%;

            height: 48px;

            border: none;

            border-radius: 8px;

            background: #0d6efd;

            color: white;

            font-weight: 600;

            font-size: 16px;
        }

        .btn-update:hover {

            background: #0b5ed7;
        }

    </style>

</head>


<body>


<div class="container wrapper">

    <div class="settings-card">


        <!-- Back Button -->

        <a href="{{ url('/admin/settings') }}"
           class="back-btn">

            ← Back to Settings

        </a>


        <!-- Header -->

        <div class="settings-header">

            <div class="profile-icon">

                👤

            </div>

            <h2>
                 Admin Settings
            </h2>

            <p>
                Update your administrator account
            </p>

        </div>


        <!-- Success Message -->

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif


        <!-- Error Messages -->

        @if($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- Update Form -->

        <form action="{{ url('/admin/settings/updates') }}"
              method="POST">

            @csrf


            <!-- Admin ID -->

            <div class="mb-4">

                <label class="form-label">
                    Admin ID
                </label>

                <input
                    type="text"
                    name="adminid"

                    class="form-control"

                    value="{{ old('adminid', $userdata->adminid ?? '') }}"

                    placeholder="Enter Admin ID"

                    required
                >

            </div>


            <!-- Current Password -->

            <div class="mb-4">

                <label class="form-label">
                    Current Password
                </label>

                <input
                    type="password"
                    name="current_password"

                    class="form-control"

                    placeholder="Enter current password"

                    required
                >

            </div>


            <!-- New Password -->

            <div class="mb-4">

                <label class="form-label">
                    New Password
                </label>

                <input
                    type="password"
                    name="password"

                    class="form-control"

                    placeholder="Enter new password"

                    required
                >

            </div>


            <!-- Confirm Password -->

            <div class="mb-4">

                <label class="form-label">
                    Confirm New Password
                </label>

                <input
                    type="password"
                    name="password_confirmation"

                    class="form-control"

                    placeholder="Confirm new password"

                    required
                >

            </div>


            <!-- Update Button -->

            <button type="submit"
                    class="btn-update">

                Update Settings

            </button>


        </form>


    </div>

</div>


</body>

</html>