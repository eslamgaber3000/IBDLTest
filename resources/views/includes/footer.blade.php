<footer class="main-footer section" id="section12">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-12">
                <div class="footer-logo">
                    <img src="{{ asset('site/images/footer-logo.png') }}" class="img-fluid" alt="logo" />
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="quick-links">
                    <h6 class="footer-heading">Quick Links</h6>
                    <ul class="list-unstyled no-margin">

                        <li><a class="dropdown-item" href="{{ url('pages/' . 'our-stories') }}"> Our Stories</a></li>
                        <li><a class="dropdown-item" href="{{ route('all_news') }}"> News</a></li>
                        <li> <a class="dropdown-item" href="{{ route('all_events') }}"> Events </a></li>
                        <li><a class="dropdown-item" href="{{ url('pages/' . 'press-media') }}"> Press &Media </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="quick-links">
                    <h6 class="footer-heading">Certifications</h6>
                    <ul class="list-unstyled no-margin">
                        <li> <a class="dropdown-item" href="{{ route('product_details', 1) }}"> business essentials
                            </a></li>
                        <li> <a class="dropdown-item" href="{{ route('product_details', 4) }}"> business planning </a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('product_details', 2) }}"> business professional
                            </a></li>
                        <li><a class="dropdown-item" href="{{ route('product_details', 5) }}"> Certified Educator </a>
                        </li>
                        <li> <a class="dropdown-item" href="{{ route('product_details', 'CIE') }}"> Certified
                                Industrial Engineer </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="quick-links">
                    <h6 class="footer-heading">Our Products</h6>
                    <ul class="list-unstyled no-margin">
                        <li><a class="dropdown-item" href="{{ url('pages/' . 'certification') }}"> Certification </a>
                        </li>
                        <li><a class="dropdown-item" href="{{ url('pages/' . 'gamification') }}"> Gamification </a></li>
                        <li><a class="dropdown-item" href="{{ url('pages/' . 'assessment-evaluation') }}"> Assessment &
                                Evaluation </a></li>
                        <li><a class="dropdown-item" href="{{ url('pages/' . 'executive-education') }}"> Executive
                                Education </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div class="quick-links">
                    <h6 class="footer-heading">Membership</h6>
                    <ul class="list-unstyled no-margin">
                        <li><a class="dropdown-item" href="{{ url('pages/' . 'become-member') }}"> Become a member </a>
                        </li>
                        <li><a class="dropdown-item" href="{{ url('pages/' . 'student-membership') }}"> Student
                                Membership</a></li>
                        <li><a class="dropdown-item" href="{{ url('pages/' . 'local-chapters') }}"> Local Chapters</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ url('pages/' . 'membership-faqs') }}"> Membership FAQs </a>
                        </li>
                        <li><a class="dropdown-item" href="{{ url('pages/' . 'training-centers') }}"> Training Centers
                            </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
