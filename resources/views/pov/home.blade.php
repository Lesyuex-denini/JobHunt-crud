<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <a class="text-gray-700 font-semibold hover:text-pink-500" href="{{ url('/home') }}">Home</a>
                <a class="text-gray-700 hover:text-pink-500" href="{{ url('/povjob') }}">Find Jobs</a>
                <a class="text-gray-700 hover:text-pink-500" href="{{ url('/categoriespov') }}">Categories</a>
                <a class="text-gray-700 hover:text-pink-500" href="{{ url('blogspov') }}">Blogs</a>
                <div class="relative">
                    <button id="menuButton"
                        class="flex items-center text-gray-700 hover:text-pink-500 focus:outline-none">
                        <span class="mr-2">{{ Auth::user()->name }}</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div id="dropdownMenu"
                        class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg hidden group-hover:block">
                        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Applications</a>
                        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>

                <script>
                    const menuButton = document.getElementById("menuButton");
                    const dropdownMenu = document.getElementById("dropdownMenu");


                    menuButton.addEventListener("mouseover", () => {
                        dropdownMenu.classList.remove("hidden");
                    });


                    dropdownMenu.addEventListener("mouseleave", () => {
                        dropdownMenu.classList.add("hidden");
                    });


                    document.addEventListener("click", (e) => {
                        if (!menuButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                            dropdownMenu.classList.add("hidden");
                        }
                    });
                </script>
            </nav>
        </div>
    </header>

    <main class="bg-blue-50 py-40" id="dynamic-bg">
        <div class="container mx-auto flex items-center">
            <div class="w-full text-center">
                <h2 class="text-5xl font-bold text-blue leading-tight bg-opacity-75 inline-block p-4 rounded">
                    <span class="block text-8xl">Opportunity is</span>
                    <span class="block text-8xl">wherever you are.</span>
                    <span class="block text-2xl mt-4">We're connecting the best talent with the best companies</span>
                </h2>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('https://api.unsplash.com/photos/random?query=job,company,technology&client_id=YOUR_UNSPLASH_ACCESS_KEY')
                .then(response => response.json())
                .then(data => {
                    const bgElement = document.getElementById('dynamic-bg');
                    bgElement.style.backgroundImage = `url(${data.urls.full})`;
                    bgElement.style.backgroundSize = 'cover';
                    bgElement.style.backgroundPosition = 'center';
                })
                .catch(error => console.error('Error fetching the background image:', error));
        });
    </script>
</body>

</html>