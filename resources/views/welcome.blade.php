<html>

<head>
    <title>Job Finder</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        .slider {
            display: flex;
            justify-content: center;
            gap: 16px;
            transition: transform 0.5s ease-in-out;
        }

        .icon {
            font-size: 2rem;
            margin-bottom: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .icon:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body class="font-roboto">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img alt="JobQuest Logo" class="h-10 w-10 rounded-full" src="{{ asset('assets/logo.gif') }}" />
                <div class="ml-3">
                    <h1 class="text-xl font-bold text-blue-900">JobQuest HQ</h1>
                    <p class="text-sm text-gray-500">Get your dream job</p>
                </div>
            </div>
            <nav class="flex items-center space-x-6">
                <a class="text-gray-700 font-semibold hover:text-pink-500" href="{{ route('welcome') }}">Home</a>
                <a class="text-gray-700 hover:text-pink-500" href="{{ url('/find-jobs') }}">Find Jobs</a>
                <a class="text-gray-700 hover:text-pink-500" href="{{ url('/categories') }}">Categories</a>
                <a class="text-gray-700 hover:text-pink-500" href="{{ url('/blogs') }}">Blogs</a>
                <a class="bg-pink-500 text-white px-4 py-2 rounded-md hover:bg-black" href="{{ route('register') }}">
                    Register
                </a>
                <a class="border border-pink-500 text-pink-500 px-4 py-2 rounded-md hover:bg-pink-500 hover:text-white"
                    href="{{ route('login') }}">
                    Login
                </a>
            </nav>
        </div>
    </header>
    <main class="bg-blue-50 py-40" id="dynamic-bg"
        style="background: url('{{ asset('assets/background.gif') }}') no-repeat center center fixed; background-size: cover;">
        <div class="container mx-auto flex items-center ">
            <div class="w-full text-center">
                <h2 class="text-5xl font-bold text-blue leading-tight bg-opacity-75 inline-block p-4 rounded">
                    <span class="block text-8xl animated-text">Opportunity is</span>
                    <span class="block text-8xl animated-text">wherever you are.</span>
                    <span class="block text-2xl mt-4 animated-text">We're connecting the best talent with the
                        best companies</span>
                </h2>
            </div>
        </div>
    </main>
    <footer class="bg-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-gray-700">
                © 2024 JobQuest HQ. All rights reserved.
            </p>
        </div>
    </footer>
    <script>
        document.getElementById('menuButton').addEventListener('click', function () {
            var dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>