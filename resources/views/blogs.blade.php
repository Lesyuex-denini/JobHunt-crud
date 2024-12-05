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

    <div class="container mx-auto px-4">
        <div class="my-8">
            <h1 class="text-2xl font-bold text-center bg-gray-200 py-2 rounded">Featured Posts</h1>
        </div>

        <!-- Featured Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="https://www.sociolegalcorp.com/wp-content/uploads/2023/09/Master-1024x576.jpg"
                    alt="A person working on a laptop with a coffee cup beside them" class="w-full h-48 object-cover">
                <div class="p-4 flex-1">
                    <h2 class="text-xl font-bold text-blue-500">Your Dream Job is Just a Click Away!</h2>
                    <p class="mt-2">Find top-tier job listings tailored to your skills and interests.</p>
                    <a href="#" onclick="openArticleModal(1)" class="text-blue-500 font-bold mt-4 inline-block">Read
                        Full
                        Article</a>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="https://blog.clickmeeting.com/uploads//2023/01/blog-43.jpg"
                    alt="A group of people attending a seminar" class="w-full h-48 object-cover">
                <div class="p-4 flex-1">
                    <h2 class="text-xl font-bold text-blue-500">Learn from Experts, Grow Your Network!</h2>
                    <p class="mt-2">Boost your career with exclusive seminars led by industry professionals.</p>
                    <a href="#" onclick="openArticleModal(2)" class="text-blue-500 font-bold mt-4 inline-block">Read
                        Full
                        Article</a>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="https://img.freepik.com/free-photo/view-professional-handshake-business-people_23-2150917092.jpg"
                    alt="Two professionals shaking hands" class="w-full h-48 object-cover">
                <div class="p-4 flex-1">
                    <h2 class="text-xl font-bold text-blue-500">Connect, Collaborate, and Conquer!</h2>
                    <p class="mt-2">Build meaningful connections with leading professionals in your industry.</p>
                    <a href="#" onclick="openArticleModal(3)" class="text-blue-500 font-bold mt-4 inline-block">Read
                        Full
                        Article</a>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="https://www.designbolts.com/wp-content/uploads/2019/01/Business-Deal-Free-Stock-Photo-1.jpg"
                    alt="A business deal being made" class="w-full h-48 object-cover">
                <div class="p-4 flex-1">
                    <h2 class="text-xl font-bold text-blue-500">Your Dream Job is Just a Click Away!</h2>
                    <p class="mt-2">Find top-tier job listings tailored to your skills and interests.</p>
                    <a href="#" onclick="openArticleModal(4)" class="text-blue-500 font-bold mt-4 inline-block">Read
                        Full
                        Article</a>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="https://as1.ftcdn.net/v2/jpg/00/28/22/88/1000_F_28228849_ET3bez9mXDwmyLbTXeTrRlgv8fbrdjji.jpg"
                    alt="A person giving a presentation" class="w-full h-48 object-cover">
                <div class="p-4 flex-1">
                    <h2 class="text-xl font-bold text-blue-500">Learn from Experts, Grow Your Network!</h2>
                    <p class="mt-2">Boost your career with exclusive seminars led by industry professionals.</p>
                    <a href="#" onclick="openArticleModal(5)" class="text-blue-500 font-bold mt-4 inline-block">Read
                        Full
                        Article</a>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <img src="https://priorityconsultingfirm.com/wp-content/uploads/2022/12/tax-checklist.jpg"
                    alt="A checklist on a desk" class="w-full h-48 object-cover">
                <div class="p-4 flex-1">
                    <h2 class="text-xl font-bold text-blue-500">Connect, Collaborate, and Conquer!</h2>
                    <p class="mt-2">Build meaningful connections with leading professionals in your industry.</p>
                    <a href="#" onclick="openArticleModal(6)" class="text-blue-500 font-bold mt-4 inline-block">Read
                        Full
                        Article</a>
                </div>
            </div>
        </div>

        <!-- Article Modals -->
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden" id="article-modal-1">
            <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 md:w-2/3 lg:w-1/2 relative">
                <button class="absolute top-2 right-2 text-2xl text-gray-600" onclick="closeArticleModal(1)">×</button>
                <h2 class="text-2xl font-bold text-blue-500 mb-4">Your Dream Job is Just a Click Away!</h2>
                <p>This is the full article content for your dream job. You can write more details about this article
                    here.
                </p>
                <h3 class="text-xl font-bold mt-4">Introduction</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis ligula vel elit dignissim,
                    sed
                    congue eros feugiat.</p>
                <h3 class="text-xl font-bold mt-4">The Importance of Finding the Right Job</h3>
                <p>Finding the right job is crucial for your career development. It impacts your financial stability,
                    work-life balance, and personal growth.</p>
                <h3 class="text-xl font-bold mt-4">Steps to Finding Your Dream Job</h3>
                <ul class="list-disc list-inside">
                    <li><strong>Step 1:</strong> Research the industry you're interested in.</li>
                    <li><strong>Step 2:</strong> Update your resume and LinkedIn profile to match your skills and goals.
                    </li>
                    <li><strong>Step 3:</strong> Network with industry professionals and attend career fairs.</li>
                    <li><strong>Step 4:</strong> Apply to job listings that match your qualifications and aspirations.
                    </li>
                </ul>
                <h3 class="text-xl font-bold mt-4">Conclusion</h3>
                <p>By following these steps and staying motivated, you'll be on your way to finding the job that suits
                    your
                    skills and passions.</p>
            </div>
        </div>

        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden" id="article-modal-2">
            <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 md:w-2/3 lg:w-1/2 relative">
                <button class="absolute top-2 right-2 text-2xl text-gray-600" onclick="closeArticleModal(2)">×</button>
                <h2 class="text-2xl font-bold text-blue-500 mb-4">Learn from Experts, Grow Your Network!</h2>
                <p>Learning from industry experts is one of the best ways to grow your knowledge and expand your
                    professional network. By attending workshops, webinars, or networking events, you can gain valuable
                    insights that can help you accelerate your career.</p>
                <h3 class="text-xl font-bold mt-4">Why Learning from Experts is Valuable</h3>
                <p>Experts bring years of experience and practical knowledge to the table, which can give you a
                    competitive
                    edge in your job search and professional development.</p>
                <h3 class="text-xl font-bold mt-4">How to Network with Experts</h3>
                <ul class="list-disc list-inside">
                    <li><strong>Step 1:</strong> Attend industry conferences and events.</li>
                    <li><strong>Step 2:</strong> Join professional organizations or online communities.</li>
                    <li><strong>Step 3:</strong> Reach out on social media platforms like LinkedIn to start
                        conversations.
                    </li>
                    <li><strong>Step 4:</strong> Offer help or support to build relationships.</li>
                </ul>
                <h3 class="text-xl font-bold mt-4">Conclusion</h3>
                <p>Networking with experts will not only help you learn but also provide you with opportunities that may
                    not
                    be available through traditional job listings.</p>
            </div>
        </div>

        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden" id="article-modal-3">
            <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 md:w-2/3 lg:w-1/2 relative">
                <button class="absolute top-2 right-2 text-2xl text-gray-600" onclick="closeArticleModal(3)">×</button>
                <h2 class="text-2xl font-bold text-blue-500 mb-4">Connect, Collaborate, and Conquer!</h2>
                <p>Building meaningful connections with professionals in your field can open doors to new opportunities
                    and
                    collaborations. Whether you're looking for a mentor, a business partner, or a potential job,
                    collaboration is key to growth.</p>
                <h3 class="text-xl font-bold mt-4">The Power of Collaboration</h3>
                <p>By working with others who share your goals and vision, you can leverage collective knowledge and
                    skills
                    to tackle larger challenges and achieve more.</p>
                <h3 class="text-xl font-bold mt-4">Tips for Effective Collaboration</h3>
                <ul class="list-disc list-inside">
                    <li><strong>Step 1:</strong> Find people whose values and goals align with yours.</li>
                    <li><strong>Step 2:</strong> Communicate clearly and regularly with your collaborators.</li>
                    <li><strong>Step 3:</strong> Stay open-minded and embrace different perspectives.</li>
                    <li><strong>Step 4:</strong> Work towards mutual goals and celebrate achievements together.</li>
                </ul>
                <h3 class="text-xl font-bold mt-4">Conclusion</h3>
                <p>Collaboration not only strengthens your professional network but also enhances your learning
                    experience,
                    making it easier to reach your career goals.</p>
            </div>
        </div>

        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden" id="article-modal-4">
            <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 md:w-2/3 lg:w-1/2 relative">
                <button class="absolute top-2 right-2 text-2xl text-gray-600" onclick="closeArticleModal(4)">×</button>
                <h2 class="text-2xl font-bold text-blue-500 mb-4">Your Dream Job is Just a Click Away!</h2>
                <p>This is the full article content for your dream job. You can write more details about this article
                    here.
                </p>
                <h3 class="text-xl font-bold mt-4">Introduction</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis ligula vel elit dignissim,
                    sed
                    congue eros feugiat.</p>
                <h3 class="text-xl font-bold mt-4">The Importance of Finding the Right Job</h3>
                <p>Finding the right job is crucial for your career development. It impacts your financial stability,
                    work-life balance, and personal growth.</p>
                <h3 class="text-xl font-bold mt-4">Steps to Finding Your Dream Job</h3>
                <ul class="list-disc list-inside">
                    <li><strong>Step 1:</strong> Research the industry you're interested in.</li>
                    <li><strong>Step 2:</strong> Update your resume and LinkedIn profile to match your skills and goals.
                    </li>
                    <li><strong>Step 3:</strong> Network with industry professionals and attend career fairs.</li>
                    <li><strong>Step 4:</strong> Apply to job listings that match your qualifications and aspirations.
                    </li>
                </ul>
                <h3 class="text-xl font-bold mt-4">Conclusion</h3>
                <p>By following these steps and staying motivated, you'll be on your way to finding the job that suits
                    your
                    skills and passions.</p>
            </div>
        </div>

        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden" id="article-modal-5">
            <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 md:w-2/3 lg:w-1/2 relative">
                <button class="absolute top-2 right-2 text-2xl text-gray-600" onclick="closeArticleModal(5)">×</button>
                <h2 class="text-2xl font-bold text-blue-500 mb-4">Learn from Experts, Grow Your Network!</h2>
                <p>Learning from industry experts is one of the best ways to grow your knowledge and expand your
                    professional network. By attending workshops, webinars, or networking events, you can gain valuable
                    insights that can help you accelerate your career.</p>
                <h3 class="text-xl font-bold mt-4">Why Learning from Experts is Valuable</h3>
                <p>Experts bring years of experience and practical knowledge to the table, which can give you a
                    competitive
                    edge in your job search and professional development.</p>
                <h3 class="text-xl font-bold mt-4">How to Network with Experts</h3>
                <ul class="list-disc list-inside">
                    <li><strong>Step 1:</strong> Attend industry conferences and events.</li>
                    <li><strong>Step 2:</strong> Join professional organizations or online communities.</li>
                    <li><strong>Step 3:</strong> Reach out on social media platforms like LinkedIn to start
                        conversations.
                    </li>
                    <li><strong>Step 4:</strong> Offer help or support to build relationships.</li>
                </ul>
                <h3 class="text-xl font-bold mt-4">Conclusion</h3>
                <p>Networking with experts will not only help you learn but also provide you with opportunities that may
                    not
                    be available through traditional job listings.</p>
            </div>
        </div>

        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden" id="article-modal-6">
            <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 md:w-2/3 lg:w-1/2 relative">
                <button class="absolute top-2 right-2 text-2xl text-gray-600" onclick="closeArticleModal(6)">×</button>
                <h2 class="text-2xl font-bold text-blue-500 mb-4">Connect, Collaborate, and Conquer!</h2>
                <p>Building meaningful connections with professionals in your field can open doors to new opportunities
                    and
                    collaborations. Whether you're looking for a mentor, a business partner, or a potential job,
                    collaboration is key to growth.</p>
                <h3 class="text-xl font-bold mt-4">The Power of Collaboration</h3>
                <p>By working with others who share your goals and vision, you can leverage collective knowledge and
                    skills
                    to tackle larger challenges and achieve more.</p>
                <h3 class="text-xl font-bold mt-4">Tips for Effective Collaboration</h3>
                <ul class="list-disc list-inside">
                    <li><strong>Step 1:</strong> Find people whose values and goals align with yours.</li>
                    <li><strong>Step 2:</strong> Communicate clearly and regularly with your collaborators.</li>
                    <li><strong>Step 3:</strong> Stay open-minded and embrace different perspectives.</li>
                    <li><strong>Step 4:</strong> Work towards mutual goals and celebrate achievements together.</li>
                </ul>
                <h3 class="text-xl font-bold mt-4">Conclusion</h3>
                <p>Collaboration not only strengthens your professional network but also enhances your learning
                    experience,
                    making it easier to reach your career goals.</p>
            </div>
        </div>

        <script>
            // JavaScript for opening and closing article modals
            function openArticleModal(modalId) {
                document.getElementById('article-modal-' + modalId).classList.remove('hidden');
            }

            function closeArticleModal(modalId) {
                document.getElementById('article-modal-' + modalId).classList.add('hidden');
            }
        </script>
</body>

</html>