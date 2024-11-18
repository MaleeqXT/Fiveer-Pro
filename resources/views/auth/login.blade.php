<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Fiverr Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            height: 100vh;
        }

        .login-section {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 3rem;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .login-logo img {
            width: 150px;
            margin-bottom: 1.5rem;
        }

        .form-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: #1dbf73;
            margin-bottom: 1rem;
        }

        .form-group {
            margin-bottom: 1rem;
            width: 100%;
        }

        .form-label {
            font-size: 1rem;
            font-weight: 600;
            color: #333;
        }

        .form-input {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e0;
            border-radius: 0.375rem;
            width: 100%;
            padding: 0.75rem;
            color: #4a5568;
            outline: none;
            transition: box-shadow 0.2s ease-in-out;
        }

        .form-input:focus {
            border-color: #1dbf73;
            box-shadow: 0 0 10px rgba(29, 191, 115, 0.5);
        }

        .submit-button {
            background-color: #1dbf73;
            color: white;
            font-weight: bold;
            font-size: 1.125rem;
            padding: 0.75rem;
            margin-top: 1rem;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
            width: 100%;
        }

        .submit-button:hover {
            background-color: #17a866;
        }

        .login-link-container {
            text-align: center;
            padding-top: 1rem;
        }

        .login-link {
            text-decoration: underline;
            font-weight: 600;
            color: #1dbf73;
        }

        .text-danger {
            color: red;
            padding: 5px;
        }

        .image-section {
            width: 50%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .background-image {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        @media (max-width: 768px) {
            .login-section,
            .image-section {
                width: 100%;
            }

            .image-section {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Login Section -->
        <div class="login-section">
            <!-- Fiverr Logo -->
            <div class="login-logo">
                <img src="https://freelogopng.com/images/all_img/1656739257fiverr-logo-transparent.png" alt="Fiverr Logo">
            </div>
            <p class="form-title">Login to Fiverr</p>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" class="form-input" required />
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" class="form-input" required />
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <input type="submit" value="Login" class="submit-button" />
            </form>

            <div class="login-link-container">
                <p>Don't have an account? <a href="/register" class="login-link">Join Fiverr</a></p>
            </div>
        </div>

        <!-- Image Section -->
        <div class="image-section">
            <img class="background-image" src="https://cdn.pixabay.com/photo/2016/11/19/14/00/code-1839406_1280.jpg" alt="Background">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
