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

<body class="font-roboto bg-blue-300">
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
                        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                            href="{{ route('status') }}">Status</a>
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


    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md mt-20">
        <h1 class="text-2xl font-bold mb-6">Application Form</h1>

        <!-- Display errors if there are any -->
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-300 text-red-700 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('application.store') }}" method="POST" id="applicationForm"
            enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="full_name">
                    Full Name
                </label>
                <input class="w-full px-3 py-2 border rounded-lg" id="full_name" name="full_name" required=""
                    type="text" value="{{ old('full_name') }}" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">
                    Contact Information
                </label>
                <div class="mb-2">
                    <label class="block text-gray-600 mb-1" for="phone_number">
                        Phone Number
                    </label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="phone_number" name="phone_number" required=""
                        type="text" value="{{ old('phone_number') }}" />
                </div>
                <div class="mb-2">
                    <label class="block text-gray-600 mb-1" for="email_address">
                        Email Address
                    </label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="email_address" name="email_address"
                        required="" type="email" value="{{ old('email_address') }}" />
                </div>
                <div>
                    <label class="block text-gray-600 mb-1" for="home_address">
                        Home Address
                    </label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="home_address" name="home_address" required=""
                        type="text" value="{{ old('home_address') }}" />
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="date_of_birth">
                    Date of Birth
                </label>
                <input class="w-full px-3 py-2 border rounded-lg" id="date_of_birth" name="date_of_birth" required=""
                    type="date" value="{{ old('date_of_birth') }}" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="citizenship">
                    Citizenship/Nationality
                </label>
                <input class="w-full px-3 py-2 border rounded-lg" id="citizenship" name="citizenship" required=""
                    type="text" value="{{ old('citizenship') }}" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="civil_status">
                    Civil Status
                </label>
                <select class="w-full px-3 py-2 border rounded-lg" id="civil_status" name="civil_status" required="">
                    <option value="" {{ old('civil_status') == '' ? 'selected' : '' }}>--Select--</option>
                    <option value="single" {{ old('civil_status') == 'single' ? 'selected' : '' }}>Single</option>
                    <option value="married" {{ old('civil_status') == 'married' ? 'selected' : '' }}>Married</option>
                    <option value="widowed" {{ old('civil_status') == 'widowed' ? 'selected' : '' }}>Widowed</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">
                    Job Details
                </label>
                <div class="mb-2">
                    <label class="block text-gray-600 mb-1" for="degree">
                        Highest Degree Attained
                    </label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="degree" name="degree" required="" type="text"
                        value="{{ old('degree') }}" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="job_applying_for">
                        Job Applying For
                    </label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="job_applying_for" name="job_applying_for"
                        required="" type="text" value="{{ old('job_applying_for') }}" />
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="date_today">
                        Date Today
                    </label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="date_today" name="date_today" required=""
                        type="date" value="{{ now()->format('Y-m-d') }}" readonly />
                </div>

            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">
                    Things to Upload
                </label>
                <div class="mb-2">
                    <label class="block text-gray-600 mb-1" for="resume">
                        Resume/Curriculum Vitae (CV)
                    </label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="resume" name="resume" required=""
                        type="file" />
                </div>
                <div>
                    <label class="block text-gray-600 mb-1" for="gov_ids">
                        Government IDs
                    </label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="gov_ids" name="gov_ids" required=""
                        type="file" />
                </div>
            </div>

            <button class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600" type="submit">
                Submit
            </button>
        </form>
    </div>

    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-20" id="loadingModal"
        style="display: none;">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <p class="text-lg font-semibold">Submitting your application...</p>
            <div class="mt-4">
                <i class="fas fa-spinner fa-spin fa-3x text-blue-500"></i>
            </div>
        </div>
    </div>

    <script>
        const form = document.getElementById('applicationForm');
        const loadingModal = document.getElementById('loadingModal');

        form.addEventListener('submit', function () {
            loadingModal.style.display = 'flex';
        });
    </script>

    <script>
        function showConfirmation() {
            const form = document.getElementById('applicationForm');
            const formData = new FormData(form);

            // Using Fetch API to send data to the server
            fetch("{{ route('application.store') }}", {
                method: 'POST',
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById('confirmationOverlay').classList.remove('hidden');
                    } else {
                        alert('There was an error with your application submission.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error with your application submission.');
                });
        }

    </script>
</body>

</html>