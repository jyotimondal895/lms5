@include('includes.header')

    
    
    
        
<div class="card login-card">

    <div class="card-header">
        <div class="logo">
            <i class="bi bi-mortarboard-fill"></i>
        </div>

        <h3>LMS5</h3>
        <p class="mb-0">Learning Management System</p>
    </div>

    <div class="card-body p-4">

        <form method="POST" action="">
            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter Email"
                    required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Enter Password"
                    required>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <div>
                    <input type="checkbox" name="remember">
                    Remember Me
                </div>

                <a href="#">Forgot Password?</a>
            </div>

            <button class="btn btn-login w-100">
                <i class="bi bi-box-arrow-in-right"></i>
                Login
            </button>

        </form>

        <hr>

        <p class="text-center">
            Don't have an account?
            <a href="{{ route('register') }}">Register</a>
        </p>

    </div>

</div>



    @include('includes.footer')

</body>
</html>
