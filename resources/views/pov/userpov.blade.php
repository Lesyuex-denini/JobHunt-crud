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

    <main class="container mx-auto mt-20 p-6">

        <div class="mt-6 bg-white rounded-lg shadow-md overflow-hidden" id="profile-output">
            <div class="relative h-48 bg-gray-200" id="cover">
                <img alt="Cover Photo" class="w-full h-full object-cover cursor-pointer" height="200" id="cover-img"
                    src="https://storage.googleapis.com/a1aa/image/WqLP7vfRw13abKPcsenPM6SBep87wkgKxooEnYm9jMej41QPB.jpg"
                    width="800" />
                <input accept="image/*" class="hidden" id="cover-photo" type="file" />

                <label for="profile-picture">
                    <img alt="Profile Picture"
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 rounded-full border-4 border-white w-32 h-32 cursor-pointer"
                        height="128" id="profile-img"
                        src="https://storage.googleapis.com/a1aa/image/X0iFBhg3IPaYJhATIQg05PNylTT9uriVhTiyRMJu3kQhXD9E.jpg"
                        width="128" />
                </label>
                <input accept="image/*" class="hidden" id="profile-picture" type="file" multiple />
            </div>
            <div class="flex flex-col mt-16">
                <div class="p-6 flex justify-between items-start">
                    <div>
                        <h2 class="text-2xl font-bold mb-2" id="output-name">
                            Your Name
                        </h2>
                        <h3 class="text-xl text-gray-600 mb-4" id="output-job-title">
                            Your Job Title
                        </h3>
                    </div>
                    <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 mt-2"
                        id="edit-profile-button">
                        Edit Profile
                    </button>
                </div>
                <div class="p-6">
                    <div class="mt-6">
                        <h3 class="text-xl font-semibold mb-2">
                            Skills
                        </h3>
                        <ul class="list-disc list-inside" id="output-skills">
                        </ul>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-xl font-semibold mb-2">
                            Experience
                        </h3>
                        <p id="output-experience">
                            No experience added yet.
                        </p>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-xl font-semibold mb-2">
                            Education
                        </h3>
                        <p id="output-education">
                            No education details added yet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden"
        id="input-form-section">
        <div class="bg-white p-6 rounded-lg shadow-md w-1/2 mt-20">
            <h2 class="text-lg font-bold mb-4">
                Edit Your Details
            </h2>

            <label class="block mb-2 font-semibold">
                Name:
            </label>
            <input class="w-full p-2 border rounded mb-4" id="name" placeholder="Your name" type="text" />

            <label class="block mb-2 font-semibold">
                Job Title:
            </label>
            <input class="w-full p-2 border rounded mb-4" id="job-title" placeholder="Your job title" type="text" />

            <label class="block mb-2 font-semibold">
                Skills (comma-separated):
            </label>
            <input class="w-full p-2 border rounded mb-4" id="skills" placeholder="e.g., JavaScript, React"
                type="text" />

            <label class="block mb-2 font-semibold">
                Experience:
            </label>
            <textarea class="w-full p-2 border rounded mb-4" id="experience"
                placeholder="Describe your experience"></textarea>

            <label class="block mb-2 font-semibold">
                Education:
            </label>
            <textarea class="w-full p-2 border rounded mb-4" id="education"
                placeholder="Describe your education"></textarea>
            <div class="flex justify-end">
                <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 mr-2" id="update-profile">
                    Update Profile
                </button>
                <button class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600" id="close-form">
                    Close
                </button>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('edit-profile-button').addEventListener('click', () => {
            const formSection = document.getElementById('input-form-section');
            formSection.classList.remove('hidden');
        });

        document.getElementById('close-form').addEventListener('click', () => {
            const formSection = document.getElementById('input-form-section');
            formSection.classList.add('hidden');
        });

        document.getElementById('update-profile').addEventListener('click', () => {
            document.getElementById('output-name').textContent = document.getElementById('name').value || 'Your Name';
            document.getElementById('output-job-title').textContent = document.getElementById('job-title').value || 'Your Job Title';
            const skills = document.getElementById('skills').value.split(',').map(skill => skill.trim());
            const skillsList = document.getElementById('output-skills');
            skillsList.innerHTML = skills.map(skill => `<li>${skill}</li>`).join('');
            document.getElementById('output-experience').textContent = document.getElementById('experience').value || 'No experience added yet.';
            document.getElementById('output-education').textContent = document.getElementById('education').value || 'No education details added yet.';
            const profilePictureInput = document.getElementById('profile-picture-input');
            if (profilePictureInput.files && profilePictureInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('profile-img').src = e.target.result;
                };
                reader.readAsDataURL(profilePictureInput.files[0]);
            }


            const coverPhotoInput = document.getElementById('cover-photo-input');
            if (coverPhotoInput.files && coverPhotoInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('cover-img').src = e.target.result;
                };
                reader.readAsDataURL(coverPhotoInput.files[0]);
            }
            document.getElementById('input-form-section').classList.add('hidden');
        });


        document.getElementById('profile-img').addEventListener('click', () => {
            document.getElementById('profile-picture').click();
        });

        document.getElementById('cover-img').addEventListener('click', () => {
            document.getElementById('cover-photo').click();
        });


        document.getElementById('profile-picture').addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    document.getElementById('profile-img').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('cover-photo').addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    document.getElementById('cover-img').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>





</body>

</html>