@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'CEO Statement','breadcrumb'=> 'Who We Are/CEO
Statement','header'=>'Who we are/ceo statement.jpg','icon'=>$icon])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div>
                    <p class="about-content">
                        As the CEO of IBDL learning Group, I am proud to be part of an industry that is constantly
                        innovating and pushing boundaries. We are dedicated to providing our customers with cutting-edge
                        solutions that help them stay ahead in the learning industry.
                        <br>
                        Our team works hard every day to develop new technologies and tools that make it easier for
                        people to learn, grow, and succeed.
                        <br>
                        We believe in creating meaningful experiences through latest learning techniques – whether it’s
                        online or offline – so we strive to create products that enable everyone from students to
                        professionals reach their full potential. As technology continues to evolve at a rapid pace, we
                        remain committed to staying on top of trends and adapting our offerings accordingly.
                        <br>
                        At IBDL Learning Group , we are passionate about helping other entities achieving success
                        through knowledge acquisition and growth opportunities; this will always be our mission as long
                        as I'm here leading the charge!
                        <br> <br>
                        Yours sincerely,
                        <br>
                        <b class="ms-3 mt-2"> Khaled Khallaf</b>



                    </p>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection