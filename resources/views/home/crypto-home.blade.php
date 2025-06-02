<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Effety Hassan | Senior Software Engineer</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        }
        .skill-badge {
            transition: all 0.3s ease;
        }
        .skill-badge:hover {
            transform: translateY(-2px);
        }
        .timeline-item:before {
            content: '';
            position: absolute;
            left: -30px;
            top: 0;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #4f46e5;
            border: 3px solid #e0e7ff;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
    <!-- Floating Action Buttons -->
    <div class="fixed right-6 bottom-6 z-50 flex flex-col space-y-3">
        <a href="https://linkedin.com/in/md-mukul-hossain-a9839bb4" target="_blank" class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white shadow-lg hover:bg-blue-700 transition-colors">
            <i class="fab fa-linkedin-in text-xl"></i>
        </a>
        <a href="https://github.com/effety" target="_blank" class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center text-white shadow-lg hover:bg-gray-900 transition-colors">
            <i class="fab fa-github text-xl"></i>
        </a>
        <a href="mailto:effety@gmail.com" class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center text-white shadow-lg hover:bg-red-600 transition-colors">
            <i class="fas fa-envelope text-xl"></i>
        </a>
    </div>

    <!-- Hero Section -->
    <header class="gradient-bg text-white py-16">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-8 md:mb-0 flex justify-center">
                    <div class="w-48 h-48 rounded-full bg-white/10 border-4 border-white/20 flex items-center justify-center overflow-hidden">
                        <!-- Replace with your photo -->
                        <div class="text-6xl text-white/80 flex items-center justify-center w-full h-full bg-indigo-700">
                            <span>EH</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-2/3 md:pl-12 text-center md:text-left">
                    <h1 class="text-4xl md:text-5xl font-bold mb-2">Effety Hassan</h1>
                    <h2 class="text-2xl md:text-3xl font-semibold text-indigo-200 mb-4">Senior Software Engineer</h2>
                    <p class="text-lg text-indigo-100 max-w-2xl mx-auto md:mx-0">
                        Experienced full-stack developer specializing in Python, AI/ML, Automation, and Web Development with 8+ years in the software industry.
                    </p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4 mt-6">
                        <a href="mailto:effety@gmail.com" class="flex items-center bg-white/10 hover:bg-white/20 px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-envelope mr-2"></i> effety@gmail.com
                        </a>
                        <a href="tel:+8801989154755" class="flex items-center bg-white/10 hover:bg-white/20 px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-phone mr-2"></i> (+880) 1989154755
                        </a>
                        <div class="flex items-center bg-white/10 hover:bg-white/20 px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-map-marker-alt mr-2"></i> Jessor, Bangladesh
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 md:px-6 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Column -->
            <div class="lg:w-1/3 space-y-6">
                <!-- About Section -->
                <section class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-user mr-3 text-indigo-600"></i> About Me
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        I am an experienced software engineer with expertise in Python, AI/ML, and automation technologies. I specialize in building intelligent systems and scalable solutions with a focus on quality and performance.
                    </p>
                </section>

                <!-- Skills Section -->
                <section class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-code mr-3 text-indigo-600"></i> Technical Skills
                    </h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">AI/ML & Automation</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Python</span>
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Machine Learning</span>
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Artificial Intelligence</span>
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Automation</span>
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Kivy</span>
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">TensorFlow</span>
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">PyTorch</span>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Web Development</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Laravel</span>
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">PHP</span>
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">JavaScript</span>
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Vue.js</span>
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">REST API</span>
                                <span class="skill-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">MySQL</span>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Languages</h3>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                                    <span>English (Fluent)</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                                    <span>Hindi (Fluent)</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                                    <span>Bengali (Fluent)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Right Column -->
            <div class="lg:w-2/3 space-y-6">
                <!-- Experience Section -->
                <section class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6 flex items-center">
                        <i class="fas fa-briefcase mr-3 text-indigo-600"></i> Professional Experience
                    </h2>
                    
                    <div class="relative pl-8 space-y-8">
                        <!-- Current Job -->
                        <div class="timeline-item relative">
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start mb-1">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Sr. Software Engineer</h3>
                                <span class="inline-block bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm mt-1 sm:mt-0">Feb 2024 - Present</span>
                            </div>
                            <p class="text-indigo-600 dark:text-indigo-400 font-medium">Swissinvest Limited | Switzerland</p>
                            <ul class="mt-3 space-y-2 text-gray-600 dark:text-gray-300 list-disc pl-5">
                                <li>Developing AI-powered financial analysis tools using Python and machine learning</li>
                                <li>Building automated trading systems and data pipelines</li>
                                <li>Leading a team of developers in implementing ML models</li>
                            </ul>
                        </div>
                        
                        <!-- Previous Jobs -->
                        <div class="timeline-item relative pt-8 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start mb-1">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Sr. Software Engineer (Lead)</h3>
                                <span class="inline-block bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm mt-1 sm:mt-0">Jul 2023 - Feb 2024</span>
                            </div>
                            <p class="text-indigo-600 dark:text-indigo-400 font-medium">Neutron Ltd. | Khulna, Bangladesh</p>
                            <ul class="mt-3 space-y-2 text-gray-600 dark:text-gray-300 list-disc pl-5">
                                <li>Developed computer vision applications for industrial automation</li>
                                <li>Implemented predictive maintenance systems using ML</li>
                                <li>Optimized manufacturing processes through automation</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Projects/Highlights Section -->
                <section class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6 flex items-center">
                        <i class="fas fa-star mr-3 text-indigo-600"></i> Key Highlights
                    </h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 dark:bg-gray-700 p-5 rounded-lg border border-gray-200 dark:border-gray-600">
                            <div class="flex items-center mb-3">
                                <div class="bg-indigo-100 dark:bg-indigo-900 p-2 rounded-lg mr-4">
                                    <i class="fas fa-brain text-indigo-600 dark:text-indigo-300"></i>
                                </div>
                                <h3 class="text-lg font-semibold">AI/ML Expertise</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">Developed multiple machine learning models for predictive analytics and natural language processing applications.</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-700 p-5 rounded-lg border border-gray-200 dark:border-gray-600">
                            <div class="flex items-center mb-3">
                                <div class="bg-indigo-100 dark:bg-indigo-900 p-2 rounded-lg mr-4">
                                    <i class="fas fa-robot text-indigo-600 dark:text-indigo-300"></i>
                                </div>
                                <h3 class="text-lg font-semibold">Automation Specialist</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">Built numerous automation systems that improved efficiency by 40-60% across various business processes.</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-700 p-5 rounded-lg border border-gray-200 dark:border-gray-600">
                            <div class="flex items-center mb-3">
                                <div class="bg-indigo-100 dark:bg-indigo-900 p-2 rounded-lg mr-4">
                                    <i class="fas fa-project-diagram text-indigo-600 dark:text-indigo-300"></i>
                                </div>
                                <h3 class="text-lg font-semibold">Python Development</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">Created high-performance Python applications including desktop apps with Kivy and data processing pipelines.</p>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-700 p-5 rounded-lg border border-gray-200 dark:border-gray-600">
                            <div class="flex items-center mb-3">
                                <div class="bg-indigo-100 dark:bg-indigo-900 p-2 rounded-lg mr-4">
                                    <i class="fas fa-users text-indigo-600 dark:text-indigo-300"></i>
                                </div>
                                <h3 class="text-lg font-semibold">Technical Leadership</h3>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">Mentored junior developers in AI/ML technologies and led multiple successful project deliveries.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <h3 class="text-2xl font-bold mb-4">Let's Connect</h3>
            <div class="flex justify-center space-x-6 mb-6">
                <a href="mailto:effety@gmail.com" class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-colors">
                    <i class="fas fa-envelope text-xl"></i>
                </a>
                <a href="tel:+8801989154755" class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-colors">
                    <i class="fas fa-phone text-xl"></i>
                </a>
                <a href="https://linkedin.com/in/md-mukul-hossain-a9839bb4" target="_blank" class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-colors">
                    <i class="fab fa-linkedin-in text-xl"></i>
                </a>
                <a href="https://github.com/effety" target="_blank" class="w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-colors">
                    <i class="fab fa-github text-xl"></i>
                </a>
            </div>
            <p>&copy; {{ date('Y') }} Effety Hassan. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Simple dark mode toggle
        document.addEventListener('DOMContentLoaded', function() {
            // Check for saved dark mode preference
            if (localStorage.getItem('darkMode') === 'true') {
                document.documentElement.classList.add('dark');
            } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
            }
        });
    </script>
</body>
</html>