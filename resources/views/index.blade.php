<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pankaj - Personal Portfolio Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Edu+TAS+Beginner:wght@400..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <!-- <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{ asset('assets/lib/animate/animate.min.css') }}" />
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- CORRECT for public/assets/css/ -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-section border-0">
        <nav class="navbar navbar-light">
            <div class="navbar-nav flex-column">
                <a href="#Home" class="nav-item nav-link active"><span class="fa fa-home"></span> Home</a>
                <a href="#About" class="nav-item nav-link"><span class="far fa-address-card"></span> About</a>
                <a href="#Service" class="nav-item nav-link"><span class="fab fa-servicestack"></span> Service</a>
                <!-- <a href="#pigraBlog" class="nav-item nav-link"><span class="fa fa-blog"></span> Blog</a> -->
                <a href="#Contact" class="nav-item nav-link"><span class="fas fa-address-book"></span> Contact</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <<div class="container-fluid" id="Home">
        <div class="container">
            <div class="row g-0">
                <div class="col-12 col-lg-3">
                    <div class="header-content bg-dark h-100 pt-6 pe-6 pb-6">
                        <a href="index.html" class="navbar-brand d-inline-flex pb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="display-6 text-white mb-0">Pankaj</h1>
                        </a>
                        <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-white sub-title">👋 Hi, I'm Pankaj Vishwakarma</p>
                            <h1 class="display-6 text-white mb-0">Senior Software Developer</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="header-img d-flex h-100 pt-6 ps-6 pb-6">
                        <div class="row g-5">
                            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bg-light p-4" style="border-radius: 68% 32% 100% 0% / 0% 75% 25% 100%;">
                                    <img src="{{ asset('/assets/img/img.png') }}" class="img-fluid w-100" style="border-radius: 68% 32% 100% 0% / 0% 75% 25% 100%;" alt="Profile Image">
                                </div>
                            </div>
                            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                                <h1 class="display-6 mb-4">Building Scalable Web Applications & Modern Solutions</h1>
                                <p class="mb-4">
                                    I’m a dedicated Senior Software Developer with over 3 years of experience building, improving, and launching reliable web applications. I love working with modern frameworks like Laravel, Angular, and CodeIgniter to write clean, maintainable code and create smooth, user-friendly experiences. </p>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                    <p class="text-dark mb-0">Mumbai, India</p>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-envelope text-primary me-3"></i>
                                    <p class="text-dark mb-0">pankajvishwakarma2130@gmail.com</p>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-phone-alt text-primary me-3"></i>
                                    <p class="text-dark mb-0">(+91) 99309 13303</p>
                                </div>
                                <!-- <div class="d-flex align-items-center mb-4">
                                    <i class="fab fa-firefox-browser text-primary me-3"></i>
                                    <p class="text-dark mb-0">www.pankajv.dev</p>
                                </div> -->
                                <div class="d-flex">
                                    <a class="btn btn-primary btn-sm-square me-3" href="#"><i class="fab fa-github text-white"></i></a>
                                    <a class="btn btn-primary btn-sm-square me-3" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                                    <a class="btn btn-primary btn-sm-square me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                                    <a class="btn btn-primary btn-sm-square me-0" href="#"><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Header End -->


        <!-- About Start -->
        <div class="container-fluid" id="About">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-lg-3">
                        <div class="about-header bg-dark h-100 pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">About Me</p>
                                <h1 class="display-6 text-white mb-0">Senior PHP Developer based in Mumbai, India</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="about-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-5">
                                <div class="col-xl-5">
                                    <div class="about-img bg-light p-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <img src="{{ asset('/assets/img/istockphoto-875241788-612x612.jpg') }}" class="img-fluid w-100" alt="Profile Image">
                                        <div class="sosial-icon">
                                            <a class="btn btn-primary btn-sm-square mb-3" href="#"><i class="fab fa-github text-white"></i></a>
                                            <a class="btn btn-primary btn-sm-square mb-3" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                                            <a class="btn btn-primary btn-sm-square mb-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                                            <a class="btn btn-primary btn-sm-square mb-0" href="#"><i class="fab fa-instagram text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 wow fadeInUp" data-wow-delay="0.3s">
                                    <h4 class="mb-4">Hello, I'm Pankaj Vishwakarma</h4>
                                    <p class="mb-4">
                                        I’m a passionate Senior Software Developer with over 3 years of real-world experience building web applications that are fast, scalable, and reliable. My core expertise is in PHP and I love working with frameworks like Laravel and CodeIgniter to deliver secure, maintainable solutions. I’m equally comfortable handling front-end work with JavaScript, Angular, and modern tools.
                                        <br><br>
                                        Over the years, I’ve contributed to projects like custom dashboards, booking systems, lead generation platforms, and website builders for real estate — always focusing on writing clean code and ensuring great performance. I enjoy collaborating with teams, solving complex problems, and turning ideas into working products.
                                        <br><br>
                                        I’m always exploring new technologies, learning better ways to build software, and taking pride in code that’s easy to maintain and scale.
                                    </p>
                                    <div class="row g-4 mb-4">
                                        <div class="col-6">
                                            <p><strong class="fw-bold text-dark">Phone :</strong> +91 9930913303</p>
                                            <!-- <p><strong class="fw-bold text-dark">Skype :</strong> pankaj.vishwakarma</p> -->
                                            <p class="mb-0"><strong class="fw-bold text-dark">Address :</strong>Kalina Shastri nagar chunabhatti santacruz east mumbai-400029</p>
                                        </div>
                                        <div class="col-6">
                                            <p><strong class="fw-bold text-dark">Nationality :</strong> Indian</p>
                                            <p><strong class="fw-bold text-dark">Email :</strong> pankajvishwakarma2130@gmail.com</p>
                                            <p class="mb-0"><strong class="fw-bold text-dark">Freelancer :</strong> Available</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('download.resume') }}" class="btn btn-primary py-2 px-4"> <i class="fas fa-download me-2"></i>Download My CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Education Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="education-header bg-dark h-100 pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Education</p>
                                <h1 class="display-6 text-white mb-0">My Educational Qualifications</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="education-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Mumbai University</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2023 - 2025
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Master of Science in Computer Science</h4>
                                        <p class="mb-0">Currently pursuing an MSc in Computer Science at Mumbai University, deepening my knowledge of advanced software development, modern frameworks, and scalable architecture design.</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Chetana College, Mumbai</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2020 - 2023
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Bachelor of Science in Information Technology</h4>
                                        <p class="mb-0">Completed BSc in IT with a strong focus on programming fundamentals, web development, and practical project work, including hands-on experience with PHP, JavaScript, and modern frameworks.</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Patuck Junior College, Mumbai</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2018 - 2020
                                            </div>
                                        </div>
                                        <h4 class="mb-3">HSC - Science</h4>
                                        <p class="mb-0">Completed Higher Secondary Certificate in Science, building a strong foundation in logical reasoning, mathematics, and problem-solving skills essential for my future in software development.</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Patuck Technical High School, Mumbai</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2016 - 2018
                                            </div>
                                        </div>
                                        <h4 class="mb-3">SSC</h4>
                                        <p class="mb-0">Completed Secondary School Certificate, laying the groundwork for my interest in technology and computer science through early exposure to computers and basic programming concepts.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Education End -->


        <!-- Experience Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="experience-header bg-dark h-100 pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Experience</p>
                                <h1 class="display-6 text-white mb-0">My Real Work Experience</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="experience-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="experience-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Ebrandz LLP</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> Jan 2023 – Present
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Senior Software Developer</h4>
                                        <p class="mb-0">
                                            Developing and maintaining advanced Laravel admin panels with dynamic reporting and RESTful APIs. Integrated third-party services to extend functionality and user experience. Manage version control with Git, ensuring smooth collaboration within the development team. Deliver solutions tailored to client needs, improving system performance and user satisfaction.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="experience-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Positive Quadrant LLP</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> Jan 2022 – Jan 2023
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Junior Web Developer</h4>
                                        <p class="mb-0">
                                            Built and maintained user-friendly web interfaces using HTML, CSS, and JavaScript to create engaging user experiences. Applied responsive design principles to ensure websites worked seamlessly across devices. Worked closely with senior developers to connect front-end and back-end systems, improving performance and reliability.
                                        </p>
                                    </div>
                                </div>
                                <!-- Add more experience blocks here if you have more -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Experience End -->



        <!-- Skills Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="skills-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Skills</p>
                                <h1 class="display-6 text-white mb-0">My Expertise Skills</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="skills-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-php fa-3x"></span></div>
                                        <h4 class="display-6">95%</h4>
                                        <p class="mb-0">PHP</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="text-primary text-center mb-3"><span class="fas fa-code fa-3x"></span></div>
                                        <h4 class="display-6">90%</h4>
                                        <p class="mb-0">Laravel</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="text-primary text-center mb-3"><span class="fas fa-code fa-3x"></span></div>
                                        <h4 class="display-6">85%</h4>
                                        <p class="mb-0">CodeIgniter</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-angular fa-3x"></span></div>
                                        <h4 class="display-6">85%</h4>
                                        <p class="mb-0">Angular</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-js-square fa-3x"></span></div>
                                        <h4 class="display-6">90%</h4>
                                        <p class="mb-0">JavaScript</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="text-primary text-center mb-3"><span class="fas fa-database fa-3x"></span></div>
                                        <h4 class="display-6">85%</h4>
                                        <p class="mb-0">MySQL</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.7s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-git-alt fa-3x"></span></div>
                                        <h4 class="display-6">85%</h4>
                                        <p class="mb-0">Git</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-bootstrap fa-3x"></span></div>
                                        <h4 class="display-6">90%</h4>
                                        <p class="mb-0">Bootstrap</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.9s">
                                        <div class="text-primary text-center mb-3"><span class="fas fa-plug fa-3x"></span></div>
                                        <h4 class="display-6">80%</h4>
                                        <p class="mb-0">API Integration</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="1.0s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-js-square fa-3x"></span></div>
                                        <h4 class="display-6">80%</h4>
                                        <p class="mb-0">jQuery</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="1.1s">
                                        <div class="text-primary text-center mb-3"><span class="fas fa-terminal fa-3x"></span></div>
                                        <h4 class="display-6">75%</h4>
                                        <p class="mb-0">Linux</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="1.2s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-js fa-3x"></span></div>
                                        <h4 class="display-6">70%</h4>
                                        <p class="mb-0">TypeScript</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="1.3s">
                                        <div class="text-primary text-center mb-3"><span class="fas fa-database fa-3x"></span></div>
                                        <h4 class="display-6">70%</h4>
                                        <p class="mb-0">MongoDB</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="1.4s">
                                        <div class="text-primary text-center mb-3"><span class="fas fa-layer-group fa-3x"></span></div>
                                        <h4 class="display-6">80%</h4>
                                        <p class="mb-0">Go High Level (CMS)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skills End -->



        <!-- Service Start -->
        <div class="container-fluid" id="Service">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="service-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">My Services</p>
                                <h1 class="display-6 text-white mb-0">What I Can Do For You</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="service-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-2">
                                                <i class="fas fa-laptop-code fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0">Custom Web Development</a>
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0">
                                                    I build clean, high-performance web applications using PHP, Laravel, CodeIgniter, Angular, and JavaScript — tailored to your business needs.
                                                </p>
                                            </div>
                                            <div class="col-xl-3">
                                                <p><i class="fa fa-check me-2"></i> Laravel & CodeIgniter</p>
                                                <p><i class="fa fa-check me-2"></i> Angular & JavaScript</p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i> Responsive UI</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-2">
                                                <i class="fas fa-plug fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0">API & Third-Party Integration</a>
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0">
                                                    I integrate powerful RESTful APIs and third-party services to extend your system’s capabilities and connect your software to the world.
                                                </p>
                                            </div>
                                            <div class="col-xl-3">
                                                <p><i class="fa fa-check me-2"></i> RESTful APIs</p>
                                                <p><i class="fa fa-check me-2"></i> Payment Gateways</p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i> CRM/Marketing Tools</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-2">
                                                <i class="fas fa-tools fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0">Admin Panels & Dashboards</a>
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="mb-0">
                                                    I create secure, dynamic admin panels and dashboards that help you manage data, track performance, and control your applications with ease.
                                                </p>
                                            </div>
                                            <div class="col-xl-3">
                                                <p><i class="fa fa-check me-2"></i> Custom CMS</p>
                                                <p><i class="fa fa-check me-2"></i> User Roles & Auth</p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i> Reports & Analytics</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add more if you’d like! -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->



        <!-- Portfolio Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="portfolio-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Portfolio</p>
                                <h1 class="display-6 text-white mb-0">My Recent Projects</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="portfolio-content h-100 pt-6 ps-6 pb-6">

                            <!-- iConnect SKN -->
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">Ferry Booking System</h4>
                                        <h1 class="display-6 mb-0">iConnect SKN</h1>
                                        <p class="mt-2">A secure online ferry booking system built with Laravel. Users can search schedules, book tickets, and manage bookings with admin control panels and role-based access.</p>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="{{ asset('/assets/img/portfolio-1.jpg') }}" class="img-fluid" alt="iConnect SKN">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="{{ asset('/assets/img/portfolio-1.jpg') }}" class="btn btn-primary btn-lg-square" data-lightbox="portfolio-1"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- LeadDetector -->
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.3s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">Lead Generation</h4>
                                        <h1 class="display-6 mb-0">LeadDetector</h1>
                                        <p class="mt-2">A web app for real estate lead generation using Angular and CodeIgniter 3. Includes a custom CMS, secure user roles, and responsive design for tracking and qualifying leads.</p>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="{{ asset('/assets/img/portfolio-2.jpg') }}" class="img-fluid" alt="LeadDetector">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="{{ asset('/assets/img/portfolio-2.jpg') }}" class="btn btn-primary btn-lg-square" data-lightbox="portfolio-2"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- MinutePages -->
                            <div class="portfolio-item py-5 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">Website Builder</h4>
                                        <h1 class="display-6 mb-0">MinutePages</h1>
                                        <p class="mt-2">A fast website builder for real estate agents. Built with Angular and CodeIgniter 3, it enables agents to create a WordPress site in minutes and manage leads from a simple dashboard.</p>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="{{ asset('/assets/img/portfolio-3.jpg') }}" class="img-fluid" alt="MinutePages">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="{{ asset('/assets/img/portfolio-3.jpg') }}" class="btn btn-primary btn-lg-square" data-lightbox="portfolio-3"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->



        <!-- Blog Start -->
        <!-- <div class="container-fluid" id="pigraBlog">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="blog-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Blog</p>
                                <h1 class="display-6 text-white mb-0">Latest Articles</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="blog-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-xl-6">
                                    <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="row g-4">
                                            <div class="col-4">
                                                <div class="blog-item-img bg-dark h-100">
                                                    <a href="#">
                                                        <img src="{{ asset('/assets/img/blog-1.jpg') }}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="h-100">
                                                    <p class="text-body mb-3"><i class="fa fa-calendar-alt me-2"></i> July 12, 2025</p>
                                                    <a href="#" class="d-inline-block h4 mb-4">Best Practices for Laravel API Development</a>
                                                    <div class="py-2 px-3 bg-light d-flex justify-content-between">
                                                        <p class="mb-0 text-body">By <a href="#" class="h6">Pankaj</a></p>
                                                        <p class="mb-0 text-body">In <a href="#" class="h6">Development</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="row g-4">
                                            <div class="col-4">
                                                <div class="blog-item-img bg-dark h-100">
                                                    <a href="#">
                                                        <img src="{{ asset('/assets/img/blog-2.jpg') }}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="h-100">
                                                    <p class="text-body mb-3"><i class="fa fa-calendar-alt me-2"></i> July 15, 2025</p>
                                                    <a href="#" class="d-inline-block h4 mb-4">How to Secure Your CodeIgniter Application</a>
                                                    <div class="py-2 px-3 bg-light d-flex justify-content-between">
                                                        <p class="mb-0 text-body">By <a href="#" class="h6">Pankaj</a></p>
                                                        <p class="mb-0 text-body">In <a href="#" class="h6">Backend</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="blog-btn d-flex justify-content-center">
                                        <p class="mb-0 me-2">For More Insights Visit</p>
                                        <a href="#" class="btn d-inline-block p-0">My Blog</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog End -->

        <!-- Contact Start -->
        <div class="container-fluid" id="Contact">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="contact-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Contact Me</p>
                                <h1 class="display-6 text-white mb-0">Let’s Start A New Project</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="contact-content h-100 pt-6 ps-6 pb-6">
                            <div class="bg-light p-4">
                                <div class="row g-5">
                                    <div class="col-xl-5 wow fadeInUp" data-wow-delay="0.1s">
                                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                                        <div class="d-flex mb-4">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div>
                                                <h4>Address</h4>
                                                <p class="mb-0">Kalina Shastri nagar chunabhatti santacruz east mumbai-400029</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div>
                                                <h4>Mail Us</h4>
                                                <p class="mb-0">pankajvishwakarma2130@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fa fa-phone-alt"></i>
                                            </div>
                                            <div>
                                                <h4>Telephone</h4>
                                                <p class="mb-0">(+91) 9930913303</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 wow fadeInUp" data-wow-delay="0.3s">
                                        <div>
                                            <form>
                                                <div class="row g-3">
                                                    <div class="col-lg-12 col-xl-6">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                                                            <label for="name">Your Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-xl-6">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control border-0" id="email" placeholder="Your Email">
                                                            <label for="email">Your Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-xl-6">
                                                        <div class="form-floating">
                                                            <input type="phone" class="form-control border-0" id="phone" placeholder="Phone">
                                                            <label for="phone">Your Phone</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-xl-6">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control border-0" id="project" placeholder="Project">
                                                            <label for="project">Your Project</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                                            <label for="subject">Subject</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 120px"></textarea>
                                                            <label for="message">Message</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 py-3">Send Message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="rounded">
                                            <iframe class="rounded w-100"
                                                style="height: 400px;"
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.6428826140975!2d72.86691367413675!3d19.080114582121864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c886f259cd99%3A0x7a7611e99f7d6715!2sShastri%20Nagar%2C%20Kalina%2C%20Santacruz%20East%2C%20Mumbai%2C%20Maharashtra%20400029!5e0!3m2!1sen!2sin!4v1694259649153!5m2!1sen!2sin"
                                                loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade">
                                            </iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid footer bg-dark border-0">
            <div class="container wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="footer-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4 align-items-center">
                                <!-- Social Icons -->
                                <div class="col-12 text-center mb-3">
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-light btn-md-square me-3" href="https://facebook.com/yourprofile" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-light btn-md-square me-3" href="https://twitter.com/yourhandle" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-light btn-md-square me-3" href="https://instagram.com/yourprofile" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-light btn-md-square me-0" href="https://linkedin.com/in/yourprofile" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <!-- Copyright -->
                                <!-- <div class="col-12 text-center">
                                    <span class="text-body">
                                        &copy; 2025 <a href="#" class="border-bottom text-white">Pankaj Vishwakarma</a>. All rights reserved.
                                    </span>
                                </div> -->
                                <!-- Attribution -->
                                <div class="col-12 text-center text-body">
                                    Designed & Developed By <a class="border-bottom text-white" href="" target="_blank">Pankaj Vishwakarma</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->

        <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <!-- <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->


        <!-- Template Javascript -->
        <!-- <script src="js/main.js"></script> -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>