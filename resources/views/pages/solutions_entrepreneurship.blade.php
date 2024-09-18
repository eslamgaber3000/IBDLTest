@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Solutions For Entrepreneurship','breadcrumb'=> 'Our Services/Solutions For
Entrepreneurship','header'=>'Our services/learning solutions.jpg','icon'=>'services.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row learning-solutions-main">
                    <div class="col-lg-11 col-10 offset-1 offset-lg-0 mb-4">

                        <p>
                            By Learning and development solutions IBDL provides entrepreneurs with the tools and
                            resources they need to succeed. These solutions can help entrepreneurs identify their
                            strengths and weaknesses, develop strategies to achieve their goals, and build networks to
                            support their success.
                        </p>
                    </div>

                </div>
                <div class="row learning-solutions-main">
                    <div class="col-lg-5 col-10 offset-1 offset-lg-0 mb-4">
                        <p class="learning-solutions-main-title">
                            Access to the latest trends and strategies:
                        </p>
                        <p>
                            IBDL provides entrepreneurs tools which help them knowing the latest trends and strategies,
                            so they can make informed decisions that will help them stay competitive and maximize their
                            potential. Additionally, IBDL helps them understanding the latest trends in finance,
                            economics, and other business-related areas which help them make better decisions when it
                            comes to investments, budgeting, and pricing.
                        </p>
                    </div>
                    <div class="col-lg-5 col-10 offset-1 offset-lg-1 mb-4">
                        <p class="learning-solutions-main-title">
                            Develop their leadership skills: </p>
                        <p>
                            IBDL provides access to courses and resources that teach entrepreneurs the fundamentals of
                            leadership, such as communication, problem-solving, and decision-making. Also provides
                            entrepreneurs with mentors who can provide advice and guidance. In addition, to the
                            opportunities which build their network, that can lead to new business opportunities and
                            collaborations.
                        </p>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection