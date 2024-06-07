<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/signup.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="signup-bg">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5" id="form1">
                    <h2 class="text-uppercase text-center mb-5">Create An Account</h2>
                    <div class="errormsg">
                        @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                        @endif
                    </div>
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="form-data">
                            <div class="forms-inputs mb-4">
                                <span>Name</span>
                                <input autocomplete="off" type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="forms-inputs mb-4">
                                <span>Email Address</span>
                                <input autocomplete="off" type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="forms-inputs mb-4">
                                <span>Password</span>
                                <input autocomplete="off" type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="forms-inputs mb-4">
                                <span>Repeat Password</span>
                                <input autocomplete="off" type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                                @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark w-100">Register</button>
                            </div>
                        </div>
                    </form>
                    <p id="text" style="text-align: center;">Already have an account? <br><a class="font-bold" href="login">Log In Here</a><br></p>
                </div>
            </div>
        </div>
    </div>

<script>
    var app = new Vue({
        el: '#form1',
        data: function () {
            return {
                email: "",
                emailBlured: false,
                valid: false,
                submitted: false,
                password: "",
                passwordBlured: false
            }
        },
        methods: {
            validate: function() {
                this.emailBlured = true;
                this.passwordBlured = true;
                if (this.validEmail(this.email) && this.validPassword(this.password)) {
                    this.valid = true;
                }
            },
            validEmail: function(email) {
                var re = /(.+)@(.+){2,}\.(.+){2,}/;
                if (re.test(email.toLowerCase())) {
                    return true;
                }
            },
            validPassword: function(password) {
                if (password.length > 7) {
                    return true;
                }
            },
            submit: function() {
                this.validate();
                if (this.valid) {
                    this.submitted = true;
                }
            }
        }
    });
</script>

</body>
</html>
