<html>

<head>
    <title>
        Job Search
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
        .scrollable {
            max-height: 400px;
            overflow-y: auto;
        }

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <script>
        function showDetails(job) {
            const details = {
                'data-analyst': {
                    title: 'Data Analyst',
                    company: 'InsightData Co.',
                    type: 'Part-Time Student Job',
                    location: 'Remote',
                    closing: 'Closing in 1 week',
                    startDate: 'Ongoing',
                    applicationsOpen: '17 Oct 2024',
                    applicationsClose: '1 Dec 2024',
                    vacancies: '150',
                    salary: '₱90,000 / Month',
                    posted: 'Posted 5 mins ago',
                    benefits: [
                        'Flexible working hours – work any time from home or college!',
                        'Gain experience in data analysis'
                    ],
                    requirements: [
                        'Fluent in English',
                        'Living in The Philippines for a minimum of 5 years',
                        'Basic knowledge of data analysis tools'
                    ]
                },
                'civil-engineer': {
                    title: 'Civil Engineer',
                    company: 'BuildTech Solutions',
                    type: 'Full-time',
                    location: 'Metro Manila, Philippines',
                    closing: 'Closing in 1 week',
                    startDate: '15 Dec 2024',
                    applicationsOpen: '01 Nov 2024',
                    applicationsClose: '14 Dec 2024',
                    vacancies: '5',
                    salary: '₱70,000',
                    posted: 'Posted 10 mins ago',
                    benefits: [
                        'Opportunities for growth in construction projects',
                        'Work on high-profile infrastructure developments'
                    ],
                    requirements: [
                        'Bachelor’s degree in Civil Engineering',
                        '2+ years of experience in construction or related field',
                        'Proficiency in CAD software'
                    ]
                },

                'mathematician': {
                    title: 'Mathematician',
                    company: 'MathPro Analytics',
                    type: 'Full-time',
                    location: 'Cebu, Philippines',
                    closing: 'Closing in 3 weeks',
                    startDate: '15 Jan 2025',
                    applicationsOpen: '20 Nov 2024',
                    applicationsClose: '14 Dec 2024',
                    vacancies: '3',
                    salary: '₱85,000',
                    posted: 'Posted 1 hour ago',
                    benefits: [
                        'Flexible working environment',
                        'Collaborate on research with diverse industries'
                    ],
                    requirements: [
                        'Master’s degree in Mathematics or related field',
                        'Strong problem-solving and analytical skills',
                        'Experience in statistical modeling or computational tools'
                    ]
                },

                'software-developer': {
                    title: 'Software Developer',
                    company: 'CodeWorks Global',
                    type: 'Full-time',
                    location: 'Davao, Philippines',
                    closing: 'Closing in 2 weeks',
                    startDate: '20 Nov 2024',
                    applicationsOpen: '01 Nov 2024',
                    applicationsClose: '14 Nov 2024',
                    vacancies: '7',
                    salary: '₱100,000',
                    posted: 'Posted 2 hours ago',
                    benefits: [
                        'Work with cutting-edge technologies',
                        'Comprehensive health and dental coverage'
                    ],
                    requirements: [
                        'Bachelor’s degree in Computer Science or related field',
                        'Experience with multiple programming languages',
                        'Knowledge of software development lifecycle'
                    ]
                },

                'corporate-lawyer': {
                    title: 'Corporate Lawyer',
                    company: 'LegalPrime Solutions',
                    type: 'Full-time',
                    location: 'Metro Manila, Philippines',
                    closing: 'Closing in 1 month',
                    startDate: '01 Jan 2025',
                    applicationsOpen: '01 Nov 2024',
                    applicationsClose: '14 Dec 2024',
                    vacancies: '2',
                    salary: '₱100,000',
                    posted: 'Posted 1 hour ago',
                    benefits: [
                        'Work with top-tier corporate clients',
                        'Professional development opportunities'
                    ],
                    requirements: [
                        'Juris Doctor (JD) degree',
                        'Licensed to practice law in the Philippines',
                        '5+ years of corporate law experience'
                    ]
                },

                'legal-assistant': {
                    title: 'Legal Assistant',
                    company: 'CasePrep Experts',
                    type: 'Part-time',
                    location: 'Cebu, Philippines',
                    closing: 'Closing in 1 week',
                    startDate: '10 Dec 2024',
                    applicationsOpen: '15 Nov 2024',
                    applicationsClose: '14 Nov 2024',
                    vacancies: '10',
                    salary: '₱40,000',
                    posted: 'Posted 2 hours ago',
                    benefits: [
                        'Remote work flexibility',
                        'Hands-on experience in case preparation'
                    ],
                    requirements: [
                        'Bachelor’s degree in Legal Studies or related field',
                        'Strong organizational skills',
                        'Familiarity with legal document preparation'
                    ]
                },

                'hr-manager': {
                    title: 'HR Manager',
                    company: 'PeopleFirst HR',
                    type: 'Full-time',
                    location: 'Singapore',
                    closing: 'Closing in 1 month',
                    startDate: '01 Jan 2025',
                    applicationsOpen: '01 Nov 2024',
                    applicationsClose: '14 Dec 2024',
                    vacancies: '3',
                    salary: '₱60,000',
                    posted: 'Posted 1 hour ago',
                    benefits: [
                        'Shape organizational culture',
                        'Lead innovative recruitment strategies'
                    ],
                    requirements: [
                        'Bachelor’s degree in Human Resources or related field',
                        '5+ years of HR management experience',
                        'Proficiency in HR software'
                    ]
                },
                'marketing-specialist': {
                    title: 'Marketing Specialist',
                    company: 'Market Leaders',
                    type: 'Full-Time Job',
                    location: 'Cebu, Philippines',
                    closing: 'Closing in 3 weeks',
                    startDate: '15 Nov 2024',
                    applicationsOpen: '1 Oct 2024',
                    applicationsClose: '14 Nov 2024',
                    vacancies: '30',
                    salary: '₱30,000 / Month',
                    posted: 'Posted 1 week ago',
                    benefits: [
                        'Work in a dynamic team',
                        'Health and wellness programs',
                        'Performance bonuses'
                    ],
                    requirements: [
                        'Bachelor’s degree in Marketing, Business Administration, or related field',
                        'Excellent communication skills',
                        'Experience in digital marketing'
                    ]
                }
            };

            const jobDetails = details[job];
            document.getElementById('job-title').innerText = jobDetails.title;
            document.getElementById('job-company').innerText = jobDetails.company;
            document.getElementById('job-type').innerText = jobDetails.type;
            document.getElementById('job-location').innerText = jobDetails.location;
            document.getElementById('job-closing').innerText = jobDetails.closing;
            document.getElementById('job-start-date').innerText = jobDetails.startDate;
            document.getElementById('job-applications-open').innerText = jobDetails.applicationsOpen;
            document.getElementById('job-applications-close').innerText = jobDetails.applicationsClose;
            document.getElementById('job-vacancies').innerText = jobDetails.vacancies;
            document.getElementById('job-salary').innerText = jobDetails.salary;
            document.getElementById('job-posted').innerText = jobDetails.posted;

            const benefitsList = document.getElementById('job-benefits');
            benefitsList.innerHTML = '';
            jobDetails.benefits.forEach(benefit => {
                const li = document.createElement('li');
                li.innerText = benefit;
                benefitsList.appendChild(li);
            });

            const requirementsList = document.getElementById('job-requirements');
            requirementsList.innerHTML = '';
            jobDetails.requirements.forEach(requirement => {
                const li = document.createElement('li');
                li.innerText = requirement;
                requirementsList.appendChild(li);
            });
        }

        function findJobs() {
            const searchInput = document.getElementById('search-input').value.toLowerCase();
            const categorySelect = document.querySelector('select[name="category"]');
            const selectedCategory = categorySelect.value.toLowerCase();
            const datePostSelect = document.querySelector('select[name="date_posted"]');
            const selectedDatePost = datePostSelect.value.toLowerCase();
            const jobTypeSelect = document.querySelector('select[name="job-type"]');
            const selectedJobType = jobTypeSelect.value.toLowerCase();
            const salaryRangeSelect = document.querySelector('select[name="salary_range"]');
            const selectedSalaryRange = salaryRangeSelect.value.toLowerCase();
            const locationSelect = document.querySelector('select[name="location"]');
            const selectedLocation = locationSelect.value.toLowerCase();

            const jobContainer = document.querySelector('.scrollable');

            const jobs = {
                'data-analyst': {
                    title: 'Data Analyst',
                    company: 'InsightData Co.',
                    location: 'Remote',
                    salary: '₱90,000 / Month',
                    startDate: 'Ongoing',
                    closingDate: 'Closing in 1 week',
                    hiringFrom: 'IT & Computer Science',
                    posted: 'Posted 5 mins ago',
                    jobType: 'Part-time',
                    urgency: 'Urgently hiring'
                },
                'civil-engineer': {
                    title: 'Civil Engineer',
                    company: 'BuildTech Solutions',
                    location: 'Metro Manila, Philippines',
                    salary: '₱70,000 / Month',
                    startDate: '15 Dec 2024',
                    closingDate: 'Closing in 1 week',
                    hiringFrom: 'Engineering & Mathematics',
                    posted: 'Posted 10 mins ago',
                    jobType: 'Full-time',
                    urgency: 'Urgently hiring'
                },

                'mathematician': {
                    title: 'Mathematician',
                    company: 'MathPro Analytics',
                    location: 'Cebu, Philippines',
                    salary: '₱85,000 / Month',
                    startDate: '15 Jan 2025',
                    closingDate: 'Closing in 3 weeks',
                    hiringFrom: 'Engineering & Mathematics',
                    posted: 'Posted 1 hour ago',
                    jobType: 'Full-time',
                    urgency: 'Hiring soon'
                },

                'software-developer': {
                    title: 'Software Developer',
                    company: 'CodeWorks Global',
                    location: 'Davao, Philippines',
                    salary: '₱100,000 / Month',
                    startDate: '20 Nov 2024',
                    closingDate: 'Closing in 2 weeks',
                    hiringFrom: 'IT & Computer Science',
                    posted: 'Posted 2 hours ago',
                    jobType: 'Full-time',
                    urgency: 'Urgently hiring'
                },

                'corporate-lawyer': {
                    title: 'Corporate Lawyer',
                    company: 'LegalPrime Solutions',
                    location: 'Metro Manila, Philippines',
                    salary: '₱100,000 / Month',
                    startDate: '01 Jan 2025',
                    closingDate: 'Closing in 1 month',
                    hiringFrom: 'Law, Legal Studies & Justice',
                    posted: 'Posted 1 hour ago',
                    jobType: 'Full-time',
                    urgency: 'Urgently hiring'
                },

                'legal-assistant': {
                    title: 'Legal Assistant',
                    company: 'CasePrep Experts',
                    location: 'Cebu, Philippines',
                    salary: '₱40,000 / Month',
                    startDate: '10 Dec 2024',
                    closingDate: 'Closing in 1 week',
                    hiringFrom: 'Law, Legal Studies & Justice',
                    posted: 'Posted 2 hours ago',
                    jobType: 'Part-time',
                    urgency: 'Urgently hiring'
                },

                'hr-manager': {
                    title: 'HR Manager',
                    company: 'PeopleFirst HR',
                    location: 'Singapore',
                    salary: '₱60,000 / Month',
                    startDate: '01 Jan 2025',
                    closingDate: 'Closing in 1 month',
                    hiringFrom: 'Business & Management',
                    posted: 'Posted 1 hour ago',
                    jobType: 'Full-time',
                    urgency: 'Hiring soon'
                },

                'marketing-specialist': {
                    title: 'Marketing Specialist',
                    company: 'Market Leaders',
                    location: 'Cebu, Philippines',
                    salary: '₱30,000 / Month',
                    startDate: '15 Nov 2024',
                    closingDate: 'Closing in 5 days',
                    hiringFrom: 'Business & Management',
                    posted: 'Posted 1 week ago',
                    jobType: 'Part-time',
                    urgency: 'Urgently hiring'
                }
            };


            const filterByDate = (jobPostedDate) => {
                const currentDate = new Date();
                let jobDate;

                console.log('Job Posted Date:', jobPostedDate);

                const match = jobPostedDate.match(/Posted (\d+) (days|hours|minutes?|mins?|weeks?) ago/);
                if (!match) {
                    console.error('Date format mismatch:', jobPostedDate);
                    return false;
                }

                const value = parseInt(match[1], 10);
                const unit = match[2];

                if (unit === 'days') {
                    jobDate = new Date(currentDate.getTime() - value * 24 * 60 * 60 * 1000);
                } else if (unit === 'hours') {
                    jobDate = new Date(currentDate.getTime() - value * 60 * 60 * 1000);
                } else if (unit === 'minute' || unit === 'mins') {
                    jobDate = new Date(currentDate.getTime() - value * 60 * 1000);
                } else if (unit === 'week' || unit === 'weeks') {
                    jobDate = new Date(currentDate.getTime() - value * 7 * 24 * 60 * 60 * 1000);
                }

                const diffInHours = (currentDate - jobDate) / (1000 * 3600);


                console.log('Selected Date Post:', selectedDatePost);


                if (selectedDatePost === '24_hours' && diffInHours <= 24) return true;
                if (selectedDatePost === '7_days' && diffInHours <= 24 * 7) return true;
                if (selectedDatePost === '30_days' && diffInHours <= 24 * 30) return true;
                return false;
            };


            const filterBySalary = (jobSalary) => {
                const salaryValue = parseInt(jobSalary.replace(/[^0-9]/g, ''));

                if (selectedSalaryRange === '0-20000' && salaryValue < 20000) return true;
                if (selectedSalaryRange === '21000-49000' && salaryValue >= 21000 && salaryValue <= 49000) return true;
                if (selectedSalaryRange === '50000-80000' && salaryValue >= 50000 && salaryValue <= 80000) return true;
                return false;
            };

            const filteredJobs = Object.entries(jobs).filter(([key, job]) => {
                const matchesSearch = job.title.toLowerCase().includes(searchInput);
                const matchesCategory = selectedCategory === '' || job.hiringFrom.toLowerCase().includes(selectedCategory);
                const matchesDatePost = selectedDatePost === '' || filterByDate(job.posted);
                const matchesJobType = selectedJobType === '' || job.jobType.toLowerCase() === selectedJobType;
                const matchesSalaryRange = selectedSalaryRange === '' || filterBySalary(job.salary);
                const matchesLocation = selectedLocation === '' || job.location.toLowerCase().includes(selectedLocation);

                return matchesSearch && matchesCategory && matchesDatePost && matchesJobType && matchesSalaryRange && matchesLocation;
            });

            jobContainer.innerHTML = '';

            if (filteredJobs.length === 0) {

                jobContainer.innerHTML = `<p class="text-gray-500">No jobs found for the selected filters.</p>`;
            } else {

                filteredJobs.forEach(([key, job]) => {
                    const jobCard = document.createElement('div');
                    jobCard.className = 'bg-white p-2 rounded-lg shadow-md border border-gray-300 mb-2';
                    jobCard.innerHTML = `
                            <h3 class="text-lg font-bold text-blue-600">${job.title}</h3>
                            <p class="text-red-500">
                                <i class="fas fa-exclamation-circle"></i> ${job.closingDate}
                            </p>
                            <p class="text-gray-600"><i class="fas fa-map-marker-alt"></i> ${job.location}</p>
                            <p class="text-lg font-bold">${job.salary}</p>
                            <p class="text-gray-600">START DATE</p>
                            <p class="text-gray-800">${job.startDate}</p>
                            <p class="text-gray-600">HIRING STUDENTS FROM</p>
                            <p class="text-gray-800">${job.hiringFrom}</p>
                            <p>${job.posted}</p>
                            <div class="flex items-center text-sm">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded mr-2">${job.jobType}</span>
                                <span class="bg-red-100 text-red-700 px-2 py-1 rounded">${job.urgency}</span>
                            </div>
                            <button class="bg-blue-500 text-white p-1 rounded-lg mt-2 w-full" onclick="applyJob()">
                                Apply
                            </button>
                        `;
                    jobCard.addEventListener('click', () => {
                        showDetails(key);
                    });
                    jobContainer.appendChild(jobCard);
                });
            }
        }



        function applyJob() {
            window.open('application.html', '_blank');
        }

    </script>
</head>

<body class="bg-gray-100">
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

    <div class="max-w-7xl mx-auto p-4">
        <div class="bg-white p-4 rounded-lg shadow-md flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold">
                    Find your dream job
                </h1>
                <p class="text-gray-600">
                    Looking for jobs? Browse our latest job openings to view &amp; apply to the best jobs today!
                </p>
            </div>
            <img alt="Company logo" class="w-20 h-20" height="80"
                src="https://storage.googleapis.com/a1aa/image/o0AtELopnHbQBBwvT6OyQ5sxgwrsveEhEBv5Qf8Q1RXRzPyTA.jpg"
                width="80" />
        </div>

        <div class="mt-4 bg-white p-4 rounded-lg shadow-md">
            <div class="flex space-x-2">
                <input name="keyword" id="search-input" class="w-1/2 p-1 border border-gray-300 rounded-lg"
                    placeholder="Search job title or keyword" type="text" />
                <select name="category" class="w-1/2 p-1 border border-gray-300 rounded-lg">
                    <option value="">--Select Category--</option>
                    <option value="Business & Management">Business & Management</option>
                    <option value="IT & Computer Science">IT & Computer Science</option>
                    <option value="Engineering & Mathematics">Engineering & Mathematics</option>
                    <option value="Law, Legal Studies & Justice">Law, Legal Studies & Justice</option>
                </select>
                <button type="submit" class="bg-green-500 text-white p-1 rounded-lg w-1/4" onclick="findJobs()">
                    Find jobs
                </button>
            </div>
            <div class="flex space-x-2 mt-2">
                <div class="w-1/4">
                    <label class="block text-gray-700" for="date-post">
                        Date post
                    </label>
                    <select name="date_posted" class="w-full p-1 border border-gray-300 rounded-lg" id="date-post">
                        <option value="">All Dates</option>
                        <option value="24_hours">Last 24 Hours</option>
                        <option value="7_days">Last 7 Days</option>
                        <option value="30_days">Last 30 Days</option>
                    </select>
                </div>
                <div class="w-1/4">
                    <label class="block text-gray-700" for="job-type">
                        Job Type
                    </label>
                    <select name="job-type" class="w-full p-1 border border-gray-300 rounded-lg" id="job-type">
                        <option value="">All Job Types</option>
                        <option value="Full-time">Full-time</option>
                        <option value="Part-time">Part-time</option>
                        <option value="Internship">Internship</option>
                    </select>
                </div>



                <div class="w-1/4">
                    <label class="block text-gray-700" for="range-salary">
                        Range Salary
                    </label>
                    <select name="salary_range" class="w-full p-1 border border-gray-300 rounded-lg" id="range-salary">
                        <option value="">All Salary Ranges</option>
                        <option value="0-20000">Below ₱20,000</option>
                        <option value="21000-49000">₱21,000 - ₱49,000</option>
                        <option value="50000-80000">₱50,000 - ₱80,000</option>
                    </select>

                    <script>
                        document.getElementById('salaryRange').addEventListener('change', function () {
                            const value = this.value;

                            let minSalary = 0;
                            let maxSalary = Infinity;

                            if (value === '0-20000') {
                                maxSalary = 20000;
                            } else if (value === '21000-49000') {
                                minSalary = 21000;
                                maxSalary = 49000;
                            } else if (value === '50000-80000') {
                                minSalary = 50000;
                                maxSalary = 80000;
                            }

                            console.log('Selected Range:', minSalary, 'to', maxSalary);
                        });
                    </script>

                </div>
                <div class="w-1/4">
                    <label class="block text-gray-700" for="location">
                        Location
                    </label>
                    <select name="location" class="w-full p-1 border border-gray-300 rounded-lg" id="location">
                        <option value="">All Locations</option>
                        <option value="Metro Manila, Philippines">Metro Manila, Philippines</option>
                        <option value="Cebu, Philippines">Cebu, Philippines</option>
                        <option value="Davao, Philippines">Davao, Philippines</option>
                        <option value="Singapore">Singapore</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mt-4 flex space-x-2">
            <div class="w-1/3">
                <h2 class="text-xl font-bold">
                    Job results
                </h2>
                <div class="scrollable mt-2">

                    <div class="bg-white p-2 rounded-lg shadow-md border border-gray-300 mb-2"
                        onclick="showDetails('data-analyst')">
                        <h3 class="text-lg font-bold text-blue-600">
                            Data Analyst
                        </h3>
                        <p class="text-red-500">
                            <i class="fas fa-exclamation-circle">
                            </i>
                            Closing in 1 week
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-map-marker-alt">
                            </i>
                            Remote
                        </p>
                        <p class="text-lg font-bold">
                            ₱90,000 / Month
                        </p>
                        <p class="text-gray-600">
                            START DATE
                        </p>
                        <p class="text-gray-800">
                            Ongoing
                        </p>
                        <p class="text-gray-600">
                            HIRING STUDENTS FROM
                        </p>
                        <p class="text-gray-800">
                            IT &amp; Computer Science
                        </p>
                        <p>
                            Posted 5 mins ago
                        </p>
                        <div class="flex items-center text-sm">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded mr-2">
                                Part-time
                            </span>
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded">
                                Urgently hiring
                            </span>
                        </div>
                        <button class="bg-blue-500 text-white p-1 rounded-lg mt-2 w-full" onclick="applyJob()">
                            Apply
                        </button>
                    </div>


                    <div class="bg-white p-2 rounded-lg shadow-md border border-gray-300 mb-2"
                        onclick="showDetails('mathematician')">
                        <h3 class="text-lg font-bold text-blue-600">
                            Mathematician
                        </h3>
                        <p class="text-red-500">
                            <i class="fas fa-exclamation-circle">
                            </i>
                            Closing in 3 weeks
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-map-marker-alt">
                            </i>
                            Cebu, Philippines
                        </p>
                        <p class="text-lg font-bold">
                            ₱85,000 / Month
                        </p>
                        <p class="text-gray-600">
                            START DATE
                        </p>
                        <p class="text-gray-800">
                            15 Jan 2025
                        </p>
                        <p class="text-gray-600">
                            HIRING STUDENTS FROM
                        </p>
                        <p class="text-gray-800">
                            Engineering & Mathematics
                        </p>
                        <p>
                            Posted 1 hour ago
                        </p>
                        <div class="flex items-center text-sm">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded mr-2">
                                Full-time
                            </span>
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded">
                                Hiring soon
                            </span>
                        </div>
                        <button class="bg-blue-500 text-white p-1 rounded-lg mt-2 w-full" onclick="applyJob()">
                            Apply
                        </button>
                    </div>


                    <div class="bg-white p-2 rounded-lg shadow-md border border-gray-300 mb-2"
                        onclick="showDetails('corporate-lawyer')">
                        <h3 class="text-lg font-bold text-blue-600">
                            Corporate Lawyer
                        </h3>
                        <p class="text-red-500">
                            <i class="fas fa-exclamation-circle">
                            </i>
                            Closing in 1 month
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-map-marker-alt">
                            </i>
                            Metro Manila, Philippines
                        </p>
                        <p class="text-lg font-bold">
                            ₱150,000 / Month
                        </p>
                        <p class="text-gray-600">
                            START DATE
                        </p>
                        <p class="text-gray-800">
                            01 Jan 2025
                        </p>
                        <p class="text-gray-600">
                            HIRING STUDENTS FROM
                        </p>
                        <p class="text-gray-800">
                            Law, Legal Studies & Justice
                        </p>
                        <p>
                            Posted 1 hour ago
                        </p>
                        <div class="flex items-center text-sm">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded mr-2">
                                Full-time
                            </span>
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded">
                                Urgently hiring
                            </span>
                        </div>
                        <button class="bg-blue-500 text-white p-1 rounded-lg mt-2 w-full" onclick="applyJob()">
                            Apply
                        </button>
                    </div>

                    <div class="bg-white p-2 rounded-lg shadow-md border border-gray-300 mb-2"
                        onclick="showDetails('software-developer')">
                        <h3 class="text-lg font-bold text-blue-600">
                            Software Developer
                        </h3>
                        <p class="text-red-500">
                            <i class="fas fa-exclamation-circle">
                            </i>
                            Closing in 2 weeks
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-map-marker-alt">
                            </i>
                            Davao, Philippines
                        </p>
                        <p class="text-lg font-bold">
                            ₱100,000 / Month
                        </p>
                        <p class="text-gray-600">
                            START DATE
                        </p>
                        <p class="text-gray-800">
                            20 Nov 2024
                        </p>
                        <p class="text-gray-600">
                            HIRING STUDENTS FROM
                        </p>
                        <p class="text-gray-800">
                            IT & Computer Science
                        </p>
                        <p>
                            Posted 2 hours ago
                        </p>
                        <div class="flex items-center text-sm">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded mr-2">
                                Full-time
                            </span>
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded">
                                Urgently hiring
                            </span>
                        </div>
                        <button class="bg-blue-500 text-white p-1 rounded-lg mt-2 w-full" onclick="applyJob()">
                            Apply
                        </button>
                    </div>

                    <div class="bg-white p-2 rounded-lg shadow-md border border-gray-300 mb-2"
                        onclick="showDetails('civil-engineer')">
                        <h3 class="text-lg font-bold text-blue-600">
                            Civil Engineer
                        </h3>
                        <p class="text-red-500">
                            <i class="fas fa-exclamation-circle">
                            </i>
                            Closing in 1 week
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-map-marker-alt">
                            </i>
                            Metro Manila, Philippines
                        </p>
                        <p class="text-lg font-bold">
                            ₱70,000 / Month
                        </p>
                        <p class="text-gray-600">
                            START DATE
                        </p>
                        <p class="text-gray-800">
                            15 Dec 2024
                        </p>
                        <p class="text-gray-600">
                            HIRING STUDENTS FROM
                        </p>
                        <p class="text-gray-800">
                            Engineering & Construction
                        </p>
                        <p>
                            Posted 10 mins ago
                        </p>
                        <div class="flex items-center text-sm">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded mr-2">
                                Full-time
                            </span>
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded">
                                Urgently hiring
                            </span>
                        </div>
                        <button class="bg-blue-500 text-white p-1 rounded-lg mt-2 w-full" onclick="applyJob()">
                            Apply
                        </button>
                    </div>

                    <div class="bg-white p-2 rounded-lg shadow-md border border-gray-300 mb-2"
                        onclick="showDetails('legal-assistant')">
                        <h3 class="text-lg font-bold text-blue-600">
                            Legal Assistant
                        </h3>
                        <p class="text-red-500">
                            <i class="fas fa-exclamation-circle">
                            </i>
                            Closing in 1 week
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-map-marker-alt">
                            </i>
                            Cebu, Philippines
                        </p>
                        <p class="text-lg font-bold">
                            ₱40,000 / Month
                        </p>
                        <p class="text-gray-600">
                            START DATE
                        </p>
                        <p class="text-gray-800">
                            10 Dec 2024
                        </p>
                        <p class="text-gray-600">
                            HIRING STUDENTS FROM
                        </p>
                        <p class="text-gray-800">
                            Law, Legal Studies & Justice
                        </p>
                        <p>
                            Posted 2 hours ago
                        </p>
                        <div class="flex items-center text-sm">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded mr-2">
                                Part-time
                            </span>
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded">
                                Urgently hiring
                            </span>
                        </div>
                        <button class="bg-blue-500 text-white p-1 rounded-lg mt-2 w-full" onclick="applyJob()">
                            Apply
                        </button>
                    </div>

                    <div class="bg-white p-2 rounded-lg shadow-md border border-gray-300 mb-2"
                        onclick="showDetails('hr-manager')">
                        <h3 class="text-lg font-bold text-blue-600">
                            HR Manager
                        </h3>
                        <p class="text-red-500">
                            <i class="fas fa-exclamation-circle">
                            </i>
                            Closing in 1 month
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-map-marker-alt">
                            </i>
                            Singapore
                        </p>
                        <p class="text-lg font-bold">
                            ₱90,000 / Month
                        </p>
                        <p class="text-gray-600">
                            START DATE
                        </p>
                        <p class="text-gray-800">
                            01 Jan 2025
                        </p>
                        <p class="text-gray-600">
                            HIRING STUDENTS FROM
                        </p>
                        <p class="text-gray-800">
                            Business Management
                        </p>
                        <p>
                            Posted 1 hour ago
                        </p>
                        <div class="flex items-center text-sm">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded mr-2">
                                Full-time
                            </span>
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded">
                                Urgently hiring
                            </span>
                        </div>
                        <button class="bg-blue-500 text-white p-1 rounded-lg mt-2 w-full" onclick="applyJob()">
                            Apply
                        </button>
                    </div>



                    <div class="bg-white p-2 rounded-lg shadow-md border border-gray-300 mb-2"
                        onclick="showDetails('marketing-specialist')">
                        <h3 class="text-lg font-bold text-blue-600">
                            Marketing Specialist
                        </h3>
                        <p class="text-red-500">
                            <i class="fas fa-exclamation-circle">
                            </i>
                            Closing in 3 weeks
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-map-marker-alt">
                            </i>
                            Cebu, Philippines
                        </p>
                        <p class="text-lg font-bold">
                            ₱30,000 / Month
                        </p>
                        <p class="text-gray-600">
                            START DATE
                        </p>
                        <p class="text-gray-800">
                            15 Nov 2024
                        </p>
                        <p class="text-gray-600">
                            HIRING STUDENTS FROM
                        </p>
                        <p class="text-gray-800">
                            Business Administration
                        </p>
                        <p>
                            Posted 1 week ago
                        </p>
                        <div class="flex items-center text-sm">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded mr-2">
                                Full-time
                            </span>
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded">
                                Urgently hiring
                            </span>
                        </div>
                        <button class="bg-blue-500 text-white p-1 rounded-lg mt-2 w-full" onclick="applyJob()">
                            Apply
                        </button>
                    </div>
                </div>
            </div>

            <div class="w-2/3">
                <div class="scrollable bg-white p-4 rounded-lg shadow-md border border-gray-300">
                    <h3 class="text-2xl font-bold text-blue-600" id="job-title">
                        Data Analyst
                    </h3>
                    <p class="text-gray-600">
                        <a class="text-blue-500" href="#" id="job-company">
                            InsightData Co.
                        </a>
                        •
                        <span id="job-type">
                            Part-Time Student Job
                        </span>
                        •
                        <i class="fas fa-map-marker-alt">
                        </i>
                        <span id="job-location">
                            Remote
                        </span>
                    </p>
                    <p class="text-red-500" id="job-closing">
                        <i class="fas fa-exclamation-circle">
                        </i>
                        Closing in 1 week
                    </p>
                    <div class="bg-gray-100 p-2 rounded-lg mt-2">
                        <div class="grid grid-cols-3 gap-2">
                            <div>
                                <p class="text-gray-600">
                                    START DATE
                                </p>
                                <p class="text-gray-800" id="job-start-date">
                                    Ongoing
                                </p>
                            </div>
                            <div>
                                <p class="text-gray-600">
                                    APPLICATIONS OPEN
                                </p>
                                <p class="text-gray-800" id="job-applications-open">
                                    17 Oct 2024
                                </p>
                            </div>
                            <div>
                                <p class="text-gray-600">
                                    APPLICATIONS CLOSE
                                </p>
                                <p class="text-gray-800" id="job-applications-close">
                                    1 Dec 2024
                                </p>
                            </div>
                            <div>
                                <p class="text-gray-600">
                                    NUMBER OF VACANCIES
                                </p>
                                <p class="text-gray-800" id="job-vacancies">
                                    150
                                </p>
                            </div>
                            <div>
                                <p class="text-gray-600">
                                    SALARY
                                </p>
                                <p class="text-gray-800" id="job-salary">
                                    ₱200 / Hour
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <h4 class="font-bold">
                            Benefits
                        </h4>
                        <ul class="list-disc list-inside" id="job-benefits">
                            <li>
                                Flexible working hours – work any time from home or college!
                            </li>
                            <li>
                                Gain experience in data analysis
                            </li>
                        </ul>
                    </div>
                    <div class="mt-2">
                        <h4 class="font-bold">
                            Basic Requirements
                        </h4>
                        <ul class="list-disc list-inside" id="job-requirements">
                            <li>
                                Fluent in English
                            </li>
                            <li>
                                Living in The Philippines for a minimum of 5 years
                            </li>
                            <li>
                                Basic knowledge of data analysis tools
                            </li>
                        </ul>
                    </div>
                    <p id="job-posted">
                        Posted 5 mins ago
                    </p>
                    <button class="bg-blue-500 text-white p-2 rounded-lg mt-4 w-full" onclick="applyJob()">
                        Apply
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>