<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playwrite+CU:wght@100..400&family=Rubik+Mono+One&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Francois+One&family=Playwrite+CU:wght@100..400&family=Rubik+Mono+One&display=swap"
        rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: "Francois One", sans-serif;
            font-weight: 400;
            font-style: normal;
            background-color: #789DBC;
        }

        h1 {
            font-family: "Rubik Mono One", monospace;
            text-transform: uppercase;
            font-style: normal;
            color: #FEEE91;
            text-align: center;
        }

        .form-label {
            color: #FEF9F2;
        }

        .form-control {
            border: 1px solid #54473F;
        }

        .btn-primary {
            font-family: "Francois One", sans-serif;
            font-weight: 1000;
            font-style: normal;
            background-color: #FEEE91;
            border: none;
            color: #091057;
            letter-spacing: 5px;
        }

        .btn-primary:hover {
            background-color: #789DBC;
            transition: background-color 0.3s;
            cursor: pointer;
            color: #FFEB00;
        }

        .alert {
            margin-bottom: 20px;
        }

        .login {
            color: #FEEE91;
            font-weight: bold;
        }

        .welcome {
            font-family: "Rubik Mono One", monospace;
            font-weight: 700;
            font-style: normal;
            color: #FEEE91;
            font-size: 500px;
        }
    </style>
</head>

<body class="flex h-screen">
    <div class="w-1/2 bg-gray-900 text-white flex flex-col justify-center items-center p-8">
        <div class="w-full max-w-md bg-gray-800 p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold mb-4">Register</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                        required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
                <div class="mt-2 text-center">
                    <br>
                    <span>Already have an account? </span>
                    <a class="login" href="{{ route('login') }}">Login</a>
                </div>
            </form>
        </div>
    </div>
    <div class="w-1/2 bg-#789DBC-800 flex flex-col justify-center items-center p-8">
        <div class="text-center">
            <h1 class="welcome text-6xl font-bold text-#FEEE91 mb-4">Welcome to</h1>
        </div>
        <div class="mt-8">
            <img alt="jobquest logo" height="500" src="assets/logo.gif" width="500" />
        </div>
    </div>
</body>

</html>