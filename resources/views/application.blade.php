<html>

<head>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-white">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img alt="Job Finder Logo" class="h-10 w-10" height="40" src="" width="40" />
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
    <main class="flex flex-col items-center justify-center min-h-screen pt-20">
        <h1 class="text-3xl font-bold mb-8">
            FOLLOW THE PROCESS
        </h1>
        <div class="flex space-x-8">
            <a class="bg-yellow-400 rounded-lg p-8 w-48 h-64 flex flex-col items-center justify-center hover:bg-yellow-500 transition-transform transform hover:scale-105"
                href="{{ route('register') }}">
                <i class="fas fa-user-plus text-3xl mb-4">
                </i>
                <span class="text-lg font-semibold">
                    Register
                </span>
            </a>
            <a class="bg-yellow-400 rounded-lg p-8 w-48 h-64 flex flex-col items-center justify-center hover:bg-yellow-500 transition-transform transform hover:scale-105"
                href="https://example.com/upload-cv">
                <i class="fas fa-upload text-3xl mb-4">
                </i>
                <span class="text-lg font-semibold">
                    Upload CV
                </span>
            </a>
            <a class="bg-yellow-400 rounded-lg p-8 w-48 h-64 flex flex-col items-center justify-center hover:bg-yellow-500 transition-transform transform hover:scale-105"
                href="https://example.com/check-status">
                <i class="fas fa-tasks text-3xl mb-4">
                </i>
                <span class="text-lg font-semibold">
                    Check Status
                </span>
            </a>
        </div>
    </main>
</body>

</html>