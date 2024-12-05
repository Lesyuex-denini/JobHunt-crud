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
    <div class="container mx-auto my-10 px-6">
        <h1 class="text-4xl font-bold text-[#171f2e] mb-6 text-center">
            IT &amp; Computer Science Jobs
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-lg h-full">
                <img alt="A detailed image of a computer screen displaying code and a keyboard"
                    class="w-full h-48 object-cover rounded" height="400"
                    src="https://storage.googleapis.com/a1aa/image/S5pRr5vnyPrnOFqVpuHcxHvvr7pm6fBrpX02RRJ12beNffdPB.jpg"
                    width="600" />
                <h3 class="text-2xl font-semibold mt-4">
                    Software Developer
                </h3>
                <p class="mt-2">
                    Create and maintain software applications.
                </p>
                <div class="mt-4">
                    <h4 class="font-semibold">
                        Benefits:
                    </h4>
                    <span class="block">
                        Work with cutting-edge technologies
                    </span>
                    <span class="block">
                        Comprehensive health and dental coverage
                    </span>
                </div>
                <div class="mt-4">
                    <h4 class="font-semibold">
                        Requirements:
                    </h4>
                    <span class="block">
                        Bachelor’s degree in Computer Science or related field
                    </span>
                    <span class="block">
                        Experience with multiple programming languages
                    </span>
                    <span class="block">
                        Knowledge of software development lifecycle
                    </span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg h-full">
                <img alt="A detailed image of a computer screen displaying data visualizations and charts"
                    class="w-full h-48 object-cover rounded" height="400"
                    src="https://storage.googleapis.com/a1aa/image/jpSCkTLHIqZzO53cZjdujGeCxVncGxCkwzcuLUeoLppQffdPB.jpg"
                    width="600" />
                <h3 class="text-2xl font-semibold mt-4">
                    Data Analyst
                </h3>
                <p class="mt-2">
                    Analyze data to gain business insights.
                </p>
                <div class="mt-4">
                    <h4 class="font-semibold">
                        Benefits:
                    </h4>
                    <span class="block">
                        Flexible working hours – work any time from home or college!
                    </span>
                    <span class="block">
                        Gain experience in data analysis
                    </span>
                </div>
                <div class="mt-4">
                    <h4 class="font-semibold">
                        Requirements:
                    </h4>
                    <span class="block">
                        Fluent in English
                    </span>
                    <span class="block">
                        Living in The Philippines for a minimum of 5 years
                    </span>
                    <span class="block">
                        Basic knowledge of data analysis tools
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto my-10 px-6">
        <h1 class="text-4xl font-bold text-[#171f2e] mb-6 text-center">
            Engineering &amp; Mathematics Jobs
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-lg h-full">
                <img alt="A detailed image of blueprints and construction tools on a table"
                    class="w-full h-48 object-cover rounded" height="400"
                    src="https://storage.googleapis.com/a1aa/image/kNYCkOgQBLJgLdJbquLYqMyXMGf9AO02gREeF4sAiKkRffdPB.jpg"
                    width="600" />
                <h3 class="text-2xl font-semibold mt-4">
                    Civil Engineer
                </h3>
                <p class="mt-2">
                    Design and supervise construction projects for major infrastructure.
                </p>
                <div class="mt-4">
                    <h4 class="font-semibold">
                        Benefits:
                    </h4>
                    <span class="block">
                        Opportunities for growth in construction projects
                    </span>
                    <span class="block">
                        Work on high-profile infrastructure developments
                    </span>
                </div>
                <div class="mt-4">
                    <h4 class="font-semibold">
                        Requirements:
                    </h4>
                    <span class="block">
                        Bachelor’s degree in Civil Engineering
                    </span>
                    <span class="block">
                        2+ years of experience in construction or related field
                    </span>
                    <span class="block">
                        Proficiency in CAD software
                    </span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg h-full">
                <img alt="A detailed image of complex mathematical equations on a whiteboard"
                    class="w-full h-48 object-cover rounded" height="400"
                    src="https://storage.googleapis.com/a1aa/image/NjfKUIz1VPXYCaj2W8dofqBggEuYqyJzflEZrqCZ7eQZ9f7eE.jpg"
                    width="600" />
                <h3 class="text-2xl font-semibold mt-4">
                    Mathematician
                </h3>
                <p class="mt-2">
                    Analyze complex mathematical problems and models for diverse industries.
                </p>
                <div class="mt-4">
                    <h4 class="font-semibold">
                        Benefits:
                    </h4>
                    <span class="block">
                        Flexible working environment
                    </span>
                    <span class="block">
                        Collaborate on research with diverse industries
                    </span>
                </div>
                <div class="mt-4">
                    <h4 class="font-semibold">
                        Requirements:
                    </h4>
                    <span class="block">
                        Master’s degree in Mathematics or related field
                    </span>
                    <span class="block">
                        Strong problem-solving and analytical skills
                    </span>
                    <span class="block">
                        Experience in statistical modeling or computational tools
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto my-10 px-6">
        <h1 class="text-4xl font-bold text-[#171f2e] mb-6 text-center">
            Business Management Jobs
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-lg h-full">
                <img alt="A detailed image of an office desk with HR documents and a laptop"
                    class="w-full h-48 object-cover rounded" height="400"
                    src="https://storage.googleapis.com/a1aa/image/8hA193lGFm7XP9KqldyajxJk4Wb2dA3WajiAofnJHoIqffunA.jpg"
                    width="600" />
                <h3 class="text-2xl font-semibold mt-4 text-gray-900">
                    HR Manager
                </h3>
                <p class="mt-2 text-gray-700">
                    Lead innovative recruitment strategies and shape organizational culture.
                </p>
                <div class="mt-4 text-gray-700">
                    <h4 class="font-semibold">
                        Benefits:
                    </h4>
                    <span class="block">
                        Shape organizational culture
                    </span>
                    <span class="block">
                        Lead innovative recruitment strategies
                    </span>
                </div>
                <div class="mt-4 text-gray-700">
                    <h4 class="font-semibold">
                        Requirements:
                    </h4>
                    <span class="block">
                        Bachelor's degree in HR or related field
                    </span>
                    <span class="block">
                        5+ years of HR management experience
                    </span>
                    <span class="block">
                        Proficiency in HR software
                    </span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg h-full">
                <img alt="A detailed image of a laptop displaying digital marketing analytics"
                    class="w-full h-48 object-cover rounded" height="400"
                    src="https://storage.googleapis.com/a1aa/image/veZA54eKsCo8nEZxmNrJ9XkhuaSaL8NiHlxSBdCAnvSXffdPB.jpg"
                    width="600" />
                <h3 class="text-2xl font-semibold mt-4 text-gray-900">
                    Marketing Specialist
                </h3>
                <p class="mt-2 text-gray-700">
                    Work in a dynamic team to create innovative marketing strategies.
                </p>
                <div class="mt-4 text-gray-700">
                    <h4 class="font-semibold">
                        Benefits:
                    </h4>
                    <span class="block">
                        Work in a dynamic team
                    </span>
                    <span class="block">
                        Health and wellness programs
                    </span>
                    <span class="block">
                        Performance bonuses
                    </span>
                </div>
                <div class="mt-4 text-gray-700">
                    <h4 class="font-semibold">
                        Requirements:
                    </h4>
                    <span class="block">
                        Bachelor's degree in Marketing, Business Administration, or related field
                    </span>
                    <span class="block">
                        Experience in digital marketing
                    </span>
                    <span class="block">
                        Excellent communication skills
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto my-10 px-6">
        <h1 class="text-4xl font-bold text-[#171f2e] mb-6 text-center">
            Law, Legal Studies &amp; Justice Jobs
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-lg h-full">
                <img alt="A detailed image of legal documents and a gavel on a desk"
                    class="w-full h-48 object-cover rounded" height="400"
                    src="https://storage.googleapis.com/a1aa/image/BK8NWXR7bg6BCRW69P0nOjuFj6GiKfOTVNzNXN3p3p8pffunA.jpg"
                    width="600" />
                <h3 class="text-2xl font-semibold mt-4 text-gray-900">
                    Corporate Lawyer
                </h3>
                <p class="mt-2 text-gray-700">
                    Provide legal advice to corporations on compliance, mergers, and acquisitions.
                </p>
                <div class="mt-4 text-gray-700">
                    <h4 class="font-semibold">
                        Benefits:
                    </h4>
                    <span class="block">
                        Health insurance
                    </span>
                    <span class="block">
                        401(k)
                    </span>
                    <span class="block">
                        Paid vacation
                    </span>
                </div>
                <div class="mt-4 text-gray-700">
                    <h4 class="font-semibold">
                        Requirements:
                    </h4>
                    <span class="block">
                        JD
                    </span>
                    <span class="block">
                        3+ years of experience in corporate law
                    </span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg h-full">
                <img alt="A detailed image of a desk with legal documents and a laptop"
                    class="w-full h-48 object-cover rounded" height="400"
                    src="https://storage.googleapis.com/a1aa/image/bG3F3ErmcjIHEJ7CCLMwXiOuGEMbIEGlgmUkfNhmsAfOffdPB.jpg"
                    width="600" />
                <h3 class="text-2xl font-semibold mt-4 text-gray-900">
                    Legal Assistant
                </h3>
                <p class="mt-2 text-gray-700">
                    Assist legal teams with document preparation, client communication, and case management.
                </p>
                <div class="mt-4 text-gray-700">
                    <h4 class="font-semibold">
                        Benefits:
                    </h4>
                    <span class="block">
                        Flexible schedule
                    </span>
                    <span class="block">
                        Health insurance
                    </span>
                    <span class="block">
                        Paid time off
                    </span>
                </div>
                <div class="mt-4 text-gray-700">
                    <h4 class="font-semibold">
                        Requirements:
                    </h4>
                    <span class="block">
                        Associate degree or paralegal certification
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>