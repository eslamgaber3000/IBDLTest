<header class="main-header">
    <nav id="navbar_top" class="navbar navbar-expand-lg main-nav navbar-fixed-top header header--fixed hide-from-print">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="main-brand">
                            <a href="{{ route('home_page') }}">
                                <img src="{{ asset('site/images/logo.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-links">
                            <ul class="list-unstyled no-margin links">
                                <li>
                                    <a href="">
                                        <i class="fa-solid fa-shopping-cart"></i> store
                                    </a>
                                </li>
                                <li>
                                    <a href="">login</a>
                                </li>
                                <li>
                                    <a href="" class="btn btn-outline-dark">register</a>
                                </li>

                                <li>
                                    <a href="{{ route('demo_index') }}" target="_blank">Demo Exam</a>
                                </li>

                            </ul>
                            <div class="dropdown">
                                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    language <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu animated slideIn">
                                    <li>
                                        <a class="dropdown-item" href="#">arabic</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">english</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                <span class="navbar-toggler-icon">
                    <i class="fa-solid fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a class="nav-link" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Who we are <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                            <div class="row menuSpace">
                                <div class="col-sm-6 col-lg-3 border-right mb-4">

                                    <a class="dropdown-item" href="{{ url('pages/' . 'about') }}"> About Us</a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'strategy') }}"> Strategy</a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'ceo') }}"> CEO</a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'leadership') }}"> Leadership </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'board-of-trustees') }}"> Board of
                                        Trustees</a>


                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">

                                    <a class="dropdown-item" href="{{ url('pages/' . 'collaboration') }}">
                                        Collaboration</a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'compendiums') }}"> Compendiums
                                    </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'body-of-knowledge') }}"> Body of
                                        knowledge</a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'ibdl-bok-guide') }}"> IBDL BOK
                                        Guide</a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'careers') }}"> Careers</a>
                                </div>

                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <div class="mega-vector">
                                        <img src="{{ asset('site/images/mega-vector.svg') }}" class="img-fluid mx-auto"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a href="" class="nav-link" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> Membership <i class="fa-solid fa-angle-down"></i></a>
                        <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown02">
                            <div class="row menuSpace">
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <h6>Membership Overview</h6>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'become-member') }}"> Become a
                                        member </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'student-membership') }}"> Student
                                        Membership</a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'local-chapters') }}"> Local
                                        Chapters</a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'membership-faqs') }}"> Membership
                                        FAQs </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'training-centers') }}">
                                        Training
                                        Centers </a>


                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <h6>Community</h6>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'global-community') }}"> Global
                                        Community </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'volunteering') }}">
                                        Volunteering
                                    </a>

                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <h6>Accreditation </h6>
                                    <a class="dropdown-item" href="{{ url('/trainer-form') }}"> Trainers </a>
                                    <a class="dropdown-item" href="{{ url('training-form') }}"> Training center </a>
                                    <a class="dropdown-item" href="{{ url('exam-form') }}"> Exam center </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <div class="mega-vector">
                                        <img src="{{ asset('site/images/mega-vector.svg') }}"
                                            class="img-fluid mx-auto" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a href="" class="nav-link" id="dropdown03" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> Our Services <i
                                class="fa-solid fa-angle-down"></i></a>
                        <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown03">
                            <div class="row menuSpace">
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <h6>Business Solutions Overview</h6>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'become-authorized') }}"> Become
                                        an Authorized Training Partner </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'knowledge-networking') }}">
                                        Knowledge and Networking</a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'talent-management') }}"> Talent
                                        Management</a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'government-activities') }}">
                                        Government Activities and advisory </a>



                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <h6>Learning Business Solutions</h6>
                                    <a class="dropdown-item"
                                        href="{{ url('pages/' . 'solutions-higher-education') }}">
                                        Solutions for Higher Education </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'solutions-governments') }}">
                                        Solutions for Governments </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'solutions-business') }}">
                                        Solutions for business </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'solutions-banks') }}">
                                        Solutions
                                        for Banks </a>
                                    <a class="dropdown-item"
                                        href="{{ url('pages/' . 'solutions-entrepreneurship') }}">
                                        Solutions for Entrepreneurship </a>
                                    <a class="dropdown-item"
                                        href="{{ url('pages/' . 'solutions-learning-development') }}"> Solutions for
                                        Learning and development </a>

                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <h6>Our products </h6>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'certification') }}">
                                        Certification </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'gamification') }}">
                                        Gamification
                                    </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'assessment-evaluation') }}">
                                        Assessment & Evaluation </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'executive-education') }}">
                                        Executive Education </a>

                                </div>
                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <div class="mega-vector">
                                        <img src="{{ asset('site/images/mega-vector.svg') }}"
                                            class="img-fluid mx-auto" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a href="" class="nav-link" id="dropdown03" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> Certifications <i
                                class="fa-solid fa-angle-down"></i></a>
                        <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown04">
                            <div class="row menuSpace">
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <h6>Certification Overview</h6>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'certifications-index') }}">
                                        Certifications index </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'certification-faqs') }}">
                                        Certification FAQs</a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'certification-registry') }}">
                                        Certification Registry</a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'maintain-certification') }}">
                                        Maintain Your Certification </a>



                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <h6>Certifications</h6>
                                    <a class="dropdown-item" href="{{ route('product_details', 1) }}"> business
                                        essentials </a>
                                    <a class="dropdown-item" href="{{ route('product_details', 4) }}"> business
                                        planning </a>
                                    <a class="dropdown-item" href="{{ route('product_details', 2) }}"> business
                                        professional </a>
                                    <a class="dropdown-item" href="{{ route('product_details', 5) }}"> Certified
                                        Educator </a>
                                    <a class="dropdown-item" href="{{ route('product_details', 'CIE') }}">
                                        Certified Industrial Engineer </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'certification') }}"> View all
                                        Certifications </a>

                                </div>

                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <div class="mega-vector">
                                        <img src="{{ asset('site/images/mega-vector.svg') }}"
                                            class="img-fluid mx-auto" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a href="" class="nav-link" id="dropdown05" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> STORIES <i
                                class="fa-solid fa-angle-down"></i></a>
                        <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown05">
                            <div class="row menuSpace">
                                <div class="col-sm-6 col-lg-3 border-right mb-4">

                                    <a class="dropdown-item" href="{{ url('pages/' . 'our-stories') }}"> Our
                                        Stories</a>
                                    <a class="dropdown-item" href="{{ route('all_news') }}"> News</a>
                                    <a class="dropdown-item" href="{{ route('all_events') }}"> Events </a>
                                    <a class="dropdown-item" href="{{ url('pages/' . 'press-media') }}"> Press &Media
                                    </a>
                                </div>


                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <div class="mega-vector">
                                        <img src="{{ asset('site/images/mega-vector.svg') }}"
                                            class="img-fluid mx-auto" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('ContactUs.index') }}" class="nav-link"> CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<header class="mobile-menu">
    <div class="containe">
        <div class="content">
            <div class="menu-btn">
                <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                    aria-controls="offcanvasExample">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>
            <div class="mob-logo">
                <a class="" href="#">
                    <img src="{{ asset('site/images/logo.png') }}" alt="" />
                </a>
            </div>
            <div class="main-search">
                <div class="dropdown">
                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">login</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
