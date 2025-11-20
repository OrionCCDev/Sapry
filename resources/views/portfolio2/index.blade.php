<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picto - Personal Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    @vite(['resources/css/portfolio2.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navbar -->
    <div class="sticky top-0 bg-white border-b border-gray-300 z-50 transition-all duration-1000" id="navbar">
        <div class="navbar flex justify-between mx-auto content max-w-[1320px]">
            <div class="flex items-center justify-between">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0" class="menu menu-lg dropdown-content rounded-box z-1 mt-3 w-lvw p-2 shadow font-semibold flex-nowrap bg-white text-black">
                        <li><a href="#introduction" class="hover:text-picto-primary px-5 py-3 mx-1">Home</a></li>
                        <li><a href="#profile" class="hover:text-picto-primary px-5 py-3 mx-1">About</a></li>
                        <li><a href="#work-process" class="hover:text-picto-primary px-5 py-3 mx-1">Experience</a></li>
                        <li><a href="#portfolio" class="hover:text-picto-primary px-5 py-3 mx-1">Projects</a></li>
                        <li><a href="#blog" class="hover:text-picto-primary px-5 py-3 mx-1">Education</a></li>
                        <li><a href="#services" class="hover:text-picto-primary px-5 py-3 mx-1">Skills</a></li>
                    </ul>
                </div>
                <a href="#introduction" class="flex items-center border-0 lg:max-xxl:ps-5">
                    <img src="{{ asset('assets/portfolio2/logo.png') }}" class="h-8 sm:h-14 rounded-2xl" alt="logo">
                    <p class="text-2xl sm:text-[32px] my-auto ms-[12px] font-semibold">{{ $cvData['name'] ?? 'Sabry Mokhtar' }}</p>
                </a>
            </div>
            <div class="lg:flex items-center">
                <ul class="hidden lg:flex menu menu-horizontal text-[16px] font-medium md:shrink-0">
                    <li><a href="#introduction" class="hover:text-picto-primary px-5 py-3 mx-1">Home</a></li>
                    <li><a href="#profile" class="hover:text-picto-primary px-5 py-3 mx-1">About</a></li>
                    <li><a href="#work-process" class="hover:text-picto-primary px-5 py-3 mx-1">Experience</a></li>
                    <li><a href="#portfolio" class="hover:text-picto-primary px-5 py-3 mx-1">Projects</a></li>
                    <li><a href="#blog" class="hover:text-picto-primary px-5 py-3 mx-1">Education</a></li>
                    <li><a href="#services" class="hover:text-picto-primary px-5 py-3 mx-1">Skills</a></li>
                </ul>
                <p>
                    <a href="#contact" class="btn btn-sm xs:btn-md sm:btn-lg btn-primary">Contact</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Introduction Section -->
    <div class="introduction-profile-background">
        <div class="content max-w-[1320px] mx-auto">
            <div class="flex max-lg:flex-col-reverse sm:justify-between pt-10 lg:pt-31.5 lg:mb-27.5 max-xl:gap-2 p-2 max-xxl:px-4" id="introduction">
                <div class="w-full flex flex-col justify-between max-lg:text-center">
                    <div class="pt-13 me-31.5 w-full lg:w-auto transition-all duration-500">
                        <p class="text-3xl xxs:text-4xl sm:max-xl:text-5xl xl:text-6xl font-semibold w-full" style="color: white">
                            Hello, I'm
                            <span class="text-nowrap shrink-0 inline-block w-full">
                                {{ $cvData['name'] ?? 'Sabry Mokhtar Abdallah' }}
                            </span>
                        </p>
                        <p class="text-xs xxs:text-lg lg:text-[18px] my-6" style="color: rgb(152, 172, 236)">
                            I'm a <span class="bg-highlight">{{ $cvData['title'] ?? 'Civil Engineer' }}</span> based in {{ $cvData['contact']['location'] ?? 'Ras Al Khaimah, U.A.E.' }}. {{ $cvData['profile'] ?? 'Motivated Civil Engineer with Good Experience in & supervision construction & management and quantity surveyor' }}
                        </p>
                        <p class="text-center lg:text-start">
                            <a class="btn-primary btn btn-xs xxs:btn-lg text-white" href="mailto:{{ $cvData['contact']['email'] ?? 'sabrymokhtar64@gmail.com' }}">
                                Contact Me
                            </a>
                        </p>
                    </div>
                    <div class="mx-auto lg:mx-0 relative">
                        <div class="grid max-xxs:grid-flow-col grid-cols-3 w-fit mt-10 gap-1">
                            @php
                                $experienceYears = isset($cvData['workExperience']) ? count($cvData['workExperience']) : 0;
                                $projectsCount = isset($cvData['workExperience']) ? count($cvData['workExperience']) : 0;
                                $skillsCount = isset($cvData['computerSkills']) ? count($cvData['computerSkills']) : 0;
                            @endphp
                            <div class="bg-[#F6EBFE] text-center">
                                <div class="w-auto h-auto mx-2 sm:mx-4 my-5 xxs:my-5 sm:my-[17px]">
                                    <p class="text-[16px] xxs:text-[18px] sm:text-[32px] font-semibold text-gray-700">{{ $experienceYears }}+</p>
                                    <p class="text-[8px] xxs:text-[9px] sm:text-[16px] font-normal px-[0.90rem] sm:px-[1rem] text-wrap text-gray-500">Years Experience</p>
                                </div>
                            </div>
                            <div class="bg-[#F6EBFE] text-center">
                                <div class="w-auto h-auto mx-2 sm:mx-4 my-5 xxs:my-5 sm:my-[17px]">
                                    <p class="text-[16px] xxs:text-[18px] sm:text-[32px] font-semibold text-gray-700">{{ $projectsCount }}</p>
                                    <p class="text-[8px] xxs:text-[9px] sm:text-[16px] font-normal px-[0.90rem] sm:px-[1rem] text-wrap text-gray-500">Projects</p>
                                </div>
                            </div>
                            <div class="bg-[#F6EBFE] text-center">
                                <div class="w-auto h-auto mx-2 sm:mx-4 my-5 xxs:my-5 sm:my-[17px]">
                                    <p class="text-[16px] xxs:text-[18px] sm:text-[32px] font-semibold text-gray-700">{{ $skillsCount }}</p>
                                    <p class="text-[8px] xxs:text-[9px] sm:text-[16px] font-normal px-[0.90rem] sm:px-[1rem] text-wrap text-gray-500">Skills</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-134 w-full h-full max-lg:mx-auto aspect-[536/636] relative">
                    <img class="shadow-2xl shadow-gray-200 w-full h-full absolute bottom-0 object-cover bg-white rounded-3xl"
                         src="{{ asset('assets/portfolio2/images/p2.jpg') }}" alt="person" style="object-position: top">
                </div>
            </div>

            <!-- Profile Section -->
            <div class="relative mx-4 xxl:mx-0.5 -bottom-20 lg:-bottom-28 z-10 rounded-2xl bg-white drop-shadow-2xl max-xl:mb-5 shadow-white xl:p-28 lg:p-20 md:p-16 sm:p-10 p-4" id="profile">
                <div class="flex max-md:flex-col justify-between items-center gap-6">
                    <div class="xxl:max-w-106 w-auto h-auto xxl:max-h-126">
                        <div class="max-w-106 h-117 object-fill overflow-hidden rounded-xl">
                            <img class="bg-soft-white h-[120%] object-cover"
                                 src="{{ asset('assets/portfolio2/images/person2.png') }}" alt="">
                        </div>
                        <div class="relative bottom-9">
                            <div class="flex justify-center">
                                <div class="px-4 sm:px-6 py-2.5 z-50 bg-white rounded-[4px] shadow-2xl drop-shadow-2xl shadow-white inline-flex">
                                    <!-- Social Media Icons -->
                                    <div class="flex gap-2 items-center justify-center">
                                        <a href="https://www.facebook.com/share/14RnXHXxtPg/" target="_blank" rel="noopener noreferrer"
                                           class="social-icon-box text-picto-primary hover:bg-picto-primary hover:text-white rounded-md transition-all duration-300">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/sabry-mokhtar-6aa9101a8/" target="_blank" rel="noopener noreferrer"
                                           class="social-icon-box text-picto-primary hover:bg-picto-primary hover:text-white rounded-md transition-all duration-300">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                        <a href="mailto:{{ $cvData['contact']['email'] ?? 'sabrymokhtar64@gmail.com' }}"
                                           class="social-icon-box text-picto-primary hover:bg-picto-primary hover:text-white rounded-md transition-all duration-300">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-sm:w-full w-[33rem]">
                        <h2 class="text-2xl xxs:text-3xl sm:text-4xl lg:text-[38px] text-[min(24px,38px)] max-md:text-center font-semibold mb-8">
                            I am Professional {{ $cvData['title'] ?? 'Civil Engineer' }}
                        </h2>
                        <div class="text-xs xs:text-[16px] lg:text-lg font-normal max-md:text-center text-gray-600">
                            <p>{{ $cvData['profile'] ?? 'Motivated Civil Engineer with Good Experience in & supervision construction & management and quantity surveyor' }}</p>
                            @if(isset($cvData['objective']) && !empty($cvData['objective']))
                                <p class="mt-3">{{ $cvData['objective'][0] ?? '' }}</p>
                            @endif
                        </div>
                        <div class="mt-8 flex max-md:justify-center">
                            <a class="btn xxs:btn-lg px-6 max-xs:px-2 xxs:py-3 btn-primary text-xs xxs:text-[14px] sm:text-[16px]" href="#portfolio">
                                My Experience
                            </a>
                            <a class="btn xxs:btn-lg px-6 max-xs:px-2 xxs:py-3 hover:border-picto-primary bg-white duration-300 transition-all hover:text-picto-primary ms-4 text-xs xxs:text-[14px] sm:text-[16px]" href="#contact">
                                Contact Me
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Work Experience Section -->
    <div class="bg-soft-white pt-30">
        <div class="content max-w-[1320px] mx-auto px-2 py-5 md:py-10 lg:py-25 xl:py-35 max-xxl:px-4" id="work-process">
            <div class="text-center mb-12">
                <p class="section-title md:font-semibold text-3xl sm:text-4xl md:text-5xl font-medium">Work Experience</p>
                <p class="mt-6 mb-4 md:text-[18px] text-sm font-normal text-gray-500 max-w-3xl mx-auto">
                    Professional experience in construction management, project supervision, and quantity surveying across multiple projects in UAE and Egypt.
                </p>
            </div>
            <div class="space-y-6 max-w-4xl mx-auto">
                @if(isset($cvData['workExperience']) && !empty($cvData['workExperience']))
                    @foreach($cvData['workExperience'] as $index => $experience)
                    <div class="p-6 sm:p-8 bg-white rounded-xl hover:drop-shadow-2xl shadow-gray-300 ease-out duration-1000">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 sm:w-16 sm:h-16 bg-[#EDD8FF80] text-center center rounded-md flex-shrink-0">
                                <span class="text-picto-primary font-bold text-lg sm:text-xl">{{ $index + 1 }}</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-semibold text-lg sm:text-xl text-gray-900 mb-2">{{ $experience['position'] ?? '' }}</h3>
                                <p class="text-picto-primary font-medium text-sm sm:text-base mb-2">{{ $experience['company'] ?? '' }}</p>
                                <p class="text-gray-600 text-xs sm:text-sm mb-2">{{ $experience['period'] ?? '' }} • {{ $experience['location'] ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <!-- Projects/Portfolio Section -->
    <div class="content max-w-[1320px] mx-auto mt-10 md:mt-15 xl:mt-25 mb-10 md:mb-25 max-xxl:p-2" id="portfolio">
        <div class="xl:mb-17.5 mb-5">
            <div class="max-sm:px-2 text-center mx-auto max-w-144.25">
                <p class="section-title md:font-semibold text-3xl sm:text-4xl md:text-5xl font-medium">Projects & Achievements</p>
                <p class="font-normal text-[18px] max-sm:text-[14px] pt-6 text-gray-400">
                    Here's a selection of my professional projects and achievements in construction and engineering.
                </p>
            </div>
        </div>
        <div class="mx-auto flex justify-center">
            <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6">
                @if(isset($cvData['workExperience']) && !empty($cvData['workExperience']))
                    @foreach(array_slice($cvData['workExperience'], 0, 6) as $project)
                    <div class="max-w-106 rounded-lg outline-[#FFFFFF] hover:shadow-2xl duration-300 transition-all shadow-gray-300 border border-gray-200">
                        <div class="bg-gradient-to-br from-picto-primary/20 to-picto-primary/5 h-48 flex items-center justify-center rounded-t-lg">
                            <i class="fas fa-building text-6xl text-picto-primary/30"></i>
                        </div>
                        <div class="p-4 xs:p-8">
                            <p class="text-gray-400 text-xs font-medium uppercase">{{ $project['location'] ?? 'CONSTRUCTION PROJECT' }}</p>
                            <p class="text-gray-900 text-md xxs:text-lg font-semibold pt-1 mb-3">{{ $project['position'] ?? 'Project' }}</p>
                            <p class="text-gray-600 text-xs xxs:text-[14px] text-wrap" style="line-height: 20px; letter-spacing: 0%;">
                                {{ $project['company'] ?? '' }} - {{ $project['period'] ?? '' }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <!-- Work Together Section -->
    <div class="bg-gray-900">
        <div class="py-25 max-w-169 mx-auto px-2 text-center">
            <p class="text-white md:font-semibold text-2xl sm:text-3xl md:text-5xl pb-8">
                Do you have a Construction Project? Let's discuss your project!
            </p>
            <p class="text-[#A5ACB5] text-xs sm:text-lg font-normal text-center pb-8">
                I'm always open to discussing new construction projects and engineering opportunities. Let's connect and build something amazing together.
            </p>
            <a href="#contact" class="btn btn-primary px-4 md:px-6.5 py-3 md:py-6 text-[12px] md:text-[16px]">
                Let's work Together <i class="fas fa-arrow-right ms-3"></i>
            </a>
        </div>
    </div>

    <!-- Education Section -->
    <div class="blog-background">
        <div class="content max-w-[1320px] mx-auto py-25 px-2 relative" id="blog">
            <div class="max-w-135 text-center mx-auto pb-17.5">
                <p class="section-title md:font-semibold text-3xl sm:text-4xl md:text-5xl font-medium pb-6">Education</p>
                <p class="text-xs xs:text-[16px] md:text-lg text-gray-400 mb-8">
                    Academic qualifications and achievements in civil engineering.
                </p>
                @if(isset($cvData['education']))
                <div class="bg-white rounded-xl p-6 sm:p-8 shadow-lg max-w-3xl mx-auto text-left">
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-4">{{ $cvData['education']['degree'] ?? '' }}</h3>
                    <p class="text-picto-primary font-medium text-base sm:text-lg mb-2">{{ $cvData['education']['university'] ?? '' }}</p>
                    <p class="text-gray-600 text-sm sm:text-base mb-2">Graduation Year: {{ $cvData['education']['graduationYear'] ?? '' }}</p>
                    <p class="text-gray-600 text-sm sm:text-base mb-2">Total Grade: <span class="font-semibold">{{ $cvData['education']['totalGrade'] ?? '' }}</span></p>
                    <p class="text-gray-600 text-sm sm:text-base">Graduation Project: {{ $cvData['education']['graduationProject'] ?? '' }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="bg-soft-white">
        <div class="content max-w-[1320px] mx-auto max-xxl:px-4 xxl:px-2 py-10 md:py-15 lg:py-37.5" id="services">
            <div class="text-center mb-12">
                <p class="section-title md:font-semibold text-3xl sm:text-4xl md:text-5xl font-medium">Skills & Expertise</p>
                <p class="mt-6 text-[14px] text-gray-500 max-w-3xl mx-auto">
                    Technical skills and professional competencies in civil engineering and construction management.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Computer Skills -->
                @if(isset($cvData['computerSkills']) && !empty($cvData['computerSkills']))
                <div class="bg-white rounded-xl p-6 sm:p-8 shadow-lg">
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-6">Computer Skills</h3>
                    <div class="flex flex-wrap gap-3">
                        @foreach($cvData['computerSkills'] as $skill)
                        <span class="px-4 py-2 bg-[#EDD8FF80] text-picto-primary rounded-lg font-medium text-sm">{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Personal Skills -->
                @if(isset($cvData['personalSkills']) && !empty($cvData['personalSkills']))
                <div class="bg-white rounded-xl p-6 sm:p-8 shadow-lg">
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-6">Professional Skills</h3>
                    <div class="space-y-3">
                        @foreach($cvData['personalSkills'] as $skill)
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-picto-primary mt-1"></i>
                            <p class="text-gray-700 text-sm">{{ $skill }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Languages -->
            @if(isset($cvData['languages']) && !empty($cvData['languages']))
            <div class="mt-8 max-w-3xl mx-auto">
                <div class="bg-white rounded-xl p-6 sm:p-8 shadow-lg">
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-900 mb-6 text-center">Languages</h3>
                    <div class="flex flex-wrap justify-center gap-6">
                        @foreach($cvData['languages'] as $lang)
                        <div class="text-center">
                            <p class="font-semibold text-gray-900 text-lg">{{ $lang['name'] ?? '' }}</p>
                            <p class="text-gray-600 text-sm">{{ $lang['level'] ?? '' }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Companies Section -->
    <div class="content max-w-[1320px] mx-auto py-10 md:py-25 flex flex-col items-center px-2">
        <div class="max-w-144.25 text-center">
            <p class="section-title md:font-semibold text-3xl sm:text-4xl md:text-5xl font-medium mb-6">Companies I've Worked With</p>
            <p class="text-[14px] sm:text-lg text-soft-dark font-normal mb-8">
                I've had the pleasure of working with reputable construction companies in UAE and Egypt.
            </p>
            @if(isset($cvData['workExperience']) && !empty($cvData['workExperience']))
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 max-w-4xl mx-auto">
                @php
                    $companies = collect($cvData['workExperience'])->pluck('company')->unique();
                @endphp
                @foreach($companies as $company)
                <div class="bg-white rounded-lg p-4 shadow-md hover:shadow-lg transition-shadow">
                    <p class="font-semibold text-gray-900">{{ $company }}</p>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>

    <!-- Contact Section -->
    <div class="relative -bottom-15 -mt-15 z-10 px-2">
        <div class="content max-w-[1320px] mx-auto p-4 md:p-10 lg:p-22 bg-white rounded-2xl shadow-[0px_0px_90px_9px_rgba(0,_0,_0,_0.1)]" id="contact">
            <div class="flex flex-col-reverse lg:gap-5 xl:gap-25.75 lg:flex-row justify-between">
                <div>
                    <div>
                        <p class="text-[35px] max-lg:hidden font-semibold text-nowrap text-[#132238]">
                            Let's discuss your Project
                        </p>
                        <p class="text-[12px] xs:text-[14px] sm:text-lg md:text-lg max-lg:text-center pt-4 font-normal text-soft-dark">
                            I'm available for construction projects and engineering consultations. Drop me a line if you have a project you think I'd be a good fit for.
                        </p>
                    </div>
                    <div class="my-8.75 sm:max-lg:flex justify-between items-center">
                        @if(isset($cvData['contact']))
                        <div class="max-w-84 p-3 md:p-3.75 lg:p-6 flex xs:not-odd:my-3 rounded-[10px] bg-white hover:scale-[1] duration-450 cursor-pointer hover:shadow-[0px_0px_37px_5px_rgba(0,_0,_0,_0.1)] shadow-gray-200 max-sm:mx-auto mb-4">
                            <div class="h-10 md:h-12 aspect-square bg-[#EDD8FF80] center rounded-[4px]">
                                <i class="fas fa-map-marker-alt text-lg md:text-xl text-picto-primary"></i>
                            </div>
                            <div class="ms-3.25">
                                <p class="text-[12px] md:text-[14px] text-[#424E60] font-normal">Address:</p>
                                <p class="text-[14px] md:text-[16px] text-[#132238] font-medium">{{ $cvData['contact']['location'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="max-w-84 p-3 md:p-3.75 lg:p-6 flex xs:not-odd:my-3 rounded-[10px] bg-white hover:scale-[1] duration-450 cursor-pointer hover:shadow-[0px_0px_37px_5px_rgba(0,_0,_0,_0.1)] shadow-gray-200 max-sm:mx-auto mb-4">
                            <div class="h-10 md:h-12 aspect-square bg-[#EDD8FF80] center rounded-[4px]">
                                <i class="fas fa-envelope text-lg md:text-xl text-picto-primary"></i>
                            </div>
                            <div class="ms-3.25">
                                <p class="text-[12px] md:text-[14px] text-[#424E60] font-normal">My Email:</p>
                                <p class="text-[14px] md:text-[16px] text-[#132238] font-medium">{{ $cvData['contact']['email'] ?? '' }}</p>
                            </div>
                        </div>
                        @if(isset($cvData['contact']['phone']) && !empty($cvData['contact']['phone']))
                        <div class="max-w-84 p-3 md:p-3.75 lg:p-6 flex xs:not-odd:my-3 rounded-[10px] bg-white hover:scale-[1] duration-450 cursor-pointer hover:shadow-[0px_0px_37px_5px_rgba(0,_0,_0,_0.1)] shadow-gray-200 max-sm:mx-auto mb-4">
                            <div class="h-10 md:h-12 aspect-square bg-[#EDD8FF80] center rounded-[4px]">
                                <i class="fas fa-phone text-lg md:text-xl text-picto-primary"></i>
                            </div>
                            <div class="ms-3.25">
                                <p class="text-[12px] md:text-[14px] text-[#424E60] font-normal">Call Me Now:</p>
                                <p class="text-[14px] md:text-[16px] text-[#132238] font-medium">{{ $cvData['contact']['phone'][0] ?? '' }}</p>
                            </div>
                        </div>
                        @endif
                        @endif
                    </div>
                    <div class="w-full max-lg:text-center max-md:mb-4">
                        <div class="flex gap-2 items-center justify-center lg:justify-start">
                            <a href="https://www.facebook.com/share/14RnXHXxtPg/" target="_blank" rel="noopener noreferrer"
                               class="social-icon-box text-picto-primary hover:bg-picto-primary hover:text-white rounded-md transition-all duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/sabry-mokhtar-6aa9101a8/" target="_blank" rel="noopener noreferrer"
                               class="social-icon-box text-picto-primary hover:bg-picto-primary hover:text-white rounded-md transition-all duration-300">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="mailto:{{ $cvData['contact']['email'] ?? 'sabrymokhtar64@gmail.com' }}"
                               class="social-icon-box text-picto-primary hover:bg-picto-primary hover:text-white rounded-md transition-all duration-300">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full overflow-y-scroll py-6.5">
                    <p class="text-xl mb-2 xs:text-2xl sm:text-2xl md:text-[38px] font-semibold text-[#132238] lg:hidden text-center">
                        Let's discuss your Project
                    </p>
                    <!-- Contact Form -->
                    <form class="flex flex-col gap-4 mt-4 mx-2">
                        <input type="text" placeholder="Name*" class="input input-lg border-0 border-b-2 focus:outline-none focus:placeholder:text-picto-primary placeholder:text-[15px] md:placeholder:text-lg focus:border-picto-primary border-[#E6E8EB] w-full rounded-none px-0" required>
                        <input type="email" placeholder="Email*" class="input input-lg border-0 border-b-2 focus:outline-none focus:placeholder:text-picto-primary placeholder:text-[15px] md:placeholder:text-lg focus:border-picto-primary border-[#E6E8EB] w-full rounded-none px-0" required>
                        <input type="text" placeholder="Location*" class="input input-lg border-0 border-b-2 focus:outline-none focus:placeholder:text-picto-primary placeholder:text-[15px] md:placeholder:text-lg focus:border-picto-primary border-[#E6E8EB] w-full rounded-none px-0" required>
                        <div class="flex max-xs:flex-col max-xs:gap-4">
                            <input type="text" placeholder="Budget*" class="input input-lg border-0 border-b-2 focus:outline-none focus:placeholder:text-picto-primary placeholder:text-[15px] md:placeholder:text-lg focus:border-picto-primary border-[#E6E8EB] w-full rounded-none px-0 xs:w-[50%] me-5" required>
                            <input type="text" placeholder="Subject*" class="input input-lg border-0 border-b-2 focus:outline-none focus:placeholder:text-picto-primary placeholder:text-[15px] md:placeholder:text-lg focus:border-picto-primary border-[#E6E8EB] w-full rounded-none px-0" required>
                        </div>
                        <input type="text" placeholder="Message*" class="input input-lg border-0 border-b-2 focus:outline-none focus:placeholder:text-picto-primary placeholder:text-[15px] md:placeholder:text-lg focus:border-picto-primary border-[#E6E8EB] w-full rounded-none px-0" required>
                        <button type="submit" class="btn gap-3 max-lg:mx-auto btn-primary rounded-sm mt-5 text-[13px] md:text-[16px] w-fit font-semibold lg:mt-12.5 p-2 md:px-4">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-[#2A374A]">
        <div class="content max-w-[1320px] mx-auto pt-25 md:pt-40 max-2xl:px-3">
            <div class="flex max-md:flex-col justify-between mx-0 items-center h-full w-full text-neutral-200">
                <a href="#" class="flex items-center border-0">
                    <img src="{{ asset('assets/portfolio2/logo.png') }}" class="h-8 sm:h-14 rounded-2xl" alt="logo">
                    <p class="text-3xl sm:text-[32px] my-auto ms-[12px] font-semibold">{{ $cvData['name'] ?? 'Sabry Mokhtar Abdallah' }}</p>
                </a>
                <div class="mx-7 max-md:my-7 text-center">
                    <a href="#introduction" class="mx-2 group inline-block relative w-fit text-[12px] sm:text-[16px]">Home<span class="absolute left-0 bottom-0 h-0.5 w-full bg-white scale-x-0 duration-300 group-hover:scale-x-100"></span></a>
                    <a href="#profile" class="mx-2 group inline-block relative w-fit text-[12px] sm:text-[16px]">About<span class="absolute left-0 bottom-0 h-0.5 w-full bg-white scale-x-0 duration-300 group-hover:scale-x-100"></span></a>
                    <a href="#work-process" class="mx-2 group inline-block relative w-fit text-[12px] sm:text-[16px]">Experience<span class="absolute left-0 bottom-0 h-0.5 w-full bg-white scale-x-0 duration-300 group-hover:scale-x-100"></span></a>
                    <a href="#portfolio" class="mx-2 group inline-block relative w-fit text-[12px] sm:text-[16px]">Projects<span class="absolute left-0 bottom-0 h-0.5 w-full bg-white scale-x-0 duration-300 group-hover:scale-x-100"></span></a>
                    <a href="#blog" class="mx-2 group inline-block relative w-fit text-[12px] sm:text-[16px]">Education<span class="absolute left-0 bottom-0 h-0.5 w-full bg-white scale-x-0 duration-300 group-hover:scale-x-100"></span></a>
                    <a href="#services" class="mx-2 group inline-block relative w-fit text-[12px] sm:text-[16px]">Skills<span class="absolute left-0 bottom-0 h-0.5 w-full bg-white scale-x-0 duration-300 group-hover:scale-x-100"></span></a>
                    <a href="#contact" class="mx-2 group inline-block relative w-fit text-[12px] sm:text-[16px]">Contact<span class="absolute left-0 bottom-0 h-0.5 w-full bg-white scale-x-0 duration-300 group-hover:scale-x-100"></span></a>
                </div>
                <p class="text-[12px] sm:text-[16px]">Copyright &copy; {{ date('Y') }} Picto.</p>
            </div>
            <p class="text-white text-center max-xs:text-[12px] max-md:text-[14px] w-full py-10">
                Developed with ❤️ by <a href="https://www.themewagon.com" class="underline font-bold" target="_blank">ThemeWagon</a>
            </p>
        </div>
    </div>

    <!-- Smooth Scroll Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const href = this.getAttribute('href');
                    if (href === '#') return;

                    const target = document.querySelector(href);
                    if (target) {
                        const offset = 100; // Account for fixed navbar
                        const targetPosition = target.offsetTop - offset;

                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.getElementById('navbar');
                if (window.scrollY > 50) {
                    navbar.classList.remove('bg-white', 'border-white');
                    navbar.classList.add('bg-soft-white', 'border-b', 'border-gray-300');
                } else {
                    navbar.classList.remove('bg-soft-white', 'border-b', 'border-gray-300');
                    navbar.classList.add('bg-white', 'border-white');
                }
            });

            // Scroll Spy - Active navigation link
            const sectionIds = ['introduction', 'profile', 'work-process', 'portfolio', 'blog', 'services', 'contact'];
            const navLinks = document.querySelectorAll('.navbar a[href^="#"], .menu a[href^="#"]');

            function updateActiveLink() {
                let current = '';
                const scrollPosition = window.pageYOffset + 150; // Offset for navbar

                sectionIds.forEach(sectionId => {
                    const section = document.getElementById(sectionId);
                    if (!section) return;

                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;

                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        current = sectionId;
                    }
                });

                navLinks.forEach(link => {
                    const href = link.getAttribute('href');
                    if (href && href.startsWith('#')) {
                        const targetId = href.replace('#', '');
                        link.classList.remove('active', 'bg-picto-primary', 'text-white');

                        if (targetId === current) {
                            link.classList.add('active', 'bg-picto-primary', 'text-white');
                        }
                    }
                });
            }

            // Use Intersection Observer for better performance
            const observerOptions = {
                root: null,
                rootMargin: '-100px 0px -60% 0px',
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                // Find the section that's most visible
                let mostVisible = null;
                let maxRatio = 0;

                entries.forEach(entry => {
                    if (entry.isIntersecting && entry.intersectionRatio > maxRatio) {
                        maxRatio = entry.intersectionRatio;
                        mostVisible = entry.target.getAttribute('id');
                    }
                });

                if (mostVisible) {
                    navLinks.forEach(link => {
                        const href = link.getAttribute('href');
                        if (href && href.startsWith('#')) {
                            const targetId = href.replace('#', '');
                            link.classList.remove('active', 'bg-picto-primary', 'text-white');

                            if (targetId === mostVisible) {
                                link.classList.add('active', 'bg-picto-primary', 'text-white');
                            }
                        }
                    });
                }
            }, observerOptions);

            // Observe all sections
            sectionIds.forEach(sectionId => {
                const section = document.getElementById(sectionId);
                if (section) {
                    observer.observe(section);
                }
            });

            // Fallback: Update on scroll
            let ticking = false;
            window.addEventListener('scroll', function() {
                if (!ticking) {
                    window.requestAnimationFrame(function() {
                        updateActiveLink();
                        ticking = false;
                    });
                    ticking = true;
                }
            });

            // Update on page load
            setTimeout(updateActiveLink, 200);
        });
    </script>
</body>
</html>

