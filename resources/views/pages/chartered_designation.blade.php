@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'CHARTERED DESIGNATION','breadcrumb'=> 'Home\Chartered
Designation','header'=>$header,'icon'=>$icon])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    <div class="col-12 col-lg-6">
                        <h3 class="mb-4"> EARN YOUR CHARTERED DESIGNATION </h3>
                        <p style="text-align: justify">
                            Chartered Institute of Professional Certification's programs are unique as they provide you
                            with
                            professional charter designation and mark that can be used across your lifetime once your
                            have
                            completed our programs.
                            <br>
                            For example, after you have completed our Certified International Procurement Professional
                            Program,
                            you will be awarded with the CIPP charter mark that can be used to distinguish your
                            professional
                            credentials.
                            <br>
                            Use of our Charter Marks signifies that you have earned the prestigious charter. It is
                            important
                            to
                            use these marks professionally that does not violate our professional conduct. For more
                            details,
                            please refer to the professional usage guide here
                            <br>
                            Globally demanded and recognized, these trademarked credentials can be added to your
                            professional
                            credentials across your CV, LinkedIn profile and other professional standings to demonstrate
                            your
                            expertise in the area
                        </p>
                    </div>
                    <div class="col-12 col-lg-5 offset-lg-1">
                        <div class="m-auto  d-flex flex-column">
                            <img src="../../storage/pages/Essential Certificate-01.jpg" width="100%" class=""
                                height="auto" alt="">
                            <p class="d-flex mt-3 align-items-baseline align-self-center">
                                <b class="me-3 align-self-center" style="color: gray"> Shareable on</b>
                                <a target="_blank" class="d-flex align-items-baseline linked-link"
                                    href="https://www.linkedin.com/in/me">
                                    <b class="me-1" style="font-size:2em;font-weight:700">Linked</b>
                                    <i class="fa-brands fa-linkedin fa-2xl" style="color: #1f2f4d;"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection