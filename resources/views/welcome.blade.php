<!DOCTYPE html>
<html>
<head>
    <title>StockSort - Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            background-image: url('https://hips.hearstapps.com/hmg-prod/images/close-up-of-tulips-blooming-in-field-royalty-free-image-1584131603.jpg?crop=1.00xw:0.798xh;0,0.202xh&resize=1200:*');
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 400px;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .login-card h1 {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 2rem;
        }
        .login-card form {
            margin-top: 1.5rem;
        }
        .login-card .form-group {
            margin-bottom: 1rem;
        }
        .login-card label {
            font-weight: bold;
        }
        .login-card .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
        }
        .login-card .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
        .login-card .btn-link {
            color: #007bff;
        }
        .login-card .btn-link:hover {
            color: #0069d9;
        }
        .login-card .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            width: 100%;
        }
        .login-card .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h1 class="text-primary">StockSort</h1>
        <form method="POST" action="/login">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                    </div>
                    <div class="form-group text-center">
                    <a class="btn btn-link" href="/register">{{ __('Create an Account') }}</a>
                    </div>
                    </form>
                    </div>
                    
                    </body>
                    </html>
