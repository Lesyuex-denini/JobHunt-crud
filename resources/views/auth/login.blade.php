<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
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
            font-weight: 200;
            font-style: normal;
            background-color: #789DBC;
        }

        h1 {
            font-family: "Francois One", sans-serif;
            text-transform: uppercase;
            font-style: normal;
            color: #FEEE91;
            text-align: center;
        }

        .form-label {
            color: #FEF9F2;
        }

        .form-control {
            border: 3px solid #FEEE91;
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
            color: #FEEE91;
        }

        .register {
            color: #FEEE91;
            font-weight: bold;
        }

        .welcome {
            font-family: "Francois One", monospace;
            font-weight: 1000;
            font-style: normal;
            color: #FEEE91;
            font-size: 50px;
        }
    </style>
</head>

<body class="flex h-screen">
    <div class="w-1/2 bg-gray-900 text-white flex flex-col justify-center items-center p-8">
        <div class="w-full max-w-md bg-[#789DBC] bg-opacity-60 p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold mb-4">Login</h1>
            @if ($errors->any())
                <div class="alert alert-danger mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" id="remember" name="remember" class="form-check-input">
                    <label for="remember" class="form-check-label">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <div class="mt-2 text-center">
                    <br>
                    <span>Don't have an account? </span>
                    <a class="register" href="{{ route('register') }}">Register</a>
                </div>
            </form>
        </div>
    </div>
    <div class="w-1/2 bg-[#789DBC] flex flex-col justify-center items-center p-8">
        <div class="text-center">
            <h1 class="welcome font-bold text-#FEEE91 mb-4">Log in to get started</h1>
        </div>
        <div class="mt-8">
            <img src="{{ asset('assets/logo.gif') }}" alt="JobQuest Logo" width="500" height="500">
        </div>
    </div>

</body>

</html>