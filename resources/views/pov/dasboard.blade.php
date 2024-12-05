@extends('layouts.app')

@section('content')
<header class="bg-white shadow-md fixed w-full top-0 z-10">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <div class="flex items-center">
            <img alt="Job Finder Logo" class="h-10 w-10" height="40"
                src="https://storage.googleapis.com/a1aa/image/bUChqIAyBWYGN5xqMZeziQxepM8teyeDGaY8JX6o4cZCJabPB.jpg"
                width="40" />
            <div class="ml-3">
                <h1 class="text-xl font-bold text-blue-900">
                    JobQuest HQ
                </h1>
                <p class="text-sm text-gray-500">
                    Get your dream job
                </p>
            </div>
        </div>
        <nav class="flex items-center space-x-6">
            <a class="text-gray-700 font-semibold hover:text-pink-500" href="{{ url('home') }}">
                Home
            </a>
            <a class="text-gray-700 hover:text-pink-500" href="{{ url('findjob') }}">
                Find Jobs
            </a>
            <a class="text-gray-700 hover:text-pink-500" href="{{ url('categories') }}">
                Categories
            </a>
            <a class="text-gray-700 hover:text-pink-500" href="{{ url('blogs') }}">
                Blogs
            </a>
            <div class="relative">
                <button class="flex items-center text-gray-700 hover:text-pink-500 focus:outline-none" id="menuButton">
                    <span class="mr-2">
                        User Account
                    </span>
                    <i class="fas fa-chevron-down">
                    </i>
                </button>
                <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg hidden"
                    id="dropdownMenu">
                    <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="{{ route('profile') }}">
                        Profile
                    </a>
                    <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="{{ route('logout') }}">
                        Logout
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="flex flex-col items-center justify-center min-h-screen pt-20">
    <!-- Main Content -->
    <div class="w-full p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div
                class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-6 rounded-lg shadow-lg flex justify-between items-center">
                <h2 class="text-xl font-semibold">
                    Applied Jobs
                </h2>
                <div class="bg-blue-300 text-blue-900 font-bold py-1 px-3 rounded-lg">
                    {{ $appliedJobsCount }}
                </div>
            </div>
            <div class="bg-gradient-to-r from-pink-500 to-pink-700 text-white p-6 rounded-lg shadow-lg cursor-pointer"
                id="detailsOfJobsApplied">
                <h2 class="text-xl font-semibold mb-2">
                    Details of Jobs Applied
                </h2>
            </div>
            <div class="bg-gradient-to-r from-yellow-500 to-yellow-700 text-white p-6 rounded-lg shadow-lg cursor-pointer"
                id="applicationStatus">
                <h2 class="text-xl font-semibold mb-2">
                    Application Status
                </h2>
            </div>
        </div>
        <div class="flex justify-center mt-12">
            <h1 class="text-5xl font-bold text-blue-900">
                Welcome to Your Dashboard
            </h1>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden" id="modal">
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-1/2 p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold" id="modalTitle"></h2>
            <button class="text-gray-500 hover:text-gray-700" id="closeModal">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div id="modalContent"></div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const menuButton = document.getElementById("menuButton");
    const dropdownMenu = document.getElementById("dropdownMenu");
    const detailsOfJobsApplied = document.getElementById("detailsOfJobsApplied");
    const applicationStatus = document.getElementById("applicationStatus");
    const modal = document.getElementById("modal");
    const closeModal = document.getElementById("closeModal");
    const modalTitle = document.getElementById("modalTitle");
    const modalContent = document.getElementById("modalContent");

    menuButton.addEventListener("click", () => {
        dropdownMenu.classList.toggle("hidden");
    });

    document.addEventListener("click", (e) => {
        if (!menuButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add("hidden");
        }
    });

    detailsOfJobsApplied.addEventListener("click", () => {
        modalTitle.textContent = "Details of Jobs Applied";
        modalContent.innerHTML = "<p>Here are the details of the jobs you have applied for...</p>";
        modal.classList.remove("hidden");
    });

    applicationStatus.addEventListener("click", () => {
        modalTitle.textContent = "Application Status";
        modalContent.innerHTML = "<p>Here is the status of your applications...</p>";
        modal.classList.remove("hidden");
    });

    closeModal.addEventListener("click", () => {
        modal.classList.add("hidden");
    });

    document.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.classList.add("hidden");
        }
    });
</script>
@endsection